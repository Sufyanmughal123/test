@inject('helpers', 'App\Helper\Helpers')
@php

    $services = $helpers->get_services();
    $setting = $helpers->get_setting();

@endphp


<div class="container"
    style="text-align: center;
    justify-content: center;
    height: 185px;
    background: linear-gradient(90deg, #566BAC 22.08%, #4A5D96 35.77%, #44558A 47.9%, #4A5D96 82.44%);
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    position: relative; /* Ensure z-index works */
    z-index: 10; /* Correct z-index value */
    margin-top: 5px;
    margin-bottom: -60px;">
    <div class="row">
        <div class="col-md-8" style="color: white; padding-top: 40px;">
            <h2>Ready to get started ? <br />
                Talk to us today</h2>
        </div>
        <div class="col-md-4" style="padding-top: 40px;">
            <a href="/contact-us"><button class="btn mt-4" style="background-color: #001242; color: white">Get Started
                </button></a>
        </div>
    </div>
</div>
<footer id="footer">




    <div class="footer-top" style="background-color: #7e8ea7">
        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-1 col-md-1 col-sm-6 footer-contact">
                    <a href="/">
                        <div class="footer-logo" style="width: 100px;">
                            <img src="https://cybernetshield.com/dist/Settings/cns-web-logo-without-gradient_1726785994.svg" alt="Cyber Logo" class="img-fluid" width="100px"></div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 footer-contact">


                    <div class="footer-contact-detail">

                        <div id="main">
                            <div class="container">































                                <p style="margin-top: 5px"><a style="font-weight:500;font-size:14px;" href="/">About CNS</a></p>


                                <p style="margin-top: 5px"><a style="font-weight:500;font-size:14px;" href="/">Home</a></p>

                                <p style="margin-top: 5px"><a style="font-weight:500;font-size:14px;" href="/">Get In Touch</a></p>


                                <p style="margin-top: 5px"><a style="font-weight:500;font-size:14px;" href="/">FAQS</a></p>
                            </div>
                        </div>












                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 footer-links">
                    <span>Our Services</span>
                    <ul>
                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/tailored-security-operations">MDR-as-a-Service</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/next-gen-ai-powered-247-soc-monitoring">SOC-as-a-Service</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/managed-extended-detection-and-response">XDR-as-a-Service</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/vulnerability-assessment-penetration-testing">VAPT-as-a-Service</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/multi-factor-auth">MFA-as-a-Services</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/threat-modeling">Threat Modeling-as-a-Service</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/network-detection-response">NDR-as-a-Service</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/data-breach-brand-protection">Deep/Dark Web Monitoring-as-a-Service</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/pm-as-a-service">Patch Management-as-a-Service</a></li>
                                                                                                                                            <li style="margin-left: 20px">

                                    <a style="margin-left:5px" href="https://cybernetshield.com/secure-your-mailbox">Email Security-as-a-Service</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li style="margin-left: 20px;padding: 2px">    <button class="btn" style="background-color:#001242;color: white" onclick="all_service()">  Explore All</button> </li>

                    </ul>


                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-newsletter">














                    <p style="color:#fff;">Subscribe to our Cyber Security Newsletter</p>
                    <form class="container" action="https://cybernetshield.com/subcribe" method="POST">
                        <input type="hidden" name="_token" value="lbG9Yxp0Efb48gxL4Twy4pq1FUZD36QvjIlBSkfZ">                        <div class="row">
                            <input type="email" class="form-control w-100" name="email" aria-label="Email">
                        </div>
                        <div class="row text-right mt-2" style="justify-content: end">
                            <input type="submit" class="btn" style="background-color:#001242" name="submit" value="Subscribe" aria-label="Button">
                        </div>


                    </form>


                    <div class="copyright copyrightmobile">
                        <strong><span>© 2024 cyber</span></strong> Inc. All Rights Reserved.
                        <div class="bottom-menu-link bottom-menu-mobile">
                            <ul>
                                <li><a href="#sitemap.html">sitemap.html</a></li>
                                <li><a href="#sitemap.xml">sitemap.xml</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-1 text-right"></div>
                <div class="col-md-2">
                    <h5>Contact Us:</h5>
                </div>
                <div class="col-md-3 mt-1">
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <b>Phone:</b>
                        </div>
                        <div class="col-md-8 text-left">
                            <p>+1 (510) 640-3882</p>
                        </div>

                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3 text-right">
                            <b>Mail:</b>
                        </div>
                        <div class="col-md-8 text-left">
                            <p>info@cybernetshield.com</p>
                        </div>

                    </div>



                </div>
                <div class="col-md-4 offset-2 mt-1 text-left">



                    <div class="resource_challenges-tabs">
                        <div class="tabs">
                            <input type="radio" name="tabs" id="tab1" checked="checked">
                            <label for="tab1" style="color: #cd772e"> HEADQUARTERS <i class="fa fa-caret-up"></i></label>
                            <div class="tab">
                                <p><a style="font-weight:500;font-size:14px;" href="/">CyberNetShield C/O PEARSK LLC 2810 N Church St PMB 427135 , Wilmington, Delaware 19802, US</a></p>
                            </div>

                            <input type="radio" name="tabs" id="tab2">
                            <label for="tab2" style="color: #cd772e"> ASIA<i class="fa fa-caret-up"></i></label>
                            <div class="tab">
                                <!--<p>301 W Main St Marshall, WI  53559 United States</p><br>-->
                                <p>Sector 75 Mohali, India</p>
                            </div>

                            <input type="radio" name="tabs" id="tab3">


                            <div class="tab">
                                <p></p>
                            </div>


                        </div>
                    </div>


                </div>





            </div>
        </div>
    </div>

    <div class="" style="    background: linear-gradient(135deg, #F1F5FF, #3751A2, #566BAC, #44558A); height: 70px;">
        <div class="container d-md-flex py-4">

            <div style="text-align:center;margin:0 auto;" class="mr-md-auto text-center">
                <div class="copyright copyrightDesktop">
                    <strong> © 2024 CyberNetShield</strong> Inc. All Rights Reserved.
                </div>







            </div>

        </div>
    </div>
</footer>
