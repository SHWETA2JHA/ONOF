<?php
// ye kya krra pata nai but tu daali thi pehle se
session_start();
// ye bhi nai pata kya print karwa rahi xD
echo '<pre>';
//connecting db
$con = mysqli_connect('localhost', 'root', '','logininfo');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];

$sql= "SELECT username,password FROM `userinfo` WHERE username='$username' AND password='$password'";
 
 $_REQUEST = mysqli_query($con, $sql);
 
 if (mysqli_num_rows($_REQUEST) == 0) {
        $_SESSION['username']='. Incorrect info. Please login again.';
    
    }
else{
	$_SESSION['username']='$username';
}

/*
 $row = mysqli_fetch_assoc($_REQUEST);
 echo $row["username"];
echo $row["password"];
*/


/*
$sql= "SELECT username,password FROM `userinfo` WHERE username='$username'";
 
 $_REQUEST = mysqli_query($con, $sql);
 
$row = mysqli_fetch_assoc($_REQUEST);
if($row["username"]=='$username' and $row["password"]=='$password'){
    $_SESSION['username']='$username';

}
else {
    
    $_SESSION['username']='. Incorrect info. Please login again.';
}
*/

// ye location ka kya zaroorat h? Nvm got it
header("Location: formvalidation.php");

mysqli_close($con);

?>