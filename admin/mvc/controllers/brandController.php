<?php

// http://localhost/live/Home/Show/1/2

class brandController extends Controller{
    public $deletebrand;
    public $insertbrand;
    public $updatebrand;

    public $brand;
    function __construct(){
        $this->brand = $this->model("brandModel");
        $this->deletebrand = $this->model("brandModel");
        


    }
    // Must have SayHi()
    
    function SayHi(){
        //$brand = $this->model("brandModel");
        $row= $this->brand->getBrand();
        $this->view("brandView",[
            "brand"=>$row,
            "Page"=>"brandViewList"
        ]);

    }

    public function delete_brand(){
    // Kiểm tra xem 'brand_id' có tồn tại trong $_GET không
    if (isset($_POST['brand_id'])) {
        // Lấy giá trị 'brand_id'
        $brandIdToDelete = $_POST['brand_id'];
        $this->deletebrand->deleteBrand($brandIdToDelete);
        //hiện giao diện
        header("Location: /admin/brandController");
        // $this->view("brandView",[
        //     "brand"=>$this->brand->getBrand()
        // ]);


    } else {
        // Nếu không tồn tại 'brand_id', xử lý lỗi hoặc thực hiện hành động phù hợp
        $this->view("brandView",[
            "brand"=>$this->brand->getBrand()
        ]);
    }

    $this->view("brandView",[
        "brand"=>$this->brand->getBrand()
    ]);
        
    }

    public function insert_brand(){
            
    }
}
?>