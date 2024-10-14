@inject('helpers', 'App\Helper\Helpers')
@extends('layouts.main')
@section('css')
    <style>


        .body_div {
            padding: 10px;
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
            border-radius: 20px;
            background-color: #f3faff;
        }

    </style>
    <style>
        .info-card {
            border-radius: 30px;
            border: 1px solid black;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-width: thin;
        }

        .icon {
            font-size: 50px;
            color: #007bff; /* Dummy icon color */
        }

        .info-text {
            margin-top: 20px;
        }

        .info-text h5 {
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')

{{--    <section id="desktop-view" class="homepage-video desktop-view">--}}
{{--        <div class="bg-video-wrap">--}}
{{--            <img class="img-fluid" src="/theme/assets/img/MSP_Banner.jpg" style="height:768px"--}}
{{--                 alt="MSP Partners Banner -  Inc.">--}}
{{--            <div class="overlay"></div>--}}

{{--            <div class="service_benefits_content col-lg-12 col-md-12">--}}
{{--                <div class="slider_text">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <h1 style="--}}
{{--                            font-size: 65px;--}}
{{--                            font-weight: 600;--}}
{{--                            margin-top: 100px;--}}
{{--                            margin-left: -100px;--}}
{{--                            ">____ Contact us</h1>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <h5 style="--}}
{{--                            color: ##d0d0d5 !important;--}}
{{--    font-size: 19px;--}}
{{--    font-weight: 400;--}}

{{--    max-width: 469px;--}}
{{--">Schedule a Consultation Today!</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}


{{--        </div>--}}
{{--    </section>--}}
{{--    <div style="background-color: #157ecb; height: 700px ">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-5">--}}
{{--                    <div class=" col-md-9   offset-2" style="margin-top: 60px">--}}
{{--                        <h1 style="color: white;">Thank you for your Interest In Our Business! <br/>--}}
{{--                            <span style="color: #25c3e4">________ </span></h1>--}}
{{--                    </div>--}}

{{--                    <div class=" col-md-9   offset-2"--}}
{{--                         style="margin-top:30px;  color: #dee9f5;font-size: 20px;   font-weight: 500;">--}}
{{--                        <p style="color: white">If you have any--}}
{{--                            questions regarding our services or you would like to schedule a consultation, fill out the--}}
{{--                            short form below and a member of our team will respond to your inquiry shortly.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6" style="margin-top: 50px">--}}
{{--                    <div class="card" style="border-radius: 20px">--}}
{{--                        <div class="card-body " style="margin-top: -30px;padding: 20px">--}}
{{--                            <div class="row ml-2">--}}
{{--                                <h2 style=" color: #062043;--}}
{{--    font-size: 30px;--}}
{{--    font-weight: 600;--}}
{{--        padding: 0;--}}
{{--    margin: 0;--}}
{{--    line-height: 1;--}}
{{--    letter-spacing: .6px;--}}
{{--">We Can Help</h2>--}}
{{--                            </div>--}}
{{--                            <div class="row" style="margin-top: 60px">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input style="border-radius: 30px;height: 50px" class="form-control" type="text"--}}
{{--                                               name="name" placeholder="Name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input style="border-radius: 30px;height: 50px;" class="form-control"--}}
{{--                                               type="email" name="email" placeholder="Email">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="row mt-2">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input style="border-radius: 30px;height: 50px" class="form-control" type="text"--}}
{{--                                               name="phone" placeholder="Phone Number">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input style="border-radius: 30px;height: 50px;" class="form-control"--}}
{{--                                               type="text" name="subject" placeholder="Subject">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mt-2">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <textarea placeholder="Message" rows="3" style="border-radius: 35px;  "--}}
{{--                                                  class="form-control"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row mt-2">--}}
{{--                                <div class="offset-7 col-md-4">--}}
{{--                                    <button--}}
{{--                                        style="color:white;background-color: #fb7150;border-radius: 20px;width: 250px;height: 50px"--}}
{{--                                        class="btn">Submit Now--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="container mt-4 mb-4">--}}
{{--        <div class="row">--}}
{{--            <!-- First Info Card -->--}}
{{--            <div class="col-md-5 offset-md-1 info-card">--}}
{{--                <div>--}}
{{--                    <div class="icon">📍</div> <!-- Dummy icon for location -->--}}
{{--                    <div class="info-text">--}}
{{--                        <h5>Bridge IT Consulting</h5>--}}
{{--                        <p>380 Diablo Suite 202<br>Danville CA 94526</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Second Info Card -->--}}
{{--            <div class="col-md-5 info-card ml-md-5">--}}
{{--                <div>--}}
{{--                    <div class="icon">✉️</div> <!-- Dummy icon for email -->--}}
{{--                    <div class="info-text">--}}
{{--                        <h5>Email Address</h5>--}}
{{--                        <p>info@bridgeitconsulting.com</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<br/>
<br/>
<div class="container mt-5">
    <div class="row text-center mt-5">
        <div class="col-md-12">
            <h2 class="text-center">Find a Technology Partners</h2>
        </div>
    </div>
    <div class="row  m-4">
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
        <div class="col-md-4 ">
            <div class="body_div">
                <br/>
                <br/>
                <a class=" m-3" href="https://www.glean.com/" target="_blank">

                    <img loading="lazy" decoding="async" width="169" height="70"
                         src="https://www.bridgeitconsulting.com/wp-content/uploads/2024/08/image0061.png"
                         class="attachment-large size-large wp-image-9419" alt=""> </a>

                <h2 class="m-3"><span style="color: black;">Glean</span></h2>
                <p class="m-3 p-2">
                    Palo Alto Networks, the global cybersecurity leader, is shaping the cloud-centric future
                    with technology that is transforming the way people and organizations operate. We help
                    address the world’s greatest security challenges with continuous innovation that seizes the
                    latest breakthroughs in artificial intelligence, analytics, automation, and orchestration.
                </p>
            </div>


        </div>
    </div>
</div>

@endsection
