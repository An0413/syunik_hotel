@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="armenian-tab" data-bs-toggle="tab"
                                    data-bs-target="#armenian"
                                    type="button" role="tab" aria-controls="armenian" aria-selected="true">Մեր մասին
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="russian-tab" data-bs-toggle="tab" data-bs-target="#russian"
                                    type="button" role="tab" aria-controls="russian" aria-selected="false">Մեր
                                առավելությունները
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="english-tab" data-bs-toggle="tab" data-bs-target="#english"
                                    type="button" role="tab" aria-controls="english" aria-selected="false">Լուսանկարներ
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="languageTabsContent">
                        <div class="tab-pane fade show active" id="armenian" role="tabpanel"
                             aria-labelledby="armenian-tab">
                            <h6 class="mt-4 mb-4">Մեր մասին</h6>
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2">
                                    <a href="{{route('about_create')}}">
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
                                                <th scope="col">Անուն հայերեն</th>
                                                <th scope="col">Անուն ռուսերեն</th>
                                                <th scope="col">Անուն անգլերեն</th>
                                                <th scope="col">Ինֆո հայերեն</th>
                                                <th scope="col">Ինֆո ռուսերեն</th>
                                                <th scope="col">Ինֆո անգլերեն</th>
                                                <th scope="col">Խմբագրել</th>
                                                <th scope="col">Ջնջել</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($about as $key=>$value)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{Str::words($value->name_am, 5, '...')}}</td>
                                                    <td>{{Str::words($value->name_ru, 5, '...')}}</td>
                                                    <td>{{Str::words($value->name_en, 5, '...')}}</td>
                                                    <td>{{Str::words($value->info_am, 25, '...')}}</td>
                                                    <td>{{Str::words($value->info_ru, 25, '...')}}</td>
                                                    <td>{{Str::words($value->info_en, 25, '...')}}</td>
                                                    <td>
                                                        <a href="{{route('about_edit', $value->id)}}">
                                                            <i class="nav-icon fas fa-edit text-primary"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('about_delete', $value->id) }}"
                                                              method="POST"
                                                              style="display: inline;"
                                                              onsubmit="return confirm('Իսկապե՞ս ուզում եք ջնջել այս տեղեկությունը:');">
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
                            <h6 class="mt-4 mb-4">Մեր առավելությունները</h6>
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2">
                                    <a href="{{route('about_details_create')}}">
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
                                                <th scope="col">Վերնագիր հայերեն</th>
                                                <th scope="col">Վերնագիր ռուսերեն</th>
                                                <th scope="col">Վերնագիր անգլերեն</th>
                                                <th scope="col">Խմբագրել</th>
                                                <th scope="col">Ջնջել</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($about_details as $key=>$value)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{Str::words($value->detail_am, 5, '...')}}</td>
                                                    <td>{{Str::words($value->detail_ru, 5, '...')}}</td>
                                                    <td>{{Str::words($value->detail_en, 5, '...')}}</td>
                                                    <td>
                                                        <a href="{{route('about_details_edit', $value->id)}}">
                                                            <i class="nav-icon fas fa-edit text-primary"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('about_details_delete', $value->id) }}"
                                                              method="POST"
                                                              style="display: inline;"
                                                              onsubmit="return confirm('Իսկապե՞ս ուզում եք ջնջել այս տեղեկությունը:');">
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
                            <h6 class="mt-4 mb-4">Լուսանկարներ</h6>
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2">
                                    <a href="{{route('about_images_create')}}">
                                        <button class="btn bg-primary create_button">Ավելացնել լուսանկար</button>
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
                                                <th scope="col">Անուն հայերեն</th>
                                                <th scope="col">Անուն ռուսերեն</th>
                                                <th scope="col">Անուն անգլերեն</th>
                                                <th scope="col">Լուսանկար</th>
                                                <th scope="col">Խմբագրել</th>
                                                <th scope="col">Ջնջել</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($images as $key=>$value)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$value->seq}}</td>
                                                    <td>{{$value->title_am}}</td>
                                                    <td>{{$value->title_ru}}</td>
                                                    <td>{{$value->title_en}}</td>
                                                    <td><img src="{{asset('images/about/'.$value->image)}}" class="show_img"></td>
                                                    <td>
                                                        <a href="{{route('about_images_edit', $value->id)}}">
                                                            <i class="nav-icon fas fa-edit text-primary"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('about_images_delete', $value->id) }}"
                                                              method="POST"
                                                              style="display: inline;"
                                                              onsubmit="return confirm('Իսկապե՞ս ուզում եք ջնջել այս լուսանկարը:');">
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
