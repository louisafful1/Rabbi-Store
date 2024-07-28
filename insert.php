<?php
include "include/database.php";

if (isset($_POST['insert_item'])){
  $item_title = $_POST['item_title']; 
  $item_description = $_POST['item_description']; 
  $item_keywords = $_POST['item_keywords']; 
  $item_price = $_POST['item_price']; 
  $item_status = "true";

  $item_image1 = $_FILES['item_image1']['name'];
  $item_image2 = $_FILES['item_image2']['name'];

  //temp
  $temp_image1 = $_FILES['item_image1']['tmp_name'];
  $temp_image2 = $_FILES['item_image2']['tmp_name'];


if(!$item_title || !$item_description || !$item_keywords || !$item_price || !$item_image1  || !$item_image2){
  echo "<script>alert('please fill in all the emptyfields')</script>";
  exit();
}else{
  move_uploaded_file($temp_image1,"item_images/$item_image1");
  move_uploaded_file($temp_image2,"item_images/$item_image2");
}
$insert_items = "insert into `items` (item_title, item_description, item_keywords, item_image1, item_image2, item_price, date, status) values ('$item_title', '$item_description', '$item_keywords', '$item_image1', '$item_image2', '$item_price', NOW(), '$item_status')";
$result_query = mysqli_query($connection, $insert_items);
if($result_query ){
   echo "<script>alert('Item inserted successfully')</script>";
   header("location:insert.php");
}else{
  echo mysqli_error($connection);
}

}
?>

<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
  <?php  $pageTitle = "Home"; include "include/head.php";?> 
</head>
<!-- End of head -->
<body>
    
<center><h1>Insert item</h1></center>

<div class="m-auto">
          <!-- Form -->
          <form class="" action="" method="post" enctype="multipart/form-data">
            <div class="position-relative mb-4">
              <input type="text" class="form-control form-control-lg" placeholder="Enter item title" name="item_title" required="">
              
            </div>
            <div class="position-relative mb-4">
              <input type="text" class="form-control form-control-lg" placeholder="Enter item description" name="item_description" required="">
              
            </div>

            <div class="position-relative mb-4">
              <input type="text" class="form-control form-control-lg" placeholder="Enter item Keywords" name="item_keywords" required="">
              
            </div>

            <div class="position-relative mb-4">
                <label for="">Image 1</label>
              <input type="file" class="form-control form-control-lg" name="item_image1" required="">
              
            </div>

            <div class="position-relative mb-4">
            <label for="">Image2</label>
              <input type="file" class="form-control form-control-lg" name="item_image2" required="">
              
            </div>
          
            <div class="position-relative mb-4">
              <input type="number" class="form-control form-control-lg" placeholder="Enter item price" name="item_price" required="">
              
            </div>
            <input type="submit" name="insert_item" value="Insert item" class="btn btn-lg btn-primary w-100">
</form>
</div>
</body>
</html>