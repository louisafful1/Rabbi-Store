<?php

// Searching Items
function search_item() {
    global $connection;
    global $currency;
    if (isset($_GET['search_data_item'])){
$user_search_value =$_GET['search_data'];

  
$search_items =mysqli_query($connection, "SELECT * FROM items WHERE item_keywords LIKE '%$user_search_value%'");
$num_of_rows = mysqli_num_rows($search_items);
if($num_of_rows == 0){
  echo "<h3>No result match ! Please try again...</h3>";
}

while($row = mysqli_fetch_assoc($search_items)){
  $item_id = $row['item_id'];
  $item_title = $row['item_title'];
  $item_description = $row['item_description'];
  $item_keywords = $row['item_keywords'];
  $item_image1 = $row['item_image1'];
  $item_image2 = $row['item_image2'];
  $item_price = $row['item_price'];


?>


              <!-- Item -->
              <div class="swiper-slide">
                <div class="animate-underline">
                  <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="shop.php">
                    <img src="item_images/<?php echo $row['item_image1'];?>" class="hover-effect-target opacity-100" alt="Product">
                    <img src="item_images/<?php echo $row['item_image2'];?>" class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
                  </a>
                  <div class="d-flex gap-2 mb-3">
                    <input type="radio" class="btn-check" name="colors-4" id="color-4-1" checked="">
                    <label for="color-4-1" class="btn btn-color fs-base" style="color: #384043">
                      <span class="visually-hidden">Dark gray</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-4" id="color-4-2">
                    <label for="color-4-2" class="btn btn-color fs-base" style="color: #bdc5da">
                      <span class="visually-hidden">Light gray</span>
                    </label>
                    <input type="radio" class="btn-check" name="colors-4" id="color-4-3">
                    <label for="color-4-3" class="btn btn-color fs-base" style="color: #526f99">
                      <span class="visually-hidden">Bluish gray</span>
                    </label>
                  </div>
                  <h3 class="mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="shop.php">
                      <span class="animate-target"><?php echo $row['item_title'];?></span>
                    </a>
                  </h3>
                  <div class="h6"><?php echo $currency. ' '. $row['item_price'];?></div>
                  <div class="d-flex gap-2">
                    <a href="index.php?add_to_cart=<?php echo $item_id; ?>" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</a>
                    <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
              </div>
<?php
}
}
}

// Getting IP adress function

function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  


// Cart function 
function cart() {
  if(isset($_GET['add_to_cart'])){
    global $connection;
    $ip = getIPAddress(); 
    $get_item_id =  $_GET['add_to_cart'];
    $quantity = 1;

    $select_cart = mysqli_query($connection, "SELECT * FROM `cart` WHERE ip_address = '$ip' and item_id = '$get_item_id'");

    $num_of_rows = mysqli_num_rows($select_cart);
    if ($num_of_rows > 0){
      echo "<script>alert('This item already exists in the cart')</script>";
      echo "<script>window.location.href='index.php#popular_items';</script>";

      exit();
      
    }else {
      $insert_into_cart = mysqli_query($connection, "INSERT INTO cart values ('$get_item_id', '$ip', '$quantity')");
      if($insert_into_cart) {
        echo "<script>alert('Item has been successfully added to the cart');</script>";
    } else {
        echo "<script>alert('Failed to add item to the cart: " . mysqli_error($connection) . "');</script>";
    }
    
    // Redirect to the index page
    echo "<script>window.location.href='index.php#popular_items';</script>";
    exit();
    }

  }
}

function cart_item() {
  if(isset($_GET['add_to_cart'])){
    global $connection;
    $ip = getIPAddress(); 
    $quantity = 1;
    $select_cart = mysqli_query($connection, "SELECT * FROM `cart` WHERE ip_address = '$ip'");
    $count_cart_items = mysqli_num_rows($select_cart);
         
    }else {
      global $connection;
      $ip = getIPAddress(); 
      $quantity = 1;
      $select_cart = mysqli_query($connection, "SELECT * FROM `cart` WHERE ip_address = '$ip'");
      $count_cart_items = mysqli_num_rows($select_cart);

      
  }
echo   $count_cart_items;

}


// Getting total price function
function total_cart_price() {
  global $connection;
  $ip = getIPAddress(); 
  $total_price = 0;
  $cart_query = mysqli_query($connection, "SELECT * FROM `cart` WHERE ip_address = '$ip'");
  while($row = mysqli_fetch_array($cart_query)){
    $item_id = $row['item_id'];
    $select_items = mysqli_query($connection, "SELECT * FROM `items` WHERE item_id = '$item_id'");
    while($row_item_price = mysqli_fetch_array($select_items)){
      $item_price = array($row_item_price['item_price']);
      $item_values = array_sum($item_price);
      $total_price +=$item_values;
    }
  }

  echo $total_price;
}

function update_cart_quantity() {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $ip = getIPAddress();

    $update_quantity = mysqli_query($connection, "UPDATE cart SET quantity = '$quantity' WHERE ip_address = '$ip' AND item_id = '$item_id'");

    if ($update_quantity) {
        echo 'success';
    } else {
        echo 'error';
    }
}
}
?>
