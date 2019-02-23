    function doUpload() {
      var formData = new FormData($("#uploadForm")[0]);
      $.ajax({
        url: 'doajaxfileupload.php',
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(returndata) {
          document.getElementById("imgsrc").value = window.location.href + "aa/" + returndata;
        },
        error: function(returndata) {
          alert(returndata);
        }
      });
    }

    function showPreview(source) {
      var file = source.files[0];
      if (window.FileReader) {
        var fr = new FileReader();
        fr.onloadend = function(e) {
          document.getElementById("portrait").src = e.target.result;
          document.getElementById("portrait").style.display = "block";
        };
        fr.readAsDataURL(file);
      }
    }

    function zhix(obj) {
      var aa = $(obj).children("img")[0].src;
      $("#imgsrc").val(aa);
    }
    $('#start').click(function() {
      var user = $("#user").val().trim();
      var pws = $("#pws").val().trim();
      var imgsrc = $("#imgsrc").val().trim();
      if (user == null || user == "" || user.length < 5) {
        alert("账号错误");
        return false;
      } else if (pws == "" || pws == null || pws.length < 6) {
        alert("密码错误");
        return false;
      } else if (imgsrc == "" || imgsrc == null) {
        alert("不能填写空图片");
        return false;
      }
      $.ajax({
        cache: true,
        //保留缓存数据
        type: "POST",
        //为post请求
        url: "index.php",
        //这是我在后台接受数据的文件名
        data: $('#loginForm').serialize(),
        //将该表单序列化
        async: false,
        //设置成true，这标志着在请求开始后，其他代码依然能够执行。如果把这个选项设置成false，这意味着所有的请求都不再是异步的了，这也会导致浏览器被锁死
        error: function(request) { //请求失败之后的操作
          return;
        },
        success: function(data) { //请求成功之后的操作
          alert("您的上传信息已成功提交,无需重复提交信息！ 请根据待处理数据信息自行判断您的等待时长！");
        }
      });
    })