<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ChenGuang">
    <meta name="apple-mobile-web-app-title" content="SEC">
    <meta name="application-name" content="SEC">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>Safe Exam Client</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/modern-business.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/basic.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/docs.min.css" rel="stylesheet">

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
</head>

<body>
    <!-- nav begin -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                  <span><img class="sebbrandimg" src="/images/logo.png" title="SEC Logo" width="32" style="margin-top:-7px; margin-right:5px;"></span>
                  Safe Exam Client
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Support<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/home/support">Quick Start</a>
                            </li>                         
                            <li>
                                <a href="/home/support/faq">FAQ</a>
                            </li>
                            <li>
                                <a href="/home/support/service">Service</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/home/about">About Us</a>
                            </li>                          
                            <li>
                                <a href="/home/about#feedback">Feedback</a>
                            </li>    
                            <li>
                                <a href="/home/about#contact">Contact Us</a>
                            </li>                                                        
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->

	<!-- container begin -->
    <div class="container bs-docs-container">
    
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Home</h1>
          <ol class="breadcrumb">
            <li><a href="/">中文</a>
            </li>
            <li class="active">English
            </li>
            <li class="active"><a href="https://github.com/safeexamclient" target="_blank">SEC on GitHub</a>
            </li>
          </ol>    
        </div>
      </div>
      
      <div class="row"> 
        
        <div class="col-md-3">
          <div class="list-group">
            <a href="" class="list-group-item active">Product introduction</a>
            <a href="#download" class="list-group-item">Product download</a>   
            <a href="#quick" class="list-group-item">Quick to use</a> 
            <a href="#logger" class="list-group-item">Development log</a>
          </div>
        </div>
        
        <div class="col-md-9">
        
          <h2 class="page-header">Product Introduction</h2>
          <p>The Safe Exam Client is an executable program that runs on the desktop of the computer. It supports Windows 7 and above, which can make your online exam more secure.</p>
          <p>This software uses the Chromium kernel, which is essentially a browser, but adds a layer of security shell to achieve full-screen lock, form pre-examination and anti-cheating functions.</p>
          <p>This software is a pure green software that can be used without installation and decompression. Generally speaking, any online exam that can be conducted with the Chrome browser can be used to enhance the security of the exam.</p>

          <br id="download">
          <h2 class="page-header">Product download</h2>
          <p>Version 2.0 download:  <strong><a href="http://dlcdn.safeexamclient.com/Safe_Exam_Client_CEF_2.1.3.zip">Safe_Exam_Client_2.1.3.zip</a></strong> 
            (79 M, unzip and use, support Win7/Win10, compatible with Chrome and IE, recommended to download)</p>
          <p>Version 1.0 download:  <a href="https://github.com/safeexamclient/ie/releases/download/1.0.8/Safe_Exam_Client_IE_1.0.8.zip" style="color:#333">Safe_Exam_Client_1.0.8.zip</a>
            ( 283 K, unzip and use, support WinXP and above, only compatible with IE, it is no longer maintained)</p>

          <br id="quick">         
          <h2 class="page-header">Quick to use</h2>

          <h5 style="margin-top: 20px;">Scenario 1: Computer room exam</h5>
          <p>If you are taking the online exam in the university computer room, in order to avoid the candidates Baidu or view local information, you need to perform the following operations  &nbsp;&nbsp; [ <strong><a href="/home/support"> View image </a></strong> ]</p>
          <ul>
            <li>1. Please download the software, unzip the software, double-click to edit Exam.ini, manually configure the test name, test URL, whether to lock the screen and other parameters</li>
            <li>2. Distribute the folder in batches to all computers in the computer room. Before candidates enter the venue, start Exam.exe on each computer.</li>
          </ul>       

          <h5>Scene 2: Test at home</h5>
          <p>If you are taking the exam at home or in the dormitory, in order to improve the safety of the exam, you need to perform the following operations  &nbsp;&nbsp; [ <strong><a href="/home/support#key"> View image </a></strong> ]</p>
          <ul>
            <li>1. Please <strong><a href="/user/signup"> register </a></strong> an enterprise account on this website</li>
            <li>2. Log in to the background and create a new exam, the system will generate an exam password (6 digits) and notify the candidates (it is recommended to send it together with the original exam notification)</li>
            <li>3. Candidates download the software, double-click to run Exam.exe after decompression, and enter the password to enter the corresponding exam login interface</li>
          </ul>             

          <br id="logger">
          <h2 class="page-header">Development log</h2>
          <p>2020-07-25 &nbsp;&nbsp; Version 2.1.3 released: Upgraded to CEF4 core, new cloud configuration function, suitable for home exams</p>
          <ul>
            <li>[ Product description ] Due to the new crown epidemic, home exams have become the mainstream, various configurations have been changed from local files to cloud settings, green products, decompression available</li>
            <li>[ Product Kernel ] Upgrade the kernel to the latest Chromium 87.1.12</li>
          </ul>
          <p>2018-03-30 &nbsp;&nbsp;  Version 2.0.5 is released: CEF3 kernel is adopted, suitable for computer room exams</p>
          <ul>
            <li>[ Product description ] Perfectly compatible with Chrome, further enriching configurable parameters, and adding a personalized interface, green products, decompression available</li>
          </ul>
          <p>2016-05-12 &nbsp;&nbsp; Version 1.0.8 released: still use the IE core, quickly deploy in the computer room exam</p>
          <ul>
            <li>[ Product description ] The business function has been upgraded, using Pascal to rewrite the product, no longer relying on any third party, green product, decompression available, only 3M</li>
          </ul>   
          <p>2013-10-26 &nbsp;&nbsp; Version 1.0.2 released: adopts IE kernel, suitable for computer room exams</p>
          <ul>
            <li>[ Product description ] Full screen lock under WinXP can be realized, to prevent candidates from going online or consulting local data, parameters can be set, developed in C#, installation is required</li>
          </ul>          
          <br> 
          <p>&nbsp;</p>
        </div>
        
      </div>

    </div>
    <!-- container end -->
    	    
    <!-- footer begin -->  
    <div class="container">   
      <hr>      
      <footer>
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; 2020 &nbsp;Safe Exam Client, &nbsp;All Rights Reserved  &nbsp;&nbsp; <a href="/user">Management background</a></p>
              </div>
          </div>
      </footer>
    </div>
    <!-- footer end -->

</body>
</html>
