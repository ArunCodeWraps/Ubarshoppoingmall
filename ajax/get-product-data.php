<?php

include('../include/config.php');
include("../include/functions.php");

  $where='';



  $i=1;
  $whr="";


  if (!empty($_POST["cat_id"])) {
      $cid=$_POST["cat_id"];
      $whr.="and a.cat_id='$cid'";
  }
  
  if (!empty($_POST["subcat_id"])) {
      $subcid=$_POST["subcat_id"];
      $whr.="and a.subcat_id='$subcid'";
  }

  if (!empty($_POST["subsubcat_id"])) {
      $subsubcid=$_POST["subsubcat_id"];
      $whr.="and a.subsubcat_id='$subsubcid'";
  }


  if (!empty($_POST["brand_id"])) {
      $brand_id=$_POST["brand_id"];
      $whr.="and a.brand_id='$brand_id'";
  }


  if (!empty($_POST["color_id"])) {
      $color_id=$_POST["color_id"];
      $whr.="and b.color_id='$color_id'";
  }


  if (!empty($_POST["price_range"])) {
      $price=explode('-',$_POST["price_range"]);
      $price_min=$price[0];
      $price_max=$price[1];
      $whr.="and b.sell_price BETWEEN '$price_min' AND '$price_max'";
  }


  if (!empty($_POST["min_price"]) && !empty($_POST["max_price"])) {
      $price_min=$_POST["min_price"];
      $price_max=$_POST["max_price"];
      $whr.="and b.sell_price BETWEEN '$price_min' AND '$price_max'";
  }


  if (!empty($_POST["orderby"])) {
      if($_POST['orderby']=='Alphabetic')
      {
        $where= 'ORDER BY a.product_name ASC';
      }
      else if($_POST['orderby']=='date')
      {
        $where= 'ORDER BY a.id DESC';
      }
      else if($_POST['orderby']=='price')
      {
        $where= 'ORDER BY b.sell_price ASC';
      }
      else if($_POST['orderby']=='price-desc')
      {
        $where= 'ORDER BY b.sell_price DESC';
      }
      
  }

	$mSql = $obj->query("select a.* from $tbl_product as a  join tbl_productprice as b on a.id=b.product_id where 1=1 and a.status='1' $whr $where  limit 0,12",$debug=-1);
	$numRows=$obj->numRows($mSql);
	if ($numRows>=1) {
		
	while($pline=$obj->fetchNextObject($mSql)){  
    
?>


		
              <div class="col-md-4">
                <div class="product-wrapper">
                    <div class="product-card">
                        <div class="product-front">
                          <div class="shadow"></div>
                            <?php  $getpic=$obj->fetchNextObject($obj->query("select * from $tbl_productprice where product_id='$pline->id' order by id asc limit 0,1"));  ?>

                            <img src="upload_images/product/big/<?php echo $getpic->pphoto ?>" width="100%" alt="" />
                            <div class="image_overlay"></div>
                            <div class="view_details">View details</div>
                            <div class="stats">         
                                <div class="stats-container">
                                    <span class="product_price">$<?php echo $getpic->sell_price ?></span>
                                    <span class="product_name"><?php echo $pline->product_name ?></span>
                                    <p><?php echo $brand=getField('brand','tbl_brand',$pline->brand_id) ?></p>
                                    <div class="product-options">
                                      <div class="add_cart">
                                    <button class="btn btn-danger">
                                      <i class="fas fa-heart"></i>
                                    </button>
                                    <?php $unit=getField('name','tbl_unit',$getpic->unit_id) ?>
                                    <?php  $size= $getpic->size." ".$unit ?>
                                    <button class="btn btn-primary add-to-cart" data-product_id="<?php echo $pline->id ?>" data-product_name="<?php echo $pline->product_name ?>" data-product_price="<?php echo $getpic->sell_price ?>" data-image="<?php echo $getpic->pphoto ?>" data-size="<?php echo $size ?>" data-product_price_id="<?php echo $getpic->id ?>">
                                      <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    </div> 
                                    <strong>SIZES</strong>
                                    <span><?php  echo $size ?></span>
                                    <!-- <strong>COLORS</strong>
                                    <div class="colors">
                                        <div class="c-blue"><span></span></div>
                                        <div class="c-red"><span></span></div>
                                        <div class="c-white"><span></span></div>
                                        <div class="c-green"><span></span></div>
                                    </div> -->
                                </div>                      
                                </div>                         
                            </div>
                        </div>   
                    </div>  
                </div>  
              </div>


<?php $i++; } ?>

 <div class="load-more" lastID="<?php echo $i; ?>" style="display: none;text-align:center;padding:10px;">
                <img src="<?php echo SITE_URL; ?>/images/lazy.gif"/>
  </div>
 <?php } else{ ?>


<p style="text-align:center;width:100%">	<img src="<?php echo SITE_URL; ?>images/no_product.jpg" width="250px"/></p>

	<?php } ?>


<script>

$('.product-card').hover(function(){
      $(this).addClass('animate');
      $('div.carouselNext, div.carouselPrev').addClass('visible');      
     }, function(){
      $(this).removeClass('animate');     
      $('div.carouselNext, div.carouselPrev').removeClass('visible');
  }); 

$(".itemprice").change(function() {
    var id = this.value;
    var split = id.split(",");
    var v1 = split[0];
    var v2 = split[1];
    $("#prodPriceID_"+v1).val(v2);
    //alert(id);
    $.ajax({
        type: "POST",
        url: "ajax/item-product-data.php",
        data:'itemId='+v2,
        dataType: 'json',
        success: function(data){
            //console.log(data);
            $("#item-sell"+data.product_id).html(parseInt(data.sell_price));
            $("#item-mrp"+data.product_id).html(parseInt(data.mrp_price));
             $("#item-discount"+data.product_id).html(parseInt(data.discount)+"% Off");
            document.getElementById("pro-img"+data.product_id).src="upload_images/product/thumb/"+data.pphoto;    
        }
    });
});  
</script>


<script>

function changeItemPrice (id,pid) {

    var pid = pid;
    $("#prodPriceID1_"+id).val(pid);
    $.ajax({
        type: "POST",
        url: "ajax/item-product-data.php",
        data:'itemId='+pid,
        dataType: 'json',
        success: function(data){

            //console.log(data);
            $('#kg-btn'+data.id).addClass('product-variant__btn--active');
            $("#msellpric"+data.product_id).html("₹"+parseInt(data.sell_price));
            $("#mmrppric"+data.product_id).html("₹"+parseInt(data.mrp_price));
             $("#mdis"+data.product_id).html(parseInt(data.discount)+"% Off");
             $("#msize"+data.product_id).html(data.size+ data.name);
             $("#mdsize"+data.product_id).html(data.size+ data.name);
            document.getElementById("pic-1"+data.product_id).src="upload_images/product/big/"+data.pphoto;    
        }
    });
}  
</script>


<!-- Increase  qnt on product List page product -->
<script type="text/javascript">
$(document).ready(function(){
 $(".incr-btn").on("click", function (e) {
  var click_btn=$(this);
  var $button = $(this);
  var product_price_id=$(click_btn).parent('.space-bottom').find('.homeProductPriceId').val();
  //alert(product_price_id);
  
  var oldValue = $(this).parent().find('.quantity').val();
  //alert(oldValue);
  $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
  
  var maxqty = parseInt($("#cmaxqty"+product_price_id).val());

  if ($button.data('action') == "increase") {
    if(oldValue < maxqty){
    var newVal = parseFloat(oldValue) + 1;
    $("#qty_"+product_price_id).val(newVal);
    }else{
      alert("You have select maximum quantity");
      return true;
    }
  } else {
    
    // Don't allow decrementing below 1
    if (oldValue > 1) {
      var newVal = parseFloat(oldValue) - 1;
    } else {
      newVal = 1;
      $button.addClass('inactive');
    }
      
      
  }
  $("#qty1_"+product_price_id).val(newVal);
  $button.parent().find('.quantity').val(newVal);
  e.preventDefault();
}); 
});


/*function flyToElement(flyer, flyingTo) {
    var $func = $(this);
    var divider = 3;
    var flyerClone = $(flyer).clone();
    $(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
    $('body').append($(flyerClone));
    var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
    var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
     
    $(flyerClone).animate({
        opacity: 0.4,
        left: gotoX,
        top: gotoY,
        width: $(flyer).width()/divider,
        height: $(flyer).height()/divider
    }, 700,
    function () {
        $(flyingTo).fadeOut('fast', function () {
            $(flyingTo).fadeIn('fast', function () {
                $(flyerClone).fadeOut('fast', function () {
                    $(flyerClone).remove();
                });
            });
        });
    });
}*/




  /*  $('.add-to-cart').on('click',function(){
        var itemImg = $(this).parents('.item').find('img').eq(0);
        flyToElement($(itemImg), $('.cart_anchor'));
        
    });*/

</script>