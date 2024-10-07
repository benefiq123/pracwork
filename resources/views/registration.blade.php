@extends('layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('resources/css/registration.css') }}">
    <form action="{{ route('registrationPost') }}" method="POST" class="registration-form">
        @csrf
        @method('post')
        <div class="name-group">
            <label for="name">Ваше имя</label><br>
            <input type="text" id="name" name="name">
        </div>
        <div class="login-group">
            <label for="login">Логин</label><br>
            <input type="text" id="login" name="login">
        </div>
        <div class="phone-group">
            <label for="phone">Телефон</label><br>
            <input type="tel" id="phone" name="phone">
        </div>
        <div class="password-group">
            <label for="password">Пароль</label><br>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit" class="submit">Регистрация</button>
    </form>

@endsection
