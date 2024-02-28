<?php

namespace App\Http\Controllers;
use App\Models\Service; 
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(string $id)
    {

        return view('serviceMany', [
            'serviceMany' => Service::all()->where('id', $id)->first()
        ]);
    }
}
