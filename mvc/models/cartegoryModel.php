<?php
class cartegoryModel extends DB
{
    public function show_cartegory()
    {
        $qr = "SELECT * FROM tbl_cartegory";
        return mysqli_query($this->con, $qr);
    }

}
?>