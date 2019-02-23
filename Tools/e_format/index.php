<?php
/*
Title:易语言代码高亮
Subtitle:e_Format
Plugin Name:e_format
Description:易语言代码高亮,易语言
Author:ForDream
Author Email:admin@ymsec.com
Author URL:ymsec.com
Version:1.1
*/
$CONF = require('../../function.config.php');
$self = $_SERVER['PHP_SELF'];
preg_match_all('/'.$CONF['config']['TOOLS_T'].'\/(.*)\//', $self, $name);
$id = $name[1][0];
include '../../header.php';?>
<link rel='stylesheet' id='highlight-css'  href='Css/highlight.css' type='text/css' media='all' />
<link rel='stylesheet' id='dw-css'  href='Css/dw.css' type='text/css' media='all' />
<script type='text/javascript' src='Scripts/slides.js'></script>
<script type='text/javascript' src='Scripts/jquery.qrcode.min.js'></script>
<script type='text/javascript' src='Scripts/wow.js'></script>
<script type='text/javascript' src='Scripts/jquery-ias.js'></script>
<script type='text/javascript' src='Scripts/jquery.lazyload.js'></script>
<script type='text/javascript' src='Scripts/tipso.js'></script>
<script type='text/javascript' src='Scripts/script.js'></script>
<script type='text/javascript' src='Scripts/flexisel.js'></script>
<script type='text/javascript' src='Scripts/fancybox.js'></script>
<script type='text/javascript' src='Scripts/comments-ajax-qt.js'></script>
<style>
a:hover,.top-menu a:hover,.show-more span,.cat-box .icon-cat,.single-content a,.single-content a:visited,#site-nav .down-menu > .current-menu-item > a,.entry-meta a,#site-nav .down-menu > .current-menu-item > a:hover,#site-nav .down-menu > li > a:hover,#site-nav .down-menu > li.sfHover > a, .cat-title .fa-bars,.widget-title .fa-bars,.at, .at a,#user-profile a:hover,#comments .fa-exclamation-circle, #comments .fa-check-square, #comments .fa-spinner, #comments .fa-pencil-square-o {
    color: #1e73be;
}

.sf-arrows > li > .sf-with-ul:focus:after,.sf-arrows > li:hover > .sf-with-ul:after,.sf-arrows > .sfHover > .sf-with-ul:after {
    border-top-color: #1e73be;
}

.thumbnail .cat,.format-cat,.format-img-cat {
    background: #1e73be;
    opacity: 0.8;
}

#login h1 a,.format-aside .post-format a,#searchform button,.li-icon-1,.li-icon-2,.li-icon-3,.new-icon, .title-l,.buttons a, .li-number, .post-format {
    background: #1e73be;
}

.entry-more a, .qqonline a, #login input[type='submit'], .log-zd {
    background: #1e73be;
}

.entry-more a {
    right: -1px;
}

.entry-more a:hover {
    color: #fff;
    background: #595959;
}

.entry-direct a:hover {
    border: 1px solid #1e73be;
}

#down a,.page-links span,.reply a:hover,.widget_categories a:hover,.widget_links a:hover,#respond #submit:hover,.callbacks_tabs .callbacks_here a,#gallery .callbacks_here a,#fontsize:hover,.single-meta li a:hover,.meta-nav:hover,.nav-single i:hover, .widget_categories a:hover, .widget_links a:hover, .tagcloud a:hover, #sidebar .widget_nav_menu a:hover, .gr-cat-title a, .group-tab-hd .group-current, .img-tab-hd .img-current {
    background: #1e73be;
    border: 1px solid #1e73be;
}

.comment-tool a, .link-all a:hover, .link-f a:hover, .ias-trigger-next a:hover, .type-cat a:hover {
    background: #1e73be;
    border: 1px solid #1e73be;
}

.login-t, .login-t a, .login-b, #site-nav .down-menu > .current-menu-item > a, #site-nav .down-menu > .current-menu-item > a:hover {
    background: #1e73be;
}

.entry-header h1 {
    border-left: 5px solid #1e73be;
    border-right: 5px solid #1e73be;
}

.slider-caption, .grid,icon-zan, .grid-cat, .entry-title-img {
    background: #1e73be;
    opacity: 0.9;
}

@media screen and (min-width: 900px) {
    #scroll li a:hover, .nav-search {
        background: #1e73be;
        border: 1px solid #1e73be;
    }

    .custom-more a, .cat-more a,.author-m a {
        background: #1e73be;
    }
}

@media screen and (max-width: 900px) {
    #navigation-toggle:hover,.nav-search:hover,.mobile-login a:hover,.nav-mobile:hover, {
        color: #1e73be;
    }
}

@media screen and (min-width: 550px) {
    .pagination span.current, .pagination a:hover {
        background: #1e73be;
        border: 1px solid #1e73be;
    }
}

@media screen and (max-width: 550px) {
    .pagination .prev,.pagination .next {
        background: #1e73be;
    }
}

.single-content h3, .single-content .directory {
    border-left: 5px solid #1e73be;
}

.page-links  a:hover span {
    background: #a3a3a3;
    border: 1px solid #a3a3a3;
}

.single-content a:hover {
    color: #555;
}

.format-aside .post-format a:hover,.cat-more a:hover,.custom-more a:hover {
    color: #fff;
    }</style><style>#content, .top-nav, #top-menu, #mobile-nav, #main-search, #search-main, .breadcrumb, .footer-widget {
        width: 1150px;
    }

    @media screen and (max-width: 1150px) {
        #content, #colophon, .breadcrumb, .footer-widget {
            width: 98%;
        }

        #top-menu {
            width: 98%;
        }

        .top-nav {
            width: 98%;
        }

        #main-search, #search-main, #mobile-nav {
            width: 98%;
        }

        .breadcrumb {
            width: 98%;
        }
    }
</style>

<div class="container clearfix">
  <div class="row row-xs">
      <div class="page-header">
        <h3 class="text-center h3-xs"><?php echo $title;?><small class="text-capitalize"><?php echo $subtitle;?></small></h3>
      </div>
<div id="content" class="site-content">
        
<div class="clear"></div>
<link rel="stylesheet" href="Css/ecode.css" type="text/css"/>
<script type="text/javascript" src="Scripts/ecode.js"></script>
<style>
#codeshow{overflow:hidden;width:100%;float:left;clear:left;margin-top:20px;}

</style>
</head>
<body>
<script type="text/javascript">
function run()
{
document.getElementById("codeshow_ecode_1").innerHTML=document.getElementById("code").value
trans("codeshow");
}
window.onload=run;
</script>
<textarea id="code" class="form-control" rows="20">
.版本 2

.子程序 GetProcessHandle, 整数型
.参数 lpProcessName, 文本型
.局部变量 hSnapShot, 整数型
.局部变量 dwRet, 整数型
.局部变量 prHandle, 整数型
.局部变量 pe32, PROCESSENTRY32

hSnapShot ＝ CreateToolhelp32Snapshot (#TH32CS_SNAPALL, 0)
.如果真 (hSnapShot ＝ 0)
    信息框 (“ITool.Club工具箱”, 0, )
    返回 (dwRet)
.如果真结束
pe32.dwSize ＝ 1024
prHandle ＝ Process32First (hSnapShot, pe32)
.判断循环首 (prHandle ≠ 0)
    .判断开始 (到文本 (pe32.szExeFile) ＝ lpProcessName)
        dwRet ＝ pe32.th32ProcessID
        跳出循环 ()
    .默认
        prHandle ＝ Process32Next (hSnapShot, pe32)
    .判断结束

.判断循环尾 ()
CloseHandle (hSnapShot)
返回 (dwRet)</textarea>
<br/>
<input class="btn btn-success" type="button" value="解析代码" onclick="javascript:run()"/>
<div id="codeshow" >
<div id="codeshow_ecode_1" >
.版本 2

.子程序 GetProcessHandle, 整数型
.参数 lpProcessName, 文本型
.局部变量 hSnapShot, 整数型
.局部变量 dwRet, 整数型
.局部变量 prHandle, 整数型
.局部变量 pe32, PROCESSENTRY32

hSnapShot ＝ CreateToolhelp32Snapshot (#TH32CS_SNAPALL, 0)
.如果真 (hSnapShot ＝ 0)
    信息框 (“ITool.Club工具箱”, 0, )
    返回 (dwRet)
.如果真结束
pe32.dwSize ＝ 1024
prHandle ＝ Process32First (hSnapShot, pe32)
.判断循环首 (prHandle ≠ 0)
    .判断开始 (到文本 (pe32.szExeFile) ＝ lpProcessName)
        dwRet ＝ pe32.th32ProcessID
        跳出循环 ()
    .默认
        prHandle ＝ Process32Next (hSnapShot, pe32)
    .判断结束

.判断循环尾 ()
CloseHandle (hSnapShot)
返回 (dwRet)
</div>
</div>
</div>
    </div>
</div>
<br/>
<hr>
<?php include '../../footer.php';?>


