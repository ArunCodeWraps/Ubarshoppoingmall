<?php 
include 'includes/head.php';
include 'includes/header.php';
?>

<style type="text/css">
	footer,.header-nav{
		display:none;
	}
	body{
		background: #eaebec;
	}
</style>


<section>
	<div class="main_category">
		<div class="row">
			<div class="col-md-3">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">CATEGORIES</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Product</li>
				  </ol>
				</nav>
				<div id="accordion" class="left_category">
					<div class="card">
						<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" >
							<h5 class="caption">CATEGORIES
								<i class="fa" aria-hidden="true"></i>
							</h5>
						</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" >
							<div class="card-body">
								<!-- Second listing -->
									<ul>
										<?php
											for ($i=0; $i < 6 ; $i++) { ?> 
											<li>
											<div id="submenu_ul" class="submenu_ul">
												<div  id="heading1" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Item <?php echo $i; ?></div>

												<div id="collapse1" class="collapse submenu_li" aria-labelledby="heading1" data-parent="#submenu_ul">
													item <?php echo $i; ?> content
												</div>
											</div>
										</li>
										<?php } ?>
									</ul>
								<!-- End Second listing -->
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" >
							<h5 class="caption">
									Color
									<i class="fa" aria-hidden="true"></i>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" >
							<div class="card-body p-2 pl-3">
								<div class="color_box">
									<div class="colorcircle bg-danger"></div>
									<div class="colorcircle bg-primary"></div>
									<div class="colorcircle bg-dark"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" >
							<h5 class="caption">
									Price
									<i class="fa" aria-hidden="true"></i>
							</h5>
						</div>
						<div id="collapseThree" class="collapse show" aria-labelledby="headingThree" >
							<div class="card-body">
								<ul class="price_bar">
									<li>
										<div class="checkbox">
										  <input type="checkbox" name="checktest1" id="checktest1" />
										  <label for="checktest1"><span class="ml-3"> All Prices</span></label>
										</div> 
									</li>
									<li>
										<div class="checkbox">
										  <input type="checkbox" name="checktest1" id="checktest1" />
										  <label for="checktest1"><span class="ml-3">Under $25</span></label>
										</div> 
									</li>
									<li>
										<div class="checkbox">
										  <input type="checkbox" name="checktest1" id="checktest1" />
										  <label for="checktest1"><span class="ml-3"> $25 - $50</span></label>
										</div> 
									</li>
									<li>
										<div class="checkbox">
										  <input type="checkbox" name="checktest1" id="checktest1" />
										  <label for="checktest1"><span class="ml-3">$50 - $100</span></label>
										</div> 
									</li>
									<li>
										<div class="checkbox">
										  <input type="checkbox" name="checktest1" id="checktest1" />
										  <label for="checktest1"><span class="ml-3"> $250 - $500</span></label>
										</div> 
									</li>
								</ul>
								<div class="custom_price">
									<input type="text" name="" class="form-control" placeholder="Min Price">
									<span>To</span>
									<input type="text" name="" class="form-control" placeholder="Max Price">
									<button class="btn btn-primary">Apply</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour"  data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" >
							<h5 class="caption">
									Type
									<i class="fa" aria-hidden="true"></i>
							</h5>
						</div>
						<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" >
							<div class="card-body">
								<ul class="type_check">
									<li>
										<div class="radio">
										    <input id="radio-1" name="radio" type="radio" checked>
										    <label for="radio-1" class="radio-label">All Types</label>
										</div>
									</li>
									<li>
										<div class="radio">
										    <input id="radio-2" name="radio" type="radio" checked>
										    <label for="radio-2" class="radio-label">Closet</label>
										</div>
									</li>
									<li>
										<div class="radio">
										    <input id="radio-3" name="radio" type="radio" checked>
										    <label for="radio-3" class="radio-label">Boutique</label>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9 pl-md-0">
				<div class="right_cat">
					<div class="cat_banner">
						<img src="img/bg-home-banner3.jpeg" class="bannerimg">
					</div>
					<div class="product_filter">
						<select class="dropSelect float-right">
							<option>Just New</option>
							<option>Price High to Low </option>
							<option>Price Low to High</option>
							<option>Recent Added</option>
						</select>
					</div>
					<div class="container-fluid px-0">
						<div class="row">
							<?php 
								for ($i=0; $i < 3 ; $i++) { ?>

								<div class="col-md-4">
								<div class="product-wrapper">
								    <div class="product-card">
								        <div class="product-front">
								        	<div class="shadow"></div>
								            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
								            <div class="image_overlay"></div>
								            <div class="view_details">View details</div>
								            <div class="stats">        	
								                <div class="stats-container">
								                    <span class="product_price">$39</span>
								                    <span class="product_name">Adidas Originals</span>
								                    <p>Men's running shirt</p>
								                    <div class="product-options">
								                    	<div class="add_cart">
									                	<button class="btn btn-danger">
									                		<i class="fas fa-heart"></i>
									                	</button>
									                	<button class="btn btn-primary">
									                		<i class="fas fa-shopping-cart"></i>
									                	</button>
									                	</div> 
								                    <strong>SIZES</strong>
								                    <span>XS, S, M, L, XL, XXL</span>
								                    <strong>COLORS</strong>
								                    <div class="colors">
								                        <div class="c-blue"><span></span></div>
								                        <div class="c-red"><span></span></div>
								                        <div class="c-white"><span></span></div>
								                        <div class="c-green"><span></span></div>
								                    </div>
								                </div>                      
								                </div>                         
								            </div>
								        </div>
								        <div class="product-back">
									        <div class="shadow"></div>
								            <div class="carousel">
								                <ul>
								                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png" alt="" /></li>
								                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png" alt="" /></li>
								                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png" alt="" /></li>
								                </ul>
								                <div class="arrows-perspective">
								                    <div class="carouselPrev">
								                        <div class="y"></div>
									                    <div class="x"></div>
								                    </div>
								                    <div class="carouselNext">
								                        <div class="y"></div>
									                    <div class="x"></div>
								                    </div>
								                </div>
								            </div>
								            <div class="flip-back">
								            	<div class="cy"></div>
								                <div class="cx"></div>
								            </div>
								        </div>	  
								    </div>	
								</div>	
							</div> 
									
							<?php	}
							 ?>
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

