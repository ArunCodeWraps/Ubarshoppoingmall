<?php 
include("wfcart.php");
include 'includes/head.php';
include 'includes/header.php';

$cart =& $_SESSION['cart'];
if(!is_object($cart)) $cart = new wfCart();

if(isset($_SESSION['user_id'])){
	header("location:dashboard.php");
}
?>

<style type="text/css">
    .megamenu{display: none;}
</style>


<section class="signUp_wrapper login_wrapper">
	<div class="card border-0">
		<h4 class="card-title mt-3 text-center">Log In</h4>
		<div class="social_btn social_btn2">
			<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   countinue with facebook</a>
			<a href="" class="btn btn-block btn-google">
				<img src="img/favicon-g.png">
			   countinue with google</a>
		</div>
		<?php
		if(!empty($_SESSION['err_msg'])){?>
		<span style="margin-left: 110px; font-size: 16px; color: red;"><?php echo $_SESSION['err_msg']; $_SESSION['err_msg']='';?></span>
		<?php }?>
		<form name="loginfrm" id="loginfrm" action="ajax/submitEnquiry.php" method="post">
			<input type="hidden" name="loginBtn" value="yes">
			<p class="divider-text">
	        <span style="background:#f5f2ee">or, fill out with</span>
	    </p>
	     <div class="form-group">
	        <input name="username" class="form-control required email" placeholder="Username or Email" type="text">
	    </div>
	      <div class="form-group">
	        <input name="password" class="form-control required" placeholder="Password" type="password">
	    </div>
	   <div class="form-group">
			 <div class="login_bottom">
			 	<a href="<?php echo SITE_URL; ?>reset-password.php" class="btn">forgot password ?</a>
				 <button type="submit" class="btn btn-primary w-100">Login</button>
			 </div>
				 <div class="haveaccount">
				 	<p>Don't have an account? <a href="register.php" class="ml-1">Sign Up »</a></p>
				 </div>
	   </div>
	</form>
	</div>
</section>




<?php 
include 'includes/footer.php';
?>

<script src="js/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
	$("#loginfrm").validate();
});
</script>