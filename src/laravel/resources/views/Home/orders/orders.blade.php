@extends('mLayout.app')

@section('content')





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

  {{--  <div class="container-fluid">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="m-3 p-2">
                        <table class="table table-responsive table-hover">
                            <thead>
                            <tr>
                                <td> order_id </td>
                                <td> expire_at</td>
                                <td> delivered  </td>
                                <td> status  </td>
                                <td> action </td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach( $orders as $order )

                            <tr>

                                <td>{{ $order['id']}}</td>
                                <td>{{ $order['expire_at']}}</td>
                                <td>{{ $order['delivery_state']}}</td>
                                <td>

                                    @if(  now()->greaterThan(  $order['expire_at'] )  )
                                        <span class="btn btn-danger btn-sm ">Expired</span>

                                    @else
                                        <span class="btn btn-success btn-sm ">Approve</span>

                                    @endif
                                </td>
                                <td>

                                    <form action="{{route('delete.order' , ['order' => $order] )}}">
                                        <button class="btn btn-sm btn-danger"> delete </button>
                                    </form>

                                    <form action="{{route('view.order.detail' , ['order' => $order] )}}">
                                        <button class="btn btn-sm btn-danger"> detail </button>
                                    </form>

                                </td>


                            </tr>


                            @endforeach

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
                            <!--begin::List Widget 4-->
                            <div class="card card-xl-stretch mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">Orders</span>
                                        <span class="text-muted mt-1 fw-bold fs-7">All cart show</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body ">

                                    <!--begin::Item-->
                                    <div class="mb-7 row">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px col-2 d-flex align-items-center">
                                                 <span class="symbol-label">
                                        <img
                                            src="/metronic8/demo1/assets/media/svg/brand-logos/plurk.svg"
                                            class="h-50 align-self-center" alt="">
                                             </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="col-2 d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                order_id
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                expire_at
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                delivered
                                            </div>
                                        </div>

                                        <div class="col-2 d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                status
                                            </div>
                                        </div>

                                        <div class="col-2 d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                action
                                            </div>
                                        </div>


                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                @foreach($orders as $order)
                                    <!--begin::Item-->

                                        <div class="mb-7 row   @if(  ( $order->payment_state !=\App\Models\Payment::PENDING &&  $order->payment_state !=\App\Models\Payment::PAYED ) && now()->lessThan($order->expire_at)  ) bg-light @endif">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px col-2 d-flex align-items-center">
                                                 <span class="symbol-label">
                                                <img  src="{{asset('resources/demo'.rand(0,4).'.png')}}"  class="h-50 align-self-center" alt="">
                                             </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="col-2 d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    {{$order->id}}
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    @if( $order->payment_state ==\App\Models\Payment::PENDING || $order->payment_state ==\App\Models\Payment::PAYED )
                                                        <a  class="btn  bg-success btn-sm opacity-50 cursor-default" >
                                                            Approve :<b class="font-weight-bold "> Payed</b>  <br/> {{$order->expire_at}}
                                                        </a>
                                                    @else
                                                        @if(  now()->greaterThan(  $order['expire_at'] )  )
                                                            <span class="btn  bg-danger btn-sm opacity-50 cursor-default">Expired : <br/> {{$order->expire_at}}</span>

                                                        @else
                                                            <a  class="btn  bg-secondary btn-sm opacity-75-hover" href="{{route('payment.list' , ['order'=>$order])}}">
                                                                Approve :<b class="font-weight-bold "> Pay </b>  <br/> {{$order->expire_at}}
                                                            </a>


                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    {{$order->delivery_state}}
                                                </div>
                                            </div>

                                            <div class="col-2 d-flex align-items-center">
                                                <div class="flex-grow-1 @if( $order->payment_state ==\App\Models\Payment::PENDING || $order->payment_state ==\App\Models\Payment::PAYED ) text-success @endif">
                                                    {{$order->payment_state}}
                                                </div>
                                            </div>

                                            <div class="col-2 d-flex align-items-center">
                                                <div class="row">
                                                    <div class="col-4">
                                                        @if( $order->payment_state ==\App\Models\Payment::PENDING || $order->payment_state ==\App\Models\Payment::PAYED )
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
    </g>
</svg><!--end::Svg Icon--></span>
                                                        @else
                                                            <a href="{{route('delete.order' , ['order'=>$order->id] )}}" title="Remove all" class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                                                <span class="svg-icon svg-icon-danger svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                                            </a>
                                                        @endif

                                                    </div>
                                                    <div class="col-4">
                                                        <form action="{{ route('view.order.detail' , ['order' => $order] )}}">
                                                            <button class="btn btn-sm text-primary">
                                                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Layout/Layout-left-panel-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
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

@endsection
