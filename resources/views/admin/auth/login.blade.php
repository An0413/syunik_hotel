<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Syunik Hotel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

</head>

<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-6 offset-sm-3">
            <h3 class="text-center">Մուտք</h3>
            <form method="POST" action="{{ url('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Էլ-հասցե</label>
                    <input type="email" name="email" class="form-control input-sm" required>
                </div>
                <div class="form-group mt-3">
                    <label for="password">Գաղտնաբառ</label>
                    <input type="password" name="password" class="form-control input-sm" required>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Մուտք</button>
                </div>

                @if(session('error'))
                    <p>{{ session('error') }}</p>
                @endif
            </form>
        </div>
    </div>
</div>
</body>
</html>
