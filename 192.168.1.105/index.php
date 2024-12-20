<!DOCTYPE html>
<?php
// 获取当前日期
date_default_timezone_set('Asia/Shanghai');
$current_date = date("Y-m-d");
$weekday_number = date("w");
$weekdays = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];
$current_weekday = $weekdays[$weekday_number];
?>
<html lang="zh-hans" dir="ltr">
<head profile="http://www.w3.org/1999/xhtml/vocab">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="https://cgyy.xmu.edu.cn//sites/default/files/logo_0.png" type="image/png" />
    <title>健身房预约 | 翔安校区体育馆预约系统</title>
    <style>
@import url("https://cgyy.xmu.edu.cn//modules/system/system.base.css?sbtg0x");
</style>
<style>
@import url("https://cgyy.xmu.edu.cn//sites/all/modules/date/date_api/date.css?sbtg0x");
@import url("https://cgyy.xmu.edu.cn//sites/all/modules/date/date_popup/themes/datepicker.1.7.css?sbtg0x");
@import url("https://cgyy.xmu.edu.cn//sites/all/modules/date/date_repeat_field/date_repeat_field.css?sbtg0x");
@import url("https://cgyy.xmu.edu.cn//modules/field/theme/field.css?sbtg0x");
@import url("https://cgyy.xmu.edu.cn//modules/node/node.css?sbtg0x");
@import url("https://cgyy.xmu.edu.cn//sites/all/modules/views/css/views.css?sbtg0x");
</style>
<style>
@import url("https://cgyy.xmu.edu.cn//sites/all/modules/ctools/css/ctools.css?sbtg0x");
@import url("https://cgyy.xmu.edu.cn//sites/all/modules/room_reservations/room_reservations.css?sbtg0x");
</style>
<link type="text/css" rel="stylesheet" href="https://cgyy.xmu.edu.cn//sites/all/themes/bootstrap/css/bootstrap.css" media="all" />
<style>
@import url("https://cgyy.xmu.edu.cn//sites/all/themes/bootstrap/css/custom.css?sbtg0x");
</style>
    <!-- HTML5 element support for IE6-8 -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cgyy.xmu.edu.cn//sites/all/modules/jquery_update/replace/jquery/1.10/jquery.js?v=1.10.2"></script>
<script src="https://cgyy.xmu.edu.cn//misc/jquery-extend-3.4.0.js?v=1.10.2"></script>
<script src="https://cgyy.xmu.edu.cn//misc/jquery-html-prefilter-3.5.0-backport.js?v=1.10.2"></script>
<script src="https://cgyy.xmu.edu.cn//misc/jquery.once.js?v=1.2"></script>
<script src="https://cgyy.xmu.edu.cn//misc/drupal.js?sbtg0x"></script>
<script src="https://cgyy.xmu.edu.cn//sites/all/themes/bootstrap/js/bootstrap.js"></script>
<script src="https://cgyy.xmu.edu.cn//sites/default/files/languages/zh-hans_C-Rb5wiQX-U3S-pj9DWrH-BbuR_27URKEBzSVIJEgqk.js?sbtg0x"></script>
<script src="https://cgyy.xmu.edu.cn//sites/all/modules/room_reservations/room_reservations.js?sbtg0x"></script>
<script>jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","setHasJsCookie":0,"ajaxPageState":{"theme":"bootstrap","theme_token":"-_YZ4TD9pug3O8WtBNoR_V2wJCJFHW2miWWE00138N0","js":{"sites\/all\/themes\/bootstrap\/js\/bootstrap.js":1,"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.10\/jquery.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"https:\/\/cgyy.xmu.edu.cn\/sites\/all\/themes\/bootstrap\/js\/bootstrap.js":1,"public:\/\/languages\/zh-hans_C-Rb5wiQX-U3S-pj9DWrH-BbuR_27URKEBzSVIJEgqk.js":1,"sites\/all\/modules\/room_reservations\/room_reservations.js":1},"css":{"modules\/system\/system.base.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"sites\/all\/modules\/date\/date_repeat_field\/date_repeat_field.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/room_reservations\/room_reservations.css":1,"https:\/\/cgyy.xmu.edu.cn\/sites\/all\/themes\/bootstrap\/css\/bootstrap.css":1,"sites\/all\/themes\/bootstrap\/css\/custom.css":1}},"bootstrap":{"anchorsFix":1,"anchorsSmoothScrolling":1,"formHasError":1,"popoverEnabled":1,"popoverOptions":{"animation":1,"html":0,"placement":"right","selector":"","trigger":"click","triggerAutoclose":1,"title":"","content":"","delay":0,"container":"body"},"tooltipEnabled":1,"tooltipOptions":{"animation":1,"html":0,"placement":"auto left","selector":"","trigger":"hover focus","delay":0,"container":"body"}}});</script>
<script>
        function showInputDialog() {
            // 获取用户输入
            var studentId = prompt("请输入学号:");
            var studentName = prompt("请输入姓名:");

            // 如果用户取消输入，跳过提交表单
            if (studentId === null || studentName === null) {
                return;
            }

            // 将输入值设置到隐藏的表单字段
            document.getElementById("studentId").value = studentId;
            document.getElementById("studentName").value = studentName;

            // 提交表单
            document.getElementById("inputForm").submit();
        }
    </script>
</head>
<body class="html not-front logged-in no-sidebars page-my-reservations page-my-reservations-slot" >
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">跳转到主要内容</a>
</div>
<div class="website-content">
    <div class="website-head">
        <header id="navbar" role="banner" class="navbar container navbar-default">
            <div class="container">
                <div class="navbar-header">
                                            <a class="logo navbar-btn pull-left" href="/" title="首页">
                            <img src="https://cgyy.xmu.edu.cn//sites/default/files/logo.png" alt="首页" />
                        </a>
                    
                                            <a class="name navbar-brand" href="/" title="首页">翔安校区体育馆预约系统</a>
                    
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <button type="button" class="navbar-toggle"  onclick="showInputDialog()">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <form id="inputForm" method="post" action="">
                        <input type="hidden" id="studentId" name="studentId">
                        <input type="hidden" id="studentName" name="studentName">
                    </form>

                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // 获取学号和姓名
                            $studentId = $_POST['studentId'];
                            $studentName = $_POST['studentName'];
                        }
                    ?>
                </div>

                                    <div class="navbar-collapse collapse">
                        <nav role="navigation">
                            <!--          <div class="language-switcher">-->
                            <!--            <a href="?q=en">English</a> | <a href="?q=zh-hans">中文</a>-->
                            <!--          </div>-->
                            <div class = "blank_zone hidden-xs visible-sm-block visible-md-block visible-lg-block">
                                                                    你好，<?=$studentId?>                                                          </div>
                            <div class="menu-zone">
                                                                    <ul class="menu nav navbar-nav"><li class="first leaf menu-222"><a href="/" title="">首页</a></li>
<li class="leaf menu-697"><a href="/my_reservations" title="" class="active">我的预约</a></li>
<li class="leaf menu-640"><a href="/room_reservations" title="">场地预约</a></li>
<li class="leaf menu-854"><a href="/room/1" title="">健身房预约</a></li>
<li class="leaf menu-1255"><a href="/room/2" title="">游泳馆预约</a></li>
<li class="last leaf menu-1598"><a href="/misd_query">违规查询</a></li>
</ul>                                                                            <ul class="menu nav navbar-nav secondary"><li class="first last leaf menu-15"><a href="/user/logout">退出</a></li>
</ul>                                                                                                                                </div>
                        </nav>
                    </div>
                            </div>
        </header>
    </div>
    <div class="header_line"></div>
    <div class="main-container container">

        <header role="banner" id="page-header">
            
                    </header> <!-- /#page-header -->

        <div class="row">

            
            <section class="col-sm-12">
                                <ol class="breadcrumb"><li><a href="/my_reservations">我的预约</a></li>
<li class="active">健身房预约</li>
</ol>                <a id="main-content"></a>
                                                                                <h1 class="title" id="page-title">
                            健身房预约                        </h1>
                                                                                                            <h2 class="element-invisible">主标签</h2><ul class="tabs--primary nav nav-tabs"><li><a href="/my_reservations">场地预约</a></li>
<li class="active"><a href="/my_reservations/slot" class="active">健身房预约<span class="element-invisible">（活动标签）</span></a></li>
<li><a href="/my_reservations/slot2">游泳馆预约</a></li>
</ul>                                                                  <div class="region region-content">
    <section id="block-system-main" class="block block-system clearfix">

            
    <div class="view view-slot-appl-list view-id-slot_appl_list view-display-id-page_2 view-dom-id-e8292a8c59a95625af4edbeb7dc9ddb8">
        
  
  
      <div class="view-content">
      <div class="table-responsive">
<table class="views-table cols-5 table table-hover table-striped" >
        <thead>
      <tr>
                  <th class="views-field views-field-name" >
            学工号          </th>
                  <th class="views-field views-field-field-real-name" >
            姓名          </th>
                  <th class="views-field views-field-field-date views-align-center" >
            日期          </th>
                  <th class="views-field views-field-nothing" >
            时段          </th>
                  <th class="views-field views-field-delete-node" >
                      </th>
              </tr>
    </thead>
    <tbody>
          <tr class="odd views-row-first views-row-last">
                  <td class="views-field views-field-name" >
                  <?=$studentId?>          </td>
                  <td class="views-field views-field-field-real-name" >
                  <?=$studentName?>          </td>
                  <td class="views-field views-field-field-date views-align-center" >
            <span class="date-display-single"><?=$current_date?>,<?=$current_weekday?></span>          </td>
                  <td class="views-field views-field-nothing" >
            18:00-19:30           </td>
                  <td class="views-field views-field-delete-node" >
            <a href="/node/1013064/delete?destination=my_reservations/slot">取消预约</a>          </td>
              </tr>
      </tbody>
</table>
  </div>
    </div>
  
  
  
  
  
  
</div>
</section> <!-- /.block -->
  </div>
            </section>

            
        </div>
    </div>
    <div class="main-footer-blank"></div>\
</div>
<footer class="footer container">
      <div class="region region-footer">
    <section id="block-block-2" class="block block-block clearfix">

            
    <p><a href="http://library.xmu.edu.cn/"> 厦门大学图书馆</a> 版权所有 ©2024 <br /> 维护制作 厦门大学图书馆信息技术部 </p>

</section> <!-- /.block -->
  </div>
</footer><script src="https://cgyy.xmu.edu.cn//sites/all/themes/bootstrap/js/bootstrap.js?sbtg0x"></script>
<div class="modal fade" id="loadingModal" role="dialog" aria-labelledby="dialogLabel" aria-hidden="true">
    <div style="width: 200px;height:20px; z-index: 20000; position: absolute; text-align: center; left: 50%; top: 50%;margin-left:-100px;margin-top:-10px">
        <div class="progress progress-striped active" style="margin-bottom: 0;">
            <div class="progress-bar  progress-bar-info" style="width: 100%;"></div>
        </div>
        <h4>正在加载...</h4>
    </div>
</div>
<script src="/sites/all/modules/services/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery('button#edit-submit').click(function(){
            jQuery('#loadingModal').modal({backdrop: 'static', keyboard: false});
        });
        jQuery('button#edit-actions-submit').click(function(){
            jQuery('#loadingModal').modal({backdrop: 'static', keyboard: false});
        });
    });
</script>
</body>
</html>
