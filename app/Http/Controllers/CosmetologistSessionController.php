<?php

namespace App\Http\Controllers;

use App\Models\Cosmetologist; 
use App\Models\Session; 
use Illuminate\Http\Request;

class CosmetologistSessionController extends Controller
{
    public function index()
    {
        $sessions = Session::all(); // Здесь можно получить список всех сеансов для косметологов
        return view('sessions', compact('sessions'));
    }

    public function show($id)
    {
        $session = Session::find($id); // Здесь можно получить конкретный сеанс для косметолога по его идентификатору
        return view('session', compact('session'));
    }
}
