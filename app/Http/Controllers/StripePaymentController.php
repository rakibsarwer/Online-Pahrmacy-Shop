<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use App\Order;
use App\Shipping_address;
use App\Product_order;
use Stripe;
use App\Transaction;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('customer.services.card-payment');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        
        $order_id = Session::get('order');
        $orders = Order::find($order_id);
            $product_orders = Product_order::where('order_id',$order_id)->get();
            //return dd($product_orders);
            $shipping_addresses = Shipping_address::find($order_id);

    
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Stripe\Charge::create ([
                "amount" => $orders->amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => $orders->order_status,
               
              
        ]);

        $tran_data = [
            'tran_no'=>$charge->balance_transaction,
            'amount'=>$charge->amount,
            'card_name'=>$charge->source->brand,
            'card_no'=>$charge->source->last4,
            'card_cvc'=>$charge->source->cvc_check,
            'card_month'=>$charge->source->exp_month,
            'card_year'=>$charge->source->exp_year,
            'order_id'=>$order_id,
       
            
        ];
        $tran = Transaction::create($tran_data);

        return redirect('order-confirm');
   
      
          
       
    }
}