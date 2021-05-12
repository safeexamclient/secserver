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
            <a href="/home/support" class="list-group-item active">快速入门</a>
            <a href="/home/support/faq" class="list-group-item">常见问题</a>   
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
          <h2 class="page-header">快速入门</h2>

          <h4>场景1：机房考试</h4>
          <p>如果是在大学机房里进行在线考试，为避免考生上网百度或查看本地资料，需要全屏锁定，可进行以下操作</p><br>

          <p><strong>第一步：下载软件并配置</strong></p>
          请主办方在本网站首页下载本软件，解压后双击编辑Exam.ini，手工配置好考试名称、考试网址、是否锁屏等参数，如下图<br>
          <img src="/images/support/guide_b_01.png" width="400px"><br>          
          Exam.ini默认情况下没有配置的，请配置URL（考试登录网址）、NAME（考试名称）、LOCK（ON/OFF）三个参数，这种情况下，客户端软件完全本地运行，不需要联网，示例如下<br>
          <img src="/images/support/guide_b_02.png" width="400px"><br>
          <!--
          <strong>关于参数KEY的说明：</strong><br>
          参数KEY就是考试口令，为6位数字，如果设置了KEY，则客户端将根据KEY值自动去云端获取对应的云端参数，从而忽略本地的URL、NAME、LOCK。<br>
          使用KEY的意义在于，既可以有云端更丰富的参数设置（本地只能设置3项，云端有更多），又避免了考生入场时输入口令的麻烦（相当于内置了）。<br>

          <img src="/images/support/guide_b_03.png"><br><br>
          -->
          <p><strong>第二步：下载软件并配置</strong></p>
          将解压包下发到机房的全部电脑上，在考生入场前，启动每台电脑上的Exam.exe即可
          <br><br>

          <br id="key"><br>

          <h4>场景2：在家考试</h4>
          <p>如果是在家考试或在寝室考试，为确保安全，客户端需要联网，需要进行以下操作</p><br>

          <p><strong>第一步：注册企业帐号</strong></p>
          请考试主办方先 <strong><a href="/user/signup">注册</a></strong> 一个企业帐号，如下图<br>
          <img src="/images/support/guide_a_01.png"><br>
          填写提交后，即可注册成功，如下图<br>
          <img src="/images/support/guide_a_02.png"><br>
          在上图中，点击[进入系统]后，界面如下<br>
          <img src="/images/support/guide_a_03.png"><br><br>

          <p><strong>第二步：生成考试口令</strong></p>
          点击[新建考试]按钮，填写项目基本信息，其中考试名称和考试网址是必填项，如下图<br>
          <img src="/images/support/guide_a_04.png"><br>
          对于新手而言，上图中的高级设置，建议默认，不要做修改，点击[提交]后，如下图<br>
          <img src="/images/support/guide_a_05.png"><br>
          在上图中，可以看到考试口令，点击确认后，可以看到列表，如下图<br>
          <img src="/images/support/guide_a_06.png"><br>
          至此，后台操作完成，主办方需要考试口令通知给考生（建议跟原考试通知一并下发）
          <br><br>

          <p><strong>第三步：考生下载并登录</strong></p>
          接下来是考生端的操作，先是下载软件<br>
          打开 www.safeexamclient.com 下载最新版软件（主办方也可以将本软件放置在自有服务器上供下载）<br>
          <img src="/images/support/guide_a_07.png"><br>
          下载最新版2.0软件后，解压到本地，如下图<br>
          <img src="/images/support/guide_a_08.png"><br>
          双击 Exam.exe，即可启动客户端软件，如下图<br>
          <img src="/images/support/guide_a_09.png" width="87%"><br>
          在上图中输入考试口令，即可进入原考试系统的登录界面，如下图<br>
          <img src="/images/support/guide_a_10.png" width="87%"><br>
          后续具体的考试操作，就是考试系统本身的事了。<br>
          总之，从考生输入考试口令后，系统就进入了锁屏状态，除非关机，不可离开。
          <br>


          <br><br><br>

          <h4>关于1.0版本的特别说明</h4>
          <br>
          <p>上述两种场景，都是介绍的2.0版本，对于1.0版本，仅支持本地配置模式，即双击编辑Exam.ini，修改URL、NAME、LOCK三个参数。</p>
          <p>1.0版本已很少使用了，因为2.0能完全替代1.0的功能，且更加强大。1.0采用IE内核，所以仅兼容IE浏览器，如果你确定要用，建议在考试前，去正式考场机房环境里完整测试一遍，确保无误。</p>
          <p>1.0的最大优势在于文件极小，只有280多K，比2.0小多了，所以才一直保留着。</p><br>


          <br><br>                  
          
          <p>&nbsp;</p>
        </div>
        
      </div>

    </div>
    <!-- container end -->
    