@extends('site.layout.layout')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="./home.html">Home</a>
                            <span>Rooms</span>
                        </div>
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
                            <img src="{{asset($value->image)}}" alt="">
                            <div class="ri-text">
                                <h4>Premium King Room</h4>
                                @if($value->discount > 0)
                                    <h3>
                                        <del style="color: red">{{$value->price}}$
                                        </del> &nbsp;&nbsp;{{ $value->price - $value->price * $value->discount/100}}$
                                        <span>/Pernight</span>
                                    </h3>
                                @else
                                    <h3>{{$value->price}}$<span>/Pernight</span></h3>
                                @endif

                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>{{$value->surface}} ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>{{$value->capacity}} adult</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Childs:</td>
                                        <td>{{$value->childs}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{$value->childs + $value->capacity - 1}}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td class="r-o">Childs:</td>
                                        <td>{{$value->childs}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Floor:</td>
                                        <td>{{$value->floor}}</td>
                                    </tr>
                                    <td class="r-o">Services:</td>
                                    <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="{{asset('/rooms_details/'.$value->id)}}" class="primary-btn">More Details</a>
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
