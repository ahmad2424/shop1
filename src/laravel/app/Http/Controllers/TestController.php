<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function request()
    {
        return view('test.alpain.request') ;
    }
    public function request2()
    {
        $score = [
            ['score' => rand(1 , 3) ] ,
            ['score' => rand(1 , 3) ] ,
            ['score' => rand(1 , 3) ] ,
        ] ;
        return view('test.alpain.request2' , ['score'=> $score]) ;
    }

    public function response(Request $request)
    {
        return json_encode( ['color' => $request ->color, 'rank' => $request ->rank] );
    }

    public function response2()
    {
        return json_encode( [
            ['score' => rand(1 , 3) ] ,
            ['score' => rand(1 , 3) ] ,
            ['score' => rand(1 , 3) ] ,
        ] );
    }
}
