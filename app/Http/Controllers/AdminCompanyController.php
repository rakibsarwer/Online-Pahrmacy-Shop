<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class AdminCompanyController extends Controller
{
    //

    public function index(){
        $companies = Company::all();
        return view('admin.categories.company',compact('companies'));
    }

    public function store(){
        $data = request()->validate([
            'name'=>'required',
            'details'=>'required'
        ]);
        Company::create($data);
        return redirect ('/admin/companies');
    }
    public function destroy(Company $company){
        
        $company->delete();
        return redirect('/admin/companies');
    }
}
