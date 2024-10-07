@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('resources/css/about.css') }}">
    <h1 class="title">Добро пожаловать в AutoFIX!</h1>

    <h3 class="subtitle">Мы — команда профессионалов, объединенных общей целью: предоставить нашим клиентам высококачественные услуги по ремонту и обслуживанию автомобилей.
        В нашем автосервисе мы понимаем, насколько важна для вас надежность вашего автомобиля, и стремимся обеспечить безупречное техническое состояние вашего транспорта.</h3>

    <h3 class="why-us">Почему выбирают нас?</h3>

    <div class="cards-wrapper">
        <div class="card">
            <img src="{{ asset('resources/img/repair1.svg') }}" alt="" class="card-image">
            <div class="card-title">Профессионализм</div>
            <div class="card-subtitle">Наша команда состоит из высококвалифицированных механиков с многолетним опытом работы. Мы постоянно повышаем свою квалификацию и следим за последними тенденциями в автомобильной индустрии.</div>
        </div>
        <div class="card">
            <img src="{{ asset('resources/img/repair2.svg') }}" alt="" class="card-image">
            <div class="card-title">Современное оборудование</div>
            <div class="card-subtitle">Для выполнения работ мы используем новейшее оборудование и технологии, что позволяет нам обеспечивать качественный и быстрый сервис.</div>
        </div>
        <div class="card">
            <img src="{{ asset('resources/img/repair3.svg') }}" alt="" class="card-image">
            <div class="card-title">Прозрачность</div>
            <div class="card-subtitle">Мы ценим доверие наших клиентов и придерживаемся принципов прозрачности в ценообразовании. Все работы согласовываются с вами заранее, без скрытых платежей и неприятных сюрпризов.</div>
        </div>
        <div class="card">
            <img src="{{ asset('resources/img/repair4.svg') }}" alt="" class="card-image">
            <div class="card-title">Гарантия качества</div>
            <div class="card-subtitle">Мы уверены в качестве предоставляемых услуг и готовы предоставить гарантию на все виды работ. Качество — это не просто слово для нас, а основа нашей репутации.</div>
        </div>
        <div class="card">
            <img src="{{ asset('resources/img/repair5.svg') }}" alt="" class="card-image">
            <div class="card-title">Индивидуальный подход</div>
            <div class="card-subtitle">Мы внимательно выслушаем ваши пожелания и требования, чтобы предложить оптимальные решения, учитывающие особенности именно вашего автомобиля.</div>
        </div>
    </div>

@endsection
