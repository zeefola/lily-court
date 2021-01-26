<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\admin;
use App\users_portfolio;
use App\transaction_history;
use App\project_account;
use \Illuminate\Http\Response;




use DB;


class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['users_login']]);
        // $this->middleware('cors:api');
        $this->middleware('Cors');
    }


    public function portfolio_transaction_history_add(){

         
        //@@@Step 1: validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }
        
        $tola = new transaction_history();
        $tola->transaction_id = str_random(10);
        $tola->user_id = request()->user_id;
        $tola->user_portfolio_id = request()->user_portfolio_id;
        $tola->amount = request()->amount;
        $tola->payment_date = request()->payment_date;
        $tola->payment_medium = request()->payment_medium;
        $tola->comments = request()->comments;
        $tola->admin_id = $admin_details['id'];
        $tola->save();
        
        return response()->json(['message'=> 'Payment Added Successfully' ]);
        
    }

    public function portfolio_transaction_history(){

        //@@@Step 1: validating the token
        $token = request()->token;
        $id = request()->portfolio_id;
        $user_id = request()->user_id;

        $admin_details =  $this->generateAdminDetailsFromToken($token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }

         // validating user_id
         $user_details = \App\Repositories\Pick::generateUserDetailsFromUserID($user_id);
         if(!$user_details['id']){
             return response()->json(['message' => 'Invalid User ID !'], 404);
         }


        $history = transaction_history::where('user_portfolio_id',$id)->get();
        $expected_payment  =  users_portfolio::where('id',$id)->value('amount');
        $total_amount_paid = transaction_history::where('user_portfolio_id',$id)->sum('amount');
        $data =  array(
            'expected_payment' => number_format(intval($expected_payment)),
            'total_amount_paid' => number_format(intval($total_amount_paid)),
            'outstanding' => intval($expected_payment) - intval($total_amount_paid),
            'history' => $history,
            'fullname' => $user_details['surname'].' '.$user_details['other_names']
        );
        return response()->json(['message' => $data]);
    }

    public function project_account_category(){

        //@@@Step 1: validating the token
        $token = request()->token;
        $admin_details =  $this->generateAdminDetailsFromToken($token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }


        $data = \App\Repositories\Pick::generateAccountCategory();
        return response()->json(['message'=> $data]);


        
    }

    public function project_account_summary(){

        //@@@Step 1: validating the token
        $token = request()->token;
        $admin_details =  $this->generateAdminDetailsFromToken($token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }


        $datas = \App\Repositories\Pick::generateAccountCategory();

        $result = array();
        $total = 0;
        foreach($datas as $data){
            $result[$data] = project_account::where('category',$data)->sum('amount');
            $total +=$result[$data];
        }
        $result['total'] = $total;
        
        return response()->json(['message'=> $result]);


        
    }



    public function project_account_search(){

        //@@@Step 1: validating the token
        $token = request()->token;
        $admin_details =  $this->generateAdminDetailsFromToken($token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }

        if(request()->search == 'all'){
            $data = project_account::latest()->get();
        }else{
            $query = "%".request()->search."%";
            $data = project_account::where('category','like',$query)->latest()->get();
        }

    
        return response()->json(['message'=> $data]);


        
    }

    public function project_account_form(){

        $token = request()->token;
        $admin_details =  $this->generateAdminDetailsFromToken($token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }



        $tola = new project_account();
        $tola->category = request()->category;
        $tola->item_type = request()->item_type;
        $tola->quantity = request()->quantity;
        $tola->rate = request()->rate;
        $tola->amount = request()->amount;
        $tola->date = request()->date;
        $tola->comments = request()->comments;
        $tola->admin_id = $admin_details['id'];
        $tola->save();

        return response()->json(['message'=> 'Item Added Successfully']);


    }
    
    
    // public function transaction_history_portfolio_add($token,$user_id,$user_portfolio_id,$amount,$payment_medium,$payment_date,$other_information){
        
       
    // }
    
    
    public function transaction_history_portfolio($user_portfolio_id,$token){
        
         //@@@Step 1: validating the token
        $admin_details =  $this->generateAdminDetailsFromToken($token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }
        
        
        
        //@@@Step 2: getting the transaction details using portfolio_id as parameter
        $data = transaction_history::where('user_portfolio_id',$user_portfolio_id)->get();
        
        
        if(count($data) < 1){
            return response()->json(['message'=>$data],404);
        }else{
              return response()->json(['message'=>$data]);
            
        }
        
        
      
        
        
    }
    
    public function counters(){ 
        $data = array(
            'users' => User::all()->count(),
            'admin' => admin::all()->count(),
            'users_portfolio' => users_portfolio::all()->count(),
            'revenue' => number_format(transaction_history::all()->sum('amount')),
        );
        
        return response()->json(['message'=>$data]);
    }
    
    public function admin_lists(){ 
       
        
        $data = admin::latest()->get(['name','email','telephone','role']);
        
        return response()->json(['message'=>$data]);
    }
    
    
     public function portfolio_lists(){
         
        $search = request()->search;
        
        // //validating the token
        $admin_details = $this->generateAdminDetailsFromToken(request()->token);
        
         // validation
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }


        $result = array();

        
        $datas = users_portfolio::latest()->get();

        foreach($datas as $data){
            $result[] = array(
                 'id' => $data->id,
                 'user_id' => \App\Repositories\Pick::generateUserDetailsFromUserID($data->user_id)['fullname'],
                 
                 'room_type' => ucwords($data->room_type),
                 'amount' => number_format(intval($data->amount)),
                 'payment_plan' => ucwords($data->payment_plan),
                 'start_date' => $data->start_date,
            );
         }
        
        
        return response()->json(['message'=>$result]);
    }
    

    public function portfolio_lists_search(){
         
        
        
        //validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        
         /// validation
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }

        $result = array();
        $search = request()->search;

       
        $resource = (new users_portfolio)->newQuery();
        $resource->orWhere('room_type','like',"%$search%");
        $resource->orWhere('payment_plan','like',"%$search%");
        $resource->orWhere('payment_plan','like',"%$search%");
        $datas = $resource->latest()->get();


        if(count($datas) < 1){

            $users = (new User)->newQuery();
            $users->orWhere('surname','like',"%$search%");
            $users->orWhere('other_names','like',"%$search%");
            $ids = array_unique($users->pluck('id')->toArray());

            foreach($ids as $id){
                $resource = (new users_portfolio)->newQuery();
                $resource->orWhere('user_id','like',"%$id%");
                $datas = $resource->latest()->get();
            }

        }

        

        foreach($datas as $data){
            $result[] = array(
                 'id' => $data->id,
                 'user_id' => \App\Repositories\Pick::generateUserDetailsFromUserID($data->user_id)['fullname'],
                 'room_type' => ucwords($data->room_type),
                 'amount' => number_format(intval($data->amount)),
                 'payment_plan' => ucwords($data->payment_plan),
                 'start_date' => $data->start_date,
            );
         }
        
        
        return response()->json(['message'=>$result]);
    }
    
    
    public function charts(){
        
        $plans = \App\Repositories\Pick::generateInvestmentPlan();
        $users_portfolio = users_portfolio::all();
        $data = array();
        foreach($plans as $plan){
            $data[$plan] = $users_portfolio->where('payment_plan',$plan)->count();
            
        }
        
        return response()->json(['message'=>$data]);


        
       
    } 

    public function users_portfolio_add(){
        

        //return response()->json(['message' => 'hi']);

        $user_id = request()->user_id;
        $room_type = request()->room_type;
        $purchase_price = request()->purchase_price;
        $equity = request()->equity;
        $admt_fee = request()->admt_fee;
        $payment_plan = request()->payment_plan;
        $start_date = request()->date;
        $token = request()->token;
        $amount = request()->balance;
        $package_details = \App\Repositories\Pick::generatePackageDetailsFromPlan($payment_plan);

        //validating the token
        $admin_details =  $this->generateAdminDetailsFromToken($token);
    
        /// validation
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }
        
       
        // validating user_id
        $user_details = \App\Repositories\Pick::generateUserDetailsFromUserID($user_id);
        if(!$user_details['id']){
            return response()->json(['message' => 'Invalid User ID !'], 404);
        }
        
       
        
        
       
        
        
        
        
        
        
        $tola = new users_portfolio();
        $tola->user_id = $user_id;
        $tola->room_type = $room_type;
        $tola->purchase_price = $purchase_price;
        $tola->equity = $equity;
        $tola->admt_fee = $admt_fee;
        $tola->payment_plan = $payment_plan;
        $tola->duration = $package_details['duration'];
        $tola->amount = $amount;
        $tola->start_date = $start_date;
        $tola->end_date = \App\Repositories\Pick::calculateEndDate($start_date,$package_details['duration']);
        $tola->admin_id = $admin_details['id'];
        $tola->save();
      
        return response()->json(['message'=>'Selected Plan Added successfully']);
        
        
    }
    
    
    public function users_list(){

        
        //validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        
         /// validation
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }
   
        $data = User::latest()->get();
        
        return response()->json(['message'=>$data]);
        
        
        
    }
    
    
    public function generate_payment_plans(){


        //@@@Step 1: validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }
        
        $data = \App\Repositories\Pick::generateInvestmentPlan();
        return response()->json(['message'=>$data]);
    }


    public static function list_my_portfolios(){

        $token = request()->token;
        $user_id = request()->user_id;


        $user_details = \App\Repositories\Pick::generateUserDetailsFromUserID($user_id);

         if(!$user_details['id']){
            return response()->json(['message' => 'Invalid User ID !'], 404);
        }


        $data = users_portfolio::where('user_id',$user_id)->get();
         
        
        return response()->json(['message' => $data]);

        

    }

    public function generate_room_types(){


        //@@@Step 1: validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }
        
        $data = \App\Repositories\Pick::generateRoomTypes();
        return response()->json(['message'=>$data]);
    }


    public function generate_equity_types(){


        //@@@Step 1: validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }
        
        $data = \App\Repositories\Pick::generateEquityTypes();
        return response()->json(['message'=>$data]);
    }

    
    
    
    public function users_login(){

        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 400);
        }
        return response()->json(['message'=> $this->respondWithToken($token)]);

        

        // //return response()->json(['message'=> request()->all() ]);
        // $email = request()->email;
        // $password = request()->password;

        // $user = DB::table('admins')->where('email',$email)->first();
        
        // if(!$user){
        //     return response()->json(['message' => 'Invalid Email Address!'],Response::HTTP_BAD_REQUEST);   
        // }
        
        // if (password_verify($password, $user->password)) {
        //     // Success
            
        //     $data = DB::table('admins')->where('email',$email)->latest()->get(['name','email','telephone','role','api_token']);
            
        //      return response()->json(['message'=>$data]);
        // }else { 
        //     return response()->json(['message' => 'Invalid Email Or Password!'], 404);        
                                       
        // }     
        
        
        
    }
    
    
    public function users_list_edit(){
        
        $id = request()->id;
        $token = request()->token;

        //validating the token
        $admin_details =  $this->generateAdminDetailsFromToken($token);
        // validating user_id
        $user_details = \App\Repositories\Pick::generateUserDetailsFromUserID($id);
        
         /// validation
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }
         if(!$user_details['id']){
            return response()->json(['message' => 'Invalid User ID !'], 404);
        }
        
        
        
        
        
        
        $data = User::findOrFail($id);
         return response()->json(['message'=>$data]);
    }
    
     public function users_list_edit_confirm(){

        


        //Validating user_id
         $user_details = \App\Repositories\Pick::generateUserDetailsFromUserID(request()->id);
         if(!$user_details['id']){
            return response()->json(['message' => 'Invalid User ID !'], 404);
        }

        //validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }

       


        //Validating token
        
        $amount_of_years = request()->amount_of_years;
        $date_of_birth = request()->date_of_birth;
        $doc_name = request()->doc_name;
        $email =request()->email;
        $home_address = request()->home_address;
        $marital_status = request()->marital_status;
        $nationality = request()->nationality;
        $nok_address = request()->nok_address;
        $nok_name = request()->nok_name;
        $office_address = request()->office_address;
        $other_names = request()->other_names;
        $payment_option = request()->payment_option;
        $phone_no = request()->phone_no;
        $present_occupation = request()->present_occupation;
        $profession = request()->profession;
        $property_type = request()->property_type;
        $relevant_info = request()->relevant_info;
        $state_of_origin = request()->state_of_origin;
        $surname = request()->surname;
        $id= request()->id;
        
        
        
        
        
        $tola = User::findOrFail($id);
        $tola->amount_of_years = $amount_of_years;
        $tola->date_of_birth =$date_of_birth;
        $tola->doc_name = $doc_name;
        $tola->email = $email;
        $tola->home_address = $home_address;
        $tola->marital_status =$marital_status;
        $tola->nationality = $nationality;
        $tola->nok_address = $nok_address;
        $tola->nok_name = $nok_name;
        $tola->office_address =$office_address;
        $tola->other_names = $other_names;
        $tola->payment_option = $payment_option;
        $tola->phone_no = $phone_no;
        $tola->present_occupation =$present_occupation;
        $tola->profession = $profession;
        $tola->property_type = $property_type;
        $tola->relevant_info =$relevant_info;
        $tola->state_of_origin = $state_of_origin;
        $tola->surname = $surname;
        $tola->save();
        
       
        return response()->json(['message'=>'Selected User Details Updated Successfully']);

    }



    public function users_register()
    {
        //
        // header('Access-Control-Allow-Origin: *');
        // header('Access-Control-Allow-Methods: *');
        // header('Access-Control-Allow-Headers: *');

        //validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }

        // return response()->json(['message' => request()->all()]);
        
        $amount_of_years = request()->amount_of_years;
        $date_of_birth = request()->date_of_birth;
        $doc_name = request()->doc_name;
        $email = request()->email;
        $home_address = request()->home_address;
        $marital_status = request()->marital_status;
        $nationality = request()->nationality;
        $nok_address = request()->nok_address;
        $nok_name = request()->nok_name;
        $office_address = request()->office_address;
        $other_names = request()->other_names;
        $payment_option = request()->payment_option;
        $phone_no = request()->phone_no;
        $present_occupation = request()->present_occupation;
        $profession = request()->profession;
        $property_type = request()->property_type;
        $relevant_info = request()->relevant_info;
        $state_of_origin = request()->state_of_origin;
        $surname = request()->surname;
        
        
        
        
        $tola = new User();
        $tola->amount_of_years = $amount_of_years;
        $tola->date_of_birth =$date_of_birth;
        $tola->doc_name = $doc_name;
        $tola->email = $email;
        $tola->home_address = $home_address;
        $tola->marital_status =$marital_status;
        $tola->nationality = $nationality;
        $tola->nok_address = $nok_address;
        $tola->nok_name = $nok_name;
        $tola->office_address =$office_address;
        $tola->other_names = $other_names;
        $tola->payment_option = $payment_option;
        $tola->phone_no = $phone_no;
        $tola->present_occupation =$present_occupation;
        $tola->profession = $profession;
        $tola->property_type = $property_type;
        $tola->relevant_info =$relevant_info;
        $tola->state_of_origin = $state_of_origin;
        $tola->surname = $surname;
        $tola->admin_id = $admin_details['id'];
        $tola->save();

        return response()->json(['message'=>'New User Added Successfully']);
        //return response()->json(1);
    }
    
    
    public function users_portfolio($id,$token){
        $user_id = $id;
        
        $data = users_portfolio::where('user_id',$user_id)->get();
         
        
        return response()->json($data);
        
    }




    public function transaction_lists(){
         
        $search = request()->search;
        
        //validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        
         /// validation
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }

        $result = array();

       
        
        $datas = transaction_history::latest()->get();

        foreach($datas as $data){
            $result[] = array(
                 'id' => $data->id,
                 'transaction_id' => $data->transaction_id,
                 'user_id' => \App\Repositories\Pick::generateUserDetailsFromUserID($data->user_id)['fullname'],
                 'user_id_id' => $data->user_id,
                 'amount' => number_format(intval($data->amount)),
                 'user_portfolio_id' => $data->user_portfolio_id,
                 'payment_medium' => ucwords($data->payment_medium),
                 'payment_date' => $data->payment_date,
                 'comments' => $data->comments,
            );
         }
        
        
        return response()->json(['message'=>$result]);
    }




    public function transaction_lists_search(){
         
        
        
        //validating the token
        $admin_details =  $this->generateAdminDetailsFromToken(request()->token);
        
         /// validation
        if(!$admin_details['id']){
            return response()->json(['message' => 'Invalid Admin Token!'], 404);
        }

        $result = array();
        $search = request()->search;

       
        $resource = (new transaction_history)->newQuery();
        $resource->orWhere('comments','like',"%$search%");
        $resource->orWhere('transaction_id','like',"%$search%");
        $resource->orWhere('payment_medium','like',"%$search%");
        $datas = $resource->latest()->get();


        if(count($datas) < 1){

            $users = (new User)->newQuery();
            $users->orWhere('surname','like',"%$search%");
            $users->orWhere('other_names','like',"%$search%");
            $ids = array_unique($users->pluck('id')->toArray());

            foreach($ids as $id){
                $resource = (new transaction_history)->newQuery();
                $resource->orWhere('user_id','like',"%$id%");
                $datas = $resource->latest()->get();
            }

        }

        

        foreach($datas as $data){
            $result[] = array(
                'id' => $data->id,
                'transaction_id' => $data->transaction_id,
                'user_id' => \App\Repositories\Pick::generateUserDetailsFromUserID($data->user_id)['fullname'],
                'amount' => number_format(intval($data->amount)),
                'user_portfolio_id' => $data->user_portfolio_id,
                'payment_medium' => ucwords($data->payment_medium),
                'payment_date' => $data->payment_date,
                'comments' => $data->comments,
            );
         }
        
        
        return response()->json(['message'=>$result]);
    }





    public function me()
    {
        return response()->json(auth()->user());
    }

    public function generateAdminDetailsFromToken($token){
        $payload = $this->me()->original;

        //return $payload;

        $result = array(
            'id' => $payload->id,
            'name' => $payload->name,
            'email' => $payload->email,
            'telephone' => $payload->telephone

        );

        return $result;
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }



    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'fullname' => auth()->user()->name,
            
        ]);
    }
    
    
    
   
    






    //
}
