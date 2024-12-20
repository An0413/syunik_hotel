@extends('site.layout.layout')
@section('content')

<main class="site-untree_co--main">
    <div class="untree_co--site-hero inner-page" style="background-image: url({{'images/services/services.JPG'}})">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="site-hero-contents" data-aos="fade-up">
                        <h1 class="hero-heading text-white">{{__('messages.conditions')}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co--site-section">
        <div class="container">
            <div class="row justify-content-center text-center pt-0 pb-5">
                <div class="col-lg-6 section-heading" data-aos="fade-up">
                    <h3 class="text-center">{{__('messages.amenities')}}</h3>
                </div>
            </div>

            <div class="row custom-row-02192 align-items-stretch">
                @foreach($services as $value)
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-29191 text-center h-100">
                        <div class="media-29191-icon">
                            <img src="{{asset('images/services/'.$value->icon)}}" alt="Image" class="img-fluid">
                        </div>
                        <h3>{{$value->{'name_' . app()->getLocale()} }}</h3>
                        <p>{{$value->{'info_' . app()->getLocale()} }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</main>
@endsection
