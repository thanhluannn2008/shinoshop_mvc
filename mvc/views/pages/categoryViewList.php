
<!------------------------------------------ cartergory -------------------------------- ---------------------------------->
<section class="cartergory">
    <div class="container">
        <div class="cartergory-top row">
            <p>Trang chủ</p> <span>&#8594;</span>
            <p>BỘ SƯU TẬP</p> <Span>&#8594;</Span>
            <p>Hàng mới về</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="cartergory-left">
                <ul>
                    <li class="cartergory-left-li"><a href="#">NỮ</a>
                        <ul>
                            <li><a href=""></a>HÀNG NỮ MỚI VỀ</li>
                            <li><a href=""></a>HÀNG NỮ MỚI VỀ</li>
                            <li><a href=""></a>HÀNG NỮ MỚI VỀ</li>
                            <li><a href=""></a>HÀNG NỮ MỚI VỀ</li>
                        </ul>

                    </li>
                    <li class="cartergory-left-li"><a href="#">NAM</a>
                        <ul>
                            <li><a href=""></a>HÀNG NAM MỚI VỀ</li>
                            <li><a href=""></a>HÀNG NAM MỚI VỀ</li>
                            <li><a href=""></a>HÀNG NAM MỚI VỀ</li>
                            <li><a href=""></a>HÀNG NAM MỚI VỀ</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="cartergory-right row">
                <div class="cartergory-right-top-items">
                    <p>HÀNG MỚI VỀ</p>
                </div>
                <div class="cartergory-right-top-items">
                    <button><span>Bộ lọc</span><i class="fa-solid fa-sort-down"></i></button>
                </div>
                <div class="cartergory-right-top-items">
                    <select name="" id="">
                        <option value="">Sắp xếp</option>
                        <option value="">Giá cao đến thấp</option>
                        <option value="">Giá thấp đến cao</option>
                    </select>
                </div>
                <div class="cartergory-right-content row">

                    <?php
                    if (isset($data["get_product_search"])) {
                            while ($result = mysqli_fetch_array($data["get_product_search"])) {

                                ?>
                                <div class="cartergory-right-content-items">
                                    <a href="">
                                        <form action="productController/show_product" method="post">
                                            <input type="hidden" name="product_id" value="<?php echo $row["product_id"]?>">
                                        <img src="/admin/public/upload/<?php echo $result['product_img']; ?>" alt="">
                                        <h1>
                                            <?php echo $result['product_name']; ?>
                                        </h1>
                                        <p>
                                            <?php echo $result['product_price']; ?><sup>đ</sup>
                                        </p>
                                        </form>
                                    </a>
                                </div>
                                <?php
                            }
                    } else {
                        if (isset($data["product"])) {
                            while ($row = mysqli_fetch_array($data["product"])) {

                                ?>
                                <div class="cartergory-right-content-items">
                                    <a href="productController/show_product/<?php echo $row["product_id"]?>">
                                        <img src="/mvc-project/admin/public/upload/<?php echo $row['product_img']; ?>" alt="">
                                        <h1>
                                            <?php echo $row['product_name']; ?>
                                        </h1>
                                        <p>
                                            <?php echo $row['product_price']; ?><sup>đ</sup>
                                        </p>
                                    </a>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
                <div class="cartergory-right-bottom row">
                    <div class="cartergory-right-bottom-items-left">
                        <p>Hiển thị 2 <span>|</span> 4 sản phẩm</p>
                    </div>
                    <div class="cartergory-right-bottom-items-left">
                        <p><span>&#171;</span> 1 2 3 <span>&#187;</span> Trang cuối</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>