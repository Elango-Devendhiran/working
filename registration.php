<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$password= md5  ($_POST['password']);
	
$query= mysqli_query($con,"SELECT * FROM register WHERE email='$email'");
if (mysqli_num_rows($query)>0){
    echo"Email ID is already taken.";
}
else{

	$sql = "insert into register (name,email,mobile,password) values ('".$name."','".$email."','".$mobile."','".$password."')";
	$result = mysqli_query($con,$sql);
	if ($result){
		//echo"Data Stored Successfully";
     header('location:index.php');
	}
	else{
		die(mysqli_error($con));
	}
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Expense Express</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="favicon.jpg" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">

<!-- Icon for password -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material" method="post">
                            <div class="text-center">
                                <img src="logo.jpg" height=50px width=150px alt="logo.png">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-18">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Registration</h3>
                                        </div>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="text" name="name" class="form-control" required="" pattern="[ .a-zA-Z]+" id="name"  title="Please enter only alphabets" onkeyup="this.value = this.value.toUpperCase();">
                                        <!-- onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" -->
                                        <span class="form-bar"></span>
                                        <label class="float-label">Name</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control" required="" pattern="[^@\s]+@[^@\s]+\.[^@\s]+"title="Enter a valid email address"/>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Email</label>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="text" name="mobile" class="form-control" required="" pattern="^[6-9]\d{9}$" title="Please enter 10 digits" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Mobile</label>
                                    </div>


                                    <div class="form-group form-primary">
                                        <input type="password" id="password" name="password" class="form-control" required=""  pattern="(?=.*[!@#$%^&*])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}" title="Password must contain 1 - Uppercase, 1 - Lowercase, 1- Number and 1 - Special Character and password length must between 8-12 characters.">
                                        <span class="form-bar"></span> 
                                        <i style="position: absolute; top: 20px;left: 380px;"class="fa-solid fa-eye" id="show-password"></i>
                                        <label class="float-label">Password</label>
                                    </div>

                                    <div class="form-group form-primary">
                                        <input type="password" id="confirm_password" class="form-control" required="" title="Please enter valid password" />
                                        <span class="form-bar"></span> 
                                        <!-- <i style="position: absolute; top: 20px;left: 380px;"class="fa-solid fa-eye" id="show-password"></i> -->
                                        <label class="float-label">Confirm Password</label>
                                    </div>

                                    <div class="row m-t-18 text-left">
                                        <div class="col-12">
                                            
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" name="submit"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Register</button>
                                        </div>
                                        
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                        <p class="text-inverse text-left">Already have an acccount? Please login <a href="index.php" style="text-decoration:underline"> Here</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form-->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

          <!-- Form Validation -->
          <script type="text/javascript" src="validation.js"></script>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- email availability checking -->
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script> -->
</body>

</html>


