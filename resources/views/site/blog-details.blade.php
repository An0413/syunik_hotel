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
                            <!-- Comments -->
                            <div class="comment-option mt-5">
                                <h4>{{$comment_count}} Comments</h4>
                                @foreach($nestedComments as $value)
                                    <div class="single-comment-item first-comment">
                                        <div class="sc-author">
                                            <img
                                                src="{{asset('site/images/sonImg/blog/blog-details/avatar/avatar-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="sc-text">
                                            <span>{{$value->created_at}}</span>
                                            <h5>{{$value->name}}</h5>
                                            <p>{{$value->comment}}</p>
                                            <a href="#" class="comment-btn">Like</a>
                                            {{--<a href="#" class="comment-btn">Reply</a>--}}
                                            <button type="button" class="btn comment-btn reply-btn" data-toggle="modal"
                                                    data-target="#replyModal" data-id="{{$value->id}}">
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                    @if (isset($value->replies) && count($value->replies) > 0)
                                            @include('site.comment_array', ['comments' => $value->replies])
                                    @endif
                                @endforeach
                            </div>
                            <div class="leave-comment">
                                <h4>Leave A Comment</h4>
                                <form action="{{route('comment', $id)}}" method="post" role="form" class="comment-form">
                                    @csrf
                                    <input type="hidden" name="parent_id" value="0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Name" name="name" id="name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Email" name="email" id="comment">
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <textarea placeholder="Comment" name="comment" id="comment"></textarea>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="site-btn">Send Comment</button>
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
        <section class="recommend-blog-section spad" id="spad">
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
    <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title text-center reply_text" id="replyModalLabel"><b>Leave your reply comment
                            here</b></h5>
                    <form action="{{route('comment', $id)}}" method="post" role="form" class="comment-form">
                        @csrf
                        <input type="hidden" name="parent_id" value="0" id="parent_id">
                        <div class="row mt-4">
                            <div class="col-lg-12 text-center">
                                <input type="text" placeholder="Name" name="name" id="name" class="name_com">
                            </div>
                            <div class="col-lg-12 text-center">
                                <input type="text" placeholder="Email" name="email" id="comment" class="name_com">
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea placeholder="Comment reply" name="comment" id="comment"
                                          class="com_message"></textarea>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="site-btn send_comment">Send Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn close_btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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
