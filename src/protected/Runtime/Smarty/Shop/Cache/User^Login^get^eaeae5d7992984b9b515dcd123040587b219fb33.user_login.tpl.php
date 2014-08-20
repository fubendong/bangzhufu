<?php /*%%SmartyHeaderCode:65569396153f44328c9d227-90929050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaeae5d7992984b9b515dcd123040587b219fb33' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/user_login.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '6cea6c0df604b25ba4c38e8efb794db8a722a35e' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/layout.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65569396153f44328c9d227-90929050',
  'variables' => 
  array (
    'seo_title' => 0,
    'seo_description' => 0,
    'seo_keywords' => 0,
    'currentPageMobileUrl' => 0,
    'head_nav_json_data' => 0,
    'headNavItem' => 0,
    'foot_nav_json_data' => 0,
    'navItemListFirst' => 0,
    'navItemList' => 0,
    'navItem' => 0,
    'WEB_ROOT_HOST' => 0,
    'WEB_ROOT_BASE' => 0,
    'WEB_ROOT_BASE_RES' => 0,
    'friend_link_json_data' => 0,
    'friendLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f44328e077c4_28314562',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f44328e077c4_28314562')) {function content_53f44328e077c4_28314562($_smarty_tpl) {?><!DOCTYPE html> <html> <head> <meta charset="utf-8"/> <meta http-equiv="X-UA-Compatible" content="IE=edge"/> <title>棒主妇开源商城演示 - 棒主妇商城的开源项目</title> <meta name="description" content="棒主妇开源商城演示 - 棒主妇商城的开源项目"/> <meta name="keywords" content="棒主妇开源商城演示"/> <meta name="author" content="棒主妇开源"/> <meta name="renderer" content="webkit"/> <link rel="stylesheet" type="text/css" href="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/bootstrap-custom/css/1408515153.bootstrap-1002.css"/> <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css"
          href="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/bootstrap-custom/css/1408515153.bootstrap-1002.ie6.css"/>
    <![endif]--> <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/bootstrap-custom/css/1408515153.ie.css"/>
    <![endif]--> <link rel="stylesheet" type="text/css" href="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/e07d19e08c169dd4bf3eba14d2140fc3.min.css"/> </head> <body> <script type="text/javascript">
    window.bzf_set_nav_status = []; // 用于设置导航栏状态的数组，里面是很多设置 function()
</script> <div id="qqcaibei_header_panel" class="navbar navbar-inverse navbar-static-top"> <div class="navbar-inner"> <div class="container"> <div class="row"> <span id="qqcaibei_header_panel_headshow">这里是用户信息显示</span> <span id="qqcaibei_header_panel_showmsg">这里是用户消息</span> <span><a id="qqcaibei_header_panel_jifenurl" target="_blank" href="#">查看彩贝积分</a></span> </div> </div> </div> </div> <div class="navbar navbar-static-top"> <div class="navbar-inner bzf_header_login_register"> <div class="container"> <span class="bzf_welcome">
            您好，欢迎来到棒主妇开源！&nbsp;&nbsp;
            <a href="/User/Login.html">登陆</a>&nbsp;|
            <a href="/User/Register.html">注册</a>&nbsp;
            </span>
            

            |&nbsp;<a href="/My/Order.html">个人中心</a>&nbsp;|&nbsp;客服QQ&nbsp;
            <span> <a style="color:red;font-weight: bold;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=800018599&site=qq&menu=yes">
                    800018599
                </a> </span>&nbsp;|&nbsp;客服电话&nbsp;
            <span style="color:red;font-weight: bold;">010-10086</span>
            &nbsp;&nbsp;
        </div> </div> </div> <div class="navbar navbar-static-top"> <div class="navbar-inner bzf_header_logo_search"> <div class="container"> <form method="GET" action="/Goods/Search"> <div class="row"> <span style="width:225px; height: auto"> <a href="/"> <img src="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/img/1408515153.header_logo.png"/> </a> </span> <span class="bzf_header_search_block"> <img src="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/img/1408515153.header_search_icon.png"/> <input type="text" name="keywords"/> <button type="submit">搜&nbsp;索</button> </span> <span class="bzf_header_cart_block"> <a href="/My/Order.html">
                            我的棒主妇开源
                        </a> </span> <span id="bzf_header_cart_block" class="bzf_header_cart_block"> <span class="bzf_icon_cart_red"></span> <a href="/Cart/Show.html">
                            购物车<span id="cart_goods_count">0</span>件
                        </a> </span> </div> </form> </div> </div> </div> <div class="navbar navbar-static-top"> <div class="navbar-inner bzf_header_nav_menu_dropdown"> <div class="container"> <ul id="bzf_header_nav_menu" class="nav"> <li> <a id="bzf_header_dropdown_menu" href="/Ajax/Category">全部商品分类<span
                                class="bzf_header_dropdown_menu_icon"></span></a> </li> <li> <a href="/">首页</a> </li> <li> <a href="#">头部导航1</a> </li> <li> <a href="#">头部导航2</a> </li> </ul> </div> </div> </div> <div id="main_body" class="container"> <script type="text/javascript">
        window.bzf_set_nav_status.push(function ($) {
            $("#bzf_header_nav_menu li:has(a[href='/'])").addClass("active");
        });
    </script> <div class="row" style="background-color: white;padding-bottom: 10px;"> <div class="span6" style="border-right: solid 1px silver"> <div class="row bzf_user_login_panel"> <div class="bzf_header_panel"> <span>用户登陆</span> </div> <form class="form-horizontal" method="post" action="/User/Login.html"> <div class="row"> <div class="control-group"> <label class="control-label">用户名/邮箱*</label> <div class="controls"> <input class="span3" type="text" name="user_name" value="" data-validation-required="data-validation-required"/> </div> </div> <div class="control-group"> <label class="control-label">密&nbsp;&nbsp;&nbsp;码*</label> <div class="controls"> <input class="span3" type="password" name="password" minlength="6" data-validation-required="data-validation-required"/> </div> </div> <div class="control-group"> <label class="control-label">验证码</label> <div class="controls"> <input id="captcha_input_login" class="span1" type="text" name="captcha" data-validation-required="data-validation-required"/> <span id="captcha_image_login">点击输入获得验证码</span> <p>
                                    &nbsp;
                                </p> </div> </div> <div class="control-group"> <div class="controls"> <button type="submit" class="bzf_button_big">
                                    点击登陆
                                </button> </div> </div> </div> </form> <table class="table table-bordered"> <tbody> <tr> <td colspan="2" class="well well-small" style="color:blue;font-weight: bold;">使用第三方账号登陆</td> </tr> <tr> <td width="50%"> <a href="/Thirdpart/QQAuth/Login.html"> <img src="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/img/1408515153.login_qq.png"/> </a> </td> <td width="50%"> <a href="/Thirdpart/Dev360Auth/Login.html"> <img src="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/img/1408515153.login_360auth.gif"/> </a> </td> </tr> </tbody> </table> </div> </div> <div class="span6"> <div class="row bzf_user_login_panel"> <div class="bzf_header_panel"> <span>用户注册</span> </div> <form class="form-horizontal" method="post" action="/User/Register.html"> <div class="row"> <div class="control-group"> <label class="control-label">用户名*</label> <div class="controls"> <input class="span3" type="text" name="user_name" value="" minlength="2" data-validation-required="data-validation-required"/> </div> </div> <div class="control-group"> <label class="control-label">密&nbsp;&nbsp;&nbsp;码*</label> <div class="controls"> <input class="span3" type="password" name="password" minlength="6" data-validation-required="data-validation-required"/> </div> </div> <div class="control-group"> <label class="control-label">确认密码*</label> <div class="controls"> <input class="span3" type="password" name="password_again" data-validation-passwordagain="data-validation-passwordagain"/> </div> </div> <div class="control-group"> <label class="control-label">电子邮箱</label> <div class="controls"> <input class="span3" type="text" name="email" value="" data-validation-email="data-validation-email"/> <p>
                                    请输入您的真实邮箱，以便接收购买信息
                                </p> </div> </div> <div class="control-group"> <label class="control-label">手机号码</label> <div class="controls"> <input class="span3" type="text" name="mobile_phone" value="" pattern="1([0-9]{10})" data-validation-pattern-message="号码格式不正确"/> <p>
                                    请输入您的手机号码，以便接快递信息（我们承诺不会泄露您的资料，也不会给您发垃圾短信）
                                </p> </div> </div> <div class="control-group"> <label class="control-label">验证码</label> <div class="controls"> <input id="captcha_input_register" class="span1" type="text" name="captcha" data-validation-required="data-validation-required"/> <span id="captcha_image_register">点击输入获得验证码</span> <p>&nbsp;</p> </div> </div> <div class="control-group"> <div class="controls"> <button type="submit" class="bzf_button_big">
                                    点击注册
                                </button> </div> </div> </div> </form> </div> </div> </div> </div> <div class="navbar navbar-static-top"> <div class="navbar-inner bzf_footer_introduction_panel"> <div class="container"> <div class="span2 list_panel" style="border-left: none;"> <div>用户指南</div> <p><a target="_blank" href="/Article/View/article_id-1.html">用户协议</a> </p> <p><a target="_blank" href="/Article/View/article_id-3.html">购物流程</a> </p> <p><a target="_blank" href="/Article/View/article_id-23.html">支付方式</a> </p> <p><a target="_blank" href="/Article/View/article_id-17.html">配送方式</a> </p> <p><a target="_blank" href="/Article/View/article_id-4.html">常见问题</a> </p> </div> <div class="span2 list_panel"> <div>购物保障</div> <p><a target="_blank" href="/Article/View/article_id-2.html">隐私保护</a> </p> <p><a target="_blank" href="/Article/View/article_id-10.html">退换货政策</a> </p> <p><a target="_blank" href="/Article/View/article_id-26.html">办理退换货</a> </p> <p><a target="_blank" href="/Article/View/article_id-22.html">发票说明</a> </p> <p><a target="_blank" href=""></a></p> </div> <div class="span2 list_panel"> <div>网站合作</div> <p><a target="_blank" href="/Article/View/article_id-11.html">开放API</a> </p> <p><a target="_blank" href="/Article/View/article_id-16.html">意见反馈</a> </p> <p><a target="_blank" href="/Article/View/article_id-25.html">友情链接</a> </p> <p><a target="_blank" href=""></a></p> <p><a target="_blank" href=""></a></p> </div> <div class="span2 list_panel"> <div>商务合作</div> <p><a target="_blank" href="http://www.bzfshop.net">商户后台</a></p> <p><a target="_blank" href="/Article/View/article_id-107.html">商务联系</a> </p> <p><a target="_blank" href=""></a></p> <p><a target="_blank" href=""></a></p> <p><a target="_blank" href=""></a></p> </div> <div class="span2 list_panel"> <div>公司信息</div> <p><a target="_blank" href="/Article/View/article_id-5.html">关于我们</a> </p> <p><a target="_blank" href="/Article/View/article_id-6.html">工作机会</a> </p> <p><a target="_blank" href=""></a></p> <p><a target="_blank" href=""></a></p> <p><a target="_blank" href=""></a></p> </div> <div class="span2 tel_panel"> <p><span class="tel_icon"></span>客服热线</p> <p>010-10086</p> </div> </div> </div> </div> <div class="row navsort"> </div> <div id="bzf_right_float_panel" class="bzf_right_float_panel"> <div id="bzf_right_float_kefu_block" class="bzf_right_float_panel_block"> <span class="icon_kefu"></span> <div class="bzf_popover_html" style="display: none;"> <div class="bzf_supplier_pane" style="width:216px;"> <div class="header">
                        商家信息
                    </div> <div class="supplier_pane_content"> <div class="bzf_show"> <div class="supplier_info"> <p>商 户 名 ：棒主妇开源</p> <p>所 在 地 ：北京市</p> <p>客服电话：010-10086</p> <p>客服 QQ：800018599</p> </div> <div class="divider"></div> <div class="supplier_info" style="text-align: center;"> <p>周一至周五 10:00-19:00</p> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=800018599&site=qq&menu=yes"> <img border="0" src="http://wpa.qq.com/pa?p=2:800018599:41" alt="QQ在线客服" title="QQ在线客服"/> </a> </div> </div> </div> </div> </div> </div> <div id="bzf_right_float_cart_block" class="bzf_right_float_panel_block"> <span class="icon_cart"></span> </div> <div class="bzf_right_float_panel_block" onclick="jQuery(document).scrollTo('0px',800);"> <span class="icon_back_to_top"></span> <div class="bzf_hide" style="width:60px;font-weight: bold;text-align: center;line-height: 40px;">
                返回顶部
            </div> </div> </div> <script type="text/javascript">
        var WEB_ROOT_HOST = 'http://3.huopool.com';
        var WEB_ROOT_BASE = '';
        var WEB_ROOT_BASE_RES = 'http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/';
        var BLANK_IMAGE_URL = 'http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/img/1408515153.blank.gif';
    </script> <script type="text/javascript" src="http://3.huopool.com/asset/BD0940B4-4B18-4205-9049-BEF1BC8E9451/1.0.5/abb3476f8b9db695e7d77434aadf01ef.min.js"></script> <script type="text/javascript">
        /**
         * 这里的代码等 document.ready 才执行
         */
        jQuery((function (window, $) {
            /**
             * user_login.tpl 页面，用户登陆注册
             *
             * 验证码图片显示，当输入框第一次获得焦点的时候取得验证码
             * */
            $("#captcha_input_login").one('focus', function () {
                bZF.loadCaptchaImage("#captcha_image_login");
            });

            $("#captcha_input_register").one('focus', function () {
                bZF.loadCaptchaImage("#captcha_image_register");
            });

        })(window, jQuery));
    </script> <div class="container"> <div class="row bzf_footer_credit_panel"> <span><i class="bzf_icon_zhengping"></i>正品保证</span> <span><i class="bzf_icon_fahuo" style="width:51px;"></i>闪电发货</span> <span><i class="bzf_icon_qitian"></i>七天退换</span> <span><i class="bzf_icon_money" style="width:42px;height:42px;"></i>退款保障</span> </div> <div class="row bzf_footer_tail"> <p><a target="_blank" href="http://www.bangzhufu.com">棒主妇商城</a> | <a target="_blank" href="http://www.bzfshop.net">棒主妇开源</a> |
                <a target="_blank" href="http://www.bzfshop.net">友情链接1</a></p> <p>棒主妇开源 版权所有 ©Copyright 2010-2014 All Rights Reserved</p> <p>ICP备案：<a target="_blank" href="http://www.miit.gov.cn/">京ICP备100号-1</a></p> <p> <img style="width:1px;height:1px;" src="/Cron/Run"/> <script type='text/javascript'>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-10632150-6', 'bzfshop.net');
  ga('send', 'pageview');
</script> </p> </div> </div> </body> </html><?php }} ?>
