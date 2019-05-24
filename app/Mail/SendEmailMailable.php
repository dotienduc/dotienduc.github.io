<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Bill;
use App\BillDetail;
use App\Products;
use App\Customer;
use Illuminate\Support\Facades\DB;

class SendEmailMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $bill;
    protected $customer;

    public function __construct(Bill $bill, Customer $customer)
    {
        $this->bill = $bill;
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $query_billDetail = DB::table('bill_detail')->join('bills', 'bills.id', '=', 'bill_detail.id_bill')
        ->join('products', 'bill_detail.id_product', '=', 'products.id')
        ->where('bill_detail.id_bill', '=', $this->bill->id)->get();
        return $this->view('testmail')->with([
            'id_bill' => $this->bill->id,
            'query_billDetail' => $query_billDetail,
            'customerName' => $this->customer->name,
            'customerGender' => $this->customer->gender,
            'customerEmail' => $this->customer->email,
            'customerAddress' => $this->customer->address,
            'customerPhone' => $this->customer->phone_number,
            'customerNote' => $this->customer->note
        ]);
    }
}
