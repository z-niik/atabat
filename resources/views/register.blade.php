@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area register-from">
                    <div class="form-input rules">
                        <h2>فرم ثبت نام</h2>

                        <span class="text-danger">{{ $errors->first('melli_code')}}</span>
                        <span class="text-danger">{{ $errors->first('phone')}}</span>
                        <span class="text-danger">{{ $errors->first('birthday')}}</span>
                        <span class="text-danger">{{ $errors->first('state')}}</span>
                        <span class="text-danger">{{ $errors->first('period')}}</span>

                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="melli_code" name="melli_code" required>
                                <label>شماره ملی</label>
                            </div>
                            <div class="form-group">
                                <input  type="text" id="phone" name="phone" required>
                                <label>تلفن همراه</label>
                            </div>

                            <div class="form-group">
                                <input type="text" class="persianDatapicker"  name="birthday" id="birthday">
                                <label>تاریخ تولد </label>
                            </div>

                            <div class="form-group">
                                <select class="form-select" id="state" required="" name="state">
                                    <option value="">انتخاب استان ...</option>
                                    @foreach ($provinces as $province )
                                    <option value="{{ $province->name }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- <div class="form-group">
                                <select class="form-select" id="city" name="city" required="">
                                    <option value="">انتخاب شهر ...</option>
                                    @foreach ($provinces as $province )
                                    <option value="{{ $province->name }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="form-group">
                                <select class="form-select" id="period" name="period" required="">
                                    <option value=""> انتخاب زمان اعزام</option>
                                    <option value="1">19 تا 22 خرداد</option>
                                    <option value="2">19 تا 22 خرداد</option>
                                    <option value="3">19 تا 22 خرداد</option>
                                </select>
                            </div>
                            <div class="form-text">
                                <span>اگر قبلا ثبت نام کردید,برای پیگیری و تکمیل ثبت <a href="#">وارد شوید</a></span>
                            </div>
                            <div class="logina-button">
                                <button type="submit" class="logina-btn">ثبت نام</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->

@endsection
