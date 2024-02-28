<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session; 
use App\Models\Client; 
use App\Models\Cosmetologist; 

class SessionCrudController extends Controller
{
    public function create()
    {
        return view('session_create', [
            'clients'=> Client::all(), 'cosmetologists' => Cosmetologist::all()
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id'=> 'required',
            'cosmetologist_id'=> 'required',
            'start_datetime'=> 'required|date',
            'end_datetime'=> 'required|date|after:start_datetime'
        ]);
        
    $session = new Session($validated);
    $session->save();
    return redirect('/clients/sessions');
    }
    public function edit(string $id)
    {
        return view('session_edit', [
            'session' => Session::all()->where('id', $id)->first(),
            'clients' => Client::all(), 'cosmetologists' => Cosmetologist::all()
        ]);
    }
   
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'client_id'=> 'required',
            'cosmetologist_id'=> 'required',
            'start_datetime'=> 'required|date',
            'end_datetime'=> 'required|date|after:start_datetime'
        ]);
        $session = Session::all()->where('id', $id)->first();
        $session->client_id = $validated['client_id'];
        $session->cosmetologist_id = $validated['cosmetologist_id'];
        $session->start_datetime = $validated['start_datetime'];
        $session->end_datetime = $validated['end_datetime'];
        $session->save();
        return redirect('/clients/sessions');
    }

        public function destroy(string $id)
        {
            Session::destroy($id);
            return redirect('/clients/sessions');
        }
}
