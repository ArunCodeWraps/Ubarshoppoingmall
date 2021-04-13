<?php 
include('../../include/config.php');
include("../../include/functions.php");


$subcat_id = $_REQUEST['subcat_id'];


$sql = $obj->query("select id,subsubcategory from $tbl_subsubcategory where subcat_id='$subcat_id' and status=1");
while($result = $obj->fetchNextObject($sql)){?>
	<option value="<?php echo $result->id; ?>"><?php echo $result->subsubcategory; ?></option>
<?php } ?>

		

