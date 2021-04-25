<?php 
include 'includes/head.php';
include 'includes/header.php';


if (!empty($_REQUEST['brandslug'])) {
	//echo 'brand';
}

if (!empty($_REQUEST['catslug'])) {
	//echo 'cate';
}



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
										


										
										<?php $catSql = $obj->query("select * from tbl_category where status=1  order by id asc",-1);
											$i=1;
            								while($catResult = $obj->fetchNextObject($catSql)){  ?> 

										<li>
											<div id="submenu_ul" class="submenu_ul">
												<div  id="heading1" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="false" aria-controls="collapse1"><?php echo $catResult->category ?></div>

												<div id="collapse<?php echo $i ?>" class="collapse submenu_li" aria-labelledby="heading1" data-parent="#submenu_ul">

													<?php $subcatSql = $obj->query("select * from tbl_subcategory where status=1 and cat_id='$catResult->id' order by id asc",-1);

                    								while($subCatResult = $obj->fetchNextObject($subcatSql)){  ?> 
													<div id="submenu_ul2" class="submenu_ul">
														<div  id="heading2" data-toggle="collapse" data-target="#collapse<?php echo $subCatResult->slug ?>" aria-expanded="false" aria-controls="collapse2"><?php echo $subCatResult->subcategory ?></div>

														<?php $subsubcatSql = $obj->query("select * from tbl_subsubcategory where status=1 and subcat_id='$subCatResult->id' order by id asc",-1);
                   										 while($subSubCatResult = $obj->fetchNextObject($subsubcatSql)){  ?> 
														<div id="collapse<?php echo $subCatResult->slug ?>" class="collapse submenu_li" aria-labelledby="heading2" data-parent="#submenu_ul2">
															<?php echo $subSubCatResult->subsubcategory ?>
														</div>
														<?php } ?>
														
													</div>

													 <?php } ?>

													<!-- <div id="submenu_ul2" class="submenu_ul">
														<div  id="heading2" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse2">Item 2</div>

														<div id="collapse22" class="collapse submenu_li" aria-labelledby="heading2" data-parent="#submenu_ul2">
															item 3
														</div>
														<div id="collapse22" class="collapse submenu_li" aria-labelledby="heading2" data-parent="#submenu_ul2">
															item 33
														</div>
													</div> -->


												</div>


											</div>
										</li>
										<?php $i++; } ?>

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
						<div class="row" id="product-list-result">
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

<script type="text/javascript">
 function getProductData(id,name) {
    $("#mycat_id").val(id);
    $(".page-title").html(name);
    $.ajax({
        type: "POST",
        url: "ajax/get-product-data.php",
        data:'cid='+id,
        success: function(data){
            //console.log(data);
            $('#product-list-result').html(data); 
        },
        complete: function(){
            /*$('#product-load').fadeOut(10000);*/
        }
    });
}



$(document).ready(function(){
   //var id='<?php echo $line1->id; ?>';
   var id = $("#mycat_id").val();
   var subid = $("#mysubcat_id").val();
   
   $.ajax({
        type: "POST",
        url: "ajax/get-product-data.php",
        data:{'cid':id,'subcid':subid},
        success: function(data){
            /*console.log(data);*/
            $('#product-list-result').html(data); 
        },
        complete: function(){
            $('#product-load').fadeOut(1000);
        }
    });


 });	
</script>

