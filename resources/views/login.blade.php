@extends('layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('resources/css/login.css') }}">
    <form action="{{ route('loginPost') }}" method="POST" class="login-form">
        @csrf
        @method('post')
        <div class="login-group">
            <label for="login">Логин</label>
            <input type="text" id="login" name="login">
        </div>
        <div class="password-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit" class="submit">Вход</button>
    </form>

@endsection
