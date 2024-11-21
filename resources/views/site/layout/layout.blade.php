@include('site.layout.header')
<div class="untree_co--site-wrap">
<nav class="untree_co--site-nav js-sticky-nav">
    <div class="container d-flex align-items-center">
        <div class="logo-wrap">
            <a href="{{route('site')}}" class="untree_co--site-logo">LuxuryHotel</a>
        </div>
        <div class="site-nav-ul-wrap text-center d-none d-lg-block">
            <ul class="site-nav-ul js-clone-nav">
                <li class="active"><a href="{{route('site')}}">Home</a></li>
                <li class="has-children">
                    <a href="{{route('site_rooms')}}">Rooms</a>
                </li>
                <li class="has-children">
                    <a href="{{route('site_services')}}">Services</a>
                </li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('site_contact')}}">Contact</a></li>
            </ul>
        </div>
        <div class="icons-wrap text-md-right">

            <ul class="icons-top d-none d-lg-block">
                <li class="mr-4">
                    <a href="#" class="js-search-toggle"><span class="icon-search2"></span></a>
                </li>
                <li>
                    <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                    <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                    <a href="#"><span class="icon-instagram"></span></a>
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



