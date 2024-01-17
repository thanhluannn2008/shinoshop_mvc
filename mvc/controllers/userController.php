<?php
class UserController extends Controller{
    public $user;
    public $insertUser;

    function __construct(){
        $this->user = $this->model("userModel");
        $this->insertUser = $this->model("userModel");
    }

    function SayHi(){
        $this->view("loginView");
    }

    // public function user_login() {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $uname = $_POST["uname"];
    //         $pws = $_POST["psw"];
    
    //         $result = $this->user->userLogin($uname);
    //        $jsonString = json_encode($result, JSON_PRETTY_PRINT);
    //         echo $jsonString;


    //         echo $uname;
    //         echo $pws;
    
    //         //iểm tra xem có kết quả hay không
    //         if ($result) {
    //             //$user = $result->fetch_assoc();
    
    //             // Kiểm tra mật khẩu bằng password_verify
    //             if (password_verify($pws, $result["Pass"])) {
    //                 $_SESSION['user'] = $result;
    //                 $this->view("Home");
    //                 exit();
    //             } else {
    //                 echo "Đăng nhập thất bại. Mật khẩu không đúng.";
    //             }
    //         } else {
    //             echo "Đăng nhập thất bại. Tài khoản không tồn tại.";
    //         }
    //     }
    // }
    

    public function user_login(){
            $uname = $_POST["uname"];
            $psw = $_POST["psw"];
            $result= $this->user->userLogin($uname, $psw);
            $password = $result["Pass"];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            //echo print_r($result);
            // $_SESSION['user'] = $result;
            // if($result && password_verify($psw, $hashedPassword)){
            //     header("Location: /mvc-project/trangchu");
            //     exit();
            // }else{
            //     echo "Đăng nhập thất bại. Mật khẩu không đúng";// $this->view("Home");
            // }

            if ($result) {
                //$user = $result->fetch_assoc();
    
                // Kiểm tra mật khẩu bằng password_verify
                if ($result && password_verify($psw, $hashedPassword)) {
                    $_SESSION['user'] = $result;
                    session::set('login', true);
                    header("Location: /mvc-project/trangchu");
                    exit();
                } else {
                    echo "Đăng nhập thất bại. Mật khẩu không đúng.";
                }
            } else {
                echo "Đăng nhập thất bại. Tài khoản không tồn tại.";
            }
    }

    public function logout($logout){
        session::destroy();
        header("Location: /mvc-project/trangchu");
        
    }

    public function register(){
        if(isset($_POST["btnRegister"])){
            $userName = $_POST["username"];
            $userEmail = $_POST["email"];
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
            $upload_image = "admin/public/upload/" . $unique_image;
            move_uploaded_file($_FILES["userimg"]['tmp_name'], "admin/public/upload/" . $_FILES["userimg"]['name']);
    
            $result = $this->insertUser->insertUser($userName, $userEmail, $pass, $level, $user_img);
            $this->view("loginView");
    
            return $result;


        }
    }
}
?>