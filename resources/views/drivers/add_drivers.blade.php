<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Admin | Add Drivers</title>

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
                            <h5>Add Driver Details</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" name="" action="{{route('admin.add_drivers')}}" enctype="multipart/form-data" novalidate>
                                {{csrf_field()}}
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="fname" id="fname" value="{{old('fname')}}" required>
                                        @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lname" id="lname" value="{{old('lname')}}" required>
                                        @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" required>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    

                                </div>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Password</label>
                                        <input type="text" class="form-control" name="password" id="password" value="{{old('password')}}" required>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Mobile</label>
                                        <input type="text" class="form-control" name="mobile" id="mobile" value="{{old('mobile')}}" required>
                                        @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Whatsapp No</label>
                                        <input type="text" class="form-control" name="whatsapp_no" id="whatsapp_no" value="{{old('whatsapp_no')}}" required>
                                        @error('whatsapp_no')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Date Of Birth</label>
                                                    <input type="text" name="dob" id="dob" value="{{old('dob')}}" data-language="en" class="datepicker-here form-control digits" aria-describedby="basic-addon2">
     
                                        @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}" required>
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Pan No</label>
                                        <input type="text" class="form-control" name="pan_no" id="pan_no" value="{{old('pan_no')}}" required>
                                        @error('pan_no')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Landmark</label>
                                        <input type="text" class="form-control" name="landmark" id="landmark" value="{{old('landmark')}}" required>
                                        @error('landmark')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Gender</label>
                                        <input type="text" class="form-control" name="gender" id="gender" value="{{old('gender')}}" required>
                                        @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="form-label">Vehicle Type</label>
                                            <select id="business_categoryId" name="vehicle_type" class="form-select" required aria-label="select example">
                                                <option value="{{old('vehicle_type')}}">Select Typ</option>
                                                @foreach($categories as $vehicleType)
                                                <option value="{{$vehicleType->id}}">{{$vehicleType->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('vehicle_type')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="row g-3">

                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Vehicle Name</label>
                                        <input type="text" class="form-control" name="vehicle_name" id="vehicle_name" value="{{old('vehicle_name')}}" required>
                                        @error('vehicle_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Vehicle No</label>
                                        <input type="text" class="form-control" name="vehicle_no" id="vehicle_no" value="{{old('vehicle_no')}}" required>
                                        @error('vehicle_no')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Emergency Contact Name</label>
                                        <input type="text" class="form-control" name="emergency_contact_name" id="emergency_contact_name" value="{{old('emergency_contact_name')}}" required>
                                        @error('emergency_contact_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row g-3">

                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Emergency Contact No</label>
                                        <input type="text" class="form-control" name="emergency_contact_no" id="emergency_contact_no" value="{{old('emergency_contact_no')}}" required>
                                        @error('emergency_contact_no')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Relation</label>
                                        <input type="text" class="form-control" name="relation" id="relation" value="{{old('relation')}}" required>
                                        @error('relation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Bank Account No</label>
                                        <input type="text" class="form-control" name="bank_account_no" id="bank_account_no" value="{{old('bank_account_no')}}" required>
                                        @error('bank_account_no')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="form-label">Job Start Time</label>
                                            <select id="preferred_job_timing_id" name="preferred_job_timing_id" class="form-select" required aria-label="select example">
                                                <option value="{{old('preferred_job_timing_id')}}">Select Period</option>
                                                @foreach($categories1 as $jobtimingType)
                                                <option value="{{$jobtimingType->id}}">{{$jobtimingType->start_time}}</option>
                                                @endforeach
                                            </select>
                                            @error('preferred_job_timing_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="validationCustom01" class="form-label">Area</label>
                                            <select id="preferred_area_id" name="preferred_area_id" class="form-select" required aria-label="select example">
                                                <option value="{{old('preferred_area_id')}}">Select Area</option>
                                                @foreach($categories2 as $areaType)
                                                <option value="{{$areaType->id}}">{{$areaType->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('preferred_area_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">Driver License</label>
                                        <input type="text" class="form-control" name="driver_license" id="driver_license" value="{{old('driver_license')}}" required>
                                        @error('driver_license')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>


                                <div class="row g-3">


                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">IFSC Code</label>
                                        <input type="text" class="form-control" name="ifsc_code" id="ifsc_code" value="{{old('ifsc_code')}}" required>
                                        @error('ifsc_code')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Aadhaar No</label>
                                        <input type="text" class="form-control" name="aadhar" id="aadhar" value="{{old('aadhar')}}" required>
                                        @error('aadhar')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                   

                                </div>

                                <div class="row g-3">
                                <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Image</label>
                                        <img src="/uploads/blank_img1.jpg" alt="people" class="offrlck" width="56" id="img-upload">
                                        <input class="form-control offrimg" type="file" id="image" value="{{old('image')}}" name="image" required="">
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">License Image</label>
                                        <img src="/uploads/blank_img1.jpg" alt="people" class="offrlck" width="56" id="img-upload1">
                                        <input class="form-control offrimg" type="file" id="license_image" value="{{old('license_image')}}" name="license_image" required="">
                                        @error('license_image')
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
    <script>
 function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#img-upload').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#image").change(function() {
        readURL(this);
      });

      function readURL1(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#img-upload1').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#license_image").change(function() {
        readURL1(this);
      });

</script>
    @endsection