@extends('mLayout.app')

@section('content')
    <div class="container-fluid my-5">
        <div class="container">



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
                <div class="card card-custom gutter-b">
                    <h3 class="card-header mt-3">{{$title}}</h3>
                    <div class="m-3 p-2">
                        <table class="table table-responsive table-hover">
                            <thead>
                            <tr>
                                {{--payment--}}
                                <td> Action</td>
                                <td> Provider</td>
                                <td> Payment state</td>
                                <td> Reason </td>
                                <td> Message</td>
                                <td> Error code</td>
                                <td> Action date payment </td>

                                {{--order--}}
                                <td> Delivery_state</td>
                                <td> Order id</td>
                                <td> Order state</td>
                                <td> expire Date order </td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $order )
                                @php
                                  if($loop->last) $con = 0 ; else  $con = 1 ;
                                @endphp

                                <tr
                                    @if( $order->order_id == $orders[($loop->index + $con)]->order_id ) {{ $order -> order_id != $orders[($loop->index + $con)]->order_id}}   class="bg-light" @endif>
                                    <td>

                                        @if(   $orders->pluck('state')->contains('payed' ) ||  $orders->pluck('state')->contains('pending')    )
                                            <span class="bg-success p-2 m-0" >Payed</span>
                                        @else


                                            @if( now()->lessThan( $order->order->expire_at) )

                                            <form
                                                action="{{route('payment.verify' , [ 'order'=>$order['order']->id , 'provider'=>$order['provider'] ])}}"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="provider" value="{{$order['provider']}}">
                                                <button class="btn btn-sm btn-secondary "> pay </button>
                                            </form>

                                            @else

                                            <span class="bg-danger" >Expired</span>

                                            @endif
                                        @endif

                                    </td>
                                    {{--payment --}}

                                    <td>  {{$order['provider']}} </td>
                                    <td> {{ $order->state }} </td>
                                    <td> {{ $order->transaction_payload[ 'reason' ] }} </td>
                                    <td> {{ $order->transaction_payload[ 'message' ] }} </td>
                                    <td> {{ $order->transaction_payload[ 'code_error' ] }} </td>
                                    <td> {{ $order->updated_at->toDateTimeString() }} </td>

                                   {{--order--}}
                                    <td>{{$order->order->delivery_state}} </td>
                                    <td>{{$order->order->id}} </td>
                                    <td>{{$order->order->payment_state}} </td>
                                    <td>{{$order->order->expire_at}} </td>
                                </tr>


                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
