@extends('site.layout.layout')
@section('content')
        <!-- Breadcrumb Section Begin -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>{{__('messages.travel')}}</h2>
                            <div class="bt-option">
                                <a href="#">Home</a>
                                <span>{{__('messages.blog')}}</span>
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
                                    <span class="b-tag">{{__('messages.travel')}}</span>
                                    <h4><a href="#">{{$value->name}}</a></h4>
                                    <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12">
                        <div class="load-more">
                            <a href="#" class="primary-btn">{{__('messages.more')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

