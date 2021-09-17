<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\AdminWebController;
use App\Models\User;

class DashboardController extends AdminWebController
{

    public function dashboard()
    {
        return $this->handle(function (){

            $users = User::query() ;

            return view ( 'dashboard.admin.dashboard' , [
                'users' => $users->paginate(2)  ,
                'title' => 'Dashboard'
            ]) ;
        }) ;

    }

}
