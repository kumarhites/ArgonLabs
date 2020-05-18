<?php 
include('db_connect.php');

$id=$_GET['id'];

$sql=mysqli_query($db,"select * from users where user_id='$id' ");
$res=mysqli_fetch_assoc($sql);
if($res['role']=='admin')
{
    echo "User is already an admin";
}
else
{
    if(mysqli_query($db,"update users set role = 'admin'"))
    {
        header('location:dashboard.php?option=user_details');	
    }
}




?>