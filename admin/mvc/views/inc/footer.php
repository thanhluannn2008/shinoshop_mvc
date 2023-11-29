<div class="text-center" style="font-size: 13px">
        <p>
          <b
            >Copyright
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script>
          </b>
        </p>
      </div>
    </main>
    <script src="./asset/js/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./asset/js/popper.min.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <!--===============================================================================================-->
    <script src="./asset/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./asset/js/main.js"></script>
    <!--===============================================================================================-->
    <script src="./asset/js/plugins/pace.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="./asset/js/plugins/chart.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript">
      var data = {
        labels: [
          "Tháng 1",
          "Tháng 2",
          "Tháng 3",
          "Tháng 4",
          "Tháng 5",
          "Tháng 6",
        ],
        datasets: [
          {
            label: "Dữ liệu đầu tiên",
            fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
            strokeColor: "rgb(255, 212, 59)",
            pointColor: "rgb(255, 212, 59)",
            pointStrokeColor: "rgb(255, 212, 59)",
            pointHighlightFill: "rgb(255, 212, 59)",
            pointHighlightStroke: "rgb(255, 212, 59)",
            data: [20, 59, 90, 51, 56, 100],
          },
          {
            label: "Dữ liệu kế tiếp",
            fillColor: "rgba(9, 109, 239, 0.651)  ",
            pointColor: "rgb(9, 109, 239)",
            strokeColor: "rgb(9, 109, 239)",
            pointStrokeColor: "rgb(9, 109, 239)",
            pointHighlightFill: "rgb(9, 109, 239)",
            pointHighlightStroke: "rgb(9, 109, 239)",
            data: [48, 48, 49, 39, 86, 10],
          },
        ],
      };
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);

      var ctxb = $("#barChartDemo").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data);
    </script>
    <script type="text/javascript">
      //Thời Gian
      function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
          dd = "0" + dd;
        }
        if (mm < 10) {
          mm = "0" + mm;
        }
        today = day + ", " + dd + "/" + mm + "/" + yyyy;
        tmp = '<span class="date"> ' + today + " - " + nowTime + "</span>";
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
          if (i < 10) {
            i = "0" + i;
          }
          return i;
        }
      }
    </script>

<script>
      function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);
      }
      jQuery(function () {
        jQuery(".trash").click(function () {
          swal({
            title: "Cảnh báo",
            text: "Bạn có chắc chắn là muốn xóa sản phẩm này?",
            buttons: ["Hủy bỏ", "Đồng ý"],
          }).then((willDelete) => {
            if (willDelete) {
              swal("Đã xóa thành công.!", {});
            }
          });
        });
      });
      oTable = $("#sampleTable").dataTable();
      $("#all").click(function (e) {
        $("#sampleTable tbody :checkbox").prop(
          "checked",
          $(this).is(":checked")
        );
        e.stopImmediatePropagation();
      });
    </script>
<!-- 
<script>
        $(document).ready(function() {
            // Xử lý sự kiện khi nhấp nút "Xóa"
            $(".trash").click(function() {
                var brand_id = $(this).closest("tr").find(".brand-id").text();

                // Hiển thị cảnh báo SweetAlert2
                Swal.fire({
                    title: "Cảnh báo",
                    text: "Bạn có chắc chắn muốn xóa sản phẩm có ID " + id + "?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Đồng ý",
                    cancelButtonText: "Hủy bỏ"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Gửi yêu cầu AJAX để xóa dữ liệu từ cơ sở dữ liệu
                        $.ajax({
                            type: "GET",
                            url: "deletebrand", // Thay đổi thành đường dẫn của tệp xử lý xóa trên máy chủ của bạn
                            data: { brand_id: brand_id },
                            success: function(response) {
                                // Hiển thị thông báo thành công
                                Swal.fire("Đã xóa thành công!", "", "success");

                                // Tùy chỉnh: Xóa hàng (dòng) từ bảng
                                var row = $(".brand-id:contains('" + brand_id + "')").closest("tr");
                                row.remove();
                            },
                            error: function(error) {
                                console.log(error);
                                Swal.fire("Lỗi khi xóa dữ liệu", "", "error");
                            }
                        });
                    }
                });
            });
        });
    </script> -->
  </body>
</html>
