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
<div class="companyTitle" style="float:none;">
<h4>My Order List</h4>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">                          
<div class="mainflx">
<div class="tabArea">
<div class="tabSectiion">
<div class="panel with-nav-tabs panel-primary">
 <form name="frm" method="post" action="product-del.php" enctype="multipart/form-data">
            <div class="box">
              <div class="box-body">
                <table id="active-order" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SNo.</th>
                      <th>Order Date/Time</th>
                      <th>Order  ID</th>
                      <th>Amount</th>
                      <th>M/P</th>
                      <th>Name/Mobile</th>
                      <th>Ship Address</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i=1;
                    $sql=$obj->query("select * from $tbl_order where 1=1 and order_status in (1,2) order by id asc",$debug=-1);
                    while($line=$obj->fetchNextObject($sql)){?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                        <?php 
                          echo date('d M Y H:i',strtotime($line->order_date)); ?><br/><?php echo CalculateOrderTime($line->order_date); 
                         ?>
                       
                        </td>
                        <td><?php echo stripslashes($line->orderno); ?></td>
                        <td><?php echo stripslashes($line->orderno); ?></td>
                        <td><?php echo $website_currency_symbol." ".number_format($line->total_amount,0); ?></td>
                        <td align="center">
                            <?php echo stripslashes($line->payment_method);?> /
                            <?php if($line->payment_status==1){ echo "Paid"; }else{ echo "Unpaid"; }?>
                        </td>
                        <script>
                          $(document).ready(function(){
                            $(".iframeOrder<?php echo $line->id; ?>").colorbox({iframe:true, width:"900px;", height:"800px;", frameborder:"0",scrolling:true});
                            $(".iframeAddc<?php echo $line->id; ?>").colorbox({iframe:true, width:"700px;", height:"500px;", frameborder:"0",scrolling:true});
                            $(".iframeViewc<?php echo $line->id; ?>").colorbox({iframe:true, width:"800px;", height:"600px;", frameborder:"0",scrolling:true});
                            
                            $(".iframeViewusercomm<?php echo $line->id; ?>").colorbox({iframe:true, width:"700px;", height:"500px;", frameborder:"0",scrolling:true});
                            
                          });
                        </script>
                        <td><?php echo getField('name',$tbl_user,$line->user_id)." ".getField('surname',$tbl_user,$line->user_id); ?></br>
                        <?php echo getField('mobile',$tbl_user,$line->user_id); ?></br>
                        </td>
                         <td><?php echo stripslashes($line->ship_address); ?></td>
                        <td>
                          <a href="vieworder-detail.php?order_id=<?php echo $line->id; ?>" class="btn btn-primary iframeOrder<?php echo $line->id; ?>" title="View Details">
                            <i class="fa fa-eye"></i></a>
                            <a href="addcommets.php?order_id=<?php echo $line->id; ?>"  class="btn btn-primary iframeAddc<?php echo $line->id; ?>" title="Add Comment">
                                <i class="fa fa-plus"></i></a>
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