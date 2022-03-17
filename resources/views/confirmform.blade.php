@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area form-content">
                    <div class="form-input rules">
                        <h2>اطلاعات ثبت نام</h2>
                        <form method="POST" action="{{ route('store.user') }}">
                            @csrf
                            <input type="hidden" name="userdata" value="<?php echo base64_encode(json_encode($userdata)) ?>"/>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>تلفن همراه :</span><span>{{ $userdata['phone'] }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span> شماره ملی :</span><span>{{ $userdata['melli_code'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span> تاریخ تولد :</span><span>{{ $userdata['birthdaty'] }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>  استان انتخابی :</span><span>{{ $yourstate->name }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span>  تاریخ اعزام  :</span>
                                @foreach ($userdata['periodplane'] as $period )
                                <span>{{ $period}}  ,</span>
                                @endforeach
                           </div>
                            <div class="form-group">
                                <span> پلن قیمتی   :</span>
                                @foreach ($userdata['priceplane'] as $price )
                                <span>{{ $price }}  ,</span>
                                @endforeach
                            </div>
                            <h4>اطلاعات همسفران</h4>
                            @if($userdata['teammate']==Null)

                            <span>شما اطلاعات هیچ همسفری را ثبت نکرده اید  </span>

                            @elseif($userdata['teammate'])
                            @php
                                $j=1;
                            @endphp

                            @for($i = 0; $i < count($userdata['teammate']); $i+=2)



                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <span>{{ $j}} :</span>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <span>کدملی :</span><span>{{ $userdata['teammate'][$i]}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <span>  تاریخ تولد :</span><span>{{ $userdata['teammate'][$i+1]}}</span>
                                    </div>
                                </div>
                            </div>
                            @php
                                $j++;
                            @endphp
                            @endfor
                            @endif

                            {{--  <div class="row">
                                <div class="col-lg-6">
                                    <div class="logina-button">
                                        <a type="button" href="{{ route('recheck.form/'.$userdata) }}" class="logina-btn">بازگشت </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="logina-button">
                                        <button type="submit" class="logina-btn">تایید </button>
                                    </div>
                                </div>

                            </div>  --}}
                            <div class="logina-button">
                                <button type="submit" class="logina-btn">تاییداطلاعات </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->

@endsection
