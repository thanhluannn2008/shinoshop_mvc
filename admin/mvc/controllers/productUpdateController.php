<?php
class ProductUpdateController extends Controller{


    public $product;
    public $cat;

    public $brand;
    public $updateProduct;

    public $getProduct;
    function __construct(){
        $this->product = $this->model("productModel");
        $this->updateProduct = $this->model("productModel");
        $this->cat = $this->model("categoryModel");
        $this->brand = $this->model("brandModel");
        $this->getProduct = $this->model("productModel");
    }

    function SayHi(){
        $id = $_POST["product_id"];
        $this->view("productView",[
            "catt"=>$this->cat->getCategory(),
            "brand"=>$this->brand->getBrand(),
            "getProduct"=>$this->getProduct->getProduct($id),
            "Page"=>"formUpdateProduct"
        ]);
        echo $id;
    }

    public function update_product(){
        if(isset($_POST['btnUpdateProduct'])){
            $id = $_POST["product_id"];
            $product_name = $_POST["product_name"];
            $product_quantity = $_POST["product_quantity"];
            $product_price = $_POST["product_price"];
            $category_id = $_POST["category_id"];
            $brand_id = $_POST["brand_id"];
            $product_capital_price = $_POST["product_capital_price"];
            $product_status = $_POST["product_status"];
            $mota = $_POST["mota"];
            // if(isset($_FILES["product_img"])){
                $product_img = $_FILES["product_img"]["name"];
                $permited = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES["product_img"]['name'];
                $file_size = $_FILES["product_img"]['size'];
                $file_temp = $_FILES["product_img"]['tmp_name'];
       
                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
                $upload_image = "public/upload/" . $unique_image;
                move_uploaded_file($_FILES["product_img"]['tmp_name'], "public/upload/" . $_FILES["product_img"]['name']);
                
            // }
            


            // echo $product_name;
            // echo $product_quantity;
            // echo $product_price;
            // echo $product_capital_price;
            // echo $category_id ;
            // echo $brand_id;
            // echo $mota;
            // echo $product_status;
            // echo $id;
           // print_r($product_img);
    //     var_dump($_POST,$_FILES);
    //    echo '<pre>';
    //    echo print_r($_POST);
    //    echo '</pre>';
              $this->updateProduct->updateProduct($id, $product_name, $category_id, $brand_id, $product_price, $product_capital_price, $mota, $product_quantity, $product_img);
              header("Location: /mvc-project/admin/productController");
        }
    }

}

?>