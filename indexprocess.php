<?php
$mysqli = new mysqli('localhost','root','','enrollmentsystem') or die(mysqli_error($msqli));



if(isset($_POST['sign-in'])){
    $userName = $_POST['username']; 
    $password = $_POST['password'];
    $result = $mysqli->query("SELECT * FROM admin WHERE username = '".$userName."' AND password = '".$password."' limit 1") or die($mysqli->error);
    if(mysqli_fetch_assoc($result)){
        $_SESSION['USER'] = $_POST['username']; 
        header("location:admin/dashboard.php");
        exit();
    }else{
        header("location:index.php?Invalid= Incorrect Username or Password! Try again");
 }
} 

?>