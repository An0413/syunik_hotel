@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Խմբագրել ծառայություն</h6>
                    <form action="{{route('services_update', $services->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="seq" class="form-label">Հերթականություն</label>
                            <input class="form-control" type="number" name="seq" min="1" value="{{$services->seq}}">
                        </div>
                        <div class="mb-3">
                            <label for="name_am" class="form-label">Անուն հայերեն</label>
                            <input class="form-control" type="text" name="name_am" value="{{$services->name_am}}">
                        </div>
                        <div class="mb-3">
                            <label for="name_ru" class="form-label">Անուն ռուսերեն</label>
                            <input class="form-control" type="text" name="name_ru" value="{{$services->ru}}">
                        </div>
                        <div class="mb-3">
                            <label for="name_en" class="form-label">Անուն անգլերեն</label>
                            <input class="form-control" type="text" name="name_en" value="{{$services->en}}">
                        </div>
                        <div class="mb-3">
                            <label for="info_am" class="form-label">Տեղեկություն հայերեն</label>
                            <textarea class="form-control" placeholder="Սենյակի նկարագիր"
                                      style="height: 150px;" name="info_am">{{$services->info_am}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_ru" class="form-label">Տեղեկություն ռուսերեն</label>
                            <textarea class="form-control" placeholder="Описание номера"
                                      style="height: 150px;" name="info_ru">{{$services->info_ru}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_en" class="form-label">Տեղեկություն անգլերեն</label>
                            <textarea class="form-control" placeholder="Room description"
                                      style="height: 150px;" name="info_en">{{$services->info_ru}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="icon" class="form-label">Լոգո</label>
                            <input class="form-control" type="text" name="icon" {{$services->icon}}>
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
