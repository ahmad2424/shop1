<?php


namespace App\helper;


class Swal
{
    public function __construct(
        public string $title = '' ,
        public string $text = '' ,
        public string $success = 'success'
    )
    {}

    public function success() : Swal
    {
        $this->success = 'success' ;
        return $this ;
    }

    public function error() : Swal
    {
        $this->success = "error" ;
        return $this ;
    }

    public function info() : Swal
    {
        $this->success = "info" ;
        return $this ;
    }

    public function warning() : Swal
    {
        $this->success = "warning" ;
        return $this ;
    }

    public function title( string $title ) : Swal
    {
        $this->title = $title ;
        return $this ;
    }

    public function text( string $text ) : Swal
    {
        $this->text = $text ;
        return $this ;
    }

    public function initial() : void
    {
        session()->flash('Swal',[
            'title' => $this->title ,
            'text' => $this->text ,
            'success' => $this->success
        ]);
    }

}
