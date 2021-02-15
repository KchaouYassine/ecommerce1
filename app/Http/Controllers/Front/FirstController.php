<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class FirstController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('showString4');
    }



    public function showString(){
        return 'sencond 1 controller' ;
    }
    public function showString1(){
        return 'sencond 2controller' ;
    }
    public function showString2(){
        return 'sencond 3controller' ;
    }
    public function showStrin3g(){
        return 'sencond 4 controller' ;
    }

    public function showString4(){
        return 'sencond 5 controller' ;
    }
}
