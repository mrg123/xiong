<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>

<link rel="stylesheet" type="text/css" href="catalog/view/javascript/wap/demo.css">
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/wap/jquery.mmenu.all.css">
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/wap/jquery.mhead.css">

<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script type="text/javascript" src="catalog/view/javascript/wap/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/wap/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="catalog/view/javascript/wap/jquery.mhead.js"></script>
<script src="catalog/view/javascript/wap/common.js" type="text/javascript"></script>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>

<?php foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>
<?php foreach ($analytics as $analytic) { ?>
<?php echo $analytic; ?>
<?php } ?>
</head>
<body class="<?php echo $class; ?>">
<div id="page">

  <div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="fa fa-bars" href="#menu"></a>
				</span>
    <span class="mh-text">demo</span>
    <span class="mh-btns-right">
					<a class="fa fa-shopping-cart" href="#shoppingbag"></a>
				</span>
  </div>
  <div class="mh-head second">
    <form class="mh-form">
      <input placeholder="search" />
      <a href="#/" class="fa fa-search"></a>
    </form>
  </div>

  <div class="content">
    <p><strong>This is a demo.</strong><br />
      Scroll down to see the header in action.</p>
  </div>
  <div class="content">
    <p><strong>Scroll a bit faster.</strong><br />
      If the header did not yet disappear.</p>
  </div>
  <div class="content">
    <p><strong>Now scroll back up.</strong><br />
      To make the header appear again.</p>
  </div>

  <nav id="menu">
    <ul>
      <li><a href="#/">Home</a></li>
      <li><span>About us</span>
        <ul>
          <li><a href="#/about/history">History</a></li>
          <li><span>The team</span>
            <ul>
              <li><a href="#/about/team/management">Management</a></li>
              <li><a href="#/about/team/sales">Sales</a></li>
              <li><a href="#/about/team/development">Development</a></li>
            </ul>
          </li>
          <li><a href="#/about/address">Our address</a></li>
        </ul>
      </li>
      <li><a href="#/contact">Contact</a></li>
    </ul>
  </nav>
  <nav id="shoppingbag">
    <div>
      <br />
      <p>You have no items in your shopping bag.</p>
    </div>
  </nav>
</div>
