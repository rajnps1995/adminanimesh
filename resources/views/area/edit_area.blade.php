<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Admin | Edit Area</title>

    @extends('layouts.master')
    @section('content')
        <!--Page Sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="page-header">
                  
                </div>
            </div>
            <!-- Container-fluid Ends -->

            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Area Type</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="post" name="" action="{{route('admin.update_driver1')}}" enctype="multipart/form-data" novalidate>
                                {{csrf_field()}}
                                <input type="hidden" id="hid_id" name="hid_id" value="{{$editedoffers_data->id}}">

                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Area Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{$editedoffers_data->name}}" required>
                                            @error('name')
					<span class="text-danger">{{ $message }}</span>
					@enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Latitude</label>
                                            <input type="text" class="form-control" name="lat" id="lat" value="{{$editedoffers_data->lat}}" required>
                                            @error('lat')
					<span class="text-danger">{{ $message }}</span>
					@enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Longitude</label>
                                            <input type="text" class="form-control" name="lon" id="lon" value="{{$editedoffers_data->lon}}" required>
                                            @error('lon')
					<span class="text-danger">{{ $message }}</span>
					@enderror
                                        </div>
                                     
                                    </div>
                                
                                    <div class="mb-3">
                                        <div class="form-check">
                                          
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->

        </div>
    </div>
    <!--Page Body Ends-->

</div>
<!--page-wrapper Ends-->
@endsection