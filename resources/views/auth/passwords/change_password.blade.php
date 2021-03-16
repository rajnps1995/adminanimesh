<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8" />
  <title>Admin | Change Password</title>

  @extends('layouts.master')
  @section('content')

  <style>
    .flowid {
      width: 99%;
      padding-right: 15px;
      padding-left: 21%;
    }
  </style>
  <style>
    .switch {
      position: relative;
      display: inline-block;
      width: 26px;
      height: 15px;
      margin-bottom: -3px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 10px;
      width: 10px;
      left: 4px;
      bottom: 3px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked+.slider {
      background-color: #2196F3;
    }

    input:focus+.slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
      -webkit-transform: translateX(9px);
      -ms-transform: translateX(9px);
      transform: translateX(9px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    .toggel-block {
      display: block !important;
    }

    .toggel-none {
      display: none;
    }
  </style>
  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    <div class="page-body">
      <div class="container-fluid flowid">
        <div class="page-header">
          <div class="row">
            <div class="col">
              <div class="page-header-left">
                <h3>Change Password Below:</h3>

              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- Container-fluid starts-->
      <div class="container-fluid flowid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">

              <div class="card-body">
                <form class="needs-validation" method="post" action="{{route('admin.update_password')}}" novalidate="">
                  <input type="hidden" id="hid_id" name="hid_id" value="">

                  {{csrf_field()}}
                  <div class="form-row">
                    
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Old Password</label>
                      <input class="form-control" id="old_pass" name="old_pass" value="{{old('old_pass')}}" type="text" placeholder="Enter Current Password" required="">
                      @error('old_pass')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">New Password</label>
                      <input class="form-control" id="new_pass" name="new_pass" value="{{old('new_pass')}}" type="text" placeholder="Enter New Password" required="">
                      @error('new_pass')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Confirm Password</label>
                      <input class="form-control" id="conf_pass" name="conf_pass" value="{{old('conf_pass')}}" type="text" placeholder="Enter Confirm Password" required="">
                      @error('conf_pass')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                    </div>

                  </div>


                  <button class="btn btn-primary" id="submit_product" name="submit_product" type="submit">Submit</button>
                </form>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
    </div>


    @endsection