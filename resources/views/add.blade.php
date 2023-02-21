<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/favicon.jpg') }}">
    <title>Add Destination</title>
</head>

<body>

    @include('template.nav')

    <div class="container mt-5">
        <form action="{{ route('postadd') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" autofocus required class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Location Link</label>
                <input type="text" name="locationlink" required class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea name="description" class="form-control" required cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <br>
                <input type="file" name="image" accept="image/*" class="btn btn-outline-dark" required>
            </div>
            <div class="mb-3">
                <select name="category_id" class="form-select" id="">
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>

</body>
