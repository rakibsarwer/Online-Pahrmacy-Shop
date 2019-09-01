<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Company;
use App\Category;
class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.products.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $product = new Product();
        $companies = Company::all();
        $categories = Category::all();

        return view('admin.products.create',compact('companies','categories','product'));
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
        // $this->authorize('create', Product::class);
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'stock'=>'required',
            'details'=>'required',
            'company_id'=>'required',
            'category_id'=>'required',
            'image'=>'sometimes|file|image|max:5000',
        ]);
        
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

       $form_data = array(
        'name'=> $request->name,
        'price'=>$request->price,
        'quantity'=>$request->quantity,
        'stock'=>$request->stock,
        'details'=>$request->details,
        'company_id'=>$request->company_id,
        'category_id'=>$request->category_id,
        'image'=> $new_name,
       );
        Product::create($form_data);
        
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
     
        return view('admin.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $companies = Company::all();
        $categories = Category::all();
      
        return view('admin.products.edit',compact('companies','categories','product'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin/products');
        //
    }

 

   
}
