$( document ).ready(function(){

var to_request = 1;
$('#to_email-dialog').on('click','#to_continue',function(){
	var _that = $(this);
	var _word = _that.val();
	var to_validate = 1;	
var email = $('#to_email');	
if($('#to_agree:checked').length == 0){
	to_validate = 0;
	var notice = $('#to_agree').parent().text();
	alert(notice);
	return false;
}	
if (!email.val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) { 
	to_validate = 0;
alert(email.attr('error')); 
$('#to_email').focus(); 
return false; 
} 
var request_data = {
                email: email.val(),
            };
if(to_validate) {
            $.ajax({
                type: 'post',
                url: 'index.php?route=account/register/addemail',
                data: request_data,
                dataType: 'json',
				timeout:2000000, 
				beforeSend: function(){
					to_request = 0;
					_that.prop('disabled', true);
					_that.val('Send Email...');
				},
				complete: function(){
				to_request = 1;
				_that.prop('disabled', false);  
				_that.val(_word);
					
				},
				error:function(){
					alert('Service Is Busy Please Try Again');
				to_request = 1;
				_that.prop('disabled', false);  
				_that.val(_word);	
                },	
                success: function (json) {
                
				if(json.state == 1){
				$('#to_email-dialog .step1').hide();
				$('#to_email-dialog .step2').show();	
				}else if(json.state ==2){
					window.location.reload();
				}else{
				if(json.message!= ''){
					alert(json.message);
				}	
				}
                }
            });
        }
	
});
var to_state = $('#to_continue').attr('state');
$('#to_email-dialog').on('click','.remind0',function(){
var con = $('#to_continue');
var remind1 = con.attr('remind1');
var remind0 = con.attr('remind0');
var register = con.attr('register');
var login = con.attr('login');
console.log(remind1);
if(to_state){
con.attr('value',login);
con.attr('state','0');
to_state = 0;
$('#to_email-dialog .remind').html(remind1);
}else{
con.attr('value',register);
con.attr('state','1');
to_state = 1;
$('#to_email-dialog .remind').html(remind0);
}
$('#to_email-dialog .step1').show();
$('#to_email-dialog .step2').hide();

});

$( "#to_email-dialog" ).dialog({
autoOpen: true, // 自动打开
//width: 'auto',
height: 'auto',
minWidth: 400,
closeOnEscpe: false, // ESC关闭
dialogClass: 'to_email', // 添加头部样式
classes: {
    "ui-dialog": "highlight"
  },  
colseText:"hide",
draggable: false, // 拖动
modal:true,  // 遮挡层
resizable:true, // 自动调节
close: function(){ // 关闭触发
	
},
	beforeClose: function( event, ui ) {
		console.log('检查邮箱');
	},
		create: function( event, ui ) {
	
		},
			drag: function( event, ui ) {},
			dragStart: function( event, ui ) {},
			dragStop: function( event, ui ) {},
			focus: function( event, ui ) {},
			resize: function( event, ui ) {},
			resizeStart: function( event, ui ) {},
			resizeStop: function( event, ui ) {},
			title: '标题', // 标题
hide: { effect: "explode", duration: 800 },
show: { effect: "blind", duration: 800 },
open:function(){  // 打开触发
	
},
	buttons: [
		{
			text: "Ok",
icon: "ui-icon-heart",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});
});