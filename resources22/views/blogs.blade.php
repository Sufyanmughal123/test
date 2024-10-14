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

    <section id="InnerSlider">
        <div id="box-search">
            <div class="thumbnail text-center">
                <img class="img-fluid" src="/theme/assets/img/Blog_banner.jpg" width="1800" height="600" alt="Blog Banner -  Inc.">
                <div class="caption">
                    <div class="container">
                        <h1><span>Security </span>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <section class="BlogList_Sec" id="BlogList_Sec">
        <div class="container">
            <div class="section-title">
                <h2>Latest posts</h2>
                <h4>Author: CyberNetShield.</h4>
            </div>

            <div class="row">

                <ul id="example" class="paginate paginate-0">
                    @foreach($s as $blog)
                        {{--@dd($blog);--}}
                        <li class="BlogSec col-lg-4 col-md-12 mb-4" style="opacity: 1;">
                            <a href="{!! route('blogs.details',$blog->slug) !!}" target="_blank">
                                <div class="card">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="{{ asset($blog->image) }}" alt="risks-and-mitigation-of-data-leakage" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title" target="_blank">{!!  $blog->name  !!} </h4>
                                        <p class="card-text">
                                        {{--                                            {!! $blog->description    !!}--}}


                                        @php
                                            $cleanedContent = strip_tags($blog->description );

                                            // Step 2: Limit the content to 200 words
                                            $limitedContent = implode(' ', array_slice(str_word_count($cleanedContent, 1), 0, 50));

                                        @endphp
                                        <p> {!! $limitedContent !!}</p>
                                        </p>
                                        <div class="BlogTime">
                                            <p class="PostTime"><i class="fa fa-clock" aria-hidden="true"></i>{{ $blog->created_at }}</p>
                                            <p class="PostAuthor"><i class="fa fa-pencil-alt" aria-hidden="true"></i>CyberNetShield</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                    @endforeach

                </ul>



            </div>
        </div>
    </section>






@endsection


