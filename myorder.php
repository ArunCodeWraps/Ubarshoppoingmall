<?php 
include 'includes/head.php';
include 'includes/header.php';
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
<div class="col-md-3 col-sm-3 col-xs-12">

<div class="categoryflx">
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<div class="upload-file-flx">                   
<figure class="m-0">
<img id="previewing" src="img/upload-pic.jpg">
</figure>
<div class="clr"></div>
</div>
<div class="upload-head">
<h1 id="selectImage"><input type="file" name="file" id="file" required="">Add Profile Photo</h1>
<div class="clr"></div>
</div>
<input type="submit" value="Upload" class="submit mysubtbtncls" style="display: none;">
<div id="message"></div>
</form>
<h4 id="loading" style="display: none;">loading..</h4>

<h2>User Dashboard</h2>
<div class="catelistinner">
<ul class="categorylist">
<li><a href="myaccount.php">User Dashboard </a></li>
<li><a href="edit-profile.php">Edit Profile </a></li>
<li><a href="product-list.php">Products </a></li>
<li><a href="myinquiry.php">Order List </a></li>
<li><a href="company-detail.php">Company detail </a></li>
<li><a href="change-password.php">Change Password</a></li>
<li><a href="support.php">Support</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>                     

</div>
</div>    
</div>

<div class="col-md-9 col-sm-9 col-xs-12">
<div class="detailpro">
<div class="companyInfo">
<div class="companyTitle" style="float:none;">
<h4>Order List</h4>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">                          
<div class="mainflx">
<div class="tabArea">
<div class="tabSectiion">
	<div class="panel with-nav-tabs panel-primary">
		<div class="panel-heading">
			<ul class="nav nav-tabs">
				<li class="active"><a aria-expanded="true" href="#tab1primary" data-toggle="tab">New Order</a></li>
				<li class=""><a aria-expanded="false" href="#tab2primary" data-toggle="tab">Cancel Order</a></li>
				<li class=""><a aria-expanded="false" href="#tab3primary" data-toggle="tab">Delivered Order</a></li>
			</ul>
		</div>
		<div class="panel-body">
			<div class="tab-content">
				<div class="tab-pane fade active in show" id="tab1primary">
					<form name="frm" method="post" action="myinquiry-del.php" enctype="multipart/form-data">
						<input type="hidden" name="what" value="what">
						<div class="tab-flx">                                                     
							<div class="mainflx">
								<div class="col-xs-3">Select: <a href="javascript:void(0);" class="" type="button"> All  None</a> </div>
								<div class="col-xs-6 col-md-offset-3" style="text-align:right">
				

</div>

<div class="clr"></div>
</div>

<div class="productdetailTable">
<div class="comContactTable">
<table class="table">
<tbody>
<tr>
<th></th>
<th><input name="check_all" type="checkbox" id="check_all" onclick="checkall(this.form)" value="check_all"></th>
<th>Order Date</th>
<th>Order Id</th>
<th class="pcom">Amount</th>
<th class="pdate">Method of Payment</th>
<th class="pdate">Name & Email</th>
</tr>

</tbody>
</table>

<div class="clr"></div> 
</div>                                                    
<div class="clr"></div>
</div>
</div>
</form>
</div>                                

<div class="tab-pane fade" id="tab2primary">
<form name="frm" method="post" action="myinquiry-del.php" enctype="multipart/form-data">
<input type="hidden" name="what" value="what">
<div class="tab-flx">                                                     
<div class="mainflx">
<div class="col-xs-3">Select: <a href="javascript:void(0);" class="" type="button"> All  None</a> </div>


<div class="clr"></div>
</div>

<div class="productdetailTable">
<div class="comContactTable">
<table class="table">
<tbody>
<tr>
<th></th>
<th><input name="check_all" type="checkbox" id="check_all" onclick="checkall(this.form)" value="check_all"></th>
<th>Order Date</th>
<th>Order Id</th>
<th class="pcom">Amount</th>
<th class="pdate">Method of Payment</th>
<th class="pdate">Name & Email</th>
</tr>

</tbody>
</table>

<div class="clr"></div> 
</div>                                                    
<div class="clr"></div>
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
</div>
</div>
</div>
</section>




<?php 
include 'includes/footer.php';
?>