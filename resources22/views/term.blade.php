@extends('website.layouts.main')
@section('title') Terms And Conditions @endsection



@section('css')
    <style>

        .card  {
            height: 150px;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }

    </style>

@endsection



@section('meta_tags')
    <meta name="title" content="{!! @$term->meta_title !!}"/>
    <meta name="description" content="{!! @$term->meta_description  !!}"/>

@endsection
@section('content')
    <div class="row ">
        <main style="background: url({!! asset('website/assets/brands-bg-b1424065.jpg') !!}) center/cover;">
            <div class="container py-24">
                <h1 class="text-black text-center  text-4xl   font-medium">Terms And Conditions</h1>
            </div>
        </main>
    </div>
    <div class="row">
        <section class="brands container  py-10">
            {!! $term->descripiton !!}
        </section>
    </div>
@endsection

