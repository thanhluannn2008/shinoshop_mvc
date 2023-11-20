<!----------------------------------------------------------- product ----------------------------------------------------------->
<section class="product">
    <div class="container">
        <div class="product-top row">
            <p>Trang chủ</p> <span>&#8594;</span>
            <p>BỘ SƯU TẬP</p> <Span>&#8594;</Span>
            <p>Hàng mới về</p>
        </div>
        <?php
        while ($row = mysqli_fetch_array($data["cartegory"])) {
            ?>
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="admin/upload/<?php echo $row['product_img']; ?>" alt="">

                </div>
            </div>
            <div class="product-content-right">
                <div class="product-content-right-proName">
                    <h1>
                        <?php echo $result['product_name']; ?>
                    </h1>
                </div>
                <div class="product-content-right-proPrice">
                    <p>
                        <?php echo $result['product_price']; ?><sup>đ</sup>
                    </p>
                </div>
                <div class="product-content-right-pro-size">
                    <!-- <p style="font-weight: bold;">Size</p> -->
                        <!-- <div class="size">
                        <span>10ml</span> <span>30ml</span> <span>60ml</span> <span>100ml</span> <span>200ml</span>
                    </div> -->
                        <form action="" method="POST">
                            <div class="quantity">
                                <p style="font-weight: bold;">Số lượng:</p>
                                <input type="number" min="1" value="1" name="quantity">
                            </div>

                            <p style="color: red;">Vui lòng chọn</p>


                            <div class="product-content-right-proButton row">
                                <!-- <button class="buy" type="submit">
                                        <a href="cart.php">
                                            <i class="fa-solid fa-cart-arrow-down"></i>
                                            <p>THÊM VÀO GIỎ HÀNG</p>
                                        </a>
                                    </button> -->

                                <input class="buy" type="submit" value="THÊM VÀO GIỎ HÀNG" />
                                <!-- <p>THÊM VÀO GIỎ HÀNG</p> -->

                                <button class="search_in_store">
                                    <p>TÌM TẠI CỬA HÀNG</p>
                                </button>
                            </div>
                        </form>

                        <div class="product-content-right-proIcon">
                            <div class="product-content-right-proIcon-items">
                                <i class="fa-solid fa-phone"></i>
                                <p>Hotline</p>
                            </div>
                            <div class="product-content-right-proIcon-items">
                                <i class="fa-solid fa-comments"></i>
                                <p>Chat</p>
                            </div>
                            <div class="product-content-right-proIcon-items">
                                <i class="fa-solid fa-envelope"></i>
                                <p>Mail</p>
                            </div>
                        </div>
                        <div class="product-content-right-bottom">
                            <div class="product-content-right-bottom-top">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div class="product-content-right-bottom-content-big">
                                <div class="product-content-right-bottom-content">
                                    <div class="product-content-right-bottom-content-detail">
                                        <?php echo $result['product_desc']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
        }
        ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!---------------------------- product related ---------------------------------------------------->
<section class="product-related container">
    <div class="product-related-title">
        <p>SẢN PHẨM LIÊN QUAN </p>
    </div>
    <div class="product-related-content row">
        <?php
        while ($row = mysqli_fetch_array($data["cartegory"])) {
            ?>
            <li><a href="">
                    <?php echo $row["product_img"]; ?>
                </a></li>
            <?php
        }
        ?>
    </div>
</section>