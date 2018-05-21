$(function() {
    //	create the menus
    $('#menu').mmenu({
		"slidingSubmenus": true,  // false 向下展开, true向右展开
		"extensions": [
                  "fx-panels-zoom",		//向右展开带有缩收效果
				  "pagedim-black"		// 展开,右侧加黑影
               ],
		"navbars": [
                  {
                     "position": "bottom",
                     "content": [
                        "<a class='fa fa-envelope' href='#/'></a>",
                        "<a class='fa fa-twitter' href='#/'></a>",
                        "<a class='fa fa-facebook' href='#/'></a>"
                     ]
                  }
				  ]
	});
    $('#shoppingbag').mmenu({
        navbar: {
            title: 'Shoppingbag'
        },
        offCanvas: {
            position: 'right'
        }
    });

    //	fire the plugin
    $('.mh-head.first').mhead({
        scroll: {
            hide: 200
        }
    });
    $('.mh-head.second').mhead({
        scroll: true
    });
	
	// 加载新产品
	var start = 0;
	var validate = true;
	$(document).scroll(function(){  
		var bottom_val = $(document).height() - $(document).scrollTop() - window.innerHeight;
		console.log(bottom_val);
		console.log(validate);
        if( bottom_val == 0 )   
        {  
			var request_data = {
                start : start
            };
			if(validate) {
            $.ajax({
                type: 'post',
                url: '/index.php?route=product/product/getLastest',
                data: request_data,
                dataType: 'json',
				before: function(json){
					validate = false;
				},
                success: function (json) {
                    start += 20;
					console.log(json);
					
					if(json.state){
					validate = true;
					var _html = '';
					$.each(json.products,function(k,v){
						_html += '<div class="product">';
						_html += '<div class="product-thumb">';
						_html += '<a href="'+v.href+'"><img src="'+v.thumb+'"/></a></div>';
						_html += '<div class="info">';
						if(v.special){
							_html += '<span class="new-price">'+v.special+'</span>';
						_html += '<span class="old-price">'+v.price+'</span>';	
						}else{
							_html += '<span class="new-price">'+v.price+'</span>';
					
						}
						
						_html += '<span class="product-name">'+v.name+'</span>';
						_html += '</div></div>';	
					});
					$('#get-lastest').append(_html);
					}else{
						validate = false;
					}
                }
            });
			}
        }  
        else  
        {  
			validate = false;
        }  
    });  
});