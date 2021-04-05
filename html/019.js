$('input[name="username"]').on('blur',function(){
var info=$(this).siblings('span');
// console.log($(this).siblings('span'));
val url='019checkname.php?'+$(this).serialize();
info.html('');
$.get(url,function(date){
	if(date=='1'){
		info.html('此用户名已经被使用');
	}
	});
});
$('input[name="email"]').on('blur',function(){
// var info=$(this).siblings('span'));
// info.html('');
});