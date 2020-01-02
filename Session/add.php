<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:login.php');
    }
?>
    <form method="POST" action="add.php">
        Student_ID: <input type="text" required name="student_id"><br>
        Email: <input type="email" required name="email"><br>
        Password: <input type="password" required name="password"><br>
        <input type="submit" name="addData" value="Send to Server">
    </form>

<?php
    include 'Crud.php';
    $crud = new Crud();
    if (isset($_POST['addData'])){
        $student_id = $_POST['student_id'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "INSERT into info(student_id, email, password) VALUES ('$student_id', '$email', '$password')";
        $result = $crud->execute($sql);
        if($result){
            header('location:show.php');
        }
        else{
            echo "insertion problem";
        }

    }
?>