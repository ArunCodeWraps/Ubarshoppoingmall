<?php 
include("wfcart.php");
include 'includes/head.php';
include 'includes/header.php';

$cart =& $_SESSION['cart'];
if(!is_object($cart)) $cart = new wfCart();

$itmes=$cart->get_contents();
$no_of_itmes=count($itmes);
$cartData=$itmes;


?>

<section class="main_category cart_page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-12">
        <nav aria-label="breadcrumb" class="mt-3">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="container my-4">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0">My Cart (<?php echo $no_of_itmes ?>)</h4>
          </div>

          <?php if($no_of_itmes>0){ ?>
            <?php foreach ($cartData as $value) { ?> 
          <div class="card-body">
            <div class="shopping-cart">
          <div class="item">
            <div class="buttons">
              <span onclick="deleteCartItemCart('<?php echo $value['id']; ?>')" class="delete-btn"></span>
              
            </div>
            <div class="image">
              <img src="upload_images/product/thumb/<?php echo $value['image'] ?>" alt="" style="width: 86px;" />
            </div>
            <div class="description">
              <span><?php echo $value['name'] ?></span>
              <!-- <span>Bball High</span> -->
              <span><?php echo $value['size'] ?></span>
              <span>$<?php echo $value['price'] ?></span>
            </div>
            
            <div class="quantity">
              <button type="button" class="plus-btn" onclick="increment_quantity('<?php echo $value['id'] ?>','<?php echo $value['prodPriceId'] ?>','<?php echo $value['price'] ?>')" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
              </button>
              <input type="text" name="name" id="input-quantity-<?php echo $value['id'] ?>" value="<?php echo $value['qty'] ?>">
              <button type="button" class="minus-btn" onclick="decrement_quantity('<?php echo $value['id'] ?>','<?php echo $value['prodPriceId'] ?>','<?php echo $value['price'] ?>')"  type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
              </button>
            </div>
            <div class="total-price">$<?php echo number_format($value['subtotal'],2); 
                            $finalPrice+=$value['subtotal'];
                            ?></div>
          </div>
          </div>
          </div>
           <?php } ?>
            <?php } ?>


        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0">
          <div class="card-header border border-bottom-0">
            <h5 class="mb-0">Cart Details</h5>
          </div>
          <div class="card-body p-0 border-0">
            <ul class="list-group">
              <li class="list-group-item">Subtotal 
                <label class="float-right mb-0">$<?php echo number_format($finalPrice,2) ?></label>
              </li>
              <li class="list-group-item">Shipping 
                <label class="float-right mb-0">$0</label>
              </li>
              <li class="list-group-item"><strong>Total (<?php echo $no_of_itmes ?> items)</strong> 
                <label class="float-right mb-0">$<?php echo number_format($finalPrice-$_SESSION['couponDiscountAmount'],2) ?></label>
              </li>
              <li class="list-group-item text-center">
                <button class="round-black-btn">Place Order</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
include 'includes/footer.php';
?>

<script type="text/javascript"> 

 function increment_quantity(p_id,pr_id,price) {
    var inputQuantityElement = $("#input-quantity-"+p_id);
    var newQuantity = parseInt($(inputQuantityElement).val())+1;
    $("#input-quantity-"+p_id).val(newQuantity);
    
    updateCart(p_id,pr_id,newQuantity,price);
}

function decrement_quantity(p_id,price_id,price) {
    var inputQuantityElement = $("#input-quantity-"+p_id);
    if($(inputQuantityElement).val() > 0) 
    {
     var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
     //alert(newQuantity); return;
     $("#input-quantity-"+p_id).val(newQuantity);
      updateCart(p_id,price_id,newQuantity,price);
    
    }
}

function deleteCartItemCart(product_id){
    if(product_id){
    $.ajax({
      url:"ajax-process.php",
      data:{product_id:product_id,action:"del_cart"},
      success:function(data){
          location.reload();
        }
      })  
  }  
}  

$(document).ready(function(){
   $("#apply_coupon").click(function(e) {
    var url = "ajax/validate-coupon.php";
    var coupon_code = $("#coupon_code").val();
    var cartAmount = $("#cartAmount").val();
      $.ajax({
             type: "POST",
             url: url,
             data: {coupon_code:coupon_code,cartAmount:cartAmount},
             success: function(data)
             {  
                  $("#couponCodeMsg").html(data);
                  location.reload(); 
              }
           });
      e.preventDefault();
  })
})


</script>