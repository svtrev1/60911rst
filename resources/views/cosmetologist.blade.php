@extends('layouts.app')

@section('content')
    <h2>Косметолог: {{ $cosmetologist->full_name }}</h2>

    <h3>Список сеансов:</h3>
    <ul>
        @foreach($cosmetologist->sessions as $session)
            
            <li>Session ID: {{ $session->id }} >- Client: {{ $session->client->full_name }} - Start: {{ $session->start_datetime }} - End: {{ $session->end_datetime }}</li>
                
            
        @endforeach
    </ul>
@endsection
