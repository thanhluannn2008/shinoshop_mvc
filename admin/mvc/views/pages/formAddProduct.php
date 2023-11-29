<?php
include "./mvc/views/inc/header.php";
include "./mvc/views/inc/sidebar.php";
?>

<script>

function readURL(input, thumbimage) {
  if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#thumbimage").attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
  else { // Sử dụng cho IE
    $("#thumbimage").attr('src', input.value);

  }
  $("#thumbimage").show();
  $('.filename').text($("#uploadfile").val());
  $('.Choicefile').css('background', '#14142B');
  $('.Choicefile').css('cursor', 'default');
  $(".removeimg").show();
  $(".Choicefile").unbind('click');

}
$(document).ready(function () {
  $(".Choicefile").bind('click', function () {
    $("#uploadfile").click();

  });
  $(".removeimg").click(function () {
    $("#thumbimage").attr('src', '').hide();
    $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
    $(".removeimg").hide();
    $(".Choicefile").bind('click', function () {
      $("#uploadfile").click();
    });
    $('.Choicefile').css('background', '#14142B');
    $('.Choicefile').css('cursor', 'pointer');
    $(".filename").text("");
  });
})
</script>
</head>

<body class="app sidebar-mini rtl">
<style>

.custom-file-upload {
    display: inline-block;
    position: relative;
}

.custom-file-upload input[type="file"] {
    display: none;
}

.custom-file-upload label {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
}

.custom-file-upload label:hover {
    background-color: #45a049;
}
</style>
<!-- Navbar-->
<header class="app-header">
<!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
  aria-label="Hide Sidebar"></a>
<!-- Navbar Right Menu-->
<ul class="app-nav">


  <!-- User Menu-->
  <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

  </li>
</ul>
</header>

<main class="app-content">
<div class="app-title">
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item">Danh sách sản phẩm</li>
    <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Tạo mới sản phẩm</h3>
      <div class="tile-body">
        <div class="row element-button">
          <div class="col-sm-2">
            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><i
                class="fas fa-folder-plus"></i> Thêm nhà cung cấp</a>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i
                class="fas fa-folder-plus"></i> Thêm danh mục</a>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtinhtrang"><i
                class="fas fa-folder-plus"></i> Thêm tình trạng</a>
          </div>
        </div>


        <form class="row" action="productAddController/insert_product" method="POST" enctype="multipart/form-data">
          <!-- <div class="form-group col-md-3">
            <label class="control-label">Mã sản phẩm </label>
            <input class="form-control" type="number" name="">
          </div> -->
          <div class="form-group col-md-3">
            <label class="control-label">Tên sản phẩm</label>
            <input class="form-control" type="text" name="product_name">
          </div>
          <div class="form-group  col-md-3">
            <label class="control-label">Số lượng</label>
            <input class="form-control" type="number" name="product_quantity">
          </div>
          <div class="form-group col-md-3 ">
            <label for="exampleSelect1" class="control-label">Tình trạng</label>
            <select class="form-control" id="exampleSelect1" name="product_status">
              <option>-- Chọn tình trạng --</option>
              <option>Còn hàng</option>
              <option>Hết hàng</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="exampleSelect1" class="control-label">Danh mục</label>
            <select class="form-control" id="exampleSelect1" name="category_id">
              <option selected>-- Chọn danh mục --</option>
              <?php
                    if(isset($data['catt'])){
                        while($row = mysqli_fetch_array($data["catt"])){
                    ?>
                    <option value="<?php echo $row["cartegory_id"]?>"><?php echo $row["cartegory_name"]?></option>
                    <?php
                        }
                    }
                    ?>
            </select>
          </div>
          <div class="form-group col-md-3 ">
            <label for="exampleSelect1" class="control-label">Nhà cung cấp</label>
            <select class="form-control" id="exampleSelect1" name="brand_id">
              <option>-- Chọn nhà cung cấp --</option>
              <?php
                    if(isset($data['brand'])){
                        while($row = mysqli_fetch_array($data["brand"])){
                    ?>
                    <option value="<?php echo $row["brand_id"]?>"><?php echo $row["brand_name"]?></option>
                    <?php
                        }
                    }
                    ?>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label class="control-label">Giá bán</label>
            <input class="form-control" type="text" name="product_price">
          </div>
          <div class="form-group col-md-3">
            <label class="control-label">Giá vốn</label>
            <input class="form-control" type="text" name="product_capital_price">
          </div>
          <div class="form-group col-md-12 custom-file-upload">
            <label for="upload">Ảnh sản phẩm<span style="color: red;" >*</span></label>
            <input name="product_img" type="file" id="upload">
            <img id="preview" src="" alt="Image Preview" style="display: none;">
          </div>
          <div class="form-group col-md-12">
            <label class="control-label">Mô tả sản phẩm</label>
            <textarea class="form-control" name="mota" id="mota"></textarea>
            <script>CKEDITOR.replace('mota');</script>
          </div>

        <button class="btn btn-save m-1" type="submit" name="btnAddProduct">Lưu lại</button>
        <a class="btn btn-cancel m-1" href="/admin/productAddController">Hủy bỏ</a>
</form>
      </div>

    </div>
</main>


<!--
MODAL CHỨC VỤ 
-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Thêm mới nhà cung cấp</h5>
          </span>
        </div>
        <div class="form-group col-md-12">
          <label class="control-label">Nhập tên chức vụ mới</label>
          <input class="form-control" type="text" required>
        </div>
      </div>
      <BR>
      <button class="btn btn-save" type="button">Lưu lại</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      <BR>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
<!--
MODAL
-->



<!--
MODAL DANH MỤC
-->
<div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Thêm mới danh mục </h5>
          </span>
        </div>
        <div class="form-group col-md-12">
          <label class="control-label">Nhập tên danh mục mới</label>
          <input class="form-control" type="text" required>
        </div>
        <div class="form-group col-md-12">
          <label class="control-label">Danh mục sản phẩm hiện đang có</label>
          <ul style="padding-left: 20px;">
            <li>Bàn ăn</li>
          <li>Bàn thông minh</li>
          <li>Tủ</li>
          <li>Ghế gỗ</li>
          <li>Ghế sắt</li>
          <li>Giường người lớn</li>
          <li>Giường trẻ em</li>
          <li>Bàn trang điểm</li>
          <li>Giá đỡ</li>
          </ul>
        </div>
      </div>
      <BR>
      <button class="btn btn-save" type="button">Lưu lại</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      <BR>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
<!--
MODAL
-->

<!--
MODAL TÌNH TRẠNG
-->
<div class="modal fade" id="addtinhtrang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Thêm mới tình trạng</h5>
          </span>
        </div>
        <div class="form-group col-md-12">
          <label class="control-label">Nhập tình trạng mới</label>
          <input class="form-control" type="text" required>
        </div>
      </div>
      <BR>
      <button class="btn btn-save" type="button">Lưu lại</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      <BR>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
<!--
MODAL
-->

<script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script>
    function previewImage(input) {
    var preview = document.getElementById('preview');
    var file = input.files[0];
    var reader = new FileReader();

    reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
    };

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = '';
        preview.style.display = 'none';
    }
}

  </script>
</body>

</html>
