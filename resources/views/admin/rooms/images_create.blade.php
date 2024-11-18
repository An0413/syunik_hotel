@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ավելացնել նոր լուսանկար</h6>
                    <form action="{{ route('rooms_images_store', $id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="seq" class="form-label">Հերթականություն</label>
                            <input class="form-control" type="number" id="seq" name="seq" min="1">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Լուսանկար</label>
                            <input class="form-control" type="file" id="image" name="image"
                                   accept="image/jpeg, image/jpg, image/png, image/gif">
                        </div>
                        <div class="mb-3">
                            <img src="" alt="" class="create_img" id="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Ավելացնել</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            let logo = document.querySelector('#image');
            let myImg = document.querySelector('#img');
            logo.onchange = evt => {
                const [file] = logo.files
                if (file) {
                    myImg.src = URL.createObjectURL(file);
                    myImg.style.visibility = 'visible';
                }
            }
        </script>
@endsection
