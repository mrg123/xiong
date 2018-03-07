$(function(){
	$("#issame").click(function(){
		var isshowflag=$("#shippingdiv").css("display");
		if(isshowflag=="none"){
			$("#shippingdiv").show();	
		}
		if(isshowflag=="block"){
			$("#shippingdiv").hide();	
		}
	});
})