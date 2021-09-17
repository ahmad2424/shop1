@extends('mLayout.app')


@section('content')


    @foreach($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach







    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <!--begin::Logo-->
        <a href="index.html" class="mb-12">
            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Shopping/Gift.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000"></path>
        <path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span>
        </a>
        <!--end::Logo-->
        <!--begin::Wrapper-->
        <div class="w-lg-600px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_up_form" action="{{route('register')}}" method="post">
            @csrf
            <!--begin::Heading-->
                <div class="mb-10 text-center">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Create an Account</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">Already have an account?
                        <a href="{{route('login')}}" class="link-primary fw-bolder">Sign in here</a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Heading-->
                <!--begin::Action-->
                <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                    <img alt="Logo" src="{{asset('resources/google.svg')}}" class="h-20px me-3">
                    <a href="{{route('auth.google' , 'google')}}">
                        Sign in with Google
                    </a>
                </button>
                <!--end::Action-->
                <!--begin::Separator-->
                <div class="d-flex align-items-center mb-10">
                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                    <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                </div>
                <!--end::Separator-->
                <!--begin::Input group-->
                <div class="row fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="first_name" value="{{ old('first_name') }}" autocomplete="off" >
                        <div class="fv-plugins-message-container"></div></div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="last_name" value="{{ old('last_name') }}" autocomplete="off">
                        <div class="fv-plugins-message-container"></div></div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="form-label fw-bolder text-dark fs-6">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email"  value="{{ old('email') }}" autocomplete="off">
                    <div class="fv-plugins-message-container"></div></div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <label class="form-label fw-bolder text-dark fs-6">Phone</label>
                    <input class="form-control form-control-lg form-control-solid" type="number" placeholder="" name="phone"  value="{{ old('phone') }}" autocomplete="off">
                    <div class="fv-plugins-message-container">

                    </div>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Label-->
                        <label class="form-label fw-bolder text-dark fs-6">Password</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password"  autocomplete="off">
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
                <!--begin::Input group-->
                <div class="fv-row mb-5 fv-plugins-icon-container">
                    <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off">
                    <div class="fv-plugins-message-container"></div></div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <label class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" name="toc" value="1">
                        <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp;
									<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                    </label>
                    <div class="fv-plugins-message-container"></div></div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
                <div></div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>

@endsection
