/**
* @act      QQ跳支付宝
* @version  1.0
* @author   youngxj
* @date     2018-07-09
* @url      http://www.youngxj.cn
*/

control('请输入支付宝链接：');
$("#btn_state").click(function(){
	if ($('.form-control').val() == "") {layer.alert('你是不是忘记填内容了？');return false;}
	if ($('#text').val() == "") {layer.alert('你是不是忘记填内容了？');return false;}
	$.getJSON("aiplay_api.php?aiplay="+$('.form-control').val(),function(result){ 
		if (result.code=="1") {
			var host = window.document.location.href;
			$('#content').html("<textarea id='url-res-txt' class='form-control' rows='5' placeholder='复制到QQ发布' data-clipboard-target='#url-res-txt'>"+host+result.url+"</textarea>");
		}else{
			layer.msg(result.msg);
		}
	});
});

var clipboard = new ClipboardJS('#url-res-txt');
clipboard.on('success',function(e){
	e.clearSelection();
	layer.msg('复制成功！');
});
clipboard.on('error',function(e){
	e.clearSelection();
	layer.msg('复制失败！');
});