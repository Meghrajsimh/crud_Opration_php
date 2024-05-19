<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upadate Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Add Bootstrap JS (jQuery is required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .error{
           color:red;
           font-size: smaller;
        }
        form{
            position: relative;
            left: 25rem;
        }
        .scroll {
          width: 30em;
          height: 435px;
          overflow:auto;
          background-color:blanchedalmond ; 
          padding: 10px 50px;
          border-radius: 8px;
          position: relative;
          right: 5em;
      }

    </style>
</head>
<body>
    <?php
    
          require("./connection.php");

          $id = $_GET['id'];
          $data = "SELECT * FROM `userinfromations` WHERE student_id=$id";
          $sql = mysqli_query($connection, $data);
          $row = $sql->fetch_assoc();
    
    ?>
    <h1 style="text-align: center;">Update Your Data</h1>
    <div class="container mt-5">
        <form style="width: 300px;" id="form" action="./updateData.php?id=<?php echo $row['student_id']?>" method="post">
            <div class="scroll">
                First Name <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'] ?>" /> 
                Last Name: <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>" /> 
                Age: <input type="number" name="age" class="form-control" value="<?php echo $row['age'] ?>" /> 
                Phone Number: <input type="number" class="form-control" name="phone_number" value="<?php echo $row['phone_number']?>" /> <br>

                <lable for="gender"  style="margin-top:20px;">Gender:</lable>
                    <input type="radio"   name="gender" value="Male"
                        <?php 
                            if( $row['gender'] == 'Male') {
                                echo "checked";
                            }
                        ?>
                    />Male
                    <input type="radio"  name="gender" value="Female"
                    <?php 
                        if( $row['gender'] == 'Female') {
                                echo "checked";
                            }
                    ?>
                    />Female <br>

                    <label for="selectCountry">State:</label><br>
                    <select  class="form-control" name="state">
                        <option value="">select</option>
                        <option value="gujarat"
                        <?php 
                                if( $row['state'] == 'gujarat') {
                                    echo "selected";
                                }
                        ?>
                        >Gujarat</option>

                        <option value="rajasthan"
                        <?php 
                                if( $row['state'] == 'rajasthan') {
                                    echo "selected";
                                }
                        ?>
                        >Rajasthan</option>
                        <option value="maharastra"
                        <?php 
                                if( $row['state'] == 'maharastra') {
                                    echo "selected";
                                }
                        ?>
                        >maharastra</option>
                        <option value="madhyapradesh"
                        <?php 
                                if( $row['state'] == 'madhyapradesh') {
                                    echo "selected";
                                }
                        ?>
                        >Madhya pradesh</option>
                        <option value="westbengal" 
                        <?php 
                                if( $row['state'] == 'westbengal') {
                                    echo "selected";
                                }
                        ?>
                        >West bengal</option>
                        <option value="punjab" 
                        <?php 
                                if( $row['state'] == 'punjab') {
                                    echo "selected";
                                }
                        ?>
                        >Punjab</option>
                        <option value="delhi"
                        <?php 
                                if( $row['state'] == 'delhi') {
                                    echo "selected";
                                }
                        ?>
                        >Delhi/option>
                    </select><br>

                    <label for="course">Courses:</label>
                    <input type="radio" name="course" value=1
                                <?php 
                                    if( $row['course_id'] == 1) {
                                        echo "checked";
                                    }
                                ?>
                    />PHP
                    <input type="radio" name="course" value=2
                                <?php 
                                    if( $row['course_id'] == 2) {
                                        echo "checked";
                                    }
                                ?>
                    />DBMS
                    <input type="radio" name="course" value=3
                                <?php 
                                    if( $row['course_id'] == 3) {
                                        echo "checked";
                                    }
                                ?>
                    />DSA <br>

                    <label for="addres">Address</label><br>
                    <textarea class="form-control" name="addres" rows=5 maxlength=2000><?php echo $row['address']?></textarea> 
                Email: <input class="form-control" type="text" name="email" value="<?php echo $row['email']?>">  
                Password: <input class="form-control" type="text" name="user_password" value="<?php echo $row['user_password'] ?>" /> <br>  
            </div> 
            <input class="btn btn-primary" style="margin-top: 20px;margin-left:7.5em;" type="submit" />
                
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" ></script>
<script src="validate.js"></script>
</html>