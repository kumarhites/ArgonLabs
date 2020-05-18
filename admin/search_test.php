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

<div class="container">
    <h3>Search User</h3>
    <form method="post" enctype="multipart/form-data" class="col s12" autocomplete="off" autofill="off">

        <div class="row">
            <div class="input-field col s12 card">
                <i class="las la-search prefix" style="left: 11px;"></i>
                <input name="username" id="username" type="text" class="validate">
                <label for="username">Search</label>
            </div>
            <div class="col search-btn" style="position: absolute; left: 872px;">
            <input class="btn btn-flat waves-effect waves-teal" type="submit" name="add" style="outline: none; border: none;">
            </div>
        </div>
        
      

    </form>
</div>
<?php 
include 'db_connect.php';
extract($_REQUEST);
if(isset($add))
{
    $sql=mysqli_query($db,"select * from users where tests like '%$test_name%'");
    $no = mysqli_num_rows($sql);
	if($no)
	{
        while($res = mysqli_fetch_assoc($sql))
        {
?>
     <div class="col s3 m7">
        <div class="card horizontal users_card_horizontal">
                <div class="card-image user_img" style="max-width: 30%">
                    <img src="../img/users/<?php echo $res['image']?>" style="max-width: 80%">
                </div>
            <div class="card-stacked">
                <div class="card-content">
                    <h4><?php echo $res['test_id'];?></h4>
                    <h6><?php echo $res['test_name'];?></h6>
                    <h6><?php echo $res['test_type'];?></h6>
                    <h6><?php echo $res['test_details'];?></h6>
                    <h6><?php echo $res['test_price'];?></h6>
                    <!-- <h6><?php //echo $res['role'];?></h6> -->
                    <div>
                    &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;
                        <span><a href="#" onclick="updateUser('<?php echo $res['user_id']; ?>')" class="btn waves-effect waves-light " style="background-color: #78bcc4">Make Admin</a></span>&nbsp; &nbsp;
                        <span><a href="#" onclick="delUser('<?php echo $res['user_id']; ?>')" class="btn waves-effect waves-light" style="background-color: #f7444e">Delete</a></span>                       
                    </div>                  
                </div>
            </div>
        </div>
    </div>

<?php
        }
	}
}
?>
