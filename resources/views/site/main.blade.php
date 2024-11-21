@extends('site.layout.layout')
@section('content')


    <!-- Navbar End -->
    <div class="untree_co--site-main">
        <div class="">
            <div class="">
                <div class="container-fluid">
                    <video width="100%" height="auto" autoplay muted loop=1>
                        <source src="{{asset('site/video/hotel.mp4')}}" type="video/mp4">
                        {{--                        <source src="hotel.ogg" type="video/ogg">--}}
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <!-- SERVICES LIST & BOOKING FORM -->
        <section class="ftco-booking">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" class="booking-form">
                            <div class="row">
                                <div class="col-md-3 d-flex">
                                    <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                        <div class="wrap">
                                            <label for="">Check-in Date</label>
                                            <input type="date" class="form-control checkin_date"
                                                   placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex">
                                    <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                        <div class="wrap">
                                            <label for="">Check-out Date</label>
                                            <input type="date" class="form-control checkout_date"
                                                   placeholder="Check-out date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md d-flex">
                                    <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                        <div class="wrap">
                                            <label for="">Room</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="type" id="type" class="form-control">
                                                        @foreach($room_type as $value)
                                                            <option value="">{{$value->type_en}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md d-flex">
                                    <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                        <div class="wrap">
                                            <label for="">Customer</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
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
                                <div class="col-md d-flex">
                                    <div class="form-group d-flex align-self-stretch">
                                        <input type="submit" value="Check Availability"
                                               class="btn btn-primary py-2 px-3 align-self-stretch bigHeight">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICES LIST & BOOKING FORM END -->
        <!-- About Us Section Begin -->
        <section class="aboutus-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($about as $value)
                            <div class="about-text">
                                <div class="section-title">
                                    <span>About Us</span>
                                    <h2>{{$value->title_en}}</h2>
                                </div>
                                <p class="f-para">{{$value->info_en}}</p>

                                <a href="{{route('about')}}" class="primary-btn about-btn">Read More</a>
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
                            <h2>Rooms</h2>
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
                                        <h2>{{$value->price . 'AMD'}}<span>/Pernight</span></h2>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="r-o">Size:</td>
                                                <td>{{$value->surface}}</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Capacity:</td>
                                                <td>Max persion</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Bed:</td>
                                                <td>King Beds</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Services:</td>
                                                <td>Wifi, Television, Bathroom,...</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{route('site_rooms_details', $value->id)}}" class="primary-btn">More
                                            Details</a>
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
                            <h3 class="text-center">Hotel Amenities</h3>
                        </div>
                    </div>
                </div>
                <div class="row custom-row-02192 align-items-stretch">
                    @foreach($services as $value)
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset($value->icon)}}" alt="Image" class="img-fluid">
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
                            <h2>Blog</h2>
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
                                    <span class="b-tag">Travel Trip</span>
                                    <h4><a href="#">{{$value->name}}</a></h4>
                                    <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-12">
                        <div class="load-more">
                            <a href="{{route('blog')}}" class="primary-btn">Load More</a>
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
        <div id="accordion" class="accordion-container">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                            Lorem Item #1
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                            Lorem Item Item #2
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                            Lorem Item Item #3
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

