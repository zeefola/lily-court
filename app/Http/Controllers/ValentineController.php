<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valentine;
use Mail;

class ValentineController extends Controller
{
    public function contact(){
        return view('valentine_promo');
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
        $valentine = new Valentine();
        $valentine->name = request()->name;
        $valentine->email = request()->email;
        $valentine->phone = request()->phone;
        $valentine->apartment_type = request()->apartment_type;

        $valentine->save();


        /** Store data into $data as an array and send mail to info */

        $data = array(
         'name' => request()->name,
         'email' => request()->email,
         'phone' => request()->phone,
         'apartment_type' => request()->apartment_type,
         'admin_mail' => 'info@lilycourt.ng',
         'created_at' => $valentine->created_at
        );

        Mail::send('emails.valentine_promo', $data, function($m) use($data){
            $m->to($data['admin_mail'])->subject('Valentine Promo Contact');
        });

        /**return back */
        session()->flash('success_report', 'Form Submitted Succesfully');
        return $this->contact();

    }
}