
@extends('mLayout.admin.appAdmin')


@section('content')




    <div class="w-lg-550px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto my-5">
        <!--begin::Form-->
        <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_new_password_form" action="{{route('admin.change.password')}}" method="post">

            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Setup New Password</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">Already have reset your password ?
                    <a href="{{route('login')}}" class="link-primary fw-bolder">Sign in here</a></div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                <!--begin::Wrapper-->
                <div class="mb-1">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-6">Password</label>
                    <!--end::Label-->
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" placeholder="" name="password" autocomplete="off">
                        <div class="fv-plugins-message-container invalid-feedback">@error('password') {{ $message }} @enderror</div>
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                    <!--end::Input wrapper-->
                    <!--begin::Meter-->
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                    <!--end::Meter-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Hint-->
                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                <!--end::Hint-->
                <div class="fv-plugins-message-container"></div></div>
            <!--end::Input group=-->
            <!--begin::Input group=-->
            <div class="fv-row mb-10 fv-plugins-icon-container">
                <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                <input class="form-control form-control-lg form-control-solid @error('password_confirm') is-invalid @enderror" type="password" placeholder="" name="password_confirm" autocomplete="off">
                <div class="fv-plugins-message-container invalid-feedback">@error('password_confirm') {{ $message }} @enderror</div>
                <div class="fv-plugins-message-container"></div></div>
            <!--end::Input group=-->
            <!--begin::Input group=-->
            <div class="fv-row mb-10 fv-plugins-icon-container">
                <div class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input " type="checkbox" name="toc" value="1">

                    <label class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp;
                        <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</label>
                </div>
                <div class="fv-plugins-message-container"></div></div>
            <!--end::Input group=-->
            <!--begin::Action-->
            <div class="text-center">
                <button type="submit" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <!--end::Action-->
            <div></div></form>
        <!--end::Form-->
    </div>
@endsection
