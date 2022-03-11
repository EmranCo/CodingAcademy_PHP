<?php
session_start();
require_once('PresentationLayer/FunctionController.php');
FunctionController::init();


if (isset($_POST['btn_save'])) {
  FunctionController::addProduct(
    name: $_POST['product_name'],
    image: "picture",
    price: $_POST['price'],
    description: $_POST['details'],
    category: $_POST['product_type']
  );
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/Impresso3.css">

  <!-- social media icons were taken from the resourse below  -->
  <script src="https://kit.fontawesome.com/cca0a1b6fc.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <div class="logo">
      <p>Impresso</p>
    </div>
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="items.php">ITEMS</a></li>
      <li><a href="categories.php">CATEGORIES</a></li>
    </ul>
  </nav>

  <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
    <div class="items_2">
      <div class="card card2">
        <h5 class="title">Add Product</h5>
        <div class="container">
          <div class="form-group">
            <label>Product Name</label>
            <input type="text" id="product_name" required name="product_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Product Logo</label>
            <input type="file" name="picture" required class="form-control" id="picture">
          </div>
          <div class="form-group">
            <label>Pricing</label>
            <input type="text" id="price" name="price" required class="form-control">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea style="height: auto;" rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Product Category</label>

            <select class="form-control" name="product_type">
              <?php
              foreach (FunctionController::$categories as $category)
                echo '<option value="' . $category->id . '">' . $category->name . '</option>';
              ?>
            </select>

          </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <input class="button" style="color:white;" id="btn_save" name="btn_save" type="submit" value="ADD">
      </div>
    </div>

  </form>
  <footer>
    <br>
    <div class="footer-content" align="center">
      <h3>alhaddademran@gmail.com <br> Phone number:+967770774255 </h3>
      <br>
      <div class="socials">
        <ul>

          <li class="twitter"><a href="http://twitter.com"><i class="fab fa-twitter"></i></a></li>
          <li class="instagram"><a href="http://instagram.com"> <i class="fab fa-instagram"></i></a></li>
          <li class=facebook><a href="http://facebook.com"> <i class="fab fa-facebook"></i></a></li>
        </ul>
      </div>
    </div>


  </footer>


</body>

</html>