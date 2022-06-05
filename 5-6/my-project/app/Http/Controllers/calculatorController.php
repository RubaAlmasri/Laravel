<?php

namespace App\Http\Controllers;

use App\Models\master;
use App\Http\Requests\StoremasterRequest;
use App\Http\Requests\UpdatemasterRequest;

class calculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculator()
    {
        $FirstNumber = request('num1');
        $SecondNumber = request('num2');
        $operator = request('operator');
        $result = 0;
        switch ($operator) {
            case "Sum":
                $result = $FirstNumber + $SecondNumber;
                break;
            case "Subtraction":
                $result = $FirstNumber - $SecondNumber;
                break;
            case "Multiplication":
                $result = $FirstNumber * $SecondNumber;
                break;
            case "Division":
                if ($SecondNumber != 0) {
                    $result = $FirstNumber / $SecondNumber;
                } else {
                    $result = 'Division by zero';
                }
        }

        return view('2june/calculator', ['answer' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
