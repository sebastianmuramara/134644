
<div >
  <h2>Students</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Student ID</th>
        <th class="text-center">Class ID</th>
        <th class="text-center">Student Name</th>
        <th class="text-center">Username</th>
        <th class="text-center">Password</th>
        <th class="text-center">Age</th>
        <th class="text-center">Game Level</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from student";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <!-- <td><?=$count?></td> -->
      <!-- <td><img height='100px' src='<?=$row["product_image"]?>'></td> -->
      <td><?=$row["studentID"]?></td>
      <td><?=$row["classID"]?></td>
      <td><?=$row["studentname"]?></td>
      <td><?=$row["username"]?></td>
      <td><?=$row["password"]?></td>      
      <td><?=$row["age"]?></td> 
      <td><?=$row["gamelevel"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['studentID']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['studentID']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Student
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Student</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addItemController.php" method="POST">
            <div class="form-group">
              <label for="c_name">Student ID:</label>
              <input type="text" class="form-control" name="st_id" required>
            </div>
            <div class="form-group">
              <label for="c_name">Class ID:</label>
              <input type="text" class="form-control" name="cl_id" required>
            </div>
            <div class="form-group">
              <label for="c_name">Student Name:</label>
              <input type="text" class="form-control" name="st_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Username:</label>
              <input type="text" class="form-control" name="us_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Password:</label>
              <input type="text" class="form-control" name="pass" required>
            </div>
            <div class="form-group">
              <label for="c_name">Age:</label>
              <input type="text" class="form-control" name="age" required>
            </div>
            <div class="form-group">
              <label for="c_name">Game Level:</label>
              <input type="text" class="form-control" name="gm_level" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Student</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>

  
</div>
   