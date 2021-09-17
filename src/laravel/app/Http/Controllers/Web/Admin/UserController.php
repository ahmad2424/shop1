<?php

namespace App\Http\Controllers\Web\Admin;

use App\Actions\Auth\Admin\StoreAdminActivity;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\EditAddressUserRequest;
use App\Http\Requests\Admin\EditUserRequest;
use App\Http\Requests\Admin\UserSearchRequest;
use App\Http\Requests\Auth\User\AddressUserRequest;
use App\Http\Requests\Profile\AddressUpdateRequest;
use App\Models\User;
use App\Models\User_Address;
use Facades\App\helper\Swal;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;
use App\Http\Controllers\AdminWebController;

class UserController extends AdminWebController
{


    public function user_search( UserSearchRequest $request , $countPage = 2  )
    {
        return $this->handle( function () use($request , $countPage) {


            $users = User::query() ;
            $counter = 0 ;

            if($request -> first_name ){
                $users->where( 'first_name' , 'LIKE' , "%{$request->first_name}%") ;
                $counter++ ;
            }

            if($request -> last_name ){
                $users->where( 'last_name' , 'LIKE' , "%{$request->last_name}%") ;
                $counter++ ;

            }

            if($request -> email ){
                $users->where( 'email' , 'LIKE' , "%{$request->email}%") ;
                $counter++ ;
            }

            if($request -> phone ){
                $users->where( 'phone' , 'LIKE' , "%{$request->phone}%") ;
                $counter++ ;
            }

            if( ( $email =  $request -> email_verified_at ) ){

                if($email =='verified')
                    $users->whereNotNull( 'email_verified_at'  ) ;
                if($email =='verify')
                    $users->whereNull( 'email_verified_at'  ) ;

                $counter++ ;
            }


            if( $users ->count()  &&  $counter != 0 ){
                return  $users->paginate( $countPage , ['*'] , 'page' ,  $countPage )  ;
            }else
                return  '';

        }) ;



    }


    /*CREATE USER*/
    public function create_user(CreateUserRequest $request )
    {
       $data = $request->validated() ;

       if(isset($data['email_verified_at'])) $data['email_verified_at'] = now()->toDateTimeString() ;
        User::create( $data ) ;
        return User::query() -> latest() -> paginate(2 , ['*'] , 'page' , 1 );
    }


    /*EDIT USER*/
    public function edit_view(User $user)
    {
        return $this->handle(function () use ($user){

            return view( 'Admin.user_control.edit.edit' , [

                'user' => $user ,

                'addresses'=> $user->user_addresses()->get() ,

                'title'=>'Edit User'
            ]) ;
        });

    }
    public function edit( EditUserRequest $request , User  $user)
    {
       return $this->handle(function () use($request , $user){
            $data = $request->validated() ;

            if($data['email_verified_at'] != null)
                $data['email_verified_at'] = now()->toDateTimeString( ) ;


            $user -> update( $data ) ;

            StoreAdminActivity::run(auth()->guard('admin')->user()  , 'password-edit' ,  false , ['edit_user'=>$user->id]) ;
            Swal::success()->title('Changed  information for user')->initial();
            return back() ;
       }) ;

    }

    /*DELETE USER*/
    public function delete(User $user){

        return $this->handle(function () use ($user){

            if($user){
                $user->delete() ;

                Swal::success()->title("User $user->id deleted ")->initial();
            }

            return back();

        }) ;
    }

    public function edit_address(EditAddressUserRequest  $request , User $user , User_Address $user_address){

        return $this->handle(function () use ($request ,$user , $user_address){
            $data = $request->validated() ;

            $tt = $user_address->update($data) ;

            Swal::success()->title('Changed  Address for user')->initial();
            return back();

        }) ;


    }
}
