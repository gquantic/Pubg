<nav class="navbar navbar-expand-md text-white shadow-sm">
    <div class="container">
        <div class="d-flex align-items-center justify-content-start">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/assets/images/logo.svg') }}" width="50px" alt="">
            </a>
            <span class="beta">BETA</span>
        </div>

        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
{{--            <span class="navbar-toggler-icon text-white">-</span>--}}
            <span class="text-white">Меню</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                @include('layouts.top_menu', ['categories' => $categories])

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle user-info d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <p style="display: inline; margin-bottom: 0px; margin-right: 15px;">
                                {{ Auth::user()->balance }}<span class="mr-3" style="font-size: 11px;display: inline">₽</span>
                            </p>
                            <img src="https://a0.anyrgb.com/pngimg/1832/1388/thief-theft-avatar-heroes-silhouette-human-behavior-smile-icons-circle.png"
                                 width="40px" class="rounded-circle" alt="">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">
                                Мой профиль
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Выйти
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<img src="/assets/images/headerelement.svg" alt="" style="width: 100%;margin-top: -1px;">
