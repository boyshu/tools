<?php
/*
Title:全网VIP视频解析
Subtitle:VIP Video Analysis
Plugin Name:vip
Description:全网视频,全网视频解析,VIP视频免费看,VIP视频解析
Author:Youngxj
Author Email:blog@youngxj.cn
Author URL:https://www.youngxj.cn/
Version:1.0
*/
$CONF = require('../../function.config.php');
$self = $_SERVER['PHP_SELF'];
preg_match_all('/'.$CONF['config']['TOOLS_T'].'\/(.*)\//', $self, $name);
$id = $name[1][0];
include '../../header.php';?>

<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
<h3 class="text-muted" align="center">全网VIP视频解析</h3>
<hr>
<table class="table table-bordered">
<tbody>
<div class="col-md-14 column">
  <div class="panel panel-default">
    <div id="kj" class="panel-body">
      <iframe src="ks.html"id="player"width="100%"height="600px"allowTransparency="true"allowfullscreen="true"frameborder="0"scrolling="no"></iframe>
    </div>
  </div>
</div>
<tr>
  </script>
  <br>
  <div class="col-md-14 column">
  <form method="post" id="khname">
  <div class="input-group" style="width: 100%;"> <span class="input-group-addon input-lg" style="width: 80px; ">选择接口</span>
    <select class="form-control input-lg" id="jk">
      <option value="http://jx.du2.cc/?url=" selected="">万能解析接口1【稳定通用】</option> 
      <option value="http://jx.ovov.cc/?url=">万能解析接口2【稳定通用】</option>
	  <option value="http://jx.618ge.com/?url=">万能解析接口3【稳定通用】</option>
	  <option value="http://jx.aeidu.cn/index.php?url=">万能解析接口4【稳定通用】</option> 
    </select>
  </div>
  <br>
  <div class="input-group" style="width: 100%;"> <span class="input-group-addon input-lg" style="width: 80px;">播放地址</span>
    <input class="form-control input-lg" type="search" placeholder="输入视频页面网址" id="url">
  </div>
  <br>
  <div>
    <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onClick="dihejk()">点击播放</button>
  </div>
  </br>
<script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>
<?php include '../../footer.php';?>