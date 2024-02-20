@extends('layouts.app')

@section('content')
    <h2>Услуга: {{ $service->name }}</h2>

    <h3>Список сеансов, в рамках которых оказывалась данная услуга:</h3>
    <ul>
        @foreach($service->providedServices as $providedService)
            <li>
                <strong>Дата сеанса:</strong> {{ $providedService->session->start_datetime }}
            </li>
        @endforeach
    </ul>
@endsection
