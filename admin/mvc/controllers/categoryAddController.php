<?php

// http://localhost/live/Home/Show/1/2

class categoryAddController extends Controller{

    // Must have SayHi()
    public $cate;
    public $insertCat;


    function __construct(){
        $this->cate = $this->model("categoryModel");
        $this->insertCat = $this->model("categoryModel");
    }
    function SayHi(){
       // $teo = $this->model("brandModel");
        // echo $teo->getBrand();
        $this->view("categoryView",[
            "cat"=> $this->cate->getCategory(),
            "Page"=>"formAddCategory"
        ]);

    }
public function insert_cat(){
    if(isset($_POST['btnAddCat'])){
        $categoryName = $_POST['categoryName'];
        //echo $categoryName ;

        $this->insertCat->insertCategory($categoryName);

        header("Location: /mvc-project/admin/categoryAddController");

    }

}

}
?>