@inject('helpers', 'App\Helper\Helpers')
@php
    $setting=$helpers->get_setting();

@endphp
    <!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/x-icon"
          href="{{ asset($setting->site_logo??'/dist/image/newlogo1.jpeg')   }}">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="index, follow">
    <style>
        #loom-companion-mv3 {
            display: none;
        }


        .main_div {
            min-height: 768px !important;
            padding-top: 35px !important;
        }

    </style>


    @include('layouts.css')
    @yield('meta_tags')
    @yield('css')

    {{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
    {{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</head>

<body style="min-height: 800px; overflow: scroll;background-color: #f5f5f5;width: 100%;overflow-x: hidden">
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars" aria-hidden="true"></i></button>
@include('layouts.header')
<div class="main_div" style="">
    <div class="container">
        @if(Session::has('flash_message_sucess'))
            <div class="alert alert-success alert-dismissible fade show" id="sucess_message" role="alert">
                {{Session::get('flash_message_sucess') }}
                <button type="button" class="close close_flash" data-bs-dismiss="alert"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (Session::has('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{Session::get('danger') }}
                <button type="button" class="close" data-bs-dismiss="alert"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>


        @yield('content')




</div>
@include('layouts.footer')
<!-- End Footer -->
@include('layouts.mbl_nav')
<div class="mobile-nav-overly"></div>
@include('layouts.js')
<script>
    $(document).ready(function () {

        $(".close_flash").click(function () {



            // Remove Bootstrap modal classes
            $("#sucess_message").removeClass("show fade");

        });




        $(document).on("click", ".mobile-nav .drop-down > a", function(e) {
            e.preventDefault(),
                t(this).next().slideToggle(300),
                t(this).parent().toggleClass("active")
        });
    });
</script>


@yield('js')
</body>


</html>
