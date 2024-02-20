@extends('layouts.app')

@section('content')
    <h2>Клиент: {{ $client->name }}</h2>

    <h3>Список сеансов:</h3>
    <ul>
        @foreach($client->sessions as $session)
            <li>
                <strong>Дата начала:</strong> {{ $session->start_datetime }}<br>
                <strong>Дата окончания:</strong> {{ $session->end_datetime }}
            </li>
        @endforeach
    </ul>
@endsection
