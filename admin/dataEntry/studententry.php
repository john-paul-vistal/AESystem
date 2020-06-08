<?php
$mysqli = new mysqli('localhost','root','','enrollmentsystem') or die(mysqli_error($msqli));
session_start();
  

if(isset($_POST['save'])){
    $lrn = $_POST['lrn'];
    $fname = strtoupper($_POST['fname']);
    $lname = strtoupper($_POST['lname']);
    $mname = strtoupper($_POST['mname']);
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['bdate'];
    $birthplace = strtoupper($_POST['bplace']);
    $nationality = strtoupper($_POST['nationality']);
    $guardian = strtoupper($_POST['guardian']);
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = strtoupper($_POST['address']);
    $image = $_POST['imageUpload'];
    
    $mysqli->query("INSERT INTO student (id,image,lrn,fname,lname,mname,age,gender,birthdate,birthplace,nationality,guardian,email,number,address) VALUES (NULL,'$image','$lrn','$fname','$lname','$mname','$age','$gender','$birthdate','$birthplace','$nationality','$guardian','$email','$number','$address')")
     or die($mysqli->error);

     $_SESSION['message'] = "save";
     header('location:student.php');

}

if(isset($_POST['deleteaction'])){
    $id = $_POST['deleteId'];

    $mysqli->query("DELETE  FROM student WHERE id = '$id'")
     or die($mysqli->error);

     $_SESSION['message'] = "delete";
     header('location:student.php');

}

if(isset($_POST['update'])){
    $id = $_POST['idnumber'];
    $lrn = $_POST['lrn'];
    $type = $_POST['type'];
    $fname = strtoupper($_POST['fname']);
    $lname = strtoupper($_POST['lname']);
    $mname = strtoupper($_POST['mname']);
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['bdate'];
    $birthplace = strtoupper($_POST['bplace']);
    $nationality = strtoupper($_POST['nationality']);
    $guardian = strtoupper($_POST['guardian']);
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = strtoupper($_POST['address']);
    $image = $_POST['imageUpdate'];
    if($_POST['imageUpdate'] == ""){
        $image = $_POST['oldimage'];
    }else if($_POST['imageUpdate'] != ""){
        $image = $_POST['imageUpdate'];
    }
    
    $mysqli->query("UPDATE student SET image = '$image',lrn = '$lrn',fname = '$fname',lname = '$lname',mname = '$mname',age = '$age',gender = '$gender',birthdate = '$birthdate',birthplace = '$birthplace',nationality = '$nationality',guardian = '$guardian',email = '$email',number = '$number',address = '$address' WHERE id = '$id'")
     or die($mysqli->error);

     $_SESSION['message'] = "updated";
     header('location:student.php');
}



?>