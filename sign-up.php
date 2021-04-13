<?php 
include 'includes/head.php';
include 'includes/header.php';
?>

<style type="text/css">
    .megamenu{display: none;}
</style>


<section class="spacingY signUp_wrapper">
	<div class="card">
		<h4 class="card-title mt-3 text-center">Create Account</h4>
		<p class="text-center">Poshmark: Buy and sell fashion, home decor, beauty & more</p>
		<div class="social_btn">
			<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   countinue with facebook</a>
			<a href="" class="btn btn-block btn-google">
				<img src="img/favicon-g.png">
			   countinue with google</a>
		</div>
		<p class="divider-text">
	        <span class="bg-light">or, sign up with email</span>
	    </p>
		<form>
		<div class="form-row">
			<div class="form-group input-group col-6">
	        	<input name="" class="form-control" placeholder="Full name" type="text">
		    </div>
		    <div class="form-group input-group col-6">
		        <input name="" class="form-control" placeholder="Last Name" type="text">
		    </div>
		</div>
		 <div class="form-group input-group">
	        <input name="" class="form-control" placeholder="Email" type="email">
	    </div>
	     <div class="form-group">
	        <input name="" class="form-control" placeholder="User Name" type="text">
	        <small>Choose something you like, this cannot be changed.</small>
	    </div>
	      <div class="form-group">
	        <input name="" class="form-control" placeholder="User Name" type="text">
	        <small>Must be at least 6 characters and must contain a number or symbol.</small>
	    </div>
	    <div class="form-group input-group">
			<select class="form-control">
			    <option selected="">Select Gender</option>
			    <option value="1">Male</option>
			    <option value="2">Female</option>
			    <option value="3">Unspecified</option>
			</select>
	    </div>
	    <div class="form-group input-group">
			<select class="form-control">
				<option selected=""> United states</option>
				<option>Canada</option>
				<option>Australia</option>
			</select>
			<small>The country you select will be saved as your default shopping experience. If you sell an item, this is where it will ship from.</small>
		</div> <!-- form-group end.// -->
	    <div class="form-group input-group">
	        <input class="form-control" placeholder="invite code" type="text">
	    </div>
	    <p class="text-center">We don’t spam. By creating an account, you agree to <a href="#">Poshmark's Terms.</a> and <a href="#">Privacy Policy.</a></p>
	    <a href="#" class="btn btn-primary w-100">Done</a>
	</form>
	</div>
</section>




<?php 
include 'includes/footer.php';
?>