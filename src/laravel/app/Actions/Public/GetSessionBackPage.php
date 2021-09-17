<?php

namespace App\Actions\Public;

use Lorisleiva\Actions\Concerns\AsAction;

class GetSessionBackPage
{
    use AsAction;

    public function handle( string $urlCurrentKey = 'backPage'):string|null
    {
        $urlCurrent  = session()->get( $urlCurrentKey ) ;

        session()->forget( $urlCurrentKey );

        return  $urlCurrent ;
    }
}
