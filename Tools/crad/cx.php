<?php 
 if(!empty($_POST)){
/**
 * 发送get请求
 * @param string $url 请求地址
 * @return string
 */
function curl_get_https($url){
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $tmpInfo = curl_exec($curl);     //返回api的json对象
    //关闭URL请求
    curl_close($curl);
    return $tmpInfo;    //返回json对象
}
$res = curl_get_https("http://mp.if77.cn/ddcx.php?user=".trim($_POST['user']));
echo $res;
exit();
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>制作QQ透明名片工具 - 码农的在线工具箱</title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<meta name="keywords" content="QQ透明名片,在线QQ透明名片,QQ修改透明名片,QQ名片工具" />
<meta name="description" content="在线上传QQ透明名片工具，为大家提供免费在线上传修改QQ透明名片网页版工具！" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://tools.boyhu.cn/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="https://www.boyhu.cn/favicon.ico">
<script type="text/javascript" src="http://tools.boyhu.cn/js/jquery.min.js"></script>
<script type="text/javascript" src="http://tools.boyhu.cn/js/clipboard.min.js"></script>
<script type="text/javascript" src="http://tools.boyhu.cn/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://tools.boyhu.cn/css/layer/layer.js"></script>
<script type="text/javascript" src="http://tools.boyhu.cn/js/main.js"></script>
<link rel="stylesheet" href="./css/amazeui.min.css" />
<link rel="stylesheet" href="./css/style.css" />
<style type="text/css">
  /*正文样式*/
  body{font-family: "HanHei SC","PingHei","PingFang SC","微软雅黑","Helvetica Neue","Helvetica","Arial",sans-serif;font-size: 13px;line-height: 1.846;color: #666666;background-image: url(/images/background.png)}
  /*主体头部空*/
  .clearfix{margin-top:40px;}
  /*返回内容设为隐藏*/
  .form-controls{display: none;}
  #form1{text-align: center;display: none;}
  .Explain{padding-top: 10px;}
  /*首行缩进2个字符*/
  .Explain dd{text-indent: 2em;}
  /*主体底部边距*/
  .clearfix{min-height:550px;}
  /*表格文字缩小*/
  .position{font-size: xx-small;}
  /*表格文字自动换行*/
  .table-bordered{word-break:break-all; word-wrap:break-all;}
  .tooltip{font-size:12px;position:absolute;padding:5px;z-index:100000;opacity:.8;font-family:Microsoft Yahei}
  .tipsy-arrow{position:absolute;width:0;height:0;line-height:0;border:6px dashed #000;top:0;left:20%;margin-left:-5px;border-bottom-style:solid;border-top:0;border-left-color:transparent;border-right-color:transparent}
  .tipsy-arrow-n{border-bottom-color:#6F8EC5}
  .tipsy-inner{background-color:#6F8EC5;color:#FFF;max-width:200px;padding:5px 8px 4px 8px;text-align:center;border-radius:3px}
  @media screen and (min-width: 760px){
    .header_nav{display:none;}
  }
  #f_list{position:fixed;right:30px;bottom:60px;transition:bottom ease .3s;z-index:9;font-size:18px;text-align:center;line-height:36px}
  #f_list a.btn{width:36px;height:36px;display:block;text-decoration:none;color:#999;border-radius:5px}
  @media screen and (max-width: 720px) { 
    #f_list {right:0px;} 
  }
  .centent{min-height:500px;}
  /*logo居中*/
  @media screen and (min-width: 768px) { 
    .navbar-header{position: absolute;top: 50%;transform: translateY(-50%);}
  }
  .search{padding-left:5px;}
</style>
</head>
<body>
<!--[if lt IE 9]>
<div class="notice chromeframe">您的浏览器版本<strong>很旧很旧</strong>，为了正常地访问网站，请升级您的浏览器 <a target="_blank"
href="http://browsehappy.com">立即升级</a>
</div>
<![endif]-->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">导航按钮</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="http://tools.boyhu.cn"><img src="http://tools.boyhu.cn/images/logo.png" alt="YoungxjTools" class="logo" width="135px"></a> </div>
    <!-- /.navbar-header -->
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <!--自定义导航目录-->
        <li><a href="http://tools.boyhu.cn/about.php" target="_blank">反馈建议</a></li>
        <br/>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
<section class="am-g about">
  <form  id="loginForm" name="loginForm">
    <div class="am-container am-margin-vertical-xl">
    <div class="am-u-md-12 am-padding-vertical">
    <div class="am-input-group  am-margin-bottom-sm"> <span class="am-input-group-label">账号</span>
      <input class="am-form-field" type="url" id="user" name="user" onKeyUp="value=value.replace(/[^\d]/g,'')"/>
    </div>
    <button type="button" id="start" class="am-btn am-btn-primary  am-btn-block am-radius" >查询</button>
    <br />
  </form>
  <div class="table-responsive">
    <table class="table table-vcenter table-condensed table-striped">
      <thead>
        <tr>
          <th class="hidden-xs"> id </th>
          <th> 账号 </th>
          <th class="hidden-xs"> 时间 </th>
          <th> 状态 </th>
        </tr>
      </thead>
      <tbody id="list">
      </tbody>
    </table>
  </div>
  </div>
  </div>
</section>
<script src="./js/jquery.min.js"></script>
<script type="text/javascript">
//时间戳转正常时间
function formatUnixtimestamp (unixtimestamp){
        var unixtimestamp = new Date(unixtimestamp*1000);
        var year = 1900 + unixtimestamp.getYear();
        var month = "0" + (unixtimestamp.getMonth() + 1);
        var date = "0" + unixtimestamp.getDate();
        var hour = "0" + unixtimestamp.getHours();
        var minute = "0" + unixtimestamp.getMinutes();
        var second = "0" + unixtimestamp.getSeconds();
        return year + "-" + month.substring(month.length-2, month.length)  + "-" + date.substring(date.length-2, date.length)
            + " " + hour.substring(hour.length-2, hour.length) + ":"
            + minute.substring(minute.length-2, minute.length) + ":"
            + second.substring(second.length-2, second.length);
 }


    $('#start').click(function(){
            var user = $("#user").val().trim();
                if(user == null || user == ""||user.length<5){
                    alert("账号错误");
                    return false;
                }
            $.ajax({
                cache:true,//保留缓存数据
                type:"POST",//为post请求
                url:"cx.php",//这是我在后台接受数据的文件名
                data:$('#loginForm').serialize(),//将该表单序列化
                dataType: "json",
                async:false,//设置成true，这标志着在请求开始后，其他代码依然能够执行。如果把这个选项设置成false，这意味着所有的请求都不再是异步的了，这也会导致浏览器被锁死
                error:function(request){//请求失败之后的操作
                    return;
                },
                success:function(data){//请求成功之后的操作

              $('#list tr:gt(0)').remove();//删除之前的数据
                var s = '';
                for (var i = 0; i < data.length-1; i++) {
                  var sj = null;
                  if(data[i].zx==1){
                      sj = "<span class='label label-default'>正在处理</span>"
                  }else if(data[i].zx==2){
                      sj = "<span class='label label-success'>上传成功</span>"
                  }else if(data[i].zx==3){
                      sj = "<span class='label label-danger'>上传失败</span>"
                  }else{
                      sj = "<span class='label label-warning'>遇到错误</span>"
                  }
                  s += '<tr><td>' + data[i].id + '</td><td>' + data[i].user + '</td><td>' + formatUnixtimestamp(data[i].time) + '</td><td>'
                    +  sj+ '</td></tr>';
                }
                $('#list').append(s);

                }
            });
        })



  </script>
<br>
<br>
<!--footer start-->
<footer class="footer text-center">
  <div>
    <!--切勿商用,切勿改版权,后果自付-->
    <a target="_blank" href="http://tools.boyhu.cn/about.php" >关于我们</a> - <a rel="nofollow" href="http://tools.boyhu.cn">工具首页</a> - <a href="http://tools.boyhu.cn/log.php" target="_blank">运营历程</a> <br>
    Copyright © 2017-2019 <a href="https://www.boyhu.cn" target="_blank">胡家小子</a>. All
    Rights Reserved. </div>
  <div class="hitokoto">
    <script type="text/javascript" src="https://api.yum6.cn/djt/index.php?encode=js"></script>
    <script>binduyan()</script>
  </div>
  <div id="f_list"> <a rel="noopener noreferrer" target="_blank" class="btn qq-qun copy-btn js-tip" title="QQ群" href="//shang.qq.com/wpa/qunwpa?idkey=38f498b29d7724e3c9930e669810e59f07d91d931516a450ee84a3eee212ee0c" original-title="QQ群: 540495927"><i class="fa fa-qq "></i></a> <a rel="noopener noreferrer" target="_blank" class="btn weibo js-tip" href="http://weibo.com/huyu4013" title="微博"><i class="fa fa-weibo"></i></a> <a rel="noopener noreferrer" target="_blank" class="btn github js-tip" href="https://gitee.com/youngxj0/YoungxjTools"><i class="fa fa-github-alt"></i></a> <a class="btn gotop js-tip" href="javascript:gotop();" title="返回顶部" id="gotop"><i class="fa fa-arrow-up"></i></a> </div>
  <style type="text/css">
#welcome{width:200px;background:#fff;border:1px solid #eee;color:#000;font-size:14px;opacity:0.7;filter:alpha(opacity=70);padding:10px 20px;position:fixed;right:10px;bottom:25px;z-index:99999;box-shadow:rgb(136,123,123) 3px 2px 5px;opacity:1;}
#welcome h4{color:#F00; line-height:30px; padding:0!important;margin:0!important;text-align:left;}
.closebox{float:center;text-align:center;margin-top:10px;}
</style>
</footer>
<script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script type="text/javascript" src="bofan.js"></script>
<script type="text/javascript" src="kuaishou.js"></script>
<script type="text/javascript" src="shuaks.js"></script>
<script src="//www.qqsuu.cn/cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script src="//www.baidu.com/js/2.0/js/bootstrap.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
</body>
</html>