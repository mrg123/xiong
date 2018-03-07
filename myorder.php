<?php
  $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$uachar = "/(nokia|sony|ericsson|mot|samsung|sgh|lg|philips|panasonic|alcatel|lenovo|cldc|midp|mobile)/i";
if(($ua == '' || preg_match($uachar, $ua))&& !strpos(strtolower($_SERVER['REQUEST_URI']),'wap'))
{
$IVersion="./mobilemyorder/myorder.php";
}else{
    $IVersion="./pcmyorder/myorder.php";
}
//session_start();
//$_SESSION['myorder']=$_POST;
?>
<html>
 <head>
 <meta http-equiv="content-type" content="text/html" charset="utf-8" />
   <title></title>
  <style>
  body{margin:0px;}*{margin:0px;padding:0px;}html,body{width:100%; height:100%;overflow:hidden;}
            iframe{
                width:100%;
                height:100%;
                border:none;
            }
        </style>
    </head>
<body style="margin:0;padding:0;">
<form action="<?php echo $IVersion;?>" id="MyOrder_payment_checkout" method="POST">
<input name="TxnType" value="<?php echo $_POST['TxnType'];?>" type="hidden"/>
<input name="CMSName" value="opencart" type="hidden"/>
<input name="AcctNo" value="<?php echo $_POST['AcctNo'];?>" type="hidden"/>
<input name="OrderID" value="<?php echo $_POST['OrderID'];?>" type="hidden"/>
<input name="Amount" value="<?php echo $_POST['Amount'];?>" type="hidden"/>
<input name="IPAddress" value="<?php echo $_POST['IPAddress'];?>" type="hidden"/>
<input name="Email" value="<?php echo $_POST['Email'];?>" type="hidden"/>
<input name="Url" value="<?php echo $_POST['Url'];?>" type="hidden"/>
<input name="CurrCode" value="<?php echo $_POST['CurrCode'];?>" type="hidden"/>
<input name="HashValue" value="<?php echo $_POST['HashValue'];?>" type="hidden"/>

<input name="BAddress" value="<?php echo $_POST['BAddress'];?>" type="hidden"/>
<input name="PostCode" value="<?php echo $_POST['PostCode'];?>" type="hidden"/>
<input name="BCity" value="<?php echo $_POST['BCity'];?>" type="hidden"/>
<input name="Telephone" value="<?php echo $_POST['Telephone'];?>" type="hidden"/>
<input name="CName" value="<?php echo $_POST['CName'];?>" type="hidden"/>
<input name="BState" value="<?php echo $_POST['Bstate'];?>" type="hidden"/>
<input name="BCountry" value="<?php echo $_POST['Bcountry'];?>" type="hidden"/>

<input name="ShipName" value="<?php echo $_POST['ShipName'];?>" type="hidden"/>
<input name="ShipAddress" value="<?php echo $_POST['ShipAddress'];?>" type="hidden"/>
<input name="ShipCity" value="<?php echo $_POST['ShipCity'];?>" type="hidden"/>
<input name="Shipstate" value="<?php echo $_POST['Shipstate'];?>" type="hidden"/>
<input name="ShipPostCode" value="<?php echo $_POST['ShipPostCode'];?>" type="hidden"/>
<input name="Shipphone" value="<?php echo $_POST['Shipphone'];?>" type="hidden"/>
<input name="ShipCountry" value="<?php echo $_POST['ShipCountry'];?>" type="hidden"/>


<input name="PName" value="<?php echo $_POST['PName'];?>" type="hidden"/>
</form>
        <script type="text/javascript">
            document.getElementById("MyOrder_payment_checkout").submit();
</script>
    </body>
</html>