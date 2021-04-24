<?php 
include("wfcart.php");
include 'includes/head.php';
include 'includes/header.php';

$cart =& $_SESSION['cart'];
if(!is_object($cart)) $cart = new wfCart();

if(empty($_SESSION['user_id'])){
	header("location:login.php");
}

$sql = $obj->query("select * from $tbl_user where id='".$_SESSION['user_id']."'");
$result = $obj->fetchNextObject($sql);
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
								<h4>Update User Profile</h4>

							</div>
							<div class="col-md-12">

									<form name="editprofileFrm" id="editprofileFrm" action="ajax/submitEnquiry.php"  method="post" style="margin-top: 100px;">
									<input type="hidden" name="editprofilebtn" value="yes">
									<input type="hidden" name="u_id" value="56">
									<input type="hidden" name="c_id" value="87">
									<div class="register">           
										<div class="register_login">  
											<h2>User Information Setting</h2>
											
											<p><label>First Name: <span>*</span></label> 
												<input type="text" name="fname" placeholder="" class="required" value="<?php echo $result->name; ?>"> <span></span>
											</p>
											<p><label>Last Name: <span>*</span></label> 
												<input type="text" name="lname" placeholder="" class="required" value="<?php echo $result->surname; ?>"> <span></span>
											</p>
											<p><label>Email: <span>*</span></label> 
												<input type="text" name="email" placeholder="" class="required email" readonly="" value="<?php echo $result->email; ?>">
											</p>
											<p><label>Mobile Number : <span>*</span></label> 
												<input type="text" name="mobile" placeholder="" class="required digits" value="<?php echo $result->mobile; ?>">
											</p> 


										<p><label>Gender : <span>*</span></label> 
										<select name="gender" class="form-control required">
										<option value="" selected="">Select Gender</option>
										<option value="1" <?php  if($result->gender==1){ echo "selected"; }?>>Male</option>
										<option value="2" <?php  if($result->gender==2){ echo "selected"; }?>>Female</option>
										<option value="3"<?php  if($result->gender==3){ echo "selected"; }?>>Unspecified</option>
										</select>           
										</p>    


										<p><label>Country : <span>*</span></label>
											<select name="country_id" id="country_id" class="form-control required">
											<option value="" selected="">Select Country</option>
											<?php
											$csql = $obj->query("select * from $tbl_country where status=1");
											while($cResult = $obj->fetchNextObject($csql)){?>
											<option value="<?php echo $cResult->id; ?>" <?php  if($result->country_id==$cResult->id){ echo "selected"; } ?>><?php echo $cResult->country; ?></option>
											<?php } ?>
											</select>
										 </p>                                        
										</div>
										
											<div class="clr"></div>
											<div class="regi_btn">                                
												<input type="submit" value="Update" class="primaryButt submitButt">
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
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
	$(document).ready(function(){
    	$("#editprofileFrm").validate();
	});
	$(function () {
    $("#active-order").DataTable();
  });
</script>