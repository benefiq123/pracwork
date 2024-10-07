<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('resources/css/layout.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-wrapper">
            <div class="header-menu">
                <a href="{{ route('home') }}" class="text-logo">АвтоFIX</a>
                <ul class="navigation">
                    <li class="navigation-item"><a href="{{ route('home') }}" class="item-a">Главная</a></li>
                    <li class="navigation-item"><a href="{{ route('about') }}" class="item-a">О нас</a></li>
                    <li class="navigation-item"><a @guest href="{{ route('login') }}" @else href="{{ route('makeOrder') }}" @endguest class="item-a">Оставить заявку</a></li>
                </ul>
                <div class="auth-group">
                    @guest
                        <a href="{{ route('registration') }}" class="registration">Регистрация</a>
                        <a href="{{ route('login') }}" class="login">Авторизация</a>
                    @else
                        <a href="{{ route('myOrders') }}" class="my-orders">Мои заявки</a>
                        <a href="{{ route('logout') }}" class="logout">Выйти</a>
                    @endguest
                </div>
            </div>
        </div>
    </header>
    <div class="body-wrapper">
        @yield('content')
    </div>
</body>
</html>
