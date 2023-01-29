<?php
session_start();
echo '<pre>';
$con = mysqli_connect('localhost', 'root', '','onof');

$password = $_POST['password'];
$email = $_POST['email'];

$sql= "SELECT email,password FROM `userinfo` WHERE email='$email' AND password='$password'";
 
 $_REQUEST = mysqli_query($con, $sql);
 
 if (mysqli_num_rows($_REQUEST) == 0) {
        $_SESSION['username']='. Incorrect info. Please login again.';
    
    }


header("Location: formvalidation.php");

mysqli_close($con);

?>