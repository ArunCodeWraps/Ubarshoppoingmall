<?php session_start();
include("include/config.php");
include("include/functions.php"); 
validate_admin();
$arr =$_POST['ids'];
//print_r($_REQUEST); die;

$Submit =$_POST['what'];

if(count($arr)>0){
	$str_rest_refs=implode(",",$arr);
	if($Submit=='Delete')
	{
		$sql="delete from $tbl_productprice where id in ($str_rest_refs)"; 
		$obj->query($sql);
		$sess_msg='Selected record(s) deleted successfully';
		$_SESSION['sess_msg']=$sess_msg;
    }
	elseif($Submit=='Enable')
	{	
		$sql="update $tbl_productprice set status=1 where id in ($str_rest_refs)";
		$obj->query($sql);
		$sess_msg='Selected record(s) activated successfully';
		$_SESSION['sess_msg']=$sess_msg;
	}
	elseif($Submit=='Disable')
	{		
		 $sql="update $tbl_productprice set status=0 where id in ($str_rest_refs)";
		$obj->query($sql);
		$sess_msg='Selected record(s) deactivated successfully';
		$_SESSION['sess_msg']=$sess_msg;
	}
		
	}
	
else{
	$sess_msg="Please select check box";
	$_SESSION['sess_msg']=$sess_msg;
	}
	header("location: productprice-list.php?product_id=".base64_encode(base64_encode(base64_encode($_REQUEST['product_id']))));
	exit();
	
?>
