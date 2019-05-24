<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\type_product;
use Session;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use App\Mail\SendEmailMailable;
use App\Comment;
use App\Slide;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::where('status', '1')->get();
        $product = Products::where([
            ['new', '1'],
            ['status', '1'],
        ])->get();
        return view('page.HomePage', ['slide' => $slide, 'product' => $product]);
    }

    public function shop(Request $request){
        $product_perPage = 9;
        $products  = Products::where([
            ['new', '1'],
            ['status', '1']
        ])->get();
        $num_pro = $products->count();
        $total_page = ceil($num_pro/$product_perPage);
        $type = type_product::select('id', 'name')->get();
        return view('page.Shop', ['total_page' => $total_page
            , 'type' => $type
        ]);
    }

    public function dataAjax(Request $request){
        $product_perPage = 9;
        if(isset($request->page)){
            $page = $request->page;
        }else{
            $page = 1;
        }
        $from = ($page -1)*$product_perPage;
        $products_perPage = Products::where([
            ['new', '1'],
            ['status', '1']
        ])->offset($from)->limit($product_perPage)->get();
        return view('DataAjax.DataProduct', ['products' => $products_perPage]);
    }

    public function fetchData(Request $request){
        if(isset($request->action)){
            $products = Products::where([
                ['new', '1'],
                ['status', '1']
            ]);
            if(isset($request->minimum_price, $request->maximum_price)
                && !empty($request->minimum_price) && !empty($request->maximum_price)
            ){
                $products = $products->whereBetween('unit_price', [$request->minimum_price, $request->maximum_price]);
        }
        if(isset($request->search)){
            $products = $products->where('name', 'like', '%'.$request->search.'%');
        }
        if(isset($request->sort)){
            if($request->sort == 'ASC'){
                $products = $products->orderBy('unit_price', 'ASC');
            }else if($request->sort == 'DESC'){
                $products = $products->orderBy('unit_price', 'DESC');
            }
        }
        $products = $products->offset(0)->limit(9)->get();
    }else if(isset($request->id_type)){
        $products = Products::select('products.id', 'products.name', 'unit_price', 'promotion'
            , 'products.image as image', 'unit', 'new', 'type_product.name as type', 'type_product.id as id'
        )->join('type_product', 'products.id_type', '=', 'type_product.id' )->where('new', '1');
        $products = $products->where('products.id_type', ''.$request->id_type.'')->get();
    }else{
        $products = [];
    }
    return view('DataAjax.DataProduct', ['products' => $products]);
}

public function getAddToCart(Request $request){
    $product = Products::find($request->id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);
    $request->session()->put('cart', $cart);
    return view('DataAjax.DataCart', ['products'=>$cart->items, 'totalPrice' => $cart->totalPrice]);
}

public function AddManyCart(Request $request){
    $product = Products::find($request->id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add_more($product, $product->id, $request->qty);
    $request->session()->put('cart', $cart);
    return view('DataAjax.DataCart', ['products'=>$cart->items, 'totalPrice' => $cart->totalPrice]);
}

public function removeOne(Request $request){
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->removeOne($request->id);
    if($cart->totalPrice > 0){

        Session::put('cart', $cart);
    }else{
        Session::forget('cart');
    }
        // dd(Session::get('cart'));
    return view('DataAjax.DataCart', ['products'=>$cart->items, 'totalPrice' => $cart->totalPrice]);
}

public function getCheckout(){
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $total = $cart->totalPrice;
    return view('page.Checkout', ['totalPrice' => $total, 'products' => $cart->items]);
}

public function postCheckout(Request $request){
    $email = $request->email;
    $to_name = $request->name;
    $cart = Session::get('cart');
    $customer = new Customer();
    $customer->name = $request->name;
    $customer->gender = $request->gender;
    $customer->email = $request->email;
    $customer->address = $request->address;
    $customer->phone_number = $request->phone_number;
    $customer->note = $request->note;
    $customer->save();

    $bill = new Bill();
    $bill->id_customer = $customer->id;
    $bill->date_order = date('Y-m-d');
    $bill->total = $cart->totalPrice;
    $bill->note = $request->note;
    $bill->save();

    foreach($cart->items as $key => $value){
        $bill_detail = new BillDetail();
        $bill_detail->id_product = $key;
        $bill_detail->id_bill = $bill->id;
        $bill_detail->quantity = $value['qty'];
        if($value['promotion'] == 0){
            $bill_detail->unit_price = $value['unit_price']/$value['qty'];
            $bill_detail->promotion = 0;
        }else{
            $bill_detail->unit_price = $value['item']['unit_price'];
            $bill_detail->promotion = $value['promotion']/$value['qty'];
        }
        $bill_detail->save();
    }
    Session::forget('cart');
    $query_billDetail = BillDetail::join('bills', 'bill_detail.id_bill', '=', 'bills.id')
    ->join('products', 'products.id', '=', 'bill_detail.id_product')->where('bill_detail.id_bill', '=' ,$bill->id)->get()
    ;
    $billEmail = Bill::findOrFail($bill->id);

    $customerEmail = Customer::findOrFail($customer->id);
        //---------------------------------------------------
    $when = now()->addSeconds(5);
    Mail::to($request->email)
    ->later($when, new SendEmailMailable($billEmail, $customerEmail));
        //--------------------------------------------------
    return redirect()->route('getCheckout')->with('success', "Your order successed");
}

public function productDetail($id){
    $product = Products::where('id', $id)->first();
    $commentPerPage = 3;
    $numComment = Comment::all()->count();
    $page = ceil($numComment/$commentPerPage);
    $relateProduct = Products::where('id_type', $product->id_type)->get();
    return view('page.ProductDetail', ['product' => $product, 'relateProduct' => $relateProduct, 'numComment' => $numComment, 'page' => $page]);
}

public function addComment(Request $request){
    $error = '';
    $comment_name = '';
    $comment_content = '';
    if($request->comment_name == ''){
        $error .= '<p class="text-danger">Name is required</p>';
    }else{
        $comment_name = $request->comment_name;
    }

    if($request->comment_content == ''){
        $error .= '<p class="text-danger">Content is required</p>';
    }else{
        $comment_content = $request->comment_content;
    }

    if($error == ''){
        $comment = new Comment();
        $comment->parent_comment_id = $request->comment_id;
        $comment->comment = $request->comment_content;
        $comment->comment_sender_name = $request->comment_name;
        $comment->date = date('Y-m-d');
        $comment->save();
        $error = '<label class="text-success">Comment Added</label>';
    }

    $data = array(
        'error' => $error
    );
    echo json_encode($data);
}

public function fetchComment(Request $request){
    if($request->page){
        $page = $request->page;
    }else{
        $page = 1;
    }
    $commentPerPage = 3;
    $from = ($page-1)*$commentPerPage;
    $numComment = Comment::all()->count();
    $page = ceil($numComment/$commentPerPage);
    $comment = Comment::where('parent_comment_id', '0')->offset($from)->limit($commentPerPage)->orderBy('id', 'desc')->get();
    $reply = Comment::all();
    return view('DataAjax.DataComment', ['comment' => $comment, 'page' => $page, 'reply' => $reply]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
