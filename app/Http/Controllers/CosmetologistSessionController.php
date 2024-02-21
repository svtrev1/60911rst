<?php

namespace App\Http\Controllers;

use App\Models\Cosmetologist; 
use App\Models\Session; 
use Illuminate\Http\Request;

class CosmetologistSessionController extends Controller
{
    public function index()
    {
        $cosmetologists = Cosmetologist::all(); 
        return view('cosmetologists', compact('cosmetologists'));
    }

    public function show($id)
    {
        $cosmetologist = Cosmetologist::find($id); 
        return view('cosmetologist', compact('cosmetologist'));
    }
}
