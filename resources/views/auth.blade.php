@extends('layout')
@section('content')
    <form method="post" action="{{url('auth')}}">
        @csrf
        <input type="text" class="form-control me-2" placeholder="Логин" name="email" aria-label="Логин"
            value="{{old('email')}}"/>
        <input type="password" class="form-control me-2" placeholder="Пароль" name="password" aria-label="Пароль"
            value="{{old('password')}}"/>
        <button class="btn btn-outline-success" type="submit">Войти</button>
    </form>
@endsection