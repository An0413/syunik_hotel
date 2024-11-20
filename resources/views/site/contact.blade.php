@extends('site.layout.layout')
@section('content')

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <table>
                            <tbody>
                            <tr>
                                <td class="c-o">Address:</td>
                                <td>{{$contact->location}}</td>
                            </tr>
                            <tr>
                                <td class="c-o">Phone:</td>
                                <td>{{$contact->phone}}</td>
                            </tr>
                            <tr>
                                <td class="c-o">Email:</td>
                                <td>{{$contact->email}}</td>
                            </tr>
                            <tr>
                                <td class="c-o">Fax:</td>
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
                                <input type="text" name="user_name" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="user_email" placeholder="Your Email" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="user_message" placeholder="Your Message" required></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                        <div class="alert">
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
                                <div class="alert-success p-2" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                        </div>
                    </form>
                </div>

            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0606825994123!2d-72.8735845851828!3d40.760690042573295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e85b24c9274c91%3A0xf310d41b791bcb71!2sWilliam%20Floyd%20Pkwy%2C%20Mastic%20Beach%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1578582744646!5m2!1sen!2sbd"
                    height="470" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection

