<?php

namespace App\Http\Controllers;

use App\Models\Client; 
use App\Models\Session; 
use Illuminate\Http\Request;

class ClientSessionController extends Controller
{
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('sessions', [
            'sessions' => Session::paginate($perpage)->withQueryString()
        ]);
    }

    public function show($id)
    {
        $session = Session::find($id); 
        return view('session', compact('session'));
    }
}
