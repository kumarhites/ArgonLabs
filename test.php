<?php
session_start();
// error_reporting(1);
// unset ($_SESSION['user']);
include 'db_connect.php';
$lab_id = $_GET['lab_id'];
$test_id = $_GET['test_id'];
// $lab_name = $_GET['lab_name'];



// check if the user is logged in or not
if($_SESSION['user']=="")
{
    echo "<script>alert('PLease login first to continue!');</script>";
    header("location:login.php");
}
// else{
//     echo "Hello and welcome ".$_SESSION['user']." to our website, happy shopping";
//     // echo $lab_id. "   ".$test_id;
// }

//cart
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["test_id"], $item_array_id))
		{
		$count = count($_SESSION["shopping_cart"]);
		$item_array = array(
		'item_id'		=>	$_GET["test_id"],
		'item_lab_id'		=>	$_GET["lab_id"],
		'item_name'		=>	$_POST["hidden_name"],
		'item_lab_name'		=>	$_POST["hidden_lab_name"],
		'item_test_type'		=>	$_POST["hidden_test_type"],
		'item_price'		=>	$_POST["hidden_price"],
		'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
        echo '<script>alert("Item Already Added");</script>';
		}
	}
	else
	{
		$item_array = array(
		'item_id'		=>	$_GET["test_id"],
		'item_lab_id'		=>	$_GET["lab_id"],
        'item_name'		=>	$_POST["hidden_name"],
        'item_lab_name'		=>	$_POST["hidden_lab_name"],
        'item_test_type'		=>	$_POST["hidden_test_type"],
		'item_price'		=>	$_POST["hidden_price"],
		'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
 
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
		if($values["item_id"] == $_GET["id"])
		{
		unset($_SESSION["shopping_cart"][$keys]);
		echo '<script>alert("Item Removed")</script>';
		echo '<script>window.location="test.php?action=add&test_id=&lab_id="</script>';
		}
		}
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "deleteall")
	{
		
		unset($_SESSION["shopping_cart"]);
		echo '<script>alert("All Items Removed")</script>';
		echo '<script>window.location="test.php?action=add&test_id=&lab_id="</script>';
		
	}
}
 
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
            <a class="nav-link" data-toggle="" href="#" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Home</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="#about" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">About</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="#services" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Services</span>
            </a>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="" href="search.php" role="button">
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
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <!-- <img src="./assets/img/brand/white.png" style="width: 200px;" class="img-fluid"> -->
				<h1 class="text-white display-1">Order Details</h1>
                <h2 class="lead text-white display-2">Cart Simplified</h2>
                <!-- <p class="lead text-white">Book an appointment instantly through India's no. 1 Healthcare and Pharmacy platform.</p>
                <div class="btn-wrapper mt-5">
                  <a href="search.php?test_name=&search=Search" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                     <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span> 
                    <span class="btn-inner--text">Book an Appointment</span>
                  </a>
                  
                </div> -->
                
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
		<?php
		$query = "SELECT * FROM tests where test_id = '$test_id' and lab_id = '$lab_id'";
		$result = mysqli_query($db, $query);
		// if(mysqli_num_rows($result) > 0)
		// {
		// while($row = mysqli_fetch_array($result))
		// {
		?>
		
		
		<?php
		// }
		// }
		?>
		<div style="clear:both"></div>
		<br />
		
        <?php
        
        if(!empty($_SESSION["shopping_cart"]))
		{
        ?>
		<div class="container">
        <!-- <h3>Order Details</h3> -->
        <a href="test.php?action=deleteall" class="btn btn-warning" align="right">Remove All</a>
		<div class="table-responsive">
		<table class="table">
		<tr>
		<th width="20%">Test Name</th>
		<th width="20%">Lab Name</th>
		<th width="5%">Test ID</th>
		<th width="10%">Test Type</th>
		<th width="10%">Price</th>
		<th width="15%">Total</th>
		<th width="5%">Action</th>
        </tr>
        
		<?php
		
		$total = 0;
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
		?>
		<tr>
		<td><?php echo $values["item_name"]; ?></td>
		<td><?php echo $values["item_lab_name"]; ?></td>
		<td><?php echo $values["item_id"]; ?></td>
		<td><?php echo $values["item_test_type"]; ?></td>
		<td>₹ <?php echo $values["item_price"]; ?></td>
		<td>₹ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
		<!-- <td><a href="test.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td> -->
		<td> <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-s " data-original-title="" title="">
		<i class="las la-trash la-2x"></i>
                </button></td>
		</tr>
		<?php
		$total = $total + ($values["item_quantity"] * $values["item_price"]);
		}
		?>
		<tr>
		<td colspan="5" align="right">Total</td>
		<td >₹ <?php echo number_format($total, 2); ?></td>
		<td></td>
		</tr>
		<?php
        }
        else{
            echo "<br>Cart Empty";
        }
		?>
		
		</table>
        <br><button href="search.php" class=" btn btn-info" onclick="window.history.go(-1);">Continue Shopping</button>
		<a href="booking.php" class=" btn btn-default">Schedule Your Visit</a>

		</div>
		</div>
	</div>
	<br />
	</div>
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