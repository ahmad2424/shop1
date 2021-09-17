<form id="search_user" class="mb-6" action="{{route('admin.user.edit' , ['user'=>$user])}}" method="post">
    @csrf

    <div class="row  border-bottom border-gray-300 border-bottom-dashed bg-hover-secondary rounded p-1 text-center pb-6">
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <input class="col-6 form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{$user->first_name}}" placeholder="First name">
                <span class="invalid-feedback">
                                                @error('first_name')
                    {{$message}}
                    @enderror
                                            </span>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <input class="col-6 form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{$user->last_name}}" placeholder="Last name">
                <span class="invalid-feedback">
                                                @error('last_name')
                    {{$message}}
                    @enderror
                                            </span>
            </div>
        </div>
        <!--end::Details-->
        <!--begin::Access menu-->
        <div class="row">
            <div class="col-12 col-md-3 mb-3">
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{$user->email}}" placeholder="Email">
                <span class="invalid-feedback">
                                                @error('email')
                    {{$message}}
                    @enderror
                                            </span>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{$user->phone}}" placeholder="Phone">
                <span class="invalid-feedback">
                                                @error('phone')
                    {{$message}}
                    @enderror
                                            </span>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <input class="form-control @error('password') is-invalid @enderror" type="text" name="password" value="" placeholder="password">
                <span class="invalid-feedback">
                                                @error('password')
                    {{$message}}
                    @enderror
                                            </span>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <select id="veirify_email" name="email_verified_at" class="form-select form-select-solid form-select-sm  @if( $user->email_verified_at )  bg-success @else bg-danger @endif ">

                    <option class="bg-success" data-class="bg-success" selected    value="verified">Verified</option>
                    <option class="bg-danger" data-class="bg-danger" @if(! $user->email_verified_at )  selected @endif  value="">verify</option>
                </select>


            </div>


        </div>

        <div class="d-flex justify-content-start">
            <input type="submit" class="btn btn-sm btn-info" value="Edit User ">
        </div>

    </div>
</form>
