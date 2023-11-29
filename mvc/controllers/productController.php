<?php
class productController extends Controller
{
    public $product;
    public $cat;

    function __construct(){
        $this->product = $this->model("productModel");
        $this->cat = $this -> model("categoryModel");
    }

    function SayHi(){
        $this->view("productView",[
            "category"=>$this->cat->show_category(),
            "Page"=>"productViewList"
        ]);
    }

    public function show_product($product_id){
        //$product_id = $_GET["product_id"];

        $getproduct = $this->product->get_product($product_id);

        $this->view("productView",[
            "category"=>$this->cat->show_category(),
            "getproduct"=>$getproduct,
            "Page"=>"productViewList"
        ]);

    }
}
?>