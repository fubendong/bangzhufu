<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:11:25
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/install/Tpl/install_step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57293800853f43c0d8ba8e0-36290007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ade1064dcd4c55dc672af2bc088a7c26ee4918f' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/install/Tpl/install_step3.tpl',
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
  'nocache_hash' => '57293800853f43c0d8ba8e0-36290007',
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
  'unifunc' => 'content_53f43c0d945e29_17406631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f43c0d945e29_17406631')) {function content_53f43c0d945e29_17406631($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
                <div class="bar bar-success active" style="width: 25%;">
                    <h5>2.环境检查&nbsp;&nbsp;&gt;&gt;</h5>
                </div>
                <div class="bar bar-success active" style="width: 25%;">
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
            <h4>棒主妇开源--导入数据</h4>

            <?php if (!empty($_smarty_tpl->tpl_vars['cloud_message']->value)) {?>
                <h5 style="color: red;text-align: right;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cloud_message']->value, ENT_QUOTES, 'UTF-8');?>
</h5>
            <?php }?>

            <form class="form-horizontal form-horizontal-inline" method="POST">

                <div class="row">

                    <div class="span4">
                    </div>

                    <div class="span6">

                        <!-- Bae3 需要输入 API Key 和 Secret Key -->
                        <?php if ('Bae3'==$_smarty_tpl->tpl_vars['currentEngineStr']->value) {?>
                            <div class="control-group">
                                <div class="controls">
                                    <span class="input-label">API Key</span>
                                    <input class="span2" name="sysConfig[bae3_api_key]" value=""
                                           type="text" data-validation-required-message="API Key不能为空"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <span class="input-label">Secret Key</span>
                                    <input class="span2" name="sysConfig[bae3_secret_key]" value=""
                                           type="text" data-validation-required-message="Secret Key不能为空"/>
                                </div>
                            </div>
                        <?php }?>

                        <!--  Sae 平台不需要配置数据库，直接从环境变量中取得即可 -->
                        <?php if ('Sae'!=$_smarty_tpl->tpl_vars['currentEngineStr']->value) {?>
                            <div class="control-group">
                                <div class="controls">
                                    <span class="input-label">数据库地址</span>
                                    <input class="span2" name="dbHost" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dbHost']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           type="text" data-validation-required-message="数据库地址不能为空"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <span class="input-label">数据库端口</span>
                                    <input class="span2" name="dbPort" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dbPort']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           type="text" data-validation-required-message="数据库端口不能为空"
                                           pattern="[0-9]+" data-validation-pattern-message="数据库端口应该是全数字"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <span class="input-label">数据库名称</span>
                                    <input class="span2" name="dbName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dbName']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           type="text" data-validation-required-message="数据库名称不能为空"/>
                                </div>
                            </div>
                            <!-- Bae3 平台不需要配置数据库的用户名和密码，直接用 Api Key -->
                            <?php if ('Bae3'!=$_smarty_tpl->tpl_vars['currentEngineStr']->value) {?>
                                <div class="control-group">
                                    <div class="controls">
                                        <span class="input-label">用户名</span>
                                        <input class="span2" name="sysConfig[db_username]" value=""
                                               type="text" data-validation-required-message="用户名不能为空"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <span class="input-label">密码</span>
                                        <input class="span2" name="sysConfig[db_password]" value=""
                                               type="password" data-validation-required-message="密码不能为空"/>
                                    </div>
                                </div>
                            <?php }?>

                        <?php }?>

                    </div>

                    <div class="span2">
                    </div>

                </div>

                <div class="row" style="text-align: center;margin-top: 20px;">
                    <button type="submit" class="btn btn-success">导入数据</button>
                </div>

            </form>

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
