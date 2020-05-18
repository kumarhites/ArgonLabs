<?php 
session_start();
error_reporting(1);
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    ArgonLabs | COVID-19
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="./assets/css/font-awesome.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
  <!-- <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" /> -->
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="./index.html">
        <img src="./assets/img/brand/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-7">
              <a href="./index.html">
                <!-- <img src="./assets/img/brand/blue.png"> -->
              </a>
            </div>
            <div class="col-6 offset-s2">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center">
          <li class="nav-item offset-s2">
            <a class="nav-link" data-toggle="" href="index.php" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Home</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="index.php?#about" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">About</span>
            </a>
          <li class="nav-item ">
            <a  class="nav-link" data-toggle="" href="index.php?#services" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Services</span>
            </a>
          <li class="nav-item ">
            <a  class="nav-link" data-toggle="" href="index.php?#services" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Services</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="#" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">COVID-19</span>
            </a>
          <li class="nav-item ">
            <a  class="nav-link" data-toggle="" href="index.php?#contactus" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Contact Us</span>
            </a>
            </div>
          </li>
          </li>
        </ul>

      <?php
      if($_SESSION['user']!="")
      {
        ?> 
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <!-- <i class="ni ni-collection d-lg-none"></i> -->
              <span class="nav-link-inner--text"><?php echo $_SESSION['user'];?></span>
            </a>
            <div class="dropdown-menu">
              <!-- <a href="orders.php" class="dropdown-item">Appointments</a> -->
              <a href="#" class="dropdown-item">Profile</a>
              <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Logout</a>
              <!-- <a href="../examples/register.html" class="dropdown-item">Register</a> -->
            </div>
          </li>
        </ul>
      <?php } 
      else
      {
      ?>
            <li class="nav-item d-none d-lg-block ml-lg-4">
            <a href="login.php" target="_blank" class="btn btn-primary btn-icon">
              <span class="nav-link-inner--text">Login</span>
            </a>
            <?php 
		} ?>

        </ul>
      </nav> 


        
          
        </ul> 
      </div>
    </div>
  </nav>




  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">
      
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Confirm LogOut?</h4>
                    <p>Are you sure you want to logout?</p>
                  </div>
      </div>
      <div class="modal-footer">
        <a href="logout.php" class="btn btn-link text-white ml-auto">Yes</a>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">
     
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Confirm LogOut?</h4>
                  </div>
      </div>
      <div class="modal-footer">
        <a href="logout.php" class="btn btn-link text-white ml-auto">Yes</a>
      </div>
    </div>
  </div>
</div>




  <!-- End Navbar -->
  <div class="wrapper">
    <div class="section section-hero section-shaped" style="min-height:1000px">
        <img src="" alt="">
      <div class="shape shape-style-4 shape-default">
        <span class="span-150"></span>
        <span class="span-50"style="z-index: 11"></span>
        <span class="span-50"style="z-index: 11"></span>
        <span class="span-75"style="z-index: 11"></span>
        <span class="span-100"></span>
        <span class="span-75"style="z-index: 11"></span>
        <span class="span-50"style="z-index: 11"></span>
        <span class="span-100"style="z-index: 11"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <img class="align-center" src="./assets/img/covid/hero2.jpg" alt="" >
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white display-1" style="line-height:3.5">COVID-19</h1>
                <h5 class="display-6 font-weight-normal text-white">Protect yourself and help prevent spreading of the VIRUS.</h5>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="container">
    <!-- <h1 class=" text-warning text-center display-2" style="z-index:1;"><b>Statistics Of India</b></h1> -->
  <div class="row">
    <div class="col-md-4" style="/*position: relative; top: -118px; z-index: 1; height: 281px;*/">
      <div class="card shadow text-white bg-warning bg-gradient-warning">
        <div class="card-title text-center ">
          <img src="./assets/img/covid/spread (1).svg" alt="" style="height: 80px; width:80px; margin-top:80px;" >
        </div>
                    <div class="card-body">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                          <h1 class="text-center text-white">51401</h1>
                          <p class="text-center">Active Cases in INDIA</p>
                        </div>    
                      </div>
                    </div>
                </div>
  </div>
  <div class="col-md-4" style="/*position: relative; top: -118px; z-index: 1; height: 281px;*/">
      <div class="card shadow text-white bg-success bg-gradient-success">
        <div class="card-title text-center ">
          <img src="./assets/img/covid/spread (1).svg" alt="" style="height: 80px; width:80px; margin-top:80px;" >
        </div>
                    <div class="card-body" style="padding:2.7rem;">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                          <h1 class="text-center text-white">27919</h1>
                          <p class="text-center">Cured / Discharged</p>
                        </div>    
                      </div>
                    </div>
                </div>
  </div>
     <div class="col-md-4" style="/*position: relative; top: -118px; z-index: 1; height: 281px;*/">
      <div class="card shadow text-white bg-danger bg-gradient-danger">
        <div class="card-title text-center ">
          <img src="./assets/img/covid/spread (1).svg" alt="" style="height: 80px; width:80px; margin-top:80px;" >
        </div>
                    <div class="card-body">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                          <h1 class="text-center text-white">2649</h1>
                          <p class="text-center">Deaths</p>
                        </div>    
                      </div>
                    </div>
                </div>
  </div>
  </div>
<div class="container">

                <h1 class=" text-warning text-center display-2"><b>Awareness and Information</b></h1>
                <p><b> ArgonLabs </b>is India's leading digital healthcare platform. Our health first policy makes us the better choice in the wake of global pandemic. 
                As we facing and an avoidable situation ArgonLabs is following all the safety rules set by the Government of India. Best healthcare solutions at your doorstep.s</p>
</div>

<div class="container">
  <h1 class=" text-warning text-center display-2"><b>Steps to Follow</b></h1>
</div>
<div class="row">
    <div class="col-sm-6">
          <div class="card shadow text-white bg-orange bg-gradient-orange">
            <div class="card-title text-center ">
              <img src="./assets/img/covid/stay home.jpg" alt="" style="max-width:100%;">
            </div>
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                  <h2 class="text-center text-white">Stay At Home</h2>
                  <p class="text-center"></p>
                </div>    
              </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
          <div class="card shadow text-white bg-info bg-gradient-info">
            <div class="card-title text-center ">
              <img src="./assets/img/covid/wash.jpg" alt="" style="max-width:100%;">
          </div>
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                <h2 class="text-center text-white">Wash your hands regularly.</h2>
                <p class="text-center"></p>
              </div>    
            </div>
          </div>
      </div>
    </div>
          <br>.
      <div class="card shadow text-white bg-orange bg-gradient-orange">
        <div class="card-title text-center ">
          <img src="./assets/img/covid/facenotouch.jpg" alt="" style="max-width:100%;">
        </div>
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                <h1 class="text-center text-white">Dont Touch Your Face </h1>
                <!-- <p class="text-center">Follow the Social Distancing and be safe.</p> -->
              </div>    
            </div>
          </div>
      </div>
    <!-- </div> -->
      <div class="col-sm-6">.
        <div class="card shadow text-white bg-orange bg-gradient-orange">
          <div class="card-title text-center ">
            <img src="./assets/img/covid/sneeze.jpg" alt="" style="max-width:100%;">
          </div>
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                <h4 class="text-center text-white">Sneeze with your face covered</h4>
                <!-- <p class="text-center"></p> -->
              </div>    
            </div>
          </div>
      </div>
    </div>
    <div class="col-sm-6"> .
      <div class="card shadow text-white bg-info bg-gradient-info">
        <div class="card-title text-center ">
          <img src="./assets/img/covid/stayaway.jpg" alt="" style="max-width:100%;">
        </div>
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
              <h2 class="text-center text-white">Don't go out.</h2>
              <p class="text-center"></p>
            </div>    
          </div>
        </div>
    </div>
    </div>



    <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>