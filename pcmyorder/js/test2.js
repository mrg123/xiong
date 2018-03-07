// 点击改变 Card Type 的样式
	$(".firt-li img").on('click',function(){
 		$(this).addClass("pic-border").siblings().removeClass("pic-border")
	})
	// 账号每到四位自动添加空格
	window.onload=function()
	{
		var oT=document.getElementById('card');
		oT.onkeydown=function(ev)
		{   
			var oW=oT.value;
			var oEvent=ev||event;
			if(oEvent.keyCode==8)
			{
				if(oW)
				{
					for(var i=0;i<oW.length;i++)
					{
						var newStr=oW.replace(/\s\D$/g,'');
						}
					oT.value=newStr
				}
			}else{
				for(var i=0;i<oW.length;i++)
				{
					var arr=oW.split('');

					if((i+1)%5==0)
					{
						arr.splice(i,0,' ');
					}
				}
				oT.value=arr.join('');
			}
		}
	}

	// 输入框若匹配错误变为红色
	$("#card").on('focus',function(){
		$("#card").css("border","1px solid #ddd")
	});

	$("#card").on('blur',function(){
 		var value = $(this).val().replace(/\s/g, "")
		var test =/[\d]{16,19}/ ;
		// /^[0-9]*[1-9][0-9]*$/
		var valueTest = test.test(value)
		if(!valueTest) {
			$("#card").css("border","1px solid red")
		}
	})

	$("#cvc").on('focus',function(){
		$("#cvc").css("border","1px solid #ddd")
	});

	$("#cvc").on('blur',function(){
 		var value = $(this).val().replace(/\s/g, "")
		var test =/[\d]{3,4}/ ;
		// /^[0-9]*[1-9][0-9]*$/
		var valueTest = test.test(value)
		if(!valueTest) {
			$("#cvc").css("border","1px solid red")
		}
	})

	// 滑过银行卡时图片变大
	$(".last-pic").hover(function(){
		$(this).stop().attr("src","images/card.jpg")
 	},function(){
		$(this).attr("src","images/card.png") 
	})