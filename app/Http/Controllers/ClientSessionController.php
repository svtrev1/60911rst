<?php

namespace App\Http\Controllers;

use App\Models\Client; 
use App\Models\Session; 
use Illuminate\Http\Request;

class ClientSessionController extends Controller
{
    public function index()
    {
        $sessions = Session::all();
        return view('sessions', compact('sessions'));
    }

    public function show($id)
    {
        $session = Session::find($id); 
        return view('session', compact('session'));
    }
}
