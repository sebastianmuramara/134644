<div >
  <h2>Classes</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Class ID</th>
        <th class="text-center">Form ID </th>
        <th class="text-center">Class Name</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from class";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$row["classID"]?></td>
      <td><?=$row["formID"]?></td>
      <td><?=$row["className"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>