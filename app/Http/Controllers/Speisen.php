<?php

namespace App\Http\Controllers;

use App\Models\User;

class Speisen extends Controller
{


    function index()
    {



        //$user = new User;
        //$user = User::find(1);
        $user = User::firstOrCreate();

        $user->IP = $_SERVER['REMOTE_ADDR'];
        $user->name = 'John ' . rand(1, 100);
        $user->email = 'John' . rand(1, 100);
        $user->updated_at = date("Y-m-d H:i:s");
        $user->password = '1234';

        $user->save();



        return view('speisen', [
            "wert" => 5 * 7,
            //"wert2" => json_encode($out),
            "users" => User::all()
        ]);
    }
}
