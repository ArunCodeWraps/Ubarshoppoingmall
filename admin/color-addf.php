<?php
session_start();
include("../include/config.php");
include("../include/functions.php"); 
 validate_admin();
  
  if($_REQUEST['submitForm']=='yes'){
  $color_name=$obj->escapestring($_POST['color_name']);
  $color_code=$obj->escapestring($_POST['color_code']);
  if($_REQUEST['id']==''){
	  $obj->query("insert into $tbl_color set color_name='$color_name',color_code='$color_code'");
	  $_SESSION['sess_msg']='Unit added sucessfully';  
	  
       }else{ 
	  $obj->query("update $tbl_color set color_name='$color_name',color_code='$color_code' where id=".$_REQUEST['id']);
	  $_SESSION['sess_msg']='Unit updated sucessfully';   
        }
   header("location:color-list.php");
   exit();
  }      
	   
	   
if($_REQUEST['id']!=''){
$sql=$obj->query("select * from $tbl_color where id=".$_REQUEST['id']);
$result=$obj->fetchNextObject($sql);
}
	
?>
<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include("header.php"); ?>
   <?php include("menu.php"); ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1><?php if($_REQUEST['id']==''){?> Add <?php }else{?> Update <?php }?> Color</h1>
      <ol class="breadcrumb">
        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="color-list.php">View Color List</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-primary">
		<form name="frm" id="frm" method="POST" enctype="multipart/form-data" action="" onSubmit="return validate(this)">
		<input type="hidden" name="submitForm" value="yes" />
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />
        <div class="box-body">
	      <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Name</label>
                <input type="text" name="color_name" value="<?php echo stripslashes($result->color_name); ?>" class="required form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Code</label>
                <input type="color" name="color_code" value="<?php echo stripslashes($result->color_code); ?>" class="required form-control">
              </div>
            </div>
          </div>
       </div>
		<div class="box-footer">
		<input type="submit" name="submit" value="Submit"  class="button" border="0"/>&nbsp;&nbsp;
		<input name="Reset" type="reset" id="Reset" value="Reset" class="button" border="0" />
		</div>
		</form>
      </div>
    </section>
  </div>
  <?php include("footer.php"); ?>
  <div class="control-sidebar-bg"></div>
</div>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.min.js"></script>
<script src="js/demo.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#frm").validate();
  })
</script>
</body>
</html>
