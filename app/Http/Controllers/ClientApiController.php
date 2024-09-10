<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientApiController extends Controller
{
    public function index()
    {
        return response(Client::all());
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
}
