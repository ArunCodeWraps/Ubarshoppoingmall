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
<div class="companyTitle">
<h4>Update User Profile</h4>

</div>
<div class="col-md-12">
<form name="editprofilefrm" id="editprofilefrm" method="post" style="margin-top: 100px;">
<input type="hidden" name="submitedValue" value="Yes">
<input type="hidden" name="u_id" value="56">
<input type="hidden" name="c_id" value="87">
<div class="register">           
<div class="register_login">  
<h2>User Information Setting</h2>
<p><label>Salutation: <span>*</span></label> 
<input type="radio" name="title_name" placeholder="" class="required" value="Mr." checked="">Mr. 
<input type="radio" name="title_name" placeholder="" class="required" value="Mrs.">Mrs<span></span> 
</p>
<p><label>Name: <span>*</span></label> 
<input type="text" name="contact_person" placeholder="" class="required" value="PK"> <span></span>
</p>
<p><label>Email: <span>*</span></label> 
<input type="text" name="email" placeholder="" class="required email" readonly="" value="new@gmail.com">
</p>
<p><label>Mobile Number : <span>*</span></label> 
<input type="text" name="mobile_no" placeholder="" class="required digits" value="9588888888">
</p>                                                              
</div>

<div class="register_login">  
<h2>Company Basic Information Setting</h2>
<p><label>Company Name: <span>*</span></label> <input type="text" name="company_name" placeholder="" required="" value="redif"> </p>
<p><label>Industry: <span>*</span></label> 
<select name="industry" id="industry" class="required">
<option value="">Select</option>
<option value="2">Agriculture</option>
<option value="4" selected="">Apparel, Shoes &amp; Accessories</option>
<option value="5">Arts &amp; Entertainment</option>
<option value="7">Business &amp; Industrial Tools</option>
<option value="8">Electronics</option>
<option value="10">Home Decor &amp; Furniture</option>
<option value="12">Health &amp; Beauty</option>
<option value="14">Luggage &amp; Bags</option>
<option value="16">Office Supplies</option>
<option value="18">Software</option>
<option value="20">Gifts, Toys &amp; Sports</option>
<option value="21">Vehicles &amp; Parts</option>
<option value="22">Professional Services</option>
<option value="23">Jewellery &amp; Fashion</option>
<option value="24">Brand Products</option>
<option value="25">Franchise </option>
<option value="1">Select</option>
</select></p>
<p><label>Company Address: <span>*</span></label> <textarea name="company_address" class="required">niketan New Delhi</textarea></p>
<p><label>Address Line 1 : </label> <input type="text" name="c_addrs_level" placeholder="" value="niketan New Delhi"></p>
<p><label>Address Line 2 : </label> <input type="text" name="c_bulding_number" placeholder="" value=""></p>
<!-- <p><label>Street Name: </label> <input type="text" name="c_street" placeholder="" value="" /></p> -->
<p><label>City/Town/Suburb: <span>*</span></label> <input type="text" name="c_city" placeholder="" class="required" value="Delhi"></p>
<p><label>State: <span>*</span></label> <input type="text" name="c_state" placeholder="" class="required" value="New Delhi"></p>
<p><label>Zip/Post code: <span>*</span></label> <input type="text" name="c_postal_code" placeholder="" class="required digits" value="2410101"></p>
<p><label>Website: <span>*</span></label> <input type="text" name="c_website" placeholder="" class="required" value="gggg.com"></p>
<p><label>Country: <span>*</span></label> 
<select name="c_country_id" id="c_country_id" class="required">
<option value="">Select</option>
</select>
</p>
<p>
<label>Membership Type: <span>*</span></label>
<!--<input type="checkbox" value="Supplier" name="user_type[]" >&nbsp;Supplier &nbsp;&nbsp;&nbsp;
<input type="checkbox" value="Buyer" name="user_type[]" >&nbsp;Buyer &nbsp;&nbsp;&nbsp;
<input type="checkbox" value="Advertiser" name="user_type[]" >&nbsp;Advertiser &nbsp;&nbsp;&nbsp;-->
</p> 
</div>
<div class="clr"></div>
<div class="regi_btn">                                
<input type="submit" value="Update" class="primaryButt submitButt">                                
</div>
</div>
</form>
<p>&nbsp;</p>
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