<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:31:38
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Manage/Tpl/user_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9745772653f440cac1afe2-56166632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b56c14255a6cff9eaeab0d27871bac93564d71' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Manage/Tpl/user_login.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9745772653f440cac1afe2-56166632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DEBUG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440cac88d69_57596083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440cac88d69_57596083')) {function content_53f440cac88d69_57596083($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- 让 IE 使用最新模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>用户登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="棒主妇商城管理后台">
    <meta name="author" content="棒主妇开源">

    <!-- 指定360浏览器使用极速模式 -->
    <meta name="renderer" content="webkit"/>
    <!-- /指定360浏览器使用极速模式 -->

    <!-- 引入 CSS 文件 -->
    <?php echo $_smarty_tpl->getSubTemplate ("layout_block_link_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <!-- /引入 CSS 文件 -->

</head>

<body>

<?php if ($_smarty_tpl->tpl_vars['DEBUG']->value>0) {?>
    <!-- 调试提醒 -->
    <div id="system_top_navbar" class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-inner">
            <div class="container" style="text-align:center;">
                <h5>注意：现在是 DEBUG (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['DEBUG']->value, ENT_QUOTES, 'UTF-8');?>
) 模式</h5>
            </div>
        </div>
    </div>
    <!-- /调试提醒 -->
<?php }?>

<!-- main_body -->
<div id="main_body" class="container">

    <!-- ====================================== 这里是页面的主体内容 ============================================ -->

    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">棒主妇-管理后台</h2>

        <div class="control-group">
            <label class="control-label">用户名*</label>

            <div class="controls">
                <input placeholder="这里输入用户名" class="input-block-level" type="text" name="user_name"
                       data-validation-required="data-validation-required"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">密&nbsp;&nbsp;&nbsp;码*</label>

            <div class="controls">
                <input placeholder="这里输入密码" class="input-block-level" type="password" name="password" minlength="6"
                       data-validation-required="data-validation-required"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">验证码*</label>

            <div class="controls">
                <input id="captcha_input" class="span1" type="text" name="captcha"
                       data-validation-required="data-validation-required"/>
                <span id="captcha_image">点击输入获得验证码</span>

                <p>
                    &nbsp;
                </p>
            </div>
        </div>

        <button type="submit" class="btn btn-large btn-primary" type="submit">点击登陆</button>
    </form>

    <!-- ====================================== /这里是页面的主体内容 ============================================ -->

</div>
<!-- /main_body -->

<!-- 360浏览器提示 -->
<!--[if lte IE 9]>

<div class="container" style="text-align: center;">
    <h4>如果你使用的是 360浏览器，请切换到“极速模式”达到最佳浏览效果</h4>
    <img src="<?php echo smarty_helper_get_asset_url(array('asset'=>'img/360browser_help.jpg'),$_smarty_tpl);?>
"/>
</div>
<![endif]-->
<!-- /360浏览器提示 -->

<!-- 让 main_body 和下面的 footer 中间隔离出一段距离 -->
<div id="main_body_tail" class="container">
    <!-- 调用 Cron 执行，用于驱动系统的 Cron 去执行一些周期性的任务 -->
    <img style="width:1px;height:1px;" src="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cron/Run'),$_smarty_tpl);?>
"/>
</div>
<!-- /让 main_body 和下面的 footer 中间隔离出一段距离 -->

<!-- 引入 JS 文件 -->
<?php echo $_smarty_tpl->getSubTemplate ("layout_block_link_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<!-- /引入 JS 文件 -->

<!-- IE 7 以下浏览器弹出警告框 -->

<!--[if lte IE 7]>
<script type="text/javascript">
    window.browser_is_lte_ie7_fwtewgjgowjgw = true;
</script>
<![endif]-->

<script type="text/javascript">
    /**
     * 这里的代码等 document.ready 才执行
     */
    jQuery((function (window, $) {
        /**
         * user_login.tpl   user_register.tpl
         *
         * 验证码图片显示，当输入框第一次获得焦点的时候取得验证码
         * */
        $("#captcha_input").one('focus', function () {
            bZF.loadCaptchaImage("#captcha_image");
        });
    })(window, jQuery));
</script>

<script type="text/javascript">

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
</script>


<?php if (0==$_smarty_tpl->tpl_vars['DEBUG']->value) {?>
    <!-- 尾部 footer -->
    <div class="navbar navbar-fixed-bottom">
        <div class="navbar-inner">
            <div class="container">
                <div class="row" style="text-align:center;">
                    <span>版权所有：bzfshop 2010-<?php echo htmlspecialchars(smarty_modifier_date_format(time(),"%Y"), ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /尾部 footer -->
<?php }?>

</body>
</html><?php }} ?>
