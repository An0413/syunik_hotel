@extends('site.layout.layout')
@section('content')
        <!-- Breadcrumb Section Begin -->
        <div class="breadcrumb-section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>{{__('messages.travel')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->

        <!-- Blog Section Begin -->
        <section class="blog-section blog-page spad" id="spad">
            <div class="container">
                <div class="row">
                    @foreach($blog as $value)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item set-bg blog_item" data-setbg="{{asset('images/blog/'. $value->image)}}"
                                 data-href="{{route('blog_details', $value->id)}}">
                                <div class="bi-text">
                                    <span class="b-tag">Travel Trip</span>
                                    <h4><a href="javascript:void(0)">{{$value->name}}</a></h4>

                                    <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12">
                        <div class="load-more">
                            <a href="#" class="primary-btn">{{__('messages.more')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

