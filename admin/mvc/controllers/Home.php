<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
       // $teo = $this->model("brandModel");
        // echo $teo->getBrand();
        $this->view("trangchu",[
        ]);

    }

    // function Show(){        
    //     // Call Models
    //     $teo = $this->model("brandModel");
    //     // $tong = $teo->Tong($a, $b); // 3

    //     // Call Views
    //     // $this->view("trangchu", [
    //     //     "Page"=>"news",
    //     //     "Number"=>$tong,
    //     //     "Mau"=>"red",
    //     //     "SoThich"=>["A", "B", "C"],
    //     //     "SV" => $teo->SinhVien()
    //     // ]);
    //     $this->view("trangchu");
    // }
    }
?>