<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
class CartController extends Controller
{
    //

    public function cart(){
        $product =Product::all();
        $carts =  Cart::getContent();
        $total = Cart::getTotal();
        $subtotal = Cart::getSubTotal();
        //Cart::clear();

        
        return view('customer.services.cart',compact('carts','total','subtotal'));
    }
    public function add($id){
        $product = Product::find($id);
        $add = Cart::add([
            'id' => $product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'quantity'=>'1',
            'attributes' => array(
                'image' => $product->image,
              )
        ]);

        if($add){
            return back()->with('Success!','New Item Added to Cart');
        }
    }

    public function remove($id){
        Cart::remove($id);
        return back();
    }

    public function update(Request $req){
       
        Cart::update(
            $req->id,
            array(
            'quantity'=>array(
                'relative' => false,
                'value' => $req->quantity,
            ), 
            )
            
        );
        return back();
        

    }
}
 