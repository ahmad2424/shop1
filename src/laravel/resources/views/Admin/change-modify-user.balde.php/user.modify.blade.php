@extends('mLayout.admin.appAdmin')

@section('content')


    <div class="container-fluid">
        <div class="container">

            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <div class="row g-5 g-xl-8">
                        <!--begin::List Widget 4-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Orders</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">All cart show</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body ">

                                <!--begin::Item-->
                                <div class="mb-7 row">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px col-2 d-flex align-items-center">
                                                 <span class="symbol-label">
                                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
                                             </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="col-2 d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            order_id
                                        </div>
                                    </div>
                                    <div class="col-2 d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            expire_at
                                        </div>
                                    </div>
                                    <div class="col-2 d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            delivered
                                        </div>
                                    </div>

                                    <div class="col-2 d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            status
                                        </div>
                                    </div>

                                    <div class="col-2 d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            action
                                        </div>
                                    </div>


                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->





                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
