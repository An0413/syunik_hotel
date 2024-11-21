@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ավելացնել նոր ծառայություն</h6>
                    <form action="{{ route('services_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="seq" class="form-label">Հերթականություն</label>
                            <input class="form-control" type="number" name="seq" min="1">
                        </div>
                        <div class="mb-3">
                            <label for="name_am" class="form-label">Անուն հայերեն</label>
                            <input class="form-control" type="text" name="name_am" >
                        </div>
                        <div class="mb-3">
                            <label for="name_ru" class="form-label">Անուն ռուսերեն</label>
                            <input class="form-control" type="text" name="name_ru" >
                        </div>
                        <div class="mb-3">
                            <label for="name_en" class="form-label">Անուն անգլերեն</label>
                            <input class="form-control" type="text" name="name_en" >
                        </div>
                        <div class="mb-3">
                            <label for="info_am" class="form-label">Տեղեկություն հայերեն</label>
                            <textarea class="form-control" placeholder="Սենյակի նկարագիր"
                                      style="height: 150px;" name="info_am"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_ru" class="form-label">Տեղեկություն ռուսերեն</label>
                            <textarea class="form-control" placeholder="Описание номера"
                                      style="height: 150px;" name="info_ru"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_en" class="form-label">Տեղեկություն անգլերեն</label>
                            <textarea class="form-control" placeholder="Room description"
                                      style="height: 150px;" name="info_en"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="icon" class="form-label">Լոգո</label>
                            <input class="form-control" type="text" name="icon" >
                        </div>
                        <button type="submit" class="btn btn-primary">Ավելացնել</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
