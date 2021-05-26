<?php
session_start(); 
if ($_SERVER["REQUEST_METHOD"] <> "POST") 
 die("You can only reach this page by posting from the html form");
if(isset($_POST['submit']))
{
  if ( ($_POST["captchakey"] == $_SESSION["key"]) && 
    (!empty($_POST["captchakey"]) && !empty($_SESSION["key"])) ) {
$name = $_POST['firstname'];
$phone=$_POST['phone'];
$comment = $_POST['message'];
$organisation=$_POST['organisation'];
$email=$_POST['email'];
$servername = "localhost";
$username = "shiviti_billling";
$password = "xyz";
$database = "shiviti_billing";
// Create connection
mysql_connect($servername,$username,$password);

// Check connection
mysql_select_db($database) or die( "Unable to select database");
$query= mysql_query("insert into shivit_enquiry (`name`, `email`, `phone`,`organization`, `Message`) VALUES ('".$_POST['firstname']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['organisation']."', '".$_POST['message']."')"); 
    // ends Data Base 
$subject = "Enquiry-Request For Information : ".$firstname;
$to = "info@shivit.com";
$msg ='<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Request Quote</title>
<style type="text/css">
<!--

.sub_heading {
	
}
.left_font {
	
}
.right_font {
	
}
-->
</style>
</head>

<body>
<table width="600" border="1" align="center" cellpadding="2" cellspacing="6" bordercolor="#CCCCCC" bgcolor="#FAFAFA">
  <tr>
    <td colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 18px;font-weight: bold;color: #003399;">Shivit Technologies Request information Details </td>
  </tr>
  <tr>
    <td colspan="2"><span style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 14px;font-weight: bold;color: #330033;">Personal Details</span></td>
  </tr>
  <tr>
    <td width="274" style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #FF0000;"><span class="cont">Full Name:</span></td>
    <td width="294" style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #336699;">'.$_POST['firstname'].'</td>
  </tr>
  <tr>
    <td style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #FF0000;"><span class="cont">Phone Number:</span></td>
    <td style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #336699;">'.$_POST['phone'].'</td>
  </tr>
   
   <tr>
    <td style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #FF0000;"><span class="cont">Email Address: </span></td>
    <td style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #336699;">'.$email.'</td>
  </tr>
  
    <tr>
    <td style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #FF0000;"><span class="cont">Organization Name:</span></td>
    <td style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #336699;">'.$organisation.'</td>
  </tr>
  <tr>
   <td style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #FF0000;"><span class="cont">Comments:</span></td>
    <td style="font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: bold;color: #336699;">'.$_POST['message'].'</td>
  </tr>
 
</table>
</body>
</html>';
$msg1 ='<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanks for Contacting Us</title>
</head>
<body link="#336699" alink="#336699" vlink="#336699" style="margin: 0px; background-color: #f4f4f4 !important; color: #555; font-family: &#39;Open Sans&#39;,arial, sans-serif;">
<table align="center" style="max-width:600px; padding-top:13px;margin-bottom:15px;color:#333333;sans-serif;font-size:12px;">
<tr>
<td>	
		<div style="width: 600px; border: 1px solid #ccc;color:#333333;font-size:12px;">

			<div style="background-color: #f4efef; min-height: 70px;">
				<div style="float: left;">
					<a href="http://www.shivit.com?_r=email|providerApproveIndividual|||"
						target="_blank" style="text-decoration: none;"><img
						src="http://www.shivit.com/images/logo.png" height="55px" width="294px"
						alt="shivit.com" style="padding:7px;height: 55px; width:294px;" /></a>
				</div>
				<div style="float: right; color: #777; margin-right: 30px; margin-bottom: 10px;">
					<p>Follow Us On<br />
					<a  href="https://www.facebook.com/shivittechnologies" style="text-decoration: none;"><img src="http://www.thinkvidya.com/images/new-ui/facebook.png" style="padding-right: 5px;"/></a> 
					<a  href="https://twitter.com/shivittech" style="text-decoration: none;"><img src="http://www.thinkvidya.com/images/new-ui/twitter.png" style="padding-right: 5px;"/></a>
					<a  href="https://plus.google.com/u/0/113984991640330030605/posts" style="style"><img src="http://www.thinkvidya.com/images/new-ui/google+.png" /></a>
					
					</p>
				</div>
			</div>
	<div  style="padding: 10px; background-color: #FFF; padding-bottom: 30px;" >	
<p><hr />
Dear '.$_POST['firstname'].',
</p>
<p style="margin:10px 0 0 0">
Thank you for contacting Shivit. We appreciate your recent enquiry for the Shivit software services.We will respond to your Enquiry soon.
We value your trust in our company, and we will do our best to meet your service expectations. 
Our experts will help you to increase the productivity of your staff and business.
</p>

<p style="margin:10px 0 0 0">
<b>Kind regards,</b></p>
<p>Team Shivit Technologies <br>
      Mobile: +91-7503935107<br>
  Telephone : 0120-4572107<br>
       skype: shivittechnologies<br>
    Whatsapp: +91-7503935107 <br>
</p>
</div>

		</div>
	</td>
</tr>
<tr>
<td>
<div style="min-height: 20px; background:#CCC">
<b><center><a href="www.shivit.com/ERP-System.html">ERP </a>| <a href="www.shivit.com/CRM-Software.html">CRM</a> | <a href="www.shivit.com/Field-Sales-Automation-System.html">Field Sales Force Automation</a> | <a href="www.shivit.com/inventoryManagement.html">Inventory Software</a>| <a href="http://www.shivit.com/softwareDevelopment.html">Software Development</a></center></b>
</div>
</td>
</tr>
</table>
</body>
</html>
';
$ttt=$_POST['email'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$subject1 = "Thank You for Contacting Shivit Technologies" . "\r\n" ;
$headers .= 'From: <www.shivit.com>' . "\r\n";
//echo $headers;
mail($to,$subject,$msg,$headers);
mail($ttt,$subject1,$msg1,$headers);?>
<script type="text/javascript">
//alert("Thanyou for sending message...");
window.location="Thanks.html";</script>
<?php
}
else{
   echo "<script>
             alert('wrong captcha'); 
             window.history.go(-1);
     </script>";
  }
//header("Location:index.html");

} ?>
form.php
Displaying form.php.
