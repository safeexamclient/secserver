    <!-- container begin -->
    <div class="container bs-docs-container">
    
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">企业登录</h1>
          <div class="breadcrumb">
            请输入企业登录账号和登录密码            
          </div>    
        </div>
      </div>
      
      <div class="row"> 
        
        <div class="col-lg-12">
        
          <div style="min-height: 360px;  width:100%;">

            <form method="post" action="/user/signin_do">
              <table border="0" width="420px" style="min-height: 150px">
                <tr>
                  <td width="100px">登录账号： </td>
                  <td>
                    <input type="text" id="user_logname" name="user_logname" value="huawei" style="width: 240px;" maxlength="20" placeholder="请输入登录账号">
                  </td>
                </tr>
                <tr>
                  <td>登录密码： </td>
                  <td>
                    <input type="password" id="user_password" name="user_password" value="ats12345" style="width: 240px;" maxlength="20" placeholder="请输入登录密码">
                  </td>
                </tr>
                <tr><td>&nbsp;</td><td><input type="submit" style="width: 80px;" value=" 登 录 "></td></tr>
              </table>
            </form>

            <hr>
            <a href="/user/signup">企业注册</a> &nbsp; &nbsp; 
            <a href="/user/forget">忘记密码</a>

          </div>

          <br>
          
        </div>
      </div>

    </div>
    <!-- container end -->
    