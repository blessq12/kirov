@extends('layouts.front.kovrochist')

@section('title')
@section('desc')

@section('content')

<section class="bg-image hero position-relative overflow-hidden" style="background: url(/kovrochist/img/bg-bunner-2.jpg)">
    <div class="overlay"></div>
    <div class="container position-relative text-light">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <div class="mb-3">
                    <h5><span>Профессионально и с доставкой</span></h5>
                    <h1>ХИМЧИСТКА, СТИРКА КОВРОВ В КИРОВЕ</h1>
                    <p>
                        Принимаем ковры всех видов в независимости от погоды. Стирка производиться на заводском оборудовании
                    </p>
                </div>
                <div class="row mb-4 g-2">
                    <div class="col">
                        <ul>
                            @foreach ([1,1,1] as $item)
                                <li>
                                    <img src="//via.placeholder.com/100x100" alt="" class="img-fluid">
                                    <p>прозрачная система оплаты</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn-primary btn rounded-pill w-100 btn-lg">
                            Оставьте заявку сейчас
                        </button>
                    </div>
                </div>
            </div>
            <div class="col position-relative d-none d-lg-block">
                <img src="/kovrochist/img/her_s_gori.webp" alt="" class="position-absolute">
            </div>
        </div>
    </div>
</section>

<section>
    @php
        $tickets = [
            'оперативность',
            'прозрачные цены',
            'опытные сотрудники',
            'бесплатная доставка',
            'профессиональное оборудование',
            'гиппоаллергенная химия'
        ]
    @endphp
    <ticker :tickets='@json($tickets)'></ticker>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="section-title">явные преимущества на рынке</h2>
                <p> Компания обладает материальнотехническим оснащением и квалифицированной бригадой мастеров, необходимыми для выполнения полученных заказов. Все работы осуществляются в соответствии с составленной сметой и условленными сроками. </p>
                <ul class="list-unstyled p-0 m-0">
                    <li class="d-flex align-items center">
                        <p class="mb-0 fw-bold">мы постоянно совершенствуем технологический процесс</p>
                    </li>
                    <li class="d-flex align-items center">
                        <p class="mb-0 fw-bold">используем современное оборудование</p>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <div class="rounded bg-image h-100" style="background: url(//via.placeholder.com/512x512);"></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center mb-5">
            <div class="menu-content  col-lg-8">
                <div class="title text-center">
                    <h2 class="mb-10">ХИМЧИСТКА КОВРА - <span class="mclr">ПРОФИЛАКТИКА ЗДОРОВЬЯ</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sigle-service col-lg-4 col-md-4 text-center">
                <img src="/kovrochist/img/logo.png" alt="" style="max-width: 250px; height:auto;">
            </div>
            <div class="sigle-service col-lg-8 col-md-8 ">
                <p>
                    Красивый ковер, безусловно, добавляет стиль и комфорт Вашему дому. 
                    Но без регулярной чистки он также может представлять серьезную угрозу Вашему здоровью. 
                    Бактерии, грибок, пылевые клещи и вирусы накапливаются в волокнах ковра, потенциально ослабляя Ваш иммунитет.
                </p>
                <p>
                    Даже при регулярной уборке пылесосом ковры нуждаются в профессиональной чистке, 
                    чтобы он выглядели свежими, оставались чистыми не только визуально, 
                    но и не были местом размножения опасных для здоровья микробов.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content  col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Наши услуги</h1>
                    <p>Мы предлагаем Вам наш перечень услуг в стирке и химчистке ковров и ковровых покрытий, а также химчистку мягкой мебели на дому.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="sigle-service col-lg-6 col-md-6 text-center">
            <img class='img-fluid' src="/kovrochist/img/carpets.jpg" />
                    <div class="card-body text-center mx-auto">
                        <h5 class="card-title">Стирка/ химчистка<br>ковров и ковровых покрытий</h5>
                        <p>Стирка производится в цеху на спец. оборудовании.</p>
                        <button class="slug-btn">Заказать услугу</button>
                    </div>
            </div>


            <div class="sigle-service col-lg-6 col-md-6 text-center">
             <img class='img-fluid' src="https://i.imgur.com/WaZxrEe.jpg"/>
                    <div class="card-body text-center mx-auto">
                        <h5 class="card-title">Химчистка мягкой мебели и пледов </h5>
                        <p>Выездная химчистка, производится с выездом к клиенту.</p>
                        <button class="slug-btn">Заказать услугу</button>
                    </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center mb-5">
            <div class="menu-content  col-lg-8">
                <div class="title text-center">
                    <h2 class="mb-10">ЧТО ВЫ ПОЛУЧАЕТЕ, ЗАКАЗЫВАЯ <span class="mclr">ЧИСТКУ КОВРА</span></h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-lg-4">
            @php
                $benefits = [
                    (object)['name' => 'Профилактика и устранение болезнетворных бактерий', 'image' => 'http://himchistkakovrovkristall.ru/img/you_get_li1_bg.jpg'],
                    (object)['name' => '100% устранение запаха мочи, грибка, плесени', 'image' => 'http://himchistkakovrovkristall.ru/img/you_get_li2_bg.jpg'],
                    (object)['name' => 'До 100% выведение всех видов пятен и загрязнений', 'image' => 'http://himchistkakovrovkristall.ru/img/you_get_li3_bg.jpg'],
                    (object)['name' => 'Чистка проф. гиппоаллегренными средствами', 'image' => 'http://himchistkakovrovkristall.ru/img/you_get_li4_bg.jpg'],
                ]
            @endphp
            @foreach ($benefits as $elem)
                <div class="col mb-4 mb-lg-0">
                    <div class="benefit-item bg-image rounded p-3" style="background: url(//via.placeholder.com/1024x1024)">
                        <div class="text-light">
                            <h5>{{ $elem->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-8 text-center">
                <button class="btn btn-primary w-100">Отправить заявку</button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center d-flex">
            <div class="col">
                <h2>Вы можете рассчитать<br>
                Стоимость услуги</h2>
                <p>
                    Воспользуйтесь нашим калькулятором <br> Для рассчета приблизительной стоимости <br>Для этого выберите тип коврового покрытия и введите длину и ширину<br>Либо вы можете позвонить нам
                </p>
                <div class="buttons">
                    <a href="tel:+79014794940" class="btn btn-primary rounded-pill">Позвонить</a>
                </div>
            </div>
            <div class="col">
                <form action="" style="padding: 15px;" class="frm-up">
                    <div class="form-control calc-form">
                        <label for="">Выберите тип покрытия:</label>
                        <select name="" id="type_carpet" style="width: 100%;" class="form-select mb-2">
                            <option value="1" selected>Синтетика</option>
                            <option value="2">Шерсть</option>
                        </select>
                        <label for="">Выберите высоту ворса:</label>
                        <select name="" id="carp_height" style="width: 100%;" class="form-select mb-2">
                            <option value="1" selected>Низкий</option>
                            <option value="2">Высокий</option>
                        </select>
                        <label for="">Введите длину:</label>
                        <input type="number" id="lenght" placeholder="3,2" class="form-input">
                        <label for="">Введите ширину:</label>
                        <input type="number" id="width" placeholder="3,2" class="form-input" style="color:#000;">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h3 style="color:#fff;">Стоимость: <span id="cost"></span></h3>
                            </div>
                            <div class="col-md-12">
                                <button class="frm-btn" id="calculate">Рассчитать</button>
                        </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <div class="title text-center">
                    <h2>Наша галлерея проведенных работ</h2>
                    <p>На данных фотографиях Вы можете увидеть, какая большая разница между до и после</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-works-carousel">
                @php
                    $gallery = [
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/1.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/2.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/3.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/4.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/5.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/6.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/7.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/8.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/9.jpg'],
                        (object) ['name' => 'Химчистка мягкой мебели', 'sub' => 'Химчистка мягкой мебели с использованием профессиональной химии для достяжения наилучшего эффекта', 'image' => '/kovrochist/img/b_a/10.jpg'],
                    ]
                @endphp
                
                @foreach ($gallery as $elem)    
                    <div class="item">
                        <img class="img-fluid slid" src="{{ $elem->image }}" alt="">
                        <div class="caption text-center mt-20">
                            <h6 class="text-uppercase">{{ $elem->name }}</h6>
                            <p>
                                {{ $elem->sub }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<section
    <div class="container">
        <div class="row">
            <div class="col-lg-6 skill-left">
                <h2>Позаботьтесь о близких!</h2>
                <p>
                    Вспомните, какие облака пыли поднимаются вокруг ковра, когда его выбивают. <br> Они в прямом смысле отравляет вам жизнь. Каждый год в ковре и под ним собирается 2–3 килограмма пыли. <br> Так что ковёр в доме может привести к аллергии, затруднению дыхания и проблемам со сном. Исходя из этого чистка ковров рекомендована не реже <span style="font-weight: bold;font-size: 20px;">2 раз</span> в год
                </p>
                <button class="btn btn-primary rounded-pill">Отправить заявку</button>
            </div>
            <div class="col-lg-6 text-center about-right call-rght" style="margin-top:20px;">
                <img src="/kovrochist/img/about_carpet.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h2 class="mb-10">Контакты</h2>
                    <p>Вся наша контактная информация представлена в блоке ниже.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-md-8 mb-5">
                <div style="position:relative;overflow:hidden;border-radius: 2em;"><a href="https://yandex.ru/maps/46/kirov/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Киров</a><a href="https://yandex.ru/maps/46/kirov/house/ulitsa_romana_yerdyakova_25/YEAYcARiQUIFQFtifXpwdn1nYw==/?ll=49.632896%2C58.617215&utm_medium=mapframe&utm_source=maps&z=18" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Романа Ердякова, 25 — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUMUQetHA" width="100%" height="400" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h3 style="margin-bottom: 0.5em;">Адрес: </h3>
                        <div>
                        <h4 style="font-weight: 200;"><span class="footer-icon"><i class="fas fa-map-marker-alt"></i></span>Киров, ул.Романа Ердякова, 25</h4>
                        </div>
                    </div>
                    <div class="col-md-12 mb-5">
                        <h3 style="margin-bottom: 0.5em;">Телефон: </h3>
                        <h4 style="font-weight: 200;"><span class="footer-icon"><i class="fa fa-phone"></i></span>+7 (901) 479-49-40</h4>
                    </div>
                    <div class="col-md-12 mb-5">
                        <h3 style="margin-bottom: 0.5em;">Почта: </h3>
                        <h4 style="font-weight: 200;"><span class="footer-icon"><i class="far fa-envelope"></i></span>covrochistkirov@mail.ru</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection