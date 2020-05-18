<?php 
include 'db_connect.php';
extract($_REQUEST);
if(isset($add))
{
    $sql=mysqli_query($db,"select * from users where username='$username'");
	if(mysqli_num_rows($sql))
	{
	echo "this user is already added";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($db,"insert into users(user_id, username, email, password, phone, gender, role, address, image, prescription) values('','$username','$email','$password','$phone','$gender', '$role','$address', '$img','')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"../img/users/".$_FILES['img']['name']);
    echo "User added successfully";
    header('location:dashboard.php?option=user_details');
	}
}
?>
<div class="container">
    <h3>Add User</h3>
    <form method="post" enctype="multipart/form-data" class="col s12" autocomplete="off" autofill="off">
        <div class="row">
            <div class="input-field col s6 card">
                <i class="lar la-user-circle prefix"></i>
                <input name="username" id="username" type="text" class="validate">
                <label for="username">Username</label>
            </div>
            <!-- </div>

        <div class="row"> -->
            <div class="input-field col s6 card">
                <i class="las la-fingerprint prefix"></i>
                <input name="password" id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6 card">
                <i class="las la-at prefix"></i>
                <input name="email" id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
            <!-- </div>
        <div class="row"> -->
            <div class="input-field col s6 card">
                <i class="las la-phone prefix"></i>
                <input name="phone" id="phone" type="text" maxlength="10" class="validate">
                <label for="phone">Phone</label>
            </div>

        </div>

        <div class="row">
            <div class="card row">
                <p>
                    &emsp; <b> Gender :</b> &emsp; &emsp;  &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp;
                    <label>
                        <input value="male" name="sex" type="radio" checked />
                        <span>Male</span>
                    </label>
                    &emsp; &emsp;
                    <label>
                        <input value="female" name="sex" type="radio" />
                        <span>Female</span>
                    </label>
                </p>
                </p>
            </div>
            <!-- </div>

        <div class="row"> -->
            <div class="card row">
                <p>
                    &emsp; <b> Role :  </b>&emsp; &emsp;  &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp; &emsp;
                    <label>
                        <input value="admin" name="role" type="radio" checked />
                        <span>Admin</span>
                    </label>
                    &emsp; &emsp;
                    <label>
                        <input value="user" name="role" type="radio" />
                        <span>User</span>
                    </label>
                </p>
                </p>
            </div>
        </div>
        <div class="row">
        <div class="input-field row s12 card">
            <i class="las la-map-pin prefix"></i>
            <input name="address" id="address" type="text" class=" materialize-textarea"></input>
            <label for="address">Address</label>
        </div>
        </div>

        <div class="row  s12">
            <div class="input-field card row s12"> 
                <input  type="file" name="img" id="image">
            </div>
        </div>

        <div class="row">
            <div class="input-field col offset-m10"> 
            <input class="btn-flat waves-effect waves-teal" type="submit" name="add" style="outline: none; border: none;">
            </input>
            </div>
        </div>
        
        

    </form>
</div>
