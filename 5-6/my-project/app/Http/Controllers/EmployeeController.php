<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $data = employee::all();
        return view('5-6/crud', compact('data'));
    }

    public function destroy($id)
    {
        $user = employee::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }


    public function edit($id)
    {
        $data = employee::find($id);
        return view('5-6/edit', compact('data'));
    }

    public function update(Request $request, employee $user)
    {
        $user->exists = true;
        $user->id = $request->post('id');
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->phone = $request->post('phone');
        $user->address = $request->post('address');
        $user->save();

        return redirect()->route('crud.index')->with('status', 'Updated Successfully');
    }
}
