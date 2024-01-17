<?php
class CartModel extends DB{
    public function add_to_Cart($id, $quantity){
        $quantity = mysqli_real_escape_string($this->con, $quantity);
        $id = mysqli_real_escape_string($this->con, $id);
        $sid = session_id();

        $query = "SELECT * FROM tbl_product WHERE product_id = '$id'";
        $result = mysqli_query($this->con, $query);

        // echo '<pre>';
        // echo print_r($result);
        // echo '<pre>';
        while ($row = mysqli_fetch_array($result)) {
            // Xử lý dữ liệu trong $row
            // $row['column_name'] hoặc $row[index]
            $product_img = $row["product_img"];
            $product_price = $row["product_price"];
            $productName = $row["product_name"];
        }


        $query_insert = "INSERT INTO tbl_cart(product_id, sId, product_name, product_price, quantity,product_img) VALUES ('$id', '$sid', '$productName', '$product_price', '$quantity', '$product_img' )";
                $insert_cart = mysqli_query($this->con, $query_insert);

        // $query = "SELECT * FROM tbl_product WHERE product_id = '$id'";
        // return mysqli_query($this->con, $query);

        // echo '<pre>';
        // echo print_r($result);
        // echo '<pre>';

        // $product_img = $result["product_img"];
        // $product_price = $result["product_price"];
        // $productName = $result["product_name"];

        // $query_insert = "INSERT INTO tbl_cart(product_id, sId, product_name, product_price, quantity,product_img) VALUES ('$id', '$sid', '$productName', '$product_price', '$quantity', '$product_img' )";
        //         $insert_cart = $this->db-> insert($query_insert);

    }

    public function del_product_cart($cart_id){
        $cart_id = mysqli_real_escape_string($this->con, $cart_id);
        $query = "DELETE FROM tbl_cart WHERE cart_id = '$cart_id'";
        $result = mysqli_query($this->con, $query);
        if($result){
            header('location:');
        }else{
            $msg = '<span class="eror">Product delete not successfully</span>';
            return $msg;
        }
    }

    public function get_product_cart(){
        $sid = session_id();
        $query= "SELECT * FROM tbl_cart WHERE sId = '$sid'";
    return mysqli_query($this->con, $query);
    }
}
?>