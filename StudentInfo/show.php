<?php
    include "Crud.php";
    $crud = new Crud();
    $result = $crud->getData("Select * from info order by id DESC");
    echo "<table border='1'><tr><th>Student ID</th><th>Email</th><th>Action</th></tr>";
    foreach ($result as $row){
        echo "<tr><td>".$row['student_id']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td><a href='edit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td></tr>";
    }
    echo "</table>";
    ?>
<a href="add.php">Add New Data</a>
