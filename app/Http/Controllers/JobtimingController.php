<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\JobTiming;
use Validator,Redirect,Response;



class JobtimingController extends Controller
{
    /**
    * Go to Add Vehicle Types.
    *
    * @return view
    */
    public function jobtiming_view(){
        return view('/jobtiming.add_jobtiming');
    }

    
    /**
    * Go to Add Offers.
    *
    * @return view
    */
    public function addJobTiming(Request $request) {

        $validator = Validator::make($request->all(), [
            'start_time' => 'required',
            'end_time' => 'required',       
        ]);
       $validator->validate();

        $JobTiming = new JobTiming();
        $JobTiming->start_time = $request->start_time;  
        $JobTiming->end_time = $request->end_time;          
        $JobTiming->save();
           
            return redirect()->route('admin.dashboard');
    }

     /**
     * Go to manage events view.
     *
     * @param  Request $request
     * @return view
     */
    public function manageJobtimingView(Request $request){
        $categories = JobTiming::all();
        // echo json_encode($categories1);die;
        return view('/jobtiming.manage_jobtiming',compact('categories'));
    }

      /**
     * Go to Edit VehicletType 
     *
     * @param  Request $request
     * @return view
     */
    public function editJobTiming(Request $request) {      
        $lead_events_id = $request->app_id;
      
        $editedoffers_data = JobTiming::where('id', $lead_events_id)->first();
        // echo json_encode($businessSerData);die;
        return view('/jobtiming.edit_jobtiming', compact('editedoffers_data'));
        
    }

    /**
    * Go to Update Offers.
    *
    * @return view
    */
    public function updateJobTiming(Request $request)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required', 
       ]);
        $hid_id = $request->hid_id;
        $update_offer_data = JobTiming::where('id', $hid_id)->update(['start_time' => $request->start_time, 'end_time' => $request->end_time]);   
            return redirect()->route('admin.manage_jobtiming');
    }

     /**
     * Go to Delete Offers.
     *
     * @param  Request $request
     * @return view
     */
    public function deleteJobTiming(Request $request) {
        $lead_delete_id = $request->appdel_id;
        $delete_event = JobTiming::where('id', $lead_delete_id)->delete();
        return redirect()->route('admin.manage_jobtiming');
    }
}
