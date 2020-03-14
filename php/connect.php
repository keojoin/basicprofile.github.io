<?php  
    session_start();
    $conn = new mysqli('localhost','root','','layblogger');
    $conn->set_charset('utf8');
   // echo $conn->connect_error;
    //echo $conn->connect_errno;
    if($conn->connect_errno){
        die ("Connection to database failed".$conn->connect_error);
    }

?>