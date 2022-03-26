@extends('layouts.master')

@section('content')

<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area login-form">
                    <div class="form-content">

                       <img src="{{ asset('/assets/images/logo24001.png') }}" style="margin:20% 5%;" >
                       <p>شرکت خدمات مسافرت هوایی، جهانگردی، زیارتی و بار هوایی توسعه گردشگری باهشت</p>
                    </div>
                    <div class="form-input">
                        <h2> ورود</h2>
                        <form method="post" action="{{ route('userlogin') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" required>
                                <label>نام کاربری( شماره تلفن ثبت شده زمان ثبت نام) </label>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required>
                                <label>رمز عبور (شماره ملی)</label>
                            </div>
                            <div class="form-text">
                                <span>آیا قبلا ثبت نام نکردید؟ <a href="{{ url('/') }}"> ثبت نام کنید</a></span>
                            </div>
                            <div class="logina-button">
                                <button type="submit" class="logina-btn">ورود</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->


 @endsection
