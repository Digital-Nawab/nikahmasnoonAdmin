<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $package  = Package::get();
        //  echo '<pre>'; print_r($package );exit;
        return view('packages.package', compact('package') );
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
        $post = $request->all();
        //Validation Request 
       $request->validate([
            'package_title'     => 'required|string|max:255|unique:packages,package_title',
            'package_price'     => 'required|numeric',
            'limit_condidate'   => 'required|integer',
            'validity_days'     => 'required|integer',
            'description'       => 'required|string',
       ]);

        Package::create($post);

        return redirect()->back()->with('success', 'Package created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
