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
                        <img src="{{asset('images/rooms/'.$room->image)}}" alt="">
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

                        <h4>{{$comment_count}} {{__('messages.comments')}}</h4>
                        @foreach($nestedComments as $value)
                            <div class="review-item">
                                <div class="ri-pic">
                                    <img src="{{asset('site/images/sonImg/com-user.jpg')}}" alt="">
                                </div>
                                <div class="ri-text">
                                    <span>{{$value->created_at->format('d/m/Y') }}</span>
                                    <h5>{{$value->name}}</h5>
                                    <p>{{$value->comment}}</p>
                                    {{--<a href="#" class="comment-btn">Reply</a>--}}
                                    <button type="button" class="btn comment-btn reply-btn" data-toggle="modal"
                                            data-target="#replyModal" data-id="{{$value->id}}">
                                        {{__('messages.reply')}}
                                    </button>
                                </div>
                            </div>
                            @if (isset($value->replies) && count($value->replies) > 0)
                                @include('site.comment_room', ['comments' => $value->replies])
                            @endif
                        @endforeach

                    </div>
                    <div class="review-add">
                        <h4>{{__('messages.leave_comment')}}</h4>
                        <form action="{{route('room_comment', $id)}}" class="ra-form" method="post" role="form">
                            @csrf
                            <input type="hidden" name="parent_id" value="0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="{{__('messages.cname')}}" name="name" id="name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="{{__('messages.cemail')}}" name="email" id="comment">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="{{__('messages.comment')}}" name="comment" id="comment"></textarea>
                                    <button type="submit">{{__('messages.send_comment')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title text-center reply_text" id="replyModalLabel">
                            <b>{{__('messages.replyText')}}</b></h5>
                        <form action="{{route('room_comment', $id)}}" method="post" role="form" class="comment-form">
                            @csrf
                            <input type="hidden" name="parent_id" value="0" id="parent_id">
                            <div class="row mt-4">
                                <div class="col-lg-12 text-center">
                                    <input type="text" placeholder="{{__('messages.cname')}}" name="name" id="name"
                                           class="name_com">
                                </div>
                                <div class="col-lg-12 text-center">
                                    <input type="text" placeholder="{{__('messages.cemail')}}" name="email" id="comment"
                                           class="name_com">
                                </div>
                                <div class="col-lg-12 text-center">
                                <textarea placeholder="{{__('messages.comment')}}" name="comment" id="comment"
                                          class="com_message"></textarea>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit"
                                            class="site-btn send_comment">{{__('messages.send_comment')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn close_btn"
                                data-dismiss="modal">{{__('messages.close')}}</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Room Details Section End -->
@endsection

