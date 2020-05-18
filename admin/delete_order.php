<?php 
include('db_connect.php');

$id=$_GET['id'];

$sql=mysqli_query($db,"select * from orders where order_id='$id' ");
$res=mysqli_fetch_assoc($sql);

// $img=$res['image'];
// unlink("../img/users/$img");

if(mysqli_query($db,"UPDATE `orders` SET `status` = 'completed' WHERE `orders`.`order_id` = $id"))
{
header('location:dashboard.php?option=orders');	
}

?>