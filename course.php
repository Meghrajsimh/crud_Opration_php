<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Course</title>
    <style>
        table, tr, td,th {
            border: 2px inset black;
            padding: 10px;
        }
    </style>
</head>
<body>
<table style="margin: 20px 20px;">
                <thead>
                        <tr>
                            <th>No.</th>
                            <th>Course Name </th>
                            <th>Course duration<br>(In year) </th>
                            <th> student count </th>
                        </tr>
                </thead> 
        <?php 
            require("./connection.php");

            $display = "SELECT courses.id, courses.name, courses.course_duration, COUNT(userinfromations.first_name) AS student FROM `userinfromations` 
                        RIGHT JOIN `courses` ON  userinfromations.course_id = courses.id GROUP BY userinfromations.course_id ORDER BY courses.id ";
            $sql = mysqli_query($connection, $display);
                while($row = $sql->fetch_assoc()) {
        ?>
            <tbody>
                    <tr>
                         <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['course_duration'] ?></td>
                        <td><?php echo $row['student'] ?></td>
                    </tr>
            </tbody> 
            <?php }?>                              
        </table>
    
</body>
</html>