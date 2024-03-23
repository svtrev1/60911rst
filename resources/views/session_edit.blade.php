@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Редактирование сеанса</h2>
        <form method="post" action="{{ url('session/update/'.$session->id) }}">
            @csrf
            <div class="form-group">
                <label for="start_datetime">Время начала сеанса</label>
                <input type="datetime-local" class="form-control" id="start_datetime" name="start_datetime" value="{{ old('start_datetime', $session->start_datetime) }}">
                @error('start_datetime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="end_datetime">Время конца сеанса</label>
                <input type="datetime-local" class="form-control" id="end_datetime" name="end_datetime" value="{{ old('end_datetime', $session->end_datetime) }}">
                @error('end_datetime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="client_id">Клиенты:</label>
                <select class="form-control" id="client_id" name="client_id">
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" @if(old('client_id', $session->client_id) == $client->id) selected @endif>{{ $client->full_name }}</option>
                    @endforeach
                </select>
                @error('client_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cosmetologist_id">Косметологи:</label>
                <select class="form-control" id="cosmetologist_id" name="cosmetologist_id">
                    @foreach ($cosmetologists as $cosmetologist)
                        <option value="{{ $cosmetologist->id }}" @if(old('cosmetologist_id', $session->cosmetologist_id) == $cosmetologist->id) selected @endif>{{ $cosmetologist->full_name }}</option>
                    @endforeach
                </select>
                @error('cosmetologist_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group text-center mt-3">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
