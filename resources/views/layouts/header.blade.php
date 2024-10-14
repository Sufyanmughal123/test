@inject('helpers', 'App\Helper\Helpers')
@php
    $setting = $helpers->get_setting();
    $services = $helpers->get_services();
@endphp


<style>
    * {
        font-family: 'DM sans', sans-serif !important;
    }

    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

    body {
        font-family: "DM Sans", sans-serif !important;
    }

    .nav_center {
        display: flex;
        height: 58px;
        width: 100%;
        align-items: center;
    }

    .content_item {
        padding: 1rem;
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease
    }

    .content-item .highlight {
        border: 0;
        padding: 5px 10px;
    }

    .content_item:hover {
        background: #f0f0f0;
    }

    .content_item>h6 {
        font-size: 0.875rem;
        font-family: "DM Sans", sans-serif;

    }

    .content_item>p {
        font-size: 14px;
        font-family: "DM Sans", sans-serif;
    }

    .nav-menu a {
        font-family: "DM Sans", sans-serif;
        font-size: 15px;
    }

    .dropdown-toggle::after {
        display: none !important;
    }

    .nav-menu>ul>.dropdown::after {
        content: '';
        position: absolute;
        bottom: 8px;
        left: 0;
        display: none;
        width: 100%;
        height: 1px;
        background: #fff;
    }

    .nav-menu>ul>.dropdown:hover::after {
        display: block;
    }

    .menu-item>h5 {
        font-size: 16px;
        font-family: 'DM Sans';
        font-weight: 500;
        transition: all .3s ease;
    }

    .menu-item>h5:hover {
        color: #2b8cff !important;
    }

    .menu-item>p {
        font-size: 0.875rem;
        font-family: 'DM Sans';
    }

    #footer .footer-top .footer-links ul li {
        cursor: pointer;
    }

    #footer .footer-top .footer-links ul li:hover {
        color: #cd772e;
    }

    .homepage_challenge .card {
        transition: all .3s ease-in;
    }

    .homepage_challenge .card:hover {
        transform: scale(1.1)
    }

    .why-us .icon-boxes .icon-box h3 {
        color: #000000;
        font-family: 'DM Sans' !important;
    }

    .why-us .icon-boxes .icon-box {
        background: white;
        transition: all .3s ease-in;
    }

    .why-us .icon-boxes .icon-box:hover {
        transform: scale(1.1)
    }

    .why-us .icon-boxes .icon-box p {
        color: #6e6e6e;
    }
</style>

<header id="header" class="fixed-top" style="height: 85px;">
    <div class="headerTopBar col-xl-12 d-flex align-items-center"
        style="background: #00152e;font-size: 11px !important; padding: 0px !important;
">

        <div class="container">
            <div class="HeaderText" style="font-size: 14px;color: #FFBB87;">

                <marquee>
                    {!! $setting->markee_tag ?? '' !!}
                </marquee>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="nav_center">
                    <a href="/" class="logo mr-auto">
                        {{-- <img src="{{ asset($setting->site_logo ?? '/dist/image/newlogo1.jpeg') }}" style="width: 45px;margin-top:5px; margin-left: 120px" alt="" class="img-fluid"> --}}
                        <img src="https://cybernetshield.com/dist/Settings/cns-web-logo-without-gradient_1726785994.svg"
                            style="width: 45px;margin-top:5px; margin-left: 120px" alt="" class="img-fluid">
                    </a>

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="{!! route('why.cyber') !!}">Why CyberNetShield</a></li>

                            <li class="dropdown">
                                <a class="dropdown-toggle">Our As-a-Service Platforms <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                {{-- <ul style="position: ">
                                    @php
                                        $s_count=0;
                                    @endphp
                                    @foreach ($services as $item)
                                        @if ($s_count <= 10)
                                            <li style="height:80px;width: 22% !important;" class="service_coloum col-lg-3 col-sm-3 p-3" >
                                                <a href="{!! route('service.details',$item->slug) !!}" class="serviceTitle"><i
                                                        class="fa fa-caret-right" aria-hidden="true"></i>{!! $item->name !!}</a>
                                                <span
                                                    class="sub-menu"
                                                    style="color: white;margin-top:5px"> {!! $item->meta_description !!}</span>                                                                                                                                                                                                                                                                                                  </span>
                                            </li>

                                        @endif
                                        @php
                                            $s_count=$s_count+1;
                                        @endphp
                                    @endforeach

                                    <li style="height:98px;margin-top: 50px" class="service_coloum col-lg-3">
                                        <button onclick="all_service()" class=" btn"
                                                style="background: linear-gradient(135deg, #3751A2, #566BAC, #44558A);color: white">
                                            Explore All
                                        </button>
                                        </span>
                                    </li>

                                </ul> --}}
                                <div class="dropdown-menu">
                                    <!-- Left static section -->
                                    <div class="left-menu">
                                        <div class="menu-item" data-target="content1">
                                            <h5 class="fw-bold text-dark">Unified IT & OT Solutions </h5>
                                            <p class="text-muted">Details.</p>
                                        </div>
                                        <div class="menu-item" data-target="content2">
                                            <h5 class="fw-bold text-dark">Compliance, Risk, and Security Management
                                            </h5>
                                            <p class="text-muted">Enterprise cybersecurity solutions.</p>
                                        </div>
                                        <div class="menu-item" data-target="content3">
                                            <h5 class="fw-bold text-dark">Integrated Cloud and Data Security Solutions
                                            </h5>
                                            <p class="text-muted">Protect your digital perimeter.</p>
                                        </div>
                                        <div class="menu-item" data-target="content3">
                                            <h5 class="fw-bold text-dark">Expertise-as-a-Service

                                            </h5>
                                            <p class="text-muted">Secure Access and Identity Management
                                            </p>
                                        </div>
                                        <div class="menu-item" data-target="content3">
                                            <h5 class="fw-bold text-dark">Expertise-as-a-Service

                                            </h5>
                                            <p class="text-muted">Protect your digital perimeter.</p>
                                        </div>
                                    </div>
                                    <!-- Right dynamic section -->
                                    <div class="right-content">
                                        <!-- First Section -->
                                        <div id="content1" class="content-item active">
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Managed Detection and Response</h6>
                                                <p class="text-muted">You can write text here</p>
                                            </div>
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Security Operations – SIEM & SOAR</h6>
                                                <p class="text-muted">
                                                    DevSecOps Services
                                                </p>
                                            </div>
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Endpoint & Network Security</h6>
                                                <p class="text-muted">
                                                    Hands-on training to help you design,
                                                </p>
                                            </div>
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Endpoint & Network Security</h6>
                                                <p class="text-muted">
                                                    Hands-on training to help you design,
                                                </p>
                                            </div>
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Endpoint & Network Security</h6>
                                                <p class="text-muted">
                                                    Hands-on training to help you design,
                                                </p>
                                                <h6 class="fw-bold text-dark">Endpoint & Network Security</h6>
                                            </div>
                                        </div>

                                        <!-- Second Section -->
                                        <div id="content2" class="content-item">
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Offensive Security</h6>
                                                <p class="text-muted">
                                                    Help secure your network, data, and wireless business processes
                                                    against threats.
                                                </p>
                                            </div>
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark highlight">Cloud Security</h6>
                                                <p class="text-muted">
                                                    Secure workloads already in the cloud without compromising
                                                    security.
                                                </p>
                                            </div>
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Security Strategy</h6>
                                                <p class="text-muted">
                                                    Create a roadmap to improve security and reduce risk across the
                                                    enterprise.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Third Section -->
                                        <div id="content3" class="content-item">
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Identity Management Solutions</h6>
                                                <p class="text-muted">
                                                    Comprehensive identity and access management for your enterprise.
                                                </p>
                                            </div>
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Professional Consultancy</h6>
                                                <p class="text-muted">
                                                    Expert guidance on digital identity and protection services.
                                                </p>
                                            </div>
                                            <div class="content_item">
                                                <h6 class="fw-bold text-dark">Custom Security Solutions</h6>
                                                <p class="text-muted">
                                                    Tailored services to ensure top-tier security protection.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li><a href="{!! route('trust.center') !!}">Trust Center</a></li>
                            <li class="drop-down desktop-show"><a href="#resources/">Resources <i
                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu resources_menu">
                                    <li><a href="{!! route('blogs.all') !!}">Blog</a></li>

                                    <li><a href="{!! route('infographics') !!}">Infographics</a></li>

                                    <li><a href="{!! route('events-gallery') !!}">Event Gallery</a></li>
                                </ul>
                            </li>
                            <li class="mobile-show"><a href="#resources/">Resources <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a></li>
                            <li class="mobile-show"><a href="#blog/">Blog</a></li>

                            <li class="mobile-show"><a href="#resources/infographics/">Infographics</a></li>

                            <li class="mobile-show"><a href="#events-gallery/">Event Gallery</a>
                            </li>
                            <li><a href="/careers">Careers</a></li>
                            <li>&nbsp;</li>
                            <li>&nbsp;
                                @guest
                                @else
                                    <a class="" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bx bx-log-out"></i> Sign Out
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                @endguest

                            </li>
                            <li>&nbsp;</li>
                            <li><a class="btn " style="background-color: #161D6F;padding: 3px" href="/contact-us">
                                    &nbsp; Secure Now &nbsp; </a></li>

                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>

                        </ul>
                    </nav><!-- .nav-menu -->
                </div>


            </div>
        </div>

    </div>
    <style>
        .nav-menu .drop-down ul.dropdown-menu.resources_menu {
            width: 200px !important;
            right: auto;
            left: initial;
            top: 110%;
            border: none;
        }

        .nav-menu .drop-down .resources_menu li {
            min-width: 180px;
            position: relative;
            float: initial;
            display: list-item;
            padding: 10px 0px;
        }
    </style>

    <style>
        /* Dropdown hover effect */
        .dropdown:hover .dropdown-menu {
            display: flex;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            /* Slide down effect */
        }

        /* Dropdown menu animations */
        .dropdown-menu {
            transition: all 0.4s ease-in-out;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-20px);
            /* Initial slide-up position */
            display: flex;
            /* Ensures left and right sections are side by side */
            gap: 20px;
        }

        /* Ensure the dropdown is contained */
        .dropdown-menu {
            width: 900px;
            padding: 0px;
            background-color: white;
            border: 0px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 83px;
            left: 50%;
            transform: translateX(-50%) !important;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            gap: 0px;

        }

        /* Left-side menu items */
        .menu-item {
            cursor: pointer;
            padding: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            max-width: 330px !important;
            text-wrap: wrap;
            padding: 1.5rem;
            min-width: 120px !important;
        }

        .menu-item:hover {
            background-color: #f8f9fa;
            /* transform: scale(1.02); */
        }

        /* Right-side content default state */
        .content-item {
            text-wrap: wrap;
            display: none;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            opacity: 0;
            transform: translateX(-20px);
        }

        /* Active content shown */
        .content-item.active {
            display: block;
            opacity: 1;
            transform: translateX(0);
        }

        /* Highlight effect */
        .highlight {
            background-color: #e9ecef;
            padding-left: 5px;
            border-left: 4px solid #007bff;
        }

        /* Layout adjustments */
        .left-menu {
            max-height: calc(98vh - 85px);
            overflow-y: scroll;
            padding-right: 0px;
            /* flex: 1; */
            border-right: 0;
        }

        .left-menu::-webkit-scrollbar {
            width: 0;
        }

        .right-content {
            flex: 2;
            padding: 1rem;
            background: rgba(240, 240, 240, .4);
        }
    </style>

    <script>
        // JavaScript to handle hover and content switching
        document.querySelectorAll(".menu-item").forEach((item) => {
            item.addEventListener("mouseover", function() {
                // Hide all content items
                document.querySelectorAll(".content-item").forEach((content) => {
                    content.classList.remove("active");
                });

                // Show relevant content based on hovered item
                const target = this.getAttribute("data-target");
                document.getElementById(target).classList.add("active");
            });
        });

        // Set first content item as default active
        window.onload = function() {
            document.getElementById("content1").classList.add("active");
            console.log("ok")
        };
    </script>


    <script>
        function all_service() {
            window.location.replace("{!! route('services_all') !!}");
        }
    </script>


</header>
<nav class="mobile-nav d-lg-none">
    <ul>
        <li>
            <a href="{!! route('why.cyber') !!}">Why CyberNetShield</a>
        </li>

        <li class="drop-down"><a href="javascript:void()">Our As-a-Service Platforms <i class="fa fa-angle-down"
                    aria-hidden="true"></i></a>
            <ul>
                @php
                    $s_count = 0;
                @endphp
                @foreach ($services as $item)
                    @if ($s_count <= 10)
                        <li style="height:98px;" class="service_coloum col-lg-3">
                            <a href="{!! route('service.details', $item->slug) !!}" class="serviceTitle"><i class="fa fa-caret-right"
                                    aria-hidden="true"></i>{!! $item->name !!}</a>
                            <span class="sub-menu" style="color: white;margin-top: 20px">
                                {!! $item->meta_description !!}</span>
                        </li>
                    @endif
                    @php
                        $s_count = $s_count + 1;
                    @endphp
                @endforeach

                <li style="height:98px;margin-top: 50px" class="service_coloum col-lg-3">
                    <button onclick="all_service()" class=" btn"
                        style="background: linear-gradient(135deg, #3751A2, #566BAC, #44558A);color: white">
                        Explore All
                    </button>
                    </span>
                </li>

            </ul>
        </li>
        <li><a href="{!! route('trust.center') !!}">Trust Center</a></li>
        <li class="drop-down desktop-show">
            <a href="#resources/">Resources <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu resources_menu">
                <li><a href="{!! route('blogs.all') !!}">Blog</a></li>
                {{--                                <li><a href="#resources/whitepaper/">Whitepapers</a></li> --}}
                {{--                                <li><a href="#resources/datasheets/">Datasheets</a></li> --}}
                <li><a href="{!! route('infographics') !!}">Infographics</a></li>
                {{--                                <li><a href="#resources/webinars/">Webinars</a></li> --}}
                {{--                                <li><a href="#resources/press-releases/">Press Releases</a></li> --}}
                <li><a href="{!! route('events-gallery') !!}">Event Gallery</a></li>

            </ul>
        </li>
        <li class="mobile-show"><a href="#">Resources <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </li>

        <li><a href="/careers">Careers</a></li>
        <li><a class="btn " style="background-color: #161D6F;padding: 3px" href="/contact-us">
                &nbsp; Secure Now &nbsp; </a></li>
    </ul>
</nav>
