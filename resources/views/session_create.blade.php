<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> .is-invalid {color: red; } </style>
</head>
<body>
    <h2>Добавление сеанса</h2>
    <form method="post" action={{url('session')}}/>
        @csrf
        <label>Дата и время начала</label>
        <input type="datetime-local" name="start_datetime" value="{{old('start_datetime')}}"/>
        @error('start_datetime')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
    <br>
        <label>Дата и время конца</label>
        <input type="datetime-local" name="end_datetime" value="{{old('end_datetime')}}"/>
        @error('end_datetime')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
    <br>
        <label for="client">Client:</label>
        <select name="client_id" value="{{old('client_id')}}">
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
        <select name="cosmetologist_id" value="{{ old('cosmetologist_id')}}">
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
    <input type="submit">
</form>
</body>
</html>
