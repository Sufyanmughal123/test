@extends('admin.layout.main')
@section('title')
    Dashboard
@stop
@section('content')



    <!-- main-content -->

    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="px-3 pt-3  pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">Total User</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">

                            <span class="float-end my-auto ms-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> {!! $User !!}</span>
											</span>
                        </div>
                    </div>
                </div>
                <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="px-3 pt-3  pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">Total Brand</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">

                            <span class="float-end my-auto ms-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> {!! $Brand !!}</span>
											</span>
                        </div>
                    </div>
                </div>
                <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="px-3 pt-3  pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">TOTAL Gallery Images</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">

                            <span class="float-end my-auto ms-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> {!! $Gallery !!}</span>
											</span>
                        </div>
                    </div>
                </div>
                <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="px-3 pt-3  pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">Total Service</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">

                            <span class="float-end my-auto ms-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> {!! $Service !!}</span>
											</span>
                        </div>
                    </div>
                </div>
                <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
            </div>
        </div>
    </div>
    <!-- row closed -->


    <!-- /main-content -->
@endsection
