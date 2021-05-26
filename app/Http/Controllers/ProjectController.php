<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Project;

class ProjectController extends Controller
{
    //
    public function project_130(){
        return view('project_130');
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
        $Project = new Project();
        $Project->name = request()->name;
        $Project->email = request()->email;
        $Project->phone = request()->phone;
        $Project->apartment_type = request()->apartment_type;

        $Project->save();


        /** Store data into $data as an array and send mail to info */

        $data = array(
         'name' => request()->name,
         'email' => request()->email,
         'phone' => request()->phone,
         'apartment_type' => request()->apartment_type,
         'admin_mail' => 'info@lilycourt.ng',
         'created_at' => $Project->created_at
        );

        Mail::send('emails.project_130', $data, function($m) use($data){
            $m->to($data['admin_mail'])->subject('Project-130 Contact');
        });

        /**return back */
        session()->flash('success_report', 'Form Submitted Succesfully');
        return back();
    }

    public function projectContactConfirm(){
        /** Validate incoming request */
        $this->validate(request(), array(
          'visitor_name' => 'required',
          'visitor_email' => 'required',
          'telephone' => 'required|numeric',
          'visitor_message' => 'required'
        ));

        /** Create an instance of the model and save data */
        $Project = new Project();
        $Project->visitor_name = request()->visitor_name;
        $Project->visitor_email = request()->visitor_email;
        $Project->telephone = request()->telephone;
        $Project->visitor_message = request()->visitor_message;

        $Project->save();


        /** Store data into $data as an array and send mail to info */

        $data = array(
         'visitor_name' => request()->visitor_name,
         'visitor_email' => request()->visitor_email,
         'telephone' => request()->telephone,
         'visitor_message' => request()->visitor_message,
         'admin_mail' => 'info@lilycourt.ng',
         'created_at' => $Project->created_at
        );

        Mail::send('emails.project_130', $data, function($m) use($data){
            $m->to($data['admin_mail'])->subject('Project-130 Contact');
        });

        /**return back */
        session()->flash('success_report', 'Form Submitted Succesfully');
        return back();
    }
}
