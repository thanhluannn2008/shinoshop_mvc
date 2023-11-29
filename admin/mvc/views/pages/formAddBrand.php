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
<body class="app sidebar-mini rtl">
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
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
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Nhà cung cấp</li>
        <li class="breadcrumb-item"><a href="#">Thêm nhà cung cấp mới</a></li>
      </ul>
    </div>
        <div class="tile">
          <h3 class="tile-title">Tạo nhà cung cấp sản phẩm mới</h3>
          <div class="tile-body">
          <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- Form nhập tên danh mục -->
            <form action="brandAddController/insert_brand" method="post">
                <div class="form-group">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Chọn</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="cartegory_id">
                        <option selected>Chọn danh mục</option>
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
                </div>
                <div class="form-group">
                    <label class="control-label">Tên nhà cung cấp:</label>
                    <input type="text" class="form-control" id="brandName" name="brandName" required>
                </div>
                <button type="submit" class="btn btn-primary" name="btnAddBrand">Thêm</button>
            </form>
        </div>
    </div>
        </div>
  </main>
</body>

<?php
include "./mvc/views/inc/footer.php";
?>
</html>