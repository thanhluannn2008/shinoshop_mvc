<?php
session::init();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="./public\css\style.css">
  <title>SHINO Perfurme</title>
</head>

<body>
  <header>
    <div class="logo">
      <a href="Home"><img src="./public/img/SHINO-removebg-preview.png" alt="logo IVY Moda"></a>
    </div>
    <div class="menu">
      <li><a href="Home">Trang chủ</a></li>
      <li><a href="productController">BỘ SƯU TẬP</a></li>
      <?php
      while ($row = mysqli_fetch_array($data["cartegory"])) {
        ?>
        <li><a href="info.html">
            <?php echo $row["cartegory_name"]; ?>
          </a></li>
        <?php
      }
      ?>
      <!-- <li><a href="productController">SẢN PHẨM</a></li> -->
    </div>
    <div class="other">
      <li>
        <form method="get" action="cartegory.php?quanly=timkiem">
          <input placeholder="Tìm kiếm..." type="text" name="tukhoa">
          <button><input type="submit" value="Tìm"></i></button>
        </form>
      </li>
      <li>
        <a href="info.php"><i class="fa-solid fa-user"></i></a>
      </li>
      <li>
        <a href="contact.php"><i class="fa-solid fa-headphones"></i></a>
      </li>
      <li>
        <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
      </li>
      <?php
      if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        session::destroy();
      }
      ?>
      <li class="logout">
        <?php
        $login_check = session::get('login');
        if ($login_check == false) {
          echo '<a href="login.php">Đăng nhập</a>';
        } else {
          // echo "<a href='?action=logout'>Đăng nhập</a>";
          echo "<a href='?action=logout'>Đăng xuất</a>";
        }
        ?>
      </li>
    </div>
  </header>

  <!-- SLIDER -->
  <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php" ?>
  <!-- SLIDER END -->

  <!-- app -->
  <section class="app-container">
    <p>
      Tải ứng dụng SHINO PERFUME
    </p>
    <div class="app-google">
      <img src="./img/appstore.png" alt="">
      <img src="./img/googleplay.png" alt="">
    </div>
    <p>Nhận bản tin SHINO PERFUME</p>
    <input type="text" name="" id="" placeholder="Nhập email của bạn...">
  </section>
  <!-- footer -->
  <div class="footer-top">
    <li><a href=""><img src="./img/img-congthuong.png" alt=""></a></li>
    <li><a href="">Liên hệ</a></li>
    <li><a href="">Tuyển dụng</a></li>
    <li><a href="">Giới thiệu</a></li>
    <li>
      <a href=""><i class="fa-brands fa-facebook"></i></a>
      <a href=""><i class="fa-brands fa-twitter"></i></a>
      <a href=""><i class="fa-brands fa-youtube"></i></a>
    </li>

  </div>
  <div class="footer-center">
    <p>
      Trường công nghệ thông tin và truyền thông, Đại học Cần Thơ <br>
      Địa chỉ đăng ký: Đường 3 tháng 2, phường Xuân Khánh, quận Ninh Kiều, Thành phố Cần Thơ, Việt Nam <br>
      Số điện thoại: <span>0889922160</span>
    </p>
  </div>
  <div class="footer-bottom">
    ©SHINOperfume All rights reserved
  </div>
</body>
<script src="./public/js/slider.js"></script>
<script src="./public/js/script.js"></script>
<script src="./public/js/product.js"></script>

</html>