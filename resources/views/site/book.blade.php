@extends('site.layout.layout')
@section('content')
    <div class="breadcrumb-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{__('messages.booking')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="room-details-section spad" id="spad">
        <div class="container">
            <div class="row">
                {!! $room_iframe !!}
            </div>
        </div>
    </section>
@endsection
