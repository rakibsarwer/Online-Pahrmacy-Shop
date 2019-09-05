<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Order;
use App\Shipping_address;
use App\Product_order;
use App\Transaction;
class ConfirmationController extends Controller
{
    //
    public function index(){
        $order_id = Session::get('order');
        $orders = Order::find($order_id);
            $product_orders = Product_order::where('order_id',$order_id)->get();
            //return dd($product_orders);
            $shipping_addresses = Shipping_address::find($order_id);
            $trans = Transaction::find($order_id);
            //$transactions = Transaction::find($order_id);
            return view('customer.services.order-confirm',compact('orders','product_orders','shipping_addresses','trans'));
    }
}
