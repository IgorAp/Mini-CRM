<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;
class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::paginate(10);
        return view('employee.index',['employees'=>$employees]);
    }
    public function select(){
         $companies = Company::paginate(10);
         return view('employee.select',['companies'=>$companies]);
    }
    public function create($id){
        return view('employee.create',['id'=>$id]);
    }
    public function store(Request $request,$id){
        $this->validate($request,Employee::rules());
        Employee::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'company'=>$id
        ]);
        return redirect ('employees');
    }
    public function destroy($id){
        Employee::find($id)->delete();
        return redirect('employees');
    }
    public function edit($id){
        $employee = Employee::find($id);
        return view('employee.edit',['employee'=>$employee]);
    }
    public function update(Request $request,$id){
        $employee = Employee::find($id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        return redirect('employees');
    }

}
