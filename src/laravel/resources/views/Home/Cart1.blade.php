@extends('layout.auth.user.app')

@section('content')
    <table class="table-responsive">
        <thead>
        <tr>
            <td> title </td>
            <td> amount</td>
            <td> price </td>
        </tr>
        </thead>
        <tbody>
    @if( $carts = session('cart1') )
        @foreach($carts as $cart) )

            <tr>
                <td></td>
                <td>{{ $id = $carts->keys()[ $loop->index]  }}</td>
                <td>{{$amount = $cart['amount']}}</td>
                <td>
                    <a href="{{route('add.cart' , ['product'=>$id , 'amount'=>$amount+1] )}}">add</a>
                    <a href="{{route('add.cart' , ['product'=>$id , 'amount'=>$amount-1] )}}">remove</a>
                    <a href="{{route('add.cart' , ['product'=>$id , 'amount'=>0] )}}">remove all</a>
                </td>

            </tr>


        @endforeach
    @endif
        </tbody>
        </table>
    cart3
@endsection
