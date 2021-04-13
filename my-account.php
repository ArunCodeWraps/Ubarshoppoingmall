<?php 
include 'includes/head.php';
include 'includes/header.php';
?>

<link rel="stylesheet" type="text/css" href="css/dashboard.css">

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
</div>                      </div>

<div class="col-md-9 col-sm-9 col-xs-12">
<div class="detailpro">
<div class="companyInfo">
<div class="companyTitle">
<h4>User Dashboard 

<span style="margin-right:300px; color:red; font-size:15px;"></span>
	
</h4>
<h5>Now your plan is <span style="color:red;font-size:22px;">free!!</span><a href="plan.php" class="btn btn-info btn-lg">Upgrade</a></h5>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="productdetailTable">
<span class="edit_flx"><a href="edit-profile.php">Edit</a></span>
<table class="comContactTable">
	<tbody>                                                
		<tr>
			<th>Name:</th>
			<td>Mr. PK</td>
		</tr>
		<tr>
			<th>Email :</th>
			<td>new@gmail.com</td>
		</tr>
		<tr>
			<th>Contact No:</th>
			<td>9588888888</td>
		</tr>
		<tr>
			<th>Company Name:</th>
			<td>redif</td>
		</tr>
		<!--<tr>
			<th>Business Name:</th>
			<td>Apparel, Shoes & Accessories</td>
		</tr>-->
		<tr>
			<th>Company Address:</th>
			<td>niketan New Delhi</td>
		</tr>
		<tr>
			<th>Company Phone:</th>
			<td>4444444444</td>
		</tr>
		<tr>
			<th>Website:</th>
			<td><a class="domain" target="_blank" href="gggg.com">gggg.com</a></td>
		</tr>
	</tbody>
</table>

</div>
</div>

</div>
</div>

<div class="detailpro">
<div class="companyInfo">
<div class="companyTitle">
<h4>Support <span>*Required information</span></h4>
</div>
<div class="col-md-3">
<div class="companydata">                   
<h3>Message*:</h3>                                
</div>
</div>
<form name="supportfrm" id="supportfrm" method="post">
<input type="hidden" name="supportsubmitfrm" value="Yes">
<div class="col-md-6">
<div class="textarea">
	<textarea name="msg" class="required"></textarea>
   <!-- <p><input type="checkbox"> Send me regular updates on the latest Product &amp; Supplier information for "prada belts" (Removal is available) </p>-->
	<p class="text-right"><input type="submit" value="Send" class="primaryButt"></p>
</div>
</div>  
</form>                        
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