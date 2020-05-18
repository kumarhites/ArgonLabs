<?php 
session_start();
// unset($_SESSION['shopping_cart']);
//$db = mysqli_connect("localhost", "root", "", "zenrx");
include 'db_connect.php';
// $lab_name = $_GET['lab_name'];
// $test_id = $_GET['test_id'];


if(isset($_SESSION['user'])=="")
{
	echo "<script>alert('You need to be logged in to proceed')</script>";
	header("location:login.php") ;

}
$lab_name = $_SESSION['lab_name'];
$user= $_SESSION['user'];

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"],
				'lab_name' 			=>	$_GET["lab_name"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"],
			'lab_name' 			=>	$_GET["lab_name"]
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
				echo '<script>window.location="cart.php"</script>';
			}
		}
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
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-default">
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
              <div class="col-lg-8 text-center">
                <h1 class="text-white display-1">Your Cart</h1>
                <p class="text-white display-8"></p>
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

<!-- ************************************************************************************************************************************ -->
<!-- ************************************************************************************************************************************ -->

    <div class="container">
        <?php
				$query = "SELECT * FROM tests  ORDER BY test_id ASC";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
        <div class="col-md-4">
            <form method="post" action="cart.php?action=add&id=<?php echo $row["test_id"]; ?>&lab_name<?php echo $_GET["lab_name"]?>">
                <input type="hidden" name="quantity" value="1" class="form-control" />

                <input type="hidden" name="hidden_name" value="<?php echo $row["test_name"]; ?>" />

                <input type="hidden" name="hidden_price" value="<?php echo $row["test_price"]; ?>" />

                <!-- <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /> -->
            </form>
        </div>
        <?php
					}
				}
			?>
        <div style="clear:both"></div>
        <br />
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="20%">Lab Name</small></th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
                <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["lab_name"]; ?></td>
                    <td>$ <?php echo $values["item_price"]; ?></td>
                    <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                    <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>
                <?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">₹ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
            </table>
            <?php
					}
					else
					{
						echo "cart is empty";
						
					}
					
					?>
            <form action="" method="get">
                
                <?php
						
						if($_GET["action"] == 'check_out')
						{
							$date = $_GET['appointment_date'];
							// echo $date;
							$check = mysqli_query($db, "SELECT `user_name`, `test_id`, `appointment_date` FROM orders where `user_name` = '$user' and `appointment_date` = '$date'");
							if(mysqli_num_rows($check))
							{
								echo "One or more tests are already booked for this ". $date;
								
							}
							elseif(isset($date) && isset($_SESSION["shopping_cart"]))
							{
								foreach($_SESSION["shopping_cart"] as $values)
							{
								 $sql ="INSERT INTO orders (`order_id`, `user_name`, `test_id`, `test_name`, `lab_name`, `appointment_date`,`bill`)
										values ('','$user','{$values['item_id']}','{$values['item_name']}','{$values['lab_name']}','$date','{$values['item_price']}')";
										$statement = $db->prepare($sql);
										$statement->execute();
							if ($statement) {
								echo 'Information updated successfully';
                                unset($_SESSION['shopping_cart']);
					
								// header("location: my_account.php");
								exit;
							} else {
								echo 'Already booked this test';
								// header("location: my_account2.php");
								exit;
							}
						}
					}
				
					}
					// print_r($_SESSION['shopping_cart']);
					?>
                <input type="date" class="btn btn-default" required name="appointment_date" id="">
                <input type="submit" class="btn btn-default" value="Schedule Appointment" name="action">

            </form>

        </div>
    </div>
    <br />
</body>

</html>









    <!-- table
    <table class="table">
    <thead>
          <h3>Order Details</h3>
        <tr>
            <th class="text-center">#</th>
            <th>Test Name</th>
            <th>Job Position</th>
            <th>Since</th>
            <th class="text-right">Salary</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">1</td>
            <td>Andrew Mike</td>
            <td>Develop</td>
            <td>2013</td>
            <td class="text-right">&euro; 99,225</td>
            <td class="td-actions text-right">
              <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                <i class="ni ni-circle-08 pt-1"></i>
              </button>
              <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                <i class="ni ni-settings-gear-65 pt-1"></i>
              </button>
              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm " data-original-title="" title="">
                <i class="ni ni-fat-remove pt-1"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td class="text-center">2</td>
            <td>John Doe</td>
            <td>Design</td>
            <td>2012</td>
            <td class="text-right">&euro; 89,241</td>
            <td class="td-actions text-right">
              <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                <i class="ni ni-circle-08 pt-1"></i>
              </button>
              <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                <i class="ni ni-settings-gear-65 pt-1"></i>
              </button>
              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm " data-original-title="" title="">
                <i class="ni ni-fat-remove pt-1"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td class="text-center">3</td>
            <td>Alex Mike</td>
            <td>Design</td>
            <td>2010</td>
            <td class="text-right">&euro; 92,144</td>
            <td class="td-actions text-right">
              <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm btn-simple" data-original-title="" title="">
                <i class="ni ni-circle-08 pt-1"></i>
              </button>
              <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm btn-simple" data-original-title="" title="">
                <i class="ni ni-settings-gear-65 pt-1"></i>
              </button>
              <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm btn-simple" data-original-title="" title="">
                <i class="ni ni-fat-remove pt-1"></i>
                </button>
            </td>
        </tr>
    </tbody>
</table>

 -->



<!-- table ends -->





  
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