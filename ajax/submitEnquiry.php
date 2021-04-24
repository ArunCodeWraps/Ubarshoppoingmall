<?php
include("../wfcart.php");
include('../include/config.php');
include("../include/functions.php");

$cart =& $_SESSION['cart'];
if(!is_object($cart)) $cart = new wfCart();

if($_REQUEST['registerFrm']=='yes'){

  $fname = $obj->escapestring($_REQUEST['fname']);
  $lname = $obj->escapestring($_REQUEST['lname']);
  $email = $obj->escapestring($_REQUEST['email']);
  $pass = $obj->escapestring($_REQUEST['pass']);
  $cpass = $obj->escapestring($_REQUEST['cpass']);
  $gender = $obj->escapestring($_REQUEST['gender']);
  $country_id = $obj->escapestring($_REQUEST['country_id']);

  if($pass==$cpass){
    $obj->query("insert into $tbl_user set name='$fname',surname='$lname',email='$email',pass='$pass',gender='$gender',country_id='$country_id'",$debug=-1); //die;
    $lastInserId=$obj->lastInsertedId();

    $_SESSION['user_id']=$lastInserId;
    $_SESSION['user_name']=$fname." ".$lname;

      unset($_SESSION['fname']);
      unset($_SESSION['lname']);
      unset($_SESSION['email']);
      unset($_SESSION['pass']);
      unset($_SESSION['cpass']);
      unset($_SESSION['gender']);
      unset($_SESSION['country_id']);
      unset($_SESSION['err_msg']);
      $_SESSION['succ_msg'] = "Your account is successfullly crated..";
      header("location:".SITE_URL."thanks.php");
    exit;
  }else{
      $_SESSION['fname'] = $fname;
      $_SESSION['lname'] = $lname;
      $_SESSION['email'] = $email;
      $_SESSION['pass'] = $pass;
      $_SESSION['cpass'] = $cpass;
      $_SESSION['gender'] = $gender;
      $_SESSION['country_id'] = $country_id;
      $_SESSION['err_msg'] = "Both password are not same.";
      header("location:".SITE_URL."register.php");
  }
  

}



if($_REQUEST['loginBtn']=='yes'){

  $username=$_POST["username"];
  $password=$_POST["password"];


$sql =$obj->query("select * from tbl_user where email='$username' and pass='$password'",$debug=-1); //die;
$row=$obj->numRows($sql);

if($row>0){
    $line=$obj->fetchNextObject($sql);
    if ($line->status==1) {  
      $_SESSION['user_id']=$line->id;
      $_SESSION['user_name']=$line->fname." ".$line->lname;
      header("location:".SITE_URL."dashboard.php");
     }elseif($line->status==2){
      $_SESSION['err_msg'] = "You have block please contact to admin.";
      header("location:".SITE_URL."login.php");
     } else {
      $_SESSION['err_msg'] = "You have deactivate please contact to admin.";
      header("location:".SITE_URL."login.php");
     }
  } else{
    $_SESSION['err_msg'] = "User id and Password are not match.";
    header("location:".SITE_URL."login.php");
  }

}



if($_REQUEST['forgotBtn']=='yes'){

 $forgot_email=$_POST['username'];
    

  $sql =$obj->query("select * from tbl_user where email='$forgot_email' ",$debug=-1);
  $row=$obj->numRows($sql);
  if($row>0){
  $line=$obj->fetchNextObject($sql);
  $site_title=SITE_TITLE;
  $subject = "Forgotten Password USM";
    $enq_message='<!doctype html>
      <html>
      <head>
      <meta charset="utf-8">
      <title>USM</title>
      </head>
      <body>
      <div style="width:700px; margin:0 auto; color: #6d6f71;">
      <div style="background:#efefef; border-radius:2px; padding:30px 40px">
         <div style="background:#ffffff; border-radius:5px; padding:50px 30px 20px 30px; text-align:center">
             <img src="'.SITE_URL.'/images/kallyas-footerlogo.png" alt="vip logo"/>
             <h1 style="padding:10px 0; font-size: 36px; color: #655f5f; font-weight: 300;">&iexcl;Hola '.$fname.'!</h1>
             <p style="text-align: left;font-size: 17px; color: #6d6f71; font-weight: 100; line-height: 24px;">Here is your password to access our services online</h4>
              <p style="text-align: left;"><strong>User ID: </strong>'.$line->email.'</p>
              <p style="text-align: left;"><strong>Password: </strong>'.$line->pass.'</p>
              <h4 >Sincerely,<br>Promask Support Team</h4>
               
             <h4 style="padding:10px 0; color: #6d6f71; font-weight:400; font-size:18px; ">This email address does not support replies.</h4>
         </div>
      </div>
      </div>
      </body>
      </html>';
      $headers = "MIME-Version: 1.0"."\r\n";
      $headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
      $headers .= "From:".SITE_TITLE."<info@usm.com.co> \r\n";
      @mail($forgot_email, $subject, $enq_message, $headers); 
      $_SESSION['succ_msg'] = "Password sent on given email id.";
      header("location:".SITE_URL."thanks.php");
  } else{
   $_SESSION['err_msg'] = "This email id is not exist.";
  header("location:".SITE_URL."reset-password.php");
  }
}




if($_REQUEST['editprofilebtn']=='yes'){
  $fname = $obj->escapestring($_REQUEST['fname']);
  $lname = $obj->escapestring($_REQUEST['lname']);
  $email = $obj->escapestring($_REQUEST['email']);
  $mobile = $obj->escapestring($_REQUEST['mobile']);
  $gender = $obj->escapestring($_REQUEST['gender']);
  $country_id = $obj->escapestring($_REQUEST['country_id']);

  $obj->query("update $tbl_user set name='$fname',surname='$lname',email='$email',mobile='$mobile',gender='$gender',country_id='$country_id' where id='".$_SESSION['user_id']."'",$debug=-1); //die;

  $_SESSION['succ_msg'] = "Your profile is successfullly updated.";
  header("location:".SITE_URL."dashboard.php");
  exit;
 
}

if($_REQUEST['changepasswordbtn']=='yes'){
  $old_password=$obj->escapestring($_POST['old_password']);
  $new_password=$obj->escapestring($_POST['new_password']);
  $confirm_password=$obj->escapestring($_POST['confirm_password']);

  if($new_password==$confirm_password){
    $query=$obj->query("select * from $tbl_user where id=".$_SESSION['user_id'],$debug=-1);
    $result=$obj->fetchNextObject($query);

    if($old_password!=$result->pass){ 
     $_SESSION['err_msg']='Old Password is Wrong !';
     header("location:".SITE_URL."change-password.php");
     exit;
    }else{
      $obj->query("update $tbl_user set pass='$new_password' where id=".$_SESSION['user_id']);
      $_SESSION['err_msg']='Your password has been updated successfully !';
      header("location:".SITE_URL."change-password.php");
     exit;
    }
  }else{
    $_SESSION['err_msg']='Both password are not same!';
     header("location:".SITE_URL."change-password.php");
     exit;
  }
 
}

?>
