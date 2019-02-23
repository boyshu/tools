<?php
include 'header.php';
$tools_up = new Model("tools_list");
$tools_navsort=$tools_up->query('select distinct tools_type from tools_list ORDER BY `tools_list`.`tools_type` DESC');
$id=getParam('id');
if($id){
  $tools_up_id = $tools_up->find(array('id'=>$id),"","*");
}
if(getParam('domain') == 'update'){
  $config = array(
    "title" => getParam('title'),
    "subtitle" => getParam('subtitle'),
    "keyword" => getParam('keyword'),
    "tools_url" => getParam('tools_url'),
    "tools_img" => getParam('tools_img'),
    "tools_type" => getParam('tools_type'),
    "tools_number" => getParam('tools_number'),
    "tools_love" => getParam('tools_love'),
    "priority" => getParam('priority'),
    "type" => getParam('type'),
    "state" => getParam('state'),
    "tools_author" => getParam('tools_author'),
  );
  $tools_ups = $tools_up->update(array('id'=>$id),$config);
  if($tools_ups){
    echo '<script type="text/javascript">alert("修改成功");window.location.href="tools_list.php";</script>'; 
  }else{
    echo "<script>alert('失败');</script>";
  }
}
?>
<?php ?>
<div id="content">
  <div id="content-header">
    <h1><?php echo $tools_up_id['title'];?></h1>
  </div>
  <div id="breadcrumb">
    <a href="index.php" title="" class="tip-bottom" data-original-title="Go to Home"><i class="fa fa-home"></i> Home</a>
    <a href="#" class="current"><?php echo $tools_up_id['title'];?></a>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="fa fa-cog"></i>									
          </span>
          <h5><?php echo $tools_up_id['title'];?></h5>
        </div>
        <div class="widget-content nopadding">
          <form action="tools_up.php?domain=update" method="post" class="form-horizontal" name="setting">
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">id：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-drivers-license-o"></i></span>
                      <input type="text" placeholder="id" class="form-control" name="id" id="id" value="<?php echo $tools_up_id['id'];?>" readonly="readonly">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">工具标题：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-file-word-o"></i></span>
                      <input type="text" placeholder="工具标题" class="form-control" name="title" id="title" value="<?php echo $tools_up_id['title'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">工具简介：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-wrench"></i></span>
                      <input type="text" placeholder="工具简介" class="form-control" name="subtitle" id="subtitle" value="<?php echo $tools_up_id['subtitle'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">工具作者：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-wrench"></i></span>
                      <input type="text" placeholder="工具作者" class="form-control" name="tools_author" id="tools_author" value="<?php echo $tools_up_id['tools_author'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">工具关键词：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                      <input type="text" placeholder="工具关键词" class="form-control" name="keyword" id="keyword" value="<?php echo $tools_up_id['keyword'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">工具地址：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-external-link"></i></span>
                      <input type="text" placeholder="地址" class="form-control" name="tools_url" id="tools_url" value="<?php echo $tools_up_id['tools_url'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">图片地址：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                      <input type="text" placeholder="图片地址" class="form-control" name="tools_img" id="tools_img" value="<?php echo $tools_up_id['tools_img'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">类别：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <select class="form-control" name="tools_type" id="select_form">
                      <?php foreach($tools_navsort as $age){?>
                      <option <?php if($tools_up_id['tools_type']==$age['tools_type']){echo 'selected="selected"';}?>><?php echo $age['tools_type'];?></option>
                      <?php }?>
                      <option id="custom" value="custom">自定义类别</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group" id="custom_form" style="display:none;">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">自定义类别：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-sitemap"></i></span>
                      <input type="text" placeholder="类别" class="form-control" id="tools_type" value="<?php echo $tools_up_id['tools_type'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script src="js/jquery.min.js"></script>
            <script>
              $("#select_form").click(function(){
                if($("#select_form").val()=='custom'){
                  $("#select_form").removeAttr("name");
                  $("#tools_type").attr("name",'tools_type');
                  $("#custom_form").show();
                }else{
                  $("#tools_type").removeAttr("name");
                  $("#select_form").attr("name",'tools_type');
                  $("#custom_form").hide();
                }
              });
            </script>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">使用次数：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-send"></i></span>
                      <input type="text" placeholder="使用次数" class="form-control" name="tools_number" id="tools_number" value="<?php echo $tools_up_id['tools_number'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">喜欢：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-heart"></i></span>
                      <input type="text" placeholder="喜欢" class="form-control" name="tools_love" id="tools_love" value="<?php echo $tools_up_id['tools_love'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">排行：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-signal"></i></span>
                      <input type="text" placeholder="排行(0-99)" class="form-control" name="priority" id="priority" value="<?php echo $tools_up_id['priority'];?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">类型：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <input type="radio"  name="type" value='1' id="type_off" <?php if($tools_up_id['type']=='1'){echo 'checked="checked"';}?>>外站
                      <input type="radio"  name="type" value='0' id="type_on" <?php if($tools_up_id['type']=='0'){echo 'checked="checked"';}?>>内站
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">状态：</label>
              <div class="col-sm-9 col-md-9 col-lg-10">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-sm">
                      <input type="radio"  name="state" value='1' id="state_off" <?php if($tools_up_id['state']=='1'){echo 'checked="checked"';}?>>隐藏
                      <input type="radio"  name="state" value='0' id="state_on" <?php if($tools_up_id['state']=='0'){echo 'checked="checked"';}?>>显示
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" value="修改" class="btn btn-primary" id="open-dialog">
            </div>
          </form>
        </div>
      </div>						
    </div>
  </div>

  <?php include 'footer.php';?>