

<script src="{!! asset('theme/assets/js/jquery.min.js') !!}"></script>
<script src="{!! asset('theme/assets/js/jquery.waypoints.min.js') !!}"></script>
<script src="{!! asset('theme/assets/js/counterup.min.js') !!}"></script>
<script src="{!! asset('theme/assets/js/main.js') !!}"></script>
<script src="{!! asset('theme/assets/js/slick.js') !!}"></script>
<script src="{!! asset('theme/assets/js/bootstrap.bundle.min.js') !!}"></script>
<script src="{!! asset('theme/assets/js/main.js') !!}"></script>
<!-- Scripts -->


{{--<script src="{!! asset('/theme/assets/js/inview.min.js.download') !!}"></script>--}}



<script>


    $(document).ready(function () {
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });



</script>


 
