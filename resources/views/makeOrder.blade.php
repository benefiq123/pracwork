@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('resources/css/makeOrder.css') }}">

    <form action="{{ route('makeOrderPost') }}" method="POST" class="make-order-form" id="makeOrderForm">
        @csrf
        @method('post')
        <div class="description-group">
            <label for="description" class="label" style="font-size: 18px; font-weight: bold;">Описание проблемы</label><br>
            <textarea id="description" name="description" class="make-order-input input-description" form="makeOrderForm"></textarea>
        </div>
        <div class="model-group">
            <label for="model" class="label" style="font-size: 18px; font-weight: bold;">Модель машины</label><br>
            <input type="text" id="model" name="model" class="make-order-input input-model">
        </div>
        <button type="submit" class="submit">Оставить заявку</button>
    </form>

@endsection
