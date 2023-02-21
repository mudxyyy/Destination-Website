<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('img/favicon.jpg') }}">

    <title>Welcome Visitor</title>
</head>

<style>
    .alert{
        width: 300px;
        height: 50px;
        margin-left: 155px
    }
    .search{
        width: 250px;
        height: 40px;
    }

    .asd{
        width: 80px;
        height: 40px;
    }
</style>

<body>
    @include('template.nav');
    <form class="d-flex" action="/destination/search" method="GET">
        @if (Session::has('status'))
        <div class="alert alert-secondary text-center"><span>{{ Session::get('status') }}</span></div>
        @endif
        <input class="ms-auto search rounded me-2" type="search"  name="search" value="{{ old('search') }}" placeholder="Search" aria-label="Search">
        <button class="btn asd btn-outline-light me-2 mb-2" type="submit">Search</button>
    </form>
    @include('template.card');

    <script>
        setTimeout(() => {
            document.querySelector('.alert').remove()
        }, 2000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
