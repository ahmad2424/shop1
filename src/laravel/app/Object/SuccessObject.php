<?php


namespace App\Object;


class SuccessObject implements ObjectInterface
{
    public function __construct( public string $message = "" , public array $payload = [] )
    {
    }
}
