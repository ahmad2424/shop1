<!--begin::Global Javascript Bundle(used by all pages)-->


<script src="{{mix('js/app.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>


<script src="{{mix('js/metronic/landing/landing.js')}}"></script>



@include('layout.sweetalert.Swal')

<!--end::Global Javascript Bundle-->


{{--

<!--begin::Page Vendors Javascript(used by this page)-->
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="assets/js/custom/documentation/documentation.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/modals/create-app.js"></script>
<script src="assets/js/custom/modals/upgrade-plan.js"></script>
<!--end::Page Custom Javascript-->
--}}
