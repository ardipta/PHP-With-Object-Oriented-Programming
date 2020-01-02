    <h4>Student Registration</h4>
    <form method="POST" action="AddStudent.php">
        <label><b>Student ID</b></label><br>
        <input type="text" required name="Student_ID" style="width: 696px; height: 23px"><br><br>
        <label><b>Student Name</b></label><br>
        <input type="text" required name="Student_Name" style="width: 696px; height: 23px"><br><br>
        <label><b>Email</b></label><br>
        <input type="email" required name="Email" style="width: 696px; height: 23px"><br><br>
        <label><b>Mobile No</b></label><br>
        <input type="number" required name="Mobile_No" style="width: 696px; height: 23px"><br><br>
        <label><b>Address</b></label><br>
        <input type="text" required name="Address" style="width: 696px; height: 23px"><br><br>
        <label><b>Password</b></label><br>
        <input type="password" required name="Password" style="width: 696px; height: 23px"><br><br>
        <input type="submit" name="submit" value="Submit" style="height: 20px">
    </form>
<?php
    include 'CrudFunction.php';
    $crud = new CrudFunction();
    if(isset($_POST['submit'])){
        $studentID = $_POST['Student_ID'];
        $studentName = $_POST['Student_Name'];
        $email = $_POST['Email'];
        $mobile = $_POST['Mobile_No'];
        $address = $_POST['Address'];
        $password = md5($_POST['Password']);
        $sql = "INSERT into registration (Student_ID, Student_Name, Email, Mobile_No, Address, Password) values ('$studentID', '$studentName', '$email', '$mobile', '$address', '$password')";
        $output = $crud->execute($sql);
        if($output){
            header('location:ShowStudentInfo.php');
        }
        else{
            echo "Insertion Problem";
        }
    }
?>
