<?php 
include 'includes/head.php';
include 'includes/header.php';

?>

<style type="text/css">
	.megamenu{display: none;}
</style>

<header>
	<div class="bg_home">
		<div class="container h-100">
			<div class="flex_box">
				<div class="content_box">
					<h4>Buy, sell, and discover fashion, home decor, beauty, and more</h4>
					<p>Sign up now and join millions of people on the social marketplace for all things style</p>
					<div class="login_box">
						<a href="#" class="logtab logmail">
							<span class="iconset">
								<i class="far fa-envelope"></i>
							</span> Sign up with Email
						</a>
						<a href="#" class="logtab logfacebook">
							<span class="iconset">
								<i class="fab fa-facebook-f"></i>
							</span> Sign up with Email
						</a>
						<a href="#" class="logtab loggoogle">
							<span class="iconset">
								<i class="fab fa-google"></i>
							</span> Sign up with Email
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="spacingY">
	<div class="title">
		<h2>BRAND SPOTLIGHT</h2>
	</div>
	<div class="container py-5">
		<ul id="myTab2" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
			<?php
			$c=0;
			$hCatSql = $obj->query("select * from $tbl_category where status=1");
			while($hCatResult = $obj->fetchNextObject($hCatSql)){?>
				<li class="nav-item">
				<a id="home2-tab" data-toggle="tab" href="#homee<?php echo $hCatResult->id; ?>" role="tab" aria-controls="home2" aria-selected="true" class="nav-link text-capitalize rounded-0 <?php if($c==0){?> active <?php }?>"><?php echo $hCatResult->category; ?></a>
			</li>
			<?php $c++;} ?>
		</ul>



		<div id="myTab2Content" class="tab-content">

			<?php
			$c=0;
			$hCatSql = $obj->query("select * from $tbl_category where status=1");
			while($hCatResult = $obj->fetchNextObject($hCatSql)){?>

			<div id="homee<?php echo $hCatResult->id; ?>" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade show <?php if($c==0){?> active <?php }?>">
				<h4 class="navtitle">TOP SELLING BRANDS THIS WEEK</h4>
				<div class="link_wrapper owl-carousel owl-arrows">
					<?php
						$d=0;
						$brandArr=array();
						$brandSql = $obj->query("select * from $tbl_brand where status=1 and cat_id='$hCatResult->id' order by id desc",-1);
						while($brandResult = $obj->fetchNextObject($brandSql)){
							$brandArr[]=$brandResult;
						}
						
						$column = 2;
						$rows = array_chunk($brandArr, $column);
						foreach ($rows as $value) { ?>

					<div class="link_box">
						<a href="#" class="link_item">
							<img src="upload_images/brand/<?php echo $value[0]->logo ?>">
							<div class="link_title"><?php echo $value[0]->brand ?></div>
						</a>
						<a href="#" class="link_item">
							<img src="upload_images/brand/<?php echo $value[1]->logo ?>">
							<div class="link_title"><?php echo $value[1]->brand ?></div>
						</a>
					</div>

				<?php } ?>
					
				</div>
			</div>

			<?php $c++;} ?>
			
		</div>




		


		<div class="title mt-1">
			<h4 class="navtitle">TRENDING NOW</h4>
			<div class="table_wrapper owl-carousel owl-arrows">

				<?php
						$d=0;
						$brandArr=array();
						$brandSql = $obj->query("select * from $tbl_brand where status=1 order by id desc",-1);
						while($brandResult = $obj->fetchNextObject($brandSql)){
							$brandArr[]=$brandResult;
						}
						
						$column = 9;
						$rows = array_chunk($brandArr, $column);
						$num=1;
						foreach ($rows as $value) { ?>

								<div class="link_box">
									<table class="table">
										<tbody>
											<tr>
												<td><span class="number-circle"><?php echo $num+0; ?></span> <?php echo $value[0]->brand ?></td>
												<td><span class="number-circle"><?php echo $num+1; ?></span> <?php echo $value[1]->brand ?></td>
												<td><span class="number-circle"><?php echo $num+2; ?></span> <?php echo $value[2]->brand ?></td>
											</tr>
											<tr>
												<td><span class="number-circle"><?php echo $num+3; ?></span> <?php echo $value[3]->brand ?></td>
												<td><span class="number-circle"><?php echo $num+4; ?></span> <?php echo $value[4]->brand ?></td>
												<td><span class="number-circle"><?php echo $num+5; ?></span> <?php echo $value[5]->brand ?></td>
											</tr>
											<tr>
												<td><span class="number-circle"><?php echo $num+6; ?></span> <?php echo $value[6]->brand ?></td>
												<td><span class="number-circle"><?php echo $num+7; ?></span> <?php echo $value[7]->brand ?></td>
												<td><span class="number-circle"><?php echo $num+8; ?></span> <?php echo $value[8]->brand ?></td>
											</tr>
										</tbody>
									</table>
								</div>


							<?php $num=$num+9; } ?>	

				
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<h4 class="navtitle">POPULAR COLLECTIONS</h4>
		<div class="link_wrapper owl-carousel owl-arrows">
			<div class="link_box">
				<a href="#" class="link_item">
					<img src="img/slide-img2.jpg">
					<div class="link_title">Online Shopping</div>
				</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="title">
		<h2>DISCOVER THE COMMUNITY</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="news-update">
					<ul>
					   <?php 
					   		for ($i=0; $i < 10 ; $i++) {?>
					   			 <li>
							    	<img src="https://di2ponv0v5otw.cloudfront.net/users/2020/08/30/1/t_5f4b62b042384c40115a3eb3.jpg">
							      <div class="pl-5">
							      	<a href="#" class="anchorli">more than just a shopping destination, it's a vibrant community</a>
							      	<small class="d-block text-muted">15 mins ago</small>
							      </div>
							    </li>
					   		<?php }
					    ?>
					  </ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="discover-content">
					<img src="https://d2gjrq7hs8he14.cloudfront.net/webpack4/pm-logo-e91dbf6c3bd90ec113f01f7f3b4d2f43.png" width="60px" class="m-auto d-block">
					<p>Poshmark is more than just a shopping destination, it's a vibrant community <strong>powered by millions of sellers who not only</strong> sell their personal style, but also curate looks for their shoppers, creating one of the most connected shopping experiences in the world. Join us!</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="spacingY">
	<div class="title">
		<h2>HOW IT WORKS</h2>
	</div>
	<div class="buyer-seller">
		<ul id="myTab3" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center justify-content-center">
			<li class="nav-item">
				<a id="home3-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="true" class="nav-link text-capitalize rounded-0 active">I am a Seller</a>
			</li>
			<li class="nav-item">
				<a id="profile3-tab" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile3" aria-selected="false" class="nav-link text-capitalize rounded-0">I am a Buyer</a>
			</li>
		</ul>
		<div id="myTab3Content" class="tab-content">
			<div id="home3" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade show active">
				<ul class="gallery_list">
					<li>
						<figure>
							<img src="img/gallery_img.jpg">
							<label>step <span class="d-block">01</span></label>
						</figure>
						<div class="px-4">
							<h4>DISCOVER ITEMS</h4>
							<p>From women to men to kids, discover a wide selection of items across thousands of brands—at prices up to 70% off!</p>
						</div>
					</li>
					<li>
						<div class="px-4">
							<h4>DISCOVER ITEMS</h4>
							<p>From women to men to kids, discover a wide selection of items across thousands of brands—at prices up to 70% off!</p>
						</div>
						<figure>
							<img src="img/gallery_img.jpg">
							<label>step <span class="d-block">02</span></label>
						</figure>
					</li>
					<li>
						<figure>
							<img src="img/gallery_img.jpg">
							<label>step <span class="d-block">01</span></label>
						</figure>
						<div class="px-4">
							<h4>DISCOVER ITEMS</h4>
							<p>From women to men to kids, discover a wide selection of items across thousands of brands—at prices up to 70% off!</p>
						</div>
					</li>
				</ul>
			</div>
			<div id="profile3" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
				<ul class="gallery_list">
					<li>
						<figure>
							<img src="img/gallery_img.jpg">
							<label>step <span class="d-block">01</span></label>
						</figure>
						<div class="px-4">
							<h4>DISCOVER ITEMS</h4>
							<p>From women to men to kids, discover a wide selection of items across thousands of brands—at prices up to 70% off!</p>
						</div>
					</li>
					<li>
						<div class="px-4">
							<h4>DISCOVER ITEMS</h4>
							<p>From women to men to kids, discover a wide selection of items across thousands of brands—at prices up to 70% off!</p>
						</div>
						<figure>
							<img src="img/gallery_img.jpg">
							<label>step <span class="d-block">02</span></label>
						</figure>
					</li>
					<li>
						<figure>
							<img src="img/gallery_img.jpg">
							<label>step <span class="d-block">01</span></label>
						</figure>
						<div class="px-4">
							<h4>DISCOVER ITEMS</h4>
							<p>From women to men to kids, discover a wide selection of items across thousands of brands—at prices up to 70% off!</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="spacingY">
	<div class="title">
		<h2>WE'VE GOT YOUR BACK</h2>		
	</div>
	<div class="container pt-4">
		<div class="row">
			<div class="col-md-4">
				<div class="features-box">
					<img src="https://d2gjrq7hs8he14.cloudfront.net/webpack4/img-protected-payments-efde6b243c87ab8d708c9fbfef30620f.png">
					<div class="p-2">
						<h5>PROTECTED PAYMENTS</h5>
						<p>If it’s not what you ordered, we guarantee to give your money back.
						</p>
						<a href="#">Learn More <i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="features-box">
					<img src="https://d2gjrq7hs8he14.cloudfront.net/webpack4/img-protected-payments-efde6b243c87ab8d708c9fbfef30620f.png">
					<div class="p-2">
						<h5>PROTECTED PAYMENTS</h5>
						<p>If it’s not what you ordered, we guarantee to give your money back.
						</p>
						<a href="#">Learn More <i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="features-box">
					<img src="https://d2gjrq7hs8he14.cloudfront.net/webpack4/img-protected-payments-efde6b243c87ab8d708c9fbfef30620f.png">
					<div class="p-2">
						<h5>PROTECTED PAYMENTS</h5>
						<p>If it’s not what you ordered, we guarantee to give your money back.
						</p>
						<a href="#">Learn More <i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php 
include 'includes/footer.php';
?>