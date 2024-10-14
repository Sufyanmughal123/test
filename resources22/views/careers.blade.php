@inject('helpers', 'App\Helper\Helpers')
@extends('layouts.main')
@section('css')
    <style>
        .main_div {
            min-height: 768px !important;
            padding-top: 70px !important;
            margin-top: 40px;
        }

    </style>
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }
    </style>
    <style type="text/css">
        .drift-conductor-item iframe,
        .drift-frame-controller {
            display: block;
            min-width: 0;
            max-width: none;
            min-height: 0;
            max-height: none;
        }

        .drift-conductor-item iframe {
            color-scheme: light only;
            border: none !important;
            background: transparent !important;
            width: 100% !important;
            height: 100% !important;
            max-width: 100% !important;
        }

        .drift-conductor-item.with-transition {
            -webkit-transition: opacity .5s ease, -webkit-transform .5s ease;
            transition: opacity .5s ease, -webkit-transform .5s ease;
            -o-transition: opacity .5s ease, -o-transform .5s ease;
            -moz-transition: opacity .5s ease, transform .5s ease, -moz-transform .5s ease;
            transition: opacity .5s ease, transform .5s ease;
            transition: opacity .5s ease, transform .5s ease, -webkit-transform .5s ease, -moz-transform .5s ease, -o-transform .5s ease;
        }

        .drift-frame-chat.with-transition.drift-frame-chat__takeover {
            -webkit-transition: opacity .5s ease;
            -o-transition: opacity .5s ease;
            -moz-transition: opacity .5s ease;
            transition: opacity .5s ease;
        }

        .drift-conductor-item.with-height-transition {
            -webkit-transition: max-height .5s ease, opacity .5s ease, -webkit-transform .5s ease;
            transition: max-height .5s ease, opacity .5s ease, -webkit-transform .5s ease;
            -o-transition: max-height .5s ease, opacity .5s ease, -o-transform .5s ease;
            -moz-transition: max-height .5s ease, opacity .5s ease, transform .5s ease, -moz-transform .5s ease;
            transition: max-height .5s ease, opacity .5s ease, transform .5s ease;
            transition: max-height .5s ease, opacity .5s ease, transform .5s ease, -webkit-transform .5s ease, -moz-transform .5s ease, -o-transform .5s ease;
        }

        .drift-conductor-item {
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            transform: translateZ(0);
        }

        .drift-frame-controller {
            bottom: 24px;
        }

        .drift-frame-controller-align-left {
            left: 24px;
        }

        .drift-frame-controller-align-right {
            right: 24px;
        }

        .drift-frame-chat:not(iframe) {
            bottom: -webkit-calc(12px + 52px + 24px);
            bottom: -moz-calc(12px + 52px + 24px);
            bottom: calc(12px + 52px + 24px); /* vertical margin x 2 + widget icon size*/
            width: 100%;
            height: 100%;
            min-width: 320px;
            opacity: 0;
            visibility: hidden;

            -webkit-transform: translateY(88px);

            -moz-transform: translateY(88px);

            -ms-transform: translateY(88px);

            -o-transform: translateY(88px);

            transform: translateY(88px);
        }

        .drift-frame-chat:not(iframe).drift-chat-open {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }

        .drift-frame-chat.drift-frame-chat__takeover:not(iframe):not(.drift-frame--mobile) {
            min-width: 600px;
        }

        .drift-frame-chat-align-left {
            left: 12px;
        }

        .drift-frame-chat-align-right {
            right: 12px;
        }

        .drift-frame-takeover,
        .drift-frame-landingPage,
        .drift-frame-chat__takeover {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            min-height: 100%;
            min-width: 100%;
        }

        .drift-frame-chat__takeover.hide-frame {
            visibility: hidden;
        }

        .drift-frame-emailCapture {
            bottom: 0;
            height: -webkit-calc(100% + 30px);
            height: -moz-calc(100% + 30px);
            height: calc(100% + 30px);
        }

        .drift-frame-emailCapture-align-left {
            left: 0;
        }

        .drift-frame-emailCapture-align-right {
            right: 0;
        }

        .drift-frame-slider {
            bottom: 18px;
            height: -webkit-calc(100% + 20px);
            height: -moz-calc(100% + 20px);
            height: calc(100% + 20px);
        }

        .drift-frame-slider-align-left {
            left: 96px;
        }

        .drift-frame-slider-align-right {
            right: 96px;
        }

        .drift-frame--mobile.drift-frame-slider-align-left {
            left: 68px;
        }

        .drift-frame--mobile.drift-frame-slider-align-right {
            right: 68px;
        }

        .drift-widget-content-box {
            /*background: rgba(0, 0, 0, .5);*/
            width: 100%;
            height: 100%;

            position: fixed;
            z-index: 2147483647;
            top: 0;
            left: 0;
        }

        .drift-widget-content-box > * {
            margin: 0 auto;
            position: relative;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            max-height: 80%;

        }

        /* Site Concierge Classes */
        .drift-frame-chat__sc-loaded:not(.drift-chat-open),
        .drift-frame-controller__sc-loaded {
            max-height: 0px !important;
            visibility: hidden !important;
        }

        .drift-frame-chat__sc-loaded {
            bottom: 0px !important;
        }

        @media (max-height: 685px),
        (min-width: 369px) and (max-width: 380px),
        (max-width: 367px),

        (min-device-width: 320px)
        and (max-device-width: 480px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {
            .drift-frame--mobile.drift-frame-chat.drift-chat-open {
                bottom: 0 !important;
                right: 0;
                left: 0;
                z-index: 2147483647 !important;
            }

            .drift-frame--mobile.drift-frame-controller {
                bottom: 0;
            }

            .drift-frame--mobile.drift-frame-controller.drift-frame-controller-align-left {
                left: 0;
            }

            .drift-frame--mobile.drift-frame-controller.drift-frame-controller-align-right {
                right: 0;
            }


            .drift-frame--mobile.drift-frame-controller.drift-chat-open {
                display: none;
            }

            .drift-frame--mobile.drift-frame-slider {
                bottom: 0;
                max-width: 320px;
            }

            .drift-frame--mobile iframe.drift-frame-chat {
                width: 1px !important;
                min-width: 100%;

                height: 1px !important;
                min-height: 100%;
            }

            html.drift-widget-parent--chat-open,
            html.drift-widget-parent--chat-open > body {
                height: 100vh !important;
                margin: 0 !important;
                min-height: 0 !important;
                overflow: hidden !important;
                position: static !important;
            }
        }

        @media only screen and (orientation: landscape) {
            .drift-frame--mobile.drift-frame-controller.drift-chat-open {
                display: none;
            }

            .drift-frame--mobile.drift-frame-controller {
                bottom: 0;
            }

            .drift-frame--mobile.drift-frame-controller-align-right {
                right: 0;
            }

            .drift-frame--mobile.drift-frame-controller-align-left {
                left: 0;
            }
        }

        .drift-frame-chat.widget--xs.drift-chat-open {
            bottom: 0 !important;
            right: 0 !important;
            left: 0 !important;
        }

        .drift-frame-controller.widget--xs.drift-chat-open {
            display: none;
        }

    </style>
    <style>
        .contactPage .ContactUs .form-control {
            color: white; /* Default color */
        }

        .contactPage .ContactUs .form-control:focus {
            color: white; /* Color when focused */
        }
    </style>


@endsection
@section('content')
    <form action="{!! route('post.careers') !!}" method="post">
        @csrf

        {!! $c->section_1 ?? '' !!}


        {{--    {!! $c->section_2 ?? '' !!}--}}

    </form>


    {{--        {!! $c->section_3 ?? '' !!}--}}
    {{--        {!! $c->section_4 ?? '' !!}--}}
    {{--        {!! $c->section_5 ?? '' !!}--}}

    <!-- Modal -->


    <section id="services CareerSec" class="services CareerSec">
        <div class="container">

            <div class="row">

                <div class="currentopening col-md-12">
                    <div class="section-title">
                        <h2>Current Openings</h2>
                    </div>
                    <div class="col-md-12">
                        @foreach($jobs as $job)
                            <li class="careerinner h-100 d-flex flex-column">
                                <div class="row p-3">
                                    <a class="title flex-grow-1" href=""><p class="title">
                                            <strong>{!! $job->name !!}</strong></p></a>
                                    <span><i class="fas fa-business-time"></i> Full Time</span>
                                </div>
                                <div class="row col-md-12"><p class="department">{!! $job->jd !!}</p></div>

                                <div class="row col-md-12">
                                    {{--                                         <p class="location">--}}
                                    {{--                                             <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>--}}
                                    {{--                                         </p>--}}
                                    {{--                                        <button type="button" class="cta btn btn-info" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply--}}
                                    {{--                                            Now</button>--}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-{!! $job->id !!}">
                                        Apply now
                                    </button>

                                </div>
                            </li>
                            <form action="{!! route('careers.apply') !!}" id="carre_apply{!! $job->id !!}" method="post" enctype="multipart/form-data">
                            <div style="margin-top: 160px;z-index: 111111" class="modal fade"
                                 id="exampleModal-{!! $job->id !!}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel-{!! $job->id !!}" aria-hidden="true">


                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{!! $job->name !!}</h5>
                                            <button data-id="{!! $job->id !!}" type="button" class="close close_btn"
                                                    data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                       @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Job Tittle
                                                                    </label>
                                                                    <input type="hidden" class="form-control"
                                                                        name="job_id"   value="{!! $job->id !!}" readonlyn  >
                                                                    <input type="text" value="{!! $job->name !!}" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Email
                                                                        address</label>
                                                                    <input type="email" class="form-control"
                                                                          name="email"  id="email"
                                                                           placeholder="Email">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="exampleFormControlInput1">Name</label>
                                                                    <input type="text" class="form-control"
                                                                      name="name"     id="name"
                                                                           placeholder="Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Cv</label>
                                                                    <input type="file" class="form-control"
                                                                           id="cv" name="cv"
                                                                           placeholder="cv">
                                                                </div>

                                                            </div>
                                                        </div>



                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        @endforeach
                    </div>
                    <style>
                        .careerinner .title span i.fas.fa-business-time {
                            font-size: 14px;
                            color: #00152e;
                        }

                        .careerinner .title span {
                            float: right;
                            color: #19c2e6;
                        }

                        .nav-link {
                            display: block;
                            padding: 0.5rem 1rem;
                            font-size: 20px;
                            font-weight: bold;
                            color: #00152e;
                        }

                        li.careerinner {
                            list-style: none;
                            display: table-cell;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            padding: 20px 15px;
                            display: block !important;
                            width: 48%;
                            float: left;
                            margin: 10px;
                        }

                        }
                        .careerinner a.cta {
                            background: #f58220;
                            color: #fff;
                            padding: 10px 10px;
                            border-radius: 6px;
                            text-decoration: none;
                        }

                        .careerinner p.location {
                            margin-bottom: 20px;
                            color: #00152e;
                            font-size: 14px;
                        }

                        .careerinner p.department {
                            color: #19c2e6;
                            float: left;
                            width: 100%;
                        }

                        .careerinner p.title {
                            font-size: 18px;
                            /* white-space: pre; */
                            margin-bottom: 1px;
                            color: #00152e;
                            float: left;
                        }

                        .location-wrapper {
                            float: left;
                        }

                        .CareerSec {
                            background: #fff !important;
                        }

                        .tab-content ul {
                            padding: 0px;
                        }

                        .nav-tabs {
                            border-bottom: 1px solid #d7d7d7;
                            width: 100%;
                        }

                        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
                            color: #fff;
                            background-color: #00152e;
                            border-color: #00152e;
                        }

                        .careerinner a.cta {
                            background: #f58220;
                            color: #fff;
                            padding: 12px 15px;
                            border-radius: 6px;
                        }

                        .currentopening {
                            padding-top: 60px;
                        }

                        .nav-tabs .nav-link:hover {
                            border-color: #fff #fff #fff !important;
                            color: #f58220;
                        }

                        .nav-tabs .nav-link:focus {
                            color: #fff;
                        }

                        .careerinner span {
                            float: right;
                        }

                        .careerinner span i.fas.fa-business-time {
                            font-size: 16px;
                            color: #00152e;
                        }

                        .careerinner .locatin span {
                            float: left;
                        }


                        @media screen and (max-width: 768px) {
                            li.careerinner {
                                width: 100%;
                                margin: 0px;
                            }

                            .careerinner span {
                                float: left;
                            }
                        }


                    </style>


                </div>

            </div>
        </div>
    </section>

    <!-- Button trigger modal -->
    <script>


        {{--        $(".close_btn").click(function () {--}}
        {{--            var id = $(this).data("id");--}}
        {{--            alert(id)--}}
        {{--            $("#exampleModalLabel-" + id).modal("hide");--}}

        {{--            $("#exampleModalLabel-" + id).removeClass("show");--}}
        {{--            $("#exampleModalLabel-" + id).removeClass("fade");--}}
        {{--            // $("#exampleModalLabel-" + id).modal("hide");--}}
        {{--            document.getElementById("exampleModalLabel-" + id).style.display = "none";--}}
        {{--            modal - backdrop--}}
        {{--        });--}}

        $(document).ready(function () {
            $(".close_btn").click(function () {
                var id = $(this).data("id");


                // Hide the modal using jQuery
                $("#exampleModal-" + id).modal("hide");

                // Remove Bootstrap modal classes
                $("#exampleModal-" + id).removeClass("show fade");

                // Use vanilla JS to hide the modal
                document.getElementById("exampleModal-" + id).style.display = "none";

                // Remove the backdrop (if it's not automatically removed)
                $(".modal-backdrop").remove();
            });
            $(".close").click(function () {
                var id = $(this).data("id");


                // Hide the modal using jQuery
                $("#exampleModal-" + id).modal("hide");

                // Remove Bootstrap modal classes
                $("#exampleModal-" + id).removeClass("show fade");

                // Use vanilla JS to hide the modal
                document.getElementById("exampleModal-" + id).style.display = "none";

                // Remove the backdrop (if it's not automatically removed)
                $(".modal-backdrop").remove();
            });
        });

    </script>

@endsection



