<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PUBG') }}</title>

    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="/assets/land/css/styles-merged.css">
    <link rel="stylesheet" href="/assets/land/css/style.min.css">
    <link rel="stylesheet" href="/assets/land/css/custom.css">

    <!--[if lt IE 9]>
    <script src="/assets/land/js/vendor/html5shiv.min.js"></script>
    <script src="/assets/land/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- START: header -->

<div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="/" class="probootstrap-logo">
            <img src="{{ asset('/assets/images/logo.svg') }}" width="50px" alt="">
        </a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li @if(Route::current()->getName() === 'land-home') class="active" @endif><a href="/">О нас</a></li>
{{--                <li><a href="services">Условия</a></li>--}}
                <li @if(Route::current()->getName() === 'land-contacts') class="active" @endif><a href="contacts">Контакты</a></li>
                <li @if(Route::current()->getName() === 'faq.index') class="active" @endif><a href="{{ route('faq.index') }}">FAQ</a></li>
                <li><a href="{{ route('home') }}">Мой профиль</a></li>
            </ul>
            <ul class="probootstrap-right-nav hidden-xs">
{{--                <li><a href="#"><i class="icon-twitter"></i></a></li>--}}
{{--                <li><a href="#"><i class="icon-facebook2"></i></a></li>--}}
                <li><a href="https://vk.com/cygreat" target="_blank"><i class="icon-vk"></i></a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Мы в социальных сетях</h5>
                <ul class="social-buttons">
{{--                    <li><a href="#"><i class="icon-twitter"></i></a></li>--}}
{{--                    <li><a href="#"><i class="icon-facebook2"></i></a></li>--}}
                    <li><a href="https://vk.com/cygreat" target="_blank"><i class="icon-vk"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END: header -->

@yield('content')

<footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
        <div class="row mb60">
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <img src="{{ asset('/assets/images/logo.svg') }}" width="50px" alt="" style="margin-bottom: 25px;">
                    <p>Сайт турниров по играм. <br> Легкая и быстрая регистрация.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget probootstrap-link-wrap">
                    <h4 class="heading">Навигация</h4>
                    <ul class="stack-link">
                        <li><a href="/">О нас</a></li>
                        <li><a href="{{ route('home') }}">Профиль</a></li>
                        <li><a href="{{ route('land-terms') }}">Условия</a></li>
                        <li><a href="{{ route('faq.index') }}">FAQ</a></li>
                        <li><a href="{{ route('land-offers') }}">Предложения</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">Сотрудничество</h4>
                    <ul class="stack-link">
{{--                        <li><a href="#">Наши проекты</a></li>--}}
                        <li><a href="{{ route('land-contacts') }}">Предложить игру</a></li>
                        <li><a href="{{ route('land-vacancies') }}">Вакансии</a></li>
{{--                        <li><a href="#">Организация турниров</a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget probootstrap-link-wrap">
                    <h4 class="heading">Подпишитесь</h4>
                    <p>И оставайтесь в курсе последних событий.</p>
                    <form action="#">
                        <div class="form-field">
                            <input type="text" class="form-control" placeholder="Ваша почта">
                            <button class="btn btn-subscribe">OK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-6">
                <div class="probootstrap-footer-widget">
                    <p>&copy; 2021 - @php echo date('Y'); @endphp <a href="https://probootstrap.com/">Paradise Studio</a>.
                        Designed by <a target="_blank" href="https://padise-studio.ru/">Paradise Studio</a> <br><br>
                        <img src="http://paradise-studio.ru/assets/brand/logo_withtext.svg" width="150px" alt="">
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="probootstrap-footer-widget right">
                    <ul class="probootstrap-social">
{{--                        <li><a href="#"><i class="icon-twitter"></i></a></li>--}}
{{--                        <li><a href="#"><i class="icon-facebook"></i></a></li>--}}
{{--                        <li><a href="#"><i class="icon-instagram2"></i></a></li>--}}
                        <li><a href="https://vk.com/cygreat" target="_blank"><i class="icon-vk"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
</div>


<script src="/assets/land/js/scripts.min.js"></script>
<script src="/assets/land/js/main.min.js"></script>
<script src="/assets/land/js/custom.js"></script>

</body>
</html>

