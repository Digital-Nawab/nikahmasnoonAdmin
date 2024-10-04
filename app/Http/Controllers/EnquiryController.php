<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Enquiry::where('is_active', 1)->get();
        //
        // echo '<pre>';print_r($data);exit;
        return view('admin.enquiry', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $post = $request->all();
        //Validation Request 
       $request->validate([
            'name'     => 'required|string|max:255',
            'email'     => 'required|string',
            'mobile'   => 'required|string',
            'message'     => 'required|string',
       ]);

       Enquiry::create($post);

        return redirect()->back()->with('success', 'Package created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
