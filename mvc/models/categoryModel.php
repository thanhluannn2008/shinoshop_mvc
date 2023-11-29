<?php
class categoryModel extends DB
{
    public function show_category()
    {
        $qr = "SELECT * FROM tbl_cartegory";
        return mysqli_query($this->con, $qr);
    }

}
?>