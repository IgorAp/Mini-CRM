<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Storage;
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
       return redirect('companies');
    }
    public function edit($id){
        $company = Company::find($id);
        return view('company.edit',["company"=>$company]);
    }
    public function update($id,Request $request){
        if($request->image == null){
            Company::find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'website'=>$request->website
            ]);
        }
        else{
            Storage::delete(Company::find($id)->logo);
            $logo = $request->image->store('logos');
            Company::find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'website'=>$request->website,
                'logo'=>$logo,
            ]);
        }
        return redirect('companies');
    }
    public function destroy($id){
        Storage::delete(Company::find($id)->logo);
        Company::find($id)->delete();
        return redirect('companies');
    }
    public function getImageLogo($id){
        $filename = Company::find($id)->logo;
        return response()->download(storage_path('app/public/' . $filename));
    }
}
