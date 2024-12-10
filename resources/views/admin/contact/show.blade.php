@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Կապ</h6>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4"></h6>
                            <div class="table-responsive">
                                <table class="table" id="data-table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Հ/հ</th>
                                        <th scope="col">Հասցե հայերեն</th>
                                        <th scope="col">Հասցե ռուսերեն</th>
                                        <th scope="col">Հասցե անգլերեն</th>
                                        <th scope="col">Հեռախոսահամար</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Ֆեյսբուք</th>
                                        <th scope="col">Ինսագրամ</th>
                                        <th scope="col">Լինկեդին</th>
                                        <th scope="col">Ինֆո հայերեն</th>
                                        <th scope="col">Ինֆո ռուսերեն</th>
                                        <th scope="col">Ինֆո անգլերեն</th>
                                        <th scope="col">Խմբագրել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contact as $key=>$value)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{Str::words($value->location_am, 10, '...')}}</td>
                                            <td>{{Str::words($value->location_ru, 10, '...')}}</td>
                                            <td>{{Str::words($value->location_en, 10, '...')}}</td>
                                            <td>{{Str::words($value->phone, 25, '...')}}</td>
                                            <td>{{Str::words($value->email, 25, '...')}}</td>
                                            <td>{{Str::words($value->facebook, 25, '...')   }}</td>
                                            <td>{{Str::words($value->instagram, 25, '...')   }}</td>
                                            <td>{{Str::words($value->linkedin, 25, '...')   }}</td>
                                            <td>{{Str::words($value->contact_info_am, 25, '...')   }}</td>
                                            <td>{{Str::words($value->contact_info_ru, 25, '...')   }}</td>
                                            <td>{{Str::words($value->contact_info_en, 25, '...')   }}</td>
                                            <td>
                                                <a href="{{route('contact_edit', $value->id)}}">
                                                    <i class="nav-icon fas fa-edit text-primary"></i>
                                                </a>
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
