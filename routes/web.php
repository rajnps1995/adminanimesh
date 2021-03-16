<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('admin.login');
})->name('adminlogin');

Route::post('login_get','AdminLoginController@loginGet')->name('admins.login');

Route::get('/admin','AdminLoginController@dashboardView')->name('admin.dashboard')->middleware(['auth:admin']);

Route::prefix('admin')->group(function () {




    

    Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        //-------------------------------------------------------------- Vehicle Type Section-----------------------------------------------//


        Route::get('vehicletype_view', 'VehicleController@vehicletypeView')->name('admin.vehicletype_view');

        Route::post('/add_vehicletype', 'VehicleController@addVehicleType')->name('admin.add_vehicletype');

        //--------------------------------------------------------------Manage Vehicle Type Section-----------------------------------------------//

        Route::get('/manage_vehicles', 'VehicleController@manageVehicletType')->name('admin.manage_vehicles');


        Route::post('/edit_vehicletype', 'VehicleController@editVehicleType')->name('edit_vehicletype');

        Route::post('/update_vehicletype', 'VehicleController@updateVehicleType')->name('admin.update_vehicletype');

        Route::post('/delete_vehicletype', 'VehicleController@deleteVehicleType')->name('delete_vehicletype');

        //-------------------------------------------------------------- Job Timing Section-----------------------------------------------//


        Route::get('jobtiming_view', 'JobtimingController@jobtiming_view')->name('admin.jobtiming_view');

        Route::post('/add_jobtiming', 'JobtimingController@addJobTiming')->name('admin.add_jobtiming');

        //--------------------------------------------------------------Manage  Job Timing Section-----------------------------------------------//

        Route::get('/manage_jobtiming', 'JobtimingController@manageJobtimingView')->name('admin.manage_jobtiming');


        Route::post('/edit_jobtiming', 'JobtimingController@editJobTiming')->name('edit_jobtiming');

        Route::post('/update_jobtiming', 'JobtimingController@updateJobTiming')->name('admin.update_jobtiming');

        Route::post('/delete_jobtiming', 'JobtimingController@deleteJobTiming')->name('delete_jobtiming');

        //-------------------------------------------------------------- Drivers Section-----------------------------------------------//


        Route::get('driver_view', 'DriverController@driverView')->name('admin.driver_view');

        Route::post('/add_drivers', 'DriverController@addDriver')->name('admin.add_drivers');

        //--------------------------------------------------------------Manage Drivers Section-----------------------------------------------//

        Route::get('/manage_drivers', 'DriverController@manageDriversView')->name('admin.manage_drivers');


        Route::post('/edit_driver', 'DriverController@editDriver')->name('edit_driver');

        Route::post('/update_driver', 'DriverController@updateDriver')->name('admin.update_driver');

        Route::post('/delete_driver', 'DriverController@deleteDriver')->name('delete_driver');

          //-------------------------------------------------------------- area Section-----------------------------------------------//


          Route::get('area_view', 'AreaController@areaView')->name('admin.area_view');

          Route::post('/add_areas', 'AreaController@addAreas')->name('admin.add_areas');
  
          //--------------------------------------------------------------manage Area Section-----------------------------------------------//
  
          Route::get('/manage_areas', 'AreaController@manageAreaView')->name('admin.manage_areas');
  
  
          Route::post('/edit_areas', 'AreaController@editAreas')->name('edit_areas');
  
          Route::post('/update_driver1', 'AreaController@updateArea')->name('admin.update_driver1');
  
          Route::post('/delete_areas', 'AreaController@deleteArea')->name('delete_areas');

          
//--------------------------------------------------------------Admin Logout Section-----------------------------------------------//
Route::get('change_password', 'AdminLoginController@changePassword')->name('admin.change_password');	

Route::post('update_password', 'AdminLoginController@updatePassword')->name('admin.update_password');
        
    });
});
