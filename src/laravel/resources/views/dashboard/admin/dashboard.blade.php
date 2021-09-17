@extends('mLayout.admin.appAdmin')


@section('content')

    {{--toolbar start--}}
    <div class="container-fluid my-6">
        <div class="container">


             <div class="toolbar" id="kt_toolbar ">
                 <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                         data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                         class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                        <!--begin::Title-->
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Toolbar </h1>
                        <!--end::Title-->
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start mx-4"></span>
                        <!--end::Separator-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                            </li>
                            <!--end::Item-->

                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Container-->
            </div>

        </div>
    </div>
    {{--toolbar end--}}

    {{--content start--}}
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xxl-4">
                    <!--begin::Mixed Widget 2-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-danger py-5">
                            <h3 class="card-title fw-bolder text-white">Sales Statistics</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                        class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                 height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
                                                                          fill="#000000"></rect>
																	<rect x="14" y="5" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"></rect>
																	<rect x="5" y="14" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"></rect>
																	<rect x="14" y="14" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"></rect>
																</g>
															</svg>
														</span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 3-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                    data-kt-menu="true" wfd-invisible="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments
                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title=""
                                               data-bs-original-title="Specify a target name for future usage and reference"
                                               aria-label="Specify a target name for future usage and reference"></i></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                         data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4" wfd-invisible="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                               value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0" style="position: relative;">
                            <!--begin::Chart-->
                            <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger"
                                 style="height: 200px; min-height: 200px;">
                                <div id="apexchartsf34agj28"
                                     class="apexcharts-canvas apexchartsf34agj28 apexcharts-theme-light"
                                     style="width: 401px; height: 200px;">
                                    <svg id="SvgjsSvg2817" width="401" height="200" xmlns="http://www.w3.org/2000/svg"
                                         version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent;">
                                        <g id="SvgjsG2819" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2818">
                                                <clipPath id="gridRectMaskf34agj28">
                                                    <rect id="SvgjsRect2822" width="408" height="203" x="-3.5" y="-1.5"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskf34agj28"></clipPath>
                                                <clipPath id="nonForecastMaskf34agj28"></clipPath>
                                                <clipPath id="gridRectMarkerMaskf34agj28">
                                                    <rect id="SvgjsRect2823" width="405" height="204" x="-2" y="-2"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter2829" filterUnits="userSpaceOnUse" width="200%"
                                                        height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood2830" flood-color="#cb1b46"
                                                             flood-opacity="0.5" result="SvgjsFeFlood2830Out"
                                                             in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite2831" in="SvgjsFeFlood2830Out"
                                                                 in2="SourceAlpha" operator="in"
                                                                 result="SvgjsFeComposite2831Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset2832" dx="0" dy="5"
                                                              result="SvgjsFeOffset2832Out"
                                                              in="SvgjsFeComposite2831Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur2833" stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur2833Out"
                                                                    in="SvgjsFeOffset2832Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge2834" result="SvgjsFeMerge2834Out"
                                                             in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode2835"
                                                                     in="SvgjsFeGaussianBlur2833Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode2836"
                                                                     in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend2837" in="SourceGraphic"
                                                             in2="SvgjsFeMerge2834Out" mode="normal"
                                                             result="SvgjsFeBlend2837Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter2839" filterUnits="userSpaceOnUse" width="200%"
                                                        height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood2840" flood-color="#cb1b46"
                                                             flood-opacity="0.5" result="SvgjsFeFlood2840Out"
                                                             in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite2841" in="SvgjsFeFlood2840Out"
                                                                 in2="SourceAlpha" operator="in"
                                                                 result="SvgjsFeComposite2841Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset2842" dx="0" dy="5"
                                                              result="SvgjsFeOffset2842Out"
                                                              in="SvgjsFeComposite2841Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur2843" stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur2843Out"
                                                                    in="SvgjsFeOffset2842Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge2844" result="SvgjsFeMerge2844Out"
                                                             in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode2845"
                                                                     in="SvgjsFeGaussianBlur2843Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode2846"
                                                                     in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend2847" in="SourceGraphic"
                                                             in2="SvgjsFeMerge2844Out" mode="normal"
                                                             result="SvgjsFeBlend2847Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <g id="SvgjsG2848" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2849" class="apexcharts-xaxis-texts-g"
                                                   transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2858" class="apexcharts-grid">
                                                <g id="SvgjsG2859" class="apexcharts-gridlines-horizontal"
                                                   style="display: none;">
                                                    <line id="SvgjsLine2861" x1="0" y1="0" x2="401" y2="0"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2862" x1="0" y1="20" x2="401" y2="20"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2863" x1="0" y1="40" x2="401" y2="40"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2864" x1="0" y1="60" x2="401" y2="60"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2865" x1="0" y1="80" x2="401" y2="80"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2866" x1="0" y1="100" x2="401" y2="100"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2867" x1="0" y1="120" x2="401" y2="120"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2868" x1="0" y1="140" x2="401" y2="140"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2869" x1="0" y1="160" x2="401" y2="160"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2870" x1="0" y1="180" x2="401" y2="180"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2871" x1="0" y1="200" x2="401" y2="200"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2860" class="apexcharts-gridlines-vertical"
                                                   style="display: none;"></g>
                                                <line id="SvgjsLine2873" x1="0" y1="200" x2="401" y2="200"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine2872" x1="0" y1="1" x2="0" y2="200"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG2824" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2825" class="apexcharts-series" seriesName="NetxProfit"
                                                   data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2828"
                                                          d="M 0 200L 0 125C 23.391666666666662 125 43.44166666666666 87.5 66.83333333333333 87.5C 90.225 87.5 110.27499999999999 120 133.66666666666666 120C 157.05833333333334 120 177.10833333333332 25 200.5 25C 223.89166666666665 25 243.94166666666666 100 267.3333333333333 100C 290.725 100 310.775 100 334.1666666666667 100C 357.55833333333334 100 377.60833333333335 100 401 100C 401 100 401 100 401 200M 401 100z"
                                                          fill="transparent" fill-opacity="1" stroke-opacity="1"
                                                          stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                          class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMaskf34agj28)"
                                                          filter="url(#SvgjsFilter2829)"
                                                          pathTo="M 0 200L 0 125C 23.391666666666662 125 43.44166666666666 87.5 66.83333333333333 87.5C 90.225 87.5 110.27499999999999 120 133.66666666666666 120C 157.05833333333334 120 177.10833333333332 25 200.5 25C 223.89166666666665 25 243.94166666666666 100 267.3333333333333 100C 290.725 100 310.775 100 334.1666666666667 100C 357.55833333333334 100 377.60833333333335 100 401 100C 401 100 401 100 401 200M 401 100z"
                                                          pathFrom="M -1 200L -1 200L 66.83333333333333 200L 133.66666666666666 200L 200.5 200L 267.3333333333333 200L 334.1666666666667 200L 401 200"></path>
                                                    <path id="SvgjsPath2838"
                                                          d="M 0 125C 23.391666666666662 125 43.44166666666666 87.5 66.83333333333333 87.5C 90.225 87.5 110.27499999999999 120 133.66666666666666 120C 157.05833333333334 120 177.10833333333332 25 200.5 25C 223.89166666666665 25 243.94166666666666 100 267.3333333333333 100C 290.725 100 310.775 100 334.1666666666667 100C 357.55833333333334 100 377.60833333333335 100 401 100"
                                                          fill="none" fill-opacity="1" stroke="#cb1b46"
                                                          stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                          stroke-dasharray="0" class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMaskf34agj28)"
                                                          filter="url(#SvgjsFilter2839)"
                                                          pathTo="M 0 125C 23.391666666666662 125 43.44166666666666 87.5 66.83333333333333 87.5C 90.225 87.5 110.27499999999999 120 133.66666666666666 120C 157.05833333333334 120 177.10833333333332 25 200.5 25C 223.89166666666665 25 243.94166666666666 100 267.3333333333333 100C 290.725 100 310.775 100 334.1666666666667 100C 357.55833333333334 100 377.60833333333335 100 401 100"
                                                          pathFrom="M -1 200L -1 200L 66.83333333333333 200L 133.66666666666666 200L 200.5 200L 267.3333333333333 200L 334.1666666666667 200L 401 200"></path>
                                                    <g id="SvgjsG2826" class="apexcharts-series-markers-wrap"
                                                       data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2879" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wylobuisff no-pointer-events"
                                                                    stroke="#cb1b46" fill="#f1416c" fill-opacity="1"
                                                                    stroke-width="3" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2827" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2874" x1="0" y1="0" x2="401" y2="0" stroke="#b6b6b6"
                                                  stroke-dasharray="0" stroke-width="1"
                                                  class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2875" x1="0" y1="0" x2="401" y2="0" stroke-dasharray="0"
                                                  stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2876" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2877" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2878" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG2857" class="apexcharts-yaxis" rel="0"
                                           transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2820" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                             style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: transparent;"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<rect x="8" y="9" width="3" height="10" rx="1.5"
                                                                          fill="black"></rect>
																	<rect opacity="0.5" x="13" y="5" width="3"
                                                                          height="14" rx="1.5" fill="black"></rect>
																	<rect x="18" y="11" width="3" height="8" rx="1.5"
                                                                          fill="black"></rect>
																	<rect x="3" y="13" width="3" height="6" rx="1.5"
                                                                          fill="black"></rect>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-warning fw-bold fs-6">Weekly Sales</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
                                                                          d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                          fill="black"></path>
																	<path
                                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                        fill="black"></path>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-primary fw-bold fs-6">New Projects</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
                                                                          d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                          fill="black"></path>
																	<path
                                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                        fill="black"></path>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-danger fw-bold fs-6 mt-2">Item Orders</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col bg-light-success px-6 py-8 rounded-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path
                                                                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                                        fill="black"></path>
																	<path opacity="0.3"
                                                                          d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                                          fill="black"></path>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-success fw-bold fs-6 mt-2">Bug Reports</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 402px; height: 459px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl-4">
                    <!--begin::List Widget 5-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bolder mb-2 text-dark">Activities</span>
                                <span class="text-muted fw-bold fs-7">890,344 Sales</span>
                            </h3>
                            <div class="card-toolbar">

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                     id="kt_menu_6139e7f87019f" wfd-invisible="true">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->

                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                           checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Timeline-->
                            <div class="timeline-label">
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-warning fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest.
                                        And keep structure
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Content-->
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                                        <a href="#" class="text-primary">USD 700</a>. to ESL
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving
                                        and keep structure keep great
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving
                                        and keep structure keep great
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app
                                        launch preparion meeting
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: List Widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xxl-4">
                    <!--begin::Mixed Widget 7-->
                    <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0" style="position: relative;">
                            <!--begin::Stats-->
                            <div class="flex-grow-1 card-p pb-0">
                                <div class="d-flex flex-stack flex-wrap">
                                    <div class="me-2">
                                        <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Generate
                                            Reports</a>
                                        <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                                    </div>
                                    <div class="fw-bolder fs-3 text-primary">$24,500</div>
                                </div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary"
                                 style="height: 150px; min-height: 150px;">
                                <div id="apexchartsjuwrhrsx"
                                     class="apexcharts-canvas apexchartsjuwrhrsx apexcharts-theme-light"
                                     style="width: 401px; height: 150px;">
                                    <svg id="SvgjsSvg2926" width="401" height="150" xmlns="http://www.w3.org/2000/svg"
                                         version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent;">
                                        <g id="SvgjsG2928" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2927">
                                                <clipPath id="gridRectMaskjuwrhrsx">
                                                    <rect id="SvgjsRect2931" width="408" height="153" x="-3.5" y="-1.5"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskjuwrhrsx"></clipPath>
                                                <clipPath id="nonForecastMaskjuwrhrsx"></clipPath>
                                                <clipPath id="gridRectMarkerMaskjuwrhrsx">
                                                    <rect id="SvgjsRect2932" width="405" height="154" x="-2" y="-2"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2939" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2940" class="apexcharts-xaxis-texts-g"
                                                   transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2948" class="apexcharts-grid">
                                                <g id="SvgjsG2949" class="apexcharts-gridlines-horizontal"
                                                   style="display: none;">
                                                    <line id="SvgjsLine2951" x1="0" y1="0" x2="401" y2="0"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2952" x1="0" y1="15" x2="401" y2="15"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2953" x1="0" y1="30" x2="401" y2="30"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2954" x1="0" y1="45" x2="401" y2="45"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2955" x1="0" y1="60" x2="401" y2="60"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2956" x1="0" y1="75" x2="401" y2="75"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2957" x1="0" y1="90" x2="401" y2="90"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2958" x1="0" y1="105" x2="401" y2="105"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2959" x1="0" y1="120" x2="401" y2="120"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2960" x1="0" y1="135" x2="401" y2="135"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2961" x1="0" y1="150" x2="401" y2="150"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2950" class="apexcharts-gridlines-vertical"
                                                   style="display: none;"></g>
                                                <line id="SvgjsLine2963" x1="0" y1="150" x2="401" y2="150"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine2962" x1="0" y1="1" x2="0" y2="150"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG2933" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2934" class="apexcharts-series" seriesName="NetxProfit"
                                                   data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2937"
                                                          d="M 0 150L 0 112.5C 28.07 112.5 52.13 87.5 80.2 87.5C 108.27000000000001 87.5 132.33 112.5 160.4 112.5C 188.47 112.5 212.53 50 240.6 50C 268.67 50 292.73 100 320.8 100C 348.87 100 372.93 25 401 25C 401 25 401 25 401 150M 401 25z"
                                                          fill="rgba(241,250,255,1)" fill-opacity="1" stroke-opacity="1"
                                                          stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                          class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMaskjuwrhrsx)"
                                                          pathTo="M 0 150L 0 112.5C 28.07 112.5 52.13 87.5 80.2 87.5C 108.27000000000001 87.5 132.33 112.5 160.4 112.5C 188.47 112.5 212.53 50 240.6 50C 268.67 50 292.73 100 320.8 100C 348.87 100 372.93 25 401 25C 401 25 401 25 401 150M 401 25z"
                                                          pathFrom="M -1 150L -1 150L 80.2 150L 160.4 150L 240.6 150L 320.8 150L 401 150"></path>
                                                    <path id="SvgjsPath2938"
                                                          d="M 0 112.5C 28.07 112.5 52.13 87.5 80.2 87.5C 108.27000000000001 87.5 132.33 112.5 160.4 112.5C 188.47 112.5 212.53 50 240.6 50C 268.67 50 292.73 100 320.8 100C 348.87 100 372.93 25 401 25"
                                                          fill="none" fill-opacity="1" stroke="#009ef7"
                                                          stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                          stroke-dasharray="0" class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMaskjuwrhrsx)"
                                                          pathTo="M 0 112.5C 28.07 112.5 52.13 87.5 80.2 87.5C 108.27000000000001 87.5 132.33 112.5 160.4 112.5C 188.47 112.5 212.53 50 240.6 50C 268.67 50 292.73 100 320.8 100C 348.87 100 372.93 25 401 25"
                                                          pathFrom="M -1 150L -1 150L 80.2 150L 160.4 150L 240.6 150L 320.8 150L 401 150"></path>
                                                    <g id="SvgjsG2935" class="apexcharts-series-markers-wrap"
                                                       data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2969" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker w37d8y2vw no-pointer-events"
                                                                    stroke="#009ef7" fill="#f1faff" fill-opacity="1"
                                                                    stroke-width="3" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2936" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2964" x1="0" y1="0" x2="401" y2="0" stroke="#b6b6b6"
                                                  stroke-dasharray="0" stroke-width="1"
                                                  class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2965" x1="0" y1="0" x2="401" y2="0" stroke-dasharray="0"
                                                  stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2966" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2967" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2968" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG2947" class="apexcharts-yaxis" rel="0"
                                           transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2929" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 75px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                             style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(241, 250, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                             style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 402px; height: 257px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 7-->
                    <!--begin::Mixed Widget 10-->
                    <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden"
                             style="position: relative;">
                            <!--begin::Hidden-->
                            <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                                <div class="me-2">
                                    <span class="fw-bolder text-gray-800 d-block fs-3">Sales</span>
                                    <span class="text-gray-400 fw-bold">Oct 8 - Oct 26 21</span>
                                </div>
                                <div class="fw-bolder fs-3 text-primary">$15,300</div>
                            </div>
                            <!--end::Hidden-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-10-chart" data-kt-color="primary"
                                 style="height: 175px; min-height: 183px;">
                                <div id="apexchartsvvfvrxwu"
                                     class="apexcharts-canvas apexchartsvvfvrxwu apexcharts-theme-light"
                                     style="width: 401px; height: 168px;">
                                    <svg id="SvgjsSvg2970" width="401" height="168" xmlns="http://www.w3.org/2000/svg"
                                         version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent;">
                                        <g id="SvgjsG2972" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(42.343764305114746, 40)">
                                            <defs id="SvgjsDefs2971">
                                                <linearGradient id="SvgjsLinearGradient2976" x1="0" y1="0" x2="0"
                                                                y2="1">
                                                    <stop id="SvgjsStop2977" stop-opacity="0.4"
                                                          stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop2978" stop-opacity="0.5"
                                                          stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop2979" stop-opacity="0.5"
                                                          stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskvvfvrxwu">
                                                    <rect id="SvgjsRect2981" width="354.65623569488525"
                                                          height="87.99962499999998" x="-3" y="-1" rx="0" ry="0"
                                                          opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskvvfvrxwu"></clipPath>
                                                <clipPath id="nonForecastMaskvvfvrxwu"></clipPath>
                                                <clipPath id="gridRectMarkerMaskvvfvrxwu">
                                                    <rect id="SvgjsRect2982" width="352.65623569488525"
                                                          height="89.99962499999998" x="-2" y="-2" rx="0" ry="0"
                                                          opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect2980" width="10.895507365465164"
                                                  height="85.99962499999998" x="0" y="0" rx="0" ry="0" opacity="1"
                                                  stroke-width="0" stroke-dasharray="3"
                                                  fill="url(#SvgjsLinearGradient2976)" class="apexcharts-xcrosshairs"
                                                  y2="85.99962499999998" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG3022" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG3023" class="apexcharts-xaxis-texts-g"
                                                   transform="translate(0, -4)">
                                                    <text id="SvgjsText3025" font-family="inherit" x="21.79101473093033"
                                                          y="114.99962499999998" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan3026">Feb</tspan>
                                                        <title>Feb</title></text>
                                                    <text id="SvgjsText3028" font-family="inherit" x="65.37304419279099"
                                                          y="114.99962499999998" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan3029">Mar</tspan>
                                                        <title>Mar</title></text>
                                                    <text id="SvgjsText3031" font-family="inherit"
                                                          x="108.95507365465164" y="114.99962499999998"
                                                          text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                          font-weight="400" fill="#a1a5b7"
                                                          class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan3032">Apr</tspan>
                                                        <title>Apr</title></text>
                                                    <text id="SvgjsText3034" font-family="inherit" x="152.5371031165123"
                                                          y="114.99962499999998" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan3035">May</tspan>
                                                        <title>May</title></text>
                                                    <text id="SvgjsText3037" font-family="inherit"
                                                          x="196.11913257837296" y="114.99962499999998"
                                                          text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                          font-weight="400" fill="#a1a5b7"
                                                          class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan3038">Jun</tspan>
                                                        <title>Jun</title></text>
                                                    <text id="SvgjsText3040" font-family="inherit" x="239.7011620402336"
                                                          y="114.99962499999998" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan3041">Jul</tspan>
                                                        <title>Jul</title></text>
                                                    <text id="SvgjsText3043" font-family="inherit"
                                                          x="283.28319150209427" y="114.99962499999998"
                                                          text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                          font-weight="400" fill="#a1a5b7"
                                                          class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan3044">Aug</tspan>
                                                        <title>Aug</title></text>
                                                    <text id="SvgjsText3046" font-family="inherit" x="326.8652209639549"
                                                          y="114.99962499999998" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="12px" font-weight="400"
                                                          fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan3047">Sep</tspan>
                                                        <title>Sep</title></text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG3060" class="apexcharts-grid">
                                                <g id="SvgjsG3061" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine3063" x1="0" y1="0" x2="348.65623569488525"
                                                          y2="0" stroke="#eff2f5" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine3064" x1="0" y1="21.499906249999995"
                                                          x2="348.65623569488525" y2="21.499906249999995"
                                                          stroke="#eff2f5" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine3065" x1="0" y1="42.99981249999999"
                                                          x2="348.65623569488525" y2="42.99981249999999"
                                                          stroke="#eff2f5" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine3066" x1="0" y1="64.49971874999999"
                                                          x2="348.65623569488525" y2="64.49971874999999"
                                                          stroke="#eff2f5" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine3067" x1="0" y1="85.99962499999998"
                                                          x2="348.65623569488525" y2="85.99962499999998"
                                                          stroke="#eff2f5" stroke-dasharray="4"
                                                          class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG3062" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine3069" x1="0" y1="85.99962499999998"
                                                      x2="348.65623569488525" y2="85.99962499999998"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine3068" x1="0" y1="1" x2="0" y2="85.99962499999998"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG2983" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG2984" class="apexcharts-series" rel="1"
                                                   seriesName="NetxProfit" data:realIndex="0">
                                                    <path id="SvgjsPath2988"
                                                          d="M 10.895507365465164 85.99962499999998L 10.895507365465164 36.24985937499999Q 10.895507365465164 32.24985937499999 14.895507365465164 32.24985937499999L 15.791014730930328 32.24985937499999Q 19.79101473093033 32.24985937499999 19.79101473093033 36.24985937499999L 19.79101473093033 36.24985937499999L 19.79101473093033 85.99962499999998L 19.79101473093033 85.99962499999998z"
                                                          fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 10.895507365465164 85.99962499999998L 10.895507365465164 36.24985937499999Q 10.895507365465164 32.24985937499999 14.895507365465164 32.24985937499999L 15.791014730930328 32.24985937499999Q 19.79101473093033 32.24985937499999 19.79101473093033 36.24985937499999L 19.79101473093033 36.24985937499999L 19.79101473093033 85.99962499999998L 19.79101473093033 85.99962499999998z"
                                                          pathFrom="M 10.895507365465164 85.99962499999998L 10.895507365465164 85.99962499999998L 19.79101473093033 85.99962499999998L 19.79101473093033 85.99962499999998L 19.79101473093033 85.99962499999998L 19.79101473093033 85.99962499999998L 19.79101473093033 85.99962499999998L 10.895507365465164 85.99962499999998"
                                                          cy="32.24985937499999" cx="53.47753682732582" j="0" val="50"
                                                          barHeight="53.74976562499999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath2990"
                                                          d="M 54.47753682732582 85.99962499999998L 54.47753682732582 25.499906249999995Q 54.47753682732582 21.499906249999995 58.47753682732582 21.499906249999995L 59.373044192790985 21.499906249999995Q 63.373044192790985 21.499906249999995 63.373044192790985 25.499906249999995L 63.373044192790985 25.499906249999995L 63.373044192790985 85.99962499999998L 63.373044192790985 85.99962499999998z"
                                                          fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 54.47753682732582 85.99962499999998L 54.47753682732582 25.499906249999995Q 54.47753682732582 21.499906249999995 58.47753682732582 21.499906249999995L 59.373044192790985 21.499906249999995Q 63.373044192790985 21.499906249999995 63.373044192790985 25.499906249999995L 63.373044192790985 25.499906249999995L 63.373044192790985 85.99962499999998L 63.373044192790985 85.99962499999998z"
                                                          pathFrom="M 54.47753682732582 85.99962499999998L 54.47753682732582 85.99962499999998L 63.373044192790985 85.99962499999998L 63.373044192790985 85.99962499999998L 63.373044192790985 85.99962499999998L 63.373044192790985 85.99962499999998L 63.373044192790985 85.99962499999998L 54.47753682732582 85.99962499999998"
                                                          cy="21.499906249999995" cx="97.05956628918648" j="1" val="60"
                                                          barHeight="64.49971874999999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath2992"
                                                          d="M 98.05956628918648 85.99962499999998L 98.05956628918648 14.74995312499999Q 98.05956628918648 10.74995312499999 102.05956628918648 10.74995312499999L 102.95507365465164 10.74995312499999Q 106.95507365465164 10.74995312499999 106.95507365465164 14.74995312499999L 106.95507365465164 14.74995312499999L 106.95507365465164 85.99962499999998L 106.95507365465164 85.99962499999998z"
                                                          fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 98.05956628918648 85.99962499999998L 98.05956628918648 14.74995312499999Q 98.05956628918648 10.74995312499999 102.05956628918648 10.74995312499999L 102.95507365465164 10.74995312499999Q 106.95507365465164 10.74995312499999 106.95507365465164 14.74995312499999L 106.95507365465164 14.74995312499999L 106.95507365465164 85.99962499999998L 106.95507365465164 85.99962499999998z"
                                                          pathFrom="M 98.05956628918648 85.99962499999998L 98.05956628918648 85.99962499999998L 106.95507365465164 85.99962499999998L 106.95507365465164 85.99962499999998L 106.95507365465164 85.99962499999998L 106.95507365465164 85.99962499999998L 106.95507365465164 85.99962499999998L 98.05956628918648 85.99962499999998"
                                                          cy="10.74995312499999" cx="140.64159575104713" j="2" val="70"
                                                          barHeight="75.24967187499999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath2994"
                                                          d="M 141.64159575104713 85.99962499999998L 141.64159575104713 4Q 141.64159575104713 0 145.64159575104713 0L 146.5371031165123 0Q 150.5371031165123 0 150.5371031165123 4L 150.5371031165123 4L 150.5371031165123 85.99962499999998L 150.5371031165123 85.99962499999998z"
                                                          fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 141.64159575104713 85.99962499999998L 141.64159575104713 4Q 141.64159575104713 0 145.64159575104713 0L 146.5371031165123 0Q 150.5371031165123 0 150.5371031165123 4L 150.5371031165123 4L 150.5371031165123 85.99962499999998L 150.5371031165123 85.99962499999998z"
                                                          pathFrom="M 141.64159575104713 85.99962499999998L 141.64159575104713 85.99962499999998L 150.5371031165123 85.99962499999998L 150.5371031165123 85.99962499999998L 150.5371031165123 85.99962499999998L 150.5371031165123 85.99962499999998L 150.5371031165123 85.99962499999998L 141.64159575104713 85.99962499999998"
                                                          cy="0" cx="184.2236252129078" j="3" val="80"
                                                          barHeight="85.99962499999998"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath2996"
                                                          d="M 185.2236252129078 85.99962499999998L 185.2236252129078 25.499906249999995Q 185.2236252129078 21.499906249999995 189.2236252129078 21.499906249999995L 190.11913257837296 21.499906249999995Q 194.11913257837296 21.499906249999995 194.11913257837296 25.499906249999995L 194.11913257837296 25.499906249999995L 194.11913257837296 85.99962499999998L 194.11913257837296 85.99962499999998z"
                                                          fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 185.2236252129078 85.99962499999998L 185.2236252129078 25.499906249999995Q 185.2236252129078 21.499906249999995 189.2236252129078 21.499906249999995L 190.11913257837296 21.499906249999995Q 194.11913257837296 21.499906249999995 194.11913257837296 25.499906249999995L 194.11913257837296 25.499906249999995L 194.11913257837296 85.99962499999998L 194.11913257837296 85.99962499999998z"
                                                          pathFrom="M 185.2236252129078 85.99962499999998L 185.2236252129078 85.99962499999998L 194.11913257837296 85.99962499999998L 194.11913257837296 85.99962499999998L 194.11913257837296 85.99962499999998L 194.11913257837296 85.99962499999998L 194.11913257837296 85.99962499999998L 185.2236252129078 85.99962499999998"
                                                          cy="21.499906249999995" cx="227.80565467476845" j="4" val="60"
                                                          barHeight="64.49971874999999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath2998"
                                                          d="M 228.80565467476845 85.99962499999998L 228.80565467476845 36.24985937499999Q 228.80565467476845 32.24985937499999 232.80565467476845 32.24985937499999L 233.7011620402336 32.24985937499999Q 237.7011620402336 32.24985937499999 237.7011620402336 36.24985937499999L 237.7011620402336 36.24985937499999L 237.7011620402336 85.99962499999998L 237.7011620402336 85.99962499999998z"
                                                          fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 228.80565467476845 85.99962499999998L 228.80565467476845 36.24985937499999Q 228.80565467476845 32.24985937499999 232.80565467476845 32.24985937499999L 233.7011620402336 32.24985937499999Q 237.7011620402336 32.24985937499999 237.7011620402336 36.24985937499999L 237.7011620402336 36.24985937499999L 237.7011620402336 85.99962499999998L 237.7011620402336 85.99962499999998z"
                                                          pathFrom="M 228.80565467476845 85.99962499999998L 228.80565467476845 85.99962499999998L 237.7011620402336 85.99962499999998L 237.7011620402336 85.99962499999998L 237.7011620402336 85.99962499999998L 237.7011620402336 85.99962499999998L 237.7011620402336 85.99962499999998L 228.80565467476845 85.99962499999998"
                                                          cy="32.24985937499999" cx="271.3876841366291" j="5" val="50"
                                                          barHeight="53.74976562499999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3000"
                                                          d="M 272.3876841366291 85.99962499999998L 272.3876841366291 14.74995312499999Q 272.3876841366291 10.74995312499999 276.3876841366291 10.74995312499999L 277.28319150209427 10.74995312499999Q 281.28319150209427 10.74995312499999 281.28319150209427 14.74995312499999L 281.28319150209427 14.74995312499999L 281.28319150209427 85.99962499999998L 281.28319150209427 85.99962499999998z"
                                                          fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 272.3876841366291 85.99962499999998L 272.3876841366291 14.74995312499999Q 272.3876841366291 10.74995312499999 276.3876841366291 10.74995312499999L 277.28319150209427 10.74995312499999Q 281.28319150209427 10.74995312499999 281.28319150209427 14.74995312499999L 281.28319150209427 14.74995312499999L 281.28319150209427 85.99962499999998L 281.28319150209427 85.99962499999998z"
                                                          pathFrom="M 272.3876841366291 85.99962499999998L 272.3876841366291 85.99962499999998L 281.28319150209427 85.99962499999998L 281.28319150209427 85.99962499999998L 281.28319150209427 85.99962499999998L 281.28319150209427 85.99962499999998L 281.28319150209427 85.99962499999998L 272.3876841366291 85.99962499999998"
                                                          cy="10.74995312499999" cx="314.96971359848976" j="6" val="70"
                                                          barHeight="75.24967187499999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3002"
                                                          d="M 315.96971359848976 85.99962499999998L 315.96971359848976 25.499906249999995Q 315.96971359848976 21.499906249999995 319.96971359848976 21.499906249999995L 320.8652209639549 21.499906249999995Q 324.8652209639549 21.499906249999995 324.8652209639549 25.499906249999995L 324.8652209639549 25.499906249999995L 324.8652209639549 85.99962499999998L 324.8652209639549 85.99962499999998z"
                                                          fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 315.96971359848976 85.99962499999998L 315.96971359848976 25.499906249999995Q 315.96971359848976 21.499906249999995 319.96971359848976 21.499906249999995L 320.8652209639549 21.499906249999995Q 324.8652209639549 21.499906249999995 324.8652209639549 25.499906249999995L 324.8652209639549 25.499906249999995L 324.8652209639549 85.99962499999998L 324.8652209639549 85.99962499999998z"
                                                          pathFrom="M 315.96971359848976 85.99962499999998L 315.96971359848976 85.99962499999998L 324.8652209639549 85.99962499999998L 324.8652209639549 85.99962499999998L 324.8652209639549 85.99962499999998L 324.8652209639549 85.99962499999998L 324.8652209639549 85.99962499999998L 315.96971359848976 85.99962499999998"
                                                          cy="21.499906249999995" cx="358.5517430603504" j="7" val="60"
                                                          barHeight="64.49971874999999"
                                                          barWidth="10.895507365465164"></path>
                                                    <g id="SvgjsG2986" class="apexcharts-bar-goals-markers"
                                                       style="pointer-events: none">
                                                        <g id="SvgjsG2987" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2989" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2991" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2993" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2995" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2997" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2999" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG3001" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG3003" class="apexcharts-series" rel="2"
                                                   seriesName="Revenue" data:realIndex="1">
                                                    <path id="SvgjsPath3007"
                                                          d="M 21.79101473093033 85.99962499999998L 21.79101473093033 36.24985937499999Q 21.79101473093033 32.24985937499999 25.79101473093033 32.24985937499999L 26.686522096395493 32.24985937499999Q 30.686522096395493 32.24985937499999 30.686522096395493 36.24985937499999L 30.686522096395493 36.24985937499999L 30.686522096395493 85.99962499999998L 30.686522096395493 85.99962499999998z"
                                                          fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 21.79101473093033 85.99962499999998L 21.79101473093033 36.24985937499999Q 21.79101473093033 32.24985937499999 25.79101473093033 32.24985937499999L 26.686522096395493 32.24985937499999Q 30.686522096395493 32.24985937499999 30.686522096395493 36.24985937499999L 30.686522096395493 36.24985937499999L 30.686522096395493 85.99962499999998L 30.686522096395493 85.99962499999998z"
                                                          pathFrom="M 21.79101473093033 85.99962499999998L 21.79101473093033 85.99962499999998L 30.686522096395493 85.99962499999998L 30.686522096395493 85.99962499999998L 30.686522096395493 85.99962499999998L 30.686522096395493 85.99962499999998L 30.686522096395493 85.99962499999998L 21.79101473093033 85.99962499999998"
                                                          cy="32.24985937499999" cx="64.37304419279099" j="0" val="50"
                                                          barHeight="53.74976562499999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3009"
                                                          d="M 65.37304419279099 85.99962499999998L 65.37304419279099 25.499906249999995Q 65.37304419279099 21.499906249999995 69.37304419279099 21.499906249999995L 70.26855155825615 21.499906249999995Q 74.26855155825615 21.499906249999995 74.26855155825615 25.499906249999995L 74.26855155825615 25.499906249999995L 74.26855155825615 85.99962499999998L 74.26855155825615 85.99962499999998z"
                                                          fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 65.37304419279099 85.99962499999998L 65.37304419279099 25.499906249999995Q 65.37304419279099 21.499906249999995 69.37304419279099 21.499906249999995L 70.26855155825615 21.499906249999995Q 74.26855155825615 21.499906249999995 74.26855155825615 25.499906249999995L 74.26855155825615 25.499906249999995L 74.26855155825615 85.99962499999998L 74.26855155825615 85.99962499999998z"
                                                          pathFrom="M 65.37304419279099 85.99962499999998L 65.37304419279099 85.99962499999998L 74.26855155825615 85.99962499999998L 74.26855155825615 85.99962499999998L 74.26855155825615 85.99962499999998L 74.26855155825615 85.99962499999998L 74.26855155825615 85.99962499999998L 65.37304419279099 85.99962499999998"
                                                          cy="21.499906249999995" cx="107.95507365465164" j="1" val="60"
                                                          barHeight="64.49971874999999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3011"
                                                          d="M 108.95507365465164 85.99962499999998L 108.95507365465164 14.74995312499999Q 108.95507365465164 10.74995312499999 112.95507365465164 10.74995312499999L 113.8505810201168 10.74995312499999Q 117.8505810201168 10.74995312499999 117.8505810201168 14.74995312499999L 117.8505810201168 14.74995312499999L 117.8505810201168 85.99962499999998L 117.8505810201168 85.99962499999998z"
                                                          fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 108.95507365465164 85.99962499999998L 108.95507365465164 14.74995312499999Q 108.95507365465164 10.74995312499999 112.95507365465164 10.74995312499999L 113.8505810201168 10.74995312499999Q 117.8505810201168 10.74995312499999 117.8505810201168 14.74995312499999L 117.8505810201168 14.74995312499999L 117.8505810201168 85.99962499999998L 117.8505810201168 85.99962499999998z"
                                                          pathFrom="M 108.95507365465164 85.99962499999998L 108.95507365465164 85.99962499999998L 117.8505810201168 85.99962499999998L 117.8505810201168 85.99962499999998L 117.8505810201168 85.99962499999998L 117.8505810201168 85.99962499999998L 117.8505810201168 85.99962499999998L 108.95507365465164 85.99962499999998"
                                                          cy="10.74995312499999" cx="151.5371031165123" j="2" val="70"
                                                          barHeight="75.24967187499999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3013"
                                                          d="M 152.5371031165123 85.99962499999998L 152.5371031165123 4Q 152.5371031165123 0 156.5371031165123 0L 157.43261048197746 0Q 161.43261048197746 0 161.43261048197746 4L 161.43261048197746 4L 161.43261048197746 85.99962499999998L 161.43261048197746 85.99962499999998z"
                                                          fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 152.5371031165123 85.99962499999998L 152.5371031165123 4Q 152.5371031165123 0 156.5371031165123 0L 157.43261048197746 0Q 161.43261048197746 0 161.43261048197746 4L 161.43261048197746 4L 161.43261048197746 85.99962499999998L 161.43261048197746 85.99962499999998z"
                                                          pathFrom="M 152.5371031165123 85.99962499999998L 152.5371031165123 85.99962499999998L 161.43261048197746 85.99962499999998L 161.43261048197746 85.99962499999998L 161.43261048197746 85.99962499999998L 161.43261048197746 85.99962499999998L 161.43261048197746 85.99962499999998L 152.5371031165123 85.99962499999998"
                                                          cy="0" cx="195.11913257837296" j="3" val="80"
                                                          barHeight="85.99962499999998"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3015"
                                                          d="M 196.11913257837296 85.99962499999998L 196.11913257837296 25.499906249999995Q 196.11913257837296 21.499906249999995 200.11913257837296 21.499906249999995L 201.01463994383812 21.499906249999995Q 205.01463994383812 21.499906249999995 205.01463994383812 25.499906249999995L 205.01463994383812 25.499906249999995L 205.01463994383812 85.99962499999998L 205.01463994383812 85.99962499999998z"
                                                          fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 196.11913257837296 85.99962499999998L 196.11913257837296 25.499906249999995Q 196.11913257837296 21.499906249999995 200.11913257837296 21.499906249999995L 201.01463994383812 21.499906249999995Q 205.01463994383812 21.499906249999995 205.01463994383812 25.499906249999995L 205.01463994383812 25.499906249999995L 205.01463994383812 85.99962499999998L 205.01463994383812 85.99962499999998z"
                                                          pathFrom="M 196.11913257837296 85.99962499999998L 196.11913257837296 85.99962499999998L 205.01463994383812 85.99962499999998L 205.01463994383812 85.99962499999998L 205.01463994383812 85.99962499999998L 205.01463994383812 85.99962499999998L 205.01463994383812 85.99962499999998L 196.11913257837296 85.99962499999998"
                                                          cy="21.499906249999995" cx="238.7011620402336" j="4" val="60"
                                                          barHeight="64.49971874999999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3017"
                                                          d="M 239.7011620402336 85.99962499999998L 239.7011620402336 36.24985937499999Q 239.7011620402336 32.24985937499999 243.7011620402336 32.24985937499999L 244.59666940569878 32.24985937499999Q 248.59666940569878 32.24985937499999 248.59666940569878 36.24985937499999L 248.59666940569878 36.24985937499999L 248.59666940569878 85.99962499999998L 248.59666940569878 85.99962499999998z"
                                                          fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 239.7011620402336 85.99962499999998L 239.7011620402336 36.24985937499999Q 239.7011620402336 32.24985937499999 243.7011620402336 32.24985937499999L 244.59666940569878 32.24985937499999Q 248.59666940569878 32.24985937499999 248.59666940569878 36.24985937499999L 248.59666940569878 36.24985937499999L 248.59666940569878 85.99962499999998L 248.59666940569878 85.99962499999998z"
                                                          pathFrom="M 239.7011620402336 85.99962499999998L 239.7011620402336 85.99962499999998L 248.59666940569878 85.99962499999998L 248.59666940569878 85.99962499999998L 248.59666940569878 85.99962499999998L 248.59666940569878 85.99962499999998L 248.59666940569878 85.99962499999998L 239.7011620402336 85.99962499999998"
                                                          cy="32.24985937499999" cx="282.28319150209427" j="5" val="50"
                                                          barHeight="53.74976562499999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3019"
                                                          d="M 283.28319150209427 85.99962499999998L 283.28319150209427 14.74995312499999Q 283.28319150209427 10.74995312499999 287.28319150209427 10.74995312499999L 288.17869886755943 10.74995312499999Q 292.17869886755943 10.74995312499999 292.17869886755943 14.74995312499999L 292.17869886755943 14.74995312499999L 292.17869886755943 85.99962499999998L 292.17869886755943 85.99962499999998z"
                                                          fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 283.28319150209427 85.99962499999998L 283.28319150209427 14.74995312499999Q 283.28319150209427 10.74995312499999 287.28319150209427 10.74995312499999L 288.17869886755943 10.74995312499999Q 292.17869886755943 10.74995312499999 292.17869886755943 14.74995312499999L 292.17869886755943 14.74995312499999L 292.17869886755943 85.99962499999998L 292.17869886755943 85.99962499999998z"
                                                          pathFrom="M 283.28319150209427 85.99962499999998L 283.28319150209427 85.99962499999998L 292.17869886755943 85.99962499999998L 292.17869886755943 85.99962499999998L 292.17869886755943 85.99962499999998L 292.17869886755943 85.99962499999998L 292.17869886755943 85.99962499999998L 283.28319150209427 85.99962499999998"
                                                          cy="10.74995312499999" cx="325.8652209639549" j="6" val="70"
                                                          barHeight="75.24967187499999"
                                                          barWidth="10.895507365465164"></path>
                                                    <path id="SvgjsPath3021"
                                                          d="M 326.8652209639549 85.99962499999998L 326.8652209639549 25.499906249999995Q 326.8652209639549 21.499906249999995 330.8652209639549 21.499906249999995L 331.7607283294201 21.499906249999995Q 335.7607283294201 21.499906249999995 335.7607283294201 25.499906249999995L 335.7607283294201 25.499906249999995L 335.7607283294201 85.99962499999998L 335.7607283294201 85.99962499999998z"
                                                          fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                          stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="2" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMaskvvfvrxwu)"
                                                          pathTo="M 326.8652209639549 85.99962499999998L 326.8652209639549 25.499906249999995Q 326.8652209639549 21.499906249999995 330.8652209639549 21.499906249999995L 331.7607283294201 21.499906249999995Q 335.7607283294201 21.499906249999995 335.7607283294201 25.499906249999995L 335.7607283294201 25.499906249999995L 335.7607283294201 85.99962499999998L 335.7607283294201 85.99962499999998z"
                                                          pathFrom="M 326.8652209639549 85.99962499999998L 326.8652209639549 85.99962499999998L 335.7607283294201 85.99962499999998L 335.7607283294201 85.99962499999998L 335.7607283294201 85.99962499999998L 335.7607283294201 85.99962499999998L 335.7607283294201 85.99962499999998L 326.8652209639549 85.99962499999998"
                                                          cy="21.499906249999995" cx="369.4472504258156" j="7" val="60"
                                                          barHeight="64.49971874999999"
                                                          barWidth="10.895507365465164"></path>
                                                    <g id="SvgjsG3005" class="apexcharts-bar-goals-markers"
                                                       style="pointer-events: none">
                                                        <g id="SvgjsG3006" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG3008" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG3010" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG3012" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG3014" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG3016" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG3018" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG3020" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2985" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG3004" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            </g>
                                            <line id="SvgjsLine3070" x1="0" y1="0" x2="348.65623569488525" y2="0"
                                                  stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                  class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine3071" x1="0" y1="0" x2="348.65623569488525" y2="0"
                                                  stroke-dasharray="0" stroke-width="0"
                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG3072" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG3073" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG3074" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG3048" class="apexcharts-yaxis" rel="0"
                                           transform="translate(12.343764305114746, 0)">
                                            <g id="SvgjsG3049" class="apexcharts-yaxis-texts-g">
                                                <text id="SvgjsText3050" font-family="inherit" x="20" y="41.4"
                                                      text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                      font-weight="400" fill="#a1a5b7"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan3051">80</tspan>
                                                    <title>80</title></text>
                                                <text id="SvgjsText3052" font-family="inherit" x="20"
                                                      y="62.899906249999994" text-anchor="end" dominant-baseline="auto"
                                                      font-size="12px" font-weight="400" fill="#a1a5b7"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan3053">60</tspan>
                                                    <title>60</title></text>
                                                <text id="SvgjsText3054" font-family="inherit" x="20" y="84.3998125"
                                                      text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                      font-weight="400" fill="#a1a5b7"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan3055">40</tspan>
                                                    <title>40</title></text>
                                                <text id="SvgjsText3056" font-family="inherit" x="20"
                                                      y="105.89971874999999" text-anchor="end" dominant-baseline="auto"
                                                      font-size="12px" font-weight="400" fill="#a1a5b7"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan3057">20</tspan>
                                                    <title>20</title></text>
                                                <text id="SvgjsText3058" font-family="inherit" x="20"
                                                      y="127.39962499999999" text-anchor="end" dominant-baseline="auto"
                                                      font-size="12px" font-weight="400" fill="#a1a5b7"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan3059">0</tspan>
                                                    <title>0</title></text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2973" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 84px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                             style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(228, 230, 239);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 402px; height: 257px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Mixed Widget 10-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">


                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Tables Widget 9-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
                            </h3>
                            <div class="d-flex flex-wrap justify-content-between">
                                <div id="add_new_member" class="card-toolbar ms-1">
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                                       data-bs-target="#kt_modal_invite_friends">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                                  height="2" rx="1"
                                                                  transform="rotate(-90 11.364 20.364)"
                                                                  fill="black"></rect>
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                                  fill="black"></rect>
														</svg>
													</span>
                                        <!--end::Svg Icon-->New Member</a>
                                </div>
                                <div id="add_new_admin" class="card-toolbar ms-1" >
                                    <a href="{{route('admins.view')}}" class="btn btn-sm btn-light btn-active-primary mx-3">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                                  height="2" rx="1"
                                                                  transform="rotate(-90 11.364 20.364)"
                                                                  fill="black"></rect>
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                                  fill="black"></rect>
														</svg>
													</span>
                                        <!--end::Svg Icon-->Admin Manager
                                    </a>
                                </div>
                            </div>

                        </div>
                        @include('dashboard.admin.create.New-Member')

                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 table-hover">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-25px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       data-kt-check="true" data-kt-check-target=".widget-9-check">
                                            </div>
                                        </th>
                                        <th class="min-w-150px">Authors</th>
                                        <th class="min-w-140px">Company</th>
                                        <th class="min-w-120px">Progress</th>
                                        <th class="min-w-100px text-end">Actions</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    @foreach($users as $user )
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check" type="checkbox" name="user_id[]" value="{{$user->id}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="{{asset("resources/media/avatars/150-".rand(1,20).".jpg")}}" alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$user->name}}</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">{{$user->last_name}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">{{$user->phone}}</a>
                                            <span
                                                class="text-muted fw-bold text-muted d-block fs-7">{{$user->email}}</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                </div>
                                                <div class="progress h-6px w-100">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                         style="width: {{rand(1,100)}}%" aria-valuenow="50" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="#"
                                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                fill="black"></path>
                                                            <path opacity="0.3"
                                                                  d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                  fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3"
                                                                                          d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                          fill="black"></path>
																					<path
                                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                        fill="black"></path>
																				</svg>
																			</span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="#"
                                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none">
																					<path
                                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                        fill="black"></path>
																					<path opacity="0.5"
                                                                                          d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                          fill="black"></path>
																					<path opacity="0.5"
                                                                                          d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                          fill="black"></path>
																				</svg>
																			</span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                {{$users->links("vendor/pagination/bootstrap-4")}}
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Tables Widget 9-->
                </div>



                <div class="col-xl-4">
                    <!--begin::Mixed Widget 5-->
                    <div class="card card-xxl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Trends</span>
                                <span class="text-muted fw-bold fs-7">Latest trends</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                 height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1"
                                                                          fill="#000000"></rect>
																	<rect x="14" y="5" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"></rect>
																	<rect x="5" y="14" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"></rect>
																	<rect x="14" y="14" width="5" height="5" rx="1"
                                                                          fill="#000000" opacity="0.3"></rect>
																</g>
															</svg>
														</span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 3-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                    data-kt-menu="true" wfd-invisible="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments
                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title=""
                                               data-bs-original-title="Specify a target name for future usage and reference"
                                               aria-label="Specify a target name for future usage and reference"></i></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                         data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4" wfd-invisible="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                               value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column" style="position: relative;">
                            <!--begin::Chart-->
                            <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success"
                                 style="height: 150px; min-height: 150px;">
                                <div id="apexchartsjlok33jw"
                                     class="apexcharts-canvas apexchartsjlok33jw apexcharts-theme-light"
                                     style="width: 343px; height: 150px;">
                                    <svg id="SvgjsSvg2881" width="343" height="150" xmlns="http://www.w3.org/2000/svg"
                                         version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent;">
                                        <g id="SvgjsG2883" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2882">
                                                <clipPath id="gridRectMaskjlok33jw">
                                                    <rect id="SvgjsRect2886" width="350" height="153" x="-3.5" y="-1.5"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskjlok33jw"></clipPath>
                                                <clipPath id="nonForecastMaskjlok33jw"></clipPath>
                                                <clipPath id="gridRectMarkerMaskjlok33jw">
                                                    <rect id="SvgjsRect2887" width="347" height="154" x="-2" y="-2"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2894" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2895" class="apexcharts-xaxis-texts-g"
                                                   transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2903" class="apexcharts-grid">
                                                <g id="SvgjsG2904" class="apexcharts-gridlines-horizontal"
                                                   style="display: none;">
                                                    <line id="SvgjsLine2906" x1="0" y1="0" x2="343" y2="0"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2907" x1="0" y1="15" x2="343" y2="15"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2908" x1="0" y1="30" x2="343" y2="30"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2909" x1="0" y1="45" x2="343" y2="45"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2910" x1="0" y1="60" x2="343" y2="60"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2911" x1="0" y1="75" x2="343" y2="75"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2912" x1="0" y1="90" x2="343" y2="90"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2913" x1="0" y1="105" x2="343" y2="105"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2914" x1="0" y1="120" x2="343" y2="120"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2915" x1="0" y1="135" x2="343" y2="135"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2916" x1="0" y1="150" x2="343" y2="150"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2905" class="apexcharts-gridlines-vertical"
                                                   style="display: none;"></g>
                                                <line id="SvgjsLine2918" x1="0" y1="150" x2="343" y2="150"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine2917" x1="0" y1="1" x2="0" y2="150"
                                                      stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG2888" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG2889" class="apexcharts-series" seriesName="NetxProfit"
                                                   data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2892"
                                                          d="M 0 150L 0 80.76923076923077C 24.01 80.76923076923077 44.59 80.76923076923077 68.60000000000001 80.76923076923077C 92.61000000000001 80.76923076923077 113.19000000000001 11.538461538461547 137.20000000000002 11.538461538461547C 161.21 11.538461538461547 181.79000000000002 92.3076923076923 205.8 92.3076923076923C 229.81 92.3076923076923 250.39000000000004 92.3076923076923 274.40000000000003 92.3076923076923C 298.41 92.3076923076923 318.99 57.69230769230769 343 57.69230769230769C 343 57.69230769230769 343 57.69230769230769 343 150M 343 57.69230769230769z"
                                                          fill="rgba(232,255,243,1)" fill-opacity="1" stroke-opacity="1"
                                                          stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                          class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMaskjlok33jw)"
                                                          pathTo="M 0 150L 0 80.76923076923077C 24.01 80.76923076923077 44.59 80.76923076923077 68.60000000000001 80.76923076923077C 92.61000000000001 80.76923076923077 113.19000000000001 11.538461538461547 137.20000000000002 11.538461538461547C 161.21 11.538461538461547 181.79000000000002 92.3076923076923 205.8 92.3076923076923C 229.81 92.3076923076923 250.39000000000004 92.3076923076923 274.40000000000003 92.3076923076923C 298.41 92.3076923076923 318.99 57.69230769230769 343 57.69230769230769C 343 57.69230769230769 343 57.69230769230769 343 150M 343 57.69230769230769z"
                                                          pathFrom="M -1 150L -1 150L 68.60000000000001 150L 137.20000000000002 150L 205.8 150L 274.40000000000003 150L 343 150"></path>
                                                    <path id="SvgjsPath2893"
                                                          d="M 0 80.76923076923077C 24.01 80.76923076923077 44.59 80.76923076923077 68.60000000000001 80.76923076923077C 92.61000000000001 80.76923076923077 113.19000000000001 11.538461538461547 137.20000000000002 11.538461538461547C 161.21 11.538461538461547 181.79000000000002 92.3076923076923 205.8 92.3076923076923C 229.81 92.3076923076923 250.39000000000004 92.3076923076923 274.40000000000003 92.3076923076923C 298.41 92.3076923076923 318.99 57.69230769230769 343 57.69230769230769"
                                                          fill="none" fill-opacity="1" stroke="#50cd89"
                                                          stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                          stroke-dasharray="0" class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMaskjlok33jw)"
                                                          pathTo="M 0 80.76923076923077C 24.01 80.76923076923077 44.59 80.76923076923077 68.60000000000001 80.76923076923077C 92.61000000000001 80.76923076923077 113.19000000000001 11.538461538461547 137.20000000000002 11.538461538461547C 161.21 11.538461538461547 181.79000000000002 92.3076923076923 205.8 92.3076923076923C 229.81 92.3076923076923 250.39000000000004 92.3076923076923 274.40000000000003 92.3076923076923C 298.41 92.3076923076923 318.99 57.69230769230769 343 57.69230769230769"
                                                          pathFrom="M -1 150L -1 150L 68.60000000000001 150L 137.20000000000002 150L 205.8 150L 274.40000000000003 150L 343 150"></path>
                                                    <g id="SvgjsG2890" class="apexcharts-series-markers-wrap"
                                                       data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2924" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wl0slo4eg no-pointer-events"
                                                                    stroke="#50cd89" fill="#e8fff3" fill-opacity="1"
                                                                    stroke-width="3" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2891" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2919" x1="0" y1="0" x2="343" y2="0" stroke="#b6b6b6"
                                                  stroke-dasharray="0" stroke-width="1"
                                                  class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2920" x1="0" y1="0" x2="343" y2="0" stroke-dasharray="0"
                                                  stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2921" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2922" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2923" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG2902" class="apexcharts-yaxis" rel="0"
                                           transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2884" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 75px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                             style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(232, 255, 243);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                             style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="mt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="{{asset("resources/media/svg/brand-logos/plurk.svg")}}"
                                                     class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                Authors</a>
                                            <div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra Trepp</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="{{asset("resources/media/svg/brand-logos/figma-1.svg")}}"
                                                     class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                Sales</a>
                                            <div class="fs-7 text-muted fw-bold mt-1">PitStop Emails</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="{{asset("resources/media/svg/brand-logos/vimeo.svg")}}"
                                                     class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="py-1">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                Engagement</a>
                                            <div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 402px; height: 402px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    {{--content end--}}


@endsection


@section('script')
    <script>


        //disable child event from parent
        $("#modal-content").click(function(e) {

            $('.modal-backdrop').removeClass('show').addClass('d-none') ;
            $(this).removeClass('show').removeClass('d-none')  ;

            e.stopPropagation();

        });

        $('#add_new_member').click(function (){
            //cover
            $('.modal-backdrop').addClass('show').css('display' , 'block') ;
            $('#kt_modal_invite_friends').addClass('show').removeClass('d-none' )  ;

        });

        $('#add_new_admin').click(function (){
            //cover

            $('.modal-backdrop').addClass('show').css('display' , 'block') ;
            $('#kt_modal_invite_admin').addClass('show').removeClass('d-none' )  ;

        });



//page = 0 for post
        //search
        async  function search_submit( page = 1 , tag ){

            //spiner
            $(tag).append('<div class="spinner-border position-sm-absolute" style="top: 6% ; right: 41%;"></div>') ;

            let formEl = document.forms.search_user;

            let formData = new FormData(formEl);

            let first_name = formData.get('first_name');
            let last_name = formData.get('last_name');
            let email = formData.get('email');
            let phone = formData.get('phone');
            let email_verified_at = formData.get('email_verified_at');
            let pageCount= formData.get('pageCount');;

            const res = await axios.post('{{route('user.search')}}'+"/"+pageCount , {
                first_name: first_name,
                last_name: last_name,
                email: email,
                phone: phone,
                email_verified_at: email_verified_at,
                page:page ,
            })
            .then(function (response) {

                return response;
            })
            .catch(function (error) {
                alert('this request failed! plz try again.') ;
                return error;
            });


           search_user_set_user_info(res.data) ;
            $(tag).find('div.spinner-border').remove() ;

        }


        function search_user_set_user_info( info ){
            let tag = $('#member') ;
            let paginate = $('div.mb-10 > nav >ul.pagination') ;

            tag.find('>div').remove();
            paginate.find('>li').remove();

            let links  = info.links ;
            let user_info  = info.data ;
            let current_page  = info.current_page ;

            if( user_info.length != 0) {
                //ADD USERS
                $.each(user_info, function (index, value) {

                    tag.append(
                        "<div class='row  border-bottom border-gray-300 border-bottom-dashed bg-hover-secondary rounded p-1'><div class='col-3 d-flex align-items-center'><div class='d-none d-md-block symbol symbol-35px symbol-circle'><img alt='Pic' src=''></div><div class='ms-5'><a href='#' class='fs-8 fw-bold text-gray-900 text-hover-primary mb-2 '>" + value['first_name'] + "</a><div class='fs-7 fw-bold text-muted'>" + value['last_name'] + "</div></div></div><div class='col-3  '><input class='form-control  form-control-sm' name='email' type='email' value='" + value['email'] + "'></div><div class='col-3 '> <input class='form-control  form-control-sm' name='email' type='email' value='" + value['phone'] + "'></div> <div class='col-1  '><select name='email_verified_at' class='form-select form-select-solid form-select-sm ' ><option class='bg-success pb-2' value='verified' >Verified</option><option class='bg-danger' value='verify' >verify</option></select> </div><div class='col-2  '><div class='d-flex justify-content-end flex-shrink-0'><a href='#' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1'><span class='svg-icon svg-icon-3'><svg xmlns='http://www.w3.org/2000/svg'width='24' height='24'viewBox='0 0 24 24'fill='black'></path><path opacity='0.3'd='M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z'fill='black'></path></svg> </span> </a> <a href='http://localhost/admin/edit/"+value['id']+"' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1'> <span class='svg-icon svg-icon-3'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'viewBox='0 0 24 24' fill='none'><path opacity='0.3'd='M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z'fill='black'></path><path d='M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z' fill='black'></path></svg> </span>  </a>  <a  href='http://localhost/admin/delete/"+value['id']+"' class='btn btn-icon btn-bg-light btn-active-color-primary btn-sm'>  <span class='svg-icon svg-icon-3'>  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'> <path  d='M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z' fill='black'></path>  <path opacity='0.5' d='M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z'   fill='black'></path>  <path opacity='0.5'  d='M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z' fill='black'></path>  </svg> </span>  </a>  </div>  </div>  </div>");

                });

                //ADD PAGINATE

                $.each(links, function (index, value) {


                    let active = ''
                    if(current_page == index )active = 'active' ;


                    if ( index==0)
                        paginate.append("<li class='age-item position-relative'><a class='page-link' onclick='search_submit(  "+(current_page - 1)+" , this )' rel='prev' aria-label='« Previous'>‹</a></li>");

                    else if ( (index+1) == links.length )
                        paginate.append("<li class='page-item position-relative'><a class='page-link' onclick=' search_submit( "+(current_page + 1)+" , this ) ' rel='next' aria-label='Next »'>›</a></li>");

                    else
                        paginate.append("<li class='page-item position-relative "+active+"'><a class='page-link' onclick= 'search_submit("+( index )+" , this) '>"+(index)+"</a></li>");




                });
            }

        }



        //create new user
        async  function create_user( tag ){

            //spiner
            $(tag).append('<div class="spinner-border position-sm-absolute" style="top: 6% ; right: 41%;"></div>') ;

            let formEl = document.forms.search_user;

            let formData = new FormData(formEl);

            let first_name = formData.get('first_name');
            let last_name = formData.get('last_name');
            let email = formData.get('email');
            let phone = formData.get('phone');
            let email_verified_at = formData.get('email_verified_at');
            let password = formData.get('password');

            const res = await axios.post('{{route('admin.create.user')}}', {
                first_name: first_name,
                last_name: last_name,
                email: email,
                phone: phone,
                email_verified_at: email_verified_at,
                password:password ,
            })
            .then(function (response) {
                console.log(response) ;
               // document.getElementById("errorMsg").innerHTML = response.data;
                if(response.status== 200 && response.statusText == "OK")
                {
                    Swal.fire('create user success') ;
                    return response ;
                }
                else
                {
                    Swal.fire('create user has error') ;
                }
                $(tag).find('.spinner-border').remove() ;
                return response ;
            })
            .catch(function (error) {

                let div1 = document.createElement('div')
                $.each(  error.response.data.errors , function (index , value) {
                    let div = document.createElement('div')
                    let textnode = document.createTextNode(value);
                    div.appendChild(textnode) ;
                    div1.append(div) ;
                });

                Swal.fire({
                    html:div1 ,
                    title: "errors!",
                    icon: 'error'
                }) ;
                $(tag).find('.spinner-border').remove() ;

            });
console.log(res.data)
            search_user_set_user_info(res.data) ;
            $(tag).find('div.spinner-border').remove() ;


        }




    </script>

@endsection
