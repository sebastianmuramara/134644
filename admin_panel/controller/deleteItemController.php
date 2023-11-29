<?php

    include_once "../config/dbconnect.php";
    
    $st_id=$_POST['record'];
    $query="DELETE FROM student where studentID='$st_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Student Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>