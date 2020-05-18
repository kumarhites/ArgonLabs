<?php
	session_start();
	extract($_REQUEST);
	include 'db_connect.php';
	$admin = $_SESSION['admin_logged_in'];
	$sql = mysqli_query($db, "select * from users where username = '$admin'");
	$res=mysqli_fetch_assoc($sql);
	if($admin == "")
	{
		header('loaction:index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
	<link rel="stylesheet" href="./materialize.min.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css"> -->
	<!-- <link rel="stylesheet" href="./line-awesome-1.3.0/1.3.0/css/line-awesome.min.css"> -->
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="dashboard.css">

</head>
<body>

<nav>
    <div class="nav-wrapper red lighten-1">
      <a href="dashboard.php" class="brand-logo center">ArgonLabs</a>
      
    </div>
  </nav>

	<ul id="slide-out" class="sidenav "> 
	<!-- style="transform: translateX(0px);" -->
	  <li><div class="user-view">
		<div class="background">
		  	<img src="../img/hero-bg.png">
		</div>
		<a href="dashboard.php?"><img class="circle" src="../img/users/<?php echo $res['image']?>"></a>
		<a href="#name"><span class="white-text name">hey, <?php echo $admin;?></span></a>
		<a href="#email"><span class="white-text email"><?php echo $res['email'];?></span></a>
	  </div></li>
	  <li><a class="subheader">Edit/View</a></li>
	  <li><a class="waves-effect" href="dashboard.php?option=user_details"><i class="las la-user-circle la-2x"></i>Users</a></li>
	  <li><a class="waves-effect" href="dashboard.php?option=labs"><i class="las la-vial la-2x"></i>Labs</a></li>
	  <li><a class="waves-effect" href="dashboard.php?option=tests"><i class="las la-prescription la-2x" ></i>Test</a></li>
	  <!-- <li><a class="waves-effect" href="dashboard.php?option=inbox"><i class="las la-inbox la-2x"></i>Inbox</a></li> -->
	  <li><a class="waves-effect" href="dashboard.php?option=orders"><i class="las la-shipping-fast la-2x"></i>All Orders</a></li>
	  <li><div class="divider"></div></li>
	  <li><a class="subheader">Pofile</a></li> 
	  <li><a class="waves-effect" href="dashboard.php?option=update_profile"><i class="las la-user-cog la-2x"></i>Update Profile</a></li>
	 
	  <li><div class="divider"></div></li>
	  <li><a class="waves-effect modal-trigger" href="#modal1"><i class="las la-sign-out-alt la-2x"></i>Log Out</a></li>

	</ul> 
	<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	  <!-- Modal Trigger -->

<!-- Modal Structure -->
<div id="modal1" class="modal" style="border-radius: 20px;">
  <div class="modal-content" style="border-radius: 20px;">
  <!-- <i class="las la-sign-out-alt la-10x"></i> -->
	<p style="font-size: 45px;">Oh! no you're leaving?</p>
  </div>
  <div class="modal-footer">
	<a href="#" class="modal-close waves-effect waves-green btn-flat">Just kidding</a>
	<a href="logout.php" class="modal-close waves-effect waves-green btn-flat">Yes, I am.</a>
          
  </div>
</div>

	<nav class="top-nav transparent z-depth-0 blue-text">
	
        <div class="container ">
		
          <div class="nav-wrapper">
            <div class="row">
              <div class="col s12 ">
				<?php
					@$opt = $_GET['option'];
					if($opt == "")
					{
						include('profile.php');
					}
					else
					{
						if($opt == "user_details")
						{
							include 'users_details.php';
						}
						if($opt == "add_labs")
						{
							include 'add_labs.php';
						}
						if($opt == "labs")
						{
							include 'labs.php';
						}
						if($opt == "tests")
						{
							include 'tests.php';
						}
						if($opt == "add_tests")
						{
							include 'add_tests.php';
						}
						if($opt == "update_profile")
						{
							include 'update_profile.php';
						}
						if($opt == "search_users")
						{
							include 'search_users.php';
						}
						if($opt == "add_user")
						{
							include 'add_user.php';
						}
						if($opt == "update_user")
						{
							include 'update_user.php';
						}
						if($opt == "update_admin_profile")
						{
							include 'update_admin.php';
						}
						if($opt == "orders")
						{
							include 'orders.php';
						}
					}
				?>
			  </div>
			  
            </div>
          </div>
        </div>
	  </nav>







	  	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
    	<script src="materialize.min.js"></script>

<script>
	$(document).ready(function(){
		$('.modal').modal();
		$('.sidenav').sidenav();
	
	});
</script>
</body>
</html>