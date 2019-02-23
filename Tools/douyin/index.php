<?php
/*
Title:抖音无水印视频解析
Subtitle:Video Analysis
Plugin Name:douyin
Description:抖音视频,抖音解析,抖音解析工具
Author:Youngxj
Author Email:blog@youngxj.cn
Author URL:https://www.youngxj.cn/
Version:1.1
*/
$CONF = require('../../function.config.php');
$self = $_SERVER['PHP_SELF'];
preg_match_all('/'.$CONF['config']['TOOLS_T'].'\/(.*)\//', $self, $name);
$id = $name[1][0];
include '../../header.php';?>
<div class="container">
    <div class="jumbotron">
        <h1>抖音短视频在线解析</h1>
        <p>让短视频回到最初的模样~
      <hr><b>帮助说明：</b>
      	 <br>【单视频】右下角分享 > 复制链接
         <br>【用户主页】我 > 头像右方分享主页（若是他人主页，则在右上方） > 以链接形式分享到微信/qq/微博 > 打开相应软件后复制链接
         <br>视频出现错误，重试即可！
      </p>
    </div>
    <input class="form-control" type="text" id="url" placeholder="请将APP里复制的视频链接粘贴到这里"><br>
    <button type="submit" class="btn btn-success btn-lg btn-block" id="magic">回到最初！</button><br>
    <div id="str"></div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#magic').click(function(){
            layer.load(1, {shade: [0.1,'#fff']});
            $.ajax({
                type: "POST",
                url: "https://api.douyin.qlike.cn/parse.php?app=douyin",
                dataType: "html",
                data:"url="+$.trim($("#url").val()),
                success: function(data){
                    layer.closeAll('loading');
                    $("#str").html(data);
                },
                error: function(error) {
                    layer.closeAll('loading');
                    layer.msg('出错了，请再试一下！');
                }
            });
        });
    });
</script>
<?php include '../../footer.php';?>