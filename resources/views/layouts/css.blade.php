<!-- Favicons -->
<link href="{!! asset('theme/assets/css/cyber_latofonts.css') !!}" rel="stylesheet">
<link href="{!! asset('theme/assets/css/cyber_all.css') !!}" rel="stylesheet">
<link href="{!! asset('theme/assets/css/cyber_bootstrap.min.css') !!}" rel="stylesheet">
<!-- Vendor CSS Files -->
<!-- Template Main CSS File -->
<!-- Template Main CSS File -->
<link href="{!! asset('theme/assets/css/cyber_SOC_style.css') !!}" rel="stylesheet">
<link href="{!! asset('theme/assets/css/cyber_SOC_style_2.css') !!}" rel="stylesheet">
<link href="{!! asset('theme/assets/css/cyber_homepage_style.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>

<style>
    .nav-menu .drop-down ul.dropdown-menu.resources_menu {
        right: auto;
        left: initial;
    }

    .nav-menu .drop-down .resources_menu li {
        min-width: 180px;
        position: relative;
        float: initial;
        display: list-item;
        padding: 10px 0px;
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
    #slidy {
        text-align: left;
        margin: 0;
        font-size: 0;
        position: relative;
        width: 400%;
    }


    #slidy img {
        float: left;
        width: 25%;
    }

    @keyframes slidy {
        25% {
            left: -0%;
        }

        33.33333333333333% {
            left: -100%;
        }

        58.33333333333333% {
            left: -100%;
        }

        66.66666666666666% {
            left: -200%;
        }

        91.66666666666666% {
            left: -200%;
        }

        99.99999999999999% {
            left: -300%;
        }
    }

    #slidy {
        left: 0%;
        transform: translate3d(0, 0, 0);
        animation: 12s slidy infinite;
    }
</style>
<style>
    #footer .social-links a {
        background: #f58220;
        border-radius: 6px;
    }

    .social-links {
        margin-bottom: 20px;
    }

    .footerContact i.fa {
        background: #f58220;
        padding: 5px;
        border-radius: 3px;
        color: #fff;
        margin-right: 5px;
    }

    .footerContact a {
        color: #fff !important;
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 0.6px;
    }

    .footer-contact ul {
        padding: 0px;
        list-style: none;
        margin-top: 20px;
    }

    .footer-contact ul {
        padding: 0px;
        list-style: none;
    }

    .footer-contact li {
        width: 100%;
        float: left;
    }

    li.address_headquarters {
        padding-right: 15px;
    }

    #footer strong {
        font-weight: bolder;
        font-size: 18px;
        color: #f58220;
    }

    .footer-contact img {
        width: 50%;
    }

    .footer-links h4 {
        font-size: 20px !important;
        color: #f58220 !important;
        letter-spacing: 0.5px !important;
        font-weight: bolder !important;
    }

    .bottom-menu-link ul {
        display: inline-flex;
        list-style: none;
    }

    .bottom-menu-link ul li {
        padding: 0px 20px;
        margin-top: 12px;
        color: #fff;
        display: block;
    }

    .footer.review-Google {
        display: inline-block;
    }

    a.review-profile-details {
        float: left;
    }

    span.review-star i.fa.fa-star {
        font-size: 11px;
    }

    .footer_SOC2_Type2_logo {
        float: right;
        position: relative;
        top: 24px;
    }

    .footer_SOC2_Type2_logo img {
        width: 50px;
        height: 50px;
    }

    .review-icon img {
        width: 130px !important;
    }

    .footer-contact::after,
    .footer-links::after,
    .footer-newsletter::after {
        content: '';
        position: absolute;
        background-color: #fff;
        width: 90%;
        height: 3px;
        left: 10px;
        display: none;
    }

    .footer-contact::after,
    .footer-links::after {
        bottom: -40px;
    }

    .footer-newsletter::after {
        bottom: -10px;
    }

    .bottom-menu-link.bottom-menu-desktop {
        display: block;
    }

    #footer .footer-top .footer-links ul a {
        color: #fff;
        left: 10px;
        position: relative;
        top: -2px;
    }

    #footer .footer-top .footer-contact p {
        color: #fff;
    }

    .footer-top p a {
        color: #fff;
    }

    #footer .footer-top {
        background: rgb(10 28 49);
        background: linear-gradient(360deg, rgb(0 21 46) 0%, rgb(18 54 94) 100%);

    }

    /*.footer-bottom {
    background: rgb(55,102,156);
    background: linear-gradient(360deg, rgb(0 21 46) 0%, rgb(8 48 94) 100%);
}*/

    .footer-bottom.col-lg-12 {
        background: #00152e;
    }

    .copyright {
        color: #fff;
    }

    .footer-contact-detail ul {
        float: left;
        width: 50%;
    }

    .footer-contact li.address_Asia {
        margin-top: 15px;
    }

    #footer .footer-top .footer-links ul i {
        position: absolute !important;
    }

    #footer .footer-top .footer-links ul li {
        display: inline-block !important;
    }

    @media only screen and (max-width: 767px) {
        .bottom-menu-link.bottom-menu-desktop {
            display: none;
        }

        .bottom-menu-link.bottom-menu-mobile ul {
            padding: 0px;
            display: block;
        }

        .footer-contact::after,
        .footer-links::after,
        .footer-newsletter::after {
            bottom: 0px;
        }
    }
</style>
<style>
    html {
        height: 100%;
    }

    /* Make the images wide and responsive */
    .carousel-inner img {
        height: auto;
        width: 100%;
    }

    body {
        background-color: #FFFFFF;
        margin: 0;
        height: 100%;
        color: #4f5772;
        font-family: 'Roboto', sans-serif !important;
        overflow: hidden;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: initial;
        height: 100%;
        background: #fff;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 100% 100%;
        pointer-events: auto;
        position: absolute;
        overflow: visible;
        transform-origin: 50% 50%;
    }

    div#myCarousel {
        width: 85%;
        margin: auto;
        height: 100%;
    }

    .logo_right {
        float: right;
    }

    .logo_right img {
        width: 9vw !important;
    }

    .top-header .header {
        display: block;
        margin: 0 auto;
        width: 100%;
        max-width: 100%;
        box-shadow: none;
        position: fixed;
        height: 60px !important;
        overflow: hidden;
        z-index: 10;
    }

    .top-header .main {
        margin: 0 auto;
        display: block;
        height: 100%;
        margin-top: 60px;
    }

    .top-header .mainInner {
        display: table;
        height: 100%;
        width: 100%;
        text-align: center;
    }

    .top-header .mainInner div {
        display: table-cell;
        vertical-align: middle;
        font-size: 3em;
        font-weight: bold;
        letter-spacing: 1.25px;
    }

    .top-header #sidebarMenu {
        height: 100%;
        position: fixed;
        left: 0;
        width: 80%;
        margin-top: 60px;
        transform: translateX(-250px);
        transition: transform 250ms ease-in-out;
        background: transparent;
        visibility: hidden;
    }

    .top-header .sidebarMenuInner {
        margin: 0;
        padding: 0;
        border-top: 1px solid rgba(255, 255, 255, 0.10);
    }

    .top-header .sidebarMenuInner li {
        list-style: none;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        padding: 20px;
        cursor: pointer;
        border-bottom: 1px solid rgba(255, 255, 255, 0.10);
        display: inline-block;
    }

    .top-header .sidebarMenuInner li span {
        display: block;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.50);
    }

    .top-header .sidebarMenuInner li a {
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
        text-decoration: none;
    }

    .top-header input[type="checkbox"]:checked~#sidebarMenu {
        transform: translateX(0);
        left: auto;
        visibility: visible;
        z-index: 9999;
    }

    .top-header input[type=checkbox] {
        transition: all 0.3s;
        box-sizing: border-box;
        display: none;
    }

    .top-header .sidebarIconToggle {
        transition: all 0.3s;
        box-sizing: border-box;
        cursor: pointer;
        position: absolute !important;
        z-index: 99 !important;
        height: 100% !important;
        width: 100% !important;
        top: 22px !important;
        left: 40px !important;
        height: 22px !important;
        width: 22px !important;
        border: none !important;
        color: #f58220 !important;
        background: transparent !important;
        visibility: visible !important;
    }

    .top-header .spinner {
        transition: all 0.3s;
        box-sizing: border-box;
        position: absolute;
        height: 3px;
        width: 100%;
        background-color: #fff;
    }

    .top-header .horizontal {
        transition: all 0.3s;
        box-sizing: border-box;
        position: relative;
        float: left;
        margin-top: 3px;
    }

    .top-header .diagonal.part-1 {
        position: relative;
        transition: all 0.3s;
        box-sizing: border-box;
        float: left;
    }

    .top-header .diagonal.part-2 {
        transition: all 0.3s;
        box-sizing: border-box;
        position: relative;
        float: left;
        margin-top: 3px;
    }

    .top-header input[type=checkbox]:checked~.sidebarIconToggle>.horizontal {
        transition: all 0.3s;
        box-sizing: border-box;
        opacity: 0;
    }

    .top-header input[type=checkbox]:checked~.sidebarIconToggle>.diagonal.part-1 {
        transition: all 0.3s;
        box-sizing: border-box;
        transform: rotate(135deg);
        margin-top: 8px;
    }

    .top-header input[type=checkbox]:checked~.sidebarIconToggle>.diagonal.part-2 {
        transition: all 0.3s;
        box-sizing: border-box;
        transform: rotate(-135deg);
        margin-top: -9px;
    }

    .first-slide {
        background: #043672;
        background-image: url(assets/img/abstract_bg_img.png) !important;
    }

    .logo_right {
        float: right;
        z-index: 9999;
        position: relative;
    }

    .sp-slider>li h2 {
        font-size: 50px;
    }

    .sp-slider>li h2 span {
        float: left;
        width: 100%;
    }

    .sp-slider>li p {
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 0.3px;
    }

    .service_sec h2 {
        margin-bottom: 0px !important;
    }

    .service_soc span {
        font-weight: bold;
        letter-spacing: 1px;
    }

    .service_left_side {
        width: 45%;
        float: left;
        margin-top: 1.5vw;
    }

    .service_right_side {
        float: right;
        width: 48%;
        position: relative;
        top: 7vw;
    }

    .service_MDR .service_right_side {
        position: relative;
        top: 3vw;
    }

    .item .service_right_side img {
        width: 100%;
    }

    .cyber_tagline h2 {
        font-size: 50px;
        font-weight: bold;
    }

    .item li {
        list-style: none;
        font-size: 1vw;
        line-height: 2vw;
        font-weight: 400;
    }

    .service_MFA .service_left_side ul li span {
        font-weight: 700;
        color: #f58220;
    }

    .cyber_tagline p {
        font-size: 22px;
    }

    .item .cyber_tagline p a {
        color: #f58220;
        font-weight: 500;
        text-decoration: none;
    }

    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next {
        margin-right: -8.3vw !important;
        background: transparent;

    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .icon-prev {
        margin-left: -8.3vw !important;
        background: transparent;

    }

    .item h2 {
        font-size: 2.3vw;
        font-weight: 400;
        margin-bottom: 0.9vw;
        border-bottom: 0.2vw solid #f58220;
        width: 75% !important;
        padding-bottom: 0.9vw;
        margin-top: 0;
        color: #00152e;
    }

    .item p {
        margin: 0 0 10px;
        font-size: 1vw;
        line-height: 1.8vw;
        font-weight: 400;
        letter-spacing: 0.02vw;
    }

    .item .cyber_tagline h1,
    .item .cyber_tagline h2 {
        font-size: 5vw;
        font-weight: 600;
        margin-bottom: 0.9vw;
        color: #fff;
        width: 100% !important;
    }

    .item {
        margin: 0px !important;
        width: 100%;
        height: 100vh;
        width: 100%;
        padding: 3vw;
        top: 0vw !important;
        pointer-events: auto;
        position: absolute;
        overflow: hidden;
        transform-origin: 50% 50%;
        background: #f8f8f8;
        background-image: url(assets/img/ebook_white_bg.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    ol.carousel-indicators {
        display: none;
    }

    .item .cyber_tagline h1 span,
    .item .cyber_tagline h2 span {
        color: #f58220;
        font-size: 3.5vw;
    }

    .cyber_tagline {
        width: 90%;
    }

    .carousel-inner>.item {
        visibility: hidden !important;
        opacity: 0 !important;
    }

    .carousel-inner>.item.active {
        visibility: visible !important;
        opacity: 1 !important;
        transform: initial;
    }

    .carousel-inner>.item.MDR-work {
        background-image: none !important;
    }

    .item.XDR-work {
        text-align: center;
        margin: 0 auto;
    }

    .item.XDR-work img {
        width: 85%;
    }

    .Slider_logo img {
        width: 90px;
    }

    .service_soc .service_right_side {
        top: 100px;
    }

    .carousel-control {
        text-shadow: none !important;
        opacity: .9 !important;
        background-image: none;
    }

    .carousel-control.left,
    .carousel-control.right {
        background-image: none !important;
    }

    .service_soc .service_left_side {
        width: 100%;
        float: left;
    }

    .service_left_side ul {
        padding: 0px;
    }

    .service_MDR img {
        width: 80%;
    }

    li.service_MDR p,
    li.service_MDR span {
        text-align: left;
    }

    .item.service_XDR .service_left_side {
        width: 100%;
        float: left;
    }

    li.service_XDR {
        text-align: center;
    }

    .service_XDR img {
        width: 70%;
    }

    li.service_XDR p {
        text-align: left;
        padding-top: 12px;
    }

    img.service_img_sec {
        float: right;
        width: 50%;
    }

    .item.service_XDR h2 {
        margin-bottom: 0px;
    }

    .service_soc ul {
        padding: 0px;
        animation-delay: 8000ms;
    }

    .service_soc ul li {
        display: inline-flex;
        padding: 0;
        font-size: 1vw;
        width: 18.5vw;
        float: initial;
        line-height: 1.7vw;
        padding: 0 2vw 0vw 0vw;
        font-weight: 400;
    }

    i.fa.fa-check {
        -webkit-text-stroke: 1px #f2f2f2;
    }

    .service_soc ul li i.fa.fa-check {
        position: relative;
        top: 5px;
        right: 5px;
    }

    .item h5 {
        font-size: 1.5vw;
        font-weight: 500;
        color: #00152e;
    }

    .item .service_expertise_sec h5 {
        margin-top: 2vw;
    }

    .item .cyber_tagline p {
        color: #fff;
        font-size: 1.3vw;
        letter-spacing: 0.1vw;
        line-height: 2.4vw;
    }

    .service_expertise_sec ul {
        padding: 0;
        padding-left: 0.5vw;
    }

    .item .service_content li {
        font-size: 1vw;
        line-height: 2.5vw;
        font-weight: 400;
    }

    .service_expertise_sec ul li {
        display: inline-flex;
        padding: 0;
        font-size: 1vw;
        width: 25.5vw;
        float: initial;
        line-height: 1.7vw;
        padding: 0vw 2vw 0vw 0vw;
        font-weight: 400;
        position: relative;
    }

    .service_expertise_sec ul li i.fa.fa-check {
        position: relative;
        top: 0.5vw;
        right: 0.5vw;
        position: relative;
    }

    .service_left_side h5 span,
    .service_soc h5 span,
    .service_MDR .service_left_side h5 span,
    .service_MFA .service_left_side h5 span,
    .service_MDM .service_left_side h5 span,
    .service_DWM .service_left_side h5 span,
    .service_expertise_sec h5 span {
        color: #f58220;
    }

    .item .Slider_logo img {
        width: 4vw;
        display: inline-block;
    }

    .gray_logo img {
        width: 8vw !important;
        position: relative;
        top: -2vw;
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next,
    .carousel-control .icon-prev {
        width: 2vw !important;
        height: 2vw !important;
        margin-top: -0.9vw;
        font-size: 2vw !important;
        pointer-events: auto;
        color: #f58220;
    }

    .custom-btn {
        width: 30%;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        outline: none;
        margin: 0.9vw;
    }

    .service_content .btn {
        background: #f58220;
        /*background: linear-gradient(0deg, rgba(255,151,0,1) 0%, rgba(251,75,2,1) 100%);*/
        line-height: 42px;
        padding: 0;
        border: none;

    }

    .service_content .btn span {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        font-size: 1vw;
        font-weight: 600;
        line-height: 2vw;
        padding: 0.9vw 0.9vw;
        white-space: initial;

    }

    .service_content .btn:before,
    .service_content .btn:after {
        position: absolute;
        content: "";
        right: 0;
        bottom: 0;
        background: rgba(251, 75, 2, 1);
        box-shadow:
            -7px -7px 20px 0px rgba(255, 255, 255, .9),
            -4px -4px 5px 0px rgba(255, 255, 255, .9),
            7px 7px 20px 0px rgba(0, 0, 0, .2),
            4px 4px 5px 0px rgba(0, 0, 0, .3);
        transition: all 0.3s ease;
    }

    .service_content .btn:before {
        height: 0%;
        width: 2px;
    }

    .service_content .btn:after {
        width: 0%;
        height: 2px;
    }

    .service_content .btn:hover {
        color: rgba(251, 75, 2, 1);
        background: transparent;
    }

    .service_content .btn:hover:before {
        height: 100%;
    }

    .service_content .btn:hover:after {
        width: 100%;
    }

    .service_content .btn span:before,
    .service_content .btn span:after {
        position: absolute;
        content: "";
        left: 0;
        top: 0;
        background: rgba(251, 75, 2, 1);
        box-shadow:
            -7px -7px 20px 0px rgba(255, 255, 255, .9),
            -4px -4px 5px 0px rgba(255, 255, 255, .9),
            7px 7px 20px 0px rgba(0, 0, 0, .2),
            4px 4px 5px 0px rgba(0, 0, 0, .3);
        transition: all 0.3s ease;
    }

    .service_content .btn span:before {
        width: 2px;
        height: 0%;
    }

    .service_content .btn span:after {
        height: 2px;
        width: 0%;
    }

    .service_content .btn span:hover:before {
        height: 100%;
    }

    .service_content .btn span:hover:after {
        width: 100%;
    }

    .second-slide .service_content ul {
        padding: 0px;
    }

    .service_soc h2 span {
        font-weight: 500;
    }

    .service_MFA .service_right_side,
    .service_MDM .service_right_side {
        position: relative;
        top: 6vw;
    }

    .service_DWM .service_left_side,
    .service_MDR .service_left_side,
    .service_email .service_left_side {
        width: 35%;
    }

    .service_DWM .service_right_side,
    .service_MDR .service_right_side {
        width: 65%;
        top: 3vw
    }

    .service_email .service_right_side {
        width: 60%;
    }

    .service_pentesting .service_right_side {
        top: 5vw;
    }

    .service_pentesting .service_left_side h5 {
        line-height: 2.3vw;
    }

    .service_PM .service_right_side {
        top: 1.5vw;
        width: 55%;
    }

    .service_pentesting .service_right_side {
        width: 65%;
        top: 1.5vw;
    }

    .service_pentesting .service_left_side {
        width: 33%;
    }

    .service_PM .service_left_side {
        width: 35%;
    }

    .item .service_PM .service_right_side img {
        width: 90%;
    }

    .service_DFIR .service_right_side {
        width: 45%;
    }

    .item .service_DFIR .service_left_side li span,
    .item .service_firewall .service_left_side li span {
        font-weight: 500;
        color: #f58220;
    }

    .service_firewall .service_left_side {
        width: 38%;
        float: left;
    }

    .service_firewall .service_right_side {
        width: 58%;
        top: 2vw;
    }

    .service_SASE .service_left_side {
        width: 50%;
        float: left;
    }

    .service_expertise_sec img {
        margin-bottom: 1vw;
    }

    .center_img {
        margin: auto;
        width: 80%;
    }

    .service_DFIR .service_left_side {
        width: 50%;
        float: left;
        margin-top: 1vw;
    }

    .item .service_DFIR .service_left_side li {
        font-size: 1vw;
        line-height: 1.8vw;
    }

    .footer-sec {
        background: #00152e;
        width: 100%;
        /* float: left; */
        position: fixed;
        bottom: 0;
        left: 0;
        /* text-align: center; */
        display: inline-flex;
        margin: 0 auto;
    }

    p.footerContact {
        display: inline;
        padding: 0.2vw 5vw 0.2vw 5vw;
        color: #fff;
        font-size: 1vw;
        font-weight: 400;
        margin: 0 auto;
        animation-delay: initial;
    }

    .footerContact a {
        color: #fff;
    }

    .service_SASE .center_img {
        margin: auto;
        width: 75%;
        text-align: center;
    }

    .service_SASE ul {
        padding: 0px;
    }

    .service_SASE li {
        display: inline-flex;
        padding: 0;
        font-size: 1vw;
        width: 19.5vw;
        float: initial;
        line-height: 1.7vw;
        padding: 0 2vw 0vw 0vw;
        font-weight: 400;
    }

    .item .service_content li img {
        width: 1vw;
    }

    .item li img {
        width: 1vw;
        height: 1vw;
        right: 0.4vw;
    }

    .service_soc ul li img,
    .service_expertise_sec ul li img,
    .service_SASE li img {
        position: relative;
        top: 0.4vw;
        right: 0.4vw;
    }

    .service_SASE li i.fa.fa-check {
        position: relative;
        top: 4px;
        right: 5px;
    }

    .item .service_SASE h5 span {
        color: #f58220;
    }

    .carousel-fade .carousel-inner .item {
        -webkit-transition-property: opacity;
        transition-property: opacity;
        height: -webkit-fill-available;
    }

    .carousel-fade .carousel-inner .item,
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        opacity: 0;

    }

    .carousel-fade .carousel-inner .active,
    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }

    .carousel-fade .carousel-inner .next,
    .carousel-fade .carousel-inner .prev,
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        left: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);

    }

    .carousel-fade .carousel-control {
        z-index: 2;
        background-image: none;
        pointer-events: none;
        animation-name: fadeInUp;
        animation-delay: 2500ms;
        animation-fill-mode: forwards;
    }

    .carousel-indicators .active {
        width: 20px;
        height: 15px;
        margin: 0;
        background-color: #000;
        border: none;
        border-radius: 4px;
    }

    .carousel-indicators li {
        width: 20px;
        height: 15px;
        margin: 0;
        background-color: #fff;
        border: none;
        border-radius: 4px;
        -webkit-transform: skew(15deg, 0deg);
        -moz-transform: skew(15deg, 0deg);
        -ms-transform: skew(15deg, 0deg);
        -o-transform: skew(15deg, 0deg);
        transform: skew(15deg, 0deg);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @media screen and (max-width: 992px) {
        div#myCarousel {
            width: 100%;
        }

        .carousel-inner {
            padding: 0px;
        }

        .item {
            height: 40%;
            top: 1vw !important;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            top: 20% !important;
        }

        .service_soc ul li,
        .service_MDR ul li,
        .service_XDR ul li {
            font-size: 1.3vw;
            width: 30.5vw;
        }



    }


    .service_right_side .ContactSection .form-control {
        color: #19c2e6;
        background-color: transparent;
        border-bottom: 1px solid #ced4da !important;
        border-radius: 0px;
        border: none;
        box-shadow: none;
        padding: 20px 0px;
    }

    .service_right_side .ContactSection select {
        color: #979797;
        background-color: transparent;
        border-bottom: 1px solid #ced4da !important;
        border-radius: 0px;
        border: none;
        box-shadow: none;
        padding: 10px 0px;
        width: 100%;
    }

    .service_right_side .ContactSection .ContactBtn {
        padding: 0px 0px 0px 15px;
    }

    .service_right_side .ContactSection .ContactBtn button {
        margin-top: 20px;
        background: #f58220;
        border: none;
        color: #fff;
        padding: 7px 11px;
        border-radius: 5px;
        font-weight: 500;
    }

    .g-recaptcha {
        margin-left: 15px !important;
    }

    .message-form {
        padding: 0px 15px;
    }

    .country-form {
        padding-left: 15px;
        padding-right: 15px;
    }
</style>
