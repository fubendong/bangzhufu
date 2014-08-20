<?php /*%%SmartyHeaderCode:61260501253f440cab99782-66221774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7836ede7c5e5339a19d0054dac60bd5ff8fa5041' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/user_login.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    'b0de491b6096898656be598bacc207ffe2c81c43' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/layout_block_link_css.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '9b2b651cf27a7e4b8215cba4a7a34d627c219e2e' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/layout_block_link_js.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61260501253f440cab99782-66221774',
  'variables' => 
  array (
    'DEBUG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440cc569506_18639044',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440cc569506_18639044')) {function content_53f440cc569506_18639044($_smarty_tpl) {?><!DOCTYPE html> <html> <head> <meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"/> <title>用户登录</title> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta name="description" content="棒主妇商城管理后台"> <meta name="author" content="棒主妇开源"> <meta name="renderer" content="webkit"/> <link rel="stylesheet" type="text/css" href="http://3.huopool.com/supplier/asset/48917E92-F17E-4CB2-989E-8B726E2515EB/1.0.0/bootstrap-custom/css/1408516297.bootstrap-1206.css"/> <!--[if lte IE 6]>
<link rel="stylesheet" type="text/css"
      href="http://3.huopool.com/supplier/asset/48917E92-F17E-4CB2-989E-8B726E2515EB/1.0.0/bootstrap-custom/css/1408516297.bootstrap-1206.ie6.css"/>
<![endif]--> <!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="http://3.huopool.com/supplier/asset/48917E92-F17E-4CB2-989E-8B726E2515EB/1.0.0/bootstrap-custom/css/1408516297.ie.css"/>
<![endif]--> <link rel="stylesheet" type="text/css" href="http://3.huopool.com/supplier/asset/48917E92-F17E-4CB2-989E-8B726E2515EB/1.0.0/b7fb9404d2abc82cf43377fe610ad22b.min.css"/> </head> <body> <div id="main_body" class="container"> <form class="form-signin" method="post"> <h2 class="form-signin-heading">棒主妇-供货商后台</h2> <div class="control-group"> <label class="control-label">用户名*</label> <div class="controls"> <input placeholder="这里输入用户名" class="input-block-level" type="text" name="user_name" data-validation-required="data-validation-required"/> </div> </div> <div class="control-group"> <label class="control-label">密&nbsp;&nbsp;&nbsp;码*</label> <div class="controls"> <input placeholder="这里输入密码" class="input-block-level" type="password" name="password" minlength="3" data-validation-required="data-validation-required"/> </div> </div> <div class="control-group"> <label class="control-label">验证码*</label> <div class="controls"> <input id="captcha_input" class="span1" type="text" name="captcha" data-validation-required="data-validation-required"/> <span id="captcha_image">点击输入获得验证码</span> <p>
                    &nbsp;
                </p> </div> </div> <button type="submit" class="btn btn-large btn-primary" type="submit">点击登陆</button> </form> </div> <!--[if lte IE 9]>

<div class="container" style="text-align: center;">
    <h4>如果你使用的是 360浏览器，请切换到“极速模式”达到最佳浏览效果</h4>
    <img src="http://3.huopool.com/supplier/asset/48917E92-F17E-4CB2-989E-8B726E2515EB/1.0.0/img/1408516297.360browser_help.jpg"/>
</div>
<![endif]--> <div id="main_body_tail" class="container"> <img style="width:1px;height:1px;" src="/supplier/Cron/Run"/> </div> <script type="text/javascript">
    var WEB_ROOT_HOST = 'http://3.huopool.com';
    var WEB_ROOT_BASE = '/supplier';
    var WEB_ROOT_BASE_RES = 'http://3.huopool.com/supplier/asset/48917E92-F17E-4CB2-989E-8B726E2515EB/1.0.0/';
</script> <script type="text/javascript" src="http://3.huopool.com/supplier/asset/48917E92-F17E-4CB2-989E-8B726E2515EB/1.0.0/5bcee67fb6f4f8bab4541d19be8203c6.min.js"></script> <!--[if lte IE 7]>
<script type="text/javascript">
    window.browser_is_lte_ie7_fwtewgjgowjgw = true;
</script>
<![endif]--> <script type="text/javascript">
    /**
     * 验证码图片显示，当输入框第一次获得焦点的时候取得验证码
     * */
    $("#captcha_input").one('focus', function () {
        bZF.loadCaptchaImage("#captcha_image");
    });
</script> <script type="text/javascript">
    (function () {
        if (!window.browser_is_lte_ie7_fwtewgjgowjgw) {
            return;
        }
        jQuery.pnotify({
            title: '警告',
            text: '您的浏览器太老了，访问本网站可能会有显示错乱问题，建议换用最新的 Firefox、Chrome、360浏览器"急速模式"、IE8',
            type: 'error',
            hide: false
        }).show();
    })();
</script> <div class="navbar navbar-fixed-bottom"> <div class="navbar-inner"> <div class="container"> <div class="row" style="text-align:center;"> <span>版权所有：bzfshop 2010-2014</span> </div> </div> </div> </div> </body> </html><?php }} ?>
