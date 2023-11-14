<?php
class productController extends Controller
{

    // Must have SayHi()
    function SayHi()
    {
        $teo = $this->model("cartegoryModel");
        $this->view("trangchu", [
            "cartegory" => $teo->show_cartegory(),
            "Page" => "product"
        ]);

    }
}
?>