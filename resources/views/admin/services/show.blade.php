@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ծառայություններ</h6>
                    <div class="row">
                        <div class="col-lg-10 col-xl-10 col-sm-10 col-md-10"></div>
                        <div class="col-lg-12 col-xl-2 col-sm-2 col-md-2">
                            <a href="{{route('services_create')}}">
                                <button class="btn bg-primary create_button float-end">Ավելացնել</button>
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
                                        <th scope="col">Հ/հ</th>
                                        <th scope="col">Հերթականություն</th>
                                        <th scope="col">Անուն հայերեն</th>
                                        <th scope="col">Անուն ռուսերեն</th>
                                        <th scope="col">Անուն անգլերեն</th>
                                        <th scope="col">Ինֆո հայերեն</th>
                                        <th scope="col">Ինֆո ռուսերեն</th>
                                        <th scope="col">Ինֆո անգլերեն</th>
                                        <th scope="col">Լոգո</th>
                                        <th scope="col">Խմբագրել</th>
                                        <th scope="col">Ջնջել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $key=>$value)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$value->seq}}</td>
                                            <td>{{Str::words($value->name_am, 5, '...')}}</td>
                                            <td>{{Str::words($value->name_ru, 5, '...')}}</td>
                                            <td>{{Str::words($value->name_en, 5, '...')}}</td>
                                            <td>{{Str::words($value->info_am, 25, '...')}}</td>
                                            <td>{{Str::words($value->info_ru, 25, '...')}}</td>
                                            <td>{{Str::words($value->info_en, 25, '...')   }}</td>
                                            <td>
                                                <img src="{{asset('images/services/'.$value->icon)}}" class="show_img">
                                            </td>
                                            <td>
                                                <a href="{{route('services_edit', $value->id)}}">
                                                    <i class="nav-icon fas fa-edit text-primary"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('services_delete', $value->id) }}" method="POST"
                                                      style="display: inline;"
                                                      onsubmit="return confirm('Իսկապե՞ս ուզում եք ջնջել այս ծառայությունը:');">
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
@endsection
