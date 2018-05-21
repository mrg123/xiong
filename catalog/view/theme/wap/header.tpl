<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>


<link rel="stylesheet" type="text/css" href="catalog/view/theme/wap/css/demo.css">
<link rel="stylesheet" type="text/css" href="catalog/view/theme/wap/css/font-awesome.min.css">

<script type="text/javascript" src="catalog/view/theme/wap/js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/wap/css/jquery.mmenu.all.css">
<script type="text/javascript" src="catalog/view/theme/wap/js/jquery.mmenu.all.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/wap/css/jquery.mhead.css">
<script type="text/javascript" src="catalog/view/theme/wap/js/jquery.mhead.js"></script>
<script src="catalog/view/theme/wap/js/common.js" type="text/javascript"></script>

<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>

<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>

<?php foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>
<?php foreach ($analytics as $analytic) { ?>
<?php echo $analytic; ?>
<?php } ?>

<style type="text/css">
			.mh-head {
				background: #fff;
				color: #000;
				border-bottom:1px solid #e5e5e5;
			}
			.mh-text {
				font-size: 16px;
				font-weight: 400;
			}
			.mh-head .mh-form .fa {
				color: #000;
			}
		</style>
</head>
<body class="<?php echo $class; ?>">

  <div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="fa fa-bars" href="#menu"></a>
				</span>
				<span class="mh-btns-left2"> <?php echo $currency; ?> </span>
    <span class="mh-text"><?php echo $name; ?></span>
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

  <nav id="menu">
    <ul>
	<li><a href="<?php echo $home; ?>"><?php echo $text_home; ?></a></li>
	<?php if($categories) { ?>
	<?php foreach($categories as $category) { ?>
	<?php if($category['children']) { ?>
		<li><span><?php echo $category['name']; ?></span>
			<ul>
			<?php foreach ($category['children'] as $child) { ?>
			<li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>	
			<?php } ?>
			</ul>
		</li>
	<?php }else{ ?>
	<li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
	<?php } ?>
	<?php } ?>
	<?php } ?>
	
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
		<div class="mmenu-footer">
			Delivery Information | Privacy Policy | Terms & Conditions
		</div>
		<div class="mmenu-footer">
			<a href="javascript:;">
				<i class="fa fa-phone"></i><?php echo $telephone; ?>
			</a>
		</div>
    </ul>
	
  </nav>
  <nav id="shoppingbag">
    <div>
      <br />
      <p>You have no items in your shopping bag.</p>
    </div>
  </nav>
