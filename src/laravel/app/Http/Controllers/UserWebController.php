<?php

namespace App\Http\Controllers;

use App\Actions\Auth\User\Logs\StoreErrorLog;
use App\Models\User;
use App\Object\ErrorObject;
use App\Object\ObjectInterface;
use App\Object\SuccessObject;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\ActionManager;

class UserWebController extends Controller
{
    protected function handle(callable $func ): ObjectInterface|array|Response|RedirectResponse|string|Model|Action|Application|Redirector|Request|ErrorObject|SuccessObject|View|User
    {

       try {
            DB::beginTransaction();
            $response = $func() ?? [];

            if ($response instanceof ErrorObject) {
                // Error Object
                DB::rollBack();
               // return $this->error( $response ) ;
                return back()->withErrors( $response->message ) -> withInput() ;

            } elseif ($response instanceof SuccessObject) {
                // Success Object
                DB::commit();
                return $this->success($response) ;

            }elseif($response instanceof \ArrayAccess) {
                // Array || string
                DB::commit();
                return $this -> arraySuccess( $response ) ;

            }elseif($response instanceof \Response ){
                //Response
                DB::commit();

                return  $response  ;
            }elseif($response instanceof RedirectResponse ){
                //Redirect

                DB::commit();
                return $response ;
            }elseif($response instanceof User ){

                DB::commit();
                return $response ;
            }elseif($response instanceof Action ){

                DB::commit();
                return $response ;
            }
            elseif($response instanceof User ){

                DB::commit();
                return $response ;
            }else{
                //have not any proportional response
               // DB::rollBack();
                DB::commit();
                //StoreErrorLog::run( $exception ) ;
                //return "have not any proportional response for your request" ;
                return $response ;
            }

        } catch (\Exception $exception) {

            DB::rollBack();
            StoreErrorLog::run( $exception  , 'login user response' ) ;
            return back()->withErrors( [ 'catch' => $exception->getMessage() ] )->withInput() ;
          //  return new ErrorObject( 'catch: '. $exception->getMessage() , ['user' => auth()->user() ? auth()->user()->id : '' ] )   ;
        }
    }

    private function error(ObjectInterface $response): ObjectInterface
    {
        return $response ;
    }

    private function success(ObjectInterface $response): ObjectInterface
    {
        return $response ;
    }

    public function arraySuccess( string|array $response): array|string
    {
        return $response ;
    }

    private function responseSuccess(\Response $response):\Response
    {
        return $response ;
    }
}
