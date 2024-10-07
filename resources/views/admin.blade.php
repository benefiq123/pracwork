@extends('layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('resources/css/admin.css') }}">
    <div class="orders-wrapper">
        <div class="orders-head">
            <div class="orders-head-id order-cell">ID</div>
            <div class="orders-head-name order-cell">Имя</div>
            <div class="orders-head-description order-cell">Описание</div>
            <div class="orders-head-phone order-cell">Телефон</div>
            <div class="orders-head-status order-cell">Статус</div>
        </div>
        @foreach($orders as $order)
                <div class="order">
                    <div class="order-id order-cell">{{ $order->id }}</div>
                    <div class="order-name order-cell">{{ $order->name }}</div>
                    <div class="order-description order-cell">{{ $order->description }}</div>
                    <div class="order-phone order-cell">{{ $order->phone }}</div>
                    <div class="order-status order-cell">
                        <div class="status-text">{{ $order->status }}</div>
                        <form action="{{ route('adminPost', ['id' => $order->id]) }}" class="change-status-form" method="POST">
                            @csrf
                            @method('post')
                            <select name="changeStatus" id="change-status">
                                <option value="В работе">В работе</option>
                                <option value="Готово">Готово</option>
                            </select>
                            <button class="submit-change" type="submit">Изменить статус</button>
                        </form>
                    </div>
                </div>
        @endforeach
    </div>

@endsection
