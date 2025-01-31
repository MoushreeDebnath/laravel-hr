<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Project;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Project::all();
        return view('frontend.home',['data' => $data]);
    }
    public function displayjunior()
    {
        $data = Employee::where('role','junior')->get();
        return view('frontend.junioremployee',['data' => $data]);
    }
    public function displaysenior()
    {
        $data = Employee::where('role','senior')->get();
        return view('frontend.senioremployee',['data' => $data]);
    }
    public function employeeForm()
    {
        return view('frontend.addEmployeeform');
    }
    public function addEmployee(Request $req)
    {
       $validated = $req->validate([
        'fname' => 'required|string|min:3',
        'mname' => 'string|min:5',
        'lname' => 'required|string|min:3',
        'email' => 'required|string',
        'gender' => 'required|string',
        'mangername' => 'required|string|min:3',
        'designation' => 'required|string',
        'role' => 'required|string',
        'skills'=>'required',
        'fixedsalary'=> 'required|string'
       ]);
       Employee::create($validated);
       return redirect()->back()->with('success','Employee Added Succesfully');
    }
}
