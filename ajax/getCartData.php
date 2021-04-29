<?php 
include("../wfcart.php");
include("../include/config.php");
include("../include/functions.php"); 

$cart =& $_SESSION['cart'];
if(!is_object($cart)) $cart = new wfCart();
$itmes=$cart->get_contents();
echo $no_of_itmes=count($itmes);

?>



                    