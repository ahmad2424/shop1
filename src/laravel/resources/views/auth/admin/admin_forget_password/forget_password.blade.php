@extends('mLayout.admin.appAdmin ')


@section('content')


    @foreach($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach

{{--
    <div class="container">
        <div class="row">
            <div class="col">

                <form action="{{route('forget_password')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email"> email </label>
                        <input id="email" class="form-control" type="text" name="email" required value="{{ old('email') }}">
                    </div>

                    <input class="form-control" type="submit">

                </form>

            </div>
        </div>
    </div>--}}



    <div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto my-5">
        <!--begin::Form-->
        <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_password_reset_form" action="{{route('forget_password')}}" method="post">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Forgot Password ?</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10 fv-plugins-icon-container">
                <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                <input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="off">
                <div class="fv-plugins-message-container"></div></div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <button type="submit" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <a href="{{route('home')}}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
            </div>
            <!--end::Actions-->
            <div></div></form>
        <!--end::Form-->
    </div>

@endsection
