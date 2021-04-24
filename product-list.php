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
<h4>My Product List</h4>
<span style="margin-left: 550px;"><a href="product-addf.php" id="" class="primaryButt" type="button"> Add Product </a></span>
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
                      <th>
                        <div class="squaredFour">
                          <input name="check_all" type="checkbox"  id="check_all" value="check_all" />
                          <label for="check_all"></label>
                        </div>
                      </th>
            					<th>Product Name</th>
            					<th>Category</th>
            					<th>Image</th>
            					<th>Status</th>
            					<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i=1;
                    $sql=$obj->query("select a.* from $tbl_product as a JOIN $tbl_productprice as b ON a.id=b.product_id where 1=1 and a.vendor_id='".$_SESSION['user_id']."' group by a.id",$debug=-1);
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
                        <td><div class="squaredFour">
                          <input type="checkbox" class="checkall" id="squaredFour<?php echo $line->id;?>" name="ids[]" value="<?php echo $line->id;?>" />
                          <label for="squaredFour<?php echo $line->id;?>"></label>
                        </div>
                      </td>                       
                        <td>
                          <strong>Product :</strong><?php echo $line->product_name; ?>
                          </br>
                          <strong>Brand :</strong><?php echo getField('brand',$tbl_brand,$line->brand_id); ?>
                          </br>
                          <strong>Qty :</strong><?php echo $Var; ?>
                        </td>
                        <td>
                          <?php
                          echo getField('category',$tbl_category,$line->cat_id)."->".getField('subcategory',$tbl_subcategory,$line->subcat_id)."->".getField('subsubcategory',$tbl_subsubcategory,$line->subsubcat_id); ?>                            
                          </td>
                        <td>
                          <?php
                          if(is_file('upload_images/product/thumb/'.$getpic->pphoto)){?>
                            <img src="upload_images/product/tiny/<?php echo $getpic->pphoto; ?>" class="img-thumbnail-prod">
                          <?php }?>
                        </td>
                         <td>
                           <?php
                           if($line->status==1){
                            echo "Enable";
                           }else{
                            echo "Disable";
                           }
                           ?>
                         </td>
                        <td>
                          <a href="product-addf.php?id=<?php echo base64_encode(base64_encode(base64_encode($line->id))); ?>" class="btn btn-primary " title="View Details">
                          <i class="fa fa-edit"></i></a>
                          <a href="productprice-list.php?product_id=<?php echo base64_encode(base64_encode(base64_encode($line->id))); ?>" class="btn btn-primary" title="Manage price/size"><i class="fas fa-rupee-sign"></i></a>
                          </td>
                        </tr>
                        <?php $i++; }?>
                      </tbody>

                      <tfoot>
                      </tfoot>

                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="row">
                <!-- <div class="col-md-9"></div> -->
                <div class="col-md-12">
                  <input type="hidden" name="what" value="what" />
                  <input type="submit" name="Submit" value="Enable" class="button btn-success" onClick="return del_prompt(this.form,this.value)" />
                  <input type="submit" name="Submit" value="Disable" class="button btn-warning" onClick="return del_prompt(this.form,this.value)" />
                  
                    <input type="submit" name="Submit" value="Delete" class="button btn-danger" onClick="return del_prompt(this.form,this.value)" />
                  
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
<script src="js/change-status.js"></script> 
<!-- page script -->

<script>
  function del_prompt(frmobj,comb)
  {
//alert(comb);
if(comb=='Delete'){
  if(confirm ("Are you sure you want to delete record(s)"))
  {
    frmobj.action = "product-del.php";
    frmobj.what.value="Delete";
    frmobj.submit();

  }
  else{ 
    return false;
  }
}
else if(comb=='Disable'){
  frmobj.action = "product-del.php";
  frmobj.what.value="Disable";
  frmobj.submit();
}
else if(comb=='Enable'){
  frmobj.action = "product-del.php";
  frmobj.what.value="Enable";
  frmobj.submit();
}

}

</script>