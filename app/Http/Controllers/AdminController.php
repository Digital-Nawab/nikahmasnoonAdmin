<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){

        $session = session()->all();
        return view('admin.dashboard', $session);
    }


    public function enquiry(){
        $session = session()->all();
//        dd($session);
        // echo '<pre>'; print_r($session);
        return view('admin.dashboard', $session);
    }
}
