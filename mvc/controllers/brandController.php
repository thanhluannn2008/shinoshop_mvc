<?php
class BrandController extends Controller{
    public $brand;

    function __construct(){
        $this->brand = $this->model("brandModel");
    }

    function SayHi(){
        $this->view("brandView", [
            "Page"=> "brandViewList",
            "brand"=> $this->brand->showBrand()
        ]);
    }
}
?>