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
                    <h5><span>Профессионально и с бесплатной доставкой</span></h5>
                    <h1>ХИМЧИСТКА, СТИРКА КОВРОВ В КИРОВЕ</h1>
                    {{-- <p>
                        Принимаем ковры всех видов, в независимости от погоды. Стирка производится на заводском оборудовании
                    </p> --}}
                </div>
                <div class="row mb-4 g-2">
                    <div class="col">
                        <ul>
                            @php
                                $list = [
                                    (object) ['name' => 'гипоаллергенные средства', 'icon' => 'fa fa-leaf'],
                                    (object) ['name' => 'прозрачная система оплаты', 'icon' => 'fa fa-thumbs-up'],
                                    (object) ['name' => 'скидки постоянным клиентам', 'icon' => 'fa fa-percent'],
                                ]
                            @endphp
                            @foreach ($list as $item)
                                <li>
                                    <i class="{{ $item->icon }} fa-2x"></i>
                                    <p class="mx-1">{{ $item->name }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <modal-window>
                            <button class="btn btn-primary rounded-pill w-100">
                                Оставить заяку сейчас
                            </button>
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
                    чтобы они выглядели свежими, оставались чистыми не только визуально, 
                    но и не были местом размножения опасных для здоровья микробов.
                </p>
                <div class="row g-2">
                    <div class="col">
                        <a class="btn btn-primary rounded-pill w-100" href="tel:+7(901)479-49-40">
                            <i class="fa fa-phone"></i>
                            Позвонить
                        </a>
                    </div>
                    <div class="col">
                        <a class="btn btn-success rounded-pill w-100" href="//wa.me/79014794940" target="_blank">
                            <i class="fa fa-whatsapp"></i>    
                            Whatsapp
                        </a>
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
                    (object)['name' => 'Стирка/ химчистка ковров и ковровых покрытий', 'desc' => 'Качественное очищение покрытий гарантирует устранение неприятных запахов от изделий, используется, если краски на поверхности тускнеют, а ворс – становится более спрессованным. Специалисты рекомендуют проводить такую процедуру хотя бы раз в полгода – год.', 'image' => '/kovrochist/img/stirka.jpeg'],
                    (object)['name' => 'Оверлок', 'desc' => 'В первую очередь эта процедура необходима для ковролина , особенно если Вы хотите использовать его  в качестве ковра на пол. Только так можно придать жесткость форме (что особенно важно при создании дизайнерских ковров и палацев сложной формы), а также полностью исключить выпадение ворса. К тому же, оверлок отлично подчеркивает дизайн покрытия для пола и очень часто используется в интерьерном оформлении и как декоративный элемент.', 'image' => '/kovrochist/img/overlock.jpeg'],
                    (object)['name' => 'Антибактериальная обработка ', 'desc' => 'Вирусы, бактерии и прочие микроорганизмы окружают нас повсюду, каждый день. Многих из них наш иммунитет в силах побороть, поэтому мы не замечаем их воздействия. Однако, есть и особо опасные частицы, способные вызвать различные заболевания. Особенно это касается маленьких детей, чья иммунная система еще не сформирована до конца. Поэтому важно обеспечить гигиеническую безопасность хотя бы внутри дома.', 'image' => '/kovrochist/img/antibacktery.jpeg'],
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
                    <button class="btn btn-primary rounded-pill w-100">
                        Оставить заяку сейчас
                    </button>
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
                    <button class="btn btn-primary rounded-pill w-100">
                        Оставить заяку сейчас
                    </button>
                </modal-window>
            </div>
        </div>
    </div>
</section>

<section>
    @php
        $coverTypes = [
            (object) ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors_height.jpeg']
                    ]],
            (object) ['id' => 2, 'name' => 'Ковролин', 'image' => '/kovrochist/img/carpets/kovrolin.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors_height.jpeg'],
                        ['id' => 2, 'name' => 'Низкий', 'image' => '/kovrochist/img/carpets/short.jpeg']
                    ]],
            (object) ['id' => 3, 'name' => 'Синтетика', 'image' => '/kovrochist/img/carpets/sintetika.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors_height.jpeg'],
                        ['id' => 2, 'name' => 'Низкий', 'image' => '/kovrochist/img/carpets/short.jpeg'],
                        ['id' => 3, 'name' => 'Средний', 'image' => '/kovrochist/img/carpets/medium.jpeg']
                    ]],
            (object) ['id' => 4, 'name' => 'Вискоза', 'image' => '/kovrochist/img/carpets/viskoza.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors_height.jpeg'],
                        ['id' => 2, 'name' => 'Низкий', 'image' => '/kovrochist/img/carpets/short.jpeg']
                    ]],
            (object) ['id' => 5, 'name' => 'Акрил', 'image' => '/kovrochist/img/carpets/akril.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors_height.jpeg'],
                        ['id' => 2, 'name' => 'Низкий', 'image' => '/kovrochist/img/carpets/short.jpeg']
                    ]],
            (object) ['id' => 6, 'name' => 'Бамбук', 'image' => '/kovrochist/img/carpets/bambuk.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors_height.jpeg'],
                        ['id' => 2, 'name' => 'Низкий', 'image' => '/kovrochist/img/carpets/short.jpeg']
                    ]],
            (object) ['id' => 7, 'name' => 'Шёлк', 'image' => '/kovrochist/img/carpets/shelk.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors_height.jpeg'],
                        ['id' => 2, 'name' => 'Низкий', 'image' => '/kovrochist/img/carpets/short.jpeg']
                    ]],
            (object) ['id' => 8, 'name' => 'Шерсть', 'image' => '/kovrochist/img/carpets/sherst.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Безворсовый', 'image' => '/kovrochist/img/carpets/bezvors_height.jpeg'],
                        ['id' => 2, 'name' => 'Низкий', 'image' => '/kovrochist/img/carpets/short.jpeg']
                    ]],
            (object) ['id' => 9, 'name' => 'Шегги', 'image' => '/kovrochist/img/carpets/shaggy.jpeg', 'length' => [
                        ['id' => 1, 'name' => 'Низкий', 'image' => '/kovrochist/img/carpets/short.jpeg'],
                        ['id' => 2, 'name' => 'Средний', 'image' => '/kovrochist/img/carpets/medium.jpeg'],
                        ['id' => 3, 'name' => 'Высокий', 'image' => '/kovrochist/img/carpets/long.jpeg']
                    ]],
        ];
    @endphp
    <carpet-quiz :carpets='@json($coverTypes)'>        
    </carpet-quiz>
</section>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-md-8">
                <h2 class="section-title">Галерея <span>работ</span></h2>
                <p>Фотографии разделены на "до" и "после", чтобы наглядно показать результат нашей работы на настоящих примерах.</p>
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
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h2 class="mb-10">Контакты</h2>
                    <p>Вся наша контактная информация представлена в блоке ниже.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">

            <div class="col">
                <div style="position:relative;overflow:hidden;border-radius: 2em;"><a href="https://yandex.ru/maps/46/kirov/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Киров</a><a href="https://yandex.ru/maps/46/kirov/house/ulitsa_romana_yerdyakova_25/YEAYcARiQUIFQFtifXpwdn1nYw==/?ll=49.632896%2C58.617215&utm_medium=mapframe&utm_source=maps&z=18" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Романа Ердякова, 25 — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUMUQetHA" width="100%" height="400" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h3 style="margin-bottom: 0.5em;">Адрес: </h3>
                        <h5 class="d-flex align-items-center">
                            <i class="fa fa-map-marker d-none d-lg-flex" style="margin-right: 6px"></i>
                            г. Киров, ул. Романа Ердякова 50 строение 2 второй этаж 
                            (Над мойкой самообслуживания «мой сам»)
                        </h5>
                    </div>
                    <div class="col-md-12 mb-5">
                        <h3 style="margin-bottom: 0.5em;">Телефон: </h3>
                        <h5 class="d-flex align-items-center">
                            <i class="fa fa-phone d-none d-lg-flex" style="margin-right: 6px"></i>
                            +7 (901) 479-49-40
                        </h5>
                    </div>
                    {{-- <div class="col-md-12 mb-5">
                        <h3 style="margin-bottom: 0.5em;">Почта: </h3>
                        <h5 class="d-flex align-items-center">
                            <i class="fa fa-envelope" style="margin-right: 6px"></i>
                            covrochistkirov@mail.ru
                        </h5>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection