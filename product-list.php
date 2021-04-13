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
<script type="text/javascript">
$(document).ready(function (e) {

$('#loading').hide();
$(".mysubtbtncls").hide();

$("#uploadimage").on('submit', (function (e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "ajax_php_file.php", // Url to which the request is send
type: "POST", // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false, // The content type used when sending data to the server.
cache: false, // To unable request pages to be cached
processData: false, // To send DOMDocument or non processed data file it is set to false
success: function (data)   // A function to be called if request succeeds
{
$('#loading').hide();
$('.mysubtbtncls').hide();
$("#message").html(data);
}
});
}));

// Function to preview image after validation
$(function () {
$("#file").change(function () {
$(".mysubtbtncls").show();
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match = ["image/jpeg", "image/png", "image/jpg"];
if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2])))
{
$('#previewing').attr('src', 'noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
} else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color", "green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '250px');
$('#previewing').attr('height', '230px');
}
;
});
</script>

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
<div class="companyTitle">
<h4>Products</h4>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="mainflx" style="justify-content: space-between;">
<div class="col-xs-3">
	<a href="add-product.php" id="" class="primaryButt" type="button"> Add Product </a>
</div>
<div class="col-xs-4 float-right	">
<form name="searchFrm" method="post" action="">
<div class="input-group">
<input type="input" value="" maxlength="100" size="20" name="keyword" class="keyword form-control">
<span class="input-group-btn">
<button alt="Search" value="" class="btn btn-default searchBtn" type="submit"> <i class="fa fa-search"></i> </button>
</span> 
</div>
</form>
</div>

<div class="clr"></div>
</div>

<!--  <div class="noticeBlock">
<p> Product post quota:20<br>
<b>0</b> quota units posted, <b class="[numClass]">20</b> quota units remain. <a target="_blank" href="#">»Order More</a> </p>
<div class="clr"></div>
</div>-->

<div class="mainflx">
<div class="tabArea">
<div class="tabSectiion">
<div class="panel with-nav-tabs panel-primary">
<div class="panel-heading">
<ul class="nav nav-tabs">
<li class="active">
<a aria-expanded="true" href="#tab1primary" data-toggle="tab">All (0)</a>
</li>
<li class="">
<a aria-expanded="false" href="#tab2primary" data-toggle="tab">Rejected (0)</a>
</li>
<li class="">
<a aria-expanded="false" href="#tab3primary" data-toggle="tab">Pending (0)</a>
</li>
<li class="">
<a href="#tab4primary" data-toggle="tab">Restricted (0)</a>
</li>
</ul>
</div>
<div class="panel-body">
<div class="tab-content">
<div class="tab-pane fade active in" id="tab1primary">
<div class="tab-flx">
<div class="productdetailTable">
<div class="comContactTable">
<table class="table" name="productTable" id="productTable">
<thead>
<tr>
<!--<th><input name="check_all" type="checkbox"   id="check_all" onclick="checkall(this.form)" value="check_all" /></th>-->
<th class="pimg headerSort">Image</th>
<th class="pname headerSort">Name</th>
<th class="pprice headerSort">Price Info.</th>
<th class="pdate headerSort">Last Update</th>
<th class="pdate headerSort">Status</th>
<th class="paction"> Action</th>
</tr>
</thead>
<tbody><tr class="even">
<td colspan="5" class="noRecord"> No Product </td>
</tr>


<!--                                                                                <tbody>

</tbody>-->
</tbody></table>

<div class="clr"></div> 
</div>                                                    
<div class="clr"></div>
</div>
</div>
</div>                                

<div class="tab-pane fade" id="tab2primary">
<div class="tab-flx">
<div class="productdetailTable">
<div class="comContactTable">
<table class="table" name="productTable" id="productTable">
<thead>
<tr>
<th class="pimg headerSort">Image</th>
<th class="pname headerSort">Name</th>
<th class="pprice headerSortadd-product.php">Price Info.</th>
<th class="pdate headerSort">Last Update</th>
<th class="paction"> Action</th>
</tr>
</thead>
<tbody><tr class="even">
<td colspan="5" class="noRecord"> No Product </td>
</tr>
</tbody></table>

<div class="clr"></div> 
</div>                                                    
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
</div>
<div class="tab-pane fade" id="tab3primary">
<div class="tab-flx">
<div class="productdetailTable">
<div class="comContactTable">
<table class="table" name="productTable" id="productTable">
<thead>
<tr>
<th class="pimg headerSort">Image</th>
<th class="pname headerSort">Name</th>
<th class="pprice headerSort">Price Info.</th>
<th class="pdate headerSort">Last Update</th>
<th class="paction"> Action</th>
</tr>
</thead>
<tbody><tr class="even">
<td colspan="5" class="noRecord"> No Product </td>
</tr>
</tbody></table>

<div class="clr"></div> 
</div>                                                    
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
</div>
<div class="tab-pane fade" id="tab4primary">
<div class="tab-flx">
<div class="productdetailTable">
<div class="comContactTable">
<table class="table" name="productTable" id="productTable">
<thead>
<tr>
<th class="pimg headerSort">Image</th>
<th class="pname headerSort">Name</th>
<th class="pprice headerSort">Price Info.</th>
<th class="pdate headerSort">Last Update</th>
<th class="paction"> Action</th>
</tr>
</thead>
<tbody><tr class="even">
<td colspan="5" class="noRecord"> No Product </td>
</tr>
</tbody></table>

<div class="clr"></div> 
</div>                                                    
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
</div>

</div>
</div>
</div>
</div>

<div class="clr"></div>
</div>

<div class="clr"></div>
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