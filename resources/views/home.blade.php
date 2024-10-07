@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('resources/css/home.css') }}">

    <h1 class="body-title">AutoFIX - лучший автосервис для вашей машины!</h1>

    <img src="{{ asset('resources/img/20945487.jpg') }}" alt="" class="body-image">

    <p class="body-subtitle">
        Автосервис AutoFIX поможет вам при любой неисправности вашего автомобиля!<br>
        Диагностика, ремонт, измерение уровня и замена всех жидкостей в авто;<br>
        Нам доверяют - оставьте <a @guest href="{{ route('login') }}" @else href="{{ route('makeOrder') }}" @endguest">заявку</a> у нас на сайте и мы свяжемся с вами!
    </p>

@endsection
