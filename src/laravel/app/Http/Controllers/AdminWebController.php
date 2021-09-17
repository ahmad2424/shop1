<?php

namespace App\Http\Controllers;

use App\Actions\Auth\Admin\AdminStoreErrorLog;
use App\Actions\Auth\User\Logs\StoreErrorLog;
use App\Http\Controllers\Web\Admin\AdminAuthController;
use App\Models\Admin;
use App\Models\User;
use App\Object\ErrorObject;
use App\Object\ObjectInterface;
use App\Object\SuccessObject;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Lorisleiva\Actions\Action;
use phpDocumentor\Reflection\Types\Array_;

class AdminWebController extends Controller
{


    public function __construct()
    {
        //EXCEPT METHOD
        $this->middleware('auth:admin'  ) -> except( ['login' , 'login_verify'] );
    }

    protected function handle(callable $func ): ObjectInterface|array|Response|RedirectResponse|string|Action|Application|Redirector|Authenticatable|Admin|View|\ArrayAccess|User
    {
        try {

            DB::beginTransaction();
            $response = $func() ?? [];


            if( $response instanceof \ArrayAccess ) {
                DB::commit();
                return  $response  ;

            }elseif( is_array( $response ) ){
                DB::commit();
                return  $response  ;

            }elseif( is_string( $response ) ){
                DB::commit();
                return  $response  ;

            }elseif(  $response instanceof RedirectResponse ) {
                DB::commit();
                return $response;

            }elseif($response instanceof ErrorObject) {
                    // Error Object
                DB::rollBack();
                return back()->withErrors( $response->message ) -> withInput() ;
            }elseif ($response instanceof SuccessObject) {
                // Success Object
                DB::commit();
                return $this->$response;

            }elseif ($response instanceof Response) {
                // Success Object
                DB::commit();
                return $this->$response;

            }elseif ($response instanceof User) {
                // Success Object
                DB::commit();
                return $this->$response;

            }elseif (is_null($response)) {
                // Success Object
                DB::commit();
                return $this->$response;

            }else{
                throw new \Exception("We haven't this request in routes") ;
            }


        } catch (\Exception $exception) {

            DB::rollBack();
            AdminStoreErrorLog::run( $exception  , 'login user response' ) ;
            return back()->withErrors( [ 'catch' => $exception->getMessage() ] )->withInput() ;
        }
    }

}
