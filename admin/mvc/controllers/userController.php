<?php

class UserController extends Controller{
    public $user;
    public $register;
    public $insertUser;
    public $deleteUser;

    public $login_admin;
    public $updateUser;

    function __construct(){
        $this->user = $this->model("userModel");
        $this->register = $this->model("userModel");
        $this->insertUser = $this->model("userModel");
        $this->deleteUser = $this->model("userModel");
    }

    function sayHi(){
        
        $this->view("userView", [
            "Page"=> "userViewList",
            "get_user" => $this->user->get_user()

        ]);
    }

    public function formLogingAdmin(){
        $this->view("userView", [
            "Page"=> "adminLogin",
            "get_user" => $this->user->get_user()

        ]);
    }

    public function formAdduser(){
        $this->view("userView", [
            "Page"=> "formAddUser",
            "get_user" => $this->user->get_user()

        ]);
    }

    public function formUpdateUser(){
        $ID = $_POST["userID"];
        $this->view("userView", [
            "Page"=> "formUpdateUser",
            "get_user" => $this->user->get_user(),
            "get_user_by_id" => $this->user->get_user_byID($ID),
        ]);
    }


    public function insert_user(){
        if(isset($_POST["btnAddUser"])){
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $pass = $_POST["pass"];
            // $address = $_POST["Address"];
            // $sdt = $_POST["sdt"];
            // $birthday = $_POST["birthday"];
            // $sex = $_POST["sex"];
            $level = $_POST["level"];
            $user_img = $_FILES["userimg"]["name"];

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES["userimg"]['name'];
            $file_size = $_FILES["userimg"]['size'];
            $file_temp = $_FILES["userimg"]['tmp_name'];
   
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
            $upload_image = "public/upload/" . $unique_image;
            move_uploaded_file($_FILES["userimg"]['tmp_name'], "public/upload/" . $_FILES["userimg"]['name']);
    
            $this->insertUser->insertUser($userName, $userEmail, $pass, $level, $user_img);
    
            $this->view("userView", [
                "Page"=> "userViewList",
                "get_user" => $this->user->get_user()
            ]);
        }
    }

    public function update_user(){
        if(isset($_POST["btnUpdateUser"])){
            $ID = $_POST["userID"];
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $pass = $_POST["pass"];
            // $address = $_POST["Address"];
            // $sdt = $_POST["sdt"];
            // $birthday = $_POST["birthday"];
            // $sex = $_POST["sex"];
            $level = $_POST["level"];
            $user_img = $_FILES["userimg"]["name"];

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES["userimg"]['name'];
            $file_size = $_FILES["userimg"]['size'];
            $file_temp = $_FILES["userimg"]['tmp_name'];
   
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
            $upload_image = "public/upload/" . $unique_image;
            move_uploaded_file($_FILES["userimg"]['tmp_name'], "public/upload/" . $_FILES["userimg"]['name']);
    
            $this->updateUser->updateUser($ID, $userName, $userEmail, $pass, $level, $user_img);
    
            $this->view("userView", [
                "Page"=> "userViewList",
                "get_user" => $this->user->get_user()
            ]);
        }
    }

    public function delete_user(){

        $userID = $_POST["userID"];

        $this->deleteUser->deleteUser($userID);

        $this->view("userView", [
            "Page"=> "userViewList",
            "get_user" => $this->user->get_user()
        ]);



    }

    public function login_admin(){
        $uname = $_POST["uname"];
        $psw= $_POST["psw"];
        $level = $_POST["level"];

        if(empty($adminUser)|| empty($adminPass)){
            $alert = "User and Password must be not empty";
            return $alert;
        }else{
            // $query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1";
            // $result = $this->db->select($query);
            $result = $this->login_admin->get_user_by_level($level, $uname, $psw);


            if($result != false){
                $value = $result->fetch_assoc();
                session::set('login', true);
                session::set('userID', $value['userID']);
                session::set('userName', $value['userName']);
                session::set('level', $value['level']);
               // session::set('adminPass', $value['adminPass']);
                //session::set('adminName', $value['adminName']);
                header('location:/mvc-project/admin/productController');
            }else{
                $alert = "User and Password not match";
                return $alert;

            }
        }
    }


}

?>