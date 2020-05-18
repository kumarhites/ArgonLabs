<?php 
include('db_connect.php');
$oid=$_GET['order_id'];
$q=mysqli_query($db,"delete from  orders where order_id='$oid' ");
if($q)
{
header('location:profile.php');
}
?>