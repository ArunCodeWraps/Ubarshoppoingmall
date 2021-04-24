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


<section class="spacingY signUp_wrapper login_wrapper">
	<div class="resetpas">
			<h2>Reset Password</h2>
		<p>To reset your password, please enter the username or email you used while registering with Poshmark. We will send you an email with instructions to reset your password.</p>
		<?php
		if(!empty($_SESSION['err_msg'])){?>
		<span style="margin-left: 50px; font-size: 16px; color: red;"><?php echo $_SESSION['err_msg']; $_SESSION['err_msg']='';?></span>
		<?php }?>
		<form name="forgotfrm" id="forgotfrm" action="ajax/submitEnquiry.php" method="post">
			<input type="hidden" name="forgotBtn" value="yes">
			<div class="form-group">
				<input type="text" name="username" class="form-control mb-4 required email" placeholder="Username & Email">
			</div>
			<div class="form-group text-right border-top">
				<button type="submit" class="btn btn-primary w-100">Reset Password</button>
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
	$("#forgotfrm").validate();
});
</script>