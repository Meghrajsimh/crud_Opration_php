<?php 

    require("./connection.php"); 

    $id = $_GET['id'];
    $delete = "DELETE FROM `userinfromations` WHERE student_id = $id ";
    $sql = mysqli_query($connection,$delete);

    if(!$sql) {
        echo $connection->error ;
    }else {
        header('location:userData.php');
    }



?>