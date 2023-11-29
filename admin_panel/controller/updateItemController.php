<?php
    include_once "../config/dbconnect.php";

    $stu_id=$_POST['studID'];
    $stu_clas= $_POST['clas'];
    $stu_name= $_POST['s_name'];
    $su_name= $_POST['u_name'];
    $stup_word= $_POST['p_word'];
    $stu age= $_POST['age'];
    $stug_level= $_POST['g_level'];

    
    $updateItem = mysqli_query($conn,"UPDATE student SET 
        classID='$stu_clas', 
        studentname='$stu_name', 
        username=$su_name,
        password=$stup_word,
        gamelevel='$stug_level' 
        WHERE studentID=$stu_id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>