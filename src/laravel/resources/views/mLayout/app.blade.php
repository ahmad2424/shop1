<!DOCTYPE html>

<!--
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Admin Dashboard ThemeAuthor: KeenThemes
Purchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
@include('mLayout.head')

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
        @include('mLayout.aside')
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->

            <!--end::Header-->

            @include('mLayout.header')
            <!--begin::header-->
            <div class="content d-flex flex-column flex-column-fluid p-0 m-0" id="kt_content">

                @yield('content')
            </div>

            <!--end::header-->



            <!--begin::Footer-->
            @include('mLayout.footer')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->

<!--begin::Javascript-->
@include('mLayout.js')

@yield('script')
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
