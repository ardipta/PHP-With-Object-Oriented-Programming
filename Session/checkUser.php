<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:login.php');
    }
    else{
        echo $_SESSION['user_type'];
    }
?>
    <a href='logout.php'>Logout</a>
<?php

        $_SESSION['email']=null;
        $_SESSION['user_type']=null;
        session_destroy();


