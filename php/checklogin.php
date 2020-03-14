<?php  
    require_once('connect.php');
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $stmt = $conn->prepare("SELECT * FROM  tbl_member WHERE username = ? ");
        $stmt ->bind_param('s',$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if(!empty($row)){
            if(password_verify($password, $row['password'])){
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['image'] = $row['image'];
                header('Location:../index.php');
            }else{
                echo '<script>alert("Password is not correct.!\nPlease try again.")</script>';
                header('Refresh:0; url=../login.php');
            }
        }else{
            echo '<script>alert("Username and Password is not correct.!\nPlease try again.")</script>';
            header('Refresh:0; url=../login.php');
        }

    }else{
        header('Location:../index.php');
    }

    

?>