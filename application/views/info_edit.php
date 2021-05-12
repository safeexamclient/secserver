    <!-- container begin -->
    <div class="container bs-docs-container">
    
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">企业信息</h1>
          <div class="breadcrumb">
            您可以修改企业的注册信息           
          </div>    
        </div>
      </div>

      <div class="row" style="min-height: 450px;"> 
        
        <div class="col-lg-12">
        
          <div style="min-height: 360px; width:100%;">

            <form method="post" name="form1" id="form1" action="/info/edit_save">
                <table border="0" width="500px" style="min-height: 240px">
                  <tr>
                    <td width="100px">登录账号：</td>
                    <td>
                      <span style="font-weight: bold;"><?php echo $user["user_logname"]; ?></span> 
                    </td>
                  </tr>
                  <tr>
                    <td>企业名称：</td>
                    <td>
                      <input type="text" id="user_name" name="user_name" value="<?php echo $user["user_name"]; ?>" style="width: 320px;" maxlength="20" placeholder="示例：腾讯课堂、湖南大学"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>联系人手机：</td>
                    <td>
                      <input type="text" id="user_mobile" name="user_mobile" value="<?php echo $user["user_mobile"]; ?>" style="width: 240px;" maxlength="11" placeholder="示例：13902508765"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>联系人邮箱：</td>
                    <td>
                      <input type="text" id="user_email" name="user_email" value="<?php echo $user["user_email"]; ?>" style="width: 240px;" maxlength="50" placeholder="示例：user@qq.com"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>
                      <input type="button" id="btn_sub" style="width: 80px;" value="确认修改">
                       &nbsp;  &nbsp; 
                      <input type="button" id="btn_cancel" style="width: 50px;" value="取消"> 
                    </td>
                  </tr>
                </table>
            </form>
            
          </div>

          <br>                   
         
        </div>

      </div>

    </div>
    <!-- container end -->

    <script>
      //alert('13d');
      $("#btn_sub").click(function(){         
        
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
          $('#user_email').focus();
          return false;
        }         
        $('#form1').submit()
      });

      $("#btn_cancel").click(function(){        
        location.href = '/exam'
      });
    </script>

    