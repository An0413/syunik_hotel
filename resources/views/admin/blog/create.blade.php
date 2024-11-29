@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="armenian-tab" data-bs-toggle="tab"
                                    data-bs-target="#armenian"
                                    type="button" role="tab" aria-controls="armenian" aria-selected="true">Հայերեն
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="russian-tab" data-bs-toggle="tab" data-bs-target="#russian"
                                    type="button" role="tab" aria-controls="russian" aria-selected="false">Русский
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="english-tab" data-bs-toggle="tab" data-bs-target="#english"
                                    type="button" role="tab" aria-controls="english" aria-selected="false">English
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->

                    <div class="tab-content" id="languageTabsContent">
                        <!-- Armenian Tab -->
                        <div class="tab-pane fade show active" id="armenian" role="tabpanel"
                             aria-labelledby="armenian-tab">
                            <h6 class="mb-4 mt-3">Ավելացնել բլոգ</h6>
                            <form action="{{ route('blog_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <input class="form-control" type="hidden" name="lang_id" value="1">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="seq" class="form-label">Հերթականություն</label>
                                    <input class="form-control" type="number" name="seq" min="1" required>
                                    <small class="text-danger" id="nameError" style="display: none;">Հերթականության դաշտը պարտադիր է։</small>
                                </div>
                                <div class="mb-3">
                                    <label for="meta_keyword" class="form-label">Բանալի բառ</label>
                                    <input class="form-control" type="text" name="meta_keyword">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Նկարագրություն</label>
                                    <input class="form-control" type="text" name="meta_description">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Անուն հայերեն</label>
                                    <input type="text" class="form-control"  name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="info" class="form-label">Տեղեկություն հայերեն</label>
                                    <textarea class="form-control" placeholder="նկարագիր"
                                              style="height: 150px;" name="info"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Լուսանկար</label>
                                    <input class="form-control" type="file" id="image_am" name="image"
                                           accept="image/jpeg, image/jpg, image/png, image/gif">
                                    <small class="text-danger" id="nameError" style="display: none;">Նկարի դաշտը պարտադիր է։</small>
                                </div>
                                <div class="mb-3">
                                    <img src="" alt="" class="create_img" id="img_am">
                                </div>

                                <div class="mb-3">
                                    <label for="video" class="form-label">Վիդեո</label>
                                    <input type="file" class="form-control" id="video_am" name="video" accept="video/*">
                                </div>
                                <div class="mb-3">
                                    <video controls class="blog_video" id="blog_video_am">
                                        <source src="" type="video/*">
                                        Ձեր բրաուզերը չի աջակցում վիդեոներին։
                                    </video>
                                </div>
                                <button type="submit" class="btn btn-primary">Ավելացնել</button>
                            </form>
                        </div>

                        <!-- Russian Tab -->
                        <div class="tab-pane fade" id="russian" role="tabpanel" aria-labelledby="russian-tab">
                            <h6 class="mb-4 mt-3">Добавить блог</h6>
                            <form action="{{ route('blog_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <input class="form-control" type="hidden" name="lang_id" value="2">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="seq" class="form-label">Последовательность</label>
                                    <input class="form-control" type="number" name="seq" min="1">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_keyword" class="form-label">Ключевое слово</label>
                                    <input class="form-control" type="text"  name="meta_keyword">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Описание</label>
                                    <input class="form-control" type="text"
                                           name="meta_description">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Имя на русском языке</label>
                                    <input type="text" class="form-control"  name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="info" class="form-label">Информация на русском языке</label>
                                    <textarea class="form-control" placeholder="Описание"
                                              style="height: 150px;" name="info"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Фото</label>
                                    <input class="form-control" type="file" id="image_ru" name="image"
                                           accept="image/jpeg, image/jpg, image/png, image/gif">
                                </div>
                                <div class="mb-3">
                                    <img src="" alt="" class="create_img" id="img_ru">
                                </div>

                                <div class="mb-3">
                                    <label for="video" class="form-label">Видео</label>
                                    <input type="file" class="form-control" id="video_ru" name="video" accept="video/*">
                                </div>
                                <div class="mb-3">
                                    <video controls class="blog_video" id="blog_video_ru">
                                        <source src="" type="video/*">
                                        Ваш браузер не поддерживает видео
                                    </video>
                                </div>
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </form>
                        </div>

                        <!-- English Tab -->
                        <div class="tab-pane fade" id="english" role="tabpanel" aria-labelledby="english-tab">
                            <h6 class="mb-4 mt-3">Add a blog</h6>
                            <form action="{{ route('blog_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <input class="form-control" type="hidden"  name="lang_id" value="3">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="seq" class="form-label">Sequence</label>
                                    <input class="form-control" type="number" name="seq" min="1">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_keyword" class="form-label">Keyword</label>
                                    <input class="form-control" type="text"  name="meta_keyword">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Description</label>
                                    <input class="form-control" type="text"
                                           name="meta_description">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name in English</label>
                                    <input type="text" class="form-control"  name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="info" class="form-label">Information in English</label>
                                    <textarea class="form-control" placeholder="description"
                                              style="height: 150px;" name="info"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Photo</label>
                                    <input class="form-control" type="file" id="image_en" name="image"
                                           accept="image/jpeg, image/jpg, image/png, image/gif">
                                </div>
                                <div class="mb-3">
                                    <img src="" alt="" class="create_img" id="img_en">
                                </div>

                                <!-- Video Upload -->
                                <div class="mb-3">
                                    <label for="video" class="form-label">Video</label>
                                    <input type="file" class="form-control" id="video_en" name="video" accept="video/*">
                                </div>
                                <div class="mb-3">
                                    <video controls class="blog_video" id="blog_video_en">
                                        <source src="" type="video/*">
                                        Your browser does not support videos
                                    </video>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let video_am = document.querySelector('#video_am');
            let mtVideo_am = document.querySelector('#blog_video_am');
            video_am.onchange = evt => {
                const [file] = video_am.files
                if (file) {
                    mtVideo_am.src = URL.createObjectURL(file); 
                    mtVideo_am.style.visibility = 'visible';
                }
            }

            let video_ru = document.querySelector('#video_ru');
            let mtVideo_ru = document.querySelector('#blog_video_ru');
            video_ru.onchange = evt => {
                const [file] = video_ru.files
                if (file) {
                    mtVideo_ru.src = URL.createObjectURL(file);
                    mtVideo_ru.style.visibility = 'visible';
                }
            }

            let video_en = document.querySelector('#video_en');
            let mtVideo_en = document.querySelector('#blog_video_en');
            video_en.onchange = evt => {
                const [file] = video_en.files
                if (file) {
                    mtVideo_en.src = URL.createObjectURL(file);
                    mtVideo_en.style.visibility = 'visible';
                }
            }

            let logo_am = document.querySelector('#image_am');
            let myImg_am = document.querySelector('#img_am');
            logo_am.onchange = evt => {
                const [file] = logo_am.files
                if (file) {
                    myImg_am.src = URL.createObjectURL(file);
                    myImg_am.style.visibility = 'visible';
                }
            }

            let logo_ru = document.querySelector('#image_ru');
            let myImg_ru = document.querySelector('#img_ru');
            logo_ru.onchange = evt => {
                const [file] = logo_ru.files
                if (file) {
                    myImg_ru.src = URL.createObjectURL(file);
                    myImg_ru.style.visibility = 'visible';
                }
            }

            let logo_en = document.querySelector('#image_en');
            let myImg_en = document.querySelector('#img_en');
            logo_en.onchange = evt => {
                const [file] = logo_en.files
                if (file) {
                    myImg_en.src = URL.createObjectURL(file);
                    myImg_en.style.visibility = 'visible';
                }
            }
        </script>
@endsection
