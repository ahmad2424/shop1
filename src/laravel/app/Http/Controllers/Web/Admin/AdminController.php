<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Requests\Admin\CreateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminWebController ;
use phpDocumentor\Reflection\Utils;

class AdminController extends AdminWebController
{

    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => 'admins.search']);
    }

    public function admins_view(Request $request , int $countPage=2)
    {

        return $this->handle( function () use($request , $countPage) {

                return view( 'dashboard.admin.create.new-admin' , [

                    'admins'=> Admin::query()->paginate(  $countPage ) ,

                    'title' => 'Add New Admin' ,

                    'memeber_admin' => Admin::count() ,


                ]) ;

        }) ;

    }

    public function search_ajax(Request $request , int $countPage = 2)
    {
        $admins = Admin::query() ;
        $counter = 0 ;

        if( $request -> name ){
            $admins->where( 'name' , 'LIKE' , "%{$request->name}%") ;
            $counter++ ;
        }

        if($request -> email ){
            $admins->where( 'email' , 'LIKE' , "%{$request->email}%") ;
            $counter++ ;

        }

        if($request -> id ){
            $admins->where( 'id' , '=' , "$request->id") ;
            $counter++ ;
        }


        if( $admins ->count()  ){
            return json_encode( ['admins'=> Admin::query()->paginate(  $countPage )]  ) ;
        }
        else
            return null ;

    }

    //DELETE_ADMIN
    public function delete_admin(Admin $admin)
    {

        return $this->handle(function () use($admin){

        });
    }

    //EDIT_ADMIN
    public function edit_admin(Admin $admin)
    {
        return $this->handle(function () use($admin){

        });
    }

    //CREATE_ADMIN
    public function create_admin(CreateAdminRequest $request)
    {
        return $this->handle(function () use($request){

            $request->validated() ;
        });
    }
}
