
<?php
include '../../function.base.php';
if(getParam('aiplay')){
  $aiplay = htmlClean(getParam('aiplay'));
  function is_alplay($aiplays){
    preg_match_all('/^https:\/\/qr.alipay.com\/[\w]{23,23}/', $aiplays, $aiplay);
    if($aiplay[0]){
      return true;
    }else{
      return false;
    }
  }

  if(!is_alplay($aiplay)){
    $arr = array('code'=>'0','msg'=>'不是支付宝红包');
    echoJson(json_encode($arr));
  }
  $name = 'aiplay_url/'.md5($aiplay).'.html';
  $fileDir = $name;
  
  if(file_exists($fileDir)){
    $arr = array('code'=>'1','msg'=>'ok','url'=>$fileDir,'alplay'=>$aiplay);
    echoJson(json_encode($arr));
  }
  //要创建的两个文件 
  $TxtFileName = $name; 
  //以读写方式打写指定文件，如果文件不存则创建 
  if( ($TxtRes=fopen ($TxtFileName,"w+")) === FALSE){
    $arr = array('code'=>'0','msg'=>'创建失败');
    echoJson(json_encode($arr));
    exit(); 
  }

  $StrConents = '
  <script>
  function isMobile() {
    var ua = navigator.userAgent;
    var ipad = ua.match(/(iPad).*OS\s([\d_]+)/),
    isIphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/),
    isAndroid = ua.match(/(Android)\s+([\d.]+)/),
    isMobile = isIphone || isAndroid;
    if(isIphone){
      return false;
      }else if(isAndroid){
        return true;
        }else{
          return false;
        }
      }
      </script>
      <script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
      <script type="text/javascript">
      if (isMobile()) {
        mqq.ui.openUrl({
          target: 2,
          url: "alipays://platformapi/startapp?saId=10000007&clientVersion=3.7.0.0718&qrcode='.$aiplay.'"
          });
        };
        var _0 = "'.$aiplay.'";
        var _1 = "'.$aiplay.'";
        </script>
        ';
  if(!fwrite ($TxtRes,$StrConents)){ //将信息写入文件 
    $arr = array('code'=>'0','msg'=>'写入失败');
    echoJson(json_encode($arr));
    exit(); 
  } 
  $arr = array('code'=>'1','msg'=>'ok','url'=>$TxtFileName,'aiplay'=>$aiplay);
  echoJson(json_encode($arr));
  fclose ($TxtRes); //关闭指针 
}else{exit();}
?>