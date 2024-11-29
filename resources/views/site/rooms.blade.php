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
    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                @foreach($rooms as $value)
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="{{asset('site/images/SonImg/room/'.$value->image)}}" alt="">
                            <div class="ri-text">
                                <h4>{{$value->roomType->type_en}}</h4>
                                @if($value->discount > 0)
                                    <h3>
                                        <del style="color: red">{{$value->price}}AMD
                                        </del> &nbsp;&nbsp;{{ $value->price - $value->price * $value->discount/100}}AMD
                                        <span>/{{__('messages.pernight')}}</span>
                                    </h3>
                                @else
                                    <h3>{{$value->price}}AMD<span>/{{__('messages.pernight')}}</span></h3>
                                @endif

                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="r-o">{{__('messages.size')}}:</td>
                                        <td>{{$value->surface}} ft</td>
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
                                        <td>{{$value->capacity}}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td class="r-o">{{__('messages.floor')}}:</td>
                                        <td>{{$value->floor}}</td>
                                    </tr>
                                    <td class="r-o">{{__('messages.conditions')}}:</td>
                                    <td>{{__('messages.services')}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="{{asset('/rooms_details/'.$value->id)}}" class="primary-btn">{{__('messages.more')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->
@endsection
