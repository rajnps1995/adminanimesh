<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Vehicle;
use Validator,Redirect,Response;

class VehicleController extends Controller
{
    /**
    * Go to Add Vehicle Types.
    *
    * @return view
    */
    public function vehicletypeView(){
        return view('/vehicle.add_vehicle');
    }

    /**
    * Go to Add Offers.
    *
    * @return view
    */
    public function addVehicleType(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',       
        ]);
       $validator->validate();

        $Vehicle = new Vehicle();
        $Vehicle->name = $request->name;           
        $Vehicle->save();
           
            return redirect()->route('admin.dashboard');
    }

     /**
     * Go to manage events view.
     *
     * @param  Request $request
     * @return view
     */
    public function manageVehicletType(Request $request){
        $categories = Vehicle::all();
        // echo json_encode($categories1);die;
        return view('/vehicle.manage_vehicles',compact('categories'));
    }

     /**
     * Go to Edit VehicletType 
     *
     * @param  Request $request
     * @return view
     */
    public function editVehicleType(Request $request) {      
        $lead_events_id = $request->app_id;
      
        $editedoffers_data = Vehicle::where('id', $lead_events_id)->first();
        // echo json_encode($businessSerData);die;
        return view('/vehicle.edit_vehicle', compact('editedoffers_data'));
        
    }

    /**
    * Go to Update Offers.
    *
    * @return view
    */
    public function updateVehicleType(Request $request)
    {
        $request->validate([
            'name' => 'required',
       ]);
        $hid_id = $request->hid_id;
        $update_offer_data = Vehicle::where('id', $hid_id)->update(['name' => $request->name]);   
            return redirect()->route('admin.manage_vehicles');
    }

     /**
     * Go to Delete Offers.
     *
     * @param  Request $request
     * @return view
     */
    public function deleteVehicleType(Request $request) {
        $lead_delete_id = $request->appdel_id;
        $delete_event = Vehicle::where('id', $lead_delete_id)->delete();
        return redirect()->route('admin.manage_vehicles');
    }
}
