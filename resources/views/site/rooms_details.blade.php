@extends('site.layout.layout')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{__('messages.rooms')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Room Details Section Begin -->
    <section class="room-details-section spad" id="spad">
        <div class="container">
            <div class="row">
                @if(1 == 2)
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="{{asset('site/images/SonImg/room/'.$room->image)}}" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{$room->roomType->type_en}}</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <a href="#">{{__('messages.booking')}}</a>
                                </div>
                            </div>
                            @if($room->discount > 0)
                                <h3>
                                    <del style="color: red">{{$room->price}} AMD
                                    </del> &nbsp;&nbsp;{{ $room->discount}}AMD<span>/{{__('messages.pernight')}}</span>
                                </h3>
                            @else
                                <h3>{{$room->price}} AMD<span>/{{__('messages.pernight')}}</span></h3>
                            @endif
                            <table>
                                <tbody>
                                <tr>
                                    <td class="r-o">{{__('messages.size')}}:</td>
                                    <td>{{$room->surface}} ft</td>
                                </tr>
                                <tr>
                                    <td class="r-o">{{__('messages.capacity')}}:</td>
                                    <td>{{$room->capacity}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">{{__('messages.child')}}:</td>
                                    <td>{{$room->childs}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">{{__('messages.bed')}}:</td>
                                    <td>{{$room->capacity}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">{{__('messages.floor')}}:</td>
                                    <td>{{$room->floor}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">{{__('messages.amenities')}}:</td>
                                    <td>{{__('messages.services')}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="f-para">Motorhome or Trailer that is the question for you. Here are some of the
                                advantages and disadvantages of both, so you will be confident when purchasing an RV.
                                When comparing Rvs, a motorhome or a travel trailer, should you buy a motorhome or fifth
                                wheeler? The advantages and disadvantages of both are studied so that you can make your
                                choice wisely when purchasing an RV. Possessing a motorhome or fifth wheel is an
                                achievement of a lifetime. It can be similar to sojourning with your residence as you
                                search the various sites of our great land, America.</p>
                            <p>The two commonly known recreational vehicle classes are the motorized and towable.
                                Towable rvs are the travel trailers and the fifth wheel. The rv travel trailer or fifth
                                wheel has the attraction of getting towed by a pickup or a car, thus giving the
                                adaptability of possessing transportation for you when you are parked at your campsite.
                            </p>
                        </div>
                    </div>
                    <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="{{asset('site/images/sonImg/room/avatar/avatar-1.jpg')}}" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="{{asset('site/images/sonImg/room/avatar/avatar-2.jpg')}}" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-add">
                        <h4>Add Review</h4>
                        <form action="#" class="ra-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <h5>You Rating:</h5>
                                        <div class="rating">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review"></textarea>
                                    <button type="submit">{{__('messages.submit')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>{{__('messages.reservation')}}</h3>
                        <form action="#" method="post">
                            <div class="check-date">
                                <label for="date-in">{{__('messages.check_in')}}</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">{{__('messages.check_out')}}</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">{{__('messages.guests')}}</label>
                                <select id="guest" name="adults">
                                    <option value="1">1 {{__('messages.adult')}}</option>
                                    <option value="2">2 {{__('messages.adults')}}</option>
                                    <option value="3">3 {{__('messages.adults')}}</option>
                                    <option value="4">4 {{__('messages.adults')}}</option>
                                </select>
                                <label for="guest">{{__('messages.child')}}:</label>
                                <select id="childs" name="childs">
                                    <option value=""></option>
                                    <option value="1">1 {{__('messages.child2')}}</option>
                                    <option value="2">2 {{__('messages.child3')}}</option>
                                    <option value="3">3 {{__('messages.child3')}}</option>
                                    <option value="4">4 {{__('messages.child3')}}</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">{{__('messages.rooms')}}:</label>
                                <select id="room">
                                    <option value="">1 {{__('messages.room2')}}</option>
                                </select>
                            </div>
                            <button type="submit">{{__('messages.availability')}}</button>
                        </form>
                    </div>
                </div>
                @else
                    @if(1 == 1)
                        <iframe id="dynamicIframe" src ="https://tatiosa.net/booking2.php?propid=244859&amp;numadult=2&amp;advancedays=-1&amp;referer=SyunikHotel.com" width="100%" style="max-width:100%;border:none;overflow:auto;"><p><a href="https://tatiosa.net/booking2.php?propid=244859&amp;referer=SyunikHotel.com" title="Book Now">Book Now</a></p></iframe>
                    @else
                        <iframe id="dynamicIframe" src ="https://tatiosa.net/booking2.php?propid=244859&roomid=515500&amp;numadult=2&amp;advancedays=-1&amp;referer=SyunikHotel.com" width="100%" style="max-width:100%;border:none;overflow:auto;"><p><a href="https://tatiosa.net/booking2.php?propid=244859&amp;referer=SyunikHotel.com" title="Book Now">Book Now</a></p></iframe>
                    @endif
                @endif

            </div>
        </div>
    </section>
    <!-- Room Details Section End -->
    <script>
        const iframe = document.getElementById('dynamicIframe');

        iframe.onload = () => {
            const iframeContentHeight = iframe.contentWindow.document.body.scrollHeight;
            iframe.style.height = iframeContentHeight + 'px';
        };

    </script>
@endsection

