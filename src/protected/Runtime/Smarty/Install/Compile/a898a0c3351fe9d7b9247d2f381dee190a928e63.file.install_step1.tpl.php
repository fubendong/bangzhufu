<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:11:18
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/install/Tpl/install_step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115248061053f43c067631e8-62729450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a898a0c3351fe9d7b9247d2f381dee190a928e63' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/install/Tpl/install_step1.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '7a1e4c688c8f15383ada20a7f2aee1efb5eda2ad' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/install/Tpl/layout.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115248061053f43c067631e8-62729450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_ROOT_BASE_RES' => 0,
    'WEB_ROOT_HOST' => 0,
    'WEB_ROOT_BASE' => 0,
    'DEBUG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f43c067d1600_44695512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f43c067d1600_44695512')) {function content_53f43c067d1600_44695512($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- 让 IE 使用最新模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>棒主妇开源-安装</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="棒主妇开源安装程序">
    <meta name="author" content="棒主妇开源">

    <!-- 指定360浏览器使用极速模式 -->
    <meta name="renderer" content="webkit"/>
    <!-- /指定360浏览器使用极速模式 -->

    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/css/bootstrap-1206.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/plugin/pnotify/jquery.pnotify.default.css"/>

    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/css/bootstrap-1206.ie6.css"/>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/css/ie.css"/>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/css/bootstrap-1206.fix.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
css/install.css"/>

</head>

<body>

<!-- 顶部导航菜单 -->
<div id="system_top_navbar" class="navbar navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" target="_blank" href="http://www.bzfshop.net">棒主妇开源</a>
            <ul class="nav">
                <li class="active"><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Install/Step1'),$_smarty_tpl);?>
">程序安装</a></li>
                <li><a target="_blank" href="http://www.bzfshop.net/article/246.html">安装指南</a></li>
                <li><a target="_blank" href="http://www.bzfshop.net/article/248.html">技术支持</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /顶部导航菜单 -->

<!-- main_body -->
<div id="main_body" class="container" style="margin-top: 10px;">

    <!-- ====================================== 这里是页面的主体内容 ============================================ -->

    
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 安装过程步骤显示 -->
        <div class="row" style="margin-top: 10px;">
            <div class="progress progress-striped active" style="height: 40px;">
                <div class="bar bar-success active" style="width: 25%;">
                    <h5>1.确认协议&nbsp;&nbsp;&gt;&gt;</h5>
                </div>
                <div class="bar bar-warning" style="width: 25%;">
                    <h5>2.环境检查&nbsp;&nbsp;&gt;&gt;</h5>
                </div>
                <div class="bar bar-warning" style="width: 25%;">
                    <h5>3.导入数据&nbsp;&nbsp;&gt;&gt;</h5>
                </div>
                <div class="bar bar-warning" style="width: 25%;">
                    <h5>4.安装成功</h5>
                </div>
            </div>
        </div>
        <!-- /安装过程步骤显示 -->


        <!-- 页面主体内容 -->
        <div class="row">
            <h4>棒主妇开源--同意协议</h4>

            <div class="row">
                <div class="span2">
                </div>
                <div class="span8">
                    <p>
                        本来按照惯例这地方应该是留着写点警告协议之类的东东，不过在中国这种印上了协议的纸大家拿来擦屁股都嫌它太硬，基本上只能写给自己看看的一种安慰罢了。既然这样，所以我们决定这地方干脆写点开心的内容好了，省得这么枯燥乏味。</p>

                    <p>使用棒主妇开源只有一个协议：希望我们的开源商城能对你的业务有所帮助，需要买服装就逛逛&nbsp;&nbsp;<a target="_blank"
                                                                                href="http://www.bangzhufu.com">棒主妇商城</a>&nbsp;&nbsp;支持我们一下吧
                    </p>

                    <p>没了，继续安装吧 ---></p>

                    <p style="text-align: right;"><--- 棒主妇开源团队</p>
                </div>
                <div class="span2">
                </div>
            </div>

            <div class="row" style="text-align: center;">
                <button class="btn btn-info">拒绝协议</button>
                <a class="btn btn-success" href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Install/Step2'),$_smarty_tpl);?>
">同意协议</a>
            </div>

        </div>
        <!-- /页面主体内容 -->

    </div>


    <!-- ====================================== /这里是页面的主体内容 ============================================ -->

</div>
<!-- /main_body -->

<!-- 让 main_body 和下面的 footer 中间隔离出一段距离 -->
<div id="main_body_tail" class="container">&nbsp;</div>
<!-- /让 main_body 和下面的 footer 中间隔离出一段距离 -->

<!-- 定义网站的起始路径，用于 JavaScript 的 Ajax 操作调用 -->
<script>
    var WEB_ROOT_HOST = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_HOST']->value, ENT_QUOTES, 'UTF-8');?>
';
    var WEB_ROOT_BASE = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE']->value, ENT_QUOTES, 'UTF-8');?>
';
    var WEB_ROOT_BASE_RES = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
';
</script>

<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/js/json2.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/js/bootstrap.ie.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/js/validator.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/js/jquery.cookie.js"></script>
<script type="text/javascript"
        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/plugin/pnotify/jquery.pnotify.min.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
js/install.js"></script>

<!--[if lte IE 9]>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
bootstrap-custom/js/iefix.js"></script>
<![endif]-->

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
