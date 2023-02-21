<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="3kZXorcr2c8pag5Myzn9TkGBZAaSVjbES2qB4QCf">

    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.jpg') }}">

</head>
@include('template.nav')
<body>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-flex bg-login-image">
                                <img src="{{ asset('img/favicon.jpg') }}" alt="" class="img-thumbnail">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 mt-4 fs-2">LOGIN</h1>
                                    </div>
                                    <form action="{{ route('postlogin') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_token" value="3kZXorcr2c8pag5Myzn9TkGBZAaSVjbES2qB4QCf">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="email" placeholder="Email" value="" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user mt-3" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-user w-100 mt-3">
                                                Login
                                            </button>
                                            @if (Session::has('status1'))
                                            <div class="text-danger text-center">{{ Session::get('status1') }}</div>
                                            @endif
                                        </div>
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://pion.smkn2smi.sch.id/vendor/jquery/jquery.min.js"></script>
    <script src="https://pion.smkn2smi.sch.id/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://pion.smkn2smi.sch.id/js/sb-admin-2.min.js"></script>



</body></html>
