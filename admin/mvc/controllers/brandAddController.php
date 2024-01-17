<?php

// http://localhost/live/Home/Show/1/2

class brandAddController extends Controller{

    // Must have SayHi()
    public $brand;
    public $cat;
    public $insertBrand;


    function __construct(){
        $this->brand = $this->model("brandModel");
        $this->cat = $this->model("categoryModel");
        $this->insertBrand = $this->model("brandModel");

    }
    function SayHi(){
       // $teo = $this->model("brandModel");
        // echo $teo->getBrand();
        $this->view("brandView",[
            "brand"=> $this->brand->getBrand(),
            "catt"=> $this->cat->getCategory(),
            "Page"=>"formAddBrand"
        ]);

    }
public function insert_brand(){

    if(isset($_POST['btnAddBrand'])){
        $brandName = $_POST['brandName'];
        $category_id = $_POST['cartegory_id'];
        echo $brandName;

         $this->insertBrand->insertBrand($category_id,$brandName) ;

        header("Location: /mvc-project/admin/brandController");

    }

}

}
?>