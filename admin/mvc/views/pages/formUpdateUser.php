<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách tài khoản</li>
        <li class="breadcrumb-item"><a href="#">Cập nhật thông tin tài khoản</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Cập nhật thông tin tài khoản</h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <form class="row" action="/mvc-project/admin/userController/update_user" method="post"  enctype="multipart/form-data">

              <?php
              if(isset($data["get_user_by_id"])){
                if($row = mysqli_fetch_array($data["get_user_by_id"])){

              ?>
              <!-- <div class="form-group col-md-4">
                
              </div> -->
              <input class="form-control" type="hidden" name ="userID" value="<?php echo $row["userID"]?>">
              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" type="text" name="userName" value="<?php echo $row["userName"]?>" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ email</label>
                <input class="form-control" type="text" name="userEmail" value="<?php echo $row["userEmail"]?>" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Password</label>
                <input class="form-control" type="password" name="pass" value="<?php echo $row["Pass"]?>" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ thường trú</label>
                <input class="form-control" type="text" name="Address"  required>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="number" name="sdt" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày sinh</label>
                <input class="form-control" type="date" name="birthday">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giới tính</label>
                <select class="form-control" id="exampleSelect2" name="sex" required>
                  <option>-- Chọn giới tính --</option>
                  <option>Nam</option>
                  <option>Nữ</option>
                </select>
              </div>

              <div class="form-group  col-md-3">
                <label for="exampleSelect1" class="control-label">Level</label>
                <input class="form-control" type="password" name="level" value="<?php echo $row["level"]?>" required>
                <!-- <select class="form-control" id="exampleSelect1" name="level" value="">
                  <option>-- Chọn level user --</option>
                  <option>0</option>
                  <option>1</option>
                </select> -->
              </div>
              <div class="form-group col-md-3">
              </div>
              <div class="form-group col-md-3">
              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Ảnh:</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="userimg" onchange="readURL(this);" value="<?php echo $row["user_img"]?>" />
                </div>
                <div id="thumbbox">
                  <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class='bx bx-upload'></i></a>
                  <p style="clear:both"></p>
                </div>

              </div>

          </div>
          <?php
          
        }
    }
          ?>
          <button class="btn btn-save" type="submit" name="btnUpdateUser">Lưu lại</button>
          <a class="btn btn-cancel" href="/mvc-project/admin/userController">Hủy bỏ</a>
        </div>
</form>
  </main>