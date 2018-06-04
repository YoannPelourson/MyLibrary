<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function showPage(Request $request)
    {
        if($request->path() !== "/"){

            /*if(view()->exists($request->path())){
                return view($request->path());
            }else{
                dd('BOOOM BITCH!!!!!');
            }*/

            try {
                return view($request->path());
            } catch (\Exception $e){
                return abort ('404', 'OOOOOOOPPPS');
            }
                
        }else{
            return view('welcome');   
        }
    }

    public function testPage()
    {
            return view('test');
     }

    public function trucPage()
    {
            return view('truc');
    }
}