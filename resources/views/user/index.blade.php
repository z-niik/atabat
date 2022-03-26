@extends('layouts.master')

@section('content')


<section class="logina-area">
    <div class="container">


        <h2>  به پنل کاربری خود خوش آمدید     </h2>

        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="form-area contact-form">
                    <div class="form-content rules">
                        <div class="row">
                          <div class="col-lg-12">
                                <div class="form-group">


                                    </div>

                                </div>
                        </div>
                        @if($confirm==1)
                        <div class="row">
                            <div class="col-lg-12">
                                  <div class="form-group">

                                    <span class="alert alert-success">متقاضی گرامی :اطلاعات ثبت نام شما تایید شده است.</span>
                                  </div>
                              </div>
                          </div>
                          @elseif($confirm==0)
                          <div class="row">
                            <div class="col-lg-12">
                                  <div class="form-group">

                                    <span class="alert alert-warning">متقاضی گرامی :اطلاعات شما هنوز تایید نشده است.لطفا تا دریافت پیامک اطلاع رسانی منتظر بمانید.</span>
                                  </div>
                              </div>
                          </div>
                          @endif


                          <ul>
                            <li><span>کاربر گرامی پس از تایید اطلاعات ثبت نامی شما پیامی حاوی تایید اطلاعات در همین صفحه مشاهده خواهید کرد</span></li>
                            <li><span>در صورت مشاهده پیام تایید اطلاعات و پس از واریز مبلغ ثبت نام  </span></li>
                            <li><span> از منوی بالای سایت گزینه ی آپلود مدارک را انتخاب کنید</span></li>
                            <li><span>و تصویر کارت ملیو صفحات اول و دوم گذرنامه و تصویر فیش واریزی را در این بخش آپلود کنید </span></li>

                        </ul>



                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!--End logina-area-->


@endsection
