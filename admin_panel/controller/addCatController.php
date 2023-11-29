<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $teachname = $_POST['t_name'];
        $cl_id = $_POST['c_id'];
       
         $insert = mysqli_query($conn,"INSERT INTO teachers (teacherName , classID) VALUES ('$teachname' , '$cl_id')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?teachers=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?teachers=success");
         }
     
    }
        
?>