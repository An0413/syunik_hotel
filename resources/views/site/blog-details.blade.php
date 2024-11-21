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

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg"
             data-setbg="{{asset('site/images/sonImg/blog/blog-details/blog-details-hero.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-hero-text">
                        <span>Travel Trip & Camping</span>
                        <h2>Cdc Issues Health Alert Notice For Travelers To Usa From Hon</h2>
                        <ul>
                            <li class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</li>
                            <li><i class="icon_profile"></i> Kerry Jones</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog-details-text">
                        @foreach($blog_details as $value)
                            <div class="bd-title">
                                <p>{{$value->info_en}}</p>
                            </div>
                        @endforeach
                        <div class="bd-pic">
                            <div class="bp-item">
                                <img src="{{asset('site/images/sonImg/blog/blog-details/blog-details-1.jpg')}}" alt="">
                            </div>
                            <div class="bp-item">
                                <img src="{{asset('site/images/sonImg/blog/blog-details/blog-details-2.jpg')}}" alt="">
                            </div>
                            <div class="bp-item">
                                <img src="{{asset('site/images/sonImg/blog/blog-details/blog-details-3.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="tag-share">
                            <div class="tags">
                                <a href="#">Travel Trip</a>
                                <a href="#">Camping</a>
                                <a href="#">Event</a>
                            </div>
                            <div class="social-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                        <div class="comment-option">
                            <h4>2 Comments</h4>
                            <div class="single-comment-item first-comment">
                                <div class="sc-author">
                                    <img src="{{asset('site/images/sonImg/blog/blog-details/avatar/avatar-1.jpg')}}"
                                         alt="">
                                </div>
                                <div class="sc-text">
                                    <span>27 Aug 2019</span>
                                    <h5>Brandon Kelley</h5>
                                    <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et
                                        dolore magnam.</p>
                                    <a href="#" class="comment-btn">Like</a>
                                    <a href="#" class="comment-btn">Reply</a>
                                </div>
                            </div>
                            <div class="single-comment-item reply-comment">
                                <div class="sc-author">
                                    <img src="{{asset('site/images/sonImg/blog/blog-details/avatar/avatar-2.jpg')}}"
                                         alt="">
                                </div>
                                <div class="sc-text">
                                    <span>27 Aug 2019</span>
                                    <h5>Brandon Kelley</h5>
                                    <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et
                                        dolore magnam.</p>
                                    <a href="#" class="comment-btn like-btn">Like</a>
                                    <a href="#" class="comment-btn reply-btn">Reply</a>
                                </div>
                            </div>
                            <div class="single-comment-item second-comment ">
                                <div class="sc-author">
                                    <img src="{{asset('site/images/sonImg/blog/blog-details/avatar/avatar-3.jpg')}}"
                                         alt="">
                                </div>
                                <div class="sc-text">
                                    <span>27 Aug 2019</span>
                                    <h5>Brandon Kelley</h5>
                                    <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et
                                        dolore magnam.</p>
                                    <a href="#" class="comment-btn">Like</a>
                                    <a href="#" class="comment-btn">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="{{route('comment')}}" method="post" role="form" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name" name="name" id="name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email" name="email" id="comment">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <textarea placeholder="Messages" name="comment" id="comment"></textarea>
                                    </div>
{{--                                    <div class="my-3">--}}
{{--                                        <div class="loading">Loading</div>--}}
{{--                                        <div class="error-message"></div>--}}
{{--                                        <div class="sent-message">Ձեր հաղորդագրությունն ուղարկված է։ Շնորհակալություն։</div>--}}
{{--                                    </div>--}}
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="site-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Recommend Blog Section Begin -->
    <section class="recommend-blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Recommended</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blog as $value)
                <div class="col-md-4">
                    <div class="blog-item set-bg" data-setbg="{{asset('site/images/sonImg/blog/'. $value->image)}}">
                        <div class="bi-text">
                            <span class="b-tag">Travel Trip</span>
                            <h4><a href="#">{{$value->name_en}}</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Recommend Blog Section End -->

</div>


<!--deluxe -->
</body>
</html>
@yield('content')

@include('site.layout.footer')
