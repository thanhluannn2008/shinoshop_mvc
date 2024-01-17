<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách tài khoản</li>
        <li class="breadcrumb-item"><a href="#">Thêm tài khoản</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Tạo mới tài khoản</h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <form class="row" action="/mvc-project/admin/userController/insert_user" method="post"  enctype="multipart/form-data">
              <!-- <div class="form-group col-md-4">
                <label class="control-label">ID user</label>
                <input class="form-control" type="text">
              </div> -->
              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" type="text" name="userName" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ email</label>
                <input class="form-control" type="text" name="userEmail" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Password</label>
                <input class="form-control" type="password" name="pass" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ thường trú</label>
                <input class="form-control" type="text" name="Address" required>
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
                <select class="form-control" id="exampleSelect1" name="level">
                  <option>-- Chọn level user --</option>
                  <option>0</option>
                  <option>1</option>
                </select>
              </div>
              <div class="form-group col-md-3">
              </div>
              <div class="form-group col-md-3">
              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Ảnh:</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="userimg" onchange="readURL(this);" />
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
          <button class="btn btn-save" type="submit" name="btnAddUser">Lưu lại</button>
          <a class="btn btn-cancel" href="/mvc-project/admin/userController">Hủy bỏ</a>
        </div>
</form>
  </main>