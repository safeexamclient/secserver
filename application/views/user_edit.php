    <!-- container begin -->
    <div class="container bs-docs-container">
    
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">企业注册</h1>
          <div class="breadcrumb">
            欢迎您注册成为考试主办方，请填写相关信息           
          </div>    
        </div>
      </div>

      <div class="row"> 
        
        <div class="col-lg-12">
        
          <div style="min-height: 360px; width:100%;">

            <form method="post" name="form1" id="form1" action="/user/signup_do">
                <table border="0" width="500px" style="min-height: 300px">
                  <tr>
                    <td width="100px">登录账号：</td>
                    <td>
                      <input type="text" id="user_logname" name="user_logname" value="" style="width: 240px;" maxlength="20" placeholder="3-20位小写字母或数字"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>登录密码：</td>
                    <td>
                      <input type="text" id="user_password" name="user_password" value="" style="width: 240px;" maxlength="20" placeholder="8-20位字母或数字"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>企业名称：</td>
                    <td>
                      <input type="text" id="user_name" name="user_name" value="" style="width: 320px;" maxlength="20" placeholder="示例：腾讯课堂、湖南大学"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>联系人手机：</td>
                    <td>
                      <input type="text" id="user_mobile" name="user_mobile" value="" style="width: 240px;" maxlength="11" placeholder="示例：13902508765"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>联系人邮箱：</td>
                    <td>
                      <input type="text" id="user_email" name="user_email" value="" style="width: 240px;" maxlength="50" placeholder="示例：user@qq.com"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>
                      <input type="button" id="btn_sub" style="width: 80px;" value="提交注册"></td>
                  </tr>
                </table>
            </form>
            
            <hr>
            <a href="/user/signin">企业登录</a> &nbsp; &nbsp; 
            <a href="/user/forget">忘记密码</a>

          </div>

          <br>                   
         
        </div>

      </div>

    </div>
    <!-- container end -->

    <script>
      //alert('13d');
      $("#btn_sub").click(function(){ 
        
        if($('#user_logname').val().length < 3){
          alert('[ 登录账号 ] 输入有误，至少3个字符，请重新输入');
          $('#user_logname').focus();
          return false;
        }
        if($('#user_password').val().length < 8){
          alert('[ 登录密码 ] 输入有误，至少8个字符，请重新输入');
          $('#user_password').focus();
          return false;
        }
        if($('#user_name').val().length < 2){
          alert('[ 企业名称 ] 输入有误，至少2个字符，请重新输入');
          $('#user_name').focus();
          return false;
        }
        if($('#user_mobile').val().length != 11){
          alert('[ 联系人手机 ] 输入有误，需要11位数字，请重新输入');
          $('#user_mobile').focus();
          return false;
        }
        if($('#user_email').val().length < 5){
          alert('[ 联系人邮箱 ] 输入有误，请重新输入');
          $('#user_mobile').focus();
          return false;
        }
         
        $('#form1').submit()
      });
    </script>

    