    <!-- container begin -->
    <div class="container bs-docs-container">
    
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">编辑考试信息</h1>
          <div class="breadcrumb">
            请编辑考试项目的各项信息
          </div>
        </div>
      </div>

      <div class="row" style="min-height: 450px;">         
        <div class="col-lg-12">
          <div>
            <!-- Form Begin -->
            <form method="post" name="form1" id="form1" action="/exam/save">
            <input type="hidden" id="exam_id" name="exam_id" value="<?php echo $exam["exam_id"]; ?>">
            <table border="0" width="700px" style="min-height: 120px; margin-top: 10px;" >
                <tr style="vertical-align: text-top; ">
                    <td width="180px">考试名称： </td>
                    <td>
                        <input type="text" style="width: 420px;" id="exam_name" name="exam_name" value="<?php echo $exam["exam_name"]; ?>" maxlength="50" > 
                        <span style="color:red;">*</span> 
                        <div style="font-size: 13px; color:#ccc; margin-top: 5px;">( 示例：XX大学2020年下学期期末考试，最多50个字 )</div>
                    </td>
                </tr>
                <tr style="vertical-align: text-top; ">
                    <td>考试网址： </td>
                    <td>
                        <input type="text" style="width: 420px;" id="exam_url" name="exam_url" value="<?php echo $exam["exam_url"]; ?>" maxlength="200"> 
                        <span style="color:red;">*</span> 
                        <div style="font-size: 13px; color:#ccc; margin-top: 5px;">( 示例：https://www.baidu.com，最多100个字符 )</div>
                    </td>
                </tr>                
            </table>

            <div id="more-setting" style="display:none;">
            <table border="0" width="700px" style="min-height: 320px">
                <tr>
                    <td colspan="2"><hr style="margin:10px 0px;"></td>
                </tr>
                <tr>
                    <td width="180px">全程锁屏 ： 
                        <a target="_blank" href="/home/support/faq#more"><span style="background-color: #aaa; border-radius: 6px; color:#fff; font-size: 8px; padding: 0px 3px;" title="点击了解如何填写">?</span></a>
                    </td>
                    <td><input type="checkbox" id="exam_lock" name="exam_lock" <?php if($exam["exam_lock"]) echo 'checked'; ?> > （ 勾选表示需要锁定）</td>
                </tr>
                <tr>
                    <td width="180px">锁屏开启 - 特征字符： </td>
                    <td><input type="text" style="width: 300px;" id="exam_lock_on_key" name="exam_lock_on_key" maxlength="100"  value="<?php echo $exam["exam_lock_on_key"]; ?>" placeholder="默认为空"> <span style="font-size: 13px; color:#ccc; ">（ 最多100个字符）</span></td>
                </tr>
                <tr>
                    <td width="180px">锁屏关闭 - 特征字符： </td>
                    <td><input type="text" style="width: 300px;" id="exam_lock_off_key" name="exam_lock_off_key" maxlength="100"  value="<?php echo $exam["exam_lock_off_key"]; ?>" placeholder="默认为空"> <span style="font-size: 13px; color:#ccc; ">（ 最多100个字符）</span></td>
                </tr>
                <tr>
                    <td width="180px">锁屏退出 - 密码： </td>
                    <td><input type="text" style="width: 150px;" id="exam_lock_password" name="exam_lock_password" maxlength="6"  value="<?php echo $exam["exam_lock_password"]; ?>" placeholder="默认无须密码"> <span style="font-size: 13px; color:#ccc; ">（ 最多6个字符，比如123）</span></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>显示 - 顶部考试名称： </td>
                    <td><input type="checkbox" id="exam_ui_top" name="exam_ui_top" <?php if($exam["exam_ui_top"]) echo 'checked'; ?> > （ 勾选表示需要显示）</td>
                </tr>
                <tr>
                    <td>显示 - 底部提示信息： </td>
                    <td><input type="checkbox" id="exam_ui_bottom" name="exam_ui_bottom" <?php if($exam["exam_ui_bottom"]) echo 'checked'; ?> > （ 勾选表示需要显示）</td>
                </tr>

            </table>
            </div>

            <div id="more" style="cursor:pointer; margin-bottom:10px; color:#337ab7; margin: 20px 0px;">高级设置 ↓</div>
            
            <table border="0" width="700px" style="margin-bottom: 50px;">
                <tr>
                    <td width="180px">&nbsp;</td>
                    <td>
                        <input type="button" id="btn_sub" style="width: 80px;" value=" 提 交 "> &nbsp;  &nbsp; 
                        <input type="button" id="btn_cancel" style="width: 50px;" value="取消"> 
                    </td>
                </tr>
            </table>
            </form>
            <!-- Form End -->

          </div>          
        </div>        
      </div>

    </div>
    <!-- container end -->

    <script>
      $("#btn_sub").click(function(){        
            if($('#exam_name').val().trim().length < 3){
              alert('[ 考试名称 ] 输入有误，至少3个字符，请重新输入');
              $('#exam_name').focus();
              return false;
            }
            var url = $('#exam_url').val().trim();
            if(url.length < 10){
              alert('[ 考试网址 ] 输入有误，至少10个字符，请重新输入');
              $('#exam_url').focus();
              return false;
            }         
            var url_head = url.substring(0,7);
            if((url_head != "https:/") && (url_head != "http://")){
              alert('[ 考试网址 ] 必须以 http:// 或 https:// 开头，请重新输入');
              $('#exam_url').focus();
              return false;
            }  
            $('#form1').submit()
      });

      $("#btn_cancel").click(function(){        
            location.href = '/exam'
      });

      $("#more").click(function() {
            var showflg = $('#more-setting').css("display");
            if (showflg == 'none') {
                $("#more-setting").show(200);
                $("#more").html('收起 ↑');
                return false;
            }
            if (showflg != 'none') {
                $("#more-setting").hide(200);
                $("#more").html('高级设置 ↓');
                return false;
            }
      });

    </script>

    