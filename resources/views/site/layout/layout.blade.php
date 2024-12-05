@include('site.layout.header')
<div class="untree_co--site-wrap">
    <nav class="untree_co--site-nav js-sticky-nav">
        <div class="container d-flex align-items-center">
            <div class="logo-wrap">
                <a href="{{route('site')}}" class="untree_co--site-logo">
                    <img src="{{ asset('images/main_logo.svg') }}" alt="Logo" height="60"></a>
            </div>
            <div class="site-nav-ul-wrap text-center d-none d-lg-block">
                <ul class="site-nav-ul js-clone-nav">
                    <li class="@if($active == 'home'){{'active'}} @endif "><a href="{{route('site')}}">Home</a>
                    </li>
                    <li class="@if($active == 'rooms'){{'active'}} @endif ">
                        <a href="{{route('site_rooms')}}">Rooms</a>
                    </li>
                    <li class="@if($active == 'service'){{'active'}} @endif ">
                        <a href="{{route('site_services')}}">Services</a>
                    </li>
                    <li class="@if($active == 'blog'){{'active'}} @endif "><a href="{{route('blog')}}">Blog</a></li>
                    <li class="@if($active == 'about'){{'active'}} @endif "><a href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="@if($active == 'contact'){{'active'}} @endif "><a
                            href="{{route('site_contact')}}">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/flags/' . app()->getLocale() . '.png') }}" width="20"
                                 height="15">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('switchLang', 'am') }}">
                                    <img src="{{ asset('images/flags/am.png') }}" alt="Հայերեն" width="20" height="15">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('switchLang', 'ru') }}">
                                    <img src="{{ asset('images/flags/ru.png') }}" alt="Русский" width="20" height="15">
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('switchLang', 'en') }}">
                                    <img src="{{ asset('images/flags/en.png') }}" alt="English" width="20" height="15">
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="icons-wrap text-md-right">
                <ul class="icons-top d-none d-lg-block">
                    <li>
                        <a href="https://www.facebook.com/Syunikhotel" target="_blank"><span
                                class="icon-facebook"></span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/syunikhotel/?hl=am-et" target="_blank"><span
                                class="icon-instagram"></span></a>
                    </li>
                </ul>

                <!-- Mobile Toggle -->
                <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse"
                   data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </nav>
    @yield('content')
    @include('site.layout.footer')
</div>
</body>
</html>



