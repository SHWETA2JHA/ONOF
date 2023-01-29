<?php
session_start();
echo '<pre>';
$conn = mysqli_connect('localhost', 'root', '','onof');
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}

$type=$_POST['colorRadio'];
$name=$_POST['name'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$mob=$_POST['mob'];
$ans=$_POST['ans'];
$add=$_POST['add'];
$pass=$_POST['pass'];

//echo "$type";

//$sql= "INSERT INTO `signup_hei` (`Type`, `Name`, `HeiID`, `Aadhar`,`Website`, `HeiContact`, `email`, `HeiAddress`, `password`) VALUES ('$type', '$name',NULL, '$aadhar', '$ans', '$mob', '$email', '$add', '$pass')";
$sql= "INSERT INTO `signup_hei` (`Type`, `Name`, `HeiID`, `Aadhar`,`Website`, `HeiContact`, `email`, `HeiAddress`, `password`) VALUES ('$type', '$name',NULL, '$aadhar', '$ans', '$mob', '$email', '$add', '$pass')";
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
 
mysqli_close($conn);
?>