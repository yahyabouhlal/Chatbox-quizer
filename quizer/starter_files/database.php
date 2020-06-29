<?php

//create connection crendatials
$db_host = "localhost";
$db_name = "quizzer";
$db_user = "root";
$db_password= "";

//create mysqli_object
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);

//error handler 
if($mysqli->connect_error){

    printf("connection failed : %s\n",$mysqli->connect_error);
    exit();
}





