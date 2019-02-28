<?php

namespace App\Http\Controllers\Home;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;

class TestController extends Controller
{
    //
    public function index(){
        echo "这是Home目录下的TestController.php 的 index方法";
        try{
            $a =  $_REQUEST;//echo $a;
            return view('home/test/index',['a' =>$a,'day'=>time(),'date'=>date("Y-m-dH:i:s")]);
        }catch(Exception $e){
            //report($e);
            $a = $e->getMessage();
            echo $a;
        }

        // return view('home/test/index',['day'=>time(),'date'=>date("Y-m-dH:i:s")]);
    }

    public function getUrl(){

        echo Route::currentRouteAction();

        return view('home/test/getUrl');
    }

}
