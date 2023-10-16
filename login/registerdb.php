<?php
include "config.php";

if(isset($_POST['save'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['pass'];
}

$dup_email = mysqli_query($con, "SELECT * FROM `register` WHERE email = '$email' ");

if(mysqli_num_rows($dup_email)){
    echo"
    <script>
    alert('Email is allready exsting');
    window.location.href = 'register.php';
    </script>
    ";
}
else{
    $conn = mysqli_query($con, "INSERT INTO `register`(`fname`, `email`, `phone`, `password`) 
    VALUES ('$name','$email','$number','$password')");

    echo"
    <script>
    alert ('Register successfully');
    window.location.href = 'login.php';
    </script>

    ";
    }

?>