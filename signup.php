<?php 
include 'db_connect.php';
extract($_REQUEST);
if(isset($add))
{
    $sql=mysqli_query($db,"select * from users where username='$username'");
	if(mysqli_num_rows($sql))
	{
	echo "<script>alert('This user is already added')</script>";	
	}		
	else
	{	
        // $img=$_FILES['img']['name'];
        mysqli_query($db,"insert into users(user_id, username, email, password, phone, gender, role, address, image, prescription) values('','$username','$email','$password','$phone','$sex', 'user','$address', '$img','')");	
        // move_uploaded_file($_FILES['img']['tmp_name'],"../img/users/".$_FILES['img']['name']);
        echo "<script>alert('User added successfully')</script>";
        header('location:login.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Materialize.CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Materialize.JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="login.css">
</head>

<body >
    <div class="container">
        <div class="col s12 m7">

            <div class="card horizontal" style="height: 580px;">
                <!-- <div class="card-image">
                    <img src="./svg/signup-image.webp">
                </div> -->
                <div class="vertical-rule"></div>
                <div class="card-stacked">
                    <div class="card-content">
                        <br>

                        <br>
                        <div class="container">

                            <form action="#" method="post">
                                <div class="input-field col s2 username">
                                    <input type="text" name="username" id="username" autocomplete="off" autofocus required>
                                    <label for="username">Username</label>
                                </div>
                                <div class="input-field col s2 username">
                                    <input type="text" name="email" id="email" autocomplete="off" autofocus required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field col s2 password">
                                    <input type="password" name="password" id="password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="input-field col s2 password">
                                    <input type="text" name="phone" id="phone" required>
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="row">
                                    <p>
                                        &emsp; <b> Gender :</b>
                                        <label>
                                            <input value="male" name="sex" type="radio" checked />
                                            <span>Male</span>
                                        </label>
                                        &emsp;
                                        <label>
                                            <input value="female" name="sex" type="radio" />
                                            <span>Female</span>
                                        </label>
                                    </p>

                                </div>

                                <div class="input-field col s2 password">
                                    <input type="text" name="address" id="address" required>
                                    <label for="address">Address</label>
                                </div>

                                <!-- <div class="row  s12">
                                    <div class="input-field card row s12">
                                        <input type="file" name="img" id="image">
                                    </div>
                                </div> -->


                                <div align="center">

                                    <input type="submit" value="Signup" name="add" class="waves-effect waves-light btn">
                                    <!-- <a name="login" class="waves-effect waves-light btn" style="width: 200px">Login</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div><div class="card-action">
            <p style="text-align: center">Alredy have an account? <a href="login.php">Login</a></p>
        </div>
        </div>
        
    </div>



</body>

</html>
