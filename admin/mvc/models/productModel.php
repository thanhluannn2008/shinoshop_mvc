<?php
class ProductModel extends DB {


    public function showProduct(){
        $qr = "SELECT * from tbl_product as pd
        inner join tbl_brand as br
        on pd.brand_id= br.brand_id
        inner join tbl_cartegory as cat
        on cat.cartegory_id = br.cartegory_id
        order by pd.product_id desc";
        return mysqli_query($this->con, $qr);
    }

    public function getProduct($id)
    {
        $qr = "SELECT * FROM tbl_product WHERE product_id = '$id'";
        $result = false;

        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Xóa thất bại
        } else {
            return  json_encode($result);// Xóa thành công
        }
     }

    public function deleteProduct($product_id){
        $qr = "DELETE FROM tbl_product WHERE product_id = $product_id";
        $result = false;

        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Xóa thất bại
        } else {
            return  json_encode($result);// Xóa thành công
        }

    }

    public function insertProduct($product_name, $category_id, $brand_id, $product_price, $product_capital_price, $mota, $product_quantity,$product_img){
        $qr = "INSERT INTO tbl_product (
            product_name,
            cartegory_id,
            brand_id,
            product_price,
            product_capital_price,
            product_desc,
            product_img,
            product_quantity) VALUES (
                '$product_name',
                '$category_id',
                '$brand_id',
                '$product_price',
                '$product_capital_price',
                '$mota',
                '$product_img',
                '$product_quantity')";
        return mysqli_query($this->con, $qr);
    }

    public function updateProduct($id, $product_name, $category_id, $brand_id, $product_price, $product_capital_price, $mota, $product_quantity,$product_img){
        $qr ="UPDATE tbl_product 
            SET
            product_name = '$product_name',
            cartegory_id = '$category_id',
            brand_id = '$brand_id',
            product_price = '$product_price',
            product_capital_price = '$product_capital_price',
            product_quantity = '$product_quantity',
            product_img = '$product_img',
            product_desc = '$mota'
            WHERE  product_id='$id'";

        return mysqli_query($this->con, $qr);

    }
}

?>