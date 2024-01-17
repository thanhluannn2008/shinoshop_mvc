
<style>
  .tieu-de{
  display: flex;
  justify-content: center;
  align-items:center ;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Login/Registor</title>
</head>

<body>
  
<div class="tieu-de">
<a href="Home"><img src="/mvc-project/public/img/SHINO-removebg-preview.png" alt="logo IVY Moda"></a>
<h2>Chào mừng bạn đến với Shinoshop!!!</h2>
</div>
  <div class="container mt-3">
    <div class="row p-2" style="border: 1px solid black; border-radius: 10px;">
      <div class="col-md-4 p-2" style="border: 1px solid #dddd; border-radius: 10px;">
        <form action="/mvc-project/userController/user_login" method="POST" class="needs-validation" novalidate>
          <h1 class="text-center">Login</h1>
          <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="psw" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div>
          <input type="submit" class="btn btn-primary" value="Sign In" name="login">
          <br>
          <br>
          <a href="/mvc-project/trangchu" class="btn btn-info"> Trang chủ</a>
        </form>

      </div>
      <div class="col-md-8 p-2" style="border: 1px solid #dddd; border-radius: 10px;">
        <form action="/mvc-project/userController/register" method="POST" class="needs-validation" novalidate  enctype="multipart/form-data">
          <h1 class="text-center">Register New Account</h1>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="pass" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
          <input type="hidden" class="form-control" placeholder="" name="level" value="1" required>
          </div>
          <div class="form-group">
            <label for="pwd">Ảnh:</label>
            <input type="file" class="form-control" placeholder="" name="userimg" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div>
          <input type="submit" name="btnRegister" class="btn btn-success" value="Create Account">
          <?php
          if(isset($data["result"])){
            if($data["result"]=="true"){
              echo "<h3>Đăng kí thành công</h3>";

            }else{
              echo "<h3>Đăng kí thất bại</h3>";
            }

          }
          ?>
        </form>
      </div>
    </div>
  </div>
</body>
<script>
  // Disable form submissions if there are invalid fields
  (function () {
    'use strict';
    window.addEventListener('load', function () {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>

<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.tieu-de{
  display: flex;
  justify-content: center;
  align-items:center ;
}
</style>
</head>
<body>


<form action="/mvc-project/userController/user_login" method="post">
  <div class="imgcontainer">
    <img src="/mvc-project/public/img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html> -->