<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller

    // tawa béch na3mlou il middelware.wird entscheiden,ob ein nutzer ein zugriff ausführen kann oder nicht
{
    public function showString(){
        return 'sencond controller' ;
    }
    // begin with view
    public function getIndex(){
        $data=[];
        $data['id']=5;
        $data['name']='yassine kchaou';
        /*$obj = new \stdClass();
        $obj->name="ahmed";
        $obj->id="5";
        $obj->gender="male";*/
        return view('welcome',$data);
       // return view('welcome')->with('name','id');
    }
}
