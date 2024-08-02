   <?php
   $selectCart = mysqli_query($connection, "SELECT * FROM cart");
   
   if(mysqli_num_rows($selectCart) == 0)   {
   
   ?>
   
   
   <!-- Shopping cart offcanvas (Empty state) -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">
      <div class="offcanvas-header py-3 pt-lg-4">
        <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-center">
        <svg class="d-block mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 29.5 30"><path class="text-body-tertiary" d="M17.8 4c.4 0 .8-.3.8-.8v-2c0-.4-.3-.8-.8-.8-.4 0-.8.3-.8.8v2c0 .4.3.8.8.8zm3.2.6c.4.2.8 0 1-.4l.4-.9c.2-.4 0-.8-.4-1s-.8 0-1 .4l-.4.9c-.2.4 0 .9.4 1zm-7.5-.4c.2.4.6.6 1 .4s.6-.6.4-1l-.4-.9c-.2-.4-.6-.6-1-.4s-.6.6-.4 1l.4.9z" fill="currentColor"></path><path class="text-body-emphasis" d="M10.7 24.5c-1.5 0-2.8 1.2-2.8 2.8S9.2 30 10.7 30s2.8-1.2 2.8-2.8-1.2-2.7-2.8-2.7zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.5 1.2-1.2 1.2zm11.1-4c-1.5 0-2.8 1.2-2.8 2.8a2.73 2.73 0 0 0 2.8 2.8 2.73 2.73 0 0 0 2.8-2.8c0-1.6-1.3-2.8-2.8-2.8zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.6 1.2-1.2 1.2zM8.7 18h16c.3 0 .6-.2.7-.5l4-10c.2-.5-.2-1-.7-1H9.3c-.4 0-.8.3-.8.8s.4.7.8.7h18.3l-3.4 8.5H9.3L5.5 1C5.4.7 5.1.5 4.8.5h-4c-.5 0-.8.3-.8.7s.3.8.8.8h3.4l3.7 14.6a3.24 3.24 0 0 0-2.3 3.1C5.5 21.5 7 23 8.7 23h16c.4 0 .8-.3.8-.8s-.3-.8-.8-.8h-16a1.79 1.79 0 0 1-1.8-1.8c0-1 .9-1.6 1.8-1.6z" fill="currentColor"></path></svg>
        <h6 class="mb-2">Your shopping cart is currently empty!</h6>
        <p class="fs-sm mb-4">Explore our wide range of products and add items to your cart to proceed with your purchase.</p>
        <a class="btn btn-dark rounded-pill" href="shop.php">Continue shopping</a>
      </div>
    </div>

<?php
}

 else{
  
  ?>
        <!-- Shopping cart offcanvas -->
<div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

<!-- Header -->
<div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
  <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
    <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">GHC 183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
  <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
    <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
  </div>
</div>

<!-- Items -->
<div class="offcanvas-body d-flex flex-column gap-4 pt-2">
  <!-- php code to display dynamic data -->
   <?php 

   $ip = getIPAddress(); 
   $total_price = 0;
   $cart_query = mysqli_query($connection, "SELECT * FROM `cart` WHERE ip_address = '$ip'");
   while($row = mysqli_fetch_array($cart_query)){

     $item_id = $row['item_id'];
     $quantity = $row['quantity'];
     $select_items = mysqli_query($connection, "SELECT * FROM `items` WHERE item_id = '$item_id'");
     while($row_item_price = mysqli_fetch_array($select_items)){
       $item_price = array($row_item_price['item_price']);
       $price_table = $row_item_price['item_price'];
       $price_title = $row_item_price['item_title'];
       $price_image = $row_item_price['item_image1'];
       $item_values = array_sum($item_price);
       $total_price +=$item_values;
    

   ?>
  <!-- Item -->
   <form action="" method="post">
  <div class="d-flex align-items-center">
    <a class="flex-shrink-0">
      <img src="item_images/<?php echo $price_image; ?>" width="110" alt="<?php echo $price_title; ?>">
    </a>
    <div class="w-100 min-w-0 ps-2 ps-sm-3">
      <h5 class="d-flex animate-underline mb-2">
        <a class="d-block fs-sm fw-medium text-truncate animate-target"><?php echo $price_title; ?></a>
      </h5>

      <?php
         $ip = getIPAddress(); 
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $increase_quantity =$_POST['qty'];
          $update_quantity = mysqli_query($connection, "UPDATE cart SET quantity = '$increase_quantity' WHERE ip_address = '$ip'");
         $total_price = $total_price * $increase_quantity;
         
        } 
      
      ?>
      <div class="h6 pb-1 mb-2"><?php echo $currency.' '.  $price_table; ?></div>
      <div class="d-flex align-items-center justify-content-between">
        <div class="count-input rounded-2">
          <button type="button" class="btn btn-icon btn-sm"  aria-label="Decrement quantity" onclick="updateQuantity(<?php echo $item_id; ?>, -1)">
            <i class="ci-minus"></i>
          </button>
          <input type="number" class="form-control form-control-sm" id="qty_<?php echo $item_id; ?>" name="qty" value="<?php echo $quantity; ?>" min="1">
          <button type="button" class="btn btn-icon btn-sm"  aria-label="Increment quantity" onclick="updateQuantity(<?php echo $item_id; ?>, 1)">
            <i class="ci-plus"></i>
          </button>
        </div>
        <button type="submit" class="btn-close fs-sm" data-bs-toggle="tooltip" value="<?php echo $item_id;?>" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" name="remove_cart[]" aria-label="Remove from cart"></button>
        
      </div>
    </div>
  </div> 
  </form>

  <?php 
  }
}
  ?>
  <!-- End of an Item -->

</div>
<!-- End of Items -->

<!-- Footer -->
<div class="offcanvas-header flex-column align-items-start">
  <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
    <span class="text-light-emphasis">Subtotal:</span>
    <span class="h6 mb-0" id="cart-total"></span>
  </div>
  <div class="d-flex w-100 gap-3">
    <a class="btn btn-lg btn-secondary w-100" href="index.php">Continue Shopping</a>
    <a class="btn btn-lg btn-primary w-100" href="checkout.php?">Checkout</a>
  </div>
</div>
</div>


<script>
function updateQuantity(itemId, change) {
    let input = document.getElementById(`qty_${itemId}`);
    let currentQuantity = parseInt(input.value);
    let newQuantity = currentQuantity + change;
    
    if (newQuantity < 1) {
        newQuantity = 1;
    }
    
    input.value = newQuantity;


    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'include/update_cart.php', true); //because this file lies in index.php
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            if (xhr.responseText === 'success') {
              fetchTotalPrice();
            } else {
                // Handle error
                alert('Error updating quantity: ' + xhr.responseText);
            }
        }
    };
    xhr.send(`item_id=${itemId}&quantity=${newQuantity}`);
}



function fetchTotalPrice() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'include/get_cart_total.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            let response = JSON.parse(xhr.responseText);
            console.log('Total price:', response.total_price);
            document.getElementById('cart-total').textContent = response.total_price;
        }
    };
    xhr.send();
}

window.onload = fetchTotalPrice
</script>

<?php
} 
?> 
