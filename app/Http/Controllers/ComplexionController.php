<?php

namespace App\Http\Controllers;

use App\Models\Complexion;
use Illuminate\Http\Request;

class ComplexionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'title'            => 'required|string',
       ]);

       Complexion::create($post);

        return redirect()->back()->with('success', 'Complexion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Complexion $complexion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complexion $complexion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complexion $complexion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complexion $complexion)
    {
        //
    }
}
