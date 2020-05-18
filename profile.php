<?php 
session_start();
error_reporting(1);
include 'db_connect.php';
$user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="new.css">
</head>
<body>
<div class="container-fluid"><!--Primary Id-->
  <h1 class="text-center text-primary">Appointment Details</h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive"style="height:150px;">
               <tr>
                    <th>Order  ID</th>
                    <th>User Name</th>
                    <th>Test Name</th>
                    <th>Lab Name</th>
                    <th>Appointment Date</th>
                    <th>Bill</th>
                    <th>Status</th>

					<th>Cancel</th>
               </tr>

<?php 
$sql= mysqli_query($db,"select * from orders where user_name='$user' "); 
while($result=mysqli_fetch_assoc($sql))
{
    $oid=$result['order_id'];
    echo "<tr>";
    echo "<td>".$result['order_id']."</td>";
    echo "<td>".$result['user_name']."</td>";
    echo "<td>".$result['test_name']."</td>";
    echo "<td>".$result['lab_name']."</td>";
    echo "<td>".$result['appointment_date']."</td>";
    echo "<td>".$result['bill']."</td>";
    echo "<td>".$result['status']."</td>";

    if($result['status']=='completed')
    {
        echo  "<td>--</td>";
        echo "</tr>";
    }
    else
    {
        echo "<td><a href='cancel_order.php?order_id=$oid' style='color:Red'>Cancel</a></td>";
        echo "</tr>";
    }
   
}                         
               ?> 
          </table>

    </div>
    </div>
  </div>
  <h4 style="font-family:serif;text-align:center;">*Payable at Lab only.</h4>
  <h3 style="font-family:serif;text-align:center;"> <a href="index.php">Go back to home page!</a></h3></div>

</body>
</html>
