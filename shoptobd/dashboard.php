<!DOCTYPE html> 
<html> 
<head> 
<title>ShoptoBD Order Management </title> 
<meta content="width=device-width, initial-scale=1.0" name="viewport" > 
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /> 

<link rel="stylesheet" href="css/style.css" type="text/css" /> 

<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" /> 


<script type="text/javascript"> 
function popup(mylink, windowname) { if (! window.focus)return true; 
var href; if (typeof(mylink) == 'string') 
href=mylink; 
else href=mylink.href; 
window.open(href, windowname, 'width=900,height=700,scrollbars=yes'); 
return false; } 
</script> 


</head> 
<body> 

<nav class="navbar navbar-default" role="navigation"> 
<div class="container-fluid"> 
<div class="navbar-header"> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1"> 
<span class="sr-only">Toggle navigation</span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
</button> 
<a class="navbar-brand" href="dashboard.php">ShoptoBD Order Management </a> 

</div> 


<div class="collapse navbar-collapse" id="navbar1"> 
<ul class="nav navbar-nav navbar-right"> 
<li><p class="navbar-text">Signed in as Emon roy</p></li> 
<li><a href="logout.php">Log Out</a></li> 

</ul> 
</div> 



</div> 
</nav> 
<div class='main'> 
<div class="row"> 

<div class="col-md-3" style=" margin-left: 20px;text-align:center;"> 
<div class="sidebar-wrapper"> 
<div class="profile-container"> 
<div style="min-height:180px;min-width:140px;background-image:url(images/user_profile.png);background-repeat: no-repeat;background-position:center;"> 
<img class="profile" src= "" style="min-width:0px;" > 
</div> 
<h1 class="name">Emon roy</h1> 
<h3 class="tagline">STB170363</h3> 
</div><!--//profile-container--> 

<div class="contact-container container-block"> 
<ul class="list-unstyled contact-list"> 
<li class="email"><i class="fa fa-envelope"></i> <a href="mailto: emon.roy@northsouth.edu"><h4>emon.roy@northsouth.edu</h4></a></li> 

<li class="phone"><i class="fa fa-phone"></i> <a href="tel:01992785647"><h4>01992785647</h4></a></li> 


<li class="facebook"><i class="fa fa-facebook"></i> <a style="word-wrap: break-word;" href="facebook.com/emon.roy" target="_blank">facebook.com/emon.roy</a></li> 

</ul> 
</div><!--//contact-container--> 
<div class="education-container container-block"> 
<h2 class="container-block-title">Address</h2> 
<div class="item"> 
<h4 class="degree">Gopibagh Dhaka 1203</h4> 

</div> 
<!--//item--> 
<div> 
<a href="edit_profile.php" class="btn" style="background-color: white;color: #147ad2;font-weight: 600;">Edit Profile</a> 

</div> 
<!--//item--> 
</div><!--//education-container--> 

</div> 








<!---------------------------------- --> 


</div> 

<div class="panel-default order-form panel container col-md-8 well" style="margin-left: 20px;"> 


<div class="content-loader" style=" 
text-align:center;"> 
<span class="text-success">Important Announcement </span></br> 
<span class="text-danger"><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><h3 style="text-align: left;"><font color="#ff0000"><span style="font-size: 14px;"><b><u>Notice (Nov 17):</u></b></span></font></h3><h3 style="text-align: left;"><font color="#ff0000"><span style="font-size: 14px;"><b>Hello Everyone! We are starting our new order cycle for Nov 2018. This will be our BLACK FRIDAY Order Cycle! Expected Shipment Time for this cycle is 5 Weeks Minimum (Last week of December 2018).</b></span></font></h3><h3 style="text-align: left;"><font color="#ff0000"><span style="font-size: 14px;"><b>Shipment for our Last cycle (Oct_Nov ) is expected to arrive before end of November!</b></span></font></h3><h3 style="text-align: left;"><font color="#ff0000"><span style="font-size: 14px;"><b><u><br></u></b></span></font></h3><h3 style="text-align: left;"><b style="font-size: 14px; color: rgb(255, 0, 0);">--------------------------------------------------------------------------------------------</b></h3><h3 style="font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0);"><b><font color="#ff0000">PLEASE TRY TO USE GOOGLE CHROME FROM PC/LAPTOP WHEN USING THE PORTAL &amp; ALLOW POP-UPS. NOT ALWAYS COMPATIBLE WITH MOBILE.</font></b></h3><p style="text-align: left;"><br></p><ul>
</ul><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p> </span> 
<!-- <h4 class="form-signin-heading">Please select a shipping Cycle to start order process.</h4><hr /> 
--> 
<div class=""> 

<div class="panel panel-primary"> 
<div class="panel-heading"> 
<h3 class="panel-title">Place an Order</h3> 
</div> 
<div class="panel-body"> 

<form role="form" action="order_products_ui.php" method="post" name="order"> 

<fieldset> 
<legend>Would you like to place an order now? </legend> 
<div class="form-group"> 
<label>Active Order Cycles</label> 
<select name="shipmentid" id="shipmentid" onchange="document.getElementById('text_content').value=this.options[this.selectedIndex].text;document.getElementById('cycle_value').value=this.options[this.selectedIndex].value;"> 
<option value="0">Select Cycle</option> 
<option value="17">Canada Order Cycle - Nov_Dec("CAD")</option> </select> 
<input type="hidden" name="userid" id="userid" value=363 /> 

<input type="hidden" name="shipmentid" id="cycle_value" value="" /> 
<input type="hidden" name="shipping_cname" id="text_content" value="" /> 
<input type="hidden" name="status" id="status" value="0" /> 

<div class="form-group"> 
<input type="submit" class="btn btn-info" id="btn-order" name="" value="Place Order"/> 
</div> 
</div> 


</fieldset> 
</form> 
</div> 
</div> 
</div> 

<!-- Oerders Panel --> 
<div class=""> 

<!-- Old Order Section 
--> 

<!-- SELECT o.ID as id, o.user_id as userid, o.ShipmentID as shipmentid, c.full_name as full_name, c.fb_url as fb_url, c.mobile as mobile from orders o, customers c Where o.user_id=c.customerid --> 

<div class="panel panel-primary"> 
<div class="panel-heading"> 
<h3 class="panel-title">Previous Orders</h3> 
</div> 
<div class="panel-body"> 
<table class="table table-bordered table-striped"> 
<tbody><tr> 
<th style="text-align:center;">Order ID</th> 
<th style="text-align:center;">Status</th> 
<th style="text-align:center;">Order Cycle</th> 
<th style="text-align:center;">Invoice ID</th> 
<th style="width:250px;text-align:center;">Invoice Type</th> 
<th style="text-align:center;">View Invoices</th> 
</tr><tr></tr> 
</tbody> 
</tbody> 
</table> 

</div> 
</div> 
</div> 
<!-- Oerders Panel Ends --> 
<!-- Invoices Panel starts--> 

<!--<div class=""> 

<div class="panel panel-primary"> 
<div class="panel-heading"> 
<h3 class="panel-title">Invoices</h3> 
</div> 
<div class="panel-body"> 
<div class="records_content"></div> 

</div> 
</div> 
</div>--> 
<!-- Invoices Panel Ends--> 

<!-- Payments Panel --> 

<div class=""> 


</div> 
<!-- Payments Panel Ends--> 

<span class="text-success">Payment & Delivery Options </span></br> 
<span class="text-danger"><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><h3 style="text-align: left;"></h3>
<h3 style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif;"><p style="color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;"><strong>Welcome to Shoptobd Order Management Portal! This Portal Can be used to:</strong></p><ul style="color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;"><li style="text-align: left;">Place Orders</li><li style="text-align: left;">Check Invoices (Initial &amp; Final)</li><li style="text-align: left;">Track Shipments</li><li style="text-align: left;">Check Order History</li></ul><p style="text-align: left;"><br></p></h3><table class="table table-bordered mce-item-table alignleft" width="723" data-mce-style="height: 62px;" style="border-style: dashed; border-color: rgb(187, 187, 187); float: left; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; height: 62px;"><tbody><tr><td style="font-family: inherit; font-size: inherit; border-style: dashed; border-color: rgb(187, 187, 187);"><h4 data-mce-style="text-align: left;"><span lang="EN-CA" data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Weight Charge to BD:</span></h4></td></tr><tr><td style="font-family: inherit; font-size: inherit; border-style: dashed; border-color: rgb(187, 187, 187);"><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">For &lt; 100g = 150 Taka Flat,&nbsp;</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">For 100g - 2Kg = 160TK/100g,&nbsp;</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">For &gt; 2kg = 1700TK/Kg&nbsp;</span></p></td></tr></tbody></table><h3 data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif;"></h3><h3 data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif;"><br data-mce-bogus="1"></h3><h3 data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif;"><br data-mce-bogus="1"></h3><h3 data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif;"><br data-mce-bogus="1"></h3><h3 data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif;"><br data-mce-bogus="1"></h3><h3 data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif;"><br data-mce-bogus="1"></h3><p style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><strong style="color: rgb(0, 0, 0);">Payment for your order can be made to us through the following methods:</strong></p><table width="749" data-mce-style="height: 64px;" class="mce-item-table" style="border: 1px dashed rgb(187, 187, 187); color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; height: 64px;"><tbody><tr><td width="312" style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);"><strong>Bank Deposit:&nbsp;</strong></span></p></td></tr></tbody></table><table width="749" data-mce-style="height: 64px;" class="mce-item-table" style="border: 1px dashed rgb(187, 187, 187); color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; height: 64px;"><tbody><tr><td width="312" style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);"><b><br></b></span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);"><b>City Bank Ltd</b></span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Account Name – Shoptobd</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">A/C Number -&nbsp; 1401824677001</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Account Type – Current</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Branch - Gulshan Avenue</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">**You can EFT (Electronic Funds Transfer) to our City Bank Account**&nbsp;</span></p></td><td width="312" style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);"><b>Mercantile Bank Ltd</b></span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Account Name – Shoptobd</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">A/C Number -&nbsp; 118611116252221&nbsp;</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Account Type – Current</span></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Branch - International Airport Road</span></p></td></tr></tbody></table><p data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><br></p><p data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><br></p><p data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"></p><p data-mce-style="text-align: left;"></p><p data-mce-style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);"><strong></strong></span></p><p></p><table class="table table-bordered mce-item-table" width="611" data-mce-style="height: 62px;" style="border: 1px dashed rgb(187, 187, 187); color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; height: 62px;"><tbody><tr><td style="text-align: center; font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><strong style="color: rgb(0, 0, 0);">bKash Pay:</strong></td></tr><tr><td style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><p><strong style="color: rgb(0, 0, 0);">Number – 01848304698 (Merchant)</strong></p><p><span style="color: rgb(0, 0, 0);"><strong style="font-weight: bold !important;">To Pay:</strong></span></p><p><span style="color: rgb(0, 0, 0);">- Dial bKash from a Personal Account (bKash AGENT ACCOUNT WILL NOT WORK)</span></p><p><span style="color: rgb(0, 0, 0);">- Select ‘Payment’ Option (#3) from Menu</span></p><p><span style="color: rgb(0, 0, 0);">- Enter anyone of our Merchant Number</span></p><p><span style="color: rgb(0, 0, 0);">- Enter Amount (with 2% fee)</span></p><p><span style="color: rgb(0, 0, 0);">- Enter Reference (First 5 Digit of&nbsp; Your Invoice Number)</span></p><p><span style="color: rgb(0, 0, 0);">- Enter Counter No (Type 1)</span></p><p><span style="color: rgb(0, 0, 0);">- PIN to Confirm</span></p><p>Or</p><p>Use your bKash App to Pay:</p><p>- Open your bKash App</p><p><span style="color: rgb(0, 0, 0);">- Enter Amount (with 2% fee)</span></p><p>- Tap on Make Payment</p><p><span style="color: rgb(0, 0, 0);">- Enter Reference (First 5 Digit of&nbsp; Your Invoice Number)</span></p><p><span style="color: rgb(0, 0, 0);">- Enter Pin</span></p><p><span style="color: rgb(0, 0, 0);">- Tap &amp; Hold to Make the Payment</span></p><p><span style="color: rgb(0, 0, 0);"><br></span></p><p><span style="color: rgb(0, 0, 0);">Please don’t forget to add 2% extra to your amount as bKash service fee.</span></p></td></tr></tbody></table><p data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"></p><p data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: left;"></p><p data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);"><strong style="font-weight: bold !important;"></strong></span></p><p></p><table class="table table-bordered mce-item-table" width="611" data-mce-style="height: 62px;" style="border: 1px dashed rgb(187, 187, 187); color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; height: 62px;"><tbody><tr><td style="text-align: center; font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><strong style="font-weight: bold !important;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Cash or Card Payment:</span></strong></td></tr><tr><td style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><p data-mce-style="text-align: left;" style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Office Address: Apt-5B, House-37, Road-6, Block-D, Niketon, Gulshan-1</span></p><p data-mce-style="text-align: left;" style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">Time: 12-7pm (Weekdays, Except Friday)</span></p><p data-mce-style="text-align: left;" style="text-align: left;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);">We accept all Major Cards. Additional Charges are Applicable.</span></p></td></tr></tbody></table>
<h3 style="text-align: left;"><p style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><strong style="color: rgb(0, 0, 0);">Proof of Payment:</strong></p></h3><h3 style="text-align: left;"><p style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><span style="color: rgb(0, 0, 0);">Please send us proof of the payment receipt or the last 3-digit of the number bKash was done, in order to verify the payment (not needed for Cash Payment). You can email that to us (info@shoptobd.com) or Inbox it to us in our FB Page: m.me/shoptobd</span></p><p style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><span style="color: rgb(0, 0, 0);">----------------------------------------------------&nbsp; &nbsp;</span></p><p style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><span style="color: rgb(0, 0, 0);"><br></span></p></h3><h4 data-mce-style="text-align: left;" style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><span data-mce-style="color: #000000;" style="color: rgb(0, 0, 0);"><strong>Please Read For Delivery Options:</strong></span></h4><h3 style="text-align: left;"></h3><p style="text-align: left;"></p><p style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: left;"></p><p></p><table class="table table-bordered mce-item-table" width="787" style="border: 1px dashed rgb(187, 187, 187); color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; height: 62px;"><tbody><tr><td style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><p style="text-align: left;"><span style="color: rgb(0, 0, 0);"><strong style="font-weight: bold !important;">For Delivery inside Dhaka</strong></span></p></td><td style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><span style="color: rgb(0, 0, 0);"><strong style="font-weight: bold !important;">For Delivery outside Dhaka</strong></span></td></tr><tr><td style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><p><span style="color: rgb(0, 0, 0);">Courier company ShopUp will be used &amp; the following&nbsp;</span><span style="color: rgb(0, 0, 0); font-family: inherit; font-size: inherit; background-color: transparent;">Charges will be applicable:</span></p><p><span style="color: rgb(0, 0, 0);">- For Products weighing less than 1 kg = TK 75.00</span></p><p><span style="color: rgb(0, 0, 0);">- For Products weighing 1-2 kg = TK 100.00</span></p><p><span style="color: rgb(0, 0, 0);">- For Products weighing more than 2 kg &amp; For </span></p><p><span style="color: rgb(0, 0, 0);">Fragile/Large Dimensional Products = Pick-up from our office Only</span></p><p><span style="color: rgb(0, 0, 0);">- 1% additional Cash Handling Fee is applicable for Cash-on-Delivery</span></p></td><td style="font-family: inherit; font-size: inherit; border: 1px dashed rgb(187, 187, 187);"><p><span style="color: rgb(0, 0, 0);">Inter-city courier services (Sundarban or S.A. Paribahan) will be used:</span></p><p><span style="color: rgb(0, 0, 0);">- Charges will be in between TK 100-300, depending on the location &amp; weight of the products</span></p><p><span style="color: rgb(0, 0, 0);">- Full due will have to be cleared before products are to be sent</span></p></td></tr></tbody></table>
<p style="text-align: left;"><br></p><p style="color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, &quot;Bitstream Charter&quot;, Times, serif; font-size: 16px;"><br></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p> </span> 
</div> 
</div> 
<!-- <button class="btn btn-info" type="button" id="btn-order"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Place Order</button> 
<button class="btn btn-info" type="button" id="btn-product"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Back</button> --> 

</div> <!-- Main Ends --> 

<script type="text/javascript"> 
// 
</script> 

<script src="js/jquery-1.10.2.js"></script> 

<script src="js/bootstrap.min.js"></script> 

<script type="text/javascript"> 
$(document).ready(function(){ 

$("#btn-product").hide(); 

$("#btn-order").click(function(){ 
$(".content-loader").fadeOut('slow', function() 
{ 
$(".content-loader").fadeIn('slow'); 
$(".content-loader").load('add_products.php'); 
$("#btn-order").hide(); 
$("#btn-product").show(); 
}); 
}); 

$("#btn-product").click(function(){ 

$("body").fadeOut('slow', function() 
{ 
$("body").load('testo.php'); 
$("body").fadeIn('slow'); 
window.location.href="dashboard.php"; 
}); 
}); 

}); 


</script> 

<script type="text/javascript" src="assets/datatables.min.js"></script> 

<script type="text/javascript" src="crud.js"></script> 

<script type="text/javascript" src="js/script.js"></script> 


<script type="text/javascript" charset="utf-8"> 
$(document).ready(function() { 
$('#example').DataTable(); 

$('#example') 
.removeClass( 'display' ) 
.addClass('table table-bordered'); 
}); 
</script> 
</body> 
</html> 
