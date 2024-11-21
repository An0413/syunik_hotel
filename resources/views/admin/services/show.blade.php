@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Մեր մասին</h6>
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2">
                            <a href="{{route('services_create')}}">
                                <button class="create_button">Ավելացնել</button>
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
                                            <td>{{$value->name_am}}</td>
                                            <td>{{$value->name_ru}}</td>
                                            <td>{{$value->name_en}}</td>
                                            <td>{{$value->info_am}}</td>
                                            <td>{{$value->info_ru}}</td>
                                            <td>{{$value->info_en}}</td>
                                            <td>{{$value->icon}}</td>
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
