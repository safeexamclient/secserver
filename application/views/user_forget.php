    <!-- container begin -->
    <div class="container bs-docs-container">
    
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">忘记密码</h1>
          <div class="breadcrumb">
            如果您忘记了登录密码，可以按以下提示重置密码            
          </div>    
        </div>
      </div>

      <div class="row"> 
        
        <div class="col-lg-12">
        
          <div style="min-height: 360px; width:100%;">

            <form method="post" name="form1" id="form1" action="/user/forget_do">
              <table border="0" width="420px" style="min-height: 150px">
                <tr>
                  <td width="100px">登录账号： </td>
                  <td>
                    <input type="text" id="user_logname" name="user_logname" value="" style="width: 240px;" maxlength="20" placeholder="3-20位小写字母或数字"> 
                    <span style="color:red;">*</span> 
                  </td>
                </tr>
                <tr>
                  <td>联系人邮箱： </td>
                  <td>
                    <input type="text" id="user_email" name="user_email" value="" style="width: 240px;" maxlength="50" placeholder="请输入注册时填写的联系人邮箱">  
                    <span style="color:red;">*</span> 
                  </td>
                </tr>                
                <tr>
                  <td>&nbsp;</td>
                  <td>
                    <input type="button" id="btn_sub" style="width: 80px;" value="重置密码">
                  </td>
                </tr>
              </table>
            </form>
            
            <hr>
            <a href="/user/signin">用户登录</a> &nbsp; &nbsp; 
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
        if($('#user_email').val().length < 5){
          alert('[ 联系人邮箱 ] 输入有误，请重新输入');
          $('#user_email').focus();
          return false;
        }
         
        $('#form1').submit()
      });
    </script>
    