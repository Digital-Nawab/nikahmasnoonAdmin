<?php

namespace App\Http\Controllers;

use App\Models\Employeed;
use Illuminate\Http\Request;

class EmployeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Employeed()
    {
        $data = Employeed::get();
        return view('admin.tools.employeed', compact('data'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Employeed $employeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employeed $employeed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employeed $employeed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employeed $employeed)
    {
        //
    }
}
