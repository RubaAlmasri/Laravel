<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class validation extends Controller
{
     // public function create()
    // {
    //    return view('crud');
    // }
    public function index()
    {
        $data=employee::all();
        return view('5-6\crud');
    }

    public function valid(Request $request)
    {
       $data = $request->validate([
           'name' => 'required',
           'email' => 'required|unique:employee|max:255',
           'phone' => 'required|unique:employee|min:10|regex:/^([0-9\s\-\+\(\)}*)$/',
           'address' => 'required'
       ]);

       $employee = employee::create($request->all());//save all inputs
       return redirect('register.index')->with('success','user added successfully');
    }

}

