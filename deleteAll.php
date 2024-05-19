<?php 
    require("./connection.php");    
    $deleteAllData = "TRUNCATE TABLE `userinfromations`";
    $sqlOne = mysqli_query($connection,$deleteAllData);

    if(!$sqlOne) {
        echo $connection->error;
    }else {
        header('location:userData.php');
    }

?>