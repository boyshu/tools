<?php
/*
Title:制作QQ透明名片工具
Subtitle:QQ crad tools
Plugin Name:crad
Description:QQ透明名片工具,制作QQ透明名片工具,QQ透明名片
Author:Youngxj
Author Email:blog@youngxj.cn
Author URL:https://www.youngxj.cn/
Version:1.0
*/
include './config.php';
 if(!empty($_POST)){
/**
// +----------------------------------------------------------------------+
// | 程序源码首发博客地址：https://www.if77.cn                            |
// +----------------------------------------------------------------------+
// | 请保留相关版权  谢谢各位站长支持                                     |
// +----------------------------------------------------------------------+
// | 作者：奇乐云                                                         |
// +----------------------------------------------------------------------+
// | 在线上传QQ透明名片工具更新地址：https://www.if77.cn/yuanma/qqmp.html |
// +----------------------------------------------------------------------+
//
 * 发送post请求
 * @param string $url 请求地址
 * @param array $post_data post键值对数据
 * @return string
 */
function send_post($url, $post_data) {
  
  $postdata = http_build_query($post_data);
  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => 'Content-type:application/x-www-form-urlencoded',
      'content' => $postdata,
      'timeout' => 15 * 60 // 超时时间（单位:s）
    )
  );
  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  
  return $result;
}
//使用方法
$post_data = array(
  'user' => trim($_POST['user']),
  'imgsrc' => trim($_POST['imgsrc']),
  'pws'=> trim($_POST['pws'])
);
$res = send_post($config['host']."api.php", $post_data);
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
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/amazeui.min.css" /> 
  <link rel="stylesheet" href="./css/style.css" /> 
  <link rel="stylesheet" type="text/css" href="http://tools.boyhu.cn/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="https://www.boyhu.cn/favicon.ico">
  <script type="text/javascript" src="http://tools.boyhu.cn/js/jquery.min.js"></script>
  <script type="text/javascript" src="http://tools.boyhu.cn/js/clipboard.min.js"></script>
  <script type="text/javascript" src="http://tools.boyhu.cn/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://tools.boyhu.cn/css/layer/layer.js"></script>
  <script type="text/javascript" src="http://tools.boyhu.cn/js/main.js"></script>
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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">导航按钮</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://tools.boyhu.cn"><img src="http://tools.boyhu.cn/images/logo.png" alt="YoungxjTools" class="logo" width="135px"></a>
    </div><!-- /.navbar-header -->
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
       <!--自定义导航目录-->
        <li><a href="http://tools.boyhu.cn/about.php" target="_blank">反馈建议</a></li>
        <li><a href="http://tools.boyhu.cn/Tools/crad/query.php" target="_blank">进度查询</a></li>
      <br/>
          </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav>
  <section class="am-g about"> 
  <form  id="loginForm" name="loginForm">
   <div class="am-container am-margin-vertical-xl"> 
    <div class="am-u-md-12 am-padding-vertical"> 
      <?php 
      $json = file_get_contents($config['host']."sjcx.php");
      $array = json_decode($json,true);
      $num = $array['v1']+$array['v2']+$array['v3']+$array['v4'];
      echo '<div class="well well-sm">数据展示：<span class="label label-primary">总提交：'. $num .'</span> <span class="label label-success">已完成：'.$array['v2'].'</span> <span class="label label-info">等待处理：'.$array['v1'].'</span> <span class="label label-warning">异常：'.$array['v4'].'</span> <span class="label label-danger">失败：'.$array['v3'].'</span>      一般情况下10S内处理一个QQ!</div>';
       ?>
     <div class="am-input-group  am-margin-bottom-sm"> 
      <span class="am-input-group-label"><li class="glyphicon glyphicon-user"></li> 账号</span> 
      <input class="am-form-field" type="url" id="user" name="user" onkeyup="value=value.replace(/[^\d]/g,'')"/> 
     </div> 
     <div class="am-input-group  am-margin-bottom-sm"> 
      <span class="am-input-group-label"><li class="glyphicon glyphicon-eye-close"></li> 密码</span> 
      <input class="am-form-field" type="Password" id="pws" name="pws" /> 
     </div> 
     <div class="am-input-group  am-margin-bottom-sm"> 
      <span class="am-input-group-label"><li class="glyphicon glyphicon-heart-empty"></li> 图片</span> 
      <input class="am-form-field" type="text" id="imgsrc" name="imgsrc"/> 
     </div> 

     <button type="button" id="start" class="am-btn am-btn-primary  am-btn-block am-radius" >启动程序</button>
     
    </form>
     <form id= "uploadForm">  
         <button class="am-btn am-btn-success am-btn-block am-radius">上传自定义图片 <input id="wait" class="file" type="file" name="photo" onchange="showPreview(this);doUpload()"/></button> 
         
         <img id="portrait" src="" width="100%" height="100%" style="display:none" > 
    </form> 
     </br>
     <div class="alert alert-danger" role="alert">下方的图片为用户提交最新透明名片图片,如若发现上传色情,违规图片.本平台立即把相应证据及上传IP等资料提交到网警！</div>
    <!-- 缩约图 -->
     <div class="row">
     <?php 
            //遍历目录下文件方法
      function printdir($dir)
      {
        $files = array();
        //opendir() 打开目录句柄
        if($handle = @opendir($dir)){
        //readdir()从目录句柄中（resource，之前由opendir()打开）读取条目,
        // 如果没有则返回false
          while(($file = readdir($handle)) !== false){//读取条目
            if( $file != ".." && $file != "."){//排除根目录
              if(is_dir($dir . "/" . $file)) {//如果file 是目录，则递归
                $files[$file] = printdir($dir . "/" . $file);
              } else {
                //获取文件修改日期
                $filetime = date('Y-m-d H:i:s', filemtime($dir . "/" . $file));
                //文件修改时间作为健值
                $files[$filetime] = $file;
              }
            }
          }
          @closedir($handle);
          return $files;
        }
        
      }
       //根据修改时间对数组排序
      function arraysort($aa) {
        if( is_array($aa)){
          krsort($aa);
          foreach($aa as $key => $value) {
            if (is_array($value)) {
              $arr[$key] = arraysort($value);
            } else {
              $arr[$key] = $value;
            }
          }
          return $arr;
        } else {
          return $aa;
        }
      }


      $dir = "./aa";
      //输出 /php 下所有文件
      $sj = arraysort(printdir($dir));
      $i = 1;
      foreach ($sj  as $key => $value) {
        if($i>6){
        break ;
        }
        $i++;
        echo '<div class="col-sm-3 col-md-2" >
              <a class="thumbnail" style="overflow: hidden;"  onclick="zhix(this)">
                  <img class="img-v" style="margin-top : -150px" src="aa/'.$value.'" alt="IF77.cn">
              </a>
          </div>';
      }
      ?>
</div>
    <!-- END -->
     
  </div>
  <div class="am-u-md-12 am-u-sm-centered am-margin-vertical music-tips">
  <h4><b>使用方法：</b></h4>
  <p>
    输入账号密码 <b>上传自定义图片或选择推荐图片</b> 即可
  </p>
  <blockquote>
    <p>
      <b>完成时间根据当前任务量决定,如果没有效果请耐心等待几分钟!无需重复提交！！！</b>
    </p>
    <p>
      <b>请勿开启账号设备锁和错误尺寸图片，否则失败！</b>
    </p>
  </blockquote>
  </div>
     <hr>
<br><br>
    <!--footer start-->
<footer class="footer text-center">
	<div>
    <!--切勿商用,切勿改版权,后果自付-->
   <a target="_blank" href="http://tools.boyhu.cn/about.php" >关于我们</a> - <a rel="nofollow" href="http://tools.boyhu.cn">工具首页</a> - <a href="http://tools.boyhu.cn/log.php" target="_blank">运营历程</a>
            <br>
            Copyright © 2017-2019 <a href="https://www.boyhu.cn" target="_blank">胡家小子</a>. All
            Rights Reserved.
  </div>
  <div class="hitokoto">
   <script type="text/javascript" src="https://api.yum6.cn/djt/index.php?encode=js"></script>
   <script>binduyan()</script>
 </div>
<div id="f_list">
  <a rel="noopener noreferrer" target="_blank" class="btn qq-qun copy-btn js-tip" title="QQ群" href="//shang.qq.com/wpa/qunwpa?idkey=38f498b29d7724e3c9930e669810e59f07d91d931516a450ee84a3eee212ee0c" original-title="QQ群: 540495927"><i class="fa fa-qq "></i></a>
  <a rel="noopener noreferrer" target="_blank" class="btn weibo js-tip" href="http://weibo.com/huyu4013" title="微博"><i class="fa fa-weibo"></i></a>
      <a rel="noopener noreferrer" target="_blank" class="btn github js-tip" href="https://gitee.com/youngxj0/YoungxjTools"><i class="fa fa-github-alt"></i></a>
  <a class="btn gotop js-tip" href="javascript:gotop();" title="返回顶部" id="gotop"><i class="fa fa-arrow-up"></i></a>
</div>
<style type="text/css">
#welcome{width:200px;background:#fff;border:1px solid #eee;color:#000;font-size:14px;opacity:0.7;filter:alpha(opacity=70);padding:10px 20px;position:fixed;right:10px;bottom:25px;z-index:99999;box-shadow:rgb(136,123,123) 3px 2px 5px;opacity:1;}
#welcome h4{color:#F00; line-height:30px; padding:0!important;margin:0!important;text-align:left;}
.closebox{float:center;text-align:center;margin-top:10px;}
</style>
</footer>
<script type="text/javascript" src="./js/index.js"></script>
<script src="//cdn.bootcss.com/amazeui/2.3.0/js/amazeui.min.js"></script>
</body>
</html>