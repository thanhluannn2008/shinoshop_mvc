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

  <title>Login Admin</title>
</head>

<body>
  
<div class="tieu-de">
<a href="Home"><img src="/mvc-project/public/img/SHINO-removebg-preview.png" alt="logo IVY Moda"></a>
<h2>Chào mừng bạn đến với Shinoshop!!!</h2>
</div>
  <div class="container mt-3">
    <div class="row p-2" style="border: 1px solid black; border-radius: 10px;">
      <div class="col p-2" style="border: 1px solid #dddd; border-radius: 10px;">
        <form action="/mvc-project/admin/userController/admin_login" method="POST" class="needs-validation" novalidate>
          <h1 class="text-center">Login - Admin</h1>
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
          <div class="form-group">
          <input type="hidden" class="form-control" id="level" placeholder="Enter password" name="level" value="0" required>
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