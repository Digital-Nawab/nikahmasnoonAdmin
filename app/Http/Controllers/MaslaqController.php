<?php

namespace App\Http\Controllers;

use App\Models\Maslaq;
use Illuminate\Http\Request;

class MaslaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Maslaq()
    {
       $data = Maslaq::where('is_active', '1')->get();
       return view('admin.tools.maslaq', compact('data'));
    }

    
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Maslaq $maslaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maslaq $maslaq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maslaq $maslaq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maslaq $maslaq)
    {
        //
    }
}
