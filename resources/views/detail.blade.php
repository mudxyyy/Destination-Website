<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="shortcut icon" href="{{ asset('img/favicon.jpg') }}">
    <title>Detail</title>
</head>

<body>

    @include('template.nav')

    <div class="container mt-5">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <img src="{{ asset($destination->image) }}" alt="" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $destination->category->name }}</h5>
                            <hr>
                            <h5 class="card-title">{{ $destination->name }}</h5>
                            <hr>
                            <h5>Address</h5>
                            <p class="card-text">{{ $destination->address }}</p>
                            <hr>
                            <h5>Description</h5>
                            <p>{{ $destination->description }}</p>
                            <a href="{{ $destination->locationlink }}" target="_blank" class="btn btn-success">Location Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
