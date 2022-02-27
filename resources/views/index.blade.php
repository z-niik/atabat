@extends('layouts.master')

@section('content')


<section class="logina-area">
    <div class="container">
        <h2>  ثبت نام کاروان زیارتی عتبات عالیات     </h2>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area contact-form">
                    <div class="form-content rules">
                        <h2>قوانین و شرایط  </h2>
                        <ul>
                            <li><span>متقاضیان محترم تشرف به عتبات عالیات از تاریخ 06/08/90 لغایت 15/10/90 می توانند</span></li>
                            <li><span>با رعایت موارد مشروحه ذیل و با تکمیل فرم مربوطه در سایت پیش ثبت نام عتبات </span></li>
                            <li><span>عالیات عراق  برای خود و همراهان پیش ثبت‌نام نمایند. </span></li>
                            <li><span>شروع پیش ثبت نام از ساعت 8 صبح روز شنبه مورخ 19/06/90 لغایت ساعت 24 روز پنج شنبه 31/06/90 خواهد بود. </span></li>
                            <li><span>نتایج قرعه کشی روز دوشنبه 04/07/90 بر روی سایت پیش ثبت نام  قابل رویت خواهد بود.  </span></li>
                            <li><span><b>«به جهت آشنایی کامل با مراحل و روش ثبت نام خواهشمند است حتماً موارد ذیل را مطالعه و سپس نسبت به انجام پیش ثبت نام اقدام نمائید».</b></span></li>

                        </ul>


                        <h6>متقاضیان می توانند به یکی از دو روش ذیل نسبت به پیش ثبت نام عتبات عالیات اقدام نمایند:
                        </h6>
                        <ul>
                            <li><span>متقاضیان می توانند به یکی از دو روش ذیل نسبت به پیش ثبت نام عتبات عالیات اقدام نمایند:</span></li>
                            <li><span>الف- پیش ثبت نام گروهی، از 1 تا 7 نفره (ثبت نام در این روش حداقل 1 نفر و حداکثر تا 7 نفر می باشد)</span></li>
                            <li><span>ب- پیش ثبت نام گروهی، فقط 35 نفره (ثبت نام در این روش می بایست حتماً 35 نفر کامل باشد)</span></li>
                            <li><span>توجه مهم: افرادی که مبادرت به ثبت نام 35 نفره می نمایند درصورتیکه تعدادی از آنها منصرف یا از آن گروه خارج شوند(گروه جدید تشکیل دهند) و عدد گروه به کمتر از 25 نفر تقلیل یابد؛ گروه اولیه حذف شده و در قرعه کشی شرکت داده نخواهد شد.</span></li>
                            <li><span>توجه: فقط 15درصد ظرفیت اعزام مختص اعزام های گروهی (گروههای 35 نفره) می باشد، لذا پیشنهاد می شود برای آنکه از امکان بیشتری برای تشرف بهره مند شوید، در گروههای حداکثر تا 7 نفره ثبت نام فرمائید.</span></li>

                        </ul>

                        <form method="POST" action="{{ route('register.form') }}">
                            @csrf
                        <div class="col-lg-6">
                            <div class="form-group accept-rules">
                          <input type="checkbox" name="accept-rules"  id="accept-rules">
                          <label>  پذیرفتن شرایط و مقررات </label>
                           </div>
                           <span class="text-danger">{{ $errors->first('accept-rules')}}</span>
                        </div>
                        <div class="col-lg-12">
                            <div class="logina-button">
                                <button type="submit" class="logina-btn">مرحله ی بعدی</button>
                            </div>
                        </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!--End logina-area-->


@endsection
