<?php
class productController extends Controller
{

    // Must have SayHi()
    function SayHi()
    {
        $teo = $this->model("cartegoryModel");
        $this->view("trangchu", [
            "cartegory" => $teo->show_cartegory(),
            "Page" => "productView"
        ]);

        $this->view("trangchu", [
            "product" => $teo->show_product(),
            "Page" => "productView"
        ]);

    }
}
?>