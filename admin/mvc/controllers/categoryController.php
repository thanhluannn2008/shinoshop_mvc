<?php

// http://localhost/live/Home/Show/1/2

class categoryController extends Controller{

    // Must have SayHi()
    public $cat;
    public $insertCat;

    public $deleteCat;
    public $updateCat;

    function __construct(){
        $this->cat = $this->model("categoryModel");
        $this->insertCat = $this->model("categoryModel");
        $this->deleteCat = $this->model("categoryModel");
        $this->updateCat = $this->model("categoryModel");
    }
    function SayHi(){
       // $teo = $this->model("brandModel");
        // echo $teo->getBrand();
        $this->view("categoryView",[
            "cat"=> $this->cat->getCategory(),
            "Page"=>"categoryViewList"
        ]);

    }

    function Show(){        
        // Call Models
        $teo = $this->model("categoryModel");
        // $tong = $teo->Tong($a, $b); // 3

        // Call Views
        // $this->view("trangchu", [
        //     "Page"=>"news",
        //     "Number"=>$tong,
        //     "Mau"=>"red",
        //     "SoThich"=>["A", "B", "C"],
        //     "SV" => $teo->SinhVien()
        // ]);
        $this->view("");
    }
public function delete_cat(){
    if (isset($_POST['category_id'])) {
        // Lấy giá trị 'brand_id'
        $catIdToDelete = $_POST['category_id'];
        $this->deleteCat->deleteCat($catIdToDelete);
        //hiện giao diện
        header("Location: /admin/categoryController");
        // $this->view("brandView",[
        //     "brand"=>$this->brand->getBrand()
        // ]);


    } else {
        // Nếu không tồn tại 'brand_id', xử lý lỗi hoặc thực hiện hành động phù hợp
        $this->view("categoryView",[
            "cat"=>$this->cat->getCategory()
        ]);
    }
}

}
?>