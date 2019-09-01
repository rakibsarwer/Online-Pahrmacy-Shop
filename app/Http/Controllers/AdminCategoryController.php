<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class AdminCategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.categories.list',compact('categories'));
    }

    public function store(){
        $data = request()->validate([
            'name'=>'required'
            
        ]);
        Category::create($data);
        return redirect ('/admin/categories');
    }
    public function destroy(Category $category){
        
        $category->delete();
        return redirect('/admin/categories');
    }
}
