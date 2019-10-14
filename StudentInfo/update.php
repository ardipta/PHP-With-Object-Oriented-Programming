<?php
    include "Crud.php";
    $crud = new Crud();

if (isset($_POST['update'])){
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $sql = "Update info SET student_id='$student_id', email='$email' where id=$id";
    $result = $crud->execute($sql);
    if($result){
        header('location:show.php');
    }
    else{
        echo "insertion problem";
    }

}
