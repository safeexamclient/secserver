    <!-- container begin -->

    <div class="container bs-docs-container">

      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">支持</h1>
          <ol class="breadcrumb">
            <li class="active">中文
            </li>
            <li><a href="/home/en">English</a>
            </li>
            <li class="active"><a href="https://github.com/safeexamclient" target="_blank">SEC on GitHub</a>
            </li>
          </ol>    
        </div>
      </div>

      <div class="row"> 
        
        <div class="col-md-3">
          <div class="list-group">
            <a href="/home/support" class="list-group-item">快速入门</a>
            <a href="/home/support/faq" class="list-group-item active">常见问题</a>   
            <a href="/home/support/service" class="list-group-item">商业服务</a>
          </div>
        </div>


        <style type="text/css">
          .col-md-9 img {
            max-width: 800px;
            max-height: 500px;
            border: 1px solid #ccc;
            margin: 20px 0px;
          }
        </style>
        
        <div class="col-md-9">
        
          <!-- Content -->
          <h2 class="page-header">常见问题</h2>

          <h4>问：本软件运行时，360安全卫士提示风险怎么办？</h4>
          <p>答：请点击信任或接受</p><br>

          <h4>问：本软件支持macOS苹果电脑吗？</h4>
          <p>答：暂不支持，仅支持Win7/Win10</p><br>

          <h4>问：本软件怎么使用？</h4>
          <p>答：如果是在家考试，对考生来说，下载后解压（无须安装），双击Exam.exe即可，然后输入考试口令，就能登录考试</p><br>

          <h4>问：为什么考试主办方不使用Chrome浏览器，而要求用本软件？</h4>
          <p>答：本软件采用与Chrome完成相同的内核，本质上就是一款浏览器，不过在外面加了一个锁屏的安全外壳，让考试更安全</p><br>

          <h4>问：本软件能提供考试功能吗？</h4>
          <p id="more">答：不能，本软件相当于一款考试专用浏览器，但没有题库管理、考试管理、在线作答等考试业务功能</p>
          <br>

          <h4>问：我是考试主办方，能详细介绍一下考试项目的高级设置功能吗？</h4>
          <p>答：每个考试项目，都需要进行设置，必填项有考试名称和考试网址，其他的属于高级功能，每一项都有默认值，详述如下</p>
          <img src="/images/support/faq_01.png"><br>
          <li>[ 全程锁屏 ] 默认值是勾选，即在考生输入考试口令后，开启全屏锁定，除非关机，否则不能退出考试界面</li>
          <li>[ 锁屏开启 - 特征字符 ] 如果当前网址中含有指定的字符，则开启锁屏状态</li>
          <li>[ 锁屏关闭 - 特征字符 ] 如果当前网址中含有指定的字符，则关闭锁屏状态</li>
          <li>[ 锁屏退出 - 密码 ] 在锁屏状态下，双击底部左边提示文字，输入密码可以退出本软件</li>
          <br>
          对于一般项目来说，直接全程锁屏即可，但有时考生把本次考试的登录帐号和密码等存在本地电脑上，若考试口令后直接锁屏，可能导致考生没法登录；除此之外，若考生交卷后仍然锁屏不能关闭，也不够人性化，所以才有了这两个特征字符的设置。</p>
          <p>所谓的特征字符，指的就是考试系统的当前网址包含的特殊字符，举个例子，某考试系统的登录网址是： www.domain.com/exam/login，登录成功后网址变成了： www.domain.com/exam/cand/ques，交卷后网址变成了： www.domain.com/exam/cand/finish，则这里的开启锁屏特征字符就是“exam/cand/ques”或“ques”，关闭的特征字符就是“exam/cand/finish”或“finish”，客户端软件只要发现当前网址中有特征字符就会执行开启或关闭的操作。</p>
          <p>一般来说，如果设置了特征字符，就不要勾选全程锁屏了，另外开启和关闭的特征字符不要相同，否则就没意义，最后建议特征字符稍微长一点，避免可能的误操作。</p>
          <p>对特征字符的监控，是通过每秒钟扫描一次当前网址来实现的，不间断扫描。</p>
          <br>
          <li>[ 显示 - 顶部考试名称 ] 本项默认是勾选的，即在顶部显示考试名称，若去掉勾选，则整个顶部区域隐藏</li>
          <li>[ 显示 - 底部提示信息 ] 本项默认是勾选的，即在底部显示提示信息，若去掉勾选，则整个底部区域隐藏</li>
          </p>
          <p>这两项，都是对界面显示的个性化设置，不影响考试。但如果不显示底部提示信息，则前面的 [ 锁屏退出 ] 无效。</p>

          <br>

          <h4>问：本软件最大能支持多少考试并发？</h4>
          <p>答：常备2组服务器，能支撑每秒 10000 人次的并发，若有更大规模考试，请提前3个工作日向平台备案以临时升配，点击 <strong><a href="mailto:safeexamclient@foxmail.com?subject=大型考试备案申请&body=请注明登录账号、联系电话、考试时间、考试人数等项目信息，收信后8小时内与你联系">提交备案</a></strong></p><br>

          <br>                
          
          <p>&nbsp;</p>
        </div>
        
      </div>

    </div>
    <!-- container end -->
    