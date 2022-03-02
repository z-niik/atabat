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
                                    <th> پرداخت کننده</th>
                                    <th>درآمد سایت</th>
                                    <th>درآمد مدرس</th>
                                    <th>عنوان محصول</th>
                                    <th>مبلغ</th>
                                    <th>تاریخ</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span>02</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('/adminassets/assets/images/xs/avatar2.jpg') }}" data-toggle="tooltip"
                                                 data-placement="top"
                                                 title="" alt="Avatar" class="w35 h35 rounded"
                                                 data-original-title="Avatar Name">
                                            <div class="ms-3">
                                                <a href="javascript:void(0);" title="">Zoe Baker</a>
                                                <p class="mb-0">zoe.baker@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>350،000 تومان</td>
                                    <td>350،000 تومان</td>
                                    <td>دوره 1</td>
                                    <td>350،000 تومان</td>
                                    <td>1401/1/1 11:11</td>
                                    <td><span class="badge badge-success ml-0 mr-0">تایید شده</span></td>
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
