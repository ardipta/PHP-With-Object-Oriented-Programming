<?php
include 'CrudFunc.php';
$crud = new CrudFunc();
$totalCredit = "";
$output = $crud->getData("Select * from SGPA order by id");
echo "<table border='1'><tr><th>Course_Title</th><th>Course_Code</th><th>Course_Credit</th><th>GPA</th></tr>";
foreach ($output as $row){
    echo "<tr><td>".$row['Course_Title']."</td>";
    echo "<td>".$row['Course_Code']."</td>";
    echo "<td>".$row['Course_Credit']."</td>";
    echo "<td>".$row['GPA']."</td></tr>";
    echo "<tr><td colspan='3'>SGPA</td></tr>";

    $sum += $row['Course_Credit'] * $row['GPA'];
    $totalCredit += $row['GPA'];
}

echo "</table>";
?>
