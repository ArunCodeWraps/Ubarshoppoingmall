<?php 
include 'includes/head.php';
include 'includes/header.php';

$img="img/bg-home-banner3.jpeg";

if (!empty($_REQUEST['brandslug'])) {
	$brSql = $obj->query("select * from tbl_brand where status=1  and slug='".$_REQUEST['brandslug']."' ",-1);
	$brResult = $obj->fetchNextObject($brSql);
	$br_id=$brResult->id;
	$cat_id=$brResult->cat_id;
	if (!empty($brResult->logo)) {
		$img="upload_images/brand/$brResult->logo";
	}
	
}

if (!empty($_REQUEST['catslug'])) {
	$catSql = $obj->query("select * from tbl_subsubcategory where status=1  and slug='".$_REQUEST['catslug']."' ",-1);
	$catResult = $obj->fetchNextObject($catSql);
	if (!empty($catResult)) {
		$cat_id=$catResult->cat_id;
	    $subcat_id=$catResult->subcat_id;
	    $subsubcat_id=$catResult->id;
	    if (!empty($catResult->cimage)) {
			$img="upload_images/category/$catResult->cimage";
		}

	}else{
		$catSql = $obj->query("select * from tbl_subcategory where status=1  and slug='".$_REQUEST['catslug']."' ",-1);
	    $catResult = $obj->fetchNextObject($catSql);
	    $cat_id=$catResult->cat_id;
	    $subcat_id=$catResult->id;
	    if (!empty($catResult->cimage)) {
			$img="upload_images/category/$catResult->cimage";
		}
	}
	
	
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
					<form action="" method="post" name="categoryFilterForm" id="categoryFilterForm">
						<input type="hidden" name="cat_id" id="cat_id" value="<?php echo $cat_id; ?>">
						<input type="hidden" name="subcat_id" id="subcat_id" value="<?php echo $subcat_id; ?>">
						<input type="hidden" name="subsubcat_id" id="subsubcat_id" value="<?php echo $subsubcat_id; ?>">
						<input type="hidden" name="color_id" id="color_id">
						<input type="hidden" name="brand_id" id="brand_id" value="<?php echo $br_id ?>">
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
												<div  id="heading1" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="false" aria-controls="collapse1"  onclick="postCatForm('<?php echo $catResult->id ?>');"><?php echo $catResult->category ?></div>

												<div id="collapse<?php echo $i ?>" class="collapse submenu_li" aria-labelledby="heading1" data-parent="#submenu_ul">

													<?php $subcatSql = $obj->query("select * from tbl_subcategory where status=1 and cat_id='$catResult->id' order by id asc",-1);

                    								while($subCatResult = $obj->fetchNextObject($subcatSql)){  ?> 
													<div id="submenu_ul2" class="submenu_ul">
														<div  id="heading2" data-toggle="collapse" data-target="#collapse<?php echo $subCatResult->slug ?>" aria-expanded="false" aria-controls="collapse2" onclick="postSubCatForm('<?php echo $subCatResult->id ?>');"><?php echo $subCatResult->subcategory ?></div>

														<?php $subsubcatSql = $obj->query("select * from tbl_subsubcategory where status=1 and subcat_id='$subCatResult->id' order by id asc",-1);
                   										 while($subSubCatResult = $obj->fetchNextObject($subsubcatSql)){  ?> 
														<div id="collapse<?php echo $subCatResult->slug ?>" class="collapse submenu_li" aria-labelledby="heading2" data-parent="#submenu_ul2" onclick="postSubSubCatForm('<?php echo $subSubCatResult->id ?>');">
															<?php echo $subSubCatResult->subsubcategory ?>
														</div>
														<?php } ?>
														
													</div>

													 <?php } ?>
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
									<?php $cSql = $obj->query("select * from tbl_color where status=1 ",-1);

                    					while($cResult = $obj->fetchNextObject($cSql)){  ?> 
									    <div class="colorcircle" onclick="postColorForm('<?php echo $cResult->id ?>');" style="background: <?php echo $cResult->color_code ?>"></div>
								    <?php } ?>
									
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
										  <input type="radio" class="priceRadio" onclick="postPriceFilterForm()" class="radio-label" name="price_range" value="" id="checktest1" />
										  <label for="checktest1"><span class="ml-3"> All Prices</span></label>
										</div> 
									</li>
									<li>
										<div class="checkbox">
										  <input type="radio" class="priceRadio" onclick="postPriceFilterForm()" name="price_range" value="0-25" id="checktest2" />
										  <label for="checktest2"><span class="ml-3">Under $25</span></label>
										</div> 
									</li>
									<li>
										<div class="checkbox">
										  <input type="radio" class="priceRadio" onclick="postPriceFilterForm()" name="price_range" value="25-100" id="checktest3" />
										  <label for="checktest3"><span class="ml-3"> $25 - $100</span></label>
										</div> 
									</li>
									<li>
										<div class="checkbox">
										  <input type="radio" class="priceRadio" onclick="postPriceFilterForm()" name="price_range" value="100-250" id="checktest4" />
										  <label for="checktest4"><span class="ml-3">$100 - $250</span></label>
										</div> 
									</li>
									<li>
										<div class="checkbox">
										  <input type="radio" class="priceRadio" onclick="postPriceFilterForm()" name="price_range" value="250-500" id="checktest5" />
										  <label for="checktest5"><span class="ml-3"> $250 - $500</span></label>
										</div> 
									</li>
								</ul>
								<div class="custom_price">
									<input type="text" name="min_price" id="min_price" class="form-control" placeholder="Min Price">
									<span>To</span>
									<input type="text" name="max_price" id="max_price" class="form-control" placeholder="Max Price">
									<button type="button" class="btn btn-primary" onclick="postPriceForm()">Apply</button>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
			<div class="col-md-9 pl-md-0">
				<div class="right_cat">
					<div class="cat_banner">
						<img src="<?php echo $img ?>" class="bannerimg">
					</div>
					<div class="product_filter">
						
						<select name="orderby" class="dropSelect float-right" id="sortBy" onchange="getProductData()">
		                  <option value="menu_order" selected="selected">Default sorting</option>
		                  <option value="Alphabetic">Sort by Alphabetic</option>
		                  <option value="date">Sort by newness</option>
		                  <option value="price">Sort by price: low to high</option>
		                  <option value="price-desc">Sort by price: high to low</option>
		                </select>

					</div>
					</form>
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
 function getProductData() {
    
    $.ajax({
        type: "POST",
        url: "ajax/get-product-data.php",
        data:$("#categoryFilterForm").serialize(),
        success: function(data){
            //console.log(data);
            $('#product-list-result').html(data); 
        },
        complete: function(){
            /*$('#product-load').fadeOut(10000);*/
        }
    });
}




function postCatForm(cat_id){
	$("#cat_id").val(cat_id);
	$("#subcat_id").val('');
	$("#subsubcat_id").val('');
	$("#brand_id").val('');
	$("#color_id").val('');
	getProductData();
}

function postSubCatForm(subcat_id){
	$("#subcat_id").val(subcat_id);
	$("#subsubcat_id").val('');
	$("#brand_id").val('');
	getProductData();
}

function postSubSubCatForm(subsubcat_id){
	$(this).addClass('active');
	$(this).toggleClass('active');
	$("#subsubcat_id").val(subsubcat_id);
	getProductData();
}


function postColorForm(color_id){
	$("#color_id").val(color_id);
	getProductData();
}

function postPriceFilterForm(){
	$("#min_price").val('');
	$("#max_price").val('');
	getProductData();
}


function postPriceForm(){
	
	$('.priceRadio').prop('checked', false);
	getProductData();
}





$(document).ready(function(){
   //var id='<?php echo $line1->id; ?>';
   getProductData();


 });	
</script>

