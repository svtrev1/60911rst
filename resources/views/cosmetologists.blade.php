@extends('layouts.app')

@section('content')
    <h1>Список косметологов</h1>
    <ul>
        @foreach($cosmetologists as $cosmetologist)
            <li>{{ $cosmetologist->name }}</li>
        @endforeach
    </ul>
@endsection
