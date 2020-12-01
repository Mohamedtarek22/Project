<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/skin-blue.min.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition register-page" style="background-image: linear-gradient(316deg, #4158d0 0%, #c850c0 50%, #ffcc70 78%) ;overflow: hidden">
    <div class="register-box">
        <div class="register-logo">
            <b>Register</b>
        </div>

        <div class="card">
            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="name" class="form-control @error('name') is-invalid @enderror" name="name" required>

                        <span class="glyphicon glyphicon-user form-control-feedback">
            </span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="email" class="form-control @error('name') is-invalid @enderror" name="email" required>

                        <span class="glyphicon glyphicon-envelope form-control-feedback">
            </span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="password" name="password" required class="form-control @error('password') is-invalid @enderror">

                        <span class="glyphicon glyphicon-lock form-control-feedback">
            </span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="password_confirmation" name="password_confirmation" required>

                        <span class="glyphicon glyphicon-log-in form-control-feedback">
            </span>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>

                </form>


                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    </div>
        {{--<!-- jQuery 3 -->--}}
        <script src="{{ asset('dashboard_files/js/jquery.min.js') }}"></script>

        {{--<!-- Bootstrap 3.3.7 -->--}}
        <script src="{{ asset('dashboard_files/js/bootstrap.min.js') }}"></script>

        {{--icheck--}}
        <script src="{{ asset('dashboard_files/plugins/icheck/icheck.min.js') }}"></script>

        {{--<!-- FastClick -->--}}
        <script src="{{ asset('dashboard_files/js/fastclick.js') }}"></script>

    </body>
    </html>
