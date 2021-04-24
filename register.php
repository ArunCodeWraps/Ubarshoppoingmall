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
		<?php
		if(!empty($_SESSION['err_msg'])){?>
		<span style="margin-left: 161px; font-size: 16px; color: red;"><?php echo $_SESSION['err_msg']; $_SESSION['err_msg']='';?></span>
		<?php }?>
		<p class="divider-text">
	        <span class="bg-light">or, sign up with email</span>
	    </p>
		<form name="register" id="register" action="ajax/submitEnquiry.php"  method="post">
			<input type="hidden" name="registerFrm" value="yes">
		<div class="form-row">
			<div class="form-group input-group col-6">
	        	<input name="fname" class="form-control required" placeholder="First name" type="text" value="<?php if(!empty($_SESSION['fname'])){ echo $_SESSION['fname']; } ?>">
		    </div>
		    <div class="form-group input-group col-6">
		        <input name="lname" class="form-control required" placeholder="Last Name" type="text" value="<?php if(!empty($_SESSION['lname'])){ echo $_SESSION['lname']; } ?>">
		    </div>
		</div>
		 <div class="form-group input-group">
	        <input name="email" class="form-control required email" placeholder="Email" type="email" value="<?php if(!empty($_SESSION['email'])){ echo $_SESSION['email']; } ?>">
	    </div>

	      <div class="form-group">
	        <input name="pass" id="pass" class="form-control required" placeholder="Password" type="password" value="<?php if(!empty($_SESSION['pass'])){ echo $_SESSION['pass']; } ?>">
	        <small>Must be at least 6 characters and must contain a number or symbol.</small>
	    </div>
	    <div class="form-group">
	        <input name="cpass" id="cpass" class="form-control required" placeholder="Confirm Password" type="password" value="<?php if(!empty($_SESSION['cpass'])){ echo $_SESSION['cpass']; } ?>">
	        <small id="regismsg">Must be at least 6 characters and must contain a number or symbol.</small>
	    </div>
	    <div class="form-group input-group">
			<select name="gender" class="form-control required">
			    <option value="" selected="">Select Gender</option>
			    <option value="1" <?php if(!empty($_SESSION['gender'])){ if($_SESSION['gender']==1){ echo "selected"; } } ?>>Male</option>
			    <option value="2" <?php if(!empty($_SESSION['gender'])){ if($_SESSION['gender']==2){ echo "selected"; } } ?>>Female</option>
			    <option value="3" <?php if(!empty($_SESSION['gender'])){ if($_SESSION['gender']==3){ echo "selected"; } } ?>>Unspecified</option>
			</select>
	    </div>
	    <div class="form-group input-group">
			<select name="country_id" id="country_id" class="form-control required">
				 <option value="" selected="">Select Country</option>
				<?php
				$csql = $obj->query("select * from $tbl_country where status=1");
				while($cResult = $obj->fetchNextObject($csql)){?>
					<option value="<?php echo $cResult->id; ?>" <?php if(!empty($_SESSION['gender'])){ if($_SESSION['gender']==$cResult->id){ echo "selected"; } } ?>><?php echo $cResult->country; ?></option>
				<?php } ?>
			</select>
			<small>The country you select will be saved as your default shopping experience. If you sell an item, this is where it will ship from.</small>
		</div>
	    <p class="text-center">We don’t spam. By creating an account, you agree to <a href="#">Poshmark's Terms.</a> and <a href="#">Privacy Policy.</a></p>
	    <button type="submit" class="btn btn-primary w-100">Done</button>
	</form>
	</div>
</section>
<?php 
include 'includes/footer.php';
?>
<script src="js/jquery.validate.min.js"></script>
<script>
	$(document).ready(function(){
    	$("#register").validate();


    		$("#cpass").change(function(){
    		pass = $("#pass").val();
    		cpass = $(this).val();
    		if(pass!=cpass){
    			$("#regismsg").html("<b style='color:red'>Password and confirm password are not match.</b>");
    		}else{
    			$("#regismsg").html("<b style='color:green'>Password Matched.</b>");
    		}
    	});
	});
</script>