<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

    <?php  include_once('includes/navbar.php') ?>
   
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">ຍິນດີຕ້ອນຮັບ</h1>
            <p class="lead">ເຂົ້າສູ່ເວັບໄຊທ໌ lay Blogger ເປັນເວັບໄຊທ໌ທີ່ພັດທະນາຂຶ້ນເພື່ອເປັນການສຶກສາ .</p>
        </div>
    </div>

    <section class="container py-3">
        <div class="row">
            <div class="col-6">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Shj6p6yzMO4" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-6">
                <h4>ວິດີໂອທີ່ແນະນຳການໃຊ້ງານ</h4>
                <ul>
                    <li>ວິດີໂອນີ້ເປັນການແນະນຳວິທີການຕັ້ງຄ່າໜ້າເຈ້ຍໃຫ້ໄດ້ຕາມທີ່ເຮົາຕ້ອງການ
                        ເຊິ່ງເປັນວິທີງ່າຍໆໃນການໃຊ້ງານ Microsoft Word ແລະ ຍັງເປັນເທັກນິກໃນຈັດໜ້າເອກະສານຂອງເຮົາ.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1>ການແບ່ງປັນຄື....ຈຸດເລີ່ມຕົນແຫ່ງຄງາມດີ</h1>
            <p class="lead">ເຂົ້າສູ່ເວັບໄຊທ໌ lay Blogger ເປັນເວັບໄຊທ໌ທີ່ພັດທະນາຂຶ້ນເພື່ອເປັນການສຶກສາ .</p>
        </div>
    </div>

   <?php  include_once('includes/footer.php') ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/font-awesome5/css/fontawesome.min.css"></script>
</body>
</html>