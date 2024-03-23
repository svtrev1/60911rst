@extends('layout')

@section('content')
    <h1>Список клиентов</h1>
    <ul class="list-group">
        @foreach($clients as $client)
            <li class="list-group-item">{{ $client->full_name }}</li>
        @endforeach
    </ul>
@endsection


