@extends('site.layout.layout')
@section('content')
    <!-- Navbar End -->
    <div class="untree_co--site-main">
        <div class="">
            <div class="position-relative">
                <div class="container-fluid">
                    <video width="100%" height="auto" autoplay muted loop=1>
                        <source src="{{asset('site/video/hotel.mp4')}}" type="video/mp4">
                        {{--                        <source src="hotel.ogg" type="video/ogg">--}}
                        Your browser does not support the video tag.
                    </video>
                    <!-- SERVICES LIST & BOOKING FORM -->
                    <section class="ftco-booking" id="form_overlay">
                        <div class="container mb-3">
                            <div class="bg-white">
                                <form action="#" class="booking-form">
                                    <div class="row">
                                        <div class="col-md col-sm-6">
                                            <div class="form-group py-2 px-3">
                                                <div class="wrap">
                                                    <label for="">Check-in Date</label>
                                                    <input type="text" class="form-control checkin_date"
                                                           placeholder="Check-in date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group py-2 px-3">
                                                <div class="wrap">
                                                    <label for="">Check-out Date</label>
                                                    <input type="text" class="form-control checkout_date"
                                                           placeholder="Check-out date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group py-2 px-3">
                                                <div class="wrap">
                                                    <label for="">Room</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="type" id="type" class="form-control w-100">
                                                                @foreach($room_type as $value)
                                                                    <option value="">{{$value->type_en}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6">
                                            <div class="form-group py-2 px-3">
                                                <div class="wrap">
                                                    <label for="">Customer</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="" id="" class="form-control w-100">
                                                                <option value="">1 Adult</option>
                                                                <option value="">2 Adult</option>
                                                                <option value="">3 Adult</option>
                                                                <option value="">4 Adult</option>
                                                                <option value="">5 Adult</option>
                                                                <option value="">6 Adult</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md col-sm-6 text-center mb-0">
                                            <div class="form-group mb-0">
                                                <input type="submit" value="Check Availability"
                                                       class="btn btn-primary bigHeight">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- SERVICES LIST & BOOKING FORM END -->
                </div>
            </div>
        </div>

        <!-- About Us Section Begin -->
        <section class="aboutus-section spad ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($about as $value)
                            <div class="about-text">
                                <div class="section-title">
                                    <span>About Us</span>
                                    <h2>{{$value->title_en}}</h2>
                                </div>
                                <p class="f-para">{{$value->info_en}}</p>

                                <a href="{{route('about')}}" class="primary-btn about-btn">{{__('messages.more')}}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        <div class="about-pic">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{asset('site/images/sonImg/about/about-1.jpg')}}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('site/images/sonImg/about/about-2.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section End -->
        <!-- Home Room Section Begin -->
        <section class="hp-room-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span>Proposed </span>
                            <h2>{{__('messages.rooms')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="hp-room-items">
                    <div class="row">
                        @foreach($rooms as $value)
                            <div class="col-lg-3 col-md-6">
                                <div class="hp-room-item set-bg"
                                     data-setbg="{{asset('site/images/SonImg/room/' . $value->image)}}">
                                    <div class="hr-text">
                                        <h3>{{$value->roomType->type_en}}</h3>
                                        <h2>{{$value->price . 'AMD'}}<span>/{{__('messages.pernight')}}</span></h2>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="r-o">{{__('messages.size')}}:</td>
                                                <td>{{$value->surface}}</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">{{__('messages.capacity')}}:</td>
                                                <td>{{$value->capacity}}</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">{{__('messages.child')}}:</td>
                                                <td>{{$value->childs}}</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">{{__('messages.bed')}}:</td>
                                                <td>{{__('messages.king')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">{{__('messages.conditions')}}:</td>
                                                <td>{{__('messages.services')}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{route('site_rooms_details', $value->id)}}"
                                           class="primary-btn">{{__('messages.more')}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Home Room Section End -->
        <div class="untree_co--site-section">
            <div class="container">
                <div class="container pt-0 pb-5">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6 section-heading" data-aos="fade-up">
                            <h3 class="text-center">{{__('messages.amenities')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row custom-row-02192 align-items-stretch">
                    @foreach($services as $value)
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset('site/images/images/svg/'.$value->icon)}}" alt="Image"
                                         class="img-fluid">
                                </div>
                                <h3>{{$value->name_en}}</h3>
                                <p>{{$value->info_en}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Begin -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>{{__('messages.blog')}}</h2>
                            {{--                            <div class="bt-option">--}}
                            {{--                                <a href="{{route('site')}}">Home</a>--}}
                            {{--                                <span>Blog Grid</span>--}}
                            {{--                            </div>--}}
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
                            <div class="blog-item set-bg"
                                 data-setbg="{{asset('site/images/sonImg/blog/'. $value->image)}}">
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
                            <a href="{{route('blog')}}" class="primary-btn">{{__('messages.more')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
        <!-- Map Section Begin -->
        <section class="contact-section spad">
            <div class="container">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98576.22921549056!2d46.22282235250755!3d39.457869848898824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403e00e3af71aded%3A0x126cd3448dc8c82c!2sSyunik%20Hotel!5e0!3m2!1shy!2sam!4v1732196431786!5m2!1shy!2sam"
                        height="470" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
        <!-- Map Section End -->
    </div>
    <!-- FAQ begin -->
    <section class="container">
        <!-- FAQ begin -->

        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Հաճախ տրվող հարցեր</h2>
                    </div>
                </div>
            </div>
            <div id="accordion" class="accordion-container">
                <div class="c">
                    <input type="checkbox" id="faq-1">
                    <h4><label for="faq-1">Ի՞նչ տեսարժան վայրեր կան մոտակայքում</label></h4>
                    <div class="p">
                        <p>This a very very simple accordion.</p>
                    </div>
                </div>
                <div class="c">
                    <input type="checkbox" id="faq-2">
                    <h4><label for="faq-2">Կազմակերպու՞մ եք արդյոք տուրեր դեպի տեսարժան վայրեր</label></h4>
                    <div class="p">
                        <p>Yes with pure CSS and HTML.</p>
                    </div>
                </div>
                <div class="c">
                    <input type="checkbox" id="faq-3">
                    <h4><label for="faq-3">ՈՒնե՞ք հանդիպումների կազմակերպման համար նախատեսված դահլիճներ </label></h4>
                    <div class="p">
                        <p>I was inpired by an article on css-tricks. <a
                                href="https://css-tricks.com/the-checkbox-hack/">link to article</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>
@endsection

