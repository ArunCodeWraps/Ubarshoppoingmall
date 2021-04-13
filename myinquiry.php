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
			<li><a href="myinquiry.php">Inquiry </a></li>
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
				<h4>Inquiries</h4>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">                          
				<div class="mainflx">
					<div class="tabArea">
						<div class="tabSectiion">
							<div class="panel with-nav-tabs panel-primary">
								<div class="panel-heading">
									<ul class="nav nav-tabs">
										<li class="active"><a aria-expanded="true" href="#tab1primary" data-toggle="tab">Inquiry Received</a></li>
										<li class=""><a aria-expanded="false" href="#tab2primary" data-toggle="tab">Inquiry Sent</a></li>
										<li class=""><a aria-expanded="false" href="#tab3primary" data-toggle="tab">Inquiry Deleted</a></li>
									</ul>
								</div>
								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane fade active in" id="tab1primary">
											<form name="frm" method="post" action="myinquiry-del.php" enctype="multipart/form-data">
												<input type="hidden" name="what" value="what">
												<div class="tab-flx">                                                     
													<div class="mainflx">
														<div class="col-xs-3">Select: <a href="javascript:void(0);" class="" type="button"> All  None</a> </div>
														<div class="col-xs-6 col-md-offset-3" style="text-align:right">
															<input type="submit" value="Delete" class="btn btn-default" onclick="return del_prompt(this.form, this.value)">
<!--    <input type="button" value="Mark as read" class="btn btn-default">
	<input type="button" value="Mark as unread" class="btn btn-default"> -->
	<!-- <input type="button" value="Forward" class="btn btn-default"> -->
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
					<th>Inquiry No. </th>
					<th>Inquiry Content</th>
					<th class="pcom">Sender Company</th>
					<th class="pdate">Post Date</th>
				</tr>
				<tr>
					<td class="noRecord" colspan="6"> No Inquiry Records </td>
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
				<div class="col-xs-6 col-md-offset-3" style="text-align:right">
					<input type="submit" value="Delete" class="btn btn-default" onclick="return del_prompt(this.form, this.value)">
<!--  <input type="button" value="Mark as read" class="btn btn-default">
	<input type="button" value="Mark as unread" class="btn btn-default"> -->
	<!--  <input type="button" value="Forward" class="btn btn-default"> -->
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
					<th>Inquiry No. </th>
					<th>Inquiry Content</th>
					<th class="pcom">Sender Company</th>
					<th class="pdate">Post Date</th>
				</tr>
				<tr>
					<th></th>
					<th><input type="checkbox" name="ids[]" value="37"></th>
					<th>37</th>
					<th>test</th>
					<th class="pcom"></th></tr></tbody></table></div></div></div></form></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
				</section>




				<?php 
				include 'includes/footer.php';
				?>