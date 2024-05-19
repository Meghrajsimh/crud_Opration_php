        <?php 

            require("./connection.php");

            $first_name =  $_POST['first_name'];
            $last_name =   $_POST['last_name'];
            $age =         $_POST['age'];
            $phone =       $_POST['phone_number'];
            $email =       $_POST['email'];
            $password =    $_POST['password'];
            $gender =      $_POST['gender'];
            $state =       $_POST['state'];
            $addres =      $_POST['addres'];
            $course =      $_POST['course'];
            // $strCourse =   implode(",",$course);
  
            foreach($course as $item) {
                $insertData = $connection->prepare("INSERT INTO `userinfromations`(
                       `first_name`, `last_name`, `age`, `phone_number`, `gender`, `state`,`address`, `email`,`user_password`,`course_id`) VALUES (?, ?, ?, ? , ?, ?, ?, ?, ?, ?);");
                $insertData->bind_param("ssiisssssi", $first_name, $last_name, $age, $phone, $gender, $state, $addres, $email, $password, $item);
                $insertData->execute();
            }

            // $insertData = $connection->prepare("INSERT INTO `userinfromations`(
            //     `first_name`, `last_name`, `age`, `phone_number`, `gender`, `state`,`addres`, `email`,`user_password`,``) VALUES (?, ?, ?, ? , ?, ?, ?, ?, ?);");
            
            header('location:userData.php');
        ?>
