@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Խմբագրել տվյալները</h6>
                    <form action="{{route('profile_update', $user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Անուն</label>
                            <input class="form-control" type="text" name="name" value="{{$user->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" name="email"  value="{{$user->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Լուսանկար</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <div class="mb-3">
                            <img src="{{asset('images/profile/'.$user->image)}}" alt="" class="show_img" id="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Խմբագրել</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            let logo = document.querySelector('#image');
            let myImg = document.querySelector('#img');
            logo.onchange = evt => {
                const [file] = logo.files
                if (file) {
                    myImg.src = URL.createObjectURL(file);
                    myImg.style.visibility = 'visible';
                }
            }
        </script>
@endsection
