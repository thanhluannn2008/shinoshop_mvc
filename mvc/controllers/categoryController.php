<?php
class categoryController extends Controller
{
    public $cat;
    public $pd;

    function __construct(){
        $this->cat = $this->model("categoryModel");
        $this->pd = $this->model("productModel");
    }
    // Must have SayHi()
    function SayHi()
    {
        $this->view("categoryView", [
            "category"=>$this->cat->show_category(), 
            "product"=>$this->pd->get_productFE(),
            "Page"=>"categoryViewList"
        ]);

    }
}
?>