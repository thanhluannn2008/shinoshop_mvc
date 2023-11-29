<header>
    <div class="logo">
      <a href="Home"><img src="./public/img/SHINO-removebg-preview.png" alt="logo IVY Moda"></a>
    </div>
    <div class="menu">
      <li><a href="/mvc-project/Home">Trang chủ</a></li>
      <li><a href="/mvc-project/categoryController">BỘ SƯU TẬP</a></li>
      <?php
      while ($row = mysqli_fetch_array($data["category"])) {
        ?>
        <li><a href="">
            <?php echo $row["cartegory_name"]; ?>
          </a>
          <ul class="sub-menu-1">
              <li><a href="">Thương hiệu</a></li>
                  <ul>
                      <?php
                          if (isset($data["brand"])) {
                              while ($row2 = mysqli_fetch_array($data["brand"])) {

                      ?>
                      <li><a href=""><?php echo $row2['brand_name']; ?></a></li>
                      <?php
                              }
                        }
                      ?>
                  </ul>
          </ul>
        </li>
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