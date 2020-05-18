<?php
  session_start();
  error_reporting(1);
  include 'db_connect.php';
  $ar = extract($_REQUEST);
  if(isset($login))
  {
    if($username=="" || $password=="")
    {
      $error = "<p style='color: red'>Enter all the details</p>";
    }
    else
    {
      $sql=mysqli_query($db, "select * from users where role = 'admin' && username = '$username' && password = '$password'");
      if(mysqli_num_rows($sql))
      {
        $_SESSION['admin_logged_in'] = $username;
        header('location:dashboard.php');
      }
      else
      {
        $error = "<p style='color: red'>Invalid login details</p>";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argon Labs</title>
     <!-- Materialize.CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Materialize.JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>  

     <!-- custom css -->
     <link rel="stylesheet" href="./index.css">
</head>
<body>
    <div class="container">
      <div class="col s12 m7">
       
        <div class="card horizontal">
          <div class="card-image">
            <img src="../svg/signin-image.webp">
          </div>
          <div class="vertical-rule"></div>
          <div class="card-stacked">
            <div class="card-content">
              <h3 style="padding-bottom: 5px; font-family: 'Playfair Display';" align="center">Welcome Admin</h3>
              <p style="padding-bottom: 20px; font-family: 'Roboto';" align="center">Get access to your orders, lab tests & doctor consultations</p>
              <br>
            
                
				  <br>
				  <div class="container" style="margin-top: 80px">
				  <?php echo @$error;?>
				  <form action="#" method="post">
					<div class="input-field col s2 username">
						<input type="text" name="username" id="username" autocomplete="off" autofocus required>
						<label for="username">Username</label>
					</div>
					<div class="input-field col s2 password" >
						<input type="password" name="password" id="password" required>
						<label for="password">Password</label>
					</div>
					<div class="card-action" align="center" style="margin-top: 100px">
						<input type="submit" value="Login" name="login" class="waves-effect waves-light btn" >
						<!-- <a name="login" class="waves-effect waves-light btn" style="width: 200px">Login</a> -->
					</div>
				  </form>
				  </div>
              </div>
            </div>
           
          </div>
        </div>
        <div class="card-action">
          <!-- <p style="text-align: center">Dont have an account? <a href="#">Sign up</a></p> -->
        </div>
      </div>
     
    </div>
    
</body>
</html>