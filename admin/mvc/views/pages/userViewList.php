<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active">
            <a href="#"><b>Danh sách tài khoản người dùng</b></a>
          </li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
                  <a
                    class="btn btn-add btn-sm"
                    href="/mvc-project/admin/userController/formAdduser"
                    title="Thêm"
                    ><i class="fas fa-plus"></i> Thêm tài khoản</a
                  >
                </div>
                <div class="col-sm-2">
                  <a
                    class="btn btn-delete btn-sm nhap-tu-file"
                    type="button"
                    title="Nhập"
                    onclick="myFunction(this)"
                    ><i class="fas fa-file-upload"></i> Tải từ file</a
                  >
                </div>

                <div class="col-sm-2">
                  <a
                    class="btn btn-delete btn-sm print-file"
                    type="button"
                    title="In"
                    onclick="myApp.printTable()"
                    ><i class="fas fa-print"></i> In dữ liệu</a
                  >
                </div>
                <div class="col-sm-2">
                  <a
                    class="btn btn-delete btn-sm print-file js-textareacopybtn"
                    type="button"
                    title="Sao chép"
                    ><i class="fas fa-copy"></i> Sao chép</a
                  >
                </div>

                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="" title="In"
                    ><i class="fas fa-file-excel"></i> Xuất Excel</a
                  >
                </div>
                <div class="col-sm-2">
                  <a
                    class="btn btn-delete btn-sm pdf-file"
                    type="button"
                    title="In"
                    onclick="myFunction(this)"
                    ><i class="fas fa-file-pdf"></i> Xuất PDF</a
                  >
                </div>
                <div class="col-sm-2">
                  <a
                    class="btn btn-delete btn-sm"
                    type="button"
                    title="Xóa"
                    onclick="myFunction(this)"
                    ><i class="fas fa-trash-alt"></i> Xóa tất cả
                  </a>
                </div>
              </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th width="10"><input type="checkbox" id="all" /></th>
                    <th>Mã người dùng</th>
                    <th>Tên người dùng</th>
                    <th>Ảnh</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($data["get_user"])){
                    while($row = mysqli_fetch_array($data["get_user"])){
                  ?>
                  <tr>
                    <td width="10">
                      <input type="checkbox" name="check1" value="1" />
                    </td>
                    <td><?php echo $row["userID"]; ?></td>
                    <td><?php echo $row["userName"]; ?></td>
                    <td>
                      <img
                        src="/mvc-project/admin/public/upload/<?php echo $row["user_img"]; ?>"
                        alt=""
                        width="100px"
                      />
                    </td>
                    <td><?php echo $row["userEmail"]; ?></td>
                    <td><?php echo $row["Pass"]; ?></td>
                    <td><span class="badge bg-success"></span> <?php echo $row["level"]; ?></td>
                    <td>
                    <form action="/mvc-project/admin/userController/delete_user" method="post">
                    <input type="hidden" name="userID" value="<?php echo $row['userID']; ?>">
                    <button
                        class="btn btn-primary btn-sm trash"
                        type="submit"
                        title="Xóa"
                      >
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                    <form action="/mvc-project/admin/userController/formUpdateUser" method="post">
                    <input type="hidden" name="userID" value="<?php echo $row['userID']; ?>">
                      <button
                          class="btn btn-primary btn-sm edit"
                          type="submit"
                          title="Sửa"
                        >
                          <i class="fas fa-edit"></i>
                      </button>
                    </form>
                    </td>
                  </tr>
                  <?php
                     }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>