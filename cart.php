<?php 
include 'includes/head.php';
include 'includes/header.php';
?>

<section class="main_category cart_page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-12">
        <nav aria-label="breadcrumb" class="mt-3">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">CATEGORIES</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
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
            <h4 class="mb-0">My Cart (1)</h4>
          </div>
          <div class="card-body">
            <div class="shopping-cart">
          <div class="item">
            <div class="buttons">
              <span class="delete-btn"></span>
              <span class="like-btn"></span>
            </div>
            <div class="image">
              <img src="https://designmodo.com/demo/shopping-cart/item-1.png" alt="" />
            </div>
            <div class="description">
              <span>Common Projects</span>
              <span>Bball High</span>
              <span>White</span>
            </div>
            <div class="quantity">
              <button class="plus-btn" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
              </button>
              <input type="text" name="name" value="1">
              <button class="minus-btn" type="button" name="button">
                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
              </button>
            </div>
            <div class="total-price">$549</div>
          </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0">
          <div class="card-header border border-bottom-0">
            <h5 class="mb-0">Cart Details</h5>
          </div>
          <div class="card-body p-0 border-0">
            <ul class="list-group">
              <li class="list-group-item">Price (1 item) 
                <label class="float-right mb-0">$549</label>
              </li>
              <li class="list-group-item">Price (1 item) 
                <label class="float-right mb-0">$549</label>
              </li>
              <li class="list-group-item"><strong>Total (2 item)</strong> 
                <label class="float-right mb-0">$1049</label>
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

