<?php

namespace App\Http\Controllers\Web\Home;

use App\Actions\Home\home\ListProductOrderByGroup;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Web\User\AuthUserController ;

class HomeController extends AuthUserController
{


    public function home():RedirectResponse |string
    {

        return $this -> handle( function (){

            $groupProducts =  Group::query()->with([ 'products' => function(  $q ){
                 return $q->where( 'stock' , '>' ,0 )->limit(50);
            }  ]) ->get() ?? [] ;

            $more_sell =  Group::query()->with([
                'products' => fn(  $q ) => $q ->where( 'tags->sold' ,'>' , 0   ) -> limit(50)
            ] ) ->get() ;

            $wonderFull =  Group::query()->with([ 'products' => function(  $q ) {
                 return $q ->where( 'tags->wonderful' ,'>' , 1   ) -> limit(50)  ;
            } ]) ->get() ?? [] ;

            $settingsSite = Setting::all() ;





            return view( 'Home.home' , [

                'bannerImage' => '' ,

                'bannerText' => 'banner text lorem'  ,

                'bannerAlt' => 'banner text' ,

                'groupProductsInfo' =>['type'=>'More view' , 'description' => 'more view product it is' ] ,
                'groupProducts' => $groupProducts ,

                'wonderFullInfo' =>['type'=>'Winder full' , 'description' => 'more view product it is' ] ,
                'wonderFull' => $wonderFull ,

                //Todo define in env
                'info_my_shop' =>['type'=>'More sell' , 'description' => 'we have thousand product for you' ] ,
                'more_sell' => $more_sell  ,

                'setting' => $settingsSite ,


                ] ) ;

        });
    }


    public function about(){

        return 'about' ;
    }

    public function contact(){

        return 'contact' ;
    }


}
