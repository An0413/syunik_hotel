@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4" id="content">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
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
                    <div class="tab-content" id="languageTabsContent">
                        <div class="tab-pane fade show active" id="armenian" role="tabpanel"
                             aria-labelledby="armenian-tab">
                            <h6 class="mb-4 mt-3">Բլոգ</h6>
                            <div class="row">
                                <div class="col-lg-10 col-xl-10 col-sm-10 col-md-10"></div>
                                <div class="col-lg-12 col-xl-2 col-sm-2 col-md-2">
                                    <a href="{{route('blog_create')}}">
                                        <button class="btn bg-primary create_button">Ավելացնել</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="bg-light rounded h-100 p-4">
                                    <h6 class="mb-4"></h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Հ/հ</th>
                                                <th scope="col">Հերթականություն</th>
                                                <th scope="col">Անուն</th>
                                                <th scope="col">Բանալի բառ</th>
                                                <th scope="col">Նկարագրություն</th>
                                                <th scope="col">Ինֆո</th>
                                                <th scope="col">Լուսանկար</th>
                                                <th scope="col">Մեկնաբանություններ</th>
                                                <th scope="col">Խմբագրել</th>
                                                <th scope="col">Ջնջել</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($blog_am as $key=>$value)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$value->seq}}</td>
                                                    <td>{{Str::words($value->name, 5, '...')}}</td>
                                                    <td>{{Str::words($value->meta_keyword, 5, '...')}}</td>
                                                    <td>{{Str::words($value->meta_description, 15, '...')}}</td>
                                                    <td>{{Str::words($value->info, 25, '...')}}</td>
                                                    <td>
                                                        <img src="{{asset('images/blog/'.$value->image)}}"
                                                             class="show_img">
                                                    </td>
                                                    <td>
                                                        <a href="{{route('blog_comments_show', $value->id)}}">
                                                            <i class="nav-icon fas fa-solid fa-comment fs_icon"></i></i>
                                                        </a>
                                                    </td> <td>
                                                        <a href="{{route('blog_edit', $value->id)}}">
                                                            <i class="nav-icon fas fa-edit text-primary"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('blog_delete', $value->id) }}"
                                                              method="POST"
                                                              style="display: inline;"
                                                              onsubmit="return confirm('Իսկապե՞ս ուզում եք ջնջել այս բլոգը:');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link p-0 border-0">
                                                                <i class="nav-icon fas fa-trash text-danger"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="russian" role="tabpanel" aria-labelledby="russian-tab">
                            <h6 class="mb-4 mt-3">Блог</h6>
                            <div class="row">
                                <div class="col-lg-10 col-xl-10 col-sm-10 col-md-10"></div>
                                <div class="col-lg-12 col-xl-2 col-sm-2 col-md-2">
                                    <a href="{{route('blog_create')}}">
                                        <button class="btn bg-primary create_button">Добавлять</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="bg-light rounded h-100 p-4">
                                    <h6 class="mb-4"></h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">С/н</th>
                                                <th scope="col">Последовательность</th>
                                                <th scope="col">Имя</th>
                                                <th scope="col">ключевое слово</th>
                                                <th scope="col">Описание</th>
                                                <th scope="col">Информация</th>
                                                <th scope="col">Фото</th>
                                                <th scope="col">Редактировать</th>
                                                <th scope="col">Удалить</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($blog_ru as $key=>$value)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$value->seq}}</td>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->meta_keyword}}</td>
                                                    <td>{{$value->meta_description}}</td>
                                                    <td>{{$value->info}}</td>
                                                    <td>
                                                        <img src="{{asset('images/blog/'.$value->image)}}"
                                                             class="show_img">
                                                    </td>
                                                    <td>
                                                        <a href="{{route('blog_edit', $value->id)}}">
                                                            <i class="nav-icon fas fa-edit text-primary"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('blog_delete', $value->id) }}"
                                                              method="POST"
                                                              style="display: inline;"
                                                              onsubmit="return confirm('Вы уверены, что хотите удалить этот блог?:');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link p-0 border-0">
                                                                <i class="nav-icon fas fa-trash text-danger"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="english" role="tabpanel" aria-labelledby="english-tab">
                            <h6 class="mb-4 mt-3">Blog</h6>
                            <div class="row">
                                <div class="col-lg-10 col-xl-10 col-sm-10 col-md-10"></div>
                                <div class="col-lg-12 col-xl-2 col-sm-2 col-md-2">
                                    <a href="{{route('blog_create')}}">
                                        <button class="btn bg-primary create_button">Add</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="bg-light rounded h-100 p-4">
                                    <h6 class="mb-4"></h6>
                                    <div class="table-responsive">
                                        <table class="table" id="data-table">
                                            <thead>
                                            <tr>
                                                <th scope="col">R/n</th>
                                                <th scope="col">Sequence</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Keyword</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Info</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($blog_en as $key=>$value)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$value->seq}}</td>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->meta_keyword}}</td>
                                                    <td>{{$value->meta_description}}</td>
                                                    <td>{{$value->info}}</td>
                                                    <td>
                                                        <img src="{{asset('images/blog/'.$value->image)}}"
                                                             class="show_img">
                                                    </td>
                                                    <td>
                                                        <a href="{{route('blog_edit', $value->id)}}">
                                                            <i class="nav-icon fas fa-edit text-primary"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('blog_delete', $value->id) }}"
                                                              method="POST"
                                                              style="display: inline;"
                                                              onsubmit="return confirm('Are you sure you want to delete this blog?:');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link p-0 border-0">
                                                                <i class="nav-icon fas fa-trash text-danger"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

