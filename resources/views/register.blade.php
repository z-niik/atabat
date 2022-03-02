@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area register-from">
                    <div class="form-input rules">
                        <h2>فرم ثبت نام</h2>
{{--
                        <span class="text-danger">{{ $errors->first('melli_code')}}</span>
                        <span class="text-danger">{{ $errors->first('phone')}}</span>
                        <span class="text-danger">{{ $errors->first('birthday')}}</span>
                        <span class="text-danger">{{ $errors->first('state')}}</span>
                        <span class="text-danger">{{ $errors->first('period')}}</span>  --}}

                        <form method="POST" action="{{ route('register.user') }}">
                            @csrf
                            <div class="form-group">
                                <input  type="text" id="phone" name="phone" required>
                                <label>تلفن همراه</label>
                            </div>

                            {{--  repeate this fields  --}}
                         <div id="readroot">
                                <div class="form-group">
                                    <input type="text" id="melli_code" name="melli_code" required>
                                    <label>شماره ملی</label>
                                </div>


                                <div class="form-group">
                                    <input type="text" class="persianDatapicker"  name="birthday" id="birthday">
                                    <label>تاریخ تولد </label>
                                </div>

                         </div>
                            <div class="form-group">

                                <select class="form-select" id="state" required="" name="state">
                                    <option value="">انتخاب استان ...</option>
                                    {{--  @foreach ($provinces as $province )  --}}
                                    {{--  <option value=<"{{ $province->name }}">  {{ $province->name }}  </option>  --}}
                                    {{--  @endforeach  --}}
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
                            <label>تاریخ اعزام (یک یا چند مورد از تاریخ های زیر را که تمایل به اعزام در آن تاریخ را دارید انتخاب نمایید)</label>

                            <div class="col-lg-6">
                              <div class="form-group accept-rules">
                                 <input type="checkbox" name=""  id="">
                                 <label>هفته ی اول فروردین ماه </label>
                               </div>

                               <div class="form-group accept-rules">
                                  <input type="checkbox" name=""  id="">
                                  <label> هفته ی اول فروردین ماه </label>
                               </div>

                               <div class="form-group accept-rules">
                                  <input type="checkbox" name=""  id="">
                                  <label> هفته ی اول فروردین ماه </label>
                               </div>

                            </div>

                            <label>پلن قیمت (یک یا چند مورد از پلن های زیر را که تمایل دارید  انتخاب نمایید)</label>

                            <div class="col-lg-7">
                              <div class="form-group accept-rules">
                                 <input type="checkbox" name=""  id="">
                                 <label>دو سر زمینی 9 میلیون تومان </label>
                               </div>

                               <div class="form-group accept-rules">
                                  <input type="checkbox" name=""  id="">
                                  <label>یک سر هوایی 10 میلیون تومان </label>
                               </div>

                               <div class="form-group accept-rules">
                                  <input type="checkbox" name=""  id="">
                                  <label> دو سر هوایی 13 میلیون تومان </label>
                               </div>

                            </div>


                            {{--  <div class="form-group">
                                <select class="form-select" id="period" name="period" required="">
                                    <option value=""> انتخاب زمان اعزام</option>
                                    <option value="1">19 تا 22 خرداد</option>
                                    <option value="2">19 تا 22 خرداد</option>
                                    <option value="3">19 تا 22 خرداد</option>
                                </select>
                            </div>  --}}

                            <button class="btn btn-info" id="writeroot">افزودن هم گروهی</button>

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
