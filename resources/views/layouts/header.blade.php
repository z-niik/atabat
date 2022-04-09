<!doctype html>
<html dir="rtl" lang="fa">

<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ali Niyazi">
    <!-- page title -->
    <title>ثبت نام عتبات عالیات</title>
    <!--All Css here -->
    <!--Bootstrap  css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!--Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!--page-style css-->
    <link rel="stylesheet" href="{{ asset('assets/css/page-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/logina-form.css') }}">

    <!--logina-form css-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/persian-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tour.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">@section('content')

</head>
<body class="logina-wrapper">
<!--Start logina-header-->
<header class="logina-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logina-menu">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo2400.png') }}" class="responsive" height="25%" width="25%">
                        شرکت توسعه گردشگری باهشت     </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            @guest
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="{{ route('user.login') }}"> ورود </a></li>
                            </ul>

                            @else
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}"> پیشخوان   </a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('my.info') }}"> اطلاعات ثبت نام </a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('user.upload') }}"> آپلود مدارک </a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ route('user.login') }}"> اطلاع رسانی </a></li>

                                   <form action="{{ route('user.logout') }}" method="POST" class="d-flex">
                                @csrf
                                <li class="nav-item"><button type="submit" class="nav-link" style="background-color:#165150;border:none;">خروج</button></li>
                                </form>
                            </ul>

                            @endguest
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header><!--End logina-header-->
