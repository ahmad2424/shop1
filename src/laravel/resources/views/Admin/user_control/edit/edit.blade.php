@extends('mLayout.admin.appAdmin')


@section('content')



    <div class="container-fluid my-5">
        <!--begin::Modal dialog-->
        <div class="container">
            <!--begin::Modal content-->
            <div class="modal-content" id="modal-content">

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13 mt-7">
                        <!--begin::Title-->
                        <h1 class="mb-3 text-muted">{{$title}}</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Users-->

                    <div class="mb-10">
                        <div class="scroll-y me-n7 pe-7">

                            <div class="d-flex justify-content-center my-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('/resources/media/avatars/150-'.rand(1,20).'.jpg')}}">
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-8 fw-bold text-gray-900 text-hover-primary mb-2  ">{{$user->first_name}}</a>
                                    <div class="fs-7 fw-bold text-muted">{{$user->last_name}}</div>
                                </div>
                                <!--end::Details-->
                            </div>

                          @include('Admin.user_control.edit.info')
                          @include('Admin.user_control.edit.address')



                        </div>

                    <!--end::List-->
                    </div>

                    <!--end::Users-->

                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>






@endsection
