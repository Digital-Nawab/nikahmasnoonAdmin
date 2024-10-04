<?php

namespace App\Http\Controllers;

use App\Models\Caste;
use Illuminate\Http\Request;

class CasteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Caste()
    {
       $caste = Caste::where('is_active', '1')->get();
       return view('admin.tools.caste', compact('caste'));
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
       
         //request Handle all data
         $post = $request->all();
         //Validation Request 
        $request->validate([
             'title'            => 'required|string',
        ]);

        //Data insert
        Caste::create($post);
        return redirect()->back()->with('success', 'Caste created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Caste $caste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caste $caste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Caste $caste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caste $caste)
    {
        //
    }
}
