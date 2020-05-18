<?php 
$lab_id = $_GET['lab_id'];
$lab_name = $_GET['lab_name'];

if(isset($insert))
{
    $test_name = mysqli_real_escape_string($db, $_POST['test_name']);
    $test_type = mysqli_real_escape_string($db, $_POST['test_type']);
    $test_price = mysqli_real_escape_string($db, $_POST['test_price']);
    $test_details = mysqli_real_escape_string($db, $_POST['test_details']);
	$sql=mysqli_query($db,"SELECT * from tests where lab_id = '$lab_id' AND test_name = '$test_name'");
	
	if(mysqli_num_rows($sql))
	{
	echo "this test is already added";	
	}		
	else
	{	
	
	mysqli_query($db,"INSERT INTO `tests` (`test_id`, `lab_id`, `test_name`, `test_type`, `test_price`, `test_details`) VALUES ('', '$lab_id', '$test_name', '$test_type', '$test_price', '$test_details')");
	$last_id = mysqli_insert_id($db);
	echo "Test added successfully, Last recorded Test id is : ". $last_id;
	}
}
?>
<div class="container">
    <h3>Add a Test for <?php echo $lab_name;?></h3>
    <form method="post" enctype="multipart/form-data" class="col s12" autocomplete autofill="off">

        <div class="row">
            <div class="input-field row s12 card">
                <i class="las la-flask prefix"></i>
                <input name="test_name" id="test_name" type="text">
                <label for="test_name">Test Name</label>
            </div>
            
            <div class="row">
            <div class="col s12 card">
                <p>
                    &emsp; <b> Test Type :</b> &emsp; &emsp;  &emsp; &emsp;  &emsp; &emsp; &emsp; &emsp;
                    <label>
                        <input value="at lab" name="test_type" type="radio" checked />
                        <span>At Home</span>
                    </label>
                    &emsp; &emsp;
                    <label>
                        <input value="at home" name="test_type" type="radio" />
                        <span>At Lab</span>
                    </label>
                </p>
                </p>
            </div>
        </div>

        
        <div class="row">
            <div class="input-field col s12 card">
                <i class="las la-rupee-sign prefix"></i>
                <input name="test_price" id="test_price" type="text" maxlength="5">
                <label for="test_price">Price</label>
            </div>
        </div>

            <div class="row">
                <div class="input-field col s12 card" style="padding: 20px 0 0 0">
                    <i class="las la-info prefix"></i>
                    <textarea name="test_details" id="test_details" type="text" class=" materialize-textarea"></textarea>
                    <label for="test_details">Details</label>
                </div>
            </div>


        <div class="row">
            <div class="input-field col offset-m10"> 
                <input class="btn-flat waves-effect waves-teal" type="submit" name="insert" style="outline: none; border: none;">
            </div>
        </div>
        
      

    </form>
</div>
