@extends('layouts.app')

@section('content')
    <h1>Список сеансов</h1>
    <ul>
        @foreach($sessions as $session)
            <li>Session ID: {{ $session->id }}
             >- Client: {{ $session->client->full_name }}
              - Cosmetologist: {{ $session->cosmetologist->full_name}} 
              - Start: {{ $session->start_datetime }} 
              - End: {{ $session->end_datetime }}
            <a href="{{url('session/destroy/'.$session->id)}}">Удалить</a>
            <a href="{{url('session/edit/'.$session->id)}}">Редактировать</a>
        </li>
        @endforeach
    </ul>
@endsection
