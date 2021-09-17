<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Document</title>
    @yield('head.blade.php')
</head>
<body>





<div class="row">

        <div class="col col-6">
            <span class="d-flex justify-content-start px-2 py-1 ">
                <a class="btn btn-info ml-2" href="{{route('user.dashboard')}}">
                    <i class="fa fa-user "></i>
                </a>
                <a class="btn btn-info mx-2" href="{{route('view.order')}}">
                    <i class="fa fa-shopping-basket "></i>
                </a>
            </span>

        </div>

        <div class="col col-6 right">

            <span class="d-flex justify-content-end px-2 py-1 ">
                <a class="btn btn-info ml-2" href="{{route('logout')}}">
                    <i class="fa fa-external-link "></i>
                </a>
            </span>

        </div>

</div>




@yield('content')


@yield('script')

<script src="{{mix('js/app.js')}}"></script>
@include('layout.sweetalert.Swal')
</body>
</html>
