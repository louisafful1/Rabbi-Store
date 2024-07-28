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
                    <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
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
?>
