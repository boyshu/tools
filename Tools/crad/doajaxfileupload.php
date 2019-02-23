<?php 
   require('upload.class.php');
    $upload_handler = new UploadHandler(
        $formName = 'photo',//表单名
        $fileName = time(). rand(100000, 999999),//文件名
        './aa/'//上传目录
    );
    $imgResult = $upload_handler->uploadFile();//上传文件
    if($imgResult){
      echo($imgResult['fileName'].'.'.$imgResult['ext']);//返回的信息
    }else{
      echo 'demo.png';
    }
    



