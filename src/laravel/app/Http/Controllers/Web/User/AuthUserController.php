<?php


namespace App\Http\Controllers\Web\User;


use App\Actions\Auth\User\ForgetPassword\ForgetPassword;
use App\Actions\Auth\User\Google\FilterOAuthInfo;
use App\Actions\Auth\User\Login\CheckCredentials;
use App\Actions\Auth\User\Logout\Logout;
use App\Actions\Auth\User\Public\GetUserWithKeyAndValue;
use App\Actions\Auth\User\Register\LoginAuth;
use App\Actions\Auth\User\Register\StoreInfoUserRegister;
use App\Actions\Mail\User\UserLogin;
use App\Actions\Public\GetSessionBackPage;
use App\Actions\Public\GetSetTokenUser;
use App\Http\Requests\Auth\User\ForgetPasswordRequest;
use Facades\App\helper\Swal;
use App\Http\Controllers\UserWebController;
use App\Http\Requests\Auth\User\LoginRequest;
use App\Http\Requests\Auth\User\RegisterRequest;
use App\Models\Request;
use App\Models\User;
use App\Notifications\User\Auth\ForgetPasswordNotification;
use App\Object\ErrorObject;
use App\Object\ObjectInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request as Request1;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Requestt;
use Laravel\Socialite\Facades\Socialite;
use Lorisleiva\Actions\Action;
use Symfony\Component\HttpFoundation\RedirectResponse as RedirectResponse1;

class AuthUserController extends UserWebController
{


    //Login
    public function login( LoginRequest $request): ObjectInterface|array|Response|RedirectResponse
    {

        return $this->handle( function() use( $request ) {

            $data = $request->validated() ;

            $obj = CheckCredentials::run( $request->email , $request->password ) ;

            if( $obj instanceof ErrorObject ){
                Swal::error() -> title('User error') -> text( $obj->message ) ->initial() ;
                return back() -> withInput( $data );

            }else{
                auth()->login( $obj->payload['user']);
                UserLogin::run( auth()->user() ) ;

                if( ( $backPage = GetSessionBackPage::run() ) ){
                    return \redirect( $backPage );
                }


                return redirect(route('user.dashboard'));

            }

        } ) ;

    }





    //Register
    public function register( RegisterRequest $request ): ObjectInterface|array|Response|RedirectResponse
    {

        return $this->handle( function () use( $request ) {

            $data = $request->validated() ;

            $user = StoreInfoUserRegister::run( $data ) ;

            return LoginAuth::run( $data, $user  );

        }) ;

    }





    //Verified email
    public function verify_email(  User $user , string $token = "" ): ObjectInterface|Redirector|RedirectResponse
    {

        return $this->handle(function () use( $user , $token ){


            if ($user) {
                $tokenUser = GetSetTokenUser::run($user, GetSetTokenUser::GET_TOKEN_USER, Request::TOKEN_VERIFIED_EMAIL_USER);

                if ($tokenUser instanceof ErrorObject)
                    return redirect(route('login'));

                if ($tokenUser->payload['token'] == $token) {
                    auth()->login($user);


                    if (is_null($user->email_verified_at)) {
                        $user->update(['email_verified_at' => now()]);
                        Swal::text('Your email verified')->success()->title('Verified')->initial();

                    } else
                        Swal::text('Your email has already been verified')->success()->title('Verified')->initial();

                    GetSetTokenUser::run($user, GetSetTokenUser::GET_TOKEN_USER, Request::TOKEN_VERIFIED_EMAIL_USER, true);
                    return redirect(route('user.dashboard'));
                }

            }

            Swal::text('Your token is wrong')->error()->title('Verified')->initial();
            return redirect(route('login'));
        });
    }




    //Google Oauth
    public function Oauth_redirect( string $Oauth = 'google'): RedirectResponse1
    {
        return $this->handle(function () use($Oauth){

           return Socialite::driver($Oauth)->redirect();
        }) ;

    }







    //oauth google
    public function Oauth_callback( ): Action|Model|Response|ObjectInterface|array|Redirector|string|Application|RedirectResponse
    {

        return $this->handle( function ()  {

            $userGoogle =  Socialite::driver('google')->stateless()->user();



            $data = FilterOAuthInfo::run( $userGoogle->user );

            $user = GetUserWithKeyAndValue::run( $data['email'] );

            if(  $user  ){
                auth()->loginUsingId( $user->id ) ;
                return redirect()->route('user.dashboard') ;
            }

            $user = StoreInfoUserRegister::run( $data ) ;

            return LoginAuth::run( $data, $user  , true);
        }) ;

    }





    //forget_password_view
    public function forget_password_view(): Factory|View|Application
    {
        return view('auth.user.forget_password.forget_password') ;
    }

    //forget_password_send_email
    public function forget_password_send(ForgetPasswordRequest $request ): RedirectResponse|ObjectInterface
    {
        return $this->handle(function () use($request){

            $data =  $request->validated() ;

            $user = GetUserWithKeyAndValue::run( $data['email'] );

            $token = GetSetTokenUser::run( $user , GetSetTokenUser::SET_TOKEN_USER , Request::TOKEN_FORGET_PASSWORD_USER  ) ;

            if($token instanceof ErrorObject)
                return back()->withErrors(['message' => $token->message] ) ->with($data);

            $user->notify( new ForgetPasswordNotification(['token' => $token->payload['token' ] , 'user'=>$token->payload['user' ] ] ) );

            Swal::success()->title('Forget password')->text('new line to change your password sent')->initial();
            return redirect()->route('forget_password')->withInput() ;
        }) ;
    }

    //forget_password_check_token
    public function forget_password_check(  User $user , string $token = "" ): ObjectInterface|Redirector|RedirectResponse
    {

        return $this->handle(function () use( $user , $token ){

            return ForgetPassword::run( $user, $token ) ;

        });
    }




    //change password view
    public function change_password_view(): Application|Factory|View
    {
        return \view('auth.user.change_password.change_password') ;

    }

    //change password check
    public function change_password(Request1 $request): RedirectResponse
    {
        return $this->handle(function ()use($request) {
            $data = $request->validate([
                'password'=> 'required|string|min:4' ,
                'password_confirm' => 'required|same:password|min:4'
            ]) ;


            auth()->user()->update(['password' =>Hash::make( $data['password'] ) ]) ;
            Swal::success()->title('Changed Password')->text('Your password has been successfully changed.')->initial() ;
            return redirect()->route('user.change.password' ) ;
        }) ;

    }



















    //Logout
    public function logout()
    {
        return Logout::run() ;
    }




}
