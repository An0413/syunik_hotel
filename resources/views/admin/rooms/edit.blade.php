@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Խմբագրել սենյակ</h6>
                    <form action="{{route('rooms_update', $rooms->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="seq" class="form-label">Հերթականություն</label>
                            <input class="form-control" type="number" id="seq" name="seq" value="{{$rooms->seq}}"
                                   min="1">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Լուսանկար</label>
                            <input class="form-control" type="file" id="image" name="image"
                                   accept="image/jpeg, image/jpg, image/png, image/gif">
                        </div>
                        <div class="mb-3">
                            <img src="{{asset('images/rooms/'.$rooms->image)}}" alt="" class="show_img" id="img">
                        </div>
                        <div class="mb-3">
                            <label for="info_am" class="form-label">Տեղեկություն հայերեն</label>
                            <textarea class="form-control" placeholder="Սենյակի նկարագիր" id="info_am"
                                      style="height: 150px;" name="info_am">{{$rooms->info_am}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_ru" class="form-label">Информация на русском языке</label>
                            <textarea class="form-control" placeholder="Описание номера" id="info_ru"
                                      style="height: 150px;" name="info_ru">{{$rooms->info_ru}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_en" class="form-label">Information in English</label>
                            <textarea class="form-control" placeholder="Room description" id="info_en"
                                      style="height: 150px;" name="info_en">{{$rooms->info_en}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Գին</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{$rooms->price}}">
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">Զաղչված արժեք</label>
                            <input type="number" class="form-control" id="discount" name="discount"
                                   value="{{$rooms->discount}}">
                        </div>
                        <div class="mb-3">
                            <label for="capacity" class="form-label">Մարդիկ</label>
                            <input type="number" class="form-control" id="capacity" name="capacity"
                                   value="{{$rooms->capacity}}">
                        </div>
                        <div class="mb-3">
                            <label for="childs" class="form-label">Երեխաներ</label>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"
                                    name="childs">
                                <option <?= $rooms->childs == 0 ? 'selected' : '' ?> value="0">0</option>
                                <option <?= $rooms->childs == 1 ? 'selected' : '' ?> value="1">1</option>
                                <option <?= $rooms->childs == 2 ? 'selected' : '' ?> value="2">2</option>
                                <option <?= $rooms->childs == 3 ? 'selected' : '' ?> value="3">3</option>
                                <option <?= $rooms->childs == 4 ? 'selected' : '' ?> value="4">4</option>
                                <option <?= $rooms->childs == 5 ? 'selected' : '' ?> value="5">5</option>
                            </select></div>
                        <div class="mb-3">
                            <label for="type_id" class="form-label">Սենյակի տիպ</label>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"
                                    name="type_id">
                                @foreach($roomtype as $item)
                                    <option <?= $rooms->type_id == $item->id ? 'selected' : '' ?> value="{{$item->id}}">{{$item->type_am}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="floor" class="form-label">Հարկ</label>
                            <input type="number" class="form-control" id="floor" name="floor" min="1" max="12"
                                   value="{{$rooms->floor}}">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Համար</label>
                            <input type="number" class="form-control" id="number" name="number"
                                   value="{{$rooms->number}}">
                        </div>
                        <div class="mb-3">
                            <label for="surface" class="form-label">Մակերես/մ<sup>2</sup></label>
                            <input type="number" class="form-control" id="surface" name="surface"
                                   value="{{$rooms->surface}}">
                        </div>
                        <div class="mb-3">
                            <label for="booking" class="form-label">Ամրագրման կոդ</label>
                            <input type="text" class="form-control" id="booking" name="booking"
                                   value="{{$rooms->bookings->book_iframe}}">
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
