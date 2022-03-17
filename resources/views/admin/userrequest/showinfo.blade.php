@extends('admin.layout/master')

@section('content')


<div class="content">


    <!--begin::Main Content-->
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">داشبورد</h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="index.html" title="پیشخوان">لیست ثبت نامی ها</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">


        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="title__row">
                            <div> اطلاعات ثبت نام </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span>تلفن همراه :</span><span style="color:#444">{{ $user->phone }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span> شماره ملی :</span><span style="color:#444">{{ $user->melli_code }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span> تاریخ تولد :</span><span style="color:#444">{{ $user->birthdaty }}</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 15px;">
                                    <span>  استان انتخابی :</span><span style="color:#444">{{ $state }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="padding: 15px;">
                            <span>  تاریخ اعزام  :</span>
                            @foreach ($prices as $price )
                            <span style="color:#444">{{ $price }} .</span>
                            @endforeach

                       </div>
                        <div class="form-group" style="padding: 15px;">
                            <span> پلن قیمتی   :</span>
                            @foreach ($periods as $period )
                            <span style="color:#444">{{ $period }} .</span>
                            @endforeach
                        </div>
                        <div class="title__row">
                            <div>اطلاعات همسفران </div>

                        </div>
                        @if($teammates ==Null)
                        <span style="color:#444">شما اطلاعات هیچ همسفری را ثبت نکرده اید  </span>
                        @else

                            @php
                                $j=1;
                            @endphp

                            @for($i = 0; $i < count($teammates); $i+=2)

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group" style="padding: 15px;">
                                    <span>{{ $j}} :</span>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group" style="padding: 15px;">
                                    <span>کدملی :</span><span style="color:#444">{{ $teammates[$i] }}</span>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group" style="padding: 15px;">
                                    <span>  تاریخ تولد :</span><span style="color:#444">{{ $teammates[$i+1] }}</span>
                                </div>
                            </div>
                        </div>
                               @php
                                $j++;
                            @endphp
                        @endfor
                        @endif

                        <a type="button" href="{{ url('confirm/info/'.$registers->id) }}" class="btn btn-primary-ui">تایید اطلاعات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--end::Main Content-->

</div>

@endsection
