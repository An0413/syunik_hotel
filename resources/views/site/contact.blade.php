@extends('site.layout.layout')
@section('content')

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>{{__('messages.contact')}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <table>
                            <tbody>
                            <tr>
                                <td class="c-o">{{__('messages.address')}}: </td>
                                <td>{{$contact->location}}</td>
                            </tr>
                            <tr>
                                <td class="c-o">{{__('messages.phone')}}: </td>
                                <td>{{$contact->phone}}</td>
                            </tr>
                            <tr>
                                <td class="c-o">{{__('messages.email')}}: </td>
                                <td>{{$contact->email}}</td>
                            </tr>
                            <tr>
                                <td class="c-o">{{__('messages.fax')}}: </td>
                                <td>{{$contact->phone}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="{{route('site_contact_data')}}" class="contact-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="user_name" placeholder="{{__('messages.fname')}}" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="user_email" placeholder="{{__('messages.femail')}}" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="user_message" placeholder="{{__('messages.fmessage')}}" required></textarea>
                                <button type="submit">{{__('messages.submit')}}</button>
                            </div>
                        </div>
                        <div class="alert  px-0 mx-0">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class="alert-success p-3" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                        </div>
                    </form>
                </div>

            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6155.40048674635!2d46.32694248317092!3d39.52125462755632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403e00e3af71aded%3A0x126cd3448dc8c82c!2z1Y3VtdW41oLVttWr1a8g1YDVtdW41oLWgNWh1bbVuNaB!5e0!3m2!1sru!2sam!4v1732180043314!5m2!1sru!2sam" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection

