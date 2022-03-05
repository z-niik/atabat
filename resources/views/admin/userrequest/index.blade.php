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
                            <div> لیست ثبت نام کنندگان </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th> شماره ملی </th>
                                    <th> شماره تلفن همراه </th>
                                    <th>تاریخ تولد </th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                <tr>
                                    <td>
                                        <span>--</span>
                                    </td>
                                    <td>{{ $user->melli_code }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->birthdaty }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="مشاهده اطلاعات کامل ">
                                            <i class="ri-eye-line"></i>
                                        </button>

                                           {{ dd(App\Models\Register::select('confirm')->where('user_id',$user->id)) }}
                                        {{--  @if($confirm==1)  --}}
                                        <button type="button" class="btn btn-sm btn-default ac-btn-ui js-btn-delete"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top" title=" تایید شده"
                                        aria-describedby="tooltip286794"><i class="ri-check-line"></i>
                                         </button>
                                         {{--  @else  --}}
                                         <button type="button" class="btn btn-sm btn-default ac-btn-ui js-btn-delete"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="تایید نشده "
                                        aria-describedby="tooltip286794"><i class="ri-close-line"></i>
                                         </button>
                                         {{--  @endif  --}}
                                        <button type="button" class="btn btn-sm btn-default ac-btn-ui js-btn-delete"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="حذف"
                                                aria-describedby="tooltip286794"><i class="ri-delete-bin-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal modal-dialog modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اطلاعات ثبت نام</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        {{--  /*******************************************/  --}}

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="form-area form-content">
                    <div class="form-input rules">

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
                                        <span>  استان انتخابی :</span><span>--</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span>  تاریخ اعزام  :</span>
                                <span>--</span>
                           </div>
                            <div class="form-group">
                                <span> پلن قیمتی   :</span>
                                <span>--</span>
                            </div>
                            <h4>اطلاعات همسفران</h4>

                            <span>شما اطلاعات هیچ همسفری را ثبت نکرده اید  </span>



                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>کدملی :</span><span>--</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <span>  تاریخ تولد :</span><span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="logina-button">
                                <button type="submit" class="logina-btn">تایید </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{--  /*******************************************/  --}}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
        <button type="button" class="btn btn-primary">تایید اطلاعات</button>
      </div>
    </div>
  </div>
</div>
    <!--end::Main Content-->

</div>

@endsection
