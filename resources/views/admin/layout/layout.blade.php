<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Syunik Hotel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/myStyle.css')}}" rel="stylesheet">
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    @include('admin.layout.header')

    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0" id="my_main_nav">
            {{--            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">--}}
            {{--                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>--}}
            {{--            </a>--}}
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Նամակներ</span>
                    </a>
                    @php
                        $messages = \App\Models\MessagesToAdmin::orderBy('id', 'desc')->get();
                    @endphp
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        @foreach($messages as $key=>$value)
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center dropdown_item_div">
                                    <div class="ms-2  message-container">
                                        <h4 class="fw-normal mb-0">{{$value->name}}</h4>
                                        <small>{{$value->email}}</small>
                                        <hr class="dropdown-divider">
                                        <p class="message-content">{{$value->message}}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        @php
                            $admin = Auth::user();
                        @endphp
                        <img class="rounded-circle me-lg-2" src="{{asset('images/profile/'. $admin->image)}}" alt=""
                             style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">{{$admin->name}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{route('profile')}}" class="dropdown-item">Իմ պրոֆիլը</a>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" class="dropdown-item" onclick="document.getElementById('logoutForm').submit();">Դուրս
                            գալ</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        @yield('content')

    </div>

    @include('admin.layout.footer')
</div>

</body>
</html>


