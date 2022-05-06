<?php
$insert = false;
if(isset($_POST['checkin'])){
    
 $server = "localhost";
 $username = "root";
 $password =  "";
  
 $con = mysqli_connect($server, $username, $password);

 if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
 }
 //echo "success connecting to the db.";  
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$no_of_rooms = $_POST['no_of_rooms'];
$no_of_adults = $_POST['no_of_adults'];
$no_of_children = $_POST['no_of_children'];

$sql ="INSERT INTO `users`.`singleroom` ( `checkin`, `checkout`, `no_of_rooms`, `no_of_adults`, `no_of_children`) VALUES ( '$checkin', '$checkout', '$no_of_rooms', '$no_of_adults', '$no_of_children');";
 
//echo $sql;

 
if($con->query($sql) == true ){
    //echo "successfully inserted";
    $insert  = true;
    header("location:thankyou.html");
}
else {
    echo "ERROR:$sql <br> $con->error" ;

}

$con->close();


}
?>