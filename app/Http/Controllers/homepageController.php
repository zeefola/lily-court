<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class homepageController extends Controller
{
    //

    public function welcome(){

        SEOTools::setTitle('Real Comfort and Elegance');
        SEOTools::setDescription('With 2 and 3 bedroom apartments, Lily Court has a developed safe, health enhancement environment and high-quality housing at an extremely affordable price, strategically located on the Lagos/Abeokuta expressway.');
    	return view('welcome');
    }
    
    public function tour(){

        SEOTools::setTitle('Lilycourt Tour');
        SEOTools::setDescription('With 2 and 3 bedroom apartments, Lily Court has a developed safe, health enhancement environment and high-quality housing at an extremely affordable price, strategically located on the Lagos/Abeokuta expressway.');
    	return view('tour');
    }
}