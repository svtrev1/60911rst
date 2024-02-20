<?php

namespace App\Http\Controllers;
use App\Models\Session; 
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function show(string $id)
    {
    

        return view('sessionMany', [
            'sessionMany' => Session::all()->where('id', $id)->first()
        ]);
    }

}
