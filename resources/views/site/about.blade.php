@extends('site.layout.layout')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{__('messages.about')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($info as $value)
                            <div class="ap-title">
                                <h2>{{$value->{'title_' . app()->getLocale()} }}</h2>
                                <p>{{$value->{'info_' . app()->getLocale()} }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            @foreach($detail as $value)
                                <li><i class="icon_check"></i>{{$value->{'detail_' . app()->getLocale()} }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    @foreach($about_image as $value)
                        <div class="col-md-4">
                            <div class="ap-service-item set-bg"
                                 data-setbg="{{asset('site/images/sonImg/about/'. $value->image)}}">
                                <div class="api-text">
                                    <h3>{{$value->{'title_' . app()->getLocale()} }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->

    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="{{asset('site/images/sonImg/video-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>{{__('messages.discover')}}</h2>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="{{asset('site/images/sonImg/play.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
