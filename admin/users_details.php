<script>
	function delUser(id)
	{
		if(confirm("You want to delete this User ?"))
		{
		window.location.href='delete_user.php?id='+id;	
		}
	}
	function updateUser(id)
	{
		if(confirm("You want to grant admin rights to this User ?"))
		{
		window.location.href='update_user.php?id='+id;	
		}
	}
</script>


<div class="container row ">
<!-- buttons -->

    <div class=" waves-effect waves-light btn" style="background-color: #78bcc4"> 
        <a href="dashboard.php?option=add_user" style="font-size: 16px;" >Add User</a>
    </div>
    <div class=" waves-effect waves-light btn" style="background-color: #78bcc4"> 
        <a href="dashboard.php?option=search_users" style="font-size: 16px;" >Search User</a>
    </div>
</div>
<!-- buttons -->
<?php
    include 'db_connect.php';
    $user = $_SESSION['admin_logged_in'];
    $sql = mysqli_query($db, "select * from users where role = 'user'");
    //$res = mysqli_num_rows($sql);
    while($res = mysqli_fetch_assoc($sql))
    {
?>


<div class="col s12">
    <div class="card horizontal">
      <div class="card-image">
            <img class="circle" src="../img/users/<?php echo $res['image'];?>" style="height: 313.75px; width: 300.75px !important;">
            <span class="card-title"><?php echo $res['username'];?></span>
      </div>
      <div class="card-stacked">
        <div class="card-content">
            <h5><?php echo $res['email'];?></h5>
            <h6><?php echo $res['phone'];?></h6>
            <h6><?php echo $res['gender'];?></h6>
            <h6><?php echo $res['address'];?></h6>
            <h6><?php echo $res['role'];?></h6>
        </div>
        <div class="card-action">
            <span><a href="#" onclick="updateUser('<?php echo $res['user_id']; ?>')" class="btn waves-effect waves-light " style="background-color: #78bcc4">Make Admin</a></span>&nbsp; &nbsp;
            <span><a href="#" onclick="delUser('<?php echo $res['user_id']; ?>')" class="btn waves-effect waves-light" style="background-color: #f7444e">Delete</a></span>                       
        </div>
      </div>
    </div>
</div>
<?php
    }
?>
  