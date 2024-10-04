<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    //

    public function contact(Request $request)
    {
        // Define and sanitize the validation rules
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:55',
            'last_name' => 'required|string|max:55',
            'email' => 'required|email',
            'mobile' => 'required|string|min:10|max:13',
            'message' => 'required|string',
        ]);
    
        // Prepare the data to be saved, sanitize the inputs
        $post = [
            'name' => trim(strip_tags($validatedData['first_name'])).' '.trim(strip_tags($validatedData['last_name'])),
            'email' => trim(strip_tags($validatedData['email'])),
            'mobile' => trim(strip_tags($validatedData['mobile'])),
            'message' => trim(strip_tags($validatedData['message'])),
        ];
    
        // Create a new enquiry
        try {
            Enquiry::create($post);
            return response()->json([
                'success' => true,
                'message' => 'Enquiry created successfully'
            ], 200);
        } catch (\Exception $e) {
            // Catch any errors (like DB connection issues) and return a server error
            return response()->json([
                'success' => false,
                'message' => 'Failed to create enquiry, please try again later.'
            ], 500);
        }
    }


    public function All_Contact(){
        $data = Enquiry::where('is_active', 1)->get();
        return response()->json($data);
    }
}
