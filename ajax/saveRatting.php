<?php
include("../include/config.php");
include("../include/functions.php"); 

$product_id=$_REQUEST['product_id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['msg'];
$obj->query("insert into $tbl_review set product_id='$product_id',name='$name',email='$email',comments='$msg'",-1); //die;
echo 1;



