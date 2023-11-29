<?php
class categoryModel extends DB{
    public function getCategory(){
        $qr = "SELECT * FROM tbl_cartegory";
        return mysqli_query($this->con, $qr);
    }

    public function getCategoryByID($category_id){
        $qr = "SELECT * FROM tbl_cartegory WHERE cartegory_id = $category_id";
        return mysqli_query($this->con, $qr);
    }

    public function deleteCat($category_id) {

        // Xóa dữ liệu dựa trên ID
        $qr = "DELETE FROM tbl_cartegory WHERE cartegory_id = $category_id";

        $result = false;

        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Xóa thất bại
        } else {
            return  json_encode($result);// Xóa thành công
        }
        
    }

    public function insertCategory($category_name){
        $qr = "INSERT INTO tbl_cartegory (cartegory_name) VALUES ('$category_name')";
        $result = false;

        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Thêm thất bại
        } else {
            return  json_encode($result);// Thêm thành công
        }
    }
    

    public function updateCategory($category_id, $category_name){
        $qr = "UPDATE tbl_cartegory SET cartegory_name = '$category_name' WHERE cartegory_id ='$category_id'";
        $result = false;

        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Thêm thất bại
        } else {
            return  json_encode($result);// Thêm thành công
        }

    }
}
?>