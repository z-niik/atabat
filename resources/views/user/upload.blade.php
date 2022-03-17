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
                                    <div>
                                    <ul>
                                        <li><span>کاربر گرامی لطفا تصویر کارت ملی</span></li>
                                        <li><span>و تصویر فیش واریزی را  در این بخش بارگزاری نمایید. </span></li>


                                    </ul>
                                    <br />
                                    </div>
                                    <form method="POST" action="{{ route('upload.doc') }}" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="file" id="melli" name="melli" required>
                                            <label>تصویر کارت ملی</label>
                                        </div>

                                        <div class="form-group">
                                            <input type="file" id="fish" name="fish" required>
                                            <label>تصویر فیش واریزی بانک</label>
                                        </div>
                                        <div class="logina-button">
                                            <button class="logina-btn">ارسال مدارک </button>
                                        </div>
                                    </form>

                                    </div>

                                </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!--End logina-area-->


@endsection
