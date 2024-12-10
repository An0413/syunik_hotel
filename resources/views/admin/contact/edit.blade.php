@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Խմբագրել ծառայություն</h6>
                    <form action="{{route('contact_update', $contact->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="location_am" class="form-label">Հասցե հայերեն</label>
                            <input class="form-control" type="text" name="location_am" value="{{$contact->location_am}}">
                        </div>
                        <div class="mb-3">
                            <label for="location_ru" class="form-label">Հասցե ռուսերեն</label>
                            <input class="form-control" type="text" name="location_ru" value="{{$contact->location_ru}}">
                        </div>
                        <div class="mb-3">
                            <label for="location_en" class="form-label">Հասցե անգլերեն</label>
                            <input class="form-control" type="text" name="location_en" value="{{$contact->location_en}}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Հեռախոսահամար</label>
                            <input class="form-control" type="text" name="phone" value="{{$contact->phone}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{$contact->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Ֆեյսբուք</label>
                            <input class="form-control" type="text" name="facebook" value="{{$contact->facebook}}">
                        </div>
                        <div class="mb-3">
                            <label for="instagram" class="form-label">Ինստագրամ</label>
                            <input class="form-control" type="text" name="instagram" value="{{$contact->instagram}}">
                        </div>
                        <div class="mb-3">
                            <label for="linkedin" class="form-label">Լինկեդին</label>
                            <input class="form-control" type="text" name="linkedin" value="{{$contact->linkedin}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Խմբագրել</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
