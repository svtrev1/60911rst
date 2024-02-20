@extends('layouts.app')

@section('content')
    <h1>Список сеансов</h1>
    <ul>
        @foreach($sessions as $session)
            <li>Session ID: {{ $session->id }} >- Client: {{ $session->client_id }} - Cosmetologist: {{ $session->cosmetologist_id}} - Start: {{ $session->start_datetime }} - End: {{ $session->end_datetime }}</li>
        @endforeach
    </ul>
@endsection
