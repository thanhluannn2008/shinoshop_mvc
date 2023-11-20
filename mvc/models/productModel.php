<?php
class productModel extends DB
{
    public function show_product()
    {
        $qr = "SELECT * FROM tbl_product";
        return mysqli_query($this->con, $qr);
    }

}
?>