@extends('mLayout.app')


@section('content')


    @foreach($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach

    <div class="container my-5 bg-white p-4 ">
        <div class="row">
            <div class="col-12">
                <h3 class="text-dark ps-2">Change INfo</h3>
            </div>



            <div class="col-3 ">
                <div class="p-4 mx-2 mt-4 border border-1 border-light rounded">
                    <h3 class="text-muted">{{ $header[0] }}</h3>

                    <form  action="{{ route('profile.change') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="first_name"> First name </label>
                            <input id="first_name" class="form-control" type="text" name="first_name" required value="{{ old('first_name' , auth()->user()->first_name) }}">
                        </div>

                        <div class="form-group">
                            <label for="last_name" >Last name </label>
                            <input id="last_name" class="form-control" type="text" name="last_name" required value="{{ old('last_name' , auth()->user()->last_name) }}">
                        </div>

                        <button class="btn btn-success mt-2">
                            change
                        </button>

                    </form>
                </div>
            </div>
            <div class="col-3">
                <div class="p-4 mx-2 mt-4 border border-1 border-light rounded">
                    <h3 class="text-muted">{{ $header[1] }}</h3>

                    <form  action="{{ route('email.change') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email"> Email</label>
                            <input id="email" class="form-control" type="email" name="email" required value="{{ old('email' , auth()->user()->email) }}">
                        </div>

                        <button class="btn btn-success mt-2">
                            Change
                        </button>

                    </form>

                </div>
             </div>
            <div class="col-3">
                <div class="p-4 mx-2 mt-4 border border-1 border-light rounded">

                    <h3 class="text-muted">{{ $header[2] }}</h3>

                    <form  action="{{ route('phone.change') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="phone"> Phone </label>
                            <input id="phone" class="form-control" type="phone" name="phone" required value="{{ old('phone' , auth()->user()->phone) }}">
                        </div>

                        <button class="btn btn-success mt-2">
                            Change
                        </button>

                    </form>

                </div>
            </div>

        </div>

        <div class="row p-4 mx-2 mt-4 border border-1 border-light rounded">
            <h3 class="text-muted">{{ $header[3] }}</h3>
            @foreach( $addresses as $address)

                <div class="col-3 ">
                    <div class="p-4 mx-2 mt-4 border border-1 border-light rounded">


                        <form  action="{{ route('address.change' , ['id'=> $address->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="phone"> Phone </label>
                                <input id="phone" class="form-control" type="phone" name="phone" required value="{{$address->phone  }}">
                            </div>

                            <div class="form-group">
                                <label for="city"> City </label>
                                <input id="city" class="form-control" type="city" name="city" required value="{{$address->city }}">
                            </div>

                            <div class="form-group">
                                <label for="town"> Town </label>
                                <input id="town" class="form-control" type="town" name="town" required value="{{$address->town }}">
                            </div>

                            <div class="form-group">
                                <label for="house_number"> House number </label>
                                <input id="house_number" class="form-control" type="house_number" name="house_number" required value="{{$address->house_number  }}">
                            </div>

                            <div class="form-group">
                                <label for="address"> Address</label>
                                <input id="address" class="form-control" type="address" name="address" required value="{{ $address->address  }}">
                            </div>

                            <button class="btn btn-success mt-2">
                                Change
                            </button>
                        </form>
                        <form class="d-inline" id="myform" action="{{route('address.delete' , $address->id )}}" method="post">
                            @csrf
                            <button onclick="myform.submit()" class="btn btn-danger mt-2">
                                remove
                            </button>
                        </form>



                    </div>
                </div>
            @endforeach

                <div class="col-3 ">
                    <div class="p-4 mx-2 mt-4 border border-1 border-light rounded bg-light bg-hover-light-dark">


                        <form  action="{{ route('address.change' , ['id'=> 0]) }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="phone"> Phone </label>
                                <input id="phone" class="form-control" type="phone" name="phone" required value="{{ old('phone') }}">
                            </div>

                            <div class="form-group">
                                <label for="city"> City </label>
                                <input id="city" class="form-control" type="city" name="city" required value="{{ old('city' ) }}">
                            </div>

                            <div class="form-group">
                                <label for="town"> Town </label>
                                <input id="town" class="form-control" type="town" name="town" required value="{{ old('town') }}">
                            </div>

                            <div class="form-group">
                                <label for="house_number"> House number </label>
                                <input id="house_number" class="form-control" type="house_number" name="house_number" required value="{{ old('house_number') }}">
                            </div>

                            <div class="form-group">
                                <label for="address"> Address</label>
                                <input id="address" class="form-control" type="address" name="address" required value="{{ old('address') }}">
                            </div>

                            <button class="btn btn-secondary mt-2">
                                Add new address
                            </button>

                        </form>
                    </div>
                </div>


        </div>
    </div>

@endsection
