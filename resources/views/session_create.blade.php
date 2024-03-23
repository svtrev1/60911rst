@extends('layout')
@section('content')
<div class="container mt-5">
    <div class="card p-3">
        <h2>Добавление сеанса</h2>
        <form method="post" action={{url('session')}}/>
            @csrf
            <label>Дата и время начала</label>
            <input type="datetime-local" name="start_datetime" value="{{old('start_datetime')}}" class="form-control"/>
            @error('start_datetime')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
            <br>
            <label>Дата и время конца</label>
            <input type="datetime-local" name="end_datetime" value="{{old('end_datetime')}}" class="form-control"/>
            @error('end_datetime')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
            <br>
            <label for="client">Client:</label>
            <select name="client_id" value="{{old('client_id')}}" class="form-select">
                @foreach($clients as $client)
                    <option value="{{ $client->id }}"
                    @if(old('client_id') == $client->id) selected
                    @endif>{{ $client->full_name}}
                    </option>
                @endforeach
            </select>
            @error('client_id')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
        
            <label for="cosmetologist">Cosmetologist:</label>
            <select name="cosmetologist_id" value="{{ old('cosmetologist_id')}}" class="form-select">
                @foreach($cosmetologists as $cosmetologist)
                    <option value="{{ $cosmetologist->id }}"
                    @if(old('cosmetologist_id') == $cosmetologist->id) selected
                    @endif>{{ $cosmetologist->full_name}}
                    </option>
                @endforeach
            </select>
            @error('cosmetologist_id')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection
