@component('mail::message')

@component('mail::button' , [ 'url'=> route('user.dashboard') ])
    <h3>Hi</h3><span>{{$user->first_name}}</span>
    <p>You are login this time. This is just notification for your login</p>
    <h6>Go to web site</h6>
@endcomponent


@component('mail::panel')
ahmad panel
@endcomponent
@component('mail::footer')
<h6>{{config('name')}}</h6>
@endcomponent
@endcomponent
