<?php
class UserModel extends DB {
    // public function userLogin($uname){
    //     $qr= "SELECT * FROM tbl_user WHERE userName = '$uname'";
    //     $result = mysqli_query($this->con, $qr );
    //     $result->fetch_assoc();
    //     return $result;;

        // if (mysqli_query($this->con, $qr )) {
        //     $result=  true; // Xóa thất bại
        // } else {
        //     return  json_encode($qr);// Xóa thành công
        // }
    // }

    public function userLogin($uname, $psw) {
        $qr = "SELECT * FROM tbl_user WHERE userName = '$uname' LIMIT 1";
        $result = mysqli_query($this->con, $qr);
    
        // Kiểm tra xem truy vấn có thành công không
        if (!$result) {
            die('Query failed: ' . mysqli_error($this->con));
        }
    
        // Kiểm tra xem có dữ liệu được trả về không
        if ($result->num_rows > 0) {
            // Lấy dữ liệu từ kết quả truy vấn
            $user = $result->fetch_assoc();
    
            // Trả về dữ liệu người dùng
            return $user;
        } else {
            // Trường hợp không có dữ liệu
            return null;
        }
    }

    public function get_user(){
        $qr = "SELECT * FROM tbl_user";
        return mysqli_query($this->con, $qr);
    }

    public function insertUser($userName, $userEmail, $pass, $level, $user_img){
        $qr = "INSERT INTO tbl_user (userName,  userEmail, Pass, level, user_img) VALUES('$userName','$userEmail','$pass','$level','$user_img')";
        // return mysqli_query($this->con, $qr);
        $result = false;
        if (mysqli_query($this->con, $qr )) {
            $result=  true; // Xóa thất bại
        } else {
            return  json_encode($result);// Xóa thành công
        }
    }
    
}
?>