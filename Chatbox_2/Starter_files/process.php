<?php
include 'database.php';
if(isset($_POST["submit"])){
    //inputs:
    $user = $conn-> real_escape_string($_POST["user"]);
    $message = $conn-> real_escape_string($_POST["message"]);

    date_default_timezone_get("Africa/Casablanca");
    $time = date("H:i:s",time());

    if(empty($user) || empty($message)){

        $error = "please fill in the empty fields";

        header("Location: index.php?error=".urlencode($error));

        exit();
    
        
    }else{

        $sql1 = "INSERT INTO `shouts` (user,`message`,`time`)
        VALUES ('$user', '$message', '$time')";

        $result =$conn->query($sql1);

        if(!$result){
             die($conn->error.__LINE__);
        }

   header("Location: index.php");

       exit();

    } 
} 
?> 