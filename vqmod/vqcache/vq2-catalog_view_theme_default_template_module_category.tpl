<div class="list-group">
  <?php foreach ($categories as $category) { ?>
  <?php if ($category['category_id'] == $category_id) { ?>
  <a href="<?php echo $category['href']; ?>" class="list-group-item active"><?php echo $category['name']; ?></a>
  <?php if ($category['children']) { ?>
  <?php foreach ($category['children'] as $child) { ?>
  <?php if ($child['category_id'] == $child_id) { ?>
  <?php if ($child['thumb']) { // add ?>
        <a href="<?php echo $child['href']; ?>" class="list-group-item active">&nbsp;&nbsp;&nbsp;- <img src="<?php echo $child['thumb']; ?>" alt="<?php echo $child['name']; ?>" title="<?php echo $child['name']; ?>" /></a>
    <?php }else{ ?>
	<a href="<?php echo $child['href']; ?>" class="list-group-item active">&nbsp;&nbsp;&nbsp;- <?php echo $child['name']; ?></a>
    <?php } ?>
		<?php if($child['grandchildren']){ ?>
			<?php foreach ($child['grandchildren'] as $grandchild) { ?>
			<?php if ($grandchild['thumb']) { // add ?>
				<a href="<?php echo $grandchild['href']; ?>" class="list-group-item active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- <img src="<?php echo $grandchild['thumb']; ?>" alt="<?php echo $grandchild['name']; ?>" title="<?php echo $grandchild['name']; ?>" /></a>
			<?php }else{ ?>
				<a href="<?php echo $grandchild['href']; ?>" class="list-group-item active">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- <?php echo $grandchild['name']; ?></a>
			<?php } ?>
			<?php } ?>
		<?php } ?>
  <?php } else { ?>
  <?php if ($child['thumb']) { // add ?>
        <a href="<?php echo $child['href']; ?>" class="list-group-item">&nbsp;&nbsp;&nbsp;- <img src="<?php echo $child['thumb']; ?>" alt="<?php echo $child['name']; ?>" title="<?php echo $child['name']; ?>" /></a>
    <?php }else{ ?>
	<a href="<?php echo $child['href']; ?>" class="list-group-item">&nbsp;&nbsp;&nbsp;- <?php echo $child['name']; ?></a>
    <?php } ?>
  <?php } ?>
  <?php } ?>
  <?php } ?>
  <?php } else { ?>
  <a href="<?php echo $category['href']; ?>" class="list-group-item"><?php echo $category['name']; ?></a>
  <?php } ?>
  <?php } ?>
</div>
