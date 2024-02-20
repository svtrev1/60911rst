@extends('layouts.app')

@section('content')
    <h1>Список клиентов</h1>
    <ul>
        @foreach($clients as $client)
            <li>{{ $client->name }}</li>
        @endforeach
    </ul>
@endsection

