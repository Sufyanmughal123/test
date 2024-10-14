@inject('helpers', 'App\Helper\Helpers')
@extends('layouts.main')
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
    {{-- {!!  $home_html->section_1_image_background !!} --}}



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

