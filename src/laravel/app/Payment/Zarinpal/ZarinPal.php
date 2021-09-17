<?php


namespace App\Payment\Zarinpal;


use App\Models\Order;
use App\Payment\PaymentInterface;

class ZarinPal implements PaymentInterface
{

    public $zarin  ;


    public function getProvider(): string
    {
        return 'Zarinpal' ;
    }



    public function redirect( Order $order ):array|string
    {
        try {
            $this->zarin = new zarinpal2() ;

            $MerchantID 	= "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx";
            $Amount 		= 100;
            $ZarinGate 		= false;
            $SandBox 		= false;

            $result = $this->zarin->verify($MerchantID, $Amount, $SandBox, $ZarinGate);

            if (isset($result["Status"]) && $result["Status"] == 100)
            {
                // Success
                $response =  [
                    'state' => true ,
                    'message' => "تراکنش با موفقیت انجام شد" ,
                    'price' => $result["Amount"] ,
                    'code' => $result["RefID"] ,
                    'Authority' => $result["Authority"] ,
                ] ;
            } else {
                $response = [
                    'state' => false ,
                    'message' => "پرداخت ناموفق" ,
                    'code_error' => $result["Status"] ,
                    'reason' => $result["Message"] ,
                ]  ;
            }
            return $response ;


        }catch (\Exception $exception){
            return $exception->getMessage() ;
        }



    }






    public function callback( array $data ):array
    {
        $MerchantID 	= "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx";
        $Amount 		= 100;
        $ZarinGate 		= false;
        $SandBox 		= false;

        $this->zarin = new zarinpal2() ;
        $result =  $this->zarin->verify($MerchantID, $Amount, $SandBox, $ZarinGate);

        if (isset($result["Status"]) && $result["Status"] == 100)
        {
            // Success
            $response = [
                'state' => true ,
                'message'=> "تراکنش با موفقیت انجام شد",
                'price'    => $result["Amount"],
                'code'     => $result["RefID"],
                'authority'=> $result["Authority"]
            ] ;

        } else {
            //state true =>success and false=>failed
            // error
            $response = [
                'state' => false ,
                'message'      =>"پرداخت ناموفق",
                'code_error'   => $result["Status"],
                'reason'=> $result["Message"],
            ];

        }


        return $response ;
    }




}
