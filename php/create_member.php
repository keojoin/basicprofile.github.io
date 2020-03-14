<?php  
    // echo '<pre>',print_r($_POST),'</pre>';
    require_once('connect.php');
    if(isset($_POST['submit'])){
    $secretkey="6LcoduAUAAAAAM_h7oo55WkdeBiDcJm0IHfqdQSh";
    $responsekey = $_POST['g-recaptcha-response'];
    $remoteIP =$_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$remoteIP";
    $response = json_decode(file_get_contents($url));
    // echo $response->success;
        if( $response->success){
            $check_sql = "SELECT * FROM `tbl_member` WHERE `username` = '".$_POST['username']."'";
            $check_username = $conn->query($check_sql);
            if(!$check_username->num_rows){
                $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $sql = "INSERT INTO `tbl_member` (`name`, `email`, `phone`, `username`, `password`, `create_at`) 
                        VALUES ('".$_POST['name']."', 
                                '".$_POST['email']."', 
                                '".$_POST['phone']."',  
                                '".$_POST['username']."', 
                                '".$hashed."', 
                                '".date("Y-m-d H:i:s")."');";
                $result = $conn->query($sql);
                if($result){
                    echo '<script>alert("Add Data Succssfully.")</script>';
                    readirect('index');
                }else{
                    echo '<script>alert("Register failed.!\nPlease try again.")</script>';
                   readirect('register');
                }
            }else{
                echo '<script>alert("Username is aleady exists.!\nPlease try again.")</script>';
               readirect('register');
            }
        
        }else{
            echo "<script>alert('Verifycation failed!')</script>";
           readirect('register');
        }
    }else{
      readirect('register');
    }
    function readirect($path){
        header('Refresh:0; url=../'.$path.'.php');
    }

?>
