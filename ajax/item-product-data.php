<?php
session_start();
include('../include/config.php');
include("../include/functions.php");

if(!empty($_POST["itemId"])) {
  $sql1=$obj->query("SELECT pr.id,pr.product_id,pr.size,pr.mrp_price,pr.discount,pr.sell_price,pr.pphoto,u.name,pr.cart_max_qty  FROM tbl_productprice pr join tbl_unit as u on pr.unit_id=u.id WHERE pr.id='".$_POST['itemId']."'",$debug=-1);
  $row=$obj->fetchNextObject($sql1);  
  echo json_encode($row);
 }




?>