<?php

namespace App\Http\Controllers;

use App\Models\Cosmetologist;
use Illuminate\Http\Request;

class CosmetologistApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return response(Cosmetologist::limit($request->perpage ?? 5) -> offset(($request->perpage ?? 5)
        * ($request->page ?? 0)) -> get());
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
        return response(Cosmetologist::find($id));
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

    public function total()
    {
        return response(Cosmetologist::all()->count());
    }
}
