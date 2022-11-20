<?php

namespace App\Http\Controllers;


class FirstController extends Controller
{
//    public function __construct()
//    {
//        $this ->middleware('auth');
//    }




    public function bashar(){

        return 'bashar first controller';

    }

    public function getindex(){
//        $data = [];
//        $data['id']=5;
//        $data['name']='bahar alkhalil';
//
//        $obj = new \stdClass();
//
//        $obj -> name = 'bashar';
//        $obj -> id = '44';
//        $obj -> gender = 'femal';

        $data = ['bashra',  'mohammed',  'mohammed','bashra','bashra','ahmad','bashra', 'mohammed'];

        return view('welcome',compact('data')) ;
    }


}
