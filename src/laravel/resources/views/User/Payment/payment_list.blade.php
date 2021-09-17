@extends('mLayout.app')

@section('content')

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
{{--
            <div class="row">
                <div class="col-12">
                    <div class="m-3 p-2">
                        <table class="table table-responsive table-hover">
                            <thead>
                            <tr>
                                <td> Provider list </td>
                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>
                                    <form action="{{route('payment.create' , [ 'order'=>$order->id ])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="provider" value="zarinpal">
                                        <button class="btn btn-sm btn-success "> zarinpal </button>
                                    </form>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <form action="{{route('payment.create' , [ 'order'=>$order->id ])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="provider" value="bmi">
                                        <button class="btn btn-sm btn-info "> melli bank </button>
                                    </form>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <form action="{{route('payment.create' , [ 'order'=>$order->id ])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="provider" value="bci">
                                        <button class="btn btn-sm btn-light "> test </button>
                                    </form>
                                </td>

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






                    <!--begin::List Widget 4-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Payment list</span>
                                <span class="text-muted mt-1 fw-bold fs-7">Click to each case that you want to pay it</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">



                            <!--begin::Item-->
                            <div class="d-flex align-items-sm-center mb-7 row">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px col-4">
                                    <span class="symbol-label">
                                        <img
                                            src="/metronic8/demo1/assets/media/svg/brand-logos/plurk.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap col-4">
                                        <span class="text-muted font-monospace fw-bolder my-2">
                                             ${{$order->product()->get()->sum('price')}}
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap col-4">
                                        <span class="text-muted font-monospace fw-bolder my-2">
                                            <form action="{{route('payment.create' , [ 'order'=>$order->id ])}}" method="post">
                                                @csrf
                                                <input type="hidden" name="provider" value="zarinpal">
                                                <button class="btn btn-sm bg-light"> Zarinpal </button>
                                            </form>
                                        </span>
                                    </div>

                                    <!--end::Section-->
                                </div>
                            <div class="d-flex align-items-sm-center mb-7 row">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px  col-4">
                                    <span class="symbol-label">
                                        <img
                                            src="/metronic8/demo1/assets/media/svg/brand-logos/plurk.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->

                                <div class="d-flex align-items-center flex-row-fluid flex-wrap col-4">
                                        <span class="text-muted font-monospace fw-bolder my-2">
                                             ${{$order->product()->get()->sum('price')}}
                                        </span>
                                </div>

                                <div class="d-flex align-items-center flex-row-fluid flex-wrap col-4">
                                        <span class="text-muted font-monospace fw-bolder my-2">
                                            <form action="{{route('payment.create' , [ 'order'=>$order->id ])}}" method="post">
                                                @csrf
                                                <input type="hidden" name="provider" value="bmi">
                                                <button class="btn btn-sm btn-light "> bmi </button>
                                            </form>
                                        </span>
                                </div>

                                <!--end::Section-->
                            </div>
                            <div class="d-flex align-items-sm-center mb-7 row">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px  col-4">
                                    <span class="symbol-label">
                                        <img
                                            src="/metronic8/demo1/assets/media/svg/brand-logos/plurk.svg"
                                            class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end::Symbol-->

                                <div class="d-flex align-items-center flex-row-fluid flex-wrap col-4">
                                        <span class="text-muted font-monospace fw-bolder my-2">
                                             ${{$order->product()->get()->sum('price')}}
                                        </span>
                                </div>

                                <div class="d-flex align-items-center flex-row-fluid flex-wrap col-4">
                                        <span class="text-muted font-monospace fw-bolder my-2">
                                            <form action="{{route('payment.create' , [ 'order'=>$order->id ])}}" method="post">
                                                @csrf
                                                <input type="hidden" name="provider" value="test">
                                                <button class="btn btn-sm btn-light "> test </button>
                                            </form>
                                        </span>
                                </div>

                                <!--end::Section-->
                            </div>
                                <!--end::Item-->


                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 4-->





            </div>
        </div>
    </div>

@endsection


