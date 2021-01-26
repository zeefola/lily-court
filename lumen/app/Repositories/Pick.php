<?php

namespace App\Repositories;
use DB;
use App\admin;
use App\User;


class Pick{



	public static function generateInvestmentPlan(){

		$data = array('mortgage','flexible','outright','3 installments','6 installments','12 installments');

		return $data;
    }

    public static function generateEquityTypes(){

        $data = array(10,20,30,40,50,60,70,80,90,100);

		return $data;

    }

    public static function generateRoomTypes(){

        $data = array('2 Bedroom Carcass','3 Bedroom Carcass','2 Bedroom Furnished','3 Bedroom Furnished');
		return $data;

    }

    public static function generateAccountCategory(){

		$data = array('cement','reinforcement','granite','sand','roofing','aluminium windows','plumbing','plumbing labour','electrical','electrical labour','doors','tiles','pop works','scaffold','main contractors','formwork');

		return $data;
    }
    
    


    public static function generateAdminDetailsFromToken($token){
        
        $info  = admin::where('api_token',$token)->first();
        
        if($info){
            $data = array(
                'id' => $info->id,
                'name' => $info->name,
                'email' => $info->email,
                'telephone' => $info->telephone
                
            );
        }else{
             $data = array(
                'id'=> '',
                'name' => '',
                'email' => '',
                'telephone' => ''
                
            );
        }
        

		

		return $data;
	}
	
	
	
    public static function generateUserDetailsFromUserID($user_id){
        
        $info  = User::where('id',$user_id)->first();
        
        if($info){
            $data = array(
                'id' => $info->id,
                'surname' => $info->surname,
                'other_names' => $info->other_names,
                'email' => $info->email,
                'phone_no' => $info->phone_no,
                'fullname' => ucwords($info->surname).' '.ucwords($info->other_names),
                
            );
        }else{
             $data = array(
                'id'=> '',
                'surname' => '',
                'other_names' => '',
                'email' => '',
                'phone_no' => '',
                'fullname' => ''
                
            );
        }
        

		

		return $data;
	}
	
	

	public static function generatePackageDetailsFromPlan($type){

		$data = array(
			'mortgage' => array(
			    'percentage' => "10",
			     'duration' => "3months",
			 ),
			 
			 "flexible" => array(
                    'percentage' => "10",
                    'duration' => "3months",
              ),
              
            "outright" => array( 
                'percentage' => "100",
                'duration' => "2weeks",
            ),
            
            "3 installments" => array(
                'percentage' => "10",
                'duration' => "2weeks",
            ),
            
            
            "6 installments" => array(
                'percentage' => "10",
                'duration' => "2weeks",
            ),
            
             "12 installments" => array(
                'percentage' => "10",
                'duration' => "2weeks",
            ),
           
			 
		);
		
		
		return $data[$type];
		
		
		
		
	}
	
	
	
	public static function calculateEndDate($calculated_start_date,$duration){
		$date =  date('Y-m-d H:i:s', strtotime($calculated_start_date. " + ".$duration));
		
		return $date;
	}


  
    



  
  

}