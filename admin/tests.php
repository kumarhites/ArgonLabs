<script>
	function delLab(id)
	{
		if(confirm("You want to delete this User ?"))
		{
		window.location.href='delete_lab.php?id='+id;	
		}
	}
	function addTest(id)
	{
		if(confirm("You want to grant admin rights to this User ?"))
		{
		window.location.href='add_tests.php?id='+id;	
		}
	}
</script>



<div class="row">
<h4>All Available Tests.</h4>

<?php
    include 'db_connect.php';
    $user = $_SESSION['admin_logged_in'];
    $sql = mysqli_query($db, "SELECT t.test_name, t.test_type, t.test_price, t.test_details, l.lab_name 
                                from tests t, labs l 
                                where t.lab_id = l.lab_id");
    //$res = mysqli_num_rows($sql);
    while($res = mysqli_fetch_assoc($sql))
    {
?>

    <div class="col card  lime lighten-5">
        <div class="card-content">
          <span class="card-title"><b><?php echo $res['test_name'];?></b></span>
          <span class="card-title">Lab : <?php echo $res['lab_name'];?></span>
          
          <p style="line-height: 40px; font-weight: bold;">Test Type : <?php echo $res['test_type'];?></p>
          <p style="line-height: 40px;"><b>Details : </b><?php echo $res['test_details'];?></p>
        </div>
        <div class="card-action">
        <p style="line-height: 40px; font-weight: bold;">Price : ₹<?php echo $res['test_price'];?></p>
          <!-- <a href="#">This is a link</a>
          <a href="#">This is a link</a> -->
        </div>
      </div>

<?php
    }
?>
</div>