<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard(): View|Factory|UserResource|Application
    {
        $user = new UserResource( User::findOrFail(1) );

        $orders = auth()->user()->orders()->get() ;

        return view('dashboard.user.dashboard' , [ 'user'=>$user , 'orders' => $orders] ) ;
    }
}
