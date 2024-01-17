<?php
class PaymentController extends Controller{

    public $payment;


    
    public $cat;

    public $cart;

    function __construct(){
        $this->payment = $this->model("paymentModel");
        $this->cat = $this->model("categoryModel");
        $this->cart = $this->model("cartModel");
    }

    function SayHi(){
        $get_product_cart = $this->cart->get_product_cart();
        $this->view("paymentView",[
        "Page"=>"paymentViewList",
        "get_product_cart"=> $get_product_cart,
        "category"=>$this->cat->show_category(),
        ]);
    }

    public function insert_payment(){
        if(isset($_POST["btnPayment"])){
            $customerName= $_POST["customerName"];
            $customerPhone= $_POST["customerPhone"];
            $customerEmail= $_POST["customerEmail"];
            $province= $_POST["province"];
            $town= $_POST["town"];
            $address= $_POST["address"];
    
            $insert_csPayment= $this->payment->insert_csPayment($customerName, $customerPhone, $customerEmail, $province, $town, $address);
    
            $get_product_cart = $this->cart->get_product_cart();
            $this->view("paymentView",[
                "Page"=>"paymentViewList",
            "get_product_cart"=> $get_product_cart,
            "category"=>$this->cat->show_category(),
            "insert_csPayment"=> $insert_csPayment
            ]);
        }


    }
}
?>