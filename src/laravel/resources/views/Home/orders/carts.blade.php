
@extends('mLayout.app')

@section('content')
    {{--<div class="container-fluid">
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

            <div class="row">
                <div class="col-12">
                    <div class="m-3 p-2">
                        <table class="table table-responsive table-hover">
                            <thead>
                            <tr>
                                <td> product_id </td>
                                <td> title</td>
                                <td> amount </td>
                                <td> action </td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach( $carts as $cart )

                                <tr>

                                    <td>{{ $cart['product']->id }}</td>
                                    <td> {{$cart['product']->name}}</td>
                                    <td>{{$amount = $cart['amount']}}</td>
                                    <td>
                                        <a  href="{{route('add.cart' , ['product'=>$cart['product']->id , 'amount'=>$amount+1] )}}"><span class="btn btn-sm btn-success">add</span></a>
                                        <a  href="{{route('add.cart' , ['product'=>$cart['product']->id , 'amount'=>$amount-1] )}}"><span class="btn btn-sm btn-warning">remove</span></a>
                                        <a href="{{route('add.cart' , ['product'=>$cart['product']->id , 'amount'=>0] )}}"><span class="btn btn-sm btn-danger">remove all</span></a>
                                    </td>

                                </tr>


                            @endforeach
                            <tr>
                                <form action="{{route('save.order')}}">
                                    <button class="btn btn-sm btn-success "> Save order </button>
                                </form>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>--}}


    <div class="post d-flex flex-column-fluid my-5" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="row g-5 g-xl-8">



                <div class="col  ">


                    <!--begin::List Widget 4-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Cart</span>
                                <span class="text-muted mt-1 fw-bold fs-7">All cart show</span>
                            </h3>
                            <h3>
                                <form id="add_order" action="{{route('save.order')}}">
                                    <span onclick="add_order.submit()" class="btn btn-light text-success"> Add Order </span>
                                </form>

                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">

                          {{--  <div class="d-flex align-items-sm-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-white">

                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    Description
                                </div>

                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
Each Price
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
Total Price
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    Action
                                </div>

                                <!--end::Section-->
                            </div>--}}

                            @foreach($carts as $cart)
                            <!--begin::Item-->
                            <div class="d-flex align-items-sm-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img
                                            src="/metronic8/demo1/assets/media/svg/brand-logos/plurk.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                            <td>{{$amount = $cart['amount']}}</td>
                                        </a>
                                        <span class="text-muted fw-bold d-block fs-7">{{substr( $cart['product']->description , 0 ,25 )}}</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                    <span class="text-muted font-monospace fw-bolder my-2">+{{$cart['product']->price}}$</span>
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                    <span class="text-muted font-monospace fw-bolder my-2">+{{$amount*$cart['product']->price}}$</span>
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <a  href="{{route('add.cart' , ['product'=>$cart['product']->id , 'amount'=>$amount+1] )}}" class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                        <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    </a>
                                    <a  href="{{route('add.cart' , ['product'=>$cart['product']->id , 'amount'=>$amount-1] )}}" class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                      <span title="Remove one" class="svg-icon svg-icon-warning svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    </a>
                                    <a href="{{route('add.cart' , ['product'=>$cart['product']->id , 'amount'=>0] )}}" title="Remove all" class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                      <span class="svg-icon svg-icon-danger svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                    </a>
                                </div>

                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            @endforeach

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 4-->

                </div>



            </div>
        </div>
    </div>


@endsection
