<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
use Mail;

class PromoController extends Controller
{
    public function promo(){
        return view('easter_promo');
    }

    public function contactConfirm(){
        /** Validate incoming request */
        $this->validate(request(), array(
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'apartment_type' => 'required'
        ));

        /** Create an instance of the model and save data */
        $Promo = new Promo();
        $Promo->name = request()->name;
        $Promo->email = request()->email;
        $Promo->phone = request()->phone;
        $Promo->apartment_type = request()->apartment_type;

        $Promo->save();


        /** Store data into $data as an array and send mail to info */

        $data = array(
         'name' => request()->name,
         'email' => request()->email,
         'phone' => request()->phone,
         'apartment_type' => request()->apartment_type,
         'admin_mail' => 'info@lilycourt.ng',
         'created_at' => $Promo->created_at
        );

        Mail::send('emails.easter_promo', $data, function($m) use($data){
            $m->to($data['admin_mail'])->subject('Easter Promo Contact');
        });

        /**return back */
        session()->flash('success_report', 'Form Submitted Succesfully');
        return back();

    }
}
