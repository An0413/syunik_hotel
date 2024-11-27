@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Իմ տվյալները</h6>
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2"></div>
                    </div>
                    <div class="col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('images/profile/'.$user->image)}}" class="card-img-top" alt="Լուսանկար չունեք">
                            <div class="card-body">
                                <h5 class="card-title">{{$user->name}}</h5>
                                <p class="card-text">{{$user->email}}</p>
                                <a href="{{route('profile_edit',$user->id)}}" class="btn btn-primary">Խմբագրել
                                    <i class="nav-icon fas fa-edit text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
