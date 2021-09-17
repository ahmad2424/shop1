
@extends('mLayout.app')

@section('content')


    <div class="container-fluid my-5">
        <!--begin::Container-->
        <div class="container">
            <h3>{{$title}}</h3>
            <div class="row">
                <div>
                    <col-12>
                        @foreach($errors->all() as $error)
                            <div class="text-muted">
                                {{$error}}
                            </div>
                        @endforeach
                    </col-12>
                </div>
            </div>
        </div>
    </div>




    <div class="post d-flex flex-column-fluid my-5" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="row g-5 g-xl-8">

                <!--begin::List Widget 4-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">Order detail </span>
                            <span class="text-muted mt-1 fw-bold fs-7"></span>
                        </h3>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">


                        <div class="d-flex align-items-sm-center mb-7 row">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px col-2">
                            <span class="symbol-label">

                                <img src="{{--/metronic8/demo1/assets/media/svg/brand-logos/plurk.svg--}}" class="h-50 align-self-center" alt="">
                            </span>
                            </div>
                            <!--end::Symbol-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                amount
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                price
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                total price
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                offer price
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                action
                            </div>

                            <!--end::Section-->
                        </div>

                    @foreach( $products as $product )
                        <!--begin::Item-->

                            <div class="d-flex align-items-sm-center mb-7 row">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px col-2">
                            <span class="symbol-label">
                                <img
                                    src="{{--/metronic8/demo1/assets/media/svg/brand-logos/plurk.svg--}}"
                                    class="h-50 align-self-center" alt="">
                            </span>
                                </div>
                                <!--end::Symbol-->

                                <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                    {{$product['product']->name}}
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                    {{$amount = $product->options['amount'] }}
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                    <span>{{ $price =+ $product['price']}} </span>
                                    <span> $ </span>
                                </div>

                                <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                    {{ $total_price =+ $amount * $product['price'] }}
                                </div>

                                @if( $product->order()->first()->payment_state ==\App\Models\Order::PAYMENT_STATE_PENDING || $product->order()->first()->payment_state ==\App\Models\Order::PAYMENT_STATE_SUCCESS  )
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                      <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    </div>
                                @else
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">
                                        <a href="{{route('delete.order.detail' , [ 'order_product' => $product->id])}}">
                                            <span class="btn btn-sm btn-warning">remove</span>
                                        </a>
                                    </div>
                                @endif


                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                        @endforeach
                        <div class="d-flex align-items-sm-center mb-7 row">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px col-2">

                            </div>
                            <!--end::Symbol-->

                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">

                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">

                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2 text-success fs-3">
                                ${{$total_price}}
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2  text-success fs-3">
                                ${{$total_price}}
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap col-2">

                            </div>

                            <!--end::Section-->
                        </div>


                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->





            </div>
        </div>
    </div>
@endsection
