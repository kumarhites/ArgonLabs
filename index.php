<?php 
session_start();
error_reporting(1);
include 'db_connect.php';
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    ArgonLabs
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
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
  <style>
      *
      {
        scroll-behavior: smooth;
      }
  </style>
</head>
<body>
<header>
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light ">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="./index.php">
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
            <div class="col-6 offset-s2"  id="home">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav  align-items-lg-center">
          <li class="nav-item offset-s2">
            <a class="nav-link" data-toggle="" href="#" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Home</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" role="button" data-target="#about">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">About</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="#services" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Services</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="search.php?test_name=&search=Search" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Search</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="#covid" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">COVID-19</span>
            </a>
          <!-- <li class="nav-item ">
            <a href="" class="nav-link" data-toggle="" href="#" role="button">
               <i class="ni ni-ui-04 d-lg-none"></i> 
              <span class="nav-link-inner--text">Ask Doctor</span>
            </a> -->
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="#contact" role="button">
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
              <a href="profile.php" class="dropdown-item">My Orders</a>
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
      </div>
    </div>
  </nav>
  </header>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Confirm LogOut</h4>
                    <p>Are you sure you want to logout?</p>
                  </div>
      </div>
      <div class="modal-footer">
        <a href="logout.php" class="btn btn-link text-white ml-auto">Yes</a>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
  <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="about" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Confirm LogOut</h4>
                    <p>Are you sure you want to logout?</p>
                  </div>
      </div>
      <div class="modal-footer">
        <a href="logout.php" class="btn btn-link text-white ml-auto">Yes</a>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


  <!-- End Navbar -->
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <img src="./assets/img/book.png" alt="">
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="./assets/img/brand/white.png" style="width: 200px;" class="img-fluid">
                <h2 class="lead text-white display-2">Simple, Efficient, Seamless</h2>
                <p class="lead text-white">Book an appointment instantly through India's no. 1 Healthcare and Pharmacy platform.</p>
                <div class="btn-wrapper mt-5">
                  <a href="search.php?test_name=&search=Search" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                    <!-- <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span> -->
                    <span class="btn-inner--text animate__animated animate__bounce">Book an Appointment</span>
                  </a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="separator separator-bottom separator-skew zindex-100" id="about">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    <div class="section features-6">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-primary">
              <div class="description pl-4">
                <h3 class="title display-8">Stay Healthy with <b>ArgonLabs</b></h3>
                <p><b> ArgonLabs </b>is India's leading digital healthcare platform. From consultations on chat to online pharmacy and lab tests at home: we have it all covered for you. Having delivered over 2 million orders in 10 cities till date, we are on a mission to bring "care" to "health" to give you a flawless healthcare experience.</p>
              </div>
            </div>
            <div class="info info-horizontal info-hover-primary mt-5">
              <div class="description pl-4">
                <h3 class="title display-8">Your Favourite Online Pharmacy</h3>
                <p>ArgonLabs is India's leading online chemist with over 20+ lab test available at the best prices. We are your one-stop destination for other healthcare products as well, such as over the counter pharmaceuticals, healthcare devices and homeopathy and ayurveda medicines. With ArgonLabs, you can buy test online and get them done at your doorstep anywhere in India!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-10 mx-md-auto">
            <img class="ml-lg-5" src="./assets/img/ill/head.png" width="100%">
          </div>
        </div>
      </div>
    </div>
    <div class="section features-1" id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h1 class="display-2">Services</h1>
            <h2 class="display-6">Lab Test From The Comfort Of Your Home</h2>
            <p class="lead">15,00,000+ lab tests booked | 4,00,000+ satisfied customers</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
              <i class="las la-vial la-2x"></i>
              </div>
              <h6 class="info-title text-uppercase text-primary">Home Sample Pick Up</h6>
              <p class="description opacity-10"><b> Schedule a Free Home Pickup. At your own ease.</b></p>
              <!-- <a href="javascript:;" class="text-primary">More about us -->
                <!-- <i class="ni ni-bold-right text-primary"></i> -->
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                <i class="ni ni-atom"></i>
              </div>
              <h6 class="info-title text-uppercase text-success">Free Doctor Consultation</h6>
              <p class="description opacity-10"><b>Ask questions to our specialized doctors</b></p>
              <!-- <a href="javascript:;" class="text-primary">Learn about our products -->
                <!-- <i class="ni ni-bold-right text-primary"></i> -->
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                <i class="ni ni-world"></i>
              </div>
              <h6 class="info-title text-uppercase text-warning">
                Best Prices Guaranteed</h6>
              <p class="description opacity-8"><b>Best prices available that beats all others in the market.</b></p>
              <!-- <a href="javascript:;" class="text-primary">Check our documentation -->
                <!-- <i class="ni ni-bold-right text-primary"></i> -->
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="covid">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <h1 class="display-2">COVID-19 | Awareness</h1>
          <h4 class="display-6">In this global pandemic we should follow simple guidelines by the Government.</h4>
          <a href="covid.php" class="lead">Learn More <i class="las la-angle-right"></i></a>
        </div>
      </div>
      <div class="section section-components">
        <div class="container">
          <div class="col-md-8 mx-auto text-center">
            <h1 class="display-8">Frequently Asked Questions</h1>
            <h6 class="display-6">Everything you need to know so that you can use ArgonLabs like a pro.</h6>
          </div>
                <div class="nav-wrapper">
                  <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link mb-sm-3 mb-md-0 btn-success btn-gradient-success active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Question 1</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mb-sm-3 mb-md-0 btn-success btn-gradient-success" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Question 2</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mb-sm-3 mb-md-0 btn-success btn-gradient-success" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">Question 3</a>
                    </li>
                  </ul>
                </div>
                <div class="card shadow">
                  <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                        <p class="description"><b>Q1 : How does my prescription get validated?</b></p>
                        <p class="description"><b>Ans : We check if a registered medical practitioner has generated the prescription. 
                                              We then look at the date of visit and duration of medication, to check if the prescription has expired. We also check if the quantity of medicines ordered matches with the prescription</b></p>
                      </p>
                      </div>
                      <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                        <p class="description"><b>Q2 : What is your cancellation policy?</b></p>
                        <p class="description"><b>Ans : You can cancel your order till our partner labs confirm it.</b></p>
                      </div>
                      <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                        <p class="description"><b>Q3 : ArgonLabs RETURN & REFUND POLICY?</b></p>
                        <p class="description"><b>ArgonLabs RETURN POLICY, REFUND, CANCELLATION AND SHIPPING CHARGES POLICY
                          ArgonLabs Technologies Private Limited ("ArgonLabs") team facilitates processing correct order as per prescription and strives to service in right conditions/ without any damage every time a consumer places an order.</b></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 







    <div class="container" id="contact">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h2 class="text-primary font-weight-light mb-2">Stay in touch!</h2>
          <h5 class="mb-0 font-weight-light">Connect on any of these platforms, To be updated.</h5>
          <p class="text-default font-weight-medium">+91 7007312549 | <a href="contact.php">hkhiteshkumar66@gmail.com</a></p>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <button target="_blank" href="" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
          </button>
          <button target="_blank" href="" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
          </button>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-12">
          <div class="copyright" style="padding-bottom:20px;"><span><img src="./svg/smiling.gif" alt=""></span>
          Keep Smiling and stay healthy  &copy; 2020 <a href="#home" >ArgonLabs</a>.
            <br>
          </div>
        </div>
      </div>
    </div>
  </footer>
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
  <script src="./assets/vendor/headroom/dist/headroom.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script> -->
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