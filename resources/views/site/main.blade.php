@extends('site.layout.layout')
@section('content')
    <!-- Navbar End -->
    <div class="untree_co--site-main">
        <div class="container-fluid">
            <video width="100%" height="auto" autoplay muted loop=1>
                <source src="{{asset('site/video/hotel.mp4')}}" type="video/mp4">
                {{--                        <source src="hotel.ogg" type="video/ogg">--}}
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- About Us Section Begin -->
        <section class="aboutus-section spad " id="spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($about as $value)
                            <div class="about-text">
                                <div class="section-title">
                                    <span>{{__('messages.about')}}</span>
                                    <h2>{{$value->{'title_' . app()->getLocale()} }}</h2>
                                </div>
                                <p class="f-para">{{$value->{'info_' . app()->getLocale()} }}</p>

                                <a href="{{route('about')}}" class="primary-btn about-btn">{{__('messages.more')}}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        <div class="about-pic">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{asset('images/about/about-1.jpg')}}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('images/about/about-2.jpg')}}" alt="">
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
                <div class="row pb-5">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>{{__('messages.rooms')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="hp-room-items  pt-3">
                    <div class="row">
                        @foreach($rooms as $value)
                            <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                                <div class="hp-room-item set-bg room_item"
                                     data-href="{{route('site_rooms_details', $value->id)}}"
                                     data-setbg="{{asset('images/rooms/' . $value->image)}}">
                                    <div class="hr-text">
                                        <h3>{{$value->roomType->{'type_' . app()->getLocale()} }}</h3>
                                        <h2>{{$value->price . 'AMD'}}<span>/{{__('messages.pernight')}}</span></h2>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="r-o">{{__('messages.size')}}:</td>
                                                <td>{{$value->surface}}</td>
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
                                                <td>{{__('messages.king')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">{{__('messages.conditions')}}:</td>
                                                <td>{{__('messages.services')}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{route('site_rooms_details', $value->id)}}"
                                           class="primary-btn">{{__('messages.more')}}</a>
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
            <div class="container-fluid">
                <div class="container pt-3 pb-5">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6 section-heading" data-aos="fade-up">
                            <h3 class="text-center">{{__('messages.amenities')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row custom-row-02192 align-items-stretch">
                    @foreach($services as $value)
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{asset('images/services/'.$value->icon)}}" alt="Image"
                                         class="img-fluid">
                                </div>
                                <h3>{{$value->{'name_' . app()->getLocale()} }}</h3>
                                <p>{{$value->{'info_' . app()->getLocale()} }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Begin -->
        <div class="breadcrumb-section breadcrumb_blog">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>{{__('messages.blog')}}</h2>
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
        <section class="blog-section blog-page spad" id="spad">
            <div class="container-fluid">
                <div class="row">
                    @foreach($blog as $value)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item set-bg blog_item" data-href="{{route('blog_details', $value->id)}}"
                                 data-setbg="{{asset('/images/blog/'. $value->image)}}">
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
                            <a href="{{route('blog')}}" class="primary-btn">{{__('messages.more')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
        <!-- Map Section Begin -->
        <section class="contact-section spad" id="spad">
            <div class="container-fluid">
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
    <section class="container-fluid">
        <!-- FAQ begin -->
        <div class="card card_border">
            <div class="card-header text-center card_bg">
                <h2>{{__('messages.faq')}}</h2>
            </div>
            <div class="card-body">
                <div class="accordion">
                    @foreach($questions as $value)
                        <div class="accordion-item">
                            <button class="accordion-header" data-toggle>
                                <span>{{$value->{'question_' . app()->getLocale()} }}</span>
                                <span class="icon">+</span>
                            </button>
                            <div class="accordion-content">
                                <p class="content_p">{{$value->{'answer_' . app()->getLocale()} }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="position-fixed bottom-0 end-0 me-3 mb-3 br-20">
        <a href="{{route('book', 0)}}"
           class="btn btn-primary p-3">{{__('messages.booking')}}</a>
    </div>
    <script>
        document.querySelectorAll('[data-toggle]').forEach((button) => {
            button.addEventListener('click', function () {
                const accordionItem = this.parentElement;
                const content = accordionItem.querySelector('.accordion-content');
                const icon = this.querySelector('.icon');

                // Toggle active class
                accordionItem.classList.toggle('active');

                // Expand or collapse content
                if (accordionItem.classList.contains('active')) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.padding = '15px';
                    icon.textContent = '-';
                } else {
                    content.style.maxHeight = '0';
                    content.style.padding = '0 15px';
                    icon.textContent = '+';
                }
            });
        });
    </script>
@endsection

