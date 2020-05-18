<?php 
if(isset($update))
{
$sql=mysqli_query($db,"select * from users where username='$admin' and password='$op' ");
	if(mysqli_num_rows($sql))
	{
		if($np==$cp)
		{
		mysqli_query($db,"update users set password='$np' where username='$admin' ");	
		echo "<h3 style='color:blue'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>Passwords doesn't match</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Old Password doesn't match</h3>";	
	}
	
}
?>
	
<div class="row container">
<form method="post" enctype="multipart/form-data">
<table class="center highlight">
<h1>Update your Password</h1><hr>
	<tr style="height:40">
		<th style="text-align: center">Current Password</th>
		<td><input type="password" name="op" class="form-control"required/></td>
	</tr>
	
	<tr>	
		<th style="text-align: center">New Password</th>
		<td><input type="password" name="np" class="form-control"required/>
		</td>
	</tr>
	
	<tr>	
		<th style="text-align: center">Confirm Password</th>
		<td><input type="password" name="cp" class="form-control"required/>
		</td>
	</tr>
	
	<!-- <tr>
		<td colspan="2" align="center">
			
		</td>
	</tr> -->
</table> 
<input type="submit" class="btn btn-primary offset-m7" value="Update Password" name="update" required/>
</form>
</div>