@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">
                        @if($blog->lang_id == 1)
                            Խմբագրել բլոգ
                        @elseif($blog->lang_id == 2)
                            Редактировать блог
                        @else
                            Edit blog
                        @endif
                    </h6>
                    <form action="{{route('blog_update', $blog->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="seq" class="form-label">
                                @if($blog->lang_id == 1)
                                    Հերթականություն
                                @elseif($blog->lang_id == 2)
                                    Последовательность
                                @else
                                    Sequence
                                @endif
                            </label>
                            <input class="form-control" type="number" name="seq" value="{{$blog->seq}}"
                                   min="1">
                        </div>
                        <div class="mb-3">
                            <label for="meta_keyword" class="form-label">
                                @if($blog->lang_id == 1)
                                    Բանալի բառ
                                @elseif($blog->lang_id == 2)
                                    Ключевое слово
                                @else
                                    Keyword
                                @endif
                            </label>
                            <input type="text" class="form-control" name="meta_keyword" value="{{$blog->meta_keyword}}">
                        </div>
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">
                                @if($blog->lang_id == 1)
                                    Նկարագրություն
                                @elseif($blog->lang_id == 2)
                                    Описание
                                @else
                                    Description
                                @endif
                            </label>
                            <input type="text" class="form-control" name="meta_description"
                                   value="{{$blog->meta_description}}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                @if($blog->lang_id == 1)
                                    Անուն
                                @elseif($blog->lang_id == 2)
                                    Имя
                                @else
                                    Name
                                @endif</label>
                            <input type="text" class="form-control" name="name" value="{{$blog->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="info" class="form-label">
                                @if($blog->lang_id == 1)
                                    Տեղեկություն
                                @elseif($blog->lang_id == 2)
                                    Информация
                                @else
                                    Information
                                @endif
                            </label>
                            <textarea class="form-control" placeholder="նկարագիր"
                                      style="height: 150px;" name="info">{{$blog->info}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">
                                @if($blog->lang_id == 1)
                                    Լուսանկար
                                @elseif($blog->lang_id == 2)
                                    Фото
                                @else
                                    Photo
                                @endif
                            </label>
                            <input class="form-control" type="file" id="image" name="image"
                                   accept="image/jpeg, image/jpg, image/png, image/gif">
                        </div>
                        <div class="mb-3">
                            <img src="{{asset('images/blog/'.$blog->image)}}" alt="" class="show_img" id="img">
                        </div>
                        <div class="mb-3">
                            <label for="video" class="form-label">
                                @if($blog->lang_id == 1)
                                    Վիդեո
                                @elseif($blog->lang_id == 2)
                                    Видео
                                @else
                                    Video
                                @endif
                            </label>
                            <input type="file" class="form-control" id="video" name="video" accept="video/*">
                        </div>
                        <div class="mb-3">
                            <video controls class="blog_show_video" id="blog_video">
                                <source src="{{asset('video/blog/'.$blog->video)}}" type="video/{{ pathinfo($blog->video, PATHINFO_EXTENSION) }}">
                                @if($blog->lang_id == 1)
                                    Ձեր բրաուզերը չի աջակցում վիդեոներին։
                                @elseif($blog->lang_id == 2)
                                    Ваш браузер не поддерживает видео.
                                @else
                                    Your browser does not support videos․
                                @endif
                            </video>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            @if($blog->lang_id == 1)
                                Խմբագրել
                            @elseif($blog->lang_id == 2)
                                Редактировать
                            @else
                                Edit
                            @endif
                        </button>
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
