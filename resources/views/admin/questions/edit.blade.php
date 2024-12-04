@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Խմբագրել հարցը</h6>
                    <form action="{{route('questions_update', $questions->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="seq" class="form-label">Հերթականություն</label>
                            <input class="form-control" type="number" name="seq" value="{{$questions->seq}}">
                        </div>
                        <div class="mb-3">
                            <label for="question_am" class="form-label">Հարց հայերեն</label>
                            <input class="form-control" type="text" name="question_am" value="{{$questions->question_am}}">
                        </div>
                        <div class="mb-3">
                            <label for="answer_am" class="form-label">Պատասխան հայերեն</label>
                            <textarea class="form-control" placeholder="Պատասխան հայերեն"
                                      style="height: 150px;" name="answer_am">{{$questions->answer_am}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="question_ru" class="form-label">Հարց ռուսերեն</label>
                            <input class="form-control" type="text" name="question_ru"  value="{{$questions->question_ru}}">
                        </div>
                        <div class="mb-3">
                            <label for="answer_ru" class="form-label">Պատասխան ռուսերեն</label>
                            <textarea class="form-control" placeholder="Պատասխան ռուսերեն"
                                      style="height: 150px;" name="answer_ru">{{$questions->answer_ru}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="question_en" class="form-label">Հարց անգլերեն</label>
                            <input class="form-control" type="text" name="question_en"  value="{{$questions->question_en}}">
                        </div>
                        <div class="mb-3">
                            <label for="answer_en" class="form-label">Պատասխան անգլերեն</label>
                            <textarea class="form-control" placeholder="Պատասխան անգլերեն"
                                      style="height: 150px;" name="answer_en">{{$questions->answer_en}}</textarea>
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
