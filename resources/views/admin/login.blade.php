<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon"/>
    <title>Zorro | Login</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}" ></script>

</head>
<body>

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day at work today <span>&#x263A;</span></h4>
    </div>
</div>
<!-- Loader ends -->

<!--Page start-->
<div class="page-wrapper">
    <div class="auth-bg">
        <div class="authentication-box">
            <h4 class="text-center">LOGIN</h4>
            <h6 class="text-center">Enter your Username and Password For Login or Signup</h6>
            <div class="card mt-4 p-4 mb-0">
            <div id="failur" class="alert alert-danger" style="display: none;">
                </div>
                <form class="theme-form">
                @csrf
                    <div class="mb-3">
                        <label class="col-form-label pt-0">Your Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <button type="submit" id="admin_signup" name="admin_signup" class="btn btn-primary">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="auth-bg-effect">
        <div class="first-effect"></div>
        <div class="second-effect"></div>
        <div class="third-effect"></div>
        <div class="fourth-effect"></div>
    </div>

</div>
<!--Page ends-->


<script>
        $(document).ready(function() {
           
            $('#admin_signup').click(function(e) {
               
                e.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();
                var token = $('input[name="_token"]').val();

                var formData = new FormData(); //append data
                formData.append('email', email);
                formData.append('password', password);
                formData.append('_token', token);

                $.ajax({
                    type: 'post',
                    url: '{{ route("admins.login") }}',
                    cache: false, 
                    processData: false,
                    contentType: false,
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                 
                        if (response.status == 1) {
                            window.location.href = '{{ route("admin.dashboard") }}';
                        } else {
                            $('#failur').show();
                        $('#failur').html(response.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('.login').html("Login");
                        $('.login').attr("disabled", false);
                        var msg = "";
                        if (jqXHR.status !== 422 && jqXHR.status !== 400) {
                            msg += "<strong>" + jqXHR.status + ": " + errorThrown + "</strong>";
                        } else {
                            if (jqXHR.responseJSON.hasOwnProperty('exception')) {
                                msg += "Exception: <strong>" + jqXHR.responseJSON.exception_message + "</strong>";
                            } else {
                                msg += "<strong><ul style='list-style:none;'>";
                                $.each(jqXHR.responseJSON.errors, function(key, value) {
                                    msg += "<li style='margin-left:0px;'>" + value + "</li>";
                                });
                                msg += "</ul></strong>";
                            }
                        }
                        toastr.warning(msg, 'Error!', {
                            "progressBar": true,
                            positionClass: 'toast-top-right',
                            containerId: 'toast-top-right'
                        });

                    }
                });
            });
        });
    </script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}" ></script>

<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}" ></script>

</body>

</html>