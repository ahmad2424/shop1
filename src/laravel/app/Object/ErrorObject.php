<?php


namespace App\Object;


class ErrorObject implements ObjectInterface
{

    public function __construct( public string $message = "" , public array $payload = [] )
    {

    }
}
