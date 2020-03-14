<?php 
require_once('php/connect.php');
if(!isset($_SESSION['id'])){
    header('Location:index.php');
}
$sql = "SELECT * FROM `tbl_member` WHERE `id` = '".$_SESSION['id']."' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(!$result->num_rows){
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <style>
        .img-profile{
            width: 150px;
            height: 150px;
            margin: 0 auto;
            display: block;
            
        }
        .profile-top{
            margin-top: -100px;
        }
    </style>

</head>
<body>

    <?php  include_once('includes/navbar.php') ?>

    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container my-5 my-sm-1">
            <h1>ປະຫວັດສ່ວນຕົວ</h1>
        </div>
    </section>

    <section class="container my-3">
        <div class="row">
            <div class="col-12 profile-top">
                <img src="images/<?php echo $row['image'];?> " class="my-3 rounded-circle img-thumbnail img-profile" alt="img-profile">

                <div class="card">
                    <div class="card-body">
                        <div class='form-row'>
                            <div class="form-group col-md-6">
                                <label for="username">ຊື່ຜູ້ໃຊ້ງານ</label>
                                <input type="text" id="username" class="form-control" value="<?php echo $row['username'];?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">ຊື່ ແລະ ນາມສະກຸນ</label>
                                <input type="text" id="name" class="form-control" value="<?php echo $row['name'];?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">ອິີເມວ</label>
                                <input type="text" id="email" class="form-control" value="<?php echo $row['email'];?> " disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">ເບີໂທລະສັບ</label>
                                <input type="text" id="phone" class="form-control" value="<?php echo $row ['phone'];?> " disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">ທີ່ຢູ່</label>
                              <textarea name="" class="form-control" id="" cols="5" disabled><?php  echo $row['address'];?>
                              </textarea>
                            </div>
                        </div>
                        <a href="profile-edit.php" class="btn btn-warning float-right">ແກ້ໄຂຂໍ້ມູນ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php  include_once('includes/footer.php') ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>