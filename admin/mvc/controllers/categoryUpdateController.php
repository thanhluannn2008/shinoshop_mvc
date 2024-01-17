<?php

// http://localhost/live/Home/Show/1/2

class categoryUpdateController extends Controller{

    // Must have SayHi()
    public $cate;
    public $updateCat;

    public $getCat;


    function __construct(){
        $this->cate = $this->model("categoryModel");
        $this->updateCat = $this->model("categoryModel");
        $this->getCat = $this->model("categoryModel");
    }
    function SayHi(){
        $category_id = $_POST["category_id"];
        $this->view("categoryView",[
            "cat"=> $this->cate->getCategory(),
            "getCat"=> $this->getCat->getCategoryByID($category_id),
            "Page"=>"formUpdateCategory"
        ]);
    }

    public function getCategoryById(){
        if(isset( $_POST["category_id"])){
            $category_id = $_POST["category_id"];
            $this->getCat->getCategoryByID($category_id);
    
        }else{
            echo "Biến khong tồn tại";
        }
    }
public function update_cat(){
    // if(isset( $_POST["category_id"])){
    //     $category_id = $_POST["category_id"];
    //     $category_name = $_POST["category_name"];
    //     $this->updateCat->updateCat($category_id, $category_name);

    // }else{
    //     echo "Biến khong tồn tại";
    // }

    if(isset($_POST['btnUpdateCat'])){
        $category_id = $_POST["category_id"];
        $category_name = $_POST["category_name"];

        $this->updateCat->updateCategory($category_id, $category_name);

        header("Location: /mvc-project/admin/categoryController");

    }
}

}
?>