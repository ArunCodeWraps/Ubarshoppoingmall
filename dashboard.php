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
								<h4>User Dashboard 
									
									<?php
						if(!empty($_SESSION['succ_msg'])){?>
						<span style="margin-left: 161px; font-size: 16px; color: red;"><?php echo $_SESSION['succ_msg']; $_SESSION['succ_msg']='';?></span>
						<?php }?>
								</h4>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="productdetailTable">
									<span class="edit_flx"><a href="edit-profile.php">Edit</a></span>
									<table class="comContactTable">
										<tbody>                                                
											<tr>
												<th>Name:</th>
												<td><?php echo ucfirst(strtolower($result->name))." ".ucfirst(strtolower($result->surname)) ?></td>
											</tr>
											<tr>
												<th>Email :</th>
												<td><?php echo stripcslashes($result->email); ?></td>
											</tr>
											<tr>
												<th>Contact No:</th>
												<td><?php echo stripcslashes($result->mobile); ?></td>
											</tr>
											<tr>
												<th>Gender:</th>
												<td><?php 
												if($result->gender==1){
												 echo "Male";
												}else if($result->gender==2){
												  echo "Female";
												}else if($result->gender==3){
													echo "Unspecified";
												}
												?></td>
											</tr>													
											<tr>
												<th>Country:</th>
												<td><?php echo getField('country',$tbl_country,$result->country_id); ?></td>
											</tr>
											
										</tbody>
									</table>
								</div>
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