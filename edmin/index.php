<?php include("../auth/connect.php");
  if(isset($_POST["add_cat"]))
  {
    $add_cat = $_POST['cat'];
    $qry = mysqli_query($link,"INSERT INTO cat (`Title`) VALUES ('$add_cat')");
    echo '<script>alert("Category Added!!!")</script>';
  }
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/bs.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bs.bundle.min.js"></script>
    <script src="js/cou.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" src="scripts/form_submit.js"></script>

    <title>D2u-admin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">D2u-admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Logout </a>
      </li>
     
    
    </ul>
  </div>
</nav>
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-12">
<h1 class="display-4">Add Category</h1>
<form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" name="cat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
 
  <button type="submit" name="add_cat" class="btn btn-primary">Add</button> <a href="" class="btn btn-info">Modify</a>
</form>
</div>
<div class="col-lg-6 col-sm-12">
<h1 class="display-4">Add Product</h1>
<form method="post" name="upload_form" id="upload_form" enctype="multipart/form-data" action="upload.php">   
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Product Price</label>
    <input type="text" name="price" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Product Description</label>
    <input type="text" name="describ" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Product Images</label>
    <input type="file" name="upload_images[]" required id="image_file"  multiple class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
     
     <div class="form-group">
     <label for="exampleInputEmail1">Select Category</label>
     <select name="cat_id" id="">
       <?php $rew=mysqli_query($link,"SELECT * FROM cat");
       while ($a=mysqli_fetch_array($rew)) {
         echo ' <option name="cat_id" value="'.$a["id"].'">'.$a["Title"].'</option>';
       }
      ?>
     </select>
     </div>
    
 
  <button type="submit" name="add_cat" class="btn btn-primary">Add</button> <a href="" class="btn btn-info">Modify</a>
</form>
</div>

<div id="uploaded_images_preview"></div>

<br>	
<div style="margin:50px 0px 0px 0px;">
    <a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/create-thumbnails-while-uploading-multiple-images-with-php-jquery/">Back to Tutorial</a>		
</div>




</div>

</body>
</html>