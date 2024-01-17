<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller
{

    // Must have SayHi()
    public $cat;
    public $brand;

   
    function SayHi()
    {
        $this->cat = $this->model("categoryModel");
        $this->brand = $this->model("brandModel");
        $this->view("trangchu", [
            "category" => $this->cat->show_category(),
            "brand"=> $this->brand->showBrand(),
            "Page" => "slider"
        ]);

    }

    // function Show($a, $b){        
    //     // Call Models
    //     $teo = $this->model("SinhVienModel");
    //     $tong = $teo->Tong($a, $b); // 3

    //     // Call Views
    //     $this->view("aodep", [
    //         "Page"=>"news",
    //         "Number"=>$tong,
    //         "Mau"=>"red",
    //         "SoThich"=>["A", "B", "C"],
    //         "SV" => $teo->SinhVien()
    //     ]);
    // }
}
?>