<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('site')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">{{--<i class="fa fa-hashtag me-2"></i>--}}Syunik Hotel</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            @php
                $admin = Auth::user();
            @endphp
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('images/profile/'. $admin->image)}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{$admin->name}}</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('rooms_show')}}" class="nav-item nav-link {{ Request::routeIs('rooms_show') ? 'active' : '' }}"><i class="fa fa-solid fa-hotel me-2"></i>Սենյակներ</a>
            <a href="{{route('blog_show')}}" class="nav-item nav-link {{ Request::routeIs('blog_show') ? 'active' : '' }}"><i class="fa fa-solid fa-blog"></i>Բլոգ</a>
            <a href="{{route('about_show')}}" class="nav-item nav-link {{ Request::routeIs('about_show') ? 'active' : '' }}"><i class="fa fa-solid fa-address-card"></i>Մեր մասին</a>
            <a href="{{route('services_show')}}" class="nav-item nav-link {{ Request::routeIs('services_show') ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Ծառայություններ</a>
        </div>
    </nav>
</div>
