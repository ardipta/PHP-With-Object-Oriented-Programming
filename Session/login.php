<?php
    session_start();
    include_once "crud.php";
    $crud = new Crud();
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $sql = "SELECT * FROM login where email='$email' and password='$password'";

        $result = $crud->getData($sql);
        if(!empty($result)){
            $_SESSION['email'] = $email;
           foreach ($result as $userType){
               $isAdmin = $userType['isAdmin'];
               $isUser = $userType['isUser'];
           }
        if($isUser==1 && $isAdmin==1){
            $_SESSION['user_type'] =  "Login as both";
            header('location:checkUser.php');
        }
           elseif($isAdmin==1){
               $_SESSION['user_type'] = "Login as admin";
               header('location:checkUser.php');
           }
           elseif ($isUser==1){
               $_SESSION['user_type'] =  "Login as user";
               header('location:checkUser.php');
           }

        }
    }
?>
<form action="login.php" method="POST">
    Email: <br>
    <input type="email" name="email" placeholder="Enter your email"><br>
    Password: <br>
    <input type="password" name="password" placeholder="Enter your password"><br>
    <input type="submit" name="login" value="Login">
</form>