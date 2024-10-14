@inject('helpers', 'App\Helper\Helpers')
@extends('layouts.main')



@section('meta_tags')

    <meta name="title" content="{!! @$s->meta_title !!}"/>
    <meta name="description" content="{!! @$s->meta_description  !!}"/>
@endsection
@section('css')





@endsection
@section('content')

{{--    <section id=" " class=" Blog_left_sec" style="margin: 0px">--}}
        <div id="">
            <div class="" style="width: 100%;height: 768px;background-image: url({{ asset(@$s->image) }});background-size: cover; ">

{{--                <div class="caption">--}}
{{--                    <div class="container">--}}
{{--                        <h1 class="banner_large_text">{!! $s->name !!}</h1>--}}
{{--                        <div class="Breadcrumb"><a href="/">Home</a> &gt; <a href="{!! route('blogs.all') !!}">security-blog</a>   {!! date("F j, Y", strtotime( $s->created_at)) !!}</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
{{--    </section>--}}

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single">
                        <div class="AboutText MSP-cyber-security">
{{--                            <div class="BlogTime">--}}
{{--                                <p class="PostTime"><i class="fa fa-clock" aria-hidden="true"></i>   {!! date("F j, Y", strtotime( $s->created_at)) !!}</p>--}}
{{--                                <a class="PostAuthor" href="/"><i class="fa fa-pencil-alt" aria-hidden="true"></i> CYBERNETSHIELD</a>--}}
{{--                            </div>--}}

                          {!! $s->description !!}
                        </div></article>
                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">


{{--                        <h3 class="sidebar-title">Recent Posts</h3>--}}

{{--                        <div class="sidebar-item recent-posts">--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="https://www.safeaeon.com/assets/img/blog/grc-cyber-security_thumbnail.webp" alt="GRC Cyber Security" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/grc-cyber-security/">GRC Cyber Security: Integrating Governance, Risk, and Compliance for Better Protection  </a></h4>--}}
{{--                                <time datetime="2024-09-12">12 September 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="https://www.safeaeon.com/assets/img/blog/basic-cyber-security_thumbnail.webp" alt="employees-onboarding-small-business" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/basic-cyber-security-for-employees-onboarding-small-business-checklist/">Basic Cybersecurity for Employees: A Must-Do During Onboarding</a></h4>--}}
{{--                                <time datetime="2024-09-11">11 September 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="https://www.safeaeon.com/assets/img/blog/incident-response-services_thumbnail.webp" alt="compliancesecurity" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/incident-response-services/">Incident Response Services: Mitigate Damage and Recover from Cyber Attacks Quickly</a></h4>--}}
{{--                                <time datetime="2024-09-06">06 September 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="https://www.safeaeon.com/assets/img/blog/compliancesecurity_thumbnail.webp" alt="compliancesecurity" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/compliance-security/">Ensuring Compliance Security: How to Meet Regulatory Requirements Effectively</a></h4>--}}
{{--                                <time datetime="2024-09-02">02 September 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/pci-compliance-test_thumbnail.webp" alt="pci-compliance-test" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/pci-compliance-test/">Preparing for a PCI Compliance Test: What You Need to Know for Success</a></h4>--}}
{{--                                <time datetime="2024-09-02">02 September 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/cloud-security-monitoring_thumbnail.webp" alt="cloud-security-monitoring" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/cloud-security-monitoring/">How Cloud Security Monitoring Can Safeguard Your Cloud Environments</a></h4>--}}
{{--                                <time datetime="2024-09-02">02 September 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/why-managed-patch-management-is-key_thumbnail.webp" alt="importance-of-vulnerability-assessment-services" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/why-managed-patch-management-is-key-to-keeping-your-systems-secure/">Why Managed Patch Management is Key to Keeping Your Systems Secure?</a></h4>--}}
{{--                                <time datetime="2024-08-31">31 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/importance-of-vulnerability-assessment-services_thumbnail.webp" alt="importance-of-vulnerability-assessment-services" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/importance-of-vulnerability-assessment-services/">The Importance of Vulnerability Assessment Services for Your Cybersecurity Strategy</a></h4>--}}
{{--                                <time datetime="2024-08-30">30 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/IT-help-desk-services_thumbnail.webp" alt="IT-help-desk-services" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/IT-help-desk-services/">How IT Help Desk Services Can Enhance Your IT Infrastructure</a></h4>--}}
{{--                                <time datetime="2024-08-29">29 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/managed-cybersecurity-services_thumbnail.webp" alt="managed-cybersecurity-services" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/managed-cybersecurity-services/">The Essential Role of Managed Cybersecurity Services in Protecting Your Business</a></h4>--}}
{{--                                <time datetime="2024-08-29">29 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/best-cybersecurity-companies_thumbnail.webp" alt="best-cybersecurity-companies" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/enterprise-cybersecurity/">Key Factors to Consider When Choosing the Best Cybersecurity Companies in 2024 </a></h4>--}}
{{--                                <time datetime="2024-08-27">27 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/enterprise-cybersecurity_thumbnail.webp" alt="enterprise-cybersecurity" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/enterprise-cybersecurity/">Enterprise Cybersecurity Strategies for Protecting Large Organizations in 2024</a></h4>--}}
{{--                                <time datetime="2024-08-22">22 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/cybersecurity-as-a-service_thumbnail.webp" alt="cybersecurity-as-a-service" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/cybersecurity-as-a-service/">The Benefits of Cybersecurity as a Service for Modern Enterprises</a></h4>--}}
{{--                                <time datetime="2024-08-22">22 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/cybersecurity-service-provider_thumbnail.webp" alt="cybersecurity-service-provider" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/cybersecurity-service-provider/">How to Choose the Best Cybersecurity Service Provider for Your Organization</a></h4>--}}
{{--                                <time datetime="2024-08-20">20 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/privacy-impact-assessment-nist_thumbnail.webp" alt="/privacy-impact-assessment-nist" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/privacy-impact-assessment-nist/">Why Understanding Privacy Impact Assessment NIST is Crucial for Your Business? </a></h4>--}}
{{--                                <time datetime="2024-08-20">20 August 2024</time>--}}
{{--                            </div>--}}

{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/AT&amp;T-data-breach-2024_thumbnail.webp" alt="AT&amp;T-data-breach-2024" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/AT&amp;T-data-breach-2024/">AT&amp;T Data Breach 2024: Impact on Your Business Data and Effective Solutions</a></h4>--}}
{{--                                <time datetime="2024-08-19">19 August 2024</time>--}}
{{--                            </div>--}}


{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/blog/siem-security-vendors_thumbnail.webp" alt="siem-security-vendors" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/siem-security-vendors/">How to Select the Best SIEM Vendor for Your Needs?</a></h4>--}}
{{--                                <time datetime="2024-08-12">12 August 2024</time>--}}
{{--                            </div>--}}


{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/vulnerability-assessment-services_thumbnail.webp" alt="vulnerability-assessment-services" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/vulnerability-assessment-services/">Why Are Vulnerability Assessment Services Important for Businesses?</a></h4>--}}
{{--                                <time datetime="2024-08-12">12 August 2024</time>--}}
{{--                            </div>--}}


{{--                            <div class="post-item clearfix">--}}
{{--                                <img src="/assets/img/cyber-insurance-coverage-checklist_thumbnail.webp" alt="cyber-insurance-coverage-checklist" class="img-fluid">--}}
{{--                                <h4><a href="https://www.safeaeon.com/security-blog/cyber-insurance-coverage-checklist/">Mastering Your Cyber Insurance Coverage Checklist</a></h4>--}}
{{--                                <time datetime="2024-08-12">12 August 2024</time>--}}
{{--                            </div>--}}








{{--                            <!-- End sidebar recent posts-->--}}

{{--                            <h3 class="sidebar-title">Tags</h3>--}}
{{--                            <div class="sidebar-item tags">--}}
{{--                                <ul>--}}
{{--                                    <li>securityoperationcenter</li>--}}
{{--                                    <li>cybersecurity</li>--}}
{{--                                    <li>SOC</li>--}}
{{--                                    <li>Cybercrime</li>--}}
{{--                                    <li>Protection</li>--}}
{{--                                    <li>Securityawareness</li>--}}
{{--                                    <li>Cyberattack</li>--}}
{{--                                    <li>Ontimeresponse</li>--}}
{{--                                    <li>Management</li>--}}
{{--                                    <li>Datasecurity</li>--}}
{{--                                    <li>Network</li>--}}
{{--                                    <li>Cloudsecurity</li>--}}
{{--                                    <li>Securityservices</li>--}}
{{--                                    <li>Securitymanagement</li>--}}
{{--                                    <li>SOCasaservice</li>--}}

{{--                                </ul>--}}
{{--                            </div><!-- End sidebar tags-->--}}


{{--                        </div><!-- End sidebar -->--}}
{{--                        <div class="SocialIcons_Fixed bottom">--}}
{{--                            <ul class="ul">--}}
{{--                                <li>--}}
{{--                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.safeaeon.com/security-blog/incident-response-services/" target="_blank" class="links"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                </li>--}}

{{--                                <li class="twitter-icn">--}}
{{--                                    <a href="https://twitter.com/intent/tweet?url=https://www.safeaeon.com/security-blog/incident-response-services/" target="_blank" class="links">--}}
{{--                                        <img src="https://www.safeaeon.com/assets/img/icon/twitter-blue-icn.png">--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.safeaeon.com/security-blog/incident-response-services/" target="_blank" class="links"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </div>--}}


                    </div><!-- End blog sidebar -->

                </div>

            </div>

{{--            <div class="SocialIcons_Fixed">--}}
{{--                <ul class="ul">--}}
{{--                    <li>--}}
{{--                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.safeaeon.com/security-blog/CVE-2023-29360/"--}}
{{--                           target="_blank" class="links"><i class="fab fa-facebook-f"></i></a>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a href="https://twitter.com/intent/tweet?url=https://www.safeaeon.com/security-blog/CVE-2023-29360/"--}}
{{--                           target="_blank" class="links"><i class="fab fa-twitter"></i></a>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.safeaeon.com/security-blog/CVE-2023-29360/"--}}
{{--                           target="_blank" class="links"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </div>--}}

        </div></section>
@endsection


