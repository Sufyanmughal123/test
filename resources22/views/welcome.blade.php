@inject('helpers', 'App\Helper\Helpers')
@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endsection
@section('content')


    @php
        $home1= $helpers->get_home();
        $home_html=$home1['home'];


    @endphp








    {{--home section 1 desktop--}}
    {!!  $home_html->section_1_heading_left !!}


    {{-- home section 1 mbl--}}
    {!!  $home_html->section_1_image !!}


    <!--<section class="why-choose-mobile" id="why-choose-mobile">

        </section>-->
    {{--  services section_1_image_background --}}
    {!!  $home_html->section_1_image_background !!}

    {{-- section 3   banner slider  --}}

    {{--  services section_1_image_background --}}
    {!!  $home_html->section_1_heading_right !!}


    {{--    section 4--}}
    {!!  $home_html->section_1_description_right !!}



    <!-- ======= SOC_About Section ======= -->
    {{--   section 5--}}

    {!!  $home_html->section_2_servise_logo !!}







    {{--section 6--}}

    {!!  $home_html->section_3_brands_logo !!}



    {{--    section 7 --}}
    {!!  $home_html->section_4_title1 !!}



@endsection

@section('js')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
  // Global settings:
//   disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
//   startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
//   initClassName: 'aos-init', // class applied after initialization
//   animatedClassName: 'aos-animate', // class applied on animation
//   useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
//   disableMutationObserver: false, // disables automatic mutations' detections (advanced)
//   debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
//   throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


//   // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
//   offset: 120, // offset (in px) from the original trigger point
//   delay: 0, // values from 0 to 3000, with step 50ms
//   duration: 400, // values from 0 to 3000, with step 50ms
//   easing: 'ease', // default easing for AOS animations
//   once: false, // whether animation should happen only once - while scrolling down
//   mirror: false, // whether elements should animate out while scrolling past them
//   anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
</script>
@endsection
