@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Список сеансов</h1>
    <ul class="list-group">
        @foreach($sessions as $session)
            <li class="list-group-item">
                <div class="row">
                    <div class="col">{{ $session->client->full_name }} - {{ $session->cosmetologist->full_name }}</div>
                    <div class="col">{{ $session->start_datetime }}</div>
                    <div class="col">{{ $session->end_datetime }}</div>
                    <div class="col">
                        <a href="{{ url('session/destroy/'.$session->id) }}" class="btn btn-danger">Удалить</a>
                        <a href="{{ url('session/edit/'.$session->id) }}" class="btn btn-primary">Редактировать</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="mt-3">
        {{ $sessions->links() }}
    </div>
</div>
@endsection
