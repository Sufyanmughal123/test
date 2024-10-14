@inject('helpers', 'App\Helper\Helpers')
@php
    $setting=$helpers->get_setting();

@endphp

    <!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($setting->site_logo??'/dist/image/newlogo1.jpeg')   }}">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! env('APP_NAME','Cyber') !!} | @yield('title')</title>


    @include('admin.layout.css')
</head>

<body class="main-body app sidebar-mini ltr">
<!-- Loader -->
<div id="global-loader">
    <img src="{!! asset('admin/assets/img/svgicons/loader.svg') !!}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- Page -->
<div class="page custom-index">
    <div>
        @include('admin.layout.header')
        @include('admin.layout.side')
    </div>


<div class="main-content app-content">

    <!-- container -->
    <div class="main-container container-fluid">

        <!-- breadcrumb -->
{{--        <div class="breadcrumb-header justify-content-between">--}}
{{--            <div class="left-content">--}}
{{--                <div>--}}
{{--                    <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>--}}
{{--                    <p class="mg-b-0">Sales monitoring dashboard template.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="main-dashboard-header-right">--}}
{{--                <div>--}}
{{--                    <label class="tx-13">Customer Ratings</label>--}}
{{--                    <div class="main-star">--}}
{{--                        <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i--}}
{{--                            class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i--}}
{{--                            class="typcn typcn-star"></i> <span>(14,873)</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <label class="tx-13">Online Sales</label>--}}
{{--                    <h5>563,275</h5>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <label class="tx-13">Offline Sales</label>--}}
{{--                    <h5>783,675</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        @yield('content')
    </div>
</div>
@include('admin.layout.footer')
</div>
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
@include('admin.layout.js')

</body>

</html>

