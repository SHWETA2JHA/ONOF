<?php
session_start();
echo '<pre>';
$conn = mysqli_connect('localhost', 'root', '','onof');
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}

$type=$_POST['contact'];
$name=$_POST['name'];
$email=$_POST['email'];
$id=$_POST['id'];
$mob=$_POST['mob'];
$ans=$_POST['ans'];
$add=$_POST['add'];
$pass=$_POST['pass'];

$sql= "INSERT INTO `signup_agency` (`AgencyID`, `AgencyName`, `AgencyType`, `Website`, `AgencyContact`, `email`, `AgencyAddress`, `password`) VALUES ('$id', '$name', '$type', '$ans', '$mob', '$email', '$add', '$pass')";
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
 
mysqli_close($conn);
?>