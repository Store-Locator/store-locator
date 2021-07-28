<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\businesses;
use Illuminate\Support\Facades\Hash;

class maincontroller extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

// customer login and registration start

    public function save_cust(Request $request){
        // return $request->input();
        // validate request
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customers',
            'password'=>'required|min:5|max:12',
            'confirm_password'=>'required|required_with:password|same:password|min:5|max:12'
        ]);
        // insert into database
            $customer = new customer;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->password = hash::make($request->password);
            $customer->confirm_password =hash::make( $request->confirm_password);
            $save = $customer->save();

            if($save){

                return back()->with('success','New User Added');

            }else{
                return back()->with('fail','something went wrong, try again later');
            }
        
        
    }

    public function check(Request $request){
        // return $request->input();
        // validate request
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        // for checking if user email is registered
        
        $userinfo = customer::where('email','=',$request->email)->first();
        
        if(!$userinfo){
            return back()->with('fail','We do not recognise your e-mail');
        }else{
            // check password
            if(Hash::check($request->password, $userinfo->password)){
                $request->session()->put('LoggedUser',$userinfo->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Incorrect Password ');
            }
        }
    }

    // customer login and registration end

    // business login and registration start

        public function save_bizz(Request $request){
        // return $request->input();
        // validate request
        $request->validate([
            'bizz_name'=>'required',
            'owner_name'=>'required',
            'gst_no'=>'required|min:15|unique:businesses',
            'gst_certi'=>'required',
            'pic1'=>'required',
            'pic2'=>'required',
            'pic3'=>'required',
            'phn_no'=>'required|min:10',
            'address'=>'required',
            'open_time'=>'required',
            'close_time'=>'required',
            'bizz_email'=>'required|email|unique:businesses',
            'pass'=>'required|min:5|max:12',
            'confirm_pass'=>'required|required_with:pass|same:pass|min:5|max:12'
        ]);

        $businesses = new businesses;
        $businesses->bizz_name = $request->bizz_name;
        $businesses->owner_name = $request->owner_name;
        $businesses->gst_no = $request->gst_no;
        $businesses->gst_certi = $request->gst_certi;
        $businesses->pic1 = $request->pic1;
        $businesses->pic2 = $request->pic2;
        $businesses->pic3 = $request->pic3;
        $businesses->phn_no = $request->phn_no;
        $businesses->address = $request->address;
        $businesses->open_time = $request->open_time;
        $businesses->close_time = $request->close_time;

        $businesses->bizz_email = $request->bizz_email;
        $businesses->pass = hash::make($request->pass);
        $businesses->confirm_pass =hash::make( $request->confirm_pass);
        $save = $businesses->save();

        if($save){

            return back()->with('success','New Business Added');

        }else{
            return back()->with('fail','something went wrong, try again later');
        }
            // for checking if user email is registered
            // $bizzinfo = business::where('bizz_email','=',$request2->bizz_email)->first();
        
            // if(!$bizzinfo){
            //     return back()->with('fail','We do not recognise your e-mail');
            // }else{
            //     // check password
            //     if(Hash::check($request2->password, $bizzinfo->password)){
            //         $request->session()->put('LoggedUser',$bizzinfo->id);
            //         return redirect('dashboard');
            //     }else{
            //         return back()->with('fail','Incorrect Password ');
            //     }
            // }
        }

    public function check2(Request $request){
        // return $request->input();
        // validate request     
        $request->validate([
            'bizz_email'=>'required|email',
            'pass'=>'required|min:5|max:12'
        ]);

        // for checking if user email is registered
        
        $userinfo2 = businesses::where('bizz_email','=',$request->bizz_email)->first();
        
        if(!$userinfo2){
            return back()->with('fail','We do not recognise your e-mail');
        }else{
            // check password
            if(Hash::check($request->pass, $userinfo2->pass)){
                $request->session()->put('LoggedUser',$userinfo2->id);
                return redirect('bizzdashboard');
            }else{
                return back()->with('fail','Incorrect Password ');
            }
        }
    }

    // business login and registration end

    // public function logoutbizz(){
    //     if(session()->has('LoggedBizz')){
    //         session()->pull('LoggedBizz');
    //         // session_destroy();
    //         return redirect('login');
    //     }
    // }
    
    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            // session_destroy();
            return redirect('login');
        }
    }

    // public function bizzdashboard(){
    //     $data2 = ['LoggedUserInfo'=>businesses::where('id','=',session('LoggedBizz'))->first()];
    //     return view('bizzdashboard',$data2);

    // }

    public function dashboard(){
        $data = ['LoggedUserInfo'=>customer::where('id','=',session('LoggedUser'))->first()];
        return view('dashboard',$data);

    }
    public function setting(){
        $data = ['LoggedUserInfo'=>customer::where('id','=',session('LoggedUser'))->first()];
        return view('setting',$data);

    }

    public function profile(){
        $data = ['LoggedUserInfo'=>customer::where('id','=',session('LoggedUser'))->first()];
        return view('profile',$data);

    }

    public function staff(){
        $data = ['LoggedUserInfo'=>customer::where('id','=',session('LoggedUser'))->first()];
        return view('staff',$data);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(){
        return view('index');
    }

     public function contact(){
        return view('contact');
    }
    public function aboutus(){
        return view('about-us');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
