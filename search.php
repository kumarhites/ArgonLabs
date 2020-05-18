<?php 
session_start();
error_reporting(1);
include 'db_connect.php';
// echo $_GET['test_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Search | ArgonLabs
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
</head>

<body class="index-page" >
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
        <ul class="navbar-nav  align-items-lg-center">
          <li class="nav-item offset-s2">
            <a class="nav-link" data-toggle="" href="index.php?#home" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Home</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="index.php?#about" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">About</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="index.php?#services" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Services</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="covid.php" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">COVID-19</span>
            </a>
          <!-- <li class="nav-item ">
            <a href="" class="nav-link" data-toggle="" href="#" role="button">
               <i class="ni ni-ui-04 d-lg-none"></i> 
              <span class="nav-link-inner--text">Ask Doctor</span>
            </a> -->
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="index.php?#contact" role="button">
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
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Confirm LogOut?</h4>
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
      <div class="shape shape-style-3 shape-default">
        <!-- <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span> -->
        <img src="./assets/img/searching.png" alt="" style="width:100%">
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white display-1">Search a Test</h1>
                <p class="text-white display-8">Tired of the long wait queues, book an appointment now.</p>
                <form action="" method="get">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="las la-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search for a medical test" required type="text" name="test_name">
                        <input type="submit" name="search" value="Search" class="btn bg-gradient-red text-white">
                        <!-- <div class="custom-control custom-radio mb-3">
                          <input name="custom-radio-1" class="custom-control-input" id="customRadio1" type="radio">
                          <label class="custom-control-label" for="customRadio1">Unchecked</label>
                        </div>
                        <input type="radio" name="test_type" value="at home">
                        <label for="male">At home</label><br>
                        <input type="radio" name="test_type" value="at lab">
                        <label for="female">At lab</label><br>-->
                      </div> 
                    </div>
                  </div>
                </div>
              </form>
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
    <div class="row">
<?php
if(isset($_GET['search']))
{
  $test_name = $_GET['test_name'];
  $test_type = $_GET['test_type'];
  if($_GET['test_type'] == 'at home')
  {
    $query = "SELECT l.lab_name,l.lab_image,l.lab_ratings,l.lab_address, t.test_id, t.lab_id, t.test_name, t.test_type, t.test_price, t.test_details 
    from tests t, labs l where test_type = 'at home' and test_name LIKE '%$test_name%' and t.lab_id = l.lab_id";
  }
  elseif ($_GET['test_type'] =='at lab')
  {
    $query = "SELECT l.lab_name, l.lab_image,l.lab_ratings,l.lab_address, t.test_id, t.lab_id, t.test_name, t.test_type, t.test_price, t.test_details 
    from tests t, labs l where test_type = 'at lab' and test_name LIKE '$$test_name%' and t.lab_id = l.lab_id";
  }
  elseif($_GET['search'])
  {
    $query = "SELECT l.lab_name, l.lab_image,l.lab_ratings,l.lab_address, t.test_id, t.lab_id, t.test_name, t.test_type, t.test_price, t.test_details 
    from tests t, labs l where test_name LIKE '%$test_name%' and t.lab_id = l.lab_id";
  }
  else
  {
    echo "No data found for ".$test_name." at ".$test_type;
  }
  $row = mysqli_query($db, $query);
  while($fetch = mysqli_fetch_array($row))
  {
  
?>
  <!-- <a href="test.php?lab_id=<?php //echo $fetch['lab_id'];?>&test_id=<?php //echo $fetch['test_id'];?>">ADD TO CART</a> -->

    <!-- start card -->
    <div class="col-md-5">
		<form method="post" action="test.php?action=add&test_id=<?php echo $fetch["test_id"]; ?>&lab_id=<?php echo $fetch["lab_id"]; ?>&lab_name=<?php echo $fetch["lab_name"]; ?>&test_type=<?php echo $fetch["test_type"]; ?>">
    <div class="card card-pricing bg-dark border-0 shadow text-center mb-6" style="background-image: url('./assets/img/pattern_pricing5.svg');" >
              <div class="card-header bg-transparent">
                <h3 class="text-uppercase ls-0 text-white py-3 mb-0" ><?php echo $fetch["lab_name"]; ?></h3>
              </div>
              <div class="card-body">
              <h3 class="text-uppercase ls-0 text-white py-3 mb-0" ><?php echo $fetch["test_name"]; ?></h3>
              <small class="text-uppercase ls-0 text-white py-3 mb-0 " ><i class="las la-star" style="color:yellow"></i> <?php echo $fetch["lab_ratings"]; ?>/5 Lab Rating</small>
                <div class="display-2 text-warning">₹ <?php echo $fetch["test_price"]; ?></div>
                <span class=" text-white"><?php echo $fetch["test_type"]; ?></span>
                <ul class="list-unstyled my-4">
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-s icon-shape bg-whites text-white shadow rounded-circle text-darker ">
                        <i class="lar la-calendar la-2x"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-sm text-white">Working days : MON - SAT</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-s icon-shape bg-whites text-white shadow rounded-circle text-darker">
                        <i class="las la-clock la-2x"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-sm text-white"> Working time: 9AM - 9PM</span>
                      </div>
                    </div>
                  </li>
                  <!-- <li>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="icon icon-s icon-shape bg-white shadow rounded-circle text-success">
                          <i class="ni ni-circle-08"></i>
                        </div>
                      </div>
                      <div>
                        <span class="pl-2 text-sm text-white">15+ tests booked from this lab this week</span>
                      </div>
                    </div>
                  </li> -->
                </ul>
                <input type="hidden" name="hidden_name" value="<?php echo $fetch["test_name"]; ?>" />

                <input type="hidden" name="quantity" value="1" class="form-control" />
 
                <input type="hidden" name="hidden_price" value="<?php echo $fetch["test_price"]; ?>" />

                <input type="hidden" readonly name="hidden_lab_name" value="<?php echo $fetch["lab_name"]; ?>" />

                <input type="hidden" readonly name="hidden_test_type" value="<?php echo $fetch["test_type"]; ?>" />
                <!-- <button type="button" class="btn btn-link text-white mb-3">Add to CArt</button> -->
                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-warning" value="Add to Cart" />
              </div>
            </div>
            </form>
		</div>
    <!-- end card -->





















  <!-- <div class="col-md-4">
		<form method="post" action="test.php?action=add&test_id=<?php echo $fetch["test_id"]; ?>&lab_id=<?php echo $fetch["lab_id"]; ?>&lab_name=<?php echo $fetch["lab_name"]; ?>&test_type=<?php echo $fetch["test_type"]; ?>">
		<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
		<img src="img/labs/<?php echo $fetch["lab_image"]; ?>" class="img-responsive" /><br />
 
		<h4 class="text-info"><?php echo $fetch["test_name"]; ?></h4>
 
		<h4 class="text-danger">$ <?php echo $fetch["test_price"]; ?></h4>

		<h4 class="text-danger">$ <?php echo $fetch["lab_ratings"]; ?></h4>
 
		<input type="hidden" name="quantity" value="1" class="form-control" />
 
		<input type="hidden" name="hidden_name" value="<?php echo $fetch["test_name"]; ?>" />
 
		<input type="hidden" name="hidden_price" value="<?php echo $fetch["test_price"]; ?>" />

		<input type="hidden" readonly name="hidden_lab_name" value="<?php echo $fetch["lab_name"]; ?>" />

		<input type="hidden" readonly name="hidden_test_type" value="<?php echo $fetch["test_type"]; ?>" />
 
		<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
 
		</div>
		</form>
		</div> -->
<?php
  
  }
}
?>






<?php

// $sql = mysqli_query($db, "SELECT l.lab_name, t.test_name, t.test_id, t.test_details, t.test_price, t.test_type, t.lab_id 
// FROM tests t, labs l WHERE t.test_name like '%$test_name%' AND t.lab_id = l.lab_id");
// while($row = mysqli_fetch_assoc($sql))
// {
 

?>
<!--  -->
<?php
 
// }
// if(isset($_GET['search']))
// {
//   $test_name = $_GET['test_name'];
//   $test_type =$_GET['test_type'];
//   // $query = mysqli_query($db, "SELECT ");
  
// }


?>















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