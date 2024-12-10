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
                                    <span class="b-tag">Syunik hotel</span>
                                    <h4 ><a href="javascript:void(0)">{{$value->name}}</a></h4>

                                    <div class="b-time"><i class="icon_clock_alt"></i>{{$value->created_at->format('Y/m/d')}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                    {{ $blog->links('pagination::bootstrap-4') }} <!-- Use this for Bootstrap styling -->
                    </div>
                </div>
            </div>
        </section>

@endsection

