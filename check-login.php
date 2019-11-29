<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="sabunku" AND $password=="premium2018")
    {
        $_SESSION["username"]=$username;
        header("location:/menu/index.php");
    }else{
        echo 'Username atau password salah <a href="/admin.php">Login</a>' ;
    }
?>