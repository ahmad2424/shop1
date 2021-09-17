<?php

namespace App\Actions\Public;

use Lorisleiva\Actions\Concerns\AsAction;

class SetSessionBackPage
{
    use AsAction;

    public function handle( string $urlCurrent = null ):void
    {
        if($urlCurrent==null)
            $urlCurrent = url()->previous() ;

        session()->put('backPage', $urlCurrent) ;
    }
}
