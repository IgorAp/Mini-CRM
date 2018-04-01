<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class CompanyController extends Controller
{
    public function index(){
        $companies = Company::paginate(3);
        return view('company.index',['companies'=>$companies]);
    }
    public function create(){
        return view('company.create');
    }
    public function store(Request $request){
        $this->validate($request,Company::rules());
        $logo = $request->image->store('logos');
        Company::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'website'=>$request->website,
            'logo'=>$logo,
        ]);
        return view ('company.index');
    }
    public function edit($id){
        
    }
    public function update($id){

    }
    public function destroy($id){
        Company::find($id)->delete();
        return view('company.index');
    }
    public function getImageLogo($id){
        $filename = Company::find($id)->logo;
        return response()->download(storage_path('app/public/' . $filename));
    }
}
