<?php  
    require_once('connect.php');

    if(isset($_POST['submit'])){
       $temp = explode('.',$_FILES['file']['name']);
       $new_name = round(microtime(true)*9999).'.'.end($temp);
        $url = '../images/'.$new_name;
       if(move_uploaded_file($_FILES['file']['tmp_name'], $url )){
        $sql = "UPDATE tbl_member SET `image`='". $new_name ."' WHERE id='".$_SESSION['id']."'";
        $result = $conn->query($sql);
        if($result){
            $_SESSION['image']= $new_name;
            echo '<script>alert("Update Image successful.")</script>';
            header('Refresh:0; url=../profile.php');
        }else{

        }
       }
    }else{
        header('Location:../index.php');
    }

?>