<?php  
    require_once('connect.php');
    if(isset($_POST['submit']) && $_SESSION['id']){
        $sql = "UPDATE `tbl_member` SET 
        `name` = '".$_POST['name']."',
        `email` = '".$_POST['email']."',
        `phone` = '".$_POST['phone']."',
        `address` = '".$_POST['address']."'  
        WHERE `id` ='".$_SESSION['id']."'";
    $result = $conn->query($sql);
    if($result){
        echo '<script>alert("Update Successful")</script>';
        header('Refresh:0; url=../profile.php');
    }else{
        echo '<script>alert("Update Error.! \nPlease try again.")</script>';
        header('Refresh:0; url=../profile.php');
    }
    }else{
        header('Location:../index.php');
    }
?>