<?php 
include("wfcart.php");
include 'includes/head.php';
include 'includes/header.php';

$cart =& $_SESSION['cart'];
if(!is_object($cart)) $cart = new wfCart();

if(empty($_SESSION['user_id'])){
	header("location:login.php");
}

?>
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<style type="text/css">
	body{
		background: #fff;
	}
</style>
<section class="spacingY">
	<div class="content">  
		<div class="container">
			<div class="row">
				<?php include("side-menu.php"); ?>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="detailpro">
						<div class="companyInfo">
							<div class="companyTitle">
								<h4>Change Password</h4>
								<?php
								if(!empty($_SESSION['err_msg'])){?>
								<span style="margin-left: 161px; font-size: 16px; color: red;"><?php echo $_SESSION['err_msg']; $_SESSION['err_msg']='';?></span>
								<?php }?>
							</div>
							<div class="col-md-12">

									<form name="changepasswordFrm" id="changepasswordFrm" action="ajax/submitEnquiry.php"  method="post" style="margin-top: 100px;">
									<input type="hidden" name="changepasswordbtn" value="yes">
									<input type="hidden" name="u_id" value="56">
									<input type="hidden" name="c_id" value="87">
									<div class="register">           
										<div class="register_login">  
											<h2>Change Password</h2>
											
											<p><label>Old Password: <span>*</span></label> 
												<input type="password" name="old_password" placeholder="" class="required" value=""> <span></span>
											</p>
											<p><label>New Password: <span>*</span></label> 
												<input type="password" name="new_password" placeholder="" class="required" value="<?php echo $result->surname; ?>"> <span></span>
											</p>
											<p><label>Confirm Password: <span>*</span></label> 
												<input type="password" name="confirm_password" placeholder="" class="required" value="">
											</p>                      
										</div>
											<div class="clr"></div>
											<div class="regi_btn">                                
												<input type="submit" value="Change Password" class="primaryButt submitButt">
											</div>
										</div>
									</form>
								</div>  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
	include 'includes/footer.php';
	?>

<script src="js/jquery.validate.min.js"></script>
<script>
	$(document).ready(function(){
    	$("#changepasswordFrm").validate();
	});
</script>