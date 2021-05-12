    <!-- container begin -->
    <div class="container bs-docs-container">
    
          <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">考试列表</h1>
          <input type="button" style="width: 80px;" value=" 新建考试 " onclick="location.href='/exam/edit'"><br><br> 
        </div>
      </div>

      <div class="row" style="min-height: 450px;">        

        <div class="col-lg-12">
        
          <div style="min-height: 360px; ">

            <table border="0" class="table table-bordered" style="text-align:center;">
              <tbody class="tbody-highlight">
                <tr style="background-color: #f8f8f8; ">
                    <td nowrap>序号</td>
                    <td>考试名称</td>
                    <td>考试网址</td>
                    <td nowrap>是否锁屏</td>
                    <td nowrap>考试口令</td>
                    <td nowrap>创建时间</td>
                    <td nowrap>操作</td>
                </tr>                
                <?php
                  $n=count($exams);
                  foreach ($exams as $key => $exam):
                ?>                
                <tr>
                    <td><?php echo $n--; ?></td>
                    <td style="text-align:left;"><?php echo $exam["exam_name"]; ?></td>
                    <td style="text-align:left;"><?php echo $exam["exam_url"]; ?></td>
                    <td nowrap style="text-align:center;"><?php echo $exam["exam_lock"]==1 ? 'Yes':'No'; ?></td>
                    <td nowrap><?php echo $exam["exam_id"]; ?></td>
                    <td nowrap><?php echo $exam["create_time"]; ?></td>
                    <td nowrap>
                      <a href="/exam/edit/<?php echo $exam["exam_id"]; ?>">修改</a> &nbsp;&nbsp; 
                      <a href="/exam/delete/<?php echo $exam["exam_id"]; ?>" class="del">删除</a>
                    </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <div style="text-align:right;">
                <!-- <a href="#">上一页</a> &nbsp; &nbsp; <a href="#">下一页</a> -->
            </div>

          </div>
          
        </div>
        
      </div>

    </div>
    <!-- container end -->

    <script>
      //删除前的确认
      $(".del").click(function(){
        var msg = "您真的要删除吗？请确认";
        if(confirm(msg)==true){
          return true;
        }else{
          return false;
        }
      });
    </script>
