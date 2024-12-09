@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Սենյակներ</h6>
                    <div class="row">
                        <div class="col-lg-10 col-xl-10 col-sm-10 col-md-10"></div>
                        <div class="col-lg-12 col-xl-2 col-sm-2 col-md-2">
                            <a href="{{route('rooms_create')}}">
                                <button class="btn bg-primary create_button">Ավելացնել</button>
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
                                        <th scope="col">Ինֆո հայերեն</th>
                                        <th scope="col">Լուսանկար</th>
                                        <th scope="col">Մարդիկ</th>
                                        <th scope="col">Երեխաներ</th>
                                        <th scope="col">Գին</th>
                                        <th scope="col">Զեղչված գին</th>
                                        <th scope="col">Հարկ</th>
                                        <th scope="col">Համար</th>
                                        <th scope="col">Տիպ</th>
                                        <th scope="col">Մակերես</th>
                                        <th scope="col">Ավելացնել լուսանկար</th>
                                        <th scope="col">Խմբագրել</th>
                                        <th scope="col">Ջնջել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rooms as $key=>$value)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$value->seq}}</td>
                                            <td>{{Str::words($value->info_am, 25, '...')}}</td>
                                            <td>
                                                <img src="{{asset('images/rooms/'.$value->image)}}" class="show_img">
                                            </td>
                                            <td>{{$value->capacity}}</td>
                                            <td>{{$value->childs}}</td>
                                            <td>{{$value->price}}</td>
                                            <td>{{$value->discount}}</td>
                                            <td>{{$value->floor}}</td>
                                            <td>{{$value->number}}</td>
                                            <td>{{$value->roomType->type_am}}</td>
                                            <td>{{$value->surface}}</td>
                                            <td><a href="{{route('rooms_images_show', $value->id)}}"><i
                                                        class="nav-icon fas fa-image text-primary"
                                                        style="margin-left: 40px"></i>
                                                </a></td>
                                            <td>
                                                <a href="{{route('rooms_edit', $value->id)}}">
                                                    <i class="nav-icon fas fa-edit text-primary"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('rooms_delete', $value->id) }}" method="POST"
                                                      style="display: inline;"
                                                      onsubmit="return confirm('Իսկապե՞ս ուզում եք ջնջել այս սենյակը:');">
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
