
<html xmlns="http://www.w3.org/1999/xhtml">
<head onLoad=" lod();">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />

    <title>MyOrder</title>
    <link rel="stylesheet" type="text/css" href="./css/jquery-ui.css" />
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script src="./js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="./js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="./js/Language.js" type="text/javascript"></script>
    <script src="./js/FormVerificatioIndex.js" type="text/javascript"></script>
    <style type="text/css">
        body
        {
            font: 75% "Trebuchet MS" , sans-serif;
            margin: 5px;
        }
        .demoHeaders
        {
            margin-top: 2em;
        }
        #dialog-link
        {
            padding: .4em 1em .4em 20px;
            text-decoration: none;
            position: relative;
        }
        #dialog-link span.ui-icon
        {
            margin: 0 5px 0 0;
            position: absolute;
            left: .2em;
            top: 50%;
            margin-top: -8px;
        }
        #icons
        {
            margin: 0;
            padding: 0;
        }
        #icons li
        {
            margin: 2px;
            position: relative;
            padding: 4px 0;
            cursor: pointer;
            float: left;
            list-style: none;
        }
        #icons span.ui-icon
        {
            float: left;
            margin: 0 4px;
        }
        .fakewindowcontain .ui-widget-overlay
        {
            position: absolute;
        }
        
        #top_left
        {
            width: 40%;
            height: 40px;
            margin: 5px auto;
            padding: 5px;
            border: 1px solid #777;
            background-color: #fbca93;
            text-align: left;
        }
        #top_right
        {
            width: 60%;
            height: 40px;
            margin: 5px auto;
            padding: 5px;
            border: 1px solid #777;
            background-color: #fbca93;
            text-align: left;
        }
        #pay_header
        {
            font: "Trebuchet MS" , sans-serif;
            font-size: 1em;
            font-weight: bold;
            margin: 0px auto;
            padding: 0px;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body onLoad="lod();">
      <?php
                if ($_POST["CurrCode"] == '020')
    {
    $CurrCode = 'ADP';
    }
    else if($_POST["CurrCode"] == '784')
    {
    $CurrCode = 'AED';
    } 
    else if($_POST["CurrCode"] == '004')
    {
    $CurrCode = 'AFA';
    } 
    else if($_POST["CurrCode"] == '008')
    {
    $CurrCode = 'ALL';
    } 
    else if($_POST["CurrCode"] == '051')
    {
    $CurrCode = 'AMD';
    } 
    else if($_POST["CurrCode"] == '532')
    {
    $CurrCode = 'ANG';
    } else if($_POST["CurrCode"] == '973')
    {
    $CurrCode = 'AOA';
    } 
    else if($_POST["CurrCode"] == '024')
    {
    $CurrCode = 'AON';
    } 
    else if($_POST["CurrCode"] == '032')
    {
    $CurrCode = 'ARS';
    } 
    else if($_POST["CurrCode"] == '999')
    {
    $CurrCode = 'ASF';
    } 
    else if($_POST["CurrCode"] == '040')
    {
    $CurrCode = 'ATS';
    } 
    else if($_POST["CurrCode"] == '036')
    {
    $CurrCode = 'AUD';
    } 
    else if($_POST["CurrCode"] == '533')
    {
    $CurrCode = 'AWG';
    } 
    else if($_POST["CurrCode"] == '031')
    {
    $CurrCode = 'AZM';
    } 
    else if($_POST["CurrCode"] == '977')
    {
    $CurrCode = 'BAM';
    } 
    else if($_POST["CurrCode"] == '052')
    {
    $CurrCode = 'BBD';
    } 
    else if($_POST["CurrCode"] == '050')
    {
    $CurrCode = 'BDT';
    } 
    else if($_POST["CurrCode"] == '056')
    {
    $CurrCode = 'BEF';
    } 
    else if($_POST["CurrCode"] == '100')
    {
    $CurrCode = 'BGL';
    } 
    else if($_POST["CurrCode"] == '975')
    {
    $CurrCode = 'BGN';
    } 
    else if($_POST["CurrCode"] == '048')
    {
    $CurrCode = 'BHD';
    } 
    else if($_POST["CurrCode"] == '108')
    {
    $CurrCode = 'BIF';
    } 
    else if($_POST["CurrCode"] == '060')
    {
    $CurrCode = 'BMD';
    } 
    else if($_POST["CurrCode"] == '096')
    {
    $CurrCode = 'BND';
    } 
    else if($_POST["CurrCode"] == '068')
    {
    $CurrCode = 'BOB';
    } 
    else if($_POST["CurrCode"] == '984')
    {
    $CurrCode = 'BOV';
    } else if($_POST["CurrCode"] == '986')
    {
    $CurrCode = 'BRL';
    } 
    else if($_POST["CurrCode"] == '044')
    {
    $CurrCode = 'BSD';
    } 
    else if($_POST["CurrCode"] == '064')
    {
    $CurrCode = 'BTN';
    } 
    else if($_POST["CurrCode"] == '072')
    {
    $CurrCode = 'BWP';
    } else if($_POST["CurrCode"] == '112')
    {
    $CurrCode = 'BYB';
    } else if($_POST["CurrCode"] == '974')
    {
    $CurrCode = 'BYR';
    } 
    else if($_POST["CurrCode"] == '084')
    {
    $CurrCode = 'BZD';
    } 
    else if($_POST["CurrCode"] == '124')
    {
    $CurrCode = 'CAD';
    } 
    else if($_POST["CurrCode"] == '976')
    {
    $CurrCode = 'CDF';
    } 
    else if($_POST["CurrCode"] == '756')
    {
    $CurrCode = 'CHF';
    } 
    else if($_POST["CurrCode"] == '990')
    {
    $CurrCode = 'CLF';
    } 
    else if($_POST["CurrCode"] == '152')
    {
    $CurrCode = 'CLP';
    } 
    else if($_POST["CurrCode"] == '156')
    {
    $CurrCode = 'CNY';
    } 
    else if($_POST["CurrCode"] == '170')
    {
    $CurrCode = 'COP';
    } 
    else if($_POST["CurrCode"] == '188')
    {
    $CurrCode = 'CRC';
    } 
    else if($_POST["CurrCode"] == '192')
    {
    $CurrCode = 'CUP';
    } 
    else if($_POST["CurrCode"] == '132')
    {
    $CurrCode = 'CVE';
    } 
    else if($_POST["CurrCode"] == '196')
    {
    $CurrCode = 'CYP';
    } 
    else if($_POST["CurrCode"] == '203')
    {
    $CurrCode = 'CZK';
    } 
    else if($_POST["CurrCode"] == '280')
    {
    $CurrCode = 'DEM';
    } 
    else if($_POST["CurrCode"] == '262')
    {
    $CurrCode = 'DJF';
    } 
    else if($_POST["CurrCode"] == '208')
    {
    $CurrCode = 'DKK';
    } 
    else if($_POST["CurrCode"] == '214')
    {
    $CurrCode = 'DOP';
    } 
    else if($_POST["CurrCode"] == '012')
    {
    $CurrCode = 'DZD';
    } 
    else if($_POST["CurrCode"] == '218')
    {
    $CurrCode = 'ECS';
    } 
    else if($_POST["CurrCode"] == '983')
    {
    $CurrCode = 'ECV';
    } 
    else if($_POST["CurrCode"] == '233')
    {
    $CurrCode = 'EEK';
    } 
    else if($_POST["CurrCode"] == '818')
    {
    $CurrCode = 'EGP';
    } 
    else if($_POST["CurrCode"] == '232')
    {
    $CurrCode = 'ERN';
    } 
    else if($_POST["CurrCode"] == '724')
    {
    $CurrCode = 'ESP';
    } 
    else if($_POST["CurrCode"] == '230')
    {
    $CurrCode = 'ETB';
    } 
    else if($_POST["CurrCode"] == '978')
    {
    $CurrCode = 'EUR';
    } 
    else if($_POST["CurrCode"] == '246')
    {
    $CurrCode = 'FIM';
    } 
    else if($_POST["CurrCode"] == '242')
    {
    $CurrCode = 'FJD';
    } 
    else if($_POST["CurrCode"] == '238')
    {
    $CurrCode = 'FKP';
    } 
    else if($_POST["CurrCode"] == '250')
    {
    $CurrCode = 'FRF';
    } 
    else if($_POST["CurrCode"] == '826')
    {
    $CurrCode = 'GBP';
    } 
    else if($_POST["CurrCode"] == '981')
    {
    $CurrCode = 'GEL';
    } 
    else if($_POST["CurrCode"] == '288')
    {
    $CurrCode = 'GHC';
    } 
    else if($_POST["CurrCode"] == '292')
    {
    $CurrCode = 'GIP';
    } 
    else if($_POST["CurrCode"] == '270')
    {
    $CurrCode = 'GMD';
    } 
    else if($_POST["CurrCode"] == '324')
    {
    $CurrCode = 'GNF';
    } 
    else if($_POST["CurrCode"] == '300')
    {
    $CurrCode = 'GRD';
    } 
    else if($_POST["CurrCode"] == '320')
    {
    $CurrCode = 'GTQ';
    } 
    else if($_POST["CurrCode"] == '624')
    {
    $CurrCode = 'GWP';
    } 
    else if($_POST["CurrCode"] == '328')
    {
    $CurrCode = 'GYD';
    } 
    else if($_POST["CurrCode"] == '344')
    {
    $CurrCode = 'HKD';
    } 
    else if($_POST["CurrCode"] == '340')
    {
    $CurrCode = 'HNL';
    } 
    else if($_POST["CurrCode"] == '191')
    {
    $CurrCode = 'HRK';
    } 
    else if($_POST["CurrCode"] == '332')
    {
    $CurrCode = 'HTG';
    } 
    else if($_POST["CurrCode"] == '348')
    {
    $CurrCode = 'HUF';
    } 
    else if($_POST["CurrCode"] == '360')
    {
    $CurrCode = 'IDR';
    } 
    else if($_POST["CurrCode"] == '372')
    {
    $CurrCode = 'IEP';
    } 
    else if($_POST["CurrCode"] == '376')
    {
    $CurrCode = 'ILS';
    } 
    else if($_POST["CurrCode"] == '356')
    {
    $CurrCode = 'INR';
    } 
    else if($_POST["CurrCode"] == '364')
    {
    $CurrCode = 'IRR';
    } 
    else if($_POST["CurrCode"] == '352')
    {
    $CurrCode = 'ISK';
    } 
    else if($_POST["CurrCode"] == '380')
    {
    $CurrCode = 'ITL';
    } 
    else if($_POST["CurrCode"] == '388')
    {
    $CurrCode = 'JMD';
    } 
    else if($_POST["CurrCode"] == '400')
    {
    $CurrCode = 'JOD';
    } 
    else if($_POST["CurrCode"] == '392')
    {
    $CurrCode = 'JPY';
    } 
    else if($_POST["CurrCode"] == '404')
    {
    $CurrCode = 'KES';
    } 
    else if($_POST["CurrCode"] == '417')
    {
    $CurrCode = 'KGS';
    } 
    else if($_POST["CurrCode"] == '116')
    {
    $CurrCode = 'KHR';
    } 
    else if($_POST["CurrCode"] == '174')
    {
    $CurrCode = 'KMF';
    } 
    else if($_POST["CurrCode"] == '408')
    {
    $CurrCode = 'KPW';
    } 
    else if($_POST["CurrCode"] == '410')
    {
    $CurrCode = 'KRW';
    } 
    else if($_POST["CurrCode"] == '414')
    {
    $CurrCode = 'KWD';
    } 
    else if($_POST["CurrCode"] == '136')
    {
    $CurrCode = 'KYD';
    } 
    else if($_POST["CurrCode"] == '398')
    {
    $CurrCode = 'KZT';
    } 
    else if($_POST["CurrCode"] == '418')
    {
    $CurrCode = 'LAK';
    } 
    else if($_POST["CurrCode"] == '422')
    {
    $CurrCode = 'LBP';
    } 
    else if($_POST["CurrCode"] == '144')
    {
    $CurrCode = 'LKR';
    } 
    else if($_POST["CurrCode"] == '430')
    {
    $CurrCode = 'LRD';
    } 
    else if($_POST["CurrCode"] == '426')
    {
    $CurrCode = 'LSL';
    } 
    else if($_POST["CurrCode"] == '440')
    {
    $CurrCode = 'LTL';
    } 
    else if($_POST["CurrCode"] == '442')
    {
    $CurrCode = 'LUF';
    } 
    else if($_POST["CurrCode"] == '428')
    {
    $CurrCode = 'LVL';
    } 
    else if($_POST["CurrCode"] == '434')
    {
    $CurrCode = 'LYD';
    } 
    else if($_POST["CurrCode"] == '504')
    {
    $CurrCode = 'MAD';
    } 
    else if($_POST["CurrCode"] == '498')
    {
    $CurrCode = 'MDL';
    } 
    else if($_POST["CurrCode"] == '450')
    {
    $CurrCode = 'MGF';
    } 
    else if($_POST["CurrCode"] == '807')
    {
    $CurrCode = 'MKD';
    } 
    else if($_POST["CurrCode"] == '104')
    {
    $CurrCode = 'MMK';
    } else if($_POST["CurrCode"] == '496')
    {
    $CurrCode = 'MNT';
    } 
    else if($_POST["CurrCode"] == '446')
    {
    $CurrCode = 'MOP';
    } 
    else if($_POST["CurrCode"] == '478')
    {
    $CurrCode = 'MRO';
    } 
    else if($_POST["CurrCode"] == '470')
    {
    $CurrCode = 'MTL';
    } 
    else if($_POST["CurrCode"] == '480')
    {
    $CurrCode = 'MUR';
    } 
    else if($_POST["CurrCode"] == '462')
    {
    $CurrCode = 'MVR';
    } 
    else if($_POST["CurrCode"] == '454')
    {
    $CurrCode = 'MWK';
    } 
    else if($_POST["CurrCode"] == '484')
    {
    $CurrCode = 'MXN';
    } 
    else if($_POST["CurrCode"] == '979')
    {
    $CurrCode = 'MXV';
    } 
    else if($_POST["CurrCode"] == '458')
    {
    $CurrCode = 'MYR';
    } 
    else if($_POST["CurrCode"] == '508')
    {
    $CurrCode = 'MZM';
    } 
    else if($_POST["CurrCode"] == '516')
    {
    $CurrCode = 'NAD';
    } 
    else if($_POST["CurrCode"] == '566')
    {
    $CurrCode = 'NGN';
    } 
    else if($_POST["CurrCode"] == '558')
    {
    $CurrCode = 'NIO';
    } 
    else if($_POST["CurrCode"] == '528')
    {
    $CurrCode = 'NLG';
    } else if($_POST["CurrCode"] == '578')
    {
    $CurrCode = 'NOK';
    } 
    else if($_POST["CurrCode"] == '524')
    {
    $CurrCode = 'NPR';
    } 
    else if($_POST["CurrCode"] == '554')
    {
    $CurrCode = 'NZD';
    } 
    else if($_POST["CurrCode"] == '512')
    {
    $CurrCode = 'OMR';
    } 
    else if($_POST["CurrCode"] == '590')
    {
    $CurrCode = 'PAB';
    } 
    else if($_POST["CurrCode"] == '604')
    {
    $CurrCode = 'PEN';
    } 
    else if($_POST["CurrCode"] == '598')
    {
    $CurrCode = 'PGK';
    } 
    else if($_POST["CurrCode"] == '608')
    {
    $CurrCode = 'PHP';
    } 
    else if($_POST["CurrCode"] == '586')
    {
    $CurrCode = 'PKR';
    } 
    else if($_POST["CurrCode"] == '985')
    {
    $CurrCode = 'PLN';
    } 
    else if($_POST["CurrCode"] == '616')
    {
    $CurrCode = 'PLZ';
    } 
    else if($_POST["CurrCode"] == '620')
    {
    $CurrCode = 'PTE';
    } 
    else if($_POST["CurrCode"] == '600')
    {
    $CurrCode = 'PYG';
    } 
    else if($_POST["CurrCode"] == '634')
    {
    $CurrCode = 'QAR';
    } 
    else if($_POST["CurrCode"] == '642')
    {
    $CurrCode = 'ROL';
    } 
    else if($_POST["CurrCode"] == '941')
    {
    $CurrCode = 'RSD';
    } 
    else if($_POST["CurrCode"] == '810')
    {
    $CurrCode = 'RUB';
    } 
    else if($_POST["CurrCode"] == '646')
    {
    $CurrCode = 'RWF';
    } 
    else if($_POST["CurrCode"] == '682')
    {
    $CurrCode = 'SAR';
    } 
    else if($_POST["CurrCode"] == '090')
    {
    $CurrCode = 'SBD';
    } 
    else if($_POST["CurrCode"] == '690')
    {
    $CurrCode = 'SCR';
    } 
    else if($_POST["CurrCode"] == '736')
    {
    $CurrCode = 'SDD';
    } 
    else if($_POST["CurrCode"] == '736')
    {
    $CurrCode = 'SDP';
    } 
    else if($_POST["CurrCode"] == '000')
    {
    $CurrCode = 'SDR';
    } 
    else if($_POST["CurrCode"] == '752')
    {
    $CurrCode = 'SEK';
    } 
    else if($_POST["CurrCode"] == '702')
    {
    $CurrCode = 'SGD';
    } 
    else if($_POST["CurrCode"] == '654')
    {
    $CurrCode = 'SHP';
    } 
    else if($_POST["CurrCode"] == '705')
    {
    $CurrCode = 'SIT';
    } 
    else if($_POST["CurrCode"] == '703')
    {
    $CurrCode = 'SKK';
    } 
    else if($_POST["CurrCode"] == '694')
    {
    $CurrCode = 'SLL';
    } 
    else if($_POST["CurrCode"] == '706')
    {
    $CurrCode = 'SOS';
    } 
    else if($_POST["CurrCode"] == '740')
    {
    $CurrCode = 'SRG';
    } 
    else if($_POST["CurrCode"] == '678')
    {
    $CurrCode = 'STD';
    } 
    else if($_POST["CurrCode"] == '222')
    {
    $CurrCode = 'SVC';
    } 
    else if($_POST["CurrCode"] == '760')
    {
    $CurrCode = 'SYP';
    } 
    else if($_POST["CurrCode"] == '748')
    {
    $CurrCode = 'SZL';
    } 
    else if($_POST["CurrCode"] == '764')
    {
    $CurrCode = 'THB';
    } 
    else if($_POST["CurrCode"] == '762')
    {
    $CurrCode = 'TJR';
    } 
    else if($_POST["CurrCode"] == '972')
    {
    $CurrCode = 'TJS';
    } 
    else if($_POST["CurrCode"] == '795')
    {
    $CurrCode = 'TMM';
    } 
    else if($_POST["CurrCode"] == '788')
    {
    $CurrCode = 'TND';
    } 
    else if($_POST["CurrCode"] == '776')
    {
    $CurrCode = 'TOP';
    } 
    else if($_POST["CurrCode"] == '792')
    {
    $CurrCode = 'TRL';
    } 
    else if($_POST["CurrCode"] == '780')
    {
    $CurrCode = 'TTD';
    } 
    else if($_POST["CurrCode"] == '901')
    {
    $CurrCode = 'TWD';
    } 
    else if($_POST["CurrCode"] == '834')
    {
    $CurrCode = 'TZS';
    } 
    else if($_POST["CurrCode"] == '980')
    {
    $CurrCode = 'UAH';
    } 
    else if($_POST["CurrCode"] == '804')
    {
    $CurrCode = 'UAK';
    } 
    else if($_POST["CurrCode"] == '800')
    {
    $CurrCode = 'UGX';
    } 
    else if($_POST["CurrCode"] == '840')
    {
    $CurrCode = 'USD';
    } 
    else if($_POST["CurrCode"] == '997')
    {
    $CurrCode = 'USN';
    } 
    else if($_POST["CurrCode"] == '998')
    {
    $CurrCode = 'USS';
    } 
    else if($_POST["CurrCode"] == '858')
    {
    $CurrCode = 'UYU';
    } 
    else if($_POST["CurrCode"] == '860')
    {
    $CurrCode = 'UZS';
    } 
    else if($_POST["CurrCode"] == '862')
    {
    $CurrCode = 'VEB';
    } 
    else if($_POST["CurrCode"] == '704')
    {
    $CurrCode = 'VND';
    } 
    else if($_POST["CurrCode"] == '548')
    {
    $CurrCode = 'VUV';
    } 
    else if($_POST["CurrCode"] == '882')
    {
    $CurrCode = 'WST';
    } 
    else if($_POST["CurrCode"] == '950')
    {
    $CurrCode = 'XAF';
    } 
    else if($_POST["CurrCode"] == '961')
    {
    $CurrCode = 'XAG';
    } 
    else if($_POST["CurrCode"] == '959')
    {
    $CurrCode = 'XAU';
    } 
    else if($_POST["CurrCode"] == '955')
    {
    $CurrCode = 'XBA';
    } 
    else if($_POST["CurrCode"] == '956')
    {
    $CurrCode = 'XBB';
    } 
    else if($_POST["CurrCode"] == '957')
    {
    $CurrCode = 'XBC';
    } 
    else if($_POST["CurrCode"] == '958')
    {
    $CurrCode = 'XBD';
    } 
    else if($_POST["CurrCode"] == '951')
    {
    $CurrCode = 'XCD';
    } 
    else if($_POST["CurrCode"] == '960')
    {
    $CurrCode = 'XDR';
    } 
    else if($_POST["CurrCode"] == '954')
    {
    $CurrCode = 'XEU';
    } 
    else if($_POST["CurrCode"] == '952')
    {
    $CurrCode = 'XOF';
    } 
    else if($_POST["CurrCode"] == '964')
    {
    $CurrCode = 'XPD';
    } 
    else if($_POST["CurrCode"] == '953')
    {
    $CurrCode = 'XPF';
    } 
    else if($_POST["CurrCode"] == '962')
    {
    $CurrCode = 'XPT';
    } 
    else if($_POST["CurrCode"] == '963')
    {
    $CurrCode = 'XTS';
    } 
    else if($_POST["CurrCode"] == '999')
    {
    $CurrCode = 'XXX';
    } 
    else if($_POST["CurrCode"] == '886')
    {
    $CurrCode = 'YER';
    } 
    else if($_POST["CurrCode"] == '891')
    {
    $CurrCode = 'YUM';
    } 
    else if($_POST["CurrCode"] == '890')
    {
    $CurrCode = 'YUN';
    } 
    else if($_POST["CurrCode"] == '991')
    {
    $CurrCode = 'ZAL';
    } 
    else if($_POST["CurrCode"] == '710')
    {
    $CurrCode = 'ZAR';
    } 
    else if($_POST["CurrCode"] == '894')
    {
    $CurrCode = 'ZMK';
    } 
    else if($_POST["CurrCode"] == '180')
    {
    $CurrCode = 'ZRN';
    } 
    else if($_POST["CurrCode"] == '716')
    {
    $CurrCode = 'ZWD';
    }
                ?>
    <form target="_top" action="../myorderpayment.php" method="post" 
	autocomplete="off" novalidate="novalidate">
    <!-- Accordion -->
    <div align="center" id="pay_header">
        <img src="./images/header.jpg" style="width: 100%"></div>
    <div id="accordion">
        <h3>
            Order Details</h3>
        <div style="padding-top: 5px; padding-bottom: 5px; padding-left: 0px; padding-right: 5px;">
                <table>
                <tr>
                  <td style="text-align: right;">
                            Merchants Website :
                  </td>
				 	<td>
				     <span class="RetURL"><?php echo $_POST['Url'];?></span>
                   </td>
                </tr>
                <tr>
                      <td style="text-align: right">
                                Amount :
                            </td>
                    <td>
                        <span id="lblAmount" class="Label1"><?php echo $CurrCode;?> <?php echo $_POST['Amount']/100;?></span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">
                                Order ID :
                    </td>
                    <td>
                        <span id="LBLTextMOrderID" class="Label1"><?php echo $_POST['OrderID'];?></span>
                    </td> 
                   </tr>
                </table>
            </div>
            <h3>
                Card Details Information</h3>
            <div style="padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px">
                <table align='center'>
                    <tr>
                        <td style="text-align: right;">
                         <p style="margin-top: 10px;">
                                Card Type :
                            </p>
                        </td> 
                    <td colspan="2"> 
                        <input type="radio" id="CardType4" name="CardType" checked="checked" value="V"/> <label for="radio1"><img 
						src="./images/visa-1.gif" style="height: 35px; width: 55px; vertical-align: middle;
                                margin-top: -5px;" /></label>
                        <input type="radio" id="CardType3" name="CardType" value="M"/><label for="radio2"> <img src="./images/mastercard-1.gif"
						  
						   style="height: 35px; width: 55px; vertical-align: middle; margin-top: -5px;" /></label>
                    </td> 
                </tr>
                <tr>
                    <td style="text-align:right">
                         Card Number :
                      
					  
					    </td>
                    <td colspan="2">
                           <script type="text/javascript">
                                                    window.onload = function () {
                                                        var str = document.getElementById("txtCardNo");
                                                        str.onkeyup = function () {
                                                            str.value = str.value.replace(/\D/g, "").replace(/(\d{4})(?=\d)/g, "$1 ");
                                                        };
                                                    };

                        </script>
                        <input id="txtCardNo" name="CardPAN" type="text" class="inputcard" value="" onpaste="PasteRecorded();" onKeyUp="test(this)" onBlur="test(this)"  width='160px' >
                       <div style=" color:Red" class="errorTD"></div>
                    </td>
                   
                </tr>
                <tr>
                     <td style="text-align: right">
                            Expiration Date :
                        </td>
                        <td colspan="2">
                            <div>
                                <select id="ddlMonth" name="ExpMonth" style="width: 80px;">
                                </select>/
                                <select id="ddlYear" name="ExpYear" style="width: 80px;">
                                </select>
                                <div style=" color:Red" class="errorTD"></div>
                                <script type="text/javascript">
                                    var select = $("#ddlMonth"),
                                            month = new Date().getMonth() + 1;
                                for (var i = 1; i <= 12; i++) {
                                    select.append($("<option value='" + i + "'>" + i + "</option>"))
                                }
                            </script>
                            <script type="text/javascript">
                                var select = $("#ddlYear"),
                                            year = new Date().getFullYear();

                                for (var i = 0; i < 12; i++) {
                                    select.append($("<option value='" + (i + year) + "'>" + (i + year) + "</option>"))
                                }
                            </script>
                            <input id="Hidden1" name="ExpDate" type="hidden" />
                        </div>
                    </td> 
                </tr>
                <tr>
                  <td style="text-align: right">
                       CVC/CVV2:
                     </td>
                     <td width="110px">  
					    <input name="CVV2" type="text" id="txtCVV"  style="width: 100px" runat="server" />
                        <div style="color: Red" class="errorTD"> </div>
                    </td>
                 <td style="text-align: left">
                            <img src="./images/backcard.gif" style="height: 30px; width: 55px; padding-top: 5px;">
                        </td>
                </tr>
                <tr>
				  <td colspan="2" align="right">
                            <div align="right">
                                <input id="Submit" type="submit" value="Submit" /><input type="reset" value="Reset" /></div>
                        </td>
					 </tr>
           </table>
     <input type="hidden" name="BrowserDate" id="BrowserDate">
    <input type="hidden" name="BrowserDateTimezone" id="BrowserDateTimezone">
    <input type="hidden" name="BrowserUserAgent" id="BrowserUserAgent">
    <input type="hidden" name="BrowserName" id="BrowserName">
    <input type="hidden" name="BrowserLanguage" id="BrowserLanguage">
    <input type="hidden" name="BrowserSystemLanguage" id="BrowserSystemLanguage">
    <input type="hidden" name="BrowserSystem" id="BrowserSystem">
    <input type="hidden" name="CardCopy" id="CardCopy">
    <input type="hidden" name="Resolution" id="Resolution" value="1366x768">
    <input type="hidden" id="CTime" name="CTime">
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
      
  <input type="hidden" value="<?php echo $_POST['ShipName'];?>" name="ShipName">
  <input type="hidden" value="<?php echo $_POST['ShipAddress'];?>" name="ShipAddress">
  <input type="hidden" value="<?php echo $_POST['ShipCity'];?>" name="ShipCity">
  <input type="hidden" value="<?php echo $_POST['Shipstate'];?>" name="Shipstate">
  <input type="hidden" value="<?php echo $_POST['ShipCountry'];?>" name="ShipCountry">
  <input type="hidden" value="<?php echo $_POST['ShipPostCode'];?>" name="ShipPostCode">
  <input type="hidden" value="<?php echo $_POST['Shipphone'];?>" name="Shipphone">
    
        </div>
    </div>
    <div style="height: 100px;" align="center">
        <img src="./images/trustwave.jpg" style="width: 24%; margin-top: 10px;">
        <img src="./images/pcisecuertiy.jpg" style="width: 22%; margin-top: 10px;">
        <img src="./images/sysmantic.jpg" style="width: 22%; margin-top: 10px;">
        <img src="./images/verisign.jpg" style="width: 18%; margin-top: 10px;">
        <div>
        </div>
		  <script src="./js/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript">
  var browser={
    versions:function(){
            var u = navigator.userAgent, app = navigator.appVersion;
            return {         //移动终端浏览器版本信息
                 trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器
                iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
         }(),
}
if(browser.versions.ios){
	$("#txtCardNo").width("88%");
	$("#ddlMonth").width("30%");
	$("#txtCVV").width("40%");
}
if(browser.versions.android){
	$("#txtCardNo").width("88%");
	$("#ddlMonth").width("30%");
	$("#txtCVV").width("40%");
}
  </script>
        <script>

                $("#accordion").accordion({ heightStyle: "content" });
                var active = $("#accordion").accordion("option", "active");
                $("#accordion").accordion("option", "active", 1);

            var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
            $("#autocomplete").autocomplete({
                source: availableTags

            });



            $("#button").button();
            $("#radioset").buttonset();



            $("#tabs").tabs();



            $("#dialog").dialog({
                autoOpen: false,
                width: 400,
                buttons: [
		{
		    text: "Ok",
		    click: function () {
		        $(this).dialog("close");
		    }
		},
		{
		    text: "Cancel",
		    click: function () {
		        $(this).dialog("close");
		    }
		}
	]
            });

            // Link to open the dialog
            $("#dialog-link").click(function (event) {
                $("#dialog").dialog("open");
                event.preventDefault();
            });



            $("#datepicker").datepicker({
                inline: true
            });



            $("#slider").slider({
                range: true,
                values: [17, 67]
            });



            $("#progressbar").progressbar({
                value: 20
            });



            $("#spinnerDay").spinner({
                min: 01,
                max: 12
            });
            $("#spinnerDate").spinner({
                min: 2014,
                max: 2017
            });
            $("input[type=submit]").button();
            $("input[type=reset]").button();
            $("#radio").buttonset();

            $("#menu").menu();

            $("#tooltip").tooltip();

            $("#selectmenu").selectmenu();


            // Hover states on the static widgets
            $("#dialog-link, #icons li").hover(
	function () {
	    $(this).addClass("ui-state-hover");
	},
	function () {
	    $(this).removeClass("ui-state-hover");
	}
);
        </script>
    <script type="text/javascript">
         var myDate = new Date();
         document.getElementById("CTime").value = myDate;
      </script>
            </form>
</body>
</html>