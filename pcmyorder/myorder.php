<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Payment</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/test2.css">
	
</head>
<body>
	<div id="warp">
 
          <!-- main -->
		<div class="main cf">
			<div class="main-top cf">
				<h3>Credit Card Payment</h3>
				<div class="language">
				<div class="langrage-sel" style="float: left;">
				  <label id="LBLLanguage" >Language:</label>
				  <select id="Select2" onclick="i18n(this.value)">
				    <option value="en-US">English</option>
				      <option value="it-IT">Italia</option>
				      <option value="de-de">Deutsch</option>
				      <option value="ja-ja">日本語</option>
				      <option value="fa-fa">langue française</option>
				      <option value="es-es">España</option>
				      <option value="ru-md">русский</option>
				      <option value="da-da">Danmark</option>
				      <option value="no-no">Norge</option>
				      <option value="nl-nl">Nederland</option>
				      <option value="sv-sv">Sverige</option>
				      <option value="pl-pl">Polska</option>
				      <option value="tr-tr">Turkish</option>
				    <option value="he-he">עברית</option>
				  </select>		
				</div>
				  
				  <img src="./images/en.gif"  alt="English" id="image">
				</div>
			</div>
			<div class="main-num cf">
				<p><label id="lblOrderID_LBL">OrderID :</label><span id="LBLTextMOrderID" ><?php echo $_POST['OrderID'];?></span></p>
				<p><label id="lblAmt_LBL" class="Label1">Currency :</label><span id="lblAmount"><?php include_once("code.php"); echo $CurrCode;?></span></p>
				<p>Amount :<span><?php echo $_POST['Amount']/100;?></span></p>
			</div>
		<form action="../myorderpayment.php" method = "post" id="form">
			<div class="main-form cf">
				<ul class="cf">
				 	<li class="firt-li">
				 		<div class="left">
				 			<p><label id="lblCardType">Card Type :</label></p>
				 		</div>
				 		<div class="right">
							<img src="images/master.png" alt="">
					 		<img src="images/visa.jpg" alt="">
							<img src="images/jcb.jpg" alt="" class="jcbPic">		
				 		</div>
 				 	</li>
				 	<li>
				 		<div class="left">
				 			<span>*</span>
							<label id="lblCardNo_LBL" >Card Number :</label>
				 		</div>
				 		<div class="right">
				 			<input type="text"   maxlength="23" id="card" name="CardPAN">
				 		</div>
  				 	</li>
				 	<li>
				 		<div class="left">
				 			<span>*</span>
				 			<label for="" id="lblExpDate_LBL">Expiry Date : </label>
				 		</div>
				 		<div class="right">
					 		<select name="ExpMonth" id="ddlMonth">
					 		</select>
							  <em>/</em>
					 		<select name="ExpYear" id="ddlYear">
	 				 		</select>
	 				 		<input id="Hidden1" name="ExpDate" type="hidden">	
				 		</div>
 				 	</li>
				 	<li class="last-li">
				 		<div class="left">
				 			<span>*</span>
				 			<label id="lblCVV_LBL">CVC/CVV2 :</label>
				 		</div>
				 		<div class="right">
				 			<input type="text" id="cvc"  maxlength="4" name="CVV2">
 				 			<img src="images/card.png" alt="" class="last-pic">
				 		</div>
				 		
 				 	</li>
				 	<li>
				 		<input type="submit" value="Submit" id="Submit" onclick="return check(this.form)">
				 	</li>
				 </ul> 
  			</div>
		</div>
		<input type="hidden" name="Cookie" value="<?php echo $_COOKIE['PHPSESSID'];?>">
	    <input type="hidden" value="01" name="TxnType">
	    <input type="hidden" value="V5.0" name="IVersion">
	    <input type="hidden" value="<?php echo $_POST['CMSName'];?>" name="CMSName">
	    <input type="hidden" value="<?php echo $_POST['AcctNo'];?>" name="AcctNo">
	    <input type="hidden" value="<?php echo $_POST['OrderID'];?>" name="OrderID">
        <input type="hidden" value="<?php echo $_POST['CurrCode'];?>" name="CurrCode">
	    <input type="hidden" value="<?php echo $_POST['Amount'];?>" name="Amount">
	    <input type="hidden" value="<?php echo $_POST['IPAddress'];?>" name="IPAddress">
	    <input type="hidden" value="<?php echo $_POST['HashValue'];?>" name="HashValue">
	    <input type="hidden" value="<?php echo $_SERVER['HTTP_HOST'];?>" name="RetURL">
	    <input type="hidden" value="<?php echo $_POST['BAddress'];?>" name="BAddress"/>
	    <input type="hidden" value="<?php echo $_POST['Email'];?>" name="Email"/>
	    <input type="hidden" value="<?php echo $_POST['BCity'];?>" name="BCity"/>
   		<input type="hidden" value="<?php echo $_POST['PostCode'];?>" name="PostCode"/>
    	<input type="hidden" value="<?php echo $_POST['Telephone'];?>" name="Telephone">
	    <input type="hidden" value="<?php echo $_POST['BCountry'];?>" name="Bcountry">
	    <input type="hidden" value="<?php echo $_POST['BState'];?>" name="Bstate">
	    <input type="hidden" value="<?php echo $_POST['CName'];?>" name="CName">
	    <input type="hidden" value="<?php echo $_POST['PName'];?>" name="PName">
	</form>    
		<div class="footer cf">
			<ul>
				<li>
					<img src="images/wpay1_03.png" alt="">
				</li>
				<li>
					<img src="images/wpay1_05.png" alt="">
				</li>
				<li>
					<img src="images/wpay1_07.png" alt="">
				</li>
				<li>
					<img src="images/wpay1_09.png" alt="">
				</li>
			</ul>
   		</div>
	</div>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/test2.js"></script> 	
<script src="js/Language.js"></script>
 
</body>
<script type="text/javascript">
    var select = $("#ddlMonth"),
    month = new Date().getMonth() + 1;
    for (var i = 1; i <= 12; i++) {
        if(i == month){
          select.append($("<option value='" + i + "' selected>" + i + "</option>"));
        }else{
          select.append($("<option value='" + i + "'>" + i + "</option>"));
        }
    }

    var select = $("#ddlYear"),
  	year = new Date().getFullYear();

    for (var i = 0; i < 12; i++) {
      if(i == 0){
        select.append($("<option value='" + (i + year) + "' selected>" + (i + year) + "</option>"));
      }else{
        select.append($("<option value='" + (i + year) + "'>" + (i + year) + "</option>"));
      }
    }

    function pad(number, length) {

	    var str = '' + number;
	    while (str.length < length) {
	        str = '0' + str;
	    }

	    return str;
	}

    function check(form) {
        if(form.CardPAN.value==''){
        	// alert("Please enter Credit Card Number");
        	document.getElementById('card').style.border="1px solid red";
			form.CardPAN.focus();
			return false;
        }else if(!(form.CardPAN.value.length >= 16 && form.CardPAN.value.length <= 19)){
        	// alert("Invalid Length");
			form.CardPAN.focus();
			return false;
        }
		
		if(form.CVV2.value==''){
			//alert("Please enter CVV");
			form.CVV2.focus();
			return false;
		}

		var x = $('#ddlYear').val().substring(2, 4) + pad($('#ddlMonth').val(), 2);
        $('#Hidden1').val(x);
		return true;
	}  

</script>
</html>