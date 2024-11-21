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
                                                <input type="text" class="form-control checkin_date"
                                                       placeholder="Check-in date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 d-flex">
                                        <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                            <div class="wrap">
                                                <label for="">Check-out Date</label>
                                                <input type="text" class="form-control checkout_date"
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
                                                        <select name="" id="" class="form-control">
                                                            <option value="">Suite</option>
                                                            <option value="">Family Room</option>
                                                            <option value="">Deluxe Room</option>
                                                            <option value="">Classic Room</option>
                                                            <option value="">Superior Room</option>
                                                            <option value="">Luxury Room</option>
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
                                                   class="btn btn-primary py-3 px-4 align-self-stretch bigHeight">
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
                            <div class="about-text">
                                <div class="section-title">
                                    <span>About Us</span>
                                    <h2>Intercontinental LA <br/>Westlake Hotel</h2>
                                </div>
                                <p class="f-para">Sona.com is a leading online accommodation site. We’re passionate about
                                    travel. Every day, we inspire and reach millions of travelers across 90 local websites
                                    in 41
                                    languages.</p>
                                <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
                                    apartment, guest house, or tree house, we’ve got you covered.</p>
                                <a href="#" class="primary-btn about-btn">Read More</a>
                            </div>
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
                                <span>Առաջարկվող </span>
                                <h2>Սենյակներ</h2>
                            </div>
                        </div>
                    </div>
                    <div class="hp-room-items">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="hp-room-item set-bg"
                                     data-setbg="{{asset('site/images/SonImg/room/room-b1.jpg')}}">
                                    <div class="hr-text">
                                        <h3>Double Room</h3>
                                        <h2>199$<span>/Pernight</span></h2>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="r-o">Size:</td>
                                                <td>30 ft</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Capacity:</td>
                                                <td>Max persion 5</td>
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
                                        <a href="#" class="primary-btn">More Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="hp-room-item set-bg"
                                     data-setbg="{{asset('site/images/SonImg/room/room-b2.jpg')}}">
                                    <div class="hr-text">
                                        <h3>Premium King Room</h3>
                                        <h2>159$<span>/Pernight</span></h2>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="r-o">Size:</td>
                                                <td>30 ft</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Capacity:</td>
                                                <td>Max persion 5</td>
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
                                        <a href="#" class="primary-btn">More Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="hp-room-item set-bg"
                                     data-setbg="{{asset('site/images/SonImg/room/room-b3.jpg')}}">
                                    <div class="hr-text">
                                        <h3>Deluxe Room</h3>
                                        <h2>198$<span>/Pernight</span></h2>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="r-o">Size:</td>
                                                <td>30 ft</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Capacity:</td>
                                                <td>Max persion 5</td>
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
                                        <a href="#" class="primary-btn">More Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="hp-room-item set-bg"
                                     data-setbg="{{asset('site/images/SonImg/room/room-b4.jpg')}}">
                                    <div class="hr-text">
                                        <h3>Family Room</h3>
                                        <h2>299$<span>/Pernight</span></h2>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="r-o">Size:</td>
                                                <td>30 ft</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Capacity:</td>
                                                <td>Max persion 5</td>
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
                                        <a href="#" class="primary-btn">More Details</a>
                                    </div>
                                </div>
                            </div>
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
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset('site/images/images/svg/parking.svg')}}" alt="Image"
                                         class="img-fluid">
                                </div>
                                <h3>Free Self-Parking</h3>
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities
                                    provided may range from a modest-quality.</p>
                                <p>
                                <p><a href="#" class="readmore reverse">Read More</a></p></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset('site/images/images/svg/internet.svg')}}" alt="Image"
                                         class="img-fluid">
                                </div>
                                <h3>High speed Internet access</h3>
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities
                                    provided may range from a modest-quality.</p>
                                <p>
                                <p><a href="#" class="readmore reverse">Read More</a></p></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset('site/images/images/svg/wifi.svg')}}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Complimentary WiFi in public areas</h3>
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities
                                    provided may range from a modest-quality.</p>
                                <p>
                                <p><a href="#" class="readmore reverse">Read More</a></p></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset('site/images/images/svg/elevator.svg')}}" alt="Image"
                                         class="img-fluid">
                                </div>
                                <h3>Elevators</h3>
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities
                                    provided may range from a modest-quality.</p>
                                <p>
                                <p><a href="#" class="readmore reverse">Read More</a></p></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset('site/images/images/svg/partners.svg')}}" alt="Image"
                                         class="img-fluid">
                                </div>

                                <h3>Meeting rooms</h3>
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities
                                    provided may range from a modest-quality.</p>
                                <p>
                                <p><a href="#" class="readmore reverse">Read More</a></p></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset('site/images/images/svg/washing-machine.svg')}}" alt="Image"
                                         class="img-fluid">
                                </div>
                                <h3>Laundry and Valet service</h3>
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities
                                    provided may range from a modest-quality.</p>
                                <p>
                                <p><a href="#" class="readmore reverse">Read More</a></p></p>
                            </div>
                        </div>

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
                                <div class="bt-option">
                                    <a href="./home.html">Home</a>
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
                                <div class="blog-item set-bg"
                                     data-setbg="{{asset('site/images/sonImg/blog/'. $value->image)}}">
                                    <div class="bi-text">
                                        <span class="b-tag">Travel Trip</span>
                                        <h4><a href="./blog-details.html">{{$value->name}}</a></h4>
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
            <section class="contact-section spad">
                <div class="container">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0606825994123!2d-72.8735845851828!3d40.760690042573295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e85b24c9274c91%3A0xf310d41b791bcb71!2sWilliam%20Floyd%20Pkwy%2C%20Mastic%20Beach%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1578582744646!5m2!1sen!2sbd"
                            height="470" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </section>
            <!-- Map Section End -->
        </div>
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
                    <h4><label for="faq-3">ՈՒնե՞ք հանդիպումների կազմակերպման համար նաղատեսված դահլիճներ  </label></h4>
                    <div class="p">
                        <p>I was inpired by an article on css-tricks. <a href="https://css-tricks.com/the-checkbox-hack/">link to article</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ end -->
@endsection

