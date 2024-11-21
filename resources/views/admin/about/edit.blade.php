@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Խմբագրել սենյակ</h6>
                    <form action="{{route('about_update', $about->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name_am" class="form-label">Անուն հայերեն</label>
                            <input class="form-control" type="text" name="name_am" value="{{$about->name_am}}">
                        </div>
                        <div class="mb-3">
                            <label for="name_ru" class="form-label">Անուն ռուսերեն</label>
                            <input class="form-control" type="text" name="name_ru"  value="{{$about->name_ru}}">
                        </div>
                        <div class="mb-3">
                            <label for="name_en" class="form-label">Անուն անգլերեն</label>
                            <input class="form-control" type="text" name="name_en"  value="{{$about->name_en}}">
                        </div>
                        <div class="mb-3">
                            <label for="info_am" class="form-label">Տեղեկություն հայերեն</label>
                            <textarea class="form-control" placeholder="Սենյակի նկարագիր"
                                      style="height: 150px;" name="info_am">{{$about->info_am}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_ru" class="form-label">Информация на русском языке</label>
                            <textarea class="form-control" placeholder="Описание номера"
                                      style="height: 150px;" name="info_ru">{{$about->info_ru}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_en" class="form-label">Information in English</label>
                            <textarea class="form-control" placeholder="Room description"
                                      style="height: 150px;" name="info_en">{{$about->info_en}}</textarea>
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
