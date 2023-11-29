<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $student_id = $_POST['st_id'];
        $cls_id = $_POST['cl_id'];
        $st_nm = $_POST['st_name'];
        $us_nm = $_POST['us_name'];
        $pss = $_POST['pass'];
        $ag = $_POST['age'];
        $gm_lvl = $_POST['gm_level'];
       
         $insert = mysqli_query($conn,"INSERT INTO student (studentID , classID , studentname , username , password , age , gamelevel) VALUES ('$student_id' , '$cls_id' , '$st_nm' , '$us_nm' , '$pss' , '$ag' , '$gm_lvl')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>