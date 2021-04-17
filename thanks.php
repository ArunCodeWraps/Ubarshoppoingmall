<?php 
include 'includes/head.php';
include 'includes/header.php';
if(empty($_SESSION['user_id'])){
	header("location:register.php");
}
?>
<style type="text/css">
    .megamenu{display: none;}
</style>
<section class="spacingY signUp_wrapper">
	<div class="card">
		<h4 class="card-title mt-3 text-center">Congratulation!!!</h4>
		<p class="text-center"><?php
		if(!empty($_SESSION['succ_msg'])){?>
		<?php echo $_SESSION['succ_msg']; $_SESSION['succ_msg']='';?>
		<?php }?></p>
	</div>
</section>
<?php 
include 'includes/footer.php';
?>
<script src="js/jquery.validate.min.js"></script>
<script>
	$(document).ready(function(){
    	$("#register").validate();


    		$("#cpass").change(function(){
    		pass = $("#pass").val();
    		cpass = $(this).val();
    		if(pass!=cpass){
    			$("#regismsg").html("<b style='color:red'>Password and confirm password are not match.</b>");
    		}else{
    			$("#regismsg").html("<b style='color:green'>Password Matched.</b>");
    		}
    	});
	});
</script>