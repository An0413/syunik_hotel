@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ավելացնել նոր առավելություն</h6>
                    <form action="{{ route('about_details_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="detail_am" class="form-label">Անուն հայերեն</label>
                            <input class="form-control" type="text" name="detail_am">
                        </div>
                        <div class="mb-3">
                            <label for="detail_ru" class="form-label">Անուն ռուսերեն</label>
                            <input class="form-control" type="text" name="detail_ru">
                        </div>
                        <div class="mb-3">
                            <label for="detail_en" class="form-label">Անուն անգլերեն</label>
                            <input class="form-control" type="text" name="detail_en">
                        </div>
                        <button type="submit" class="btn btn-primary">Ավելացնել</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
