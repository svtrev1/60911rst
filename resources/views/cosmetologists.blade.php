@extends('layouts.app')

@section('content')
    <h1>Список косметологов и их сеансов</h1>
    <ul>
        @foreach($cosmetologists as $cosmetologist)
            <h3>Косметолог: </h3>{{ $cosmetologist->full_name }}
            @foreach($cosmetologist->sessions as $session)
            
            <li>Session ID: {{ $session->id }} >- Client: {{ $session->client->full_name }} - Start: {{ $session->start_datetime }} - End: {{ $session->end_datetime }}</li>
                
            
        @endforeach
        @endforeach
    </ul>
@endsection
