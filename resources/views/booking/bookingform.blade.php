<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AuThemes Templates">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuThemes Templates">

    <!-- Title Page-->
    <title>Au Form Wizard</title>

    <!-- Icons font CSS-->
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
</head>

<body style="overflow: hidden">
    <div class="page-wrapper bg-img-1 p-t-275 p-b-100">
        <div class="wrapper wrapper--w690">
            <div class="card card-1" style="margin-top: -155px">
                <div class="card-heading" style="margin-top: -46px">
                    <h2 class="title">Trip...</h2>
                </div>
                <div class="card-body">
                    <form class="wizard-container" method="POST" action="{{route('booking.book',$package->id)}}" id="js-wizard-form">
                        @csrf
                            @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                        <ul class="nav nav-tab">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">1</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">1</a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab">1</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <div class="input-group">
                                    <label class="label">Full name*:</label>
                                    <input class="input--style-1" type="text" name="FullName" placeholder="ex: MOhamed Tarek" class="@error('FullName') is-invalid @enderror">
                                </div>
                                <div class="input-group">
                                    <label class="label">Email*:</label>
                                    <input class="input--style-1" type="email" name="Email" placeholder="ex: example@email.com" class="@error('Email') is-invalid @enderror">
                                </div>
                                <div class="input-group">
                                    <label class="label">Phone number*:</label>
                                    <input class="input--style-1" type="text" name="Phone" placeholder="" class="@error('Phone') is-invalid @enderror">
                                </div>
                               <div class="input-group">
                                    <label class="label">Individuals*:</label>
                                    <input class="input--style-1" type="text" name="Individuals" placeholder="" class="@error('Individuals') is-invalid @enderror">
                                </div>
                               
                             <div class="input-group">
                                    <label class="label">Payment*:</label>
                                    <select class="input--style-1" type="text" name="Payment" placeholder="" class="@error('Payment') is-invalid @enderror">
                                        <option>Visa</option>
                                        <option>Fawery</option>
                                    </select>
                                </div>
                                
                                <input class="input--style-1" type="text" name="Package_id" hidden="">
                                <div class="btn-next-con">
                                    <a class="btn-back" href="/packages/index">back</a>
                                    <button class="btn-last" type="submit" >Submit</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('vendor/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-wizard/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>

</body>

</html>
<!-- end document-->