<?php

namespace App\Http\Controllers;

use App\Models\master;
use App\Http\Requests\StoremasterRequest;
use App\Http\Requests\UpdatemasterRequest;

class loginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginpage()
    {
        return view('2june/login',['name'=>'Hello']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremasterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremasterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemasterRequest  $request
     * @param  \App\Models\master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemasterRequest $request, master $master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(master $master)
    {
        //
    }
}
