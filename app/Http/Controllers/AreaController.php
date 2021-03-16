<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Area;
use Validator,Redirect,Response;

class AreaController extends Controller
{
    /**
    * Go to Add Vehicle Types.
    *
    * @return view
    */
    public function areaView(){
        return view('/area.add_areas');
    }

    /**
    * Go to Add Offers.
    *
    * @return view
    */
    public function addAreas(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lat' => 'required', 
            'lon' => 'required',       
        ]);
       $validator->validate();

        $Area = new Area();
        $Area->name = $request->name;  
        $Area->lat = $request->lat; 
        $Area->lon = $request->lon;          
        $Area->save();
           
            return redirect()->route('admin.dashboard');
    }

      /**
     * Go to manage events view.
     *
     * @param  Request $request
     * @return view
     */
    public function manageAreaView(Request $request){
        $categories = Area::all();
        // echo json_encode($categories1);die;
        return view('/area.manage_areas',compact('categories'));
    }

      /**
     * Go to Edit VehicletType 
     *
     * @param  Request $request
     * @return view
     */
    public function editAreas(Request $request) {      
        $lead_events_id = $request->app_id;
      
        $editedoffers_data = Area::where('id', $lead_events_id)->first();
        // echo json_encode($businessSerData);die;
        return view('/area.edit_area', compact('editedoffers_data'));
        
    }

    /**
    * Go to Update Offers.
    *
    * @return view
    */
    public function updateArea(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lat' => 'required', 
            'lon' => 'required',       
        ]);
       $validator->validate();

        $hid_id = $request->hid_id;
        $update_offer_data = Area::where('id', $hid_id)->update(['name' => $request->name, 'lat' => $request->lat, 'lon' => $request->lon]);   
            return redirect()->route('admin.manage_areas');
    }

     /**
     * Go to Delete Offers.
     *
     * @param  Request $request
     * @return view
     */
    public function deleteArea(Request $request) {
        $lead_delete_id = $request->appdel_id;
        $delete_area = Area::where('id', $lead_delete_id)->delete();
        return redirect()->route('admin.manage_areas');
    }
}
