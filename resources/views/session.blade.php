@extends('layouts.app')

@section('content')
    <h2>Сеанс: {{ $session->start_datetime }} - {{ $session->end_datetime }}</h2>

    <h3>Оказанные услуги:</h3>
    <ul>
        @foreach($session->providedServices as $providedService)
            <li>
                <strong>Услуга:</strong> {{ $providedService->service->name }}<br>
                <strong>Цена:</strong> {{ $providedService->service->price }}
            </li>
        @endforeach
    </ul>
@endsection
