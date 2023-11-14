<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="./public/css/style.css" />
  <title>Trang chủ</title>
</head>

<body>
  <header>
    <div class="header">Thông báo</div>
    <!-- navigation start-->
    <section>
      <div class="container-fluid">
        <div class="row navigation">
          <div class="col-md-2 logo">
            <img src="./public/img/logo.png">
          </div>
          <div class="col-md-8 menu">
            <ul>
              <li><a href="Home">Trang chủ</a></li>
              <li class="drop">
                <a href="product" class="dropbtn">Sản phẩm</a>
                <div class="drop-content">
                  <a href="#">Sản phẩm 1</a>
                  <a href="#">Sản phẩm 2</a>
                  <a href="#">Sản phẩm 3</a>
                  <a href="#">Sản phẩm 4</a>
                </div>
              </li>
              <?php
              while ($row = mysqli_fetch_array($data["cartegory"])) {
                ?>
                <li><a href="info.html">
                    <?php echo $row["cartegory_name"]; ?>
                  </a></li>
                <?php
              }
              ?>
              <!-- <li><a href="info.html">Về Shino Shop</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                <li><a href="blog.html">Blog</a></li> -->
              <div class="search">
                <input type="text" placeholder="Tìm kiếm..." />
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </ul>
          </div>
          <div class="col-md-2 icon-container mt">
            | <i class="fas fa-user fa-lg"></i> |
            <i class="fas fa-shopping-cart fa-lg"></i> |
            <i class="fas fa-sign-in-alt fa-lg"></i> |
          </div>
        </div>
      </div>
    </section>
    <!-- navigation  end-->
    <!-- SLIDER -->
    <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php" ?>
    <!-- SLIDER END -->
  </header>

  <!-- Outstanding product start-->
  <section class="outstanding-product">
    <div class="container">
      <h1>SẢN PHẨM NỔI BẬT</h1>
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="img/ab263641cdcd2428a48cfb09cb8472e5.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="img/sp1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="img/b1b04296461ae3c6116b1a154d69ca9c.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card" style="width: 16rem">
            <img src="img/sp7.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the
                bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

      </div>
  </section>
  <!-- Outstanding product end-->

  <!-- footer start -->
  <footer>

  </footer>
  <!-- footer end -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1f2cbd2317.js" crossorigin="anonymous"></script>

</html>