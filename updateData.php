<?php
    require('./connection.php');

    $id = $_GET['id'];
    $firstNameValue = $_POST['first_name'];
    $lastNameValue =  $_POST['last_name'];
    $ageValue = $_POST['age'];
    $phoneValue = $_POST['phone_number'];
    $emailValue = $_POST['email'];
    $passwordValue = $_POST['user_password'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $address = $_POST['addres'];
    $course =  $_POST['course'];
   
   

    $update = "UPDATE `userinfromations` SET `first_name` = '$firstNameValue' , `last_name` = '$lastNameValue', `age` = '$ageValue', 
                                             `phone_number` = '$phoneValue', `email` = '$emailValue', `user_password` = '$passwordValue',
                                              `gender` = '$gender',`state` = '$state', `address` = '$address', `course_id` =  $course   WHERE student_id = $id";

    $sql = mysqli_query($connection,$update);

    if(!$sql) {
        echo $connection->error;
    }else {
        header('location:userData.php');
    }

    


?>