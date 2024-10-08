<?php

namespace App\Http\Controllers;

use App\Models\MaritalStatus;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function MaritalStatus()
    {
        $data = MaritalStatus::where('is_active','1')->get();
        return view('admin.tools.marital-status', compact('data'));
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
         //request Handle all data
         $post = $request->all();
         //Validation Request 
        $request->validate([
             'title'            => 'required|string',
        ]);

        //Data insert
        MaritalStatus::create($post);
        return redirect()->back()->with('success', 'Marital Status created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MaritalStatus $maritalStatus)
    {
        //
    }
}
