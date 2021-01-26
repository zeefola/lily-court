<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class formSubmissionController extends Controller
{
    //
    // step 1
    public function applicationForm(){
        
        
        $this->validate(request(), array(
            'title' => 'required',
            'surname' => 'required',
            'otherName' => 'required',
            'residentialAddress' => 'required',
            
        ));
        
       
    	$arr = array(
    		'title' => request()->title, 
    		'surname' => request()->surname, 
    		'otherName' => request()->otherName, 
    		'status' => request()->status, 
    		'sex' => request()->sex, 
    		'nationality' => request()->nationality, 
    		'telephone' => request()->telephone, 
    		'email' => request()->email, 
    		'postalAddress' => request()->postalAddress, 
    		'residentialAddress' => request()->residentialAddress,
    		'occupation' => request()->occupation,
    		'property' => request()->property,
    		'payment' => request()->payment,
    		'nokName' => request()->nokName,
    		'nokAddress' => request()->nokAddress,
    		'nokTelephone' => request()->nokTelephone
    	);
    // 	Sending mails to admin
            Mail::send(
                'emails.applicationForm',
                $arr,
                function($e) use($arr){
                    $e->to('info@lilycourt.ng')->subject('New Client Application Form');
            });
            
            return "Application Successful";

    }
    
    
    public function messageForm(){
        
         $this->validate(request(), array(
            'visitorName' => 'required',
            'visitorEmail' => 'required',
            'visitorTelephone' => 'required',
            'visitorMessage' => 'required',
            
        ));
        
        
    	$arr = array(
    		'visitorName' => request()->visitorName, 
    		'visitorEmail' => request()->visitorEmail, 
    		'visitorTelephone' => request()->visitorTelephone, 
    		'visitorMessage' => request()->visitorMessage
    	);
    // 	Sending mails to admin
            Mail::send(
                'emails.messageForm',
                $arr,
                function($e) use($arr){
                    $e->to('info@lilycourt.ng')->subject('Contact Message Form');
            });
            
            return "Message Sent Successfully";

    }
    
    
    public function appointmentForm(){
        
         $this->validate(request(), array(
            'appName' => 'required',
            'appEmail' => 'required',
            'appTelephone' => 'required',
            'appDate' => 'required',
            
        ));
        
        
      
        
        $arr = array(
            'appName' => request()->appName,
            'appEmail' => request()->appEmail,
            'appTelephone' => request()->appTelephone,
            'appDate' => request()->appDate
    	);
    	
    // 	Sending mails to admin
    
        Mail::send(
            'emails.appointmentForm',
            $arr,
            function($e) use($arr){
                $e->to('info@lilycourt.ng')->subject('Client Appointment Booking');
        });
        
        return "Appointment Booked";
    }

}