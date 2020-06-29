<?php 

$localhost="localhost";
$username="root";
$password="";
$dbname="chatbox";

$conn = new mysqli($localhost,$username,$password,$dbname);

if($conn->connect_error){

    printf("connection failed : %s\n",$conn->connect_error.__LINE__);
    exit();
}

?>
