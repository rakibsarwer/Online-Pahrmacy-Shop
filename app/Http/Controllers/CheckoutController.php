<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Session;

class CheckoutController extends Controller
{
    //
    public function index(){
        $carts = Cart::getContent();
        $total = Cart::getTotal();
        return view('customer.services.checkout',compact('carts','total'));
    }

    public function store(Request $req){
        if($req->payment == "cash"){


            return dd("Cash Delivary");
        }
        else{
            return dd("Stripe Pay");
        }

    }

    private function validateRequest(){


        return request()->validate([
                'name'=>'required',
                'company_id'=>'required',
                'price'=>'required',
                'quantity'=>'required',
                'stock'=>'required',
                'image'=>'sometimes|file|image|max:5000',
            
            ]);

    }
}
