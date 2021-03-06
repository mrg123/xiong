<?php echo $header; ?>
<div class="container">
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <div class="row">
        <?php if ($column_left || $column_right) { ?>
        <?php $class = 'col-sm-6'; ?>
        <?php } else { ?>
        <?php $class = 'col-sm-8'; ?>
        <?php } ?>
        <div class="<?php echo $class; ?>">
          <?php if ($thumb || $images) { ?>
          <ul class="thumbnails">
            <?php if ($thumb) { ?>
            <li><a class="thumbnail pop" href="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>"><img class="zoom" src="<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
            <li style="display: none;" class="image-additional"><a class="thumbnail" href="<?php echo $popup1; ?>" title="<?php echo $heading_title; ?>"> <img src="<?php echo $thumb1; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
			<li class="image-additional"><img id="gallery" val="<?php echo $popup1; ?>" name="<?php echo $big_thumb; ?>" src="<?php echo $thumb1; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></li>
            <?php } ?>
            <?php if ($images) { ?>
            <?php foreach ($images as $image) { ?>
            <li class="image-additional"><img id="gallery" val="<?php echo $image['popup']; ?>" name="<?php echo $image['big_thumb']; ?>" src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></li>
            <li style="display: none;" class="image-additional"><a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>"> <img src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
            <?php } ?>
            <?php } ?>
          </ul>
          <?php } ?>
            <h1 style="font-size:19px;clear:both;padding-top: 10px;"><?php echo $heading_title; ?></h1>
        </div>
        <?php if ($column_left || $column_right) { ?>
        <?php $class = 'col-sm-6'; ?>
        <?php } else { ?>
        <?php $class = 'col-sm-4'; ?>
        <?php } ?>
        <div class="<?php echo $class; ?>">
          <ul class="list-unstyled">
            <?php if ($manufacturer) { ?>
            <li><?php echo $text_manufacturer; ?> <a href="<?php echo $manufacturers; ?>"><?php echo $manufacturer; ?></a></li>
            <?php } ?>
            <li><?php echo $text_model; ?> <?php echo $model; ?></li>
            <?php if ($reward) { ?>
            <li><?php echo $text_reward; ?> <?php echo $reward; ?></li>
            <?php } ?>
            <li><?php echo $text_stock; ?> <?php echo $stock; ?></li>
          </ul>
          <?php if ($price) { ?>
          <ul class="list-unstyled">
            <?php if (!$special) { ?>
            <li>
              <h2 style="color:#222;margin-top: 10px;"><?php echo $price; ?></h2>
            </li>
            <?php } else { ?>
            <li><span style="text-decoration: line-through;color:#222;"><?php echo $price; ?></span></li>
            <li>
              <h2 style="color:#222;margin-top: 10px;font-size:19px;"><?php echo $special; ?><?php if($price_saved) { ?>&nbsp;<span style="color:red;font-size:14px;"><?php echo $price_saved; ?> Saved</span><?php } ?></h2>
            </li>
            <?php } ?>
            <?php if ($tax) { ?>
            <li><?php echo $text_tax; ?> <?php echo $tax; ?></li>
            <?php } ?>
            <?php if ($points) { ?>
            <li><?php echo $text_points; ?> <?php echo $points; ?></li>
            <?php } ?>
            <?php if ($discounts) { ?>
            <li>
              <hr>
            </li>
            <?php foreach ($discounts as $discount) { ?>
            <li><?php echo $discount['quantity']; ?><?php echo $text_discount; ?><?php echo $discount['price']; ?>
			<?php if($discount['price_saved']) { ?>
			  &nbsp;
			  <span style="color:red;font-size:10px;"><?php echo $discount['price_saved']; ?> Saved</span>
			  <?php } ?>
			</li>
            <?php } ?>
            <?php } ?>
          </ul>
          <?php } ?>

<div class="pull-left product-currency" style="margin-top:-30px;margin-left: 230px;"><?php echo $currency; ?></div>
          <div id="product">
            <?php if ($options) { ?>
            <hr>
            <?php foreach ($options as $option) { ?>
            <?php if ($option['type'] == 'select') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
              <select name="option[<?php echo $option['product_option_id']; ?>]" id="input-option<?php echo $option['product_option_id']; ?>" class="thumb form-control">
                <option value=""><?php echo $text_select; ?></option>
                <?php foreach ($option['product_option_value'] as $option_value) { ?>
 <?php  if (!$option_value['imagel'] || strpos($option_value['imagel'], 'no_image')) $option_value['imagel'] = $thumb; ?>
 <?php if ($option_value['imagexl'] == '') $option_value['imagexl'] = 'no_image'; ?>
                <option value="<?php echo $option_value['product_option_value_id']; ?>"class="thumb" src="<?php echo $option_value['imagel']; ?>" val="<?php echo $option_value['imagexl']; ?>"><?php echo $option_value['name']; ?>
                <?php if ($option_value['price']) { ?>
                (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                <?php } ?>
                </option>
                <?php } ?>
              </select>
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'radio') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label"><?php echo $option['name']; ?></label>
              <div id="input-option<?php echo $option['product_option_id']; ?>">
                <?php foreach ($option['product_option_value'] as $option_value) { ?>
 <?php  if (!$option_value['imagel'] || strpos($option_value['imagel'], 'no_image')) $option_value['imagel'] = $thumb; ?>
 <?php if ($option_value['imagexl'] == '') $option_value['imagexl'] = 'no_image'; ?>
                <div class="radio">
                  <label>
                                       <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" class="thumb" src="<?php echo $option_value['imagel']; ?>" val="<?php echo $option_value['imagexl']; ?>" value="<?php echo $option_value['product_option_value_id']; ?>" />
                    <?php echo $option_value['name']; ?>
                    <?php if ($option_value['price']) { ?>
                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                    <?php } ?>
                  </label>
                </div>
                <?php } ?>
              </div>
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'checkbox') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label"><?php echo $option['name']; ?></label>
              <div id="input-option<?php echo $option['product_option_id']; ?>">
                <?php foreach ($option['product_option_value'] as $option_value) { ?>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="option[<?php echo $option['product_option_id']; ?>][]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                    <?php echo $option_value['name']; ?>
                    <?php if ($option_value['price']) { ?>
                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                    <?php } ?>
                  </label>
                </div>
                <?php } ?>
              </div>
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'image') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label"><?php echo $option['name']; ?></label>
              <div id="input-option<?php echo $option['product_option_id']; ?>">
                <?php foreach ($option['product_option_value'] as $option_value) { ?>
 <?php  if (!$option_value['imagel'] || strpos($option_value['imagel'], 'no_image')) $option_value['imagel'] = $thumb; ?>
 <?php if ($option_value['imagexl'] == '') $option_value['imagexl'] = 'no_image'; ?>
                <div class="radio">
                  <label>
                                       <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" class="thumb" src="<?php echo $option_value['imagel']; ?>" val="<?php echo $option_value['imagexl']; ?>" value="<?php echo $option_value['product_option_value_id']; ?>" />
                    <img src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" class="img-thumbnail" /> <?php echo $option_value['name']; ?>
                    <?php if ($option_value['price']) { ?>
                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                    <?php } ?>
                  </label>
                </div>
                <?php } ?>
              </div>
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'text') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
              <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="thumb form-control" />
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'textarea') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
              <textarea name="option[<?php echo $option['product_option_id']; ?>]" rows="5" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="thumb form-control"><?php echo $option['value']; ?></textarea>
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'file') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label"><?php echo $option['name']; ?></label>
              <button type="button" id="button-upload<?php echo $option['product_option_id']; ?>" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-default btn-block"><i class="fa fa-upload"></i> <?php echo $button_upload; ?></button>
              <input type="hidden" name="option[<?php echo $option['product_option_id']; ?>]" value="" id="input-option<?php echo $option['product_option_id']; ?>" />
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'date') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
              <div class="input-group date">
                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD" id="input-option<?php echo $option['product_option_id']; ?>" class="thumb form-control" />
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'datetime') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
              <div class="input-group datetime">
                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="thumb form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
            <?php } ?>
            <?php if ($option['type'] == 'time') { ?>
            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
              <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
              <div class="input-group time">
                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="thumb form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php if ($recurrings) { ?>
            <hr>
            <h3><?php echo $text_payment_recurring ?></h3>
            <div class="form-group required">
              <select name="recurring_id" class="thumb form-control">
                <option value=""><?php echo $text_select; ?></option>
                <?php foreach ($recurrings as $recurring) { ?>
                <option value="<?php echo $recurring['recurring_id'] ?>"><?php echo $recurring['name'] ?></option>
                <?php } ?>
              </select>
              <div class="help-block" id="recurring-description"></div>
            </div>
            <?php } ?>
            <div class="form-group">
              <label class="control-label" for="input-quantity"><b><?php echo $entry_qty; ?></b></label>

&nbsp;&nbsp;
			<span class="numless">&nbsp;</span>
				<span class="numqty">
				<input type="text" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity"/>
				</span>
			<span class="numadd">&nbsp;</span>
<script> 	
$('.numadd').on('click',function(){
var oldValue = $('input[name=\'quantity\']').val();
oldValue++;
$('input[name=\'quantity\']').val(oldValue);
});
$('.numless').on('click',function(){
var oldValue = $('input[name=\'quantity\']').val();
oldValue--;
if(oldValue<=1){
oldValue = 1;
}
$('input[name=\'quantity\']').val(oldValue);
});
//--></script>
              <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
&nbsp;<a target="_blank" href="https://www.mcafeesecure.com/verify?host=xiong.localweb.com"><img class="mfes-trustmark" border="0" src="image/102.gif.png" width="90" height="37" title="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="window.open('https://www.mcafeesecure.com/verify?host=xiong.localweb.com'); return false;"></a>
              <br />

<?php if ($products){ ?>	
	  
<div class="block block-related">
    <div class="block-title" style="color:#969696;font-weight:600;line-height:20px;text-transform:uppercase;font-size:12px;margin-bottom:5px;">
	<?php echo $text_related; ?>
	</div>
	<?php foreach ($products as $product) { ?>	
    <div class="block-content related-product-list" style="line-height:15px;align-items:center;display:flex;margin-bottom:10px;cursor:pointer;">
                        
                    <div class="related-product-image" style="display:block;width:50px;height:50px;line-height:100%;box-sizing:border-box;">
                        <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" width="50"/>
                    </div>
                    <div class="related-product-selected" style="padding:0 8px;line-height:100%;box-sizing:border-box;width:40px;">
                        <label>
							<input type="checkbox" value="<?php echo $product['product_id']; ?>" data-min="<?php echo $product['minimum']; ?>" name="related[]" style="width:18px;height:18px;" data-quantity='<?php echo $product['minimum']; ?>' data-option='' data-required='<?php echo $product['required']; ?>' />
						</label>
                    </div>
					<div class="related-product-name" style="text-transform:uppercase;font-size:13px;color:#1e1e1e;font-weight:600;">
					add &nbsp; 
					<a href="index.php?route=product/product/getOptionProduct&product_id=<?php echo $product['product_id']; ?>" class="toshow">
					<?php echo $product['name']; ?>
					</a>
					
					<?php if ($product['price']) { ?>
                &nbsp; <span style="color:#1eaf4d">
                <?php if (!$product['special']) { ?>
                <?php echo $product['price']; ?>
                <?php } else { ?>
                <?php echo $product['special']; ?>
                <?php } ?>
                </span>
              <?php } ?>
					
					</div>
			
    </div>
	<?php } ?>	
</div>

<?php } ?>
			
              <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary btn-lg btn-block"><?php echo $button_cart; ?></button>
            </div>
            <?php if ($minimum > 1) { ?>
            <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_minimum; ?></div>
            <?php } ?>
          </div>
            <ul class="product-nav">
                <li class="active"><a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a><i class="icon iconfont icon-arrow_right"></i></li>
                <?php if ($shipping_information_status) { ?>
                <li><a href="#tab-shipping_information" data-toggle="tab"><?php echo $shipping_information_title; ?></a><i class="icon iconfont icon-arrow_right"></i></li>
                <?php } ?>
                <?php if ($attribute_groups) { ?>
                <li><a href="#tab-specification" data-toggle="tab"><?php echo $tab_attribute; ?></a><i class="icon iconfont icon-arrow_right"></i></li>
                <?php } ?>
            </ul>
            <div class="product-content">
                <div class="tab-pane active" id="tab-description"><?php echo $description; ?></div>
                <?php if ($shipping_information_status) { ?>
                <div class="tab-pane" id="tab-shipping_information"><?php echo $shipping_information_description; ?></div>
                <?php } ?>
                <?php if ($attribute_groups) { ?>
                <div class="tab-pane" id="tab-specification">
                    <table class="table table-bordered">
                        <?php foreach ($attribute_groups as $attribute_group) { ?>
                        <thead>
                        <tr>
                            <td colspan="2"><strong><?php echo $attribute_group['name']; ?></strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($attribute_group['attribute'] as $attribute) { ?>
                        <tr>
                            <td><?php echo $attribute['name']; ?></td>
                            <td><?php echo $attribute['text']; ?></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <?php } ?>
            </div>
<img src="image/safe.png" width="100%"/>
        </div>
      </div>
      <?php if ($tags) { ?>
      <p><?php echo $text_tags; ?>
        <?php for ($i = 0; $i < count($tags); $i++) { ?>
        <?php if ($i < (count($tags) - 1)) { ?>
        <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>,
        <?php } else { ?>
        <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
        <?php } ?>
        <?php } ?>
      </p>
      <?php } ?>
      <?php echo $content_bottom; ?></div>
<?php if($product_pushs){ ?>
<?php
$hide_pp = 0;
$last_pp = count($product_pushs)-1;
if($last_pp%2==0){
$hide_pp = 1;
}
?>
<h3 class="col-xs-12">May You Like</h3>
<div class="row col-xs-12">
  <?php foreach ($product_pushs as $key => $product) { ?>
  <?php if($key==$last_pp && $hide_pp){ break; } ?>
  <div class="product-layout col-xs-6">
    <div class="product-thumb transition">
      <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
      <div class="caption">
       
        <?php if ($product['price']) { ?>
        <p class="price">
          <?php if (!$product['special']) { ?>
          <?php echo $product['price']; ?>
          <?php } else { ?>
          <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
          <?php } ?>
          <?php if ($product['tax']) { ?>
          <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
          <?php } ?>
        </p>
        <?php } ?>
		<a href="<?php echo $product['href']; ?>" style="height:44px;white-space: normal"><?php echo $product['name']; ?></a>
      </div>

    </div>
  </div>
  <?php } ?>
</div>
<?php } ?>
    <?php echo $column_right; ?></div>
</div>
<script type="text/javascript"><!--
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script>
<script type="text/javascript"><!--

	
$(document).ready(function() {
	$('.related-product-image').click(function(){
		if($(this).parent().find('input[type="checkbox"]').is(':checked') == true){
			$(this).parent().find('input[type="checkbox"]').prop("checked",false);
			
		}else{
			$(this).parent().find('input[type="checkbox"]').prop("checked",true);
			
		}
	});
});	

$(document).delegate('.toshow', 'click', function(e) {
	e.preventDefault();

	$('#modal-toshow').remove();

	var element = this;

	$.ajax({
		url: $(element).attr('href'),
		type: 'get',
		dataType: 'html',
		success: function(data) {
			html  = '<div id="modal-toshow" class="modal" style="padding:30px;">';
			
			html += '  <div class="toshow-dialog" style="max-width:1100px;position:relative;width:100%;margin:0 auto;background-color:#FAFAFA;display:table;">';
			html += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin:10px 20px;font-size:30px;">&times;</button>';
			html += data ;
			html += '</div>';
			html += '</div>';

			$('body').append(html);

			$('#modal-toshow').modal('show');
		}
	});
});

$(document).on("click", ".ch_img", function()  {
    var srcimg = $(this).attr('name');
    var srcim = $(this).attr('val');
    $(this).parents('.thumbnails').find('.zoom').attr('src', srcimg);
    $(this).parents('.thumbnails').find('.zoom').attr('href', srcim);
 event.preventDefault();
    }); 
	
$(document).on("click", ".op_numadd", function()  {
var oldValue = $('#input-op_quantity').val();
oldValue++;
$('#input-op_quantity').val(oldValue);
});

$(document).on("click", ".op_numless", function()  {
var oldValue = $('#input-op_quantity').val();
oldValue--;
if(oldValue<=1){
oldValue = 1;
}
$('#input-op_quantity').val(oldValue);
});

$(document).on("click", "#add_op", function()  {
	var op_quantity = $('#input-op_quantity').val();
	var op_id = $('#input-op_quantity').data('product_id');
	// $('#modal-toshow').modal('hide');
	var op_required = $('#input-op_quantity').data('required');
	if($.trim(op_required)!=0){
		$('.alert, .text-danger').remove();
        op_required = (op_required.substr(1)).split("_");
		var err = 0;
		var op_op = '';
		$.each(op_required,function(index,value){	
			if($('#input-option'+value).val()==''){
			$('#input-option'+value).after('<div class="text-danger">MISSING FIELD REQUIRED</div>');
			err++;
			}else{
			op_op += ',' + value + '_' + $('#input-option'+value).val();
			}
		});
		
		$('.text-danger').parent().addClass('has-error');
		
		if(err==0){
			$('#modal-toshow').modal('hide');
			_that = $('.related-product-list input[value='+op_id+']');
			
			_that.attr("data-quantity",op_quantity);
			_that.attr("data-option",op_op);
			_that.prop("checked",true);
			
			console.log(op_quantity);
			console.log(_that.attr("data-quantity"));
			console.log(_that.attr("data-option"));
			console.log(_that);
			
		}
		
	}
	
});

	
			
$('#button-cart').on('click', function() {

			var err = 0;
			if($('input[name="related[]"]').length > 0){
		$('input[name="related[]"]:checked').each(function(){
			if($(this).data('required')){
			console.log($(this).attr('data-option'));
				if($(this).attr('data-option')==''){
				console.log($(this).attr('data-option'));
				$(this).prop('checked',false);
				$('.toshow').trigger('click');
				err = 1;
				return false;
				}else{
				
			var product_id = $(this).val();	
			var quantity = $(this).data('quantity');	
			var options = $(this).data('option');	
				
			$.ajax({
			url: 'index.php?route=product/product/addOptionProductToCart',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + quantity + '&options='+options,
			dataType: 'json',
			beforeSend: function() {
				
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				
			},
	        error: function(xhr, ajaxOptions, thrownError) {
	            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	        }
		});
				
				}
			}else{
				cart.add($(this).val(), $(this).data('quantity'));
			}
		});
	}
	if(err){
	return false;
	}
	
	
			
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');

			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));

						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}

				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}

			if (json['success']) {

				$('.cart-box').remove();
				$('body').after('<div class="cart-box"><i class="icon iconfont icon-chenggong"></i> ' + json['success'] + '<button type="button" class="close cart-box-close cart-box-close-button" data-dismiss="alert">&times;</button></div>');
				
				var dbw = $(document.body).width();
				var cbw = $(".cart-box").outerWidth();
				var cbh = $(".cart-box").outerHeight();
				$(".cart-box").css({
					"left":(dbw-cbw)/2,
					"margin-top":(-cbh/2)
				});
				t = setTimeout('$(".cart-box").fadeOut(1000);',2000);
				$(".cart-box-close").click(function(){
					clearTimeout(t);
					$(".cart-box").hide();
				});
			
			}
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
	});
	
	getTotal();
});
//--></script>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});

$('.datetime').datetimepicker({
	pickDate: true,
	pickTime: true
});

$('.time').datetimepicker({
	pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input').attr('value', json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',
		type: 'post',
		dataType: 'json',
		data: $("#form-review").serialize(),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['error']) {
				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
});

$(document).ready(function() {
	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled:true
		}
	});
});

    $(document).ready(function() {
       
        $('.product-nav li').click(function(){
            var id = $(this).children('a').attr('href');
            var i = $(this).find('i');
            $(id).slideToggle('slow',function(){
                if($(id).is(':hidden')){
                    i.css('transform','rotate(0deg)');
                }else{
                    i.css('transform','rotate(90deg)');
                }
            });
        });

    });

$(document).on("click", ".cart-box a", function(e)  {
    e.preventDefault();
    $('.cart-box').hide();
    $('.fa-shopping-cart').click();
});



//--></script>
<script type="text/javascript"><!--
 function c() {
    var srcimg;
    var srcim;
        $("option:selected", $(this)).each(function(){
            srcimg = $(this).attr('src');  
            srcim = $(this).attr('val');
    });
        if (srcimg == null || srcim == null) {         
            srcimg = $(this).attr('src');
            srcim = $(this).attr('val');
    }
        if (srcim != null) {  
    var noimage = srcim.indexOf("no_image"); 
    }
        if (srcimg == null || srcim == null || noimage == 0) {
            //srcimg = '<?php echo $thumb; ?>';
            //srcim = '<?php echo $popup; ?>';
            return;
                } 
    $('.zoom').attr('src', srcimg);
    $('.pop').attr('href', srcim);
    } 
$(document).on("change", ".thumb", c);
$(document).on("click", "#gallery", function()  {
    var srcimg = $(this).attr('name');
    var srcim = $(this).attr('val');
    $('.zoom').attr('src', srcimg);
    $('.pop').attr('href', srcim);
 event.preventDefault();
    }); 
//--></script>
<?php echo $footer; ?>
