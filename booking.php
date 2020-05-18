<?php
session_start();
error_reporting(1);
include 'db_connect.php';
// $_SESSION['shopping_cart']
$user = $_SESSION['user'];
// echo $user;
?>
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
  <!-- datedropper -->
  <script src="https://cdn.datedropper.com/get/{{LICENSE}}"></script>
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
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light text-dark">
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
        <ul class="navbar-nav  align-items-lg-center ">
          <li class="nav-item offset-s2">
            <a class="nav-link " data-toggle="" href="#" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text ">Home</span>
            </a>
          <li class="nav-item text-dark">
            <a class="nav-link" data-toggle="" href="#about" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">About</span>
            </a>
          <li class="nav-item text-dark">
            <a class="nav-link" data-toggle="" href="#services" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Services</span>
            </a>
          <li class="nav-item text-dark">
            <a class="nav-link" data-toggle="" href="search.php" role="button">
              <!-- <i class="ni ni-ui-04 d-lg-none"></i> -->
              <span class="nav-link-inner--text">Search</span>
            </a>
          <li class="nav-item text-dark">
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
  <div class="wrapper" >
    <div class="section section-hero section-shaped" style="min-height: 661px">
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
        <img src="./assets/img/doctor.webp" alt="">
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <!-- <img src="./assets/img/brand/white.png" style="width: 200px;" class="img-fluid"> -->
                <!-- <h2 class="lead text-white display-2">Simple, Efficient, Seamless</h2>
                <p class="lead text-white">Book an appointment instantly through India's no. 1 Healthcare and Pharmacy platform.</p> -->
                <div class="btn-wrapper mt-5">
                  <!-- <a href="search.php?test_name=&search=Search" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0"> -->
                    <!-- <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span> -->
                    <!-- <span class="btn-inner--text">Book an Appointment</span> -->
                 

    

<form action="" method="get">
                
                <?php
						
						if($_GET["action"] == 'check_out')
						{
							$date = $_GET['appointment_date'];
							// echo $date;
							$check = mysqli_query($db, "SELECT `user_name`, `test_id`, `appointment_date`, `status` FROM orders where `user_name` = '$user' and `appointment_date` = '$date' and  `status`= 'pending'");
							if(mysqli_num_rows($check))
							{
								echo '<h3 class="text-warning">One or more tests are already booked for this '. $date . ' or status pending choose another date.</h3>';
								
							}
							elseif(isset($date) && isset($_SESSION["shopping_cart"]))
							{
								foreach($_SESSION["shopping_cart"] as $values)
							{
								 $sql ="INSERT INTO orders (`order_id`, `user_name`, `test_id`, `test_name`, `lab_name`, `appointment_date`,`bill`, `status`)
										values ('','$user','{$values['item_id']}','{$values['item_name']}','{$values['item_lab_name']}','$date','{$values['item_price']}','pending')";
										$statement = $db->prepare($sql);
										$statement->execute();
							}
							if ($statement) {
								echo '<h1 class="text-success">We have recieved your bookings.</h1>';
                unset($_SESSION['shopping_cart']);
					
								// header("location: my_account.php");
								 //exit;
							 } else {
								echo 'Already booked this test';
								header("location: my_account2.php");
								exit;
							}
							//echo 'Information not updated successfully';
						}
					}
				
					// }
					// print_r($_SESSION['shopping_cart']);
					?>
          <div class="date">
                <input type="date" class="btn btn-default" name="appointment_date" id="date">
                <!-- <input type="text" class="form-control btn btn-default" id="startDate" name="appointment_date" placeholder="dd/mm/yyyy" readonly /> -->
                <input type="submit" class="btn btn-default" value="check_out" name="action">
           
            </form>
            </div>
			</a>
      <br>
			<a href="profile.php" class="btn btn-outline-secondary btn-round">View Orders</a>
			<a href="test.php?action=add&test_id=&lab_id=" class="btn btn-outline-secondary btn-round">Back to cart</a>
				  </div>
				  
				</div>
			  </div>
			</div>
		  </div>
		</div>
  
		<!-- <div class="separator separator-bottom separator-skew zindex-100" id="about">
		  <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
		  </svg>
		</div> -->
	  </div>




<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
 
</body>

</html>