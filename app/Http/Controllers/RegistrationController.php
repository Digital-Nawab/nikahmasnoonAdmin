<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('user.user_list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $id = null)
    {
        if ($request->isMethod('post')){

            echo '<pre>';print_r();exit;
            $post= $request->all();
            $validation = array(
                'name' => 'required',
                'email'> 'required',
                'phone' => 'required',
                'address' => 'required',
            );
        }
        return view('user.user-registration');
    }


    public function destroy(Registration $registration)
    {
        //
    }
}
