    <!-- container begin -->
    <div class="container bs-docs-container">
    
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">修改密码</h1>
          <div class="breadcrumb">
            您可以修改企业的登录密码           
          </div>    
        </div>
      </div>

      <div class="row" style="min-height: 450px;"> 
        
        <div class="col-lg-12">
        
          <div style="min-height: 360px; width:100%;">

            <form method="post" name="form1" id="form1" action="/info/editpw_save">
                <table border="0" width="500px" style="min-height: 180px">                  
                  <tr>
                    <td>原密码：</td>
                    <td>
                      <input type="password" id="old_pw" name="old_pw" value="" style="width: 240px;" maxlength="20" placeholder="请输入原密码">  <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>新密码：</td>
                    <td>
                      <input type="password" id="new_pw" name="new_pw" value="" style="width: 240px;" maxlength="20" placeholder="8-20位字母或数字"> <span style="color:red;">*</span> </td>
                  </tr>
                  <tr>
                    <td>新密码确认：</td>
                    <td>
                      <input type="password" id="new_pw2" name="new_pw2" value="" style="width: 240px;" maxlength="20" placeholder="再输一遍新密码"> <span style="color:red;">*</span> </td>
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

        if($('#old_pw').val().length < 8){
          alert('[ 原密码 ] 输入有误，至少8个字符，请重新输入');
          $('#old_pw').focus();
          return false;
        }
        if($('#new_pw').val().length < 8){
          alert('[ 新密码 ] 输入有误，至少8个字符，请重新输入');
          $('#new_pw').focus();
          return false;
        }    
        if($('#new_pw').val() != $('#new_pw2').val()){
          alert('两次输入的新密码不一致，请重新输入');
          $('#new_pw2').focus();
          return false;
        }       
        $('#form1').submit()
      });

      $("#btn_cancel").click(function(){        
        location.href = '/exam'
      });
    </script>

    