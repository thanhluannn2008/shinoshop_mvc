<?php
class CartController extends Controller {

    public $cart;
    public $cat;
    public $del_cart;
    public $id;

    function __construct(){
        $this->cart = $this->model("cartModel");
        $this->cat = $this->model("categoryModel");
        $this->del_cart = $this->model("cartModel");
    }

    function SayHi(){
        $get_product_cart = $this->cart->get_product_cart();
        $this->view("cartView",[
            "Page"=> "cartViewList",
            "category"=> $this->cat->show_category(),
            "get_product_cart"=> $get_product_cart
        ]);
    }

    public function add_to_cart($id){

        if(isset($id)){
            $quantity = $_POST["quantity"];

            $add_to_cart = $this->cart->add_to_Cart($id, $quantity);
            $get_product_cart = $this->cart->get_product_cart();
    
            $this->view("cartView", [
                "Page"=> "cartViewList",
                "category" => $this->cat->show_category(),
                "add_to_cart"=>$add_to_cart,
                "get_product_cart"=> $get_product_cart
            ]);
        }

        // echo $id;
        // echo $quantity;
    }

    public function del_product_cart($cart_id){
        
        $del_product_cart = $this->del_cart->del_product_cart($cart_id);
        $get_product_cart = $this->cart->get_product_cart();

        $this->view("cartView", [
            "Page"=> "cartViewList",
            "category" => $this->cat->show_category(),
            "del_product_cart"=> $del_product_cart,
            "get_product_cart"=> $get_product_cart
            
        ]);


    }
}
?>