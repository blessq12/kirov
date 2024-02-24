@extends('layouts.front.kovrochist')

@section('title')
@section('desc')

@section('content')

<section class="bg-image hero position-relative overflow-hidden" style="background: url(https://catherineasquithgallery.com/uploads/posts/2021-02/1613302199_113-p-sinii-teksturnii-fon-181.jpg)">
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
                        <modal-window>
                            Оставить заявку сейчас
                        </modal-window>
                    </div>
                </div>
            </div>
            <div class="col position-relative d-none d-lg-block">
                <img src="/kovrochist/img/mann.png" alt="" class="position-absolute">
            </div>
        </div>
    </div>
</section>

<section class="p-0 position-relative">
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
                <h2 class="section-title mb-4">ХИМЧИСТКА КОВРА - <span> ПРОФИЛАКТИКА ЗДОРОВЬЯ </span></h2>
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
                <div class="row g-2">
                    <div class="col">
                        <button class="btn btn-primary rounded-pill w-100">
                            <i class="fa fa-phone"></i>
                            Позвонить
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn btn-success rounded-pill w-100">
                            <i class="fa fa-whatsapp"></i>    
                            Whatsapp
                        </button>
                    </div>
                </div>            
            </div>
            <div class="col-12 col-md-6">
                <div class="bg-image h-100" style="background: url(/kovrochist/img/carpet_cleaner.png); background-size: contain !important"></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-lg-8">
                <h2 class="section-title">
                    Наши услуги
                </h2>
                <p>
                    Услуги по коврам и ковровым покрытиям.
                </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            @php
                $slugs = [
                    (object)['name' => 'Антибактериальная обработка ', 'desc' => 'Вирусы, бактерии и прочие микроорганизмы окружают нас повсюду, каждый день. Многих из них наш иммунитет в силах побороть, поэтому мы не замечаем их воздействия. Однако, есть и особо опасные частицы, способные вызвать различные заболевания. Особенно это касается маленьких детей, чья иммунная система еще не сформирована до конца. Поэтому важно обеспечить гигиеническую безопасность хотя бы внутри дома.', 'image' => '/kovrochist/img/antibacktery.jpeg'],
                    (object)['name' => 'Оверлок', 'desc' => 'В первую очередь эта процедура необходима для ковролина , особенно если Вы хотите использовать его  в качестве ковра на пол. Только так можно придать жесткость форме (что особенно важно при создании дизайнерских ковров и палацев сложной формы), а также полностью исключить выпадение ворса. К тому же, оверлок отлично подчеркивает дизайн покрытия для пола и очень часто используется в интерьерном оформлении и как декоративный элемент.', 'image' => '/kovrochist/img/overlock.jpeg'],
                    (object)['name' => 'Стирка/ химчистка ковров и ковровых покрытий', 'desc' => 'Качественное очищение покрытий гарантирует устранение неприятных запахов от изделий, используется, если краски на поверхности тускнеют, а ворс – становится более спрессованным. Специалисты рекомендуют проводить такую процедуру хотя бы раз в полгода – год.', 'image' => '/kovrochist/img/stirka.jpeg'],
                    (object)['name' => 'Дезинфекция', 'desc' => 'На этом этапе выполняется уничтожение оставшихся микроорганизмов – пылевых клещей, грибка, плесени, их личинок и спор. Для этого применяются специальные химикаты, безопасные для пользователя, которые проникают вглубь ворса до самого основания, где наибольшая концентрация возможных паразитов.', 'image' => '/kovrochist/img/dezinf.jpeg'],
                ]
            @endphp

            @foreach ($slugs as $el)
                <div class="col mb-4">
                    <div class="row row-cols-1 {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : '' }}">
                        <div class="col">
                            <div class="header rounded bg-image mb-2" style="min-height: 200px; background: url({{ $el->image !== '' ? $el->image : '//via.placeholder.com/1024x1024' }})">
                            </div>
                        </div>
                        <div class="col">
                            <h5>{{ $el->name }}</h5>
                            <p>{{ $el->desc }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <modal-window>
                    Оставить заявку сейчас
                </modal-window>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-md-8">
                <h2 class="section-title">
                    Результаты <span>стирки</span> ковров
                </h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mb-lg-4 flex-nowrap flex-md-wrap overflow-hidden" style="overflow-x: scroll !important">
            @php
                $benefits = [
                    (object)['name' => 'Профилактика и устранение болезнетворных бактерий', 'image' => '/kovrochist/img/backtery.jpeg'],
                    (object)['name' => '100% устранение запаха мочи, грибка, плесени', 'image' => '/kovrochist/img/zapah.jpeg'],
                    (object)['name' => 'До 100% выведение всех видов пятен и загрязнений', 'image' => '/kovrochist/img/pyatno.jpeg'],
                    (object)['name' => 'Чистка проф. гиппоаллегренными средствами', 'image' => '/kovrochist/img/himiya.jpeg'],
                ]
            @endphp
            @foreach ($benefits as $elem)
                <div class="col mb-4 mb-lg-0">
                    <div class="benefit-item bg-image overflow-hidden rounded p-3" style="background: url({{ $elem->image }})">
                        <div class="overlay"></div>
                        <div class="text-light position-relative">
                            <h5>{{ $elem->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-6">
                <modal-window>
                    Оставить заявку
                </modal-window>
            </div>
        </div>
    </div>
</section>

<section>
    <carpet-quiz>
    </carpet-quiz>
</section>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-md-8">
                <h2 class="section-title">Галерея <span>работ</span></h2>
                <p>Фотографии разделены на "до" и "после", чтобы наглядно показать результат нашей работы на настоящтх примерах.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">

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

                <slider :slides='@json($gallery)'></slider>

            </div>
        </div>
    </div>
</section>

<section>
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