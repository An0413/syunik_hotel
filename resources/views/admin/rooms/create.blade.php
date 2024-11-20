@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ավելացնել նոր սենյակ</h6>
                    <form action="{{ route('rooms_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="seq" class="form-label">Հերթականություն</label>
                            <input class="form-control" type="number" id="seq" name="seq" min="1">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Լուսանկար</label>
                            <input class="form-control" type="file" id="image" name="image"
                                   accept="image/jpeg, image/jpg, image/png, image/gif">
                        </div>
                        <div class="mb-3">
                            <img src="" alt="" class="create_img" id="img">
                        </div>
                        <div class="mb-3">
                            <label for="info_am" class="form-label">Տեղեկություն հայերեն</label>
                            <textarea class="form-control" placeholder="Սենյակի նկարագիր" id="info_arm"
                                      style="height: 150px;" name="info_am"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_ru" class="form-label">Информация на русском языке</label>
                            <textarea class="form-control" placeholder="Описание номера" id="info_ru"
                                      style="height: 150px;" name="info_ru"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_en" class="form-label">Information in English</label>
                            <textarea class="form-control" placeholder="Room description" id="info_en"
                                      style="height: 150px;" name="info_en"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Գին</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">Զաղչված արժեք</label>
                            <input type="number" class="form-control" id="discount" name="discount">
                        </div>
                        <div class="mb-3">
                            <label for="childs" class="form-label">Երեխաներ</label>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"
                                    name="childs">
                                <option selected="" value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type_id" class="form-label">Սենյակի տիպ</label>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"
                                    name="type_id">
                                @foreach($roomtype as $item)
                                    <option value="{{$item->id}}">{{$item->type_am}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="stage" class="form-label">Հարկ</label>
                            <input type="number" class="form-control" id="stage" name="stage" min="1" max="12">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Համար</label>
                            <input type="number" class="form-control" id="number" name="number">
                        </div>
                        <div class="mb-3">
                            <label for="surface" class="form-label">Մակերես/մ<sup>2</sup></label>
                            <input type="number" class="form-control" id="surface" name="surface">
                        </div>
                        <button type="submit" class="btn btn-primary">Ավելացնել</button>
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
