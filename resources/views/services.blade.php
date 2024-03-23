@extends('layout')

@section('content')
    <h1>Список услуг</h1>
    <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">{{ $service->name }}</li>
        @endforeach
    </ul>
@endsection
