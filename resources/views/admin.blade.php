<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/favicon.jpg') }}">

    <title>Welcome Admin</title>
</head>

<body>

    @include('template.nav')
    <div class="container">
        @if (Session::has('status'))
            <div class="alert alert-secondary mt-4 text-center"><span>{{ Session::get('status') }}</span></div>
        @endif
    </div>
    <div class="container mt-5">
        <form class="d-flex" action="/destination/cari" method="GET">
            <a href="{{ route('add') }}" id="" class="btn btn-primary">+Add Destination</a>
            <input class="ms-auto rounded me-2" name="cari" value="{{ old('cari') }}" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light me-2" type="submit">Search</button>
        </form>
        <table class="table table-light mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>description</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
            </thead>

            @foreach ($data as $item)
            <tbody>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <img class="img-thumbnail" src="{{ asset($item->image) }}" alt="">
                    </td>
                    <td>
                        <a href="{{ route('edit',$item->id) }}" class="btn btn-success ms-2 d-block">Edit</a>
                        <a href="{{ route('delete',$item->id) }}" class="btn btn-danger ms-2 d-block mt-2" onclick="return confirm('are you sure?')">Delete</a>
                    </td>
                </tbody>
                    @endforeach
        </table>
    </div>
    <script>
        setTimeout(() => {
            document.querySelector('.alert').remove()
        }, 2000);
    </script>
</body>
</html>
