<?php 
include 'includes/head.php';
include 'includes/header.php';
?>

<section class="main_category checkout_page">
  <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">CATEGORIES</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
      </nav>
  </div>
  <div class="container my-4">
    <div class="row">
      <div class="col-md-12">
       <div class="section-title mb-4">
            <h2>CHECKOUT PROCESS</h2>
        </div>
          <div class="alert alert-primary mb-2" role="alert">Welcome - Anurag</div>
          <div class="alert alert-success promo_code_box" role="alert">
            Enter Promo Code
            <form class="form-inline">
              <div class="form-group mx-sm-2 mb-2">
                <input type="password" class="form-control" placeholder="Enter Promo Code">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Apply</button>
            </form>
          </div>
      </div>
      <div class="col-md-12">
        <div class="billing_details">
          <form>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Name </label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Email Address</label>
                <input type="email" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Company Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Phone</label>
                <input type="number" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Address </label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Apartment</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Town / City</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">State / County</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Postcode / Zip</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom02">Order Notes</label>
                <textarea class="form-control" rows="4" placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
              </div>
            </div>
        </form>
        <div class="order_details">
            <h4>Your order</h4>
            <table class="table table-bordered table-striped">
              <thead class="bg-light">
                <tr>
                  <td>PRODUCT </td>
                  <td>TOTAL</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Subtotal</strong></td>
                  <td><strong>$0.00</strong></td>
                </tr>
                <tr>
                  <td><strong>Shipping</strong></td>
                  <td><strong>Free Shipping</strong></td>
                </tr>
                <tr>
                  <td><strong>Total</strong></td>
                  <td><strong>$0.00</strong></td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="cheq_payement p-4" style="background:#ebe9eb;">
          <ul class="p-0">
            <li><input type="radio" name="radio" checked="" class="mr-2 mb-3"> Cheque Payment <br>
              <input type="text" placeholder="Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode." class="form-control"></li>
              <li><input type="radio" name="radio" class="mr-2 mb-3"> PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" class="mx-2">What is PayPal? </li>
              <li><button class="round-black-btn">Place Order</button></li>
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

