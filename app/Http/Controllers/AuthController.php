<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login (Request $request){

        $model = new User();
        
        if($request->session()->has('user_id')){
            $user_data =  $request->session()->get('user_data');
            $ctr = app()->make('App\Http\Controllers\SharetController');
            $ctr->index($request);
        }else{
    
            $judge = $model->authUser($request);

            $user_data =  $request->session()->get('user_data');

            if($judge){
                $ctr = app()->make('App\Http\Controllers\SharetController');
                $ctr->index($request);
            }
            
            return redirect('login');
           
        }

    }
}
