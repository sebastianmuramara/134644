
<div class="container p-5">

<h4>Edit Student Details</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM student WHERE studentID='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $classID=$row1["classID"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="studID" value="<?=$row1['studentID']?>" hidden>
    </div>
    <div class="form-group">
      <label for="clas">Class ID:</label>
      <input type="text" class="form-control" id="clas" value="<?=$row1['classID']?>">
    </div>
    <div class="form-group">
      <label for="s_name">Student Name:</label>
      <input type="text" class="form-control" id="s_name" value="<?=$row1['studentname']?>">
    </div>
    <div class="form-group">
      <label for="u_name">Username:</label>
      <input type="text" class="form-control" id="u_name" value="<?=$row1['username']?>">
    </div>
    <div class="form-group">
      <label for="p_word">Password:</label>
      <input type="text" class="form-control" id="p_word" value="<?=$row1['password']?>">
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" value="<?=$row1['age']?>">
    </div>
    <div class="form-group">
      <label for="g_level">Game Level:</label>
      <input type="number" class="form-control" id="g_level" value="<?=$row1['gamelevel']?>">
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>