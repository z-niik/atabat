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
                            <li><span>متقاضیان محترم تشرف به عتبات عالیات از تاریخ 06/08/90 لغایت 15/10/90 می توانند</span></li>
                            <li><span>با رعایت موارد مشروحه ذیل و با تکمیل فرم مربوطه در سایت پیش ثبت نام عتبات </span></li>
                            <li><span>برای مشاهده اطلاعات ثبت نام از گزینه ی ؛اطلاعات ثبت نام در منو استفاده کنید. </span></li>
                            <li><span>برای تکمیل مراحل ثبت نام از طرق تب اپلود مدارک لطفا مدارک مورد نیاز را آپلود نمایید </span></li>
                            <li><span>نتایج قرعه کشی روز دوشنبه 04/07/90 بر روی سایت پیش ثبت نام  قابل رویت خواهد بود.  </span></li>
                            <li><span><b>«به جهت آشنایی کامل با مراحل و روش ثبت نام خواهشمند است حتماً موارد ذیل را مطالعه و سپس نسبت به انجام پیش ثبت نام اقدام نمائید».</b></span></li>

                        </ul>



                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!--End logina-area-->


@endsection
