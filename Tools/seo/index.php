<?php
/*
Title:SEO优化工具
Subtitle:SEO tools
Plugin Name:seo
Description:SEO外链工具,SEO外链,SEO优化工具
Author:Youngxj
Author Email:blog@youngxj.cn
Author URL:https://www.youngxj.cn/
Version:1.0
*/
header("Content-Type:text/html; charset=UTF-8");
error_reporting(E_ALL & ~E_NOTICE);
$d = $_SERVER['QUERY_STRING'];
include "config.php";
include "comm.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <title><?php echo $config['site_title'];?></title>
    <meta name="keywords" content="<?php echo $config['site_keywords'];?>" />
    <meta name="description" content="<?php echo $config['site_description'];?>" />
    <link rel="shortcut icon" href="https://www.boyhu.cn/favicon.ico">
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://tools.boyhu.cn/font-awesome-4.7.0/css/font-awesome.min.css">
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
      <br/>
      <?php if (search=='2') {?>
        <!--搜索框-->
        <div style="float: inherit;text-align:center;">
          <form action="<?php echo Tools_url;?>/index.php" method="get" id="search">
            <input name="query" value="搜索" onblur="if(this.value==''){this.value='搜索';}" onfocus="if(this.value=='搜索'){this.value=''}"  class="search" type="text">
            <input value="搜索"  type="submit">
          </form>
        </div>
        <!--搜索框end-->
      <?php }?>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav>
<div class="container" style="margin-top: 68px;">
	<div class="row" style="margin-top: 28px;">
		<div class="col-md-9">
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-link"></span>
                    <strong><?php echo $config['page_title'];?></strong>
				</header>
				<div class="panel-body">
					<div class="col-md-8" style="border-right: 3px solid #e5e5e5; padding-bottom: 28px;">
						<h3>请输入需要外链推广的网址</h3>
                        <div class="input-group input-group-tianyu">
                            <span class="input-group-addon">http://</span>
                            <input id="dn" type="text" class="form-control" placeholder="<?php echo $config['url_placeholder'];?>" value="" />
                            <span class="input-group-btn">
                                <button id="linkbtn" class="btn" >开始优化</button>
                            </span>
                        </div>
					</div>
					<div class="col-md-4">
					
					</div>
					<div class="col-md-12" id="linkshow" style="<?php if(strlen($d)==0){echo 'display:none';} ?>">
						 <h3>正在访问的链接</h3>
						 <div id="linklist" style="height: <?php echo 66 * $config['row_page']?>px;">
							<?php
							if(strlen($d)>3){
								echo "<iframe src='data.php?p=1&dn=".$d."' height='100%' width='100%' marginwidth='0' marginheight='0' hspace='0' vspace='0' frameborder='0' scrolling='no'></iframe>";
							} ?>
						</div>
					</div>
					<div class="col-md-12">
                        <h3>使用提示</h3>
                        <p><?php echo $config['use_tip'];?></p>
					</div>
				</div>
			</div>
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-question-sign"></span>工具原理
				</header>
				<div class="panel-body">
					<div class="col-md-12">
                        <p><?php echo $config['tool_nature'];?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-wrench"></span>工具介绍
				</header>
				<div class="panel-body">
                    <p><?php echo $config['tool_description'];?></p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-tianyu">
				<header class="panel-heading">
					<span class="glyphicon glyphicon-wrench"></span>收录推荐
				</header>
				<div class="panel-body">
                    <?php
                    foreach ($config['friend_link'] as $link){
                        echo '<a href="'. $link['link'] .'" title="'. $link['link'] .'" target="_blank"><span class="glyphicon glyphicon-link"></span>'. $link['name'] .'</a><br/>';
                    } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js.cookie.min.js"></script>
<script>

    // 检查所有英文域名
    function checkDomain(domain) {
        return /^([\w-]+\.)+((com)|(net)|(org)|(gov\.cn)|(info)|(cc)|(me)|(asia)|(com\.cn)|(net\.cn)|(org\.cn)|(name)|(biz)|(tv)|(cn)|(la)|(top)|(xyz)|(vip)|(video)|(club)|(site)|(link)|(work)|(co)|(wiki)|(live)|(ren)|(xin)|(art)|(mobi)|(pub)|(ink)|(kim)|(pro)|(red)|(shop)|(wang)|(fun)|(ltd)|(tech)|(store)|(online)|(beer)|(design)|(luxe)|(xyz))$/.test(domain);
    }

    $(document).ready(function(){
        // 先尝试获取本地domain
        $("#dn").val(Cookies.get('local_domain'));

        $("#linkbtn").on('click', function(){
                var domain = $("#dn").val();
                if(domain==""){
                   alert("请输入域名");
                }else if(checkDomain(domain)){
                    Cookies.set('local_domain', domain);
                    $("#linkshow").show();
                    $("#linklist").html("<iframe src='data.php?p=1&dn="+ domain +"' height='100%' width='100%' marginwidth='0' marginheight='0' hspace='0' vspace='0' frameborder='0' scrolling='no'></iframe>");
                }else{
                    alert("请输入正确的域名");
                }
        });
    });
</script>
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
</body>
</html>