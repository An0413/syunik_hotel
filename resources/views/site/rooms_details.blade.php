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
                <div class="col-md-8">
                    <div class="room-details-item">
                        <img src="{{asset('site/images/SonImg/room/'.$room->image)}}" alt="">
                        <p class="f-para">
                            {{$room->{'info_' . App::getLocale()} }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="room-details-item">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{$room->roomType->{'type_' . app()->getLocale()} }}</h3>
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

                            <div class="rd-title">
                                <div class="rdt-right">
                                    <a href="{{route('book', $room->id)}}">{{__('messages.booking')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
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
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->
@endsection

