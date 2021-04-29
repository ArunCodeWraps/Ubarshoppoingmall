<?php 
include 'includes/head.php';
include 'includes/header.php';
$product_id=3;
$pSql = $obj->query("select * from $tbl_product where id='".$product_id."' ",$debug=-1);
$pResult = $obj->fetchNextObject($pSql);
$ppSql = $obj->query("select * from $tbl_productprice where product_id='".$product_id."' and status=1 order by display_order asc ",$debug=-1);
$ppResult = $obj->fetchNextObject($ppSql);
?>

<section class="main_category detail_page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">CATEGORIES</a></li>
				    <li class="breadcrumb-item active" aria-current="page"><?php echo $pResult->product_name; ?></li>
				  </ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="owl-carousel product-detail-slider">
					<div class="item">
						<img id="pic-1<?php echo $pResult->id; ?>" src="upload_images/product/big/<?php echo $ppResult->pphoto ?>" />
					</div>					
				</div>
				<div class="owl-carousel product-thumb-slider">
					<div class="item">
						<img id="pic-2<?php echo $pResult->id; ?>" src="upload_images/product/thumb/<?php echo $ppResult->pphoto ?>" />
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-dtl">
					<div class="product-info">
						<div class="product-name"><?php echo $pResult->product_name; ?></div>
						<div class="reviews-counter">
							<div class="rate">
								<input type="radio" id="ratting" name="ratting" value="5" checked />
								<label for="star5" title="text">5 stars</label>
								<input type="radio" id="ratting" name="ratting" value="4" checked />
								<label for="star4" title="text">4 stars</label>
								<input type="radio" id="ratting" name="ratting" value="3" checked />
								<label for="star3" title="text">3 stars</label>
								<input type="radio" id="ratting" name="ratting" value="2" />
								<label for="star2" title="text">2 stars</label>
								<input type="radio" id="ratting" name="ratting" value="1" />
								<label for="star1" title="text">1 star</label>
							</div>
							<span>3 Reviews</span>
						</div>
						<div class="product-price-discount">
							$<span id="sellprice"><?php echo $ppResult->sell_price; ?></span>
							$<del id="mrpprice"><span class="line-through"><?php echo $ppResult->mrp_price; ?></del>
							<p><?php echo $pResult->short_description; ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="d-flex align-items-center justify-content-between">
			
								<div class="w-50">
									<label class="d-block">Size</label>
									<select class="dropSelect w-100" onchange="changeItemPrice(<?php echo $pResult->id; ?>,this.value)">
										<?php 
										$pSql = $obj->query("SELECT pr.id,pr.product_id,pr.size,u.name FROM tbl_productprice pr join tbl_unit as u on pr.unit_id=u.id WHERE pr.product_id='".$product_id."' and pr.status=1 order by pr.display_order asc ",$debug=-1);
		
										while($item=$obj->fetchNextObject($pSql)){ ?>
										<option value="<?php echo $item->id; ?>"><?php echo $item->size." ".$item->name; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="d-flex align-items-center justify-content-between">
								<div class="product-count">
									<label for="size">Quantity</label>
									<form action="#" class="display-flex">
										<div class="qtyminus">-</div>
										<input type="text" name="quantity" value="1" class="qty">
										<div class="qtyplus">+</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="mt-4">
								<div class="d-flex align-items-center justify-content-between">
									<a href="#" class="round-black-btn">Add to Cart</a>
									<a href="#" class="round-ouline-btn">Buy Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="shipping_detail">
					<?php echo $pResult->description; ?>
				</div>
			</div>
		</div>
		<div class="product-info-tabs">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab"><?php echo $pResult->description; ?>
				</div>
				<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="review-heading">REVIEWS</div>
					<p class="mb-20">There are no reviews yet.</p>
					<form name="reviewFrm" class="review-form rattingcls">
					<input type="hidden" name="product_id" id="product_id" value="<?php echo $pResult->id; ?>">
						<div class="form-group rattingcls">
							<label>Your rating</label>
							<div class="reviews-counter">
								<div class="rate">
									<input type="radio" id="star5" name="ratting" value="5" />
									<label for="star5" title="text">5 stars</label>
									<input type="radio" id="star4" name="ratting" value="4" />
									<label for="star4" title="text">4 stars</label>
									<input type="radio" id="star3" name="ratting" value="3" />
									<label for="star3" title="text">3 stars</label>
									<input type="radio" id="star2" name="ratting" value="2" />
									<label for="star2" title="text">2 stars</label>
									<input type="radio" id="star1" name="ratting" value="1" />
									<label for="star1" title="text">1 star</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Your message</label>
							<textarea name="msg" id="msg" class="form-control" rows="10"></textarea>
							<span id="errormsg"></span>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="Name*">
									<span id="errorname"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="email" id="email" class="form-control" placeholder="Email Id*">
									<span id="erroremail"></span>
								</div>
							</div>
						</div>
						<button type="button" id="rattingbtn" class="round-black-btn">Submit Review</button>
					</form>
					<ul class="product_reviews">
						<li>
							<div class="media">
							  <img class="mr-3 rounded-circle" src="https://di2ponv0v5otw.cloudfront.net/users/2021/02/11/11/t_60258bf18e9aa52464d6d5d1.jpeg" width="25px">
							  <div class="media-body">
							    <h6 class="my-0">jaycie94</h6>
							    <p class="text-justify mb-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
							  </div>
							</div>
						</li>
						<li>
							<div class="media">
							  <img class="mr-3 rounded-circle" src="https://di2ponv0v5otw.cloudfront.net/users/2021/02/11/11/t_60258bf18e9aa52464d6d5d1.jpeg" width="25px">
							  <div class="media-body">
							    <h6 class="my-0">jaycie94</h6>
							    <p class="text-justify mb-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
							  </div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="more_articles owl-carousel owl-arrows">
			<?php 
			$mSql = $obj->query("select * from $tbl_product where status='1'  order by RAND() limit 0,3",$debug=-1); 
			while($mResult=$obj->fetchNextObject($mSql)){ 
			$mpSql = $obj->query("select * from $tbl_productprice where product_id='".$mResult->id."' and status=1 order by display_order asc ",$debug=-1);
			$mpResult = $obj->fetchNextObject($mpSql);
			?>
			<div class="link_box">
				<a href="#" class="link_item">
					<img src="upload_images/product/big/<?php echo $mpResult->pphoto ?>">
					<div class="link_title">
						<p class="text-elipse"><?php echo $mResult->product_name;  ?></p>
						$<?php echo $mpResult->sell_price;  ?> <del class="ml-2">$<?php echo $mpResult->mrp_price;  ?></del>
					</div>
				</a>
			</div>
		<?php }?>
		</div>
	</div>
</section>

<?php 
include 'includes/footer.php';
?>


<script type="text/javascript">
	
function changeItemPrice(id, pid) {
	var pid = pid;
	$.ajax({
		type: "POST",
		url: "ajax/item-product-data.php",
		data: 'itemId=' + pid,
		dataType: 'json',
		success: function(data) {
			console.log(data);
			$("#sellprice").html(data.sell_price);
			$("#mrpprice").html(data.mrp_price);
			$(".quantity").val(1);
			document.getElementById("pic-1"+id).src = "upload_images/product/big/" + data.pphoto;
			document.getElementById("pic-2"+id).src = "upload_images/product/thumb/" + data.pphoto;
		}
	});
}

$(document).ready(function(){
	$("#rattingbtn").click(function(){
		if($("#msg").val()==''){
			$("#errormsg").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> Please enter message !</div>');
			return;
		}else{
			$("#errormsg").html(' ');
		}
		if($("#name").val()==''){
			$("#errorname").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> Please enter name !</div>');
			return;
		}else{
			$("#errorname").html(' ');
		}
		if($("#email").val()==''){
			$("#erroremail").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> Please enter email !</div>');
			return;
		}else{
			$("#erroremail").html(' ');

			var product_id = $("#product_id").val();
			var name = $("#name").val();
			var email = $("#email").val();
			var msg = $("#msg").val();
			$.ajax({
				url:"ajax/saveRatting.php",
				data:{product_id:product_id,name:name,email:email,msg:msg},
				beforeSend:function(){
				
				},
				success:function(data){
					console.log();
					if(data==1){
						$(".rattingcls").hide();
						$("#successMsg").html();
					}
				}
			})
		}

		
		
	})
})
</script>

