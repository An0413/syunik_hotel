@include('site.layout.header')

<div class="untree_co--site-wrap">

    <nav class="untree_co--site-nav js-sticky-nav">
        <div class="container d-flex align-items-center">
            <div class="logo-wrap">
                <a href="index.html" class="untree_co--site-logo">LuxuryHotel</a>
            </div>
            <div class="site-nav-ul-wrap text-center d-none d-lg-block">
                <ul class="site-nav-ul js-clone-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="has-children">
                        <a href="rooms.html">Rooms</a>
                    </li>
                    <li class="has-children">
                        <a href="services.html">Services</a>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
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

    <div class="untree_co--site-main">

        <!-- Breadcrumb Section Begin -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>Blog</h2>
                            <div class="bt-option">
                                <a href="home.html">Home</a>
                                <span>Blog Grid</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->

        <!-- Blog Section Begin -->
        <section class="blog-section blog-page spad">
            <div class="container">
                <div class="row">
                    @foreach($blog as $value)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item set-bg" data-setbg="{{asset('site/images/sonImg/blog/'. $value->image)}}">
                                <div class="bi-text">
                                    <span class="b-tag">Travel Trip</span>
                                    <h4><a href="blog-details.html">{{$value->name_en}}</a></h4>
                                    <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12">
                        <div class="load-more">
                            <a href="#" class="primary-btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->

        <!-- Map Section Begin -->

        <!-- Map Section End -->
    </div>
</div>
</body>
</html>
@yield('content')

@include('site.layout.footer')

