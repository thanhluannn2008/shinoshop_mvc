<?php
class BrandModel extends DB{

    function showBrand(){
        $qr = "SELECT * FROM tbl_brand";
        return mysqli_query($this->con, $qr);
    }
}
?>