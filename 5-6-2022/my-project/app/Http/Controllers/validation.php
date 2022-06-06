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
        $data = employee::all();
        return view('5-6/register', compact('data'));
    }

    public function store(Request $request)
    {
       $data = $request->validate([
           'name' => 'required',
           'email' => 'required|unique:employees|max:255',
           'phone' => 'required|unique:employees|min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
           'address' => 'required'
       ]);

       $employee = employee::create($request->all());//save all inputs
       return redirect()->route('crud.index')->with('success','User added successfully');
    }

}

