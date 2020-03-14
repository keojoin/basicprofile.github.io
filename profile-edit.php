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
                <img src="images/<?php echo $_SESSION['image'];?>" class=" rounded-circle img-thumbnail img-profile" alt="img-profile">
             <!-- Button trigger modal -->
                <button type="button" class="my-3 mx-auto d-block btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    ປ່ຽນຮູບພາບ
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ອັບໂຫລດຮູບພາບ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="php/updateImage.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="customFile" onchange="readURL(this)">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <figure class="figure text-center mt-2 d-none">
                                    <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
                                </figure>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form id="FormUpdate" action="php/updatemember.php" method="post">
                            <div class='form-row'>
                                <div class="form-group col-md-6">
                                    <label for="username">ຊື່ຜູ້ໃຊ້ງານ</label>
                                    <input type="text"name="username" id="username" class="form-control" value="<?php echo $row['username'];?>" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">ຊື່ ແລະ ນາມສະກຸນ</label>
                                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?> ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">ອິີເມວ</label>
                                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>  ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">ເບີໂທລະສັບ</label>
                                    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $row['phone'];?>">
                                </div>   
                            </div> 

                            <div class="form-group">
                                <label for="address">ທີ່ຢູ່</label>
                                <textarea name="address" class="form-control" id="" cols="5"><?php echo $row['address'];?></textarea>
                            </div>

                            <a href="profile.php" class="btn btn-warning float-left">ຍ້ອນກັບ</a>
                            <input type="submit" name="submit" class="btn btn-primary float-right" value="ບັນທຶກຂໍ້ມູນ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php  include_once('includes/footer.php') ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
        <script>
//Preview Picture and input filename in the textbox html
            $('.custom-file-input').on('change', function(){
               var fileName = $(this).val().split('\\').pop()
               $(this).siblings('.custom-file-label').html(fileName)
               if(this.files[0]){
                    var reader = new FileReader()
                    $('.figure').addClass('d-block')
                    reader.onload = function(e){
                        $('#imgUpload').attr('src',e.target.result).width
                    }
                    reader.readAsDataURL(this.files[0])
                }
            
            })

            $(document).ready(function(){
                $('#FormUpdate').validate({
                    rules:{
                        name:'required',
                        email:{
                            required: true,
                            email: true
                        },
                        phone:{
                            required: true,
                            number: true,
                            maxlength: 20
                        },
                        address:'required',
                    },
                    messages:{
                        name:'ກາລຸນາປ້ອນຂໍ້ມູນ ຊື່ ແລະ ນາມສະກຸນ',
                        email:{
                            required:'ກາລຸນາປ້ອນຂໍ້ມູນອີເມວ',
                            email: 'ກາລຸນາປ້ອນຂໍ້ມູນອີເມວໃຫ້ຖືກຕ້ອງ',
                        },
                        phone:{
                            required: 'ກາລຸນາປ້ອນເບີໂທລະສັບ',
                            number:'ກາລຸນາປ້ອນສະເພາະຕົວເລກເທົ່ານັ້ນ',
                            maxlength: 'ກາລຸນາປ້ອນບໍ່ໃຫ້ເກີນ 20 ຕົວອັກສອນ',
                        },
                        address:'ກາລຸນາປ້ອນຂໍ້ມູນທີ່ຢູ່ຂອງທ່ານດ້ວຍ',
                    },
                    errorElement: 'div',
                    errorPlacement: function(error, element){
                        error.addClass('invalid-feedback')
                        error.insertAfter(element)
                    },
                    highlight: function( element, errorClass, validClass){
                        $(element).addClass('is-invalid').removeClass('is-valid')
                    },
                    unhighlight: function(element, errorClass, validClass){
                        $(element).addClass('is-valid').removeClass('is-invalid')
                    }
                });
            })
        </script>
</body>
</html>