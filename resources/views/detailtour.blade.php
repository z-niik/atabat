@extends('layouts.master')


@section('content')

<style>
    *{
        text-align: right;
    }
    .head {
        margin-top: 24px;
      }
   .head .head__title {
        background-color: #f4fffe;
        margin-top: 16px;
        padding: 24px 24px 32px;
        border-radius: 4px;
      }
    .head .head__title-text {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
      }
      .head .head__title-text h1 {
        font-size: 24px;
        font-weight: 700;
        line-height: 1.13;
        color: #262626;
        margin: 0;
          margin-left: 0px;
        margin-left: 14px;
      }
      .head .head__title-text span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-family: iransans_fanum;
        font-size: 12px;
        line-height: 1.75;
        color: #1d89e4;
        background-color: #fff;
        border-radius: 20px;
        padding: 0 14px;
        height: 32px;
        border: 1px solid #1d89e4;
        white-space: nowrap;
      }
      .head .head__title-text > div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
      }
      .head .head__title-price > div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
      }

      .head .head__title-price small {
        margin: 0 5px;
        font-size: 12px;
        line-height: 1.67;
        color: #262626;
      }
      .head .head__title-price > div > span {
        border: none;
        border-radius: 0;
        padding: 0;
        font-size: 24px;
        font-weight: 700;
        line-height: 1.13;
        color: #1d89e4;
      }
      .head .head__detail {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin-top: 24px;
      }
      .head .head__detail > div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
      }
      .head .head__detail > div > div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-left: 32px;
        position: relative;
      }
      .head .head__detail > div > div label {
        font-size: 13px;
        line-height: 1.62;
        color: #999;
        margin-left: 6px;
        margin-bottom: 0;
      }
      .head .head__detail > div > div span {
        font-size: 13px;
        line-height: 1.62;
        color: #262626;
      }
      .two-column .two-column__body {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        width: 100%;
      }
      .two-column .two-column__right--sec {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-direction: normal;
        -webkit-box-orient: vertical;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 66.1%;
        margin-left: 18px;
      }
      .c-info .info {
        width: 100%;
        height: 334px;
      }
      .c-info .info .info__container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }
      .c-info .info .info__details {
        background-color:#fff;
        border-radius: 5px;
        padding: 24px 26px 29px 0;
        box-shadow: 0 10px 30px 0 rgba(0,0,0,.04);
        height:440px;
      }
      .list-info{
          padding: 10px;
      }
      .list-info li{
          padding: 10px;
      }
      ul:not(.browser-default) li {
        list-style-type: none;
      }
      .two-column .two-column__left--sec {
      }
      .theiaStickySidebar {
        padding-bottom: 0 !important;
        margin-top: 0;
      }
      .c-tour-card .tour-card {
        width: 100%;
      }
      .c-tour-card .tour-card .tour-card__items {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-direction: normal;
        -webkit-box-orient: vertical;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 378px;
        height: 440px;
        border-radius: 5px;
        padding: 19px 24px 24px;
        border-top: 5px solid #165150;
        -webkit-box-shadow: 0 10px 30px 0 rgba(0,0,0,.04);
        box-shadow: 0 10px 30px 0 rgba(0,0,0,.04);
        background-color: #fff;
        position: relative;
      }
      .c-tour-card .tour-card .tour-card__item-title {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
      }4
      element {
      }
      .c-tour-card .tour-card .tour-card__item-detail {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-direction: normal;
        -webkit-box-orient: vertical;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-top: 32px;
      }
      .two-column .two-column__body {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        width: 100%;
      }
      .c-info .info .info__detail i {
        color: #bfa672;
        font-size: 16px;
        margin-left: 16px;
      }
      .plan-hotel{
          padding: 10px;
      }
      .plan-hotel i,label{
          color:#bfa672;
          font-weight: 900;
          font-size: 16px;
          margin-left: 16px;
      }
      .plan-hotel label{
        color:#165150;
        font-weight: 900;
        margin-right: 5px;
    }
    .tour-btn{
        margin: 6px;
        height: 48px;
        padding: 0 80px;
        border-radius: 24px;
        background-color:#165150;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        white-space: nowrap;
    }
    .btn-return{
        background-color: #bfa672 !important;
    }
    </style>
<section class="logina-area">
    <div class="container">


        <h2>  ثبت نام کاروان زیارتی عتبات عالیات     </h2>

        <div class="row justify-content-center">

            <div class="col-lg-12 ">
                <div class="form-area contact-form">

             <div class="head ">
                    <div class="head__title">
                        <div class="head__title-text">
                            <div>
                                <h1>{{ $tour->type_going }}</h1>
                                <span>{{ $tour->num_days }} </span>
                            </div>
                            <div class="head__title-price hide-in-phone">
                                <div>
                                    <span>{{ $price }}</span>
                                    <small> ریال </small>
                                </div>
                            </div>
                    </div>
                <div class="head__detail hide-in-phone">
                    <div>
                        <div class="head__detail-date">
                            <label> تاریخ: </label>
                            <span>{{ $tour->name_start_day }} </span>
                        </div>
                    <div class="head__detail-airline">
                        <div>
                            <label> طرح سفر </label>
                            <span> {{ $tour->type_plan }} </span>
                        </div>
                    </div>
                    <div class="head__detail-agency">
                        <label> آژانس : </label> <span> {{ $tour->kargozar }} </span>
                    </div>
                </div>
          </div>

                    </div>
             </div>

             {{-- ازینجا  --}}
             <div class="row">


                <div class="col-sm-7" >
                     <div class="c-info " style="border-top: 5px solid #165150;border-radius: 5px;margin-right:20px;">
                            <div class="info" >
                                <div>
                                    <ul class="info__details list-info">
                                        <li>
                                            <b>مبدا:</b> {{ $tour->state }} -> {{ $tour->city }}
                                        </li>
                                        <li class="info__detail info__destination">
                                            <b>مقاصد:</b>{{ $tour->type_plan }}
                                        </li>
                                        <li class="info__detail info__dates">
                                            <i class="bi bi-calendar"></i><b>تاریخ  حرکت:</b>{{ $tour->start_day }}
                                        </li>
                                        <li class="info__detail info__go">
                                            <i class="bi bi-arrow-up-left-square-fill"></i>
                                            <b>نوع رفت :</b> {{ $tour->type_going }}
                                        </li>
                                        <li class="info__detail info__return">
                                            <i class="bi bi-arrow-up-left-square-fill"></i>
                                            <b>نوع برگشت:</b> {{ $tour->type_return }}
                                        </li>
                                        <li class="info__detail info__agency">
                                            <i class="bi bi-person-bounding-box"></i>
                                             <b>نام گارگزار :</b>{{ $tour->kargozar }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>


                <div class="col-sm-4">

                        <div class="c-tour-card">
                            <div class="tour-card">
                                <div class="tour-card__items"  >
                                    <div class="tour-card__item-title">
                                        <h3> برنامه سفر </h3>

                                    </div>
                                    <div class="tour-card__item-detail">
                                        <p style="text-align: right"><span><b>{{ $tour->type_plan }}</b></span> </p>
                                        <p  style="text-align: right;color:#3a3a3b"><span> <b> {{ $tour->num_days }} </b></span> <span>قشم ایر</span></p>
                                    </div>
                                    <div class="tour-card__item-text">
                                        <div class="plan__detail">
                                            <div class="plan-hotel">
                                                    <i class="bi bi-building"></i>
                                                    <label> هتل نجف: </label> <span> {{ $tour->hotel_najaf }} </span>
                                            </div>
                                            <div class="plan-hotel">
                                                    <i class="bi bi-building"></i>
                                                    <label> هتل کربلا: </label> <span> {{ $tour->hotel_karbala }} </span>
                                            </div>
                                            <div class="plan-hotel">
                                                    <i class="bi bi-building"></i>
                                                    <label> هتل کاظمین: </label> <span> {{ $tour->hotel_kazemain }} </span>
                                            </div>
                                        </div>
                                    </div>
                                <div class="footer-call-btn-wrapper">
                                    <a type="button" href="{{ url('/register/form/'.$tour->id)  }}" class="tour-btn"> انتخاب </a>
                                    <a type="button" href="{{ route('all.tour')  }}" class="tour-btn btn-return"> بازگشت به لیست تورها </a>
                                </div>
                            </div>
                        </div>


                </div>
              </div>

             {{--  تا اینجا  --}}


            </div>

        </div>
    </div>
             </div>


</section><!--End logina-area-->


@endsection
