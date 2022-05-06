<?php
include "index.php";
$server = "localhost";
$username = "root";
$password =  "";
$db="users";
$conn = mysqli_connect($server, $username, $password, $db);
$email = $_POST['email'];
$password = $_POST['password'];
// echo $email;
// echo $password;

$sql = mysqli_query($conn ,"select * from `user_info` where email = '$email' AND password = '$password' ");


// "CHECK" name will be use or may change acc. to the condition
$check = mysqli_fetch_array($sql); 
// echo $check;
// echo $check[1];
if(isset($check))
{
    

    header("location:DASHBOARD.html");
}
else{
    // echo " error occured ";
header("location:login.html");


}

?>




