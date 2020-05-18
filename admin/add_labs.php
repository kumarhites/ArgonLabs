<?php 
include 'db_connect.php';
extract($_REQUEST);
if(isset($add))
{
    $sql=mysqli_query($db,"select * from labs where username='$username'");
	if(mysqli_num_rows($sql))
	{
	echo "this user is already added";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($db,"insert into labs(lab_id, lab_name, lab_address, lab_phone, lab_details, lab_ratings, lab_image) values('','$lab_name','$lab_address','$lab_phone','$lab_details','$lab_ratings', '$img')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"./img/labs/".$_FILES['img']['name']);
    echo "User added successfully";
    header('location:dashboard.php?option=labs');
	}
}
?>
<div class="container">
    <h3>Add a new Lab</h3>
    <form method="post" enctype="multipart/form-data" class="col s12" autocomplete="off" autofill="off">

        <div class="row">
            <div class="input-field col s6 card">
                <i class="las la-flask prefix"></i>
                <input name="lab_name" id="lab_name" type="text" class="validate">
                <label for="lab_name">Lab Name</label>
            </div>
            
            <div class="input-field col s6 card">
                <i class="las la-phone prefix"></i>
                <input name="lab_phone" id="phone" type="text" maxlength="10" class="validate">
                <label for="phone">Phone</label>
            </div>

        </div>

        
        <div class="row">
            <div class="input-field row s12 card">
                <i class="las la-map-pin prefix"></i>
                <input name="lab_address" id="address" type="text" class=" materialize-textarea"></input>
                <label for="address">Address</label>
            </div>
        </div>

            <div class="row">
                <div class="input-field row s12 card" style="padding: 16px 0 0 0">
                    <i class="las la-info prefix"></i>
                    <textarea name="lab_details" id="details" type="text" class=" materialize-textarea"></textarea>
                    <label for="details">Details</label>
                </div>
            </div>

            <div class="row  s12">
            <div class="input-field card row s12"> 
                <input  type="file" name="img" id="image">
            </div>
        </div>
        <div class="row  s12 card">
            <div class="col ">
    <!-- rating -->
        <p><i class="lar la-star"></i>&ensp;Rating: &emsp;&emsp;&emsp;
            <label>
                <input name="lab_ratings" type="radio"  value="1" />
                <span>1</span>
            </label>&emsp;&emsp;&emsp;
       
            <label>
                <input name="lab_ratings" type="radio"  value="2" />
                <span>2</span>
            </label>&emsp;&emsp;&emsp;
       
            <label>
                <input name="lab_ratings" type="radio"  value="3" />
                <span>3</span>
            </label>&emsp;&emsp;&emsp;
        
            <label>
                <input name="lab_ratings" type="radio"  value="4" />
                <span>4</span>
            </label>&emsp;&emsp;&emsp;
        
            <label>
                <input name="lab_ratings" type="radio"  value="5" />
                <span>5</span>
            </label>
        </p>
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
