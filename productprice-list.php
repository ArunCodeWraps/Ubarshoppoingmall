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
                  <h4>My Product Price List</h4>
                  <span style="margin-left: 250px;">
                    <a href="product-list.php" id="" class="primaryButt" type="button"> Product List </a>
                    <a href="productprice-addf.php?product_id=<?php echo $_REQUEST['product_id']; ?>" id="" class="primaryButt" type="button"> Add Product Price </a>
                  </span>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">                          
                  <div class="mainflx">
                    <div class="tabArea">
                      <div class="tabSectiion">
                        <div class="panel with-nav-tabs panel-primary">
                          <form name="frm" method="post" action="productprice-del.php" enctype="multipart/form-data">
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
                                      <th>Size</th>
                                      <th>Price</th>
                                      <th>Image</th>
                                      <th>Total Qty</th>
                                      <th>IN Stock</th>
                                      <th>Display Order</th>
                                      <th>Status</th>
                                      <th>Action</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $i=1;
                                    $sql=$obj->query("select * from $tbl_productprice where 1=1 and product_id='".base64_decode(base64_decode(base64_decode($_REQUEST['product_id'])))."'",$debug=-1);
                                    while($line=$obj->fetchNextObject($sql)){

                                      $unitquery=$obj->query("select * from $tbl_unit where status=1 and id=".$line->unit_id);
                                      $res=$obj->fetchNextObject($unitquery);

                                      ?>
                                      <tr>
                                        <td><div class="squaredFour">
                                          <input type="checkbox" class="checkall" id="squaredFour<?php echo $line->id;?>" name="ids[]" value="<?php echo $line->id;?>" />
                                          <label for="squaredFour<?php echo $line->id;?>"></label>
                                        </div>
                                      </td>                             
                                      <td><?php echo stripslashes($line->size)."&nbsp;"; echo stripslashes($res->name);?></td>
                                      <td>
                                        <?php echo '<strong>Actual: </strong>'.$website_currency_symbol." ".stripslashes($line->actual_price); ?><br/>
                                        <?php echo '<strong>MRP: </strong>'.$website_currency_symbol." ".stripslashes($line->mrp_price); ?><br/>
                                        <?php echo '<strong>Discount: </strong>'.stripslashes($line->discount); ?> %<br/>
                                        <?php echo '<strong>Sell: </strong>'.$website_currency_symbol." ".stripslashes($line->sell_price); ?>
                                      </td>

                                      <td><?php
                                      if(is_file("upload_images/product/tiny/".$line->pphoto)){
                                        ?>
                                        <img src="upload_images/product/tiny/<?php echo $line->pphoto; ?>" />
                                        <?php   
                                      }
                                      ?></td>
                                      <td> <?php echo getTotalQty($_REQUEST['product_id'],$line->id); ?></td>
                                      <td> <input type="checkbox" name="in_stcock" value="1"  <?php if($line->in_stock==1){ ?>checked<?php } ?> onclick="return changeStock(this.checked,<?php echo $line->id; ?>)"/></td>


                                      <td  class="padd5" align="center"><select name="display_order"  style="width:80px;" onchange="return ChangeDisplayOrder(<?php echo $line->id;?>,this.value)">
                                        <?php for($i=0; $i<=10;$i++){ ?>



                                          <option value="<?php echo $i; ?>" <?php if($line->display_order== $i){?>selected<?php } ?>><?php echo $i; ?></option>
                                        <?php } ?>
                                      </select>
                                    </td> 
                                    <td align="center">
                                      <label class="switch">
                                        <input type="checkbox" class="chkstatus" value="<?php echo $line->id;?>" <?php echo ($line->status=="1")?'checked':'' ?>  data-one="<?php echo $tbl_productprice?>">
                                        <div class="slider round"></div>
                                      </label>

                                    </td>
                                    <td align="center">
                                      <a href="productprice-addf.php?id=<?php echo base64_encode(base64_encode(base64_encode($line->id)));?>&product_id=<?php echo $_REQUEST['product_id']; ?>" class="btn btn-primary" ><i class="fa fa-edit"></i></a>
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
<script>

  function checkall(objForm)
  {
    len = objForm.elements.length;
    var i=0;
    for( i=0 ; i<len ; i++){
      if (objForm.elements[i].type=='checkbox') 
        objForm.elements[i].checked=objForm.check_all.checked;
    }
  }
  function del_prompt(frmobj,comb)
  {
  //alert(comb);
  if(comb=='Delete'){
    if(confirm ("Are you sure you want to delete record(s)"))
    {
      frmobj.action = "productprice-del.php?product_id=<?php echo base64_decode(base64_decode(base64_decode($_REQUEST['product_id']))); ?>";
      frmobj.what.value="Delete";
      frmobj.submit();

    }
    else{ 
      return false;
    }
  }
  else if(comb=='Disable'){
    frmobj.action = "productprice-del.php?product_id=<?php echo base64_decode(base64_decode(base64_decode($_REQUEST['product_id']))); ?>";
    frmobj.what.value="Disable";
    frmobj.submit();
  }
  else if(comb=='Enable'){
    frmobj.action = "productprice-del.php?product_id=<?php echo base64_decode(base64_decode(base64_decode($_REQUEST['product_id']))); ?>";
    frmobj.what.value="Enable";
    frmobj.submit();
  }


}


function ChangeDisplayOrder(id,val){
  $.ajax({
    url:"changeDisplayOrder.php",
    data:{val:val,id:id},
    beforeSend:function(){
  //
},
success:function(data){
  console.log(data);
  $('#msg').html(data).show().fadeOut('slow');
}
})
}

function changeStock(check_box_val,row_id){

  $.ajax({
    url:"changeStock.php",
    data:{box_val:check_box_val,row_id:row_id},
    beforeSend:function(){
  //
},
success:function(data){
  console.log(data);
  $('#msg').html(data).show().fadeOut('slow');
}
})
}


</script>
<script src="js/change-status.js"></script> 