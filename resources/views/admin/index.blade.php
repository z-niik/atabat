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
                        <li><a href="index.html" title="پیشخوان">داشبورد</a></li>
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
                            <div> آخرین ثبت نام کنندگان </div>
                            <a href="" class="all-reconcile-text margin-left-20 color-2b4a83">نمایش همه تراکنش ها</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th> تلفن </th>
                                    <th> شماره ملی</th>
                                    <th>تاریخ تولد </th>
                                    <th>استان </th>
                                    <th>تاریخ اعزام</th>
                                    <th>دوره ی اعزام</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span>--</span>
                                    </td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>-- </td>
                                    <td>--</td>
                                    <td><span class="badge badge-success ml-0 mr-0">--</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="ارسال ایمیل">
                                            <i class="ri-mail-line"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="پرینت"
                                                aria-describedby="tooltip66185"><i class="ri-printer-line"></i></button>
                                        <button type="button" class="btn btn-sm btn-default ac-btn-ui js-btn-delete"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="حذف"
                                                aria-describedby="tooltip286794"><i class="ri-delete-bin-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Main Content-->

</div>

@endsection
