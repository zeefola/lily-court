<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class calvaryController extends Controller
{
    //
    // step 1
    public function users_register(){
        
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: *');
        header('Access-Control-Allow-Headers: *');
        
        return response()->json(request()->params['surname']);
        
        
    }
}