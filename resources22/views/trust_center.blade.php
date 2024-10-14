@inject('helpers', 'App\Helper\Helpers')
@extends('layouts.main')
@section('css')
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

@endsection
@section('content')
    {!! $c->section_1	 !!}
    </br>
    </br>
    </br>
    </br>
    <main id="main" class="MSP_Partner">

        {!! $c->section_2	 !!}
        {!! $c->section_3	 !!}
        {!! $c->section_4	 !!}
        {!! $c->section_5	 !!}
        {!! $c->section_6	 !!}
        {!! $c->section_7	 !!}
        {!! $c->section_8	 !!}


    </main><!-- End #main -->
@endsection




