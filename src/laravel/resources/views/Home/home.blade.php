@extends('mLayout.app')

@section('head')
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
@endsection
@section('content')

    @foreach($errors as $error)
        <div class="alert-danger">
        </div>

    @endforeach

    {{--    <div class="container mt-3 bg-light">
            <section class="banner">
                <div class="row wrapper">
                    <div class="col col-lg-6">
                        <img src="{{ asset( $bannerImage )}}" alt="{{ $bannerAlt }}">
                    </div>
                    <div class="col col-lg-6">
                        <p class="fa-paragraph">{{ $bannerText }}</p>
                    </div>
                <            </section>
        </div>
    {{--
        <div class="container mt-3">
            <section class="banner ">

                @foreach( $groupProducts as  $group)

                <div class="row border border-1 shadow border-light mb-3">
                <h3 class="header"> {{ $group->name }}</h3>

                    @foreach( $group->products  as $product )

                        <div class="col-4">
                            <div class=" border border-1 rounded border-info m-2">
                                <img class="" src="" alt="{{ $product->name }}">
                                <p class=""> {{ $product->description }} </p>
                            </div>
                        </div>

                    @endforeach
                </div>
                @endforeach

            </section>
        </div>--}}

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg p-0" >

                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9 p-0">
                    <!--begin::Heading-->
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">
                            Shop
                            <br/>

                            <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">The Best Product has in</span>
							</span></h1>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <a href="{{route('products.view')}}" class="btn btn-primary">Shop</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Heading-->

                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Header Section-->








        <!--begin::How It Works Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2">
            <!--begin::Container-->
            <div class="container">

                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="50">{{$info_my_shop['type']}}</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fs-5 text-muted fw-bold">{{$info_my_shop['description']}}
                    <!--end::Text-->
                </div>
                <!--end::Heading-->


                <!--begin::Row-->
                <div class="row w-100 gy-10 mb-md-20 mt-4">
                    <!--begin::Col-->
                    @foreach($more_sell as $group)
                        @if($loop->index > 2 )
                            @break
                        @endif
                        <div class="col-md-4 px-5">
                            <!--begin::Story-->
                            <div class="text-center mb-10 mb-md-0">
                                <!--begin::Illustration-->
                                <img src="{{asset('resources/ava'.rand(1,3).'.jpg')}}" class="mh-125px mb-9" alt="{{$group['name']}}" />
                                <!--end::Illustration-->
                                <!--begin::Heading-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Badge-->
                                    <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
                                    <!--end::Badge-->
                                    <!--begin::Title-->
                                    <div class="fs-5 fs-lg-3 fw-bolder text-dark">{{$group['name']}}</div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Description-->
                                <div class="fw-bold fs-6 fs-lg-4 text-muted">
                                    {{$group['description']}}
                                <!--end::Description-->
                                </div>
                            </div>
                            <!--end::Story-->
                        </div>
                    @endforeach



                    <!--end::Col-->




                </div>
                <!--end::Row-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::How It Works Section-->












        <!--begin::Projects Section-->
        <div class="mb-lg-n15 position-relative z-index-2">
            <!--begin::Container-->
            <div class="container my-5">
                <!--begin::Card-->
                <div class="card shadow-sm">
                    <!--begin::Card body-->
                    <div class="card-body p-lg-20">
                        <!--begin::Heading-->
                        <div class="text-center mb-5 mb-lg-10">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-dark mb-5" id="portfolio" data-kt-scroll-offset="50">{{$groupProductsInfo['type']}}</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Tabs wrapper-->
                        <div class="d-flex flex-center mb-5 mb-lg-15">
                            <!--begin::Tabs-->
                            <ul class="nav border-transparent flex-center fs-5 fw-bold">
                                @foreach($groupProducts as $group)
                                <li class="nav-item">
                                    <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 @if( $loop->index==0 )active @endif " href="" data-bs-toggle="tab" data-bs-target="#{{$group['name']}}a1">{{$group['name']}}</a>
                                </li>
                                @endforeach
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Tabs wrapper-->
                        <!--begin::Tabs content-->

                        <div class="tab-content">
                            <!--begin::Tab pane-->

                            @foreach($groupProducts as $group)
                            <div class="tab-pane fade @if( $loop->index == 0) show active @endif" id="{{$group['name']}}a1">
                                <!--begin::Row-->

                                <div class="row g-10">

                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="{{asset('resources/demo'.rand(1,4).'.png')}}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('{{asset('resources/demo1.png')}}')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6">
                                        <!--begin::Row-->
                                        <div class="row g-10 mb-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="#">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{asset('resources/demo'.rand(1,4).'.png')}}')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Item-->
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="#">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{asset('resources/demo'.rand(1,4).'.png')}}')"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="bi bi-eye-fill fs-3x text-white"></i>
                                                    </div>
                                                    <!--end::Action-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Item-->
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="#">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('{{asset('resources/demo'.rand(1,4).'.png')}}')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-3x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                            </div>
                        @endforeach
                            <!--end::Tab pane-->
                        </div>

                        <!--end::Tabs content-->
                    </div>

                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Projects Section-->














        <!--begin::Pricing Section-->
        <div class="mt-sm-n20">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="py-20 landing-dark-bg">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Plans-->
                    <div class="d-flex flex-column container pt-lg-20">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <h1 class="fs-2hx fw-bolder text-white mb-5" id="pricing" data-kt-scroll-offset="50">{{$wonderFullInfo['type']}}</h1>
                            <div class="text-gray-600 fw-bold fs-5">{{$wonderFullInfo['description']}}</div>
                        </div>

                        <!--end::Heading-->
                        <!--begin::Pricing-->
                        <div class="text-center" id="kt_pricing">
                            <!--begin::Nav group-->
                            <!--end::Nav group-->
                            <!--begin::Row-->
                            <div class="row g-10">

                                @foreach( $wonderFull as $group )
                                    @if($loop->index >2) @break @endif
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-white py-15 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-dark mb-5 fw-boldest">{{$group->name }}</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-bold mb-5">{{$group->description}}</div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>
                                                    <span class="fs-3x fw-bolder text-primary" data-kt-plan-price-month="99" data-kt-plan-price-annual="999">{{$group['products'][rand(0,2)] ['price'] ?? ''}}</span>
                                                    <span class="fs-7 fw-bold opacity-50">/
														<span data-kt-element="period">Mon</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-bold fs-6 text-gray-800 text-start pe-3">{{$group['products'][rand(0,2)] ['name'] ?? ''}}</span>
                                                    <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
															</svg>
														</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-bold fs-6 text-gray-800 text-start pe-3">Up to 30 Project Integrations</span>
                                                    <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
															</svg>
														</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-bold fs-6 text-gray-800">Keen Analytics Platform</span>
                                                    <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                                                    <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
															</svg>
														</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack mb-5">
                                                    <span class="fw-bold fs-6 text-gray-800">Targets Timelines &amp; Files</span>
                                                    <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                                                    <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
															</svg>
														</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <span class="fw-bold fs-6 text-gray-800">Unlimited Projects</span>
                                                    <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                                                    <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
															</svg>
														</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Features-->
                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-sm btn-primary">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->

                                @endforeach


                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Pricing-->
                    </div>
                    <!--end::Plans-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Pricing Section-->






        <!--begin::Testimonials Section-->
        <div class="mt-20 mb-n20 position-relative z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="50">What Our Clients Say</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                        <br />for different amazing and great useful admin</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row g-lg-10 mb-10 mb-lg-20">

                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bolder text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured</div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-bold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="{{asset('resources/demo'.rand(1,4).'.png')}}" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Paul Miles</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Row-->
                <!--begin::Highlight-->
                <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
                    <!--begin::Content-->
                    <div class="my-2 me-5">
                        <!--begin::Title-->
                        <div class="fs-1 fs-lg-2qx fw-bolder text-white mb-2">Start With Metronic Today,
                            <span class="fw-normal">Speed Up Development!</span></div>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-6 fs-lg-5 text-white fw-bold opacity-75">Join over 100,000 Professionals Community to Stay Ahead</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Link-->
                    <a href="https://1.envato.market/EA4JP" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on Themeforest</a>
                    <!--end::Link-->
                </div>
                <!--end::Highlight-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Testimonials Section-->

        <!--begin::Footer Section-->
        <div class="mb-0">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="landing-dark-bg pt-20">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10">
                                <!--begin::Title-->
                                <h2 class="text-white">Would you need a Custom License?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9">
                                <!--begin::Title-->
                                <h2 class="text-white">How About a Custom Project?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
									<a href="pages/profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-bold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bolder text-gray-400 mb-6">More for Metronic</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5">Tutorials</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-bold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="{{--assets/media/svg/brand-logos/facebook-4.svg--}}" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="{{--assets/media/svg/brand-logos/github.svg--}}" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="{{--assets/media/svg/brand-logos/twitter.svg--}}" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="{{--assets/media/svg/brand-logos/dribbble-icon-1.svg--}}" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="{{--assets/media/svg/brand-logos/instagram-2-1.svg--}}" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Logo-->
                        <div class="order-2 order-md-1">
                            <!--begin::Logo image-->
                            <a href="landing.html">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Shopping/Gift.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000"></path>
        <path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span>
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="{{route('home.about')}}" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="{{route('home.contact.us')}}" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('products.view')}}" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
            <span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
							<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
				</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>










{{--section2--}}
  {{--  <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
        </svg>
    </div>--}}
<!--end::Landing hero-->



@endsection

@section('script')

    <script src="{{mix('js/tab1/tab.js')}}"></script>


@endsection


