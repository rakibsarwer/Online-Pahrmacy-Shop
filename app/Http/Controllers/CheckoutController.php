<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Session;
use App\Order;
use App\Shipping_address;
use App\Product_order;
class CheckoutController extends Controller
{
    //
    public function index(){
        $carts = Cart::getContent();
        $total = Cart::getTotal();
        return view('customer.services.checkout',compact('carts','total'));
    }

    public function store(Request $req){

        if($req->shipping_method == 'shipping'){
            $shipping_address = 'shipping';
        }
        else{
            $shipping_address = 'billing';
        }

        if(!Auth::user()){
            $user=0;
        }else{
            $user = Auth::user()->id;
        }

        $rand = rand();
        $order_no = '#'.$rand;
        $amount = Cart::getTotal()+$req->tax+$req->shipping_charge;
        // $req->validate([
        //     'name'=>'required',
        //     'price'=>'required',
        //     'quantity'=>'required',
        //     'stock'=>'required',
        //     'details'=>'required',
        //     'company_id'=>'required',
        //     'category_id'=>'required',
        //     'image'=>'sometimes|file|image|max:5000',
        // ]);

        $order_data = array(
            'order_no'=> $order_no,
            'user_id'=>$user,
            'payment_method'=>$req->payment,
            'shipping_method'=>$shipping_address,
            'charge'=>$req->shipping_charge,
            'tax'=>$req->tax,
            'amount'=>$amount,
            'order_status'=>'success',
            
           );
         $order= Order::create($order_data);
         $order_id = $order->id;
         Session::put('order_no',$order_no);

         $carts =  Cart::getContent();
         foreach($carts as $cart){
  
            $order_product_data=[
                'order_id'=>$order_id,
                'name'=>$cart->name,
                'price'=>$cart->price*$cart->quantity,
                'quantity'=>$cart->quantity,
                'product_id'=>$cart->id,
                'image'=>$cart->attributes->image,
            
             ];
             $order_products = Product_order::create($order_product_data);
         }
                                   
            
   

         if($shipping_address == 'shipping'){
             $shipping_data = [
                 'order_id'=>$order_id,
                 'name'=>$req->name,
                 'phone'=>$req->phone,
                 'email'=>$req->email,
                 'country'=>$req->country,
                 'address'=>$req->address,
                 'city'=>$req->city,
                 'town'=>$req->town,
                 'postcode'=>$req->postcode,
                 
             ];
             $shipping = Shipping_address::create($shipping_data);
         }else{
             dd('use billing address');
         }


        if($req->payment == "cash"){
            Cart::clear();
            Session::put('order',$order_id);
            return redirect('order-confirm');
        }
        else{
            Session::put('order',$order_id);
            return redirect('stripe');
        }

    }

    
}
