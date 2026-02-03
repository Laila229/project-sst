<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies=Company::orderBy('created_at','desc')->get();
        return view('super_admin.index',compact('companies'));
    }

    public function create(){
        return view('super_admin.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'owner_name'=>'required',
            'phone'=>'required',
            'start_date'=>'required|date',
            'end_date'=>'required|date|after:start_date',
        ]);
        Company::create($request->all());
        return redirect()->route('super_admin.companies.index')->with('success','Add is Done');
    }

    public function edit(Company $company){
        return view('super_admin.edit',compact('company'));
    }

    public function update(Request $request, company $company){
        $request->validate([
            'name'=>'required',
            'owner_name'=>'required',
            'phone'=>'required',
            'end_date'=>'required|date',
        ]);
        $company->update($request->all());
        return redirect()->route('super_admin.companies.index')->with('success','updated Done');
    }

    public function toggleStatus(Company $company){
        $company->is_active = !$company->is_active;
        $company->save();
        return back();
    }
}


