<?php

// http://localhost/live/Home/Show/1/2

class brandUpdateController extends Controller{

    // Must have SayHi()
    public $brand;
    public $cat;
    public $updateBrand;

    public $getBrand;


    function __construct(){
        $this->brand = $this->model("brandModel");
        $this->cat = $this->model("categoryModel");
        $this->updateBrand = $this->model("brandModel");
        $this->getBrand = $this->model("brandModel");

    }
    function SayHi(){
       // $teo = $this->model("brandModel");
        // echo $teo->getBrand();
        $brandID = $_POST['brand_id'];
        $this->view("brandView",[
            "brand"=> $this->brand->getBrand(),
            "getbrand"=> $this->getBrand->getBrandByID($brandID),
            "catt"=> $this->cat->getCategory(),
            "Page"=>"formUpdateBrand"
        ]);

    }
public function update_brand(){

    if(isset($_POST['btnUpdateBrand'])){
        $brandName = $_POST['brandName'];
        $brandID = $_POST['brand_id'];
        $category_id = $_POST['cartegory_id'];
        

        $this->updateBrand->updateBrand($category_id,$brandName, $brandID) ;
        // echo $brandName;
        // echo $category_id;
        // echo $brandID;

        header("Location: /admin/brandController");

    }

}

public function getBrandById(){
    if(isset( $_POST["brand_id"])){
        $brand_id = $_POST["brand_id"];
        $this->getBrand->getBrandByID($brand_id);

    }else{
        echo "Biến khong tồn tại";
    }
}
}
?>