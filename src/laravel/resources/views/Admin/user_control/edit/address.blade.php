<div class="border border-1 border-gray-100 rounded p-5">
    <h3>Addresses</h3>
    @foreach( $addresses as $address )
        <button class="btn btn-sm btn-color-gray-200">
            <div class="badge badge-info badge-circle">{{$loop->index  + 1}}</div>
        </button>

    <form id="address_user" class="mb-6" action="{{route('admin.user.address.edit' , ['user'=>$user , 'user_address'=>$address])}}" method="post">
        @csrf

        <div class="row  border-bottom border-gray-300 border-bottom-dashed bg-hover-secondary rounded p-1 text-center pb-6">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <input class="col-6 form-control @error('city') is-invalid @enderror" type="text" name="city" value="{{$address->city}}" placeholder="City">
                    <span class="invalid-feedback">
                        @error('city')
                            {{$message}}
                        @enderror
                                                </span>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input class="col-6 form-control @error('town') is-invalid @enderror" type="text" name="town" value="{{$address->town}}" placeholder="Town">
                    <span class="invalid-feedback">
                        @error('town')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <textarea class="col-6 form-control @error('address') is-invalid @enderror"  name="address"  placeholder="Address">{{$address->address}}</textarea>
                    <span class="invalid-feedback">
                        @error('address')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input class="col-6 form-control @error('house_number') is-invalid @enderror" type="text" name="house_number" value="{{$address->house_number}}" placeholder="House number">
                    <span class="invalid-feedback">
                        @error('house_number')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input class="col-6 form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{$address->phone}}" placeholder="Phone number">
                    <span class="invalid-feedback">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <!--end::Details-->


            <div class="d-flex justify-content-start">
                <input type="submit" class="btn btn-sm btn-info" value="Edit User Address ">
            </div>

        </div>
    </form>
    @endforeach
</div>
