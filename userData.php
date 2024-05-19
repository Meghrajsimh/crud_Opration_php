<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add Bootstrap JS (jQuery is required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .error {
            color: red;
            font-size: smaller;
        }

        .scroll {
            width: 30em;
            height: 400px;
            overflow: auto;
            background-color: blanchedalmond;
            padding: 10px 50px;
            border-radius: 8px;
            margin-left: 19em;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="userData.css">
    <title itle>Document</title>

</head>

<body>
    <button class=" insertBtn"> <a class="a, btn btn-primary" href="insertForm.php">Add User</a></button>
    <button class=" insertOne"><a class="btn btn-primary ,a" href="course.php">Course</a></button>

    <div class="insertform">
        <form style="width: 300px; display:none"  id="form" action="./insertData.php" method="post">
            <div class="form-group, scroll">
                <label for="firstName">First Name<span style="color:red;">*</span></label>
                <input type="text" class="form-control" placeholder="first name" name="first_name" autofocus>
                <label for="lastName">Last Name<span style="color:red;">*</span></label>
                <input type="text" class="form-control" placeholder="last name" name="last_name">
                <label for="age">Age<span style="color:red;">*</span></label>
                <input type="number" class="form-control" placeholder="age" name="age">
                <label for="phoneNumber">Phone Number<span style="color:red;">*</span></label>
                <input type="number" class="form-control" placeholder="phone number" name="phone_number"><br>

                <lable for="gender" style="margin-top:20px;">Gender<span style="color:red;">*</span></lable><br>
                <input type="radio" name="gender" value="Male" data-error=".error1" />Male
                <input type="radio" name="gender" value="Female" data-error=".error1" />Female <br>
                <br><span class="error1"></span><br>

                <label for="selectCountry">State:<span style="color:red;">*</span></label><br>
                <select class="form-control" name="state">
                    <option value="">select</option>
                    <option value="gujarat">Gujarat</option>
                    <option value="rajasthan">Rajasthan</option>
                    <option value="maharastra">maharastra</option>
                    <option value="madhyapradesh">Madhya pradesh</option>
                    <option value="westbengal">West bengal</option>
                    <option value="punjab">Punjab</option>
                    <option value="delhi">Delhi</option>
                </select><br>

                <label for="course">Courses<span style="color:red;">*</span></label><br>
                <input type="checkbox" name="course[]" value=1 />PHP
                <input type="checkbox" name="course[]" value=2 />DBMS
                <input type="checkbox" name="course[]" value=3 />DSA <br>

                <label for="addres">Address<span style="color:red;">*</span></label>
                <textarea class="form-control" name="addres" rows=5 maxlength=2000></textarea>
                <label for="exampleInputEmail1">Email address<span style="color:red;">*</span></label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">


                <label for="exampleInputPassword1">Password<span style="color:red;">*</span></label>
                <input type="password" class="form-control" placeholder="Password" name="password"><br>
            </div>
            <button type="submit" style="display:block;margin-top:20px;margin-left:30em;" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <table id="userData">
        <thead>
            <tr>
                <th>No.</th>
                <th> First Name </th>
                <th> Last Name </th>
                <th> Email Addres </th>
                <th> Password </th>
                <th>Age</th>
                <th> Gender </th>
                <th>Phone_number</th>
                <th> Course Name </th>
                <th>Couse duration<br>(In year)</th>
                <th>State</th>
                <th>Address</th>
                <th> Delete </th>
                <th> Update </th>
            </tr>
        </thead>
        <tbody>
            <?php
            require("../");

            $display = "SELECT * FROM `userinfromations` INNER JOIN `courses` ON  userinfromations.course_id = courses.id";
            
            $sql = mysqli_query($connection, $display);
            $num = mysqli_num_rows($sql);
        //   $connection->query($sql);
            if ($num != 0) {

                $number = 1;
                while ($row = $sql->fetch_assoc()) {
            ?>

                    <tr>
                        <td><?php echo $number ?></td>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['user_password'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['phone_number'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['course_duration'] ?></td>
                        <td><?php echo $row['state'] ?></td>
                        <td><?php echo $row['address'] ?></td>

                        <td><button class="btn btn-primary"><a style="color:red" href="deleteData.php?id=<?php echo $row['student_id']; ?>">Delete</a></button></td>
                        <td><button class="btn btn-primary"><a style="color:red" href="updateForm.php?id=<?php echo $row['student_id']; ?>">Upadate</a></button></td>
                    </tr>

                    <?php $number++; ?>

                <?php
                } ?>
        </tbody>
    <?php
            } else {
                echo "<h5>Number of row:$num</h5> ";
            }
            $deleteAll = 0;
    ?>
    </table>
    <button class="deleteBtn , btn btn-primary"><a style="color:red" href="deleteAll.php">Delete all data</a></button><br>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<script src="validate.js"></script>

<script src="dataTable.js"></script>

</html>