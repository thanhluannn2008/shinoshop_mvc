<?php
class UserModel extends DB{

    public function insertUser($userName, $userEmail, $pass, $level, $user_img){
        $qr = "INSERT INTO tbl_user (userName,  userEmail, Pass, level, user_img) VALUES('$userName','$userEmail','$pass','$level','$user_img')";
        return mysqli_query($this->con, $qr);
    }

    public function updateUser($ID, $userName, $userEmail, $pass, $level, $user_img){
        $qr = "UPDATE tbl_user SET userName = '$userName', userEmail = '$userEmail', level = '$level', user_img = '$user_img', pass = '$pass' WHERE userID = '$ID'";
        return mysqli_query($this->con, $qr);
    }

    public function get_user(){
        $qr = "SELECT * FROM tbl_user";
        return mysqli_query($this->con, $qr);
    }

    public function get_user_byID($id){
        $qr = "SELECT * FROM tbl_user WHERE userID = '$id'";
        return mysqli_query($this->con, $qr);
    }

    public function deleteUser($userID){
        $qr = "DELETE FROM tbl_user WHERE userID = '$userID'";
        return mysqli_query($this->con, $qr);
    }

    public function get_user_by_level($level, $uname, $psw){
        $qr = "SELECT * FROM tbl_user WHERE level = '$level' AND userName = '$uname' AND Pass = '$psw'";
        return mysqli_query($this->con, $qr);
    }
}
?>