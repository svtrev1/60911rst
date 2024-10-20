<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientApiController extends Controller
{
    public function index(Request $request)
    {
        return response(Client::limit($request->perpage ?? 5) -> offset(($request->perpage ?? 5)
        * ($request->page ?? 0)) -> get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return response(Client::find($id));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
    public function total()
    {
        return response(Client::all()->count());
    }
}
