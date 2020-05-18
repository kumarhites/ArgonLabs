<?php 
include('db_connect.php');

$id=$_GET['id'];

$sql=mysqli_query($db,"select * from users where user_id='$id' ");
$res=mysqli_fetch_assoc($sql);

$img=$res['image'];
unlink("../img/users/$img");

if(mysqli_query($db,"delete from users where user_id='$id' "))
{
header('location:dashboard.php?option=user_details');	
}

?>