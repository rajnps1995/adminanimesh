<?php

namespace App\Http\Controllers;

use App\Model\Area;
use Illuminate\Http\Request;
use App\Model\Driver;
use App\Model\JobTiming;
use App\Model\Vehicle;
use Validator,Redirect,Response;

class DriverController extends Controller
{
     /**
    * Go to Add Vehicle Types.
    *
    * @return view
    */
    public function driverView(){
        $categories = Vehicle::all();
        $categories1 = JobTiming::all();
        $categories2 = Area::all();
        return view('/drivers.add_drivers', compact('categories', 'categories1', 'categories2'));
    }

      /**
    * Go to Add Offers.
    *
    * @return view
    */
    public function addDriver(Request $request) {

        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required',  
            'mobile' => 'required',
            'dob' => 'required',  
            'address' => 'required',
            'image' => 'required',  
            'landmark' => 'required',
            'vehicle_name' => 'required',  
            'pan_no' => 'required:max:10',
            'aadhar' => 'required|max:12',         
        ]);
       $validator->validate();

       $fileName1 = time().'.'.$request->file('image')->extension(); 
            $request->file('image')->move(public_path('uploads/'), $fileName1);
            $imgupdate ='uploads/'.$fileName1;

            $fileName = time().'.'.$request->file('license_image')->extension(); 
                    // echo json_encode($fileName);die;

            $request->file('license_image')->move(public_path('uploads/'), $fileName);
            $imgupdate1 ='uploads/'.$fileName;

       $password = \Hash::make($request->password);

       $dob = $request->dob;
       $timestamp = strtotime($dob);
       $new_date = date("Y-m-d", $timestamp);

       $length = 6;

       $otp = substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 2, $length);

       $is_verified = 1;

        $Driver = new Driver();
        $Driver->fname = $request->fname;  
        $Driver->lname = $request->lname;
        $Driver->email = $request->email;  
        $Driver->password = $password;
        $Driver->mobile = $request->mobile;  
        $Driver->whatsapp_no = $request->whatsapp_no;
        $Driver->dob = $new_date;  
        $Driver->image = $imgupdate;
        $Driver->address = $request->address;  
        $Driver->landmark = $request->landmark;
        $Driver->gender = $request->gender;  
        $Driver->vehicle_type = $request->vehicle_type;
        $Driver->license_image = $imgupdate1;  
        $Driver->vehicle_name = $request->vehicle_name;
        $Driver->vehicle_no = $request->vehicle_no;  
        $Driver->emergency_contact_name = $request->emergency_contact_name;          
        $Driver->emergency_contact_no = $request->emergency_contact_no;  
        $Driver->relation = $request->relation;
        $Driver->preferred_job_timing_id = $request->preferred_job_timing_id;  
        $Driver->preferred_area_id = $request->preferred_area_id;
        $Driver->pan_no = $request->pan_no;  
        $Driver->aadhar = $request->aadhar;
        $Driver->driver_license = $request->driver_license;  
        $Driver->bank_account_no = $request->bank_account_no;
        $Driver->ifsc_code = $request->ifsc_code;  
        $Driver->otp = $otp;
        $Driver->is_verified = $is_verified;  

    
        $Driver->save();
           
            return redirect()->route('admin.dashboard');
    }

     /**
     * Go to manage events view.
     *
     * @param  Request $request
     * @return view
     */
    public function manageDriversView(Request $request){
        $categories = Driver::all();
        // echo json_encode($categories1);die;
        return view('/drivers.manage_drivers',compact('categories'));
    }

      /**
     * Go to Edit VehicletType 
     *
     * @param  Request $request
     * @return view
     */
    public function editDriver(Request $request) {      
        $lead_events_id = $request->app_id;
        $categoriesveh = Vehicle::all();
        $categoriesjob = JobTiming::all();
        $categoriesarea = Area::all();
        $editedoffers_data = Driver::where('id', $lead_events_id)->first();
        // echo json_encode($businessSerData);die;
        return view('/drivers.edit_driver', compact('editedoffers_data', 'categoriesveh', 'categoriesjob', 'categoriesarea'));
        
    }

    /**
    * Go to Update Offers.
    *
    * @return view
    */
    public function updateDriver(Request $request)
    {
        // echo 'hi';die;
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required',  
            'mobile' => 'required',
            'dob' => 'required',  
            'address' => 'required',
            'image' => 'required',  
            'landmark' => 'required',
            'vehicle_name' => 'required',  
            'pan_no' => 'required:max:10',
            'aadhar' => 'required|max:12',         
        ]);
       $validator->validate();

        $hid_id = $request->hid_id;

        $fileName1 = time().'.'.$request->file('image')->extension(); 
            $request->file('image')->move(public_path('uploads/'), $fileName1);
            $imgupdate ='uploads/'.$fileName1;

            $fileName = time().'.'.$request->file('license_image')->extension(); 
                    // echo json_encode($fileName);die;

            $request->file('license_image')->move(public_path('uploads/'), $fileName);
            $imgupdate1 ='uploads/'.$fileName;

       $password = \Hash::make($request->password);

      

       $dob = $request->dob;
       $timestamp = strtotime($dob);
       $new_date = date("Y-m-d", $timestamp);

       $length = 6;

       $otp = substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 2, $length);

       $is_verified = 1;
       if($request->password!=""){
        $update_driver_data = Driver::where('id', $hid_id)->update(['fname' => $request->fname, 'lname' => $request->lname, 'email' => $request->email, 'password' => $password, 'mobile' => $request->mobile, 'whatsapp_no' => $request->whatsapp_no, 'dob' => $new_date, 'image' => $imgupdate, 'address' => $request->address, 'landmark' => $request->landmark, 'gender' => $request->gender, 'vehicle_type' => $request->vehicle_type, 'license_image' => $imgupdate1, 'vehicle_name' => $request->vehicle_name, 'vehicle_no' => $request->vehicle_no, 'emergency_contact_name' => $request->emergency_contact_name, 'emergency_contact_no' => $request->emergency_contact_no, 'relation' => $request->relation, 'preferred_job_timing_id' => $request->preferred_job_timing_id, 'preferred_area_id' => $request->preferred_area_id, 'pan_no' => $request->pan_no, 'aadhar' => $request->aadhar, 'driver_license' => $request->driver_license, 'bank_account_no' => $request->bank_account_no, 'ifsc_code' => $request->ifsc_code, 'otp' => $otp, 'is_verified' => $is_verified]);   
       
       }else{
        $update_driver_data = Driver::where('id', $hid_id)->update(['fname' => $request->fname, 'lname' => $request->lname, 'email' => $request->email,'mobile' => $request->mobile, 'whatsapp_no' => $request->whatsapp_no, 'dob' => $new_date, 'image' => $imgupdate, 'address' => $request->address, 'landmark' => $request->landmark, 'gender' => $request->gender, 'vehicle_type' => $request->vehicle_type, 'license_image' => $imgupdate1, 'vehicle_name' => $request->vehicle_name, 'vehicle_no' => $request->vehicle_no, 'emergency_contact_name' => $request->emergency_contact_name, 'emergency_contact_no' => $request->emergency_contact_no, 'relation' => $request->relation, 'preferred_job_timing_id' => $request->preferred_job_timing_id, 'preferred_area_id' => $request->preferred_area_id, 'pan_no' => $request->pan_no, 'aadhar' => $request->aadhar, 'driver_license' => $request->driver_license, 'bank_account_no' => $request->bank_account_no, 'ifsc_code' => $request->ifsc_code, 'otp' => $otp, 'is_verified' => $is_verified]);   
       
       }
       // $update_driver_data = Driver::where('id', $hid_id)->update(['start_time' => $request->start_time, 'end_time' => $request->end_time]);   
            return redirect()->route('admin.manage_drivers');
    }

     /**
     * Go to Delete Offers.
     *
     * @param  Request $request
     * @return view
     */
    public function deleteDriver(Request $request) {
        $lead_delete_id = $request->appdel_id;
        $delete_event = Driver::where('id', $lead_delete_id)->delete();
        return redirect()->route('admin.manage_drivers');
    }
}
