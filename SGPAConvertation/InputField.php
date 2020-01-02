    <h4>SGPA Calculation</h4>
    <form method="POST" action="InputField.php">
        <label><b>Course_Title:</b></label>
        <input type="text" required name="Course_Title" ><br><br>
        <label><b>Course_Code:</b></label>
        <input type="text" required name="Course_Code" ><br><br>
        <label><b>Course_Credit:</b></label>
        <input type="number" required name="Course_Credit" ><br><br>
        <label><b>GPA:</b></label>
        <input type="number" required name="GPA"><br><br>
        <input type="submit" name="submit" value="Submit" style="height: 20px">
    </form>
<?php
    include 'CrudFunc.php';
    $crud = new CrudFunc();
    if(isset($_POST['submit'])){
        $courseTitle = $_POST['Course_Title'];
        $courseCode = $_POST['Course_Code'];
        $courseCredit = $_POST['Course_Credit'];
        $gpa = $_POST['GPA'];
        $sql = "INSERT into SGPA (Course_Title, Course_Code, Course_Credit, GPA) values ('$courseTitle', '$courseCode', '$courseCredit', '$gpa')";
        $output = $crud->execute($sql);
        if($output){
            header('location:showResult.php');
        }
        else{
            echo "Insertion Problem";
        }
    }
?>
