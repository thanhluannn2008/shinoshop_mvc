<?php
class categoryController extends Controller
{
    public $cat;
    public $pd;
    public $outstanding_product;
    public $brand;

    function __construct(){
        $this->cat = $this->model("categoryModel");
        $this->pd = $this->model("productModel");
        $this->outstanding_product = $this->model("productModel");
        $this->brand = $this->model("brandModel");
    }
    // Must have SayHi()
    function SayHi()
    {
        $this->view("categoryView", [
            "category"=>$this->cat->show_category(), 
            "product"=>$this->pd->get_productFE(),
            "brand"=> $this->brand->showBrand(),
            "Page"=>"categoryViewList"
        ]);

    }

    // public function show_outstanding_products(){
    //     $get_outstanding_product = $this->outstanding_product->get_outstanding_products();


    //     $this->view("categoryView", [
    //         "category"=>$this->cat->show_category(), 
    //         "product"=>$this->pd->get_productFE(),
    //         "outstandingProduct"=> $get_outstanding_product,
    //         "Page"=>"categoryOutstandingProduct"
    //     ]);
    // }

    // public function show_male_products(){
    //     $get_outstanding_product = $this->outstanding_product->get_productFEMale();


    //     $this->view("categoryView", [
    //         "category"=>$this->cat->show_category(), 
    //         "product"=>$this->pd->get_productFE(),
    //         "outstandingProduct"=> $get_outstanding_product,
    //         "Page"=>"categoryViewMaleProduct"
    //     ]);
    // }

    // public function show_female_products(){
    //     $get_outstanding_product = $this->outstanding_product->get_productFEfeMale();


    //     $this->view("categoryView", [
    //         "category"=>$this->cat->show_category(), 
    //         "product"=>$this->pd->get_productFE(),
    //         "outstandingProduct"=> $get_outstanding_product,
    //         "Page"=>"categoryViewFemaleProduct"
    //     ]);
    // }

    public function show_product_by_category($category_id){
        switch($category_id){
            case '7':
                $get_outstanding_product = $this->outstanding_product->get_outstanding_products();
                $this->view("categoryView", [
                    "category"=>$this->cat->show_category(), 
                    "product"=>$this->pd->get_productFE(),
                    "brand"=> $this->brand->showBrand(),
                    "outstandingProduct"=> $get_outstanding_product,
                    "Page"=>"categoryOutstandingProduct"
                ]);
            case '9':
                $get_outstanding_product = $this->outstanding_product->get_productFEMale();


                $this->view("categoryView", [
                    "category"=>$this->cat->show_category(), 
                    "product"=>$this->pd->get_productFE(),
                    "brand"=> $this->brand->showBrand(),
                    "outstandingProduct"=> $get_outstanding_product,
                    "Page"=>"categoryViewMaleProduct"
                ]);
            case '10':
                $get_outstanding_product = $this->outstanding_product->get_productFEfeMale();


                $this->view("categoryView", [
                    "category"=>$this->cat->show_category(), 
                    "product"=>$this->pd->get_productFE(),
                    "brand"=> $this->brand->showBrand(),
                    "outstandingProduct"=> $get_outstanding_product,
                    "Page"=>"categoryViewFemaleProduct"
                ]);
         }
    }
    
    public function search_product(){
        $search = isset($_POST['tukhoa']) ? $_POST['tukhoa'] : "";
        if($search ){
            $get_product_search = $this->pd->get_producByname($search);
            $this->view("categoryView", [
                "category"=>$this->cat->show_category(), 
                "product"=>$this->pd->get_productFE(),
                "brand"=> $this->brand->showBrand(),
                "get_product_search" =>$get_product_search,
                "Page"=>"categoryViewList"
            ]);
        }
    }

}

?>