<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> .is-invalid {color:red}</style>
</head>
<body>
    <h2>Редактирование сеанса</h2>
    <form method="post" action={{url('session/update/'.$session->id)}}/>
        @csrf
        <label>Время начала сеанса</label>
        <input type="datetime-local" name="start_datetime" value="@if (old('start_datetime')) {{old('start_datetime')}} @else {{$session->start_datetime}} @endif"/>
        @error('start_datetime')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <label>Время конца сеанса</label>
        <input type="datetime-local" name="end_datetime" value="@if (old('end_datetime')) {{old('end_datetime')}} @else {{$session->end_datetime}} @endif"/>
        @error('end_datetime')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
        <label>Клиенты:</label>
        <select name="client_id" value="{{ old('client_id') }}">
            @foreach ($clients as $client)
            <option value="{{$client->id}}"
                @if(old('client_id'))
                    @if(old('client_id') == $client->id) selected @endif
                @else
                    @if($session->client_id == $client->id) selected @endif
                @endif>{{$client->full_name}}</option>
            @endforeach
        </select>
        @error('client_id')
        <div class="is-invalid">{{ $message }} </div>
        @enderror
    <br>
    <label>Косметологи:</label>
        <select name="cosmetologist_id" value="{{ old('cosmetologist_id') }}">
            @foreach ($cosmetologists as $cosmetologist)
            <option value="{{$cosmetologist->id}}"
                @if(old('cosmetologist_id'))
                    @if(old('cosmetologist_id') == $cosmetologist->id) selected @endif
                @else
                    @if($session->cosmetologist_id == $cosmetologist->id) selected @endif
                @endif>{{$cosmetologist->full_name}}</option>
            @endforeach
        </select>
        @error('cosmetologist_id')
        <div class="is-invalid">{{ $message }} </div>
        @enderror
    <br>
    <input type="submit">
    </form>>
</body>
</html>