@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area register-from">
                    <div class="form-input rules">
                        <h2>فرم ثبت نام</h2>

                        <form method="POST" action="{{ route('register.user') }}">
                            @csrf
                            <div><label style="color:#b4110e;font-weight:bold;">نوع سفر :</label><span>{{ $tour->type_plan }}</span></div>
                            <div><label style="color:#b4110e;font-weight:bold;"> تاریخ اعزام :</label><span>{{ $tour->start_day }}</span></div>
                            <div><label style="color:#b4110e;font-weight:bold;"> هزینه سفر :</label><span>{{ $tour->price }}</span></div>
                            <div><label style="color:#b4110e;font-weight:bold;"> استان و شهر :</label><span>{{ $tour->state}} . {{ $tour->city }}</span></div>
                            <div class="form-group">
                                <input  type="hidden" id="tour_id" name="tour_id"  value="{{ $tour->id }}">
                            </div>

                            <div class="form-group">
                                <input  type="text" id="phone" name="phone">
                                <label>تلفن همراه</label>
                                <span class="text-danger">{{ $errors->first('phone')}}</span>
                            </div>

                            {{--  repeate this fields  --}}
                         <div id="readroot">
                                <div class="form-group">
                                    <input type="text" id="melli_code" name="melli_code">
                                    <label>شماره ملی</label>
                                    <span class="text-danger">{{ $errors->first('melli_code')}}</span>
                                </div>


                                <div class="form-group">
                                    <input type="text" class="persianDatapicker"  name="birthday" id="birthday">
                                    <label>تاریخ تولد </label>
                                    <span class="text-danger">{{ $errors->first('birthday')}}</span>
                                </div>

                         </div>
                            {{--  <div class="form-group">

                                <select class="form-select" id="state" name="state">
                                    <option value="">انتخاب استان ...</option>
                                    @foreach ($states as $state )
                                    <option value="{{ $state->id }}">  {{ $state->name }}  </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('state')}}</span>
                            </div>  --}}

                            {{--  <label style="color: #b4110e;"><b>تاریخ اعزام (انتخاب یک یا چند گزینه امکان پذیر است)</b></label>

                            <div class="col-lg-12">
                                @foreach ($periods as $period )
                                <div class="form-group accept-rules">
                                    <input type="checkbox" name="period[]" value="{{ $period->name }}" id="" style="width:5%">
                                    <label style="margin-right: 10%;">{{ $period->name }}</label>
                                    <div style="margin-right:10%;">
                                        <span style="color:#8f8f9d;">{{ $period->description }}</span>
                                    </div>
                                  </div>  --}}
                                {{--  @endforeach
                                <span class="text-danger">{{ $errors->first('period')}}</span>

                            </div>  --}}

                            {{--  <label style="color:#b4110e;"><b>نوع و هزینه سفر (انتخاب یک یا چند گزینه امکان پذیر است)</b></label>  --}}

                            {{--  <div class="col-lg-12">
                                @foreach ($prices as $price)
                                  <div class="form-group accept-rules">
                                    <input type="checkbox" name="price[]" value="{{ $price->name }}" style="width:5%" id="">
                                    <label style="margin-right: 10%;line-height: 1.6875rem;">{{ $price->name }} </label>
                                    <div style="margin-right:10%;">
                                        <span style="color:#8f8f9d;">{{ $price->description }}</span>
                                    </div>
                                 </div>

                                @endforeach
                                <span class="text-danger">{{ $errors->first('price')}}</span>
                             </div>  --}}


                            <a class="btn" id="adduser" style="color:#fff;background-color:#165150;">ثبت نام نفر بعدی</a>
                            <div id="otheruser"></div>
                            <span>برای افزودن مشخصات هم گروهی ها از دکمه بالا استفاده کنید .</span>

                            <div class="form-text">
                                <span>اگر قبلا ثبت نام کردید,برای پیگیری و تکمیل ثبت <a href="{{ route('user.login') }}">وارد شوید</a></span>
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
