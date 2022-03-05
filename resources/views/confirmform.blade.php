@extends('layouts.master')



@section('content')


<section class="logina-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area form-content">
                    <div class="form-input rules">
                        <h2>اطلاعات ثبت نام</h2>

                        <form method="POST" action="#">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>تلفن همراه :</span><span>{{ $user->phone }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span> شماره ملی :</span><span>{{ $user->melli_code }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span> تاریخ تولد :</span><span>{{ $user->birthdaty }}</span>
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
                                @foreach ($periods as $period )
                                <span>{{ $period}}  ,</span>
                                @endforeach
                           </div>
                            <div class="form-group">
                                <span> پلن قیمتی   :</span>
                                @foreach ($prices as $price )
                                <span>{{ $price}}  ,</span>
                                @endforeach
                            </div>
                            <h4>اطلاعات همسفران</h4>
                            @if($register->teammate==1)

                            <span>شما اطلاعات هیچ همسفری را ثبت نکرده اید  </span>

                            @else

                            @foreach ($umellicode as $melli_codes )

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>کدملی :</span><span>{{ $melli_codes }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>  تاریخ تولد :</span><span></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif

                            <div class="logina-button">
                                <button type="submit" class="logina-btn">تایید </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End logina-area-->

@endsection
