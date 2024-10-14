<!-- jQuery JS -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- JQuery min js -->


<!-- Bootstrap Bundle js -->
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!--Internal  Chart.bundle js -->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Moment js -->
<script src="{{asset('assets/plugins/moment/moment.js')}} "></script>

<!--Internal Sparkline js -->
<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Moment js -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

<!--Internal Apexchart js-->
<script src="{{asset('assets/js/apexcharts.js')}}"></script>

<!--Internal  Perfect-scrollbar js -->
<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

<!-- Eva-icons js -->
<script src="{{asset('assets/js/eva-icons.min.js')}}"></script>

<!-- right-sidebar js -->
<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>
<script src="{{asset('assets/plugins/sidebar/sidebar-custom.js')}}"></script>

<!-- Sticky js -->
<script src="{{asset('assets/js/sticky.js')}}"></script>
<script src="{{asset('assets/js/modal-popup.js')}}"></script>

<!-- Left-menu js-->
<script src="{{asset('assets/plugins/side-menu/sidemenu.js')}}"></script>

<!-- Internal Map -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!--Internal  index js -->
<script src="{{asset('assets/js/index.js')}}"></script>

<!--themecolor js-->
<script src="{{asset('assets/js/themecolor.js')}}"></script>

<!-- Apexchart js-->
<script src="{{asset('assets/js/apexcharts.js')}}"></script>
<script src="{{asset('assets/js/jquery.vmap.sampledata.js')}}"></script>

<!-- custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- switcher-styles js -->
<script src="{{asset('assets/js/swither-styles.js')}}"></script>
<script src="{{asset('admin/flash/bootstrap-flash-alert.js')}}"></script>


<script>

    @if(Session::has('flash_message_sucess'))
    $.alert("{{Session::get('flash_message_sucess') }}", {
        title: ' ',
        type: 'info',
        position: ['top-right', [0.12, 5]],
    });

    @endif


</script>


<!-- Barrating JS -->
@yield('js')
