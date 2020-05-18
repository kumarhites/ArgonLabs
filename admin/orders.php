<script>
	function delOrder(id)
	{
		if(confirm("Confirm Order?"))
		{
		window.location.href='delete_order.php?id='+id;	
		}
	}
</script>



<div class="row">
<h4>Orders</h4>
<hr>

<?php
    include 'db_connect.php';
    $user = $_SESSION['admin_logged_in'];
    $sql = mysqli_query($db, "SELECT * from orders");
    //$res = mysqli_num_rows($sql);
    while($res = mysqli_fetch_assoc($sql))
    {
?>

    <div class="col card s5">
        <div class="card-content">
          <span class="card-title"style="line-height: 50px; font-weight: bold;">Test Name: <?php echo $res['test_name'];?></span>
         
          <span class="card-title">Lab Name: <?php echo $res['lab_name'];?></span>
          <hr>
          <span class="card-title">UserName : <b><?php echo $res['user_name'];?></b></span>
          
          <p style="line-height: 40px; font-weight: bold;">Order ID : <?php echo $res['order_id'];?></p>
          <p style="line-height: 40px;"><b>Appointment Date : </b><?php echo $res['appointment_date'];?></p>
          <p style="line-height: 40px;"><b>Order Status : </b><?php echo $res['status'];?></p>
          <!-- <p style="line-height: 40px;"><b>Details : </b><?php //echo $res['appointment_date'];?></p> -->
          <!-- <p style="line-height: 40px;"><b>Details : </b><?php echo $res['bill'];?></p> -->
        </div>
        <div class="card-action">
        <p style="line-height: 40px; font-weight: bold;">Price : ₹<?php echo $res['bill'];?> *payable to the Care Representative</p>
          <!-- <a href="#">This is a link</a>
          <a href="#">This is a link</a> -->
          <span><a href="#" onclick="delOrder('<?php echo $res['order_id']; ?>')" class="btn waves-effect waves-light" style="background-color: #f7444e">Complete</a></span>                       

        </div>
      </div>

<?php
    }
?>
</div>