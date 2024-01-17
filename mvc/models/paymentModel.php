<?php
class PaymentModel extends DB{

    public function insert_csPayment($customerName, $customerPhone, $customerEmail, $province, $town, $address){
        $query = "INSERT INTO tbl_cuspayment(cusName, cusPhone, province, town, address, email) 
                VALUES ('$customerName', '$customerPhone', '$province', '$town', '$address','$customerEmail')";
        $result = false;
        if(mysqli_query($this->con, $query)){
            $result = true;

        }else{
            return json_encode($result);
        }
    }
}
?>