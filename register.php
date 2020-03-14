
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <title>register</title>
</head>
<body>
    
<?php  include_once('includes/navbar.php') ?>

   <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <h5 class="card-header">ສະມັກສຳມາຊິກ</h5>
                    <div class="card-body">
                    <form class="form" id="formRegister" action="php/create_member.php" method="post">
                        
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" id="name" placeholder="ຊື່ ແລະ ນາມສະກຸນ">
                        </div>

                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control" id="email" placeholder="example@gmail.com">
                        </div>

                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                            </div>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="ເບີໂທລະສັບ">
                        </div>
                        
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        </div>

                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm password">
                        </div>

                        <div class="form-group mb-2 mr-sm-2">
                            <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LcoduAUAAAAALIMXYhHCNnELejBqbb2Di5Hp1so"></div>
                        </div>

                        <button type="submit" name="submit" id="submit" disabled class="btn btn-primary mb-2 btn-block">ສະໝັກສຳມາຊິກ</button>
                        <span class="float-right">ເຂົ້າສູ່ລະບົບ<a href="login.php"> ຄິກທີ່ນີ້</a></span>
                    </form>
                    </div>
                </div>  
            </div>
        </div>
   </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        $(document).ready(function(){
            $('#formRegister').validate({
                rules:{
                    name: 'required',
                    email:{
                        required: true,
                        email: true
                    },
                    phone:{
                        required: true,
                        number: true,
                        maxlength: 20
                    },
                    username:{
                        required: true,
                        minlength: 4
                    },
                    password:{
                        required: true,
                        minlength: 4
                    },
                    confirm_password:{
                        required: true,
                        minlength: 4,
                        equalTo:'#password'
                    }
                },
               
                messages:{
                    name: 'ກາລຸນາປ້ອນຂໍ້ມູນ ຊື່ ແລະ ນາມສະກຸນ',
                    email:{
                        required:'ກາລຸນາປ້ອນຂໍ້ມູນອີເມວ',
                        email: 'ກາລຸນາປ້ອນຂໍ້ມູນອີເມວໃຫ້ຖືກຕ້ອງ',
                    },
                    phone:{
                        required: 'ກາລຸນາປ້ອນເບີໂທລະສັບ',
                        number:'ກາລຸນາປ້ອນສະເພາະຕົວເລກເທົ່ານັ້ນ',
                        maxlength: 'ກາລຸນາປ້ອນບໍ່ໃຫ້ເກີນ 20 ຕົວອັກສອນ',
                    },
                    username:{
                        required: 'ກາລຸນາປ້ອນຊື່ຜູ້ໃຊ້ງານ',
                        minlength: 'ກາລຸນາປ້ອນຂໍ້ມູນບໍ່ຕໍ່າກວ່າ 4 ຕົວອັກສອນ',
                    },
                    password:{
                        required: 'ກາລຸນາປ້ອນລະຫັດຜ່ານ',
                        minlength: 'ກາລຸນາປ້ອນບໍ່ຕໍ່າກວ່າ 4 ຕົວອັກສອນ',
                    },
                    confirm_password:{
                        required: 'ກາລຸນາປ້ອນລະຫັດຜ່ານ',
                        minlength: 'ກາລຸນາປ້ອນບໍ່ຕໍ່າກວ່າ 4 ຕົວອັກສອນ',
                        equalTo:'ກາລຸນາປ້ອນຂໍ້ມູນລະຫັດໃຫ້ຖືກຕ້ອງ'
                    }

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
   
        function recaptchaCallback(){
            $('#submit').removeAttr('disabled');
        }
   
   
   
    </script>

  
</body>
</html>