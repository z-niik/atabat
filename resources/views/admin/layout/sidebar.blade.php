<div class="sidebar__nav">
    <span class="bars d-none px-4"></span>
    <div class="navbar-brand d-flex justify-content-center">
        <a class=" d-inline-block my-2" href="">
            <img class="img-fluid" src="{{ asset('/assets/images/logo24001.png') }}" height="50px" alt="">
        </a>
    </div>
    <ul>
        <li class="item-li i-dashboard"><a href="{{ route('admin.panel') }}">پیشخوان</a></li>

        <li class="item-li i-users has-sub-ui"><a class="has-arrow-ui" href="#">درخواست های ثبت نام</a>
            <ul class="collapse show">
                <li><a href="{{ route('userrequest') }}">لیست درخواست ها</a></li>
            </ul>
        </li>
        <li class="item-li i-categories"><a href="{{ Route('period.panel') }}">دوره های اعزام</a></li>
        <li class="item-li i-slideshow"><a href="{{ Route('price.panel') }}">پلن های قیمتی</a></li>
        <li class="item-li i-banners"><a href="{{ route('state.list') }}"> لیست استان ها</a></li>
        <li class="item-li i-transactions"><a href="#">تراکنش ها</a></li>
        </li>
        <li class="item-li i-setting"><a href="#">تنظیمات</a>
        </li>
        <li class="item-li i-user__inforamtion"><a href="#">اطلاعات کاربری</a></li>

    </ul>
</div>
