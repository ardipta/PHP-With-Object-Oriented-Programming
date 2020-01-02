<?php
    include 'CrudFunction.php';
    $crud = new CrudFunction();
    $output = $crud->getData("Select * from registration order by id");
    echo "<table border='1'><tr><th>Student ID</th><th>Student Name</th><th>Email</th><th>Mobile No</th><th>Address</th><th>Password</th><th>Action</th></tr>";
    foreach ($output as $row){
        echo "<tr><td>".$row['Student_ID']."</td>";
        echo "<td>".$row['Student_Name']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Mobile_No']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td><a href='edit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td></tr>";
    }
    echo "</table>";
    ?>
    <a href="AddStudent.php">Add New Student</a>