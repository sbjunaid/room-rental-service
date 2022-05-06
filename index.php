<?php
$insert = false;
if(isset($_POST['name'])){
    
 $server = "localhost";
 $username = "root";
 $password =  "";
  
 $con = mysqli_connect($server, $username, $password);

 if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
 }
 //echo "success connecting to the db.";  
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$sql ="INSERT INTO `users`.`user_info` ( `name`, `age`, `email`, `password`, `gender`) VALUES ( '$name', '$age', '$email', '$password', '$gender');";
 
//echo $sql;

 
if($con->query($sql) == true ){
    //echo "successfully inserted";
    $insert  = true;
    header("location:DASHBOARD.html");
}
else {
    echo "ERROR:$sql <br> $con->error" ;

}

$con->close();


}
?>


<html>
<head><title>
registration page</title>
</head><style>
.container{background-color:rgb(163, 177, 179);
border-radius:15px;
color:rgb(88, 60, 60);
width:500;
height:650;
margin:4px 6px;
border:none;
font-family:cursive;
box-shadow:5px 5px 5px 5px grey;
display:flex;
flex-direction: column;

}
*{
    text-decoration:none;
}
</style>
<body style="background-color:rgb(148, 120, 120)" size=100%>
<center><br><br><br>
<fieldset class="container"> 
<br>
<h1><B>
SIGNUP</B></h1>
<form action="index.php" id="form" method="post" name="form" ><br><br><h3>Create your account.It's free and only takes a minute.</h3>
<?php
if($insert == true){
echo "<p class='submitMsg'> Thanks for being a part of our community.</p>";
}
?>


<h2>
<input type="text" name="name" id="name" style="border-radius:8px;
border:none;
width:400;
height:30;
font-family:cursive;
background-color:white" placeholder="Enter your Name"></h2>

<input type="number" name="age" id ="age" style="border-radius:8px;
border:none;
width:400;
height:30;
font-family:cursive;
background-color:white" placeholder="Enter your age">

<h2>
<input type="email" name="email" id="email" style="border-radius:8px;
border:none;
width:400;
height:30;
font-family:cursive;
background-color:white" placeholder="Enter your Email">
</h2>

<h2>
<input type="password" id ="password" name="password" style="border-radius:8px;
border:none;
width:400;
height:30;
font-family:cursive;
background-color:white" placeholder="Enter your Password">
</h2>
<h5>
   Gender:
    <select name="gender" id = "gender"  name= "gender" style="border-radius:8px;
    border:none;
    width:350;
    height:30;
    font-family:cursive"  >
    <option value="male" >Male</option>
    <option value="female">Female</option>
    <option value="other">other</option></select></h5>
<br>
<input type="checkbox" >I accept the <a href="">Terms and Policies</a>.
<br><br>
<button type="submit" style="width:400;height:30;background-color:green;
font-family:cursive;
border:none;
cursor: pointer;">Signup Now</button>
<br><br>



</form></fieldset>
<h5 style="font-family:cursive;color:white">Already have an account?&nbsp<a href="loginform.html" style="color:rgb(205, 243, 66)">Login</a></h5>
</center>
</body>
</html>