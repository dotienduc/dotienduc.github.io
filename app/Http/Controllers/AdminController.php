<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\DB; 
use Session;
use App\Slide;
use Illuminate\Support\Facades\Auth;
use App\type_product;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\AdminCrud;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('Admin.index');
    }

    //Start Products
    public function getProducts(){
        $products = Products::where('new', '1')->get();
        $category = type_product::get();
        return view('Admin.Product.Products', ['products' => $products, 'category' => $category]);
    }
    public function addProduct(){
        $category = DB::table('type_product')->get();
        return view('Admin.Product.AddProduct', ['category' => $category]);
    }
    public function storeProduct(Request $request){
        $file = $request->image;
        $p = new Products();
        $request->name= DB::connection()->getPdo()->quote(utf8_encode($request->name));
        $p->name = $request->name;
        $p->id_type = $request->category_id;
        $request->description= DB::connection()->getPdo()->quote(utf8_encode($request->description));
        $p->description = $request->description;
        $p->unit_price = $request->unit_price;
        $p->promotion= $request->promotion_price;
        $p->image = $file->getClientOriginalName();
        $file->move('img/product', $file->getClientOriginalName());
        $request->unit= DB::connection()->getPdo()->quote(utf8_encode($request->unit));
        $p->unit = $request->unit;
        $p->new = $request->new;
        $p->status = $request->status;
        $p->save();

        Session::flash('success', 'Create new product');
        return redirect('admin/products');
    }
    public function editProduct($id){
        $product = Products::findOrFail($id);
        $category = DB::table('type_product')->get();
        return view('Admin.Product.EditProduct', ['product' => $product, 'category' => $category]);
    }
    public function updateProduct(Request $request, $id){
        $file = $request->image;
        $p = Products::findOrFail($id);
        $p->name = $request->name;
        $p->id_type = $request->category_id;
        $p->description = $request->description;
        $p->unit_price = $request->unit_price;
        $p->promotion= $request->promotion_price;
        $p->image = $file->getClientOriginalName();
        $file->move('img/product', $file->getClientOriginalName());
        $p->unit = $request->unit;
        $p->new = $request->new;
        $p->status = $request->status;
        $p->save();

        Session::flash('success', 'Updated success product');
        return redirect('admin/products');
    }
    public function deleteProduct($id){
        $p = Products::findOrFail($id);
        $p->delete();
        Session::flash('error', 'Deleted new product');
        return redirect('admin/products');
    }

    public function load_data(Request $request){
        $query = $request->get('query');
        if($query!= null){
            $search_array = array_map('intval', explode(',', $query));
            $products = Products::whereIn('id_type', $search_array)->get();
            return view('Admin.Product.LoadData', ['products' =>$products]);
        }else{
            $products = Products::where('new', '1')->get();
            return view('Admin.Product.LoadData', ['products' =>$products]);
        }
    }
    //Create PDF
    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_product_data_to_html());
        return $pdf->stream();
    }
    function convert_product_data_to_html(){
        $product = Products::join('type_product', 'products.id_type', '=', 'type_product.id')->select('products.*', 'type_product.name as category')->where([
            ['new', '1'],
            ['status', '1'],
        ])->get();
        $output = '
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
        </head>
        <body>
        <h3 align="center">Customer Data</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
        <th style="border: 1px solid; padding:12px;" width="20%">Name Products</th>
        <th style="border: 1px solid; padding:12px;" width="30%">Category</th>
        <th style="border: 1px solid; padding:12px;" width="15%">Unit_price</th>
        <th style="border: 1px solid; padding:12px;" width="15%">Promotion Price</th>
        </tr>
        ';  
        foreach($product as $key => $items){
            $output .= '
            <tr>
            <td style="border: 1px solid; padding:12px;">'.$items->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$items->category.'</td>
            <td style="border: 1px solid; padding:12px;">'.number_format($items->unit_price).' VND</td>
            <td style="border: 1px solid; padding:12px;">'.number_format($items->promotion).' VND</td>
            </tr>
            ';
        }
        $output .= '</table></body>';
        return $output;
    }

    function excel(){
        $product = Products::join('type_product', 'products.id_type', '=', 'type_product.id')->select('products.*', 'type_product.name as category')->where([
            ['new', '1'],
            ['status', '1'],
        ])->get();
     $customer_array[] = array('Product Name', 'Category', 'Unit_price', 'Promotion');
     foreach($product as $customer)
     {
      $customer_array[] = array(
       'Product Name'  => $customer->name,
       'Category'   => $customer->category,
       'Unit_price'    => $customer->unit_price,
       'Promotion'  => $customer->promotion,
      );
     }
     Excel::create('Customer Data', function($excel) use ($customer_array){
      $excel->setTitle('Customer Data');
      $excel->sheet('Customer Data', function($sheet) use ($customer_array){
       $sheet->fromArray($customer_array, null, 'A1', false, false);
      });
     })->download('xlsx');

    }

    //End Products

    //Start Slide
    public function getSlide(){
        $slide = Slide::get();
        return view('Admin.Slide.indexSilde', ['slide' => $slide]);
    }
    public function addSlide(){
        return view('Admin.Slide.AddSlide');
    }
    public function storeSlide(Request $request){
        $file = $request->image;
        $s = new Slide();
        $s->name = $request->name;
        $s->image = $file->getClientOriginalName();
        $file->move('img/product', $file->getClientOriginalName());
        $s->status = $request->status;
        $s->save();
        Session::flash('success', 'Create new slide');
        return redirect('admin/slides');
    }
    public function editSlide($id){
        $slide = Slide::findOrFail($id);
        return view('Admin.Slide.EditSlide', ['slide' => $slide]);
    }
    public function updateSlide(Request $request, $id){
        $slide = Slide::findOrFail($id);
        $file = $request->image;
        $slide->name = $request->name;
        $slide->image = $file->getClientOriginalName();
        $file->move('img/product', $file->getClientOriginalName());
        $slide->status = $request->status;
        $slide->save();
        Session::flash('success', 'Updated new slide');
        return redirect('admin/slides');
    }
    public function deleteSlide($id){
        $slide = Slide::findOrFail($id);
        $slide->delete();
        Session::flash('error', 'Deleted new slide');
        return redirect('admin/slides');
    }

    public function login(){
        return view('Admin.login');
    }
    public function actionLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->intended('admin/index');
        }else{
            return redirect()->route('AuthLogin');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('admin/AuthLogin'); 
    }
    //End Slide

    //Admin
    public function index(){
        if(request()->ajax())
        {
            return datatables()->of(AdminCrud::latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('Admin.admin_ajax');
    }

    //Chart
    public function chartBill(){
        $product = DB::table('customer')->select(DB::raw('count(*) as Tong'), DB::raw("MONTH(created_at) as month"))
                ->groupBy(DB::raw("MONTH(created_at)"))->get();
        return response()->json(['data' => $product->all()]);
    }

    //End Chart
    //End Admin
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
        $rules = array(
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'image'         =>  'required|image|max:2048',
            'password'      => 'required',
            'email'         => 'email|required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('admin/assets/demo/avatar'), $new_name);

        $form_data = array(
            'firstName' => $request->first_name,
            'lassName' => $request->last_name,
            'image' => $new_name,
            'password' => $request->password,
            'email' => $request->email,
            'role' => $request->role
        );
        AdminCrud::create($form_data);
        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax()){
            $data = AdminCrud::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $new_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
            $rules = array(
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'image'         =>  'required|image|max:2048',
                'password'      => 'required',
                'email'         => 'email|required'
            );

            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/assets/demo/avatar'), $new_name);

        }else{
            $rules = array(
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'password'      => 'required',
                'email'         => 'email|required'
            );

            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }

        $form_data = array(
            'firstName' => $request->first_name,
            'lassName' => $request->last_name,
            'image' => $new_name,
            'password' => $request->password,
            'email' => $request->email,
            'role' => $request->role
        );
        AdminCrud::whereId($request->hidden_id)->update($form_data);
        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AdminCrud::findOrFail($id);
        $data->delete();
    }
}
