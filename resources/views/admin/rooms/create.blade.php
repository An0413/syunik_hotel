@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ավելացնել նոր սենյակ</h6>
                    <form action="{{ route('rooms_store') }}" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="seq" class="form-label">Հերթականություն</label>
                            <input class="form-control" type="number" id="seq">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Լուսանկար</label>
                            <input class="form-control" type="file" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="info_am" class="form-label">Տեղեկություն հայերեն</label>
                            <textarea class="form-control" placeholder="Սենյակի նկարագիր" id="info_arm" style="height: 150px;"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_ru" class="form-label">Информация на русском языке</label>
                            <textarea class="form-control" placeholder="Описание номера" id="info_ru" style="height: 150px;"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="info_en" class="form-label">Information in English</label>
                            <textarea class="form-control" placeholder="Room description" id="info_en" style="height: 150px;"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Գին</label>
                            <input type="number" class="form-control" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">Զաղչված արժեք</label>
                            <input type="number" class="form-control" id="discount">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Համար</label>
                            <input type="number" class="form-control" id="number">
                        </div>
                        <div class="mb-3">
                            <label for="surface" class="form-label">Մակերես/մ<sup>2</sup></label>
                            <input type="number" class="form-control" id="surface">
                        </div>
                        <button type="submit" class="btn btn-primary">Ավելացնլ</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
