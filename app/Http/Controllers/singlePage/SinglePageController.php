<?php

// namespace App\Http\Controllers\singlePage;
namespace App\Http\Controllers\SinglePage;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        // Retrieve the data for the specific case using the provided $id
        $case = Cases::findOrFail($id);

        // Pass the case data to the view
        return view('singlePage.singlePage', compact('case'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
