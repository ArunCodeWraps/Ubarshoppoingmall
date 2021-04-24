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
<div class="companyTitle" style="float:none;">
<h4>My Wishlist</h4>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">                          
<div class="mainflx">
<div class="tabArea">
<div class="tabSectiion">
<div class="panel with-nav-tabs panel-primary">
 <form name="frm" method="post" action="product-del.php" enctype="multipart/form-data">
            <div class="box">
              <div class="box-body">
                <table id="productlist" class="table table-bordered table-striped">
                  <thead>
                    <tr>
			          <th>Product Name</th>
			          <th>Category</th>
			          <th>Image</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i=1;
                    //$_SESSION['user_id']
                    $sql=$obj->query("select b.id,b.product_name,b.brand_id,b.cat_id,b.subcat_id,b.subsubcat_id from $tbl_wishlist as a inner join $tbl_product as b on a.product_id=b.id where 1=1 ",$debug=-1);
                    while($line=$obj->fetchNextObject($sql)){

                    	$getpic=$obj->fetchNextObject($obj->query("select pphoto from $tbl_productprice where product_id=".$line->id));

                    	$Var='';
                      $VarArr = array();
                      $PriceSql = $obj->query("select id,size,unit_id from $tbl_productprice where product_id='".$line->id."'");
                      while($PriceResult = $obj->fetchNextObject($PriceSql)){
                      $totqty = getTotalQty($line->id,$PriceResult->id);
                      $VarArr[] = $PriceResult->size."  ".getField('name',$tbl_unit,$PriceResult->unit_id)."-".$totqty;
                      }
                      //print_r($VarArr);
                      $Var='';
                      $Vr = array();
                      if(!empty($VarArr)){
                        for($j=0; $j < count($VarArr); $j++){
                          $Vr = explode('-',$VarArr[$j]);
                          if($Vr[1] <= getField('minstockqty',$tbl_setting,1)){
                            $Var .= '<span class="minimumstockqty">';
                          }
                          $Var .= $VarArr[$j];
                          $Var .= "</br>";
                          if($Vr[1] <= 20){
                            $Var .= '</span>';
                          }
                        }
                      }else{
                        $Var='';
                      }

                    	?>
                      <tr>
                        <td>
                          <strong>Product :</strong><?php echo $line->product_name; ?>
                          </br>
                          <strong>Brand :</strong><?php echo getField('brand',$tbl_brand,$line->brand_id); ?>
                          </br>
                          <strong>Qty :</strong><?php echo $Var; ?>
                       <td>
                        <?php
                          echo getField('category',$tbl_category,$line->cat_id)."->".getField('subcategory',$tbl_subcategory,$line->subcat_id)."->".getField('subsubcategory',$tbl_subsubcategory,$line->subsubcat_id); ?>   
                       
                        </td>
                        <td><?php
                          if(is_file('upload_images/product/thumb/'.$getpic->pphoto)){?>
                            <img src="upload_images/product/tiny/<?php echo $getpic->pphoto; ?>" class="img-thumbnail-prod">
                          <?php }?></td>
                        
                         
                        </tr>
                        <?php $i++; }?>

                      </tbody>

                      <tfoot>
                      </tfoot>

                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </form>

</div>
</div>
</div>
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
<script src="js/jquery.dataTables.min.js"></script>
<script>
  $(function () {
    $("#productlist").DataTable();
  });
</script>