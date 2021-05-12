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

    <link rel="shortcut icon" href="/favicon.ico">

    <title>考试管理后台 - [ <?php echo $user_name; ?> ]</title>

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
                <a href="/exam" class="navbar-brand">
                  <span><img class="sebbrandimg" src="/images/logo.png" title="SEC Logo" width="32" style="margin-top:-7px; margin-right:5px;"></span>
                  考试管理后台 - [ <?php echo $user_name; ?> ]
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/info/edit">当前用户：<?php echo $user_logname; ?></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/info/edit">企业信息</a>
                            </li> 
                            <li>
                                <a href="/info/editpw">修改密码</a>
                            </li>
                            <li>
                                <a href="/user/signout">退出</a>
                            </li>                                                        
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->

