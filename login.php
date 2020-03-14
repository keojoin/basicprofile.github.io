<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>
<body>
    
<?php  include_once('includes/navbar.php') ?>

   <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <h5 class="card-header">ເຂົ້າສູ່ລະບົບ</h5>
                    <div class="card-body">
                    <form class="form" action="php/checklogin.php" method="post">
                        
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                        </div>

                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required> 
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary mb-2 btn-block">ເຂົ້າສູ່ລະບົບ</button>
                        <span class="float-right">ສະໝັກສຳມາຊິກ <a href="register.php">ຄິກທີ່ນີ້</a></span>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
   </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>