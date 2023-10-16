<?php

$con = mysqli_connect('localhost', 'root','', 'splash');

$email = $_POST['email'];
$password = $_POST['pass'];

$row = mysqli_query($con, "SELECT * FROM `register` WHERE email = '$email' AND password = '$password' ");

if(mysqli_num_rows($row)){
    echo "
    <script>
    alert ('login successfully');
    window.location.href = '../index.php';
    </script>
    ";
}

else{
    echo "
    <script>
    alert ('invaild Email and password');
    window.location.href = 'login.php';
    </script>
    ";
}

?>