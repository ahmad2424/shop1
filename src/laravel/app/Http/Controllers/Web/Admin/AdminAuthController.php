<?php

namespace App\Http\Controllers\Web\Admin;


use App\Actions\Auth\Admin\AdminCheckCredentials;
use App\Actions\Mail\Admin\AdminLogin;
use App\Actions\Public\GetSessionBackPage;
use App\Http\Controllers\AdminWebController;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Object\ErrorObject;
use Facades\App\helper\Swal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AdminAuthController extends AdminWebController
{

    public function login( ):string|View
    {

        return $this->handle( function () {

                return view('auth.admin.login.login' ) ;

        }) ;
    }


    public function login_verify( LoginRequest $request):string|View|RedirectResponse
    {

        return $this->handle( function () use($request){

            $data = $request->validated() ;

            $obj = AdminCheckCredentials::run( $request->email , $request->password ) ;

            if( $obj instanceof ErrorObject ){
                Swal::error() -> title('User error') -> text( $obj->message ) ->initial() ;
                return back() -> withInput( $data );

            }else{
                $admin = auth()->guard('admin')->login( $obj->payload['admin']);
                AdminLogin::run( auth()->guard('admin')->user() ) ;

                if( ( $backPage = GetSessionBackPage::run() ) ){
                    return \redirect( $backPage );
                }


                return redirect(route('admin.dashboard'));

            }

        } ) ;


    }









    //CHANGE PASSWORD
    public function change_password( Request $request ) :string|RedirectResponse
    {
        $data = $request->validate([
            'password'=> 'required|string|min:4' ,
            'password_confirm' => 'required|same:password|min:4'
        ]) ;

        return $this->handle( function () use ($request , $data) {

                $admin = Admin::findOrFail( auth()->guard('admin')->user()->id  )   ;

                $admin->update( ['password' => Hash::make( $data['password'] ) ]) ;

                Swal::success()->title('Changed Password')->text('Your password has been successfully changed.')->initial() ;
                return redirect()->route('admin.dashboard' )->withInput($data) ;

        }) ;
    }













    //LOGOUT
    public function logout():RedirectResponse
    {
        return $this->handle(function ()  {

            auth()->guard('admin')->logout() ;

            return redirect()->route('admin.login') ;

        }) ;
    }




}
