<?php 
include 'includes/head.php';
include 'includes/header.php';
?>

<style type="text/css">
    .megamenu{display: none;}
</style>


<section class="signUp_wrapper login_wrapper">
	<div class="card border-0">
		<h4 class="card-title mt-3 text-center">Log In</h4>
		<div class="social_btn social_btn2">
			<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   countinue with facebook</a>
			<a href="" class="btn btn-block btn-apple"> <i class="fab fa-apple"></i>   countinue with Apple</a>
			<a href="" class="btn btn-block btn-google">
				<img src="img/favicon-g.png">
			   countinue with google</a>
		</div>
		<form>
			<p class="divider-text">
	        <span style="background:#f5f2ee">or, fill out with</span>
	    </p>
	     <div class="form-group">
	        <input name="" class="form-control" placeholder="Username or Email" type="text">
	    </div>
	      <div class="form-group">
	        <input name="" class="form-control" placeholder="Password" type="text">
	    </div>
	   <div class="form-group">
			 <div class="login_bottom">
			 	<a href="reset-password.php" class="btn">forgot password ?</a>
				 <a href="#" class="btn btn-primary">login</a>
			 </div>
				 <div class="haveaccount">
				 	<p>Don't have an account? <a href="sign-up.php" class="ml-1">Sign Up »</a></p>
				 </div>
	   </div>
	</form>
	</div>
</section>




<?php 
include 'includes/footer.php';
?>