<!DOCTYPE html>



@include('mLayout.admin.headAdmin')

@yield('head')
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed  aside-fixed ">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid ">
        <!--begin::Aside-->
        @include('mLayout.admin.asideAdmin')
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->

            <!--end::Header-->

            @include('mLayout.admin.headerAdmin')
            <!--begin::header-->
            <div class="content d-flex flex-column flex-column-fluid p-0 m-0" id="kt_content">

            @yield('content')
            @yield('test')
            </div>

            <!--end::header-->



            <!--begin::Footer-->
            @include('mLayout.admin.footerAdmin')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->

<!--begin::Javascript-->
@include('mLayout.admin.jsAdmin')

@yield('script')
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
