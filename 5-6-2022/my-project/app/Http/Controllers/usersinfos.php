<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersinfos extends Controller
{
    //

    public function index()
    {
        $users = DB::table('usersinfos')->get();
 
        foreach ($users as $user) {
            echo $user->name .'<br>';
            echo $user->email .'<br>';
            echo $user->address .'<br>';
        }
    }
}
