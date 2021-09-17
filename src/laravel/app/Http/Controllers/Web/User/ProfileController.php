<?php

namespace App\Http\Controllers\Web\User;

use App\Actions\Auth\User\Verification\EmailVerification;
use App\Actions\Profile\User\AddressUpdate;
use App\Actions\Profile\User\EmailUpdate;
use App\Actions\Profile\User\LogChangeProfile;
use App\Actions\Profile\User\ProfileUpdate;
use App\Http\Requests\Profile\AddressUpdateRequest;
use App\Http\Requests\Profile\EmailUpdateRequest;
use App\Http\Requests\Profile\PhoneUpdateRequest;
use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Models\Log\User\StoreUserChangeInfo;
use App\Models\User;
use App\Models\User_Address;
use App\Object\ObjectInterface;
use Facades\App\helper\Swal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Integer;


class ProfileController extends AuthUserController
{

    //profile view
    public function profile_view():Redirect|\Response|Application|RedirectResponse|Redirector|View|string
    {
        return $this->handle(function (){

            $addresses = auth()->user()->user_addresses()->get() ;

            return view( 'User.Profile.profile_change' )->withHeader(['Change profile' , 'Change email','Change phone' , 'Change Address'  ])->withAddresses($addresses ) ;
        }) ;
    }

    //change profile. formal information
    public function change_profile(ProfileUpdateRequest $request) :  ObjectInterface|array|Response|RedirectResponse|User
    {
        return $this->handle(function () use( $request ){
            $data = $request->validated() ;

            $updated = ProfileUpdate::run($data) ;

            LogChangeProfile::run( LogChangeProfile::PROFILE, true , ['user_id' =>auth()->user() -> id  ]) ;

            if($updated)
                Swal::success()->title('Changed') ->initial();
            else
                Swal::error()->title('Not changed') ->initial();

            return back()->withInput() ;

        });
    }

    //change email
    public function change_email( EmailUpdateRequest $request) :  ObjectInterface|array|Response|RedirectResponse|User
    {
        return $this->handle(function () use( $request ){

            $data = $request->validated() ;

            if(! auth()->user()->email_verified_at ){

                LogChangeProfile::run( LogChangeProfile::EMAIL, false , ['user_id' =>auth()->user() -> id  ]) ;
                EmailVerification::run( auth()->user() ) ;

                Swal::error()->title('Not changed.')->text("Your email not verified. Email verification sent for you.") ->initial();
                return back()->withErrors(['email_verified'=> "Your email doesn't verified"] )->withInput() ;
            }



            $updated = EmailUpdate::run($data) ;

            if( $updated ){
                EmailVerification::run( auth()->user() ) ;
                Swal::success()->title('Changed. Email verification sent for you.') ->initial();

            } else
                Swal::error()->title('Not changed') ->initial();


            return back()->withInput() ;

        });
    }

    //change phone
    public function change_phone( PhoneUpdateRequest $request) :  ObjectInterface|array|Response|RedirectResponse|User
    {
        return $this->handle(function () use( $request ){
            $phone = $request->validated() ;

            $updated = ProfileUpdate::run($phone) ;

            $updated = LogChangeProfile::run( LogChangeProfile::PHONE, true , ['user_id' =>auth()->user() -> id  ]) ;

            if( $updated )
                Swal::success()->title('Changed') ->initial();
            else
                Swal::error()->title('Not changed') ->initial();

            return back()->withInput() ;

        });
    }

    //change address
    public function change_address( string  $id = null , AddressUpdateRequest $request ) :  ObjectInterface|array|Response|RedirectResponse|User
    {

        return $this->handle(function () use( $request  , $id ){
            $address = $request->validated() ;

            $updated = AddressUpdate::run( $address  , ( (integer)$id )  ) ;

            LogChangeProfile::run( LogChangeProfile::ADDRESS, true , ['user_id' =>auth()->user() -> id  ]) ;

            if( $updated )
                Swal::success()->title('Changed') ->initial();
            else
                Swal::error()->title('Not changed') ->initial();

            return back()->withInput() ;

        });
    }


    public function delete_address(User_Address $user_Address):RedirectResponse|null
    {

        return $this->handle(function () use($user_Address){


            if( $user_Address->user()->first()->id == auth()->user()->id )
                $user_Address->delete() ;

            return back() ;

        }) ;
    }


}
