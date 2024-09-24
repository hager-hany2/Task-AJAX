<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SaveProductInfoServices;
use App\Http\Requests\AddProductFromRequest;
use App\Models\Categories;
use App\Models\Questions;
use Illuminate\Http\Request;

class ProductControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProductFromRequest $request)
    {
        //save product into database with  AJAX
        $data = $request->validated();

        $product = SaveProductInfoServices::save($data);

        return redirect()->back()->with('success', 'Add product success');
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
