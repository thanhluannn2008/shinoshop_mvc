<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active">
            <a href="#"><b>Danh sách sản phẩm</b></a>
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
                    href="productAddController"
                    title="Thêm"
                    ><i class="fas fa-plus"></i> Tạo mới sản phẩm</a
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
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Tình trạng</th>
                    <th>Giá tiền</th>
                    <th>Danh mục</th>
                    <th>Nhà cung cấp</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($data["product"])){
                    while($row = mysqli_fetch_array($data["product"])){


                  ?>
                  <tr>
                    <td width="10">
                      <input type="checkbox" name="check1" value="1" />
                    </td>
                    <td><?php echo $row["product_id"]; ?></td>
                    <td><?php echo $row["product_name"]; ?></td>
                    <td>
                      <img
                        src="public/upload/<?php echo $row["product_img"]; ?>"
                        alt=""
                        width="100px"
                      />
                    </td>
                    <td><?php echo $row["product_quantity"]; ?></td>
                    <td><span class="badge bg-success">Còn hàng</span></td>
                    <td><?php echo $row["product_price"]; ?></td>
                    <td><?php echo $row["cartegory_name"]; ?></td>
                    <td><?php echo $row["brand_name"]; ?></td>
                    <td>
                    <form action="productController/delete_product" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                    <button
                        class="btn btn-primary btn-sm trash"
                        type="submit"
                        title="Xóa"
                      >
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                    <form action="productUpdateController" method="post">

                    <input type="hidden" name="brand_id" value="<?php echo $row['brand_id'];?>">
                    <input type="hidden" name="category_id" value="<?php echo $row['cartegory_id'];?>">
                    <input type="hidden" name="brandName" value="<?php echo $row['brand_name'];?>">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">

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