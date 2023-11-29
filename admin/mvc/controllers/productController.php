<?php
class ProductController extends Controller{


    public $product;
    public $deleteProduct;
    function __construct(){
        $this->product = $this->model("productModel");
        $this->deleteProduct = $this->model("productModel");
    }

    function SayHi(){
        $this->view("productView",[
            "product"=>$this->product->showProduct(),
            "Page"=>"productViewList"
        ]);
    }

    public function show_product(){

    }

    public function delete_product(){
        if(isset($_POST["product_id"])){
            $product_id = $_POST["product_id"];
            $this->deleteProduct->deleteProduct($product_id);

            header("Location: /admin/productController");
        }
    }
}

?>