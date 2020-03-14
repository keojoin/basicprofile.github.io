
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Lay Blogger</a>
  <!-- ສຳລັບ Responsive -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <!-- ເຊັກວ່າ Session id ມີການເຂົ້າສູ່ລະບົບແລ້ວບໍ່
    ຖ້າມີການເຂົ້າສູ່ລະບົບມາແລ້ວໃຫ້ປິດປຸ່ມ ສະໝັກສະມາຊິກ ແລະ ລ໊ອກອິນອອກໄປ -->
      <?php  if(isset($_SESSION['id'])){ ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php  echo $_SESSION['name']; ?>
          <img src="images/<?php echo $_SESSION['image'];?> " width="30px" class="rounded-circle" alt="">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">ປະຫວັດສ່ວນຕົວ</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="php/logout.php">ອອກຈາກລະບົບ</a>
        </div>
      </li>
      <?php  }else { ?>

      <li class="nav-item ml-auto">
        <a class="btn btn-success m-md-1 mt-1 px-4" href="login.php">ເຂົ້າສູ່ລະບົບ</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="btn btn-warning m-md-1 mt-1 px-2.5" href="register.php">ສະໝັກສຳມາຊິກ</a>
      </li>
      <?php  } ?>

    </ul>
  </div>
</nav>