@component('mail::message')

@component('mail::button' , [ 'url'=> route('verify.email' , ['user'=>$user_id , 'token'=>$token]) ])
    <h6>please click to verified your email</h6>
@endcomponent


@component('mail::panel')
ahmad panel
@endcomponent
@component('mail::footer')
<h6>{{config('name')}}</h6>
@endcomponent
@endcomponent
