<?php
class brandModel extends DB{
    public function getBrand(){
        $qr = "SELECT tbl_brand. *, tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC";
        return mysqli_query($this->con, $qr);
    }
    public function getBrandByID($brand_id){
        $qr = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id'";
        return mysqli_query($this->con, $qr);

    }

    public function getCategory(){
        $qr = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        return mysqli_query($this->con, $qr);
    }

    public function deleteBrand($brand_id) {

        // Xóa dữ liệu dựa trên ID
        $qr = "DELETE FROM tbl_brand WHERE brand_id = $brand_id";

        $result = false;

        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Xóa thất bại
        } else {
            return  json_encode($result);// Xóa thành công
        }
        
    }

    public function insertBrand($category_id,$brand_name){
        $qr = "INSERT INTO tbl_brand (cartegory_id,brand_name) VALUES ('$category_id','$brand_name')";
        $result = false;
        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Thêm thất bại
        } else {
            return  json_encode($result);// Thêm thành công
        }
    }

    public function updateBrand($cartegory_id,$brand_name,$brand_id){
        // echo $cartegory_id;
        // echo $brand_name;
        // echo $brand_id;
        $qr = "UPDATE tbl_brand SET brand_name = '$brand_name', cartegory_id = $cartegory_id WHERE brand_id = '$brand_id'";
        $result = false;
        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Cập nhật thất bại
        } else {
            return  json_encode($result);// Cập nhật thành công
        }

    }

    
}
?>