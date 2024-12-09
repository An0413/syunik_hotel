@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4" id="content">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4 mt-3">Մեկնաբանություններ</h6>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4"></h6>
                            <div class="table-responsive">
                                <table class="table" id="data-table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Հ/հ</th>
                                        <th scope="col">Հերթականություն</th>
                                        <th scope="col">Անուն</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Մեկնաբանություն</th>
                                        <th scope="col">Ջնջել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $key=>$value)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$value->seq}}</td>
                                            <td>{{Str::words($value->name, 5, '...')}}</td>
                                            <td>{{Str::words($value->email, 5, '...')}}</td>
                                            <td>{{Str::words($value->comment, 15, '...')}}</td>
                                            <td>
                                                <form action="{{ route('blog_comment_delete', $value->id) }}"
                                                      method="POST"
                                                      style="display: inline;"
                                                      onsubmit="return confirm('Իսկապե՞ս ուզում եք ջնջել այս մեկնաբանությունը:');">
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

