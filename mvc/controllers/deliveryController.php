<?php
class DeliveryController extends Controller{
    public $delivery;
    public $cat;

    public $cart;

    function __construct(){
        $this->delivery = $this->model("deliveryModel");
        $this->cat = $this->model("categoryModel");
        $this->cart = $this->model("cartModel");
    }

    function SayHi(){
        $get_product_cart = $this->cart->get_product_cart();
        $this->view("deliveryView", [
            "Page"=>"deliveryViewList",
            "category"=>$this->cat->show_category(),
            "get_product_cart"=> $get_product_cart
        ]);
    }
}
?>