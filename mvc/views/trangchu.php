<?php
session::init();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="/mvc-project/public/css/style.css">
  <title>SHINO Perfurme</title>
</head>

<body>
  <?php
  include "inc/header.php";
  ?>

  <!-- SLIDER -->
  <?php require_once "./mvc/views/pages/" . $data["Page"] . ".php" ?>
  <!-- SLIDER END -->

  <!-- app -->
  <?php
  include "inc/footer.php";
  ?>
</body>
<script src="/mvc-project/public/js/slider.js"></script>
<script src="/mvc-project/public/js/script.js"></script>
<script src="/mvc-project/public/js/product.js"></script>
</html>