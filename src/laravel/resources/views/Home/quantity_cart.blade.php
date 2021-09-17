@extends('layout.auth.user.app')


@section('content')


    @foreach($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach
    <div class="container">
        <div class="row">
            @foreach(\App\helper\Cart::all() as $item  )
            <div class="col mt-3">


                <form action="{{route('cart.all')}}" method="post">
                    @csrf
                    @method('PATCH')
                    <input id="cart" class="form-control" type="hidden" name="cart" required value="{{ 'cart1' }}">

                    <input id="id" class="form-control" type="hidden" name="id" required value="">


                    <div class="form-group">
                        <label for="quantity" > quantity </label>
                        <input id="quantity" class="form-control" type="quantity" name="quantity" required value="">
                    </div>

                    <input class="form-control" type="submit" value="change quantity">

                </form>

                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="form-control" type="submit" value="Delete">

                </form>



            </div>
            @endforeach
        </div>
    </div>

@endsection
