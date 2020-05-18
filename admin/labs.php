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
<form action="#" method="get">
<div class="container">
    <!-- <div class="search-wrapper users-search">
                <input id="search" placeholder="Search Users"><a href="dashboard.php?option=search_user"><i class="las la-add"></i></a>
    </div> -->
</div>
<!-- buttons -->
<div class=" waves-effect waves-purple btn" style="background-color: #78bcc4;"> 
    <a href="dashboard.php?option=add_labs" style="font-size: 16px;" ></i>Add Labs</a>
</div>

<!-- buttons -->
</form>



<?php
    include 'db_connect.php';
    $user = $_SESSION['admin_logged_in'];
    $sql = mysqli_query($db, "select * from labs");
    //$res = mysqli_num_rows($sql);
    while($res = mysqli_fetch_assoc($sql))
    {
?>
    <div class="col s3 m7">
        <div class="card horizontal users_card_horizontal" style="width: 818px; height:315px">
                <div class="card-image user_img" style="max-width: 30%">
                    <img src="../img/labs/<?php echo $res['lab_image']?>" style="max-width: 87%">
                </div>
            <div class="card-stacked">
                <div class="card-content">
                    <h4 style="margin: 0.52px 0 -1.088px 0;"><?php echo $res['lab_name'];?></h4>
                    <p><?php echo $res['lab_phone'];?></p>
                    <h6 style="margin: -0.233333px 0 0.46px 0;"><?php echo $res['lab_details'];?></h6>
                    <h6><?php echo $res['lab_address'];?></h6>
                    <h6><?php echo $res['lab_ratings'];?>/5</h6>
                    <div class="offset-m7">
                        <span><a href="dashboard.php?option=add_tests&lab_id=<?php echo $res['lab_id']; ?>&lab_name=<?php echo $res['lab_name']; ?>" class="btn waves-effect waves-light " style="background-color: #78bcc4">Add Tests</a></span>&nbsp; &nbsp;
                        <span><a href="#" onclick="delLab('<?php echo $res['lab_id']; ?>')" class="btn waves-effect waves-light" style="background-color: #f7444e">Delete Lab</a></span>                       
                    </div>                  
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>
 
