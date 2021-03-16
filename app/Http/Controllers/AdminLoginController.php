<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Validator;

class AdminLoginController extends Controller
{
    /**
     *Backend User Signup
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Validation\Validator,Exception $e,jsonArray
     */
    public function loginGet(Request $request){
        $statusCode=200;
        $response = [];
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            ], [
            'email.required' => 'Email is Required',
            'password.required' => 'Password is Required',
            ]
        );
        try{     
            $credential=['email'=>$request->email,'password'=>$request->password];          
            $checkAuth= auth()->guard('admin');      
            if($checkAuth->attempt($credential)==1){       
                $response=array(
                    'status'=>1,
                );
            }else{               
                $response=array(
                    'status'=>0,
                   'message'=>"Credential Missmatch."
                );  
            }  
        }catch(Exception $e){
            $response = array(
                'exception' => true,
                'exception_message' => $e->getMessage(),
            );
            $statusCode = 400;
        }finally{            
           return response()->json($response, $statusCode);  
        }
    }

    public function logout(Request $request)
    {
        \Auth::logout();
        return redirect('/');
    }

    public function dashboardView(Request $request)
    {
        
       return view('admin.dashboard');
    }
    
     /**
     * Go to  Business Profile.
     *
     * @return view
     */
    public function changePassword()
    {
        return view('/auth.passwords.change_password');
    }
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_pass' => ['required', new MatchOldPassword],
            'new_pass' => ['required'],
            'conf_pass' => ['same:new_pass'],
        ]);
   
        $updatedpassdata = Admin::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_pass)]);
        // dd('Password change successfully.');
        return redirect()->route('admin.logout');
    }
}
