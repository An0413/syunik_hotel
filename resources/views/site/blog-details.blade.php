@extends('site.layout.layout')
@section('content')
    <div class="untree_co--site-wrap">


        <!-- Blog Details Hero Section Begin -->
    {{--        <div class="bd-hero-text">--}}
    {{--            @foreach($blog_details as $value)--}}
    {{--                <section class="blog-details-hero set-bg"--}}
    {{--                         data-setbg="{{asset('/images/blog/' . $value->image)}}">--}}
    {{--                    <div class="container">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-lg-10 offset-lg-1">--}}

    {{--                                --}}{{--                                <span>Travel Trip & Camping</span>--}}
    {{--                                <h2>{{$value->name}}</h2>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </section>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    <!-- Blog Details Hero End -->

        <!-- Blog Details Section Begin -->
        <section class="blog-details-section details_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="blog-details-text">
                            @foreach($blog_details as $value)
                                <div class="blog_name">
                                    <p class="b_name">{{$value->name}}</p>
                                </div>
                                <div class="row">
                                    <div class="bd-title col-12 col-md-6 mb-4">
                                        <p>{{$value->info}}</p>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                        <video controls autoplay muted class="w-100">
                                            <source src="{{asset('/video/blog/'. $value->video)}}"
                                                    type="video/{{ pathinfo($value->video, PATHINFO_EXTENSION) }}">
                                        </video>
                                    </div>
                                </div>
                            @endforeach
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
                            <!-- Comments -->
                            <div class="comment-option">
                                <h4>2 Comments</h4>
                                <div class="single-comment-item first-comment">
                                    <div class="sc-author">
                                        <img
                                            src="{{asset('site/images/sonImg/blog/blog-details/avatar/avatar-1.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="sc-text">
                                        <span>27 Aug 2019</span>
                                        <h5>Brandon Kelley</h5>
                                        <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet,
                                            consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora. incidunt ut
                                            labore
                                            et
                                            dolore magnam.</p>
                                        <a href="#" class="comment-btn">Like</a>
                                        <a href="#" class="comment-btn">Reply</a>
                                    </div>
                                </div>
                                <div class="single-comment-item reply-comment">
                                    <div class="sc-author">
                                        <img
                                            src="{{asset('site/images/sonImg/blog/blog-details/avatar/avatar-2.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="sc-text">
                                        <span>27 Aug 2019</span>
                                        <h5>Brandon Kelley</h5>
                                        <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet,
                                            consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora. incidunt ut
                                            labore
                                            et
                                            dolore magnam.</p>
                                        <a href="#" class="comment-btn like-btn">Like</a>
                                        <a href="#" class="comment-btn reply-btn">Reply</a>
                                    </div>
                                </div>
                                <div class="single-comment-item second-comment ">
                                    <div class="sc-author">
                                        <img
                                            src="{{asset('site/images/sonImg/blog/blog-details/avatar/avatar-3.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="sc-text">
                                        <span>27 Aug 2019</span>
                                        <h5>Brandon Kelley</h5>
                                        <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet,
                                            consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora. incidunt ut
                                            labore
                                            et
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
                            <!-- End Comments -->
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
                            <div class="blog-item set-bg blog_item"
                                 data-setbg="{{asset('images/blog/'. $value->image)}}"
                                 data-href="{{route('blog_details', $value->id)}}">
                                <div class="bi-text">
                                    <span class="b-tag">Travel Trip</span>
                                    <h4><a href="javascript:void(0)">{{$value->name}}</a></h4>
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

    <script>
        document.querySelectorAll('[data-setbg]').forEach(function (el) {
            const bg = el.getAttribute('data-setbg'); // Get the value of data-setbg
            // el.style.backgroundImage = `url(${bg})`; // Set the background image
            el.style.backgroundSize = "cover";    // Make the image fit inside the element
            el.style.backgroundPosition = "center"; // Center the image within the element
            el.style.backgroundRepeat = "no-repeat"; // Prevent tiling
        });

    </script>
@endsection
