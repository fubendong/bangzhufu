<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:31:37
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/mobile_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96742363253f440c92a5727-07978875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9a6d006bf36d5e3a88e5a32027f2371240e80c' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/mobile_index.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '7d3b3bfdb509b47dd53347add89e23ed7290bcfd' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/page_layout.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '03c40b283613d9c9946a1886da394f65475d590f' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/layout.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96742363253f440c92a5727-07978875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_title' => 0,
    'seo_description' => 0,
    'seo_keywords' => 0,
    'WEB_ROOT_HOST' => 0,
    'WEB_ROOT_BASE' => 0,
    'WEB_ROOT_BASE_RES' => 0,
    'USER_NAME_DISPLAY' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440c93d9e30_74415696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440c93d9e30_74415696')) {function content_53f440c93d9e30_74415696($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_title']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</title>
    <meta name="description" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_description']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
    <meta name="keywords" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_keywords']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
    <meta name="author" content="棒主妇开源"/>

    <!-- 合并所有的 Css 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <?php echo smarty_helper_function_dump_merged_asset_css_url(array('asset'=>'jquery-mobile/theme/bzf-default.min.css,
    jquery-mobile/theme/bzf-default-asset.css
    '),$_smarty_tpl);?>

    <!-- /合并所有的 Css 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'jquery-mobile/css/jquery.mobile.structure-1.3.1.min.css'),$_smarty_tpl);?>
"/>
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'css/mobile.css'),$_smarty_tpl);?>
"/>

    <script>
        var WEB_ROOT_HOST = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_HOST']->value, ENT_QUOTES, 'UTF-8');?>
';
        var WEB_ROOT_BASE = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE']->value, ENT_QUOTES, 'UTF-8');?>
';
        var WEB_ROOT_BASE_RES = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
';
        var FLASH_MESSAGE_STR = '';
        var USER_NAME_DISPLAY = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['USER_NAME_DISPLAY']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
';
        var ZOOM_IMAGE_PLACEHOLDER = '<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/lazyload_placeholder_460_344.png'),$_smarty_tpl);?>
';
        var SESSION_NAME = '<?php echo htmlspecialchars(session_name(), ENT_QUOTES, 'UTF-8');?>
';
    </script>

    <!-- 合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <?php echo smarty_helper_function_dump_merged_asset_js_url(array('asset'=>'jquery-mobile/js/jquery-1.9.1.min.js,
    jquery-mobile/js/jquery.lazyload.fix.min.js,
    js/mobile.js
    '),$_smarty_tpl);?>

    <!-- /合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->

    <script src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'jquery-mobile/js/jquery.mobile-1.3.1.min.js'),$_smarty_tpl);?>
"></script>
    <script src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'jquery-mobile/plugin/route/jquery.mobile.router.min.js'),$_smarty_tpl);?>
"></script>

    <!-- 在这里开启 Google Analytics 的手机统计 -->
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('bzf_is_option_valid', array('optionKey'=>'google_analytics_ua')); $_block_repeat=true; echo smarty_helper_block_is_option_valid(array('optionKey'=>'google_analytics_ua'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', '<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"google_analytics_ua"),$_smarty_tpl);?>
']);
            _gaq.push(['_gat._anonymizeIp']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <script type="text/javascript">
            // 监听页面加载事件，对每个页面加载提交 GA 的统计数据
            jQuery(document).on('pageshow', function (event, ui) {
                try {
                    _gaq.push(['_setAccount', '<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"google_analytics_ua"),$_smarty_tpl);?>
']);
                    if ($.mobile.activePage.attr("data-url")) {
                        var dataUrl = $.mobile.activePage.attr("data-url");
                        // 把我们加的 session_id 去掉
                        dataUrl = dataUrl.replace(new RegExp(SESSION_NAME + '=[0-9a-zA-Z]+&?', "g"), '');
                        _gaq.push(['_trackPageview', dataUrl]);
                    } else {
                        _gaq.push(['_trackPageview', event.target.id]);
                    }
                } catch (err) {
                }
            });
        </script>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_helper_block_is_option_valid(array('optionKey'=>'google_analytics_ua'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <!-- /在这里开启 Google Analytics 的手机统计 -->

</head>
<body>

<!-- =============================  网页主体内容  =========================================================== -->



    <!-- 主 Page -->
    <div data-role="page" class="ui-responsive-panel"
         data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CURRENT_PAGE_URL']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_title']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">

        
            <script>
                var FLASH_MESSAGE_STR = '<?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php echo smarty_helper_function_flash_message_str(array(),$_smarty_tpl);?>
/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>
'; // 输出 flash message
                var USER_NAME_DISPLAY = '<?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars[\'USER_NAME_DISPLAY\']->value)===null||$tmp===\'\' ? \'\' : $tmp), ENT_QUOTES, \'UTF-8\');?>
/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>
';
                var SESSION_ID = '<?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php echo htmlspecialchars(session_id(), ENT_QUOTES, \'UTF-8\');?>
/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>
';
            </script>
        

        <!-- Page Header -->
        <div data-role="header" data-theme="f">

            <div data-role="controlgroup" class="ui-btn-left" data-type="horizontal"
                 data-mini="true">
                <a id="page_header_goods_category" href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/CategoryList'),$_smarty_tpl);?>
"
                   data-role="button"
                   data-icon="bars">商品分类</a>
            </div>

            <h1><?php echo smarty_helper_function_get_option_value(array('optionKey'=>'site_name'),$_smarty_tpl);?>
</h1>

            
                <?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php if ($_smarty_tpl->tpl_vars[\'IS_USER_AUTH\']->value) {?>/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>

                    <!-- 我的账号 按钮 -->
                    <div data-role="controlgroup" class="ui-btn-right"
                         data-type="horizontal"
                         data-mini="true">
                        <a id="page_header_my_account" href="<?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php echo smarty_helper_function_make_url(array(\'controller\'=>\'/My/Account\'),$_smarty_tpl);?>
/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>
"
                           data-role="button"
                           data-icon="bars">我的账户</a>
                    </div>
                    <!-- /我的账号 按钮 -->
                <?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php } else { ?>/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>

                    <!-- 登陆注册 按钮 -->
                    <div data-role="controlgroup" class="ui-btn-right"
                         data-type="horizontal"
                         data-mini="true">
                        <a id="page_header_user_register" href="<?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php echo smarty_helper_function_make_url(array(\'controller\'=>\'/User/Register\'),$_smarty_tpl);?>
/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>
"
                           data-transition="flip"
                           data-role="button" data-icon="plus">注册</a>
                        <a id="page_header_user_login" href="<?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php echo smarty_helper_function_make_url(array(\'controller\'=>\'/User/Login\'),$_smarty_tpl);?>
/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>
"
                           data-transition="flip"
                           data-role="button" data-icon="check">登陆</a>
                    </div>
                    <!-- /登陆注册 按钮 -->
                <?php echo '/*%%SmartyNocache:96742363253f440c92a5727-07978875%%*/<?php }?>/*/%%SmartyNocache:96742363253f440c92a5727-07978875%%*/';?>

            

        </div>
        <!-- /Page Header -->

        <!-- =============================  page content 内容  =========================================== -->

        <!-- Page 主体内容 -->
        <div data-role="content">
            

    <?php if (isset($_smarty_tpl->tpl_vars['categoryArray']->value)) {?>
        <ul class="listview_goods" data-role="listview" data-inset="false">

            <?php  $_smarty_tpl->tpl_vars['categoryItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryItem']->key => $_smarty_tpl->tpl_vars['categoryItem']->value) {
$_smarty_tpl->tpl_vars['categoryItem']->_loop = true;
?>

                <?php if (isset($_smarty_tpl->tpl_vars['categoryGoodsArray']->value[$_smarty_tpl->tpl_vars['categoryItem']->value['meta_id']])) {?>
                    <li data-role="list-divider" class="listview_head"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryItem']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</li>
                    <?php  $_smarty_tpl->tpl_vars['goodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryGoodsArray']->value[$_smarty_tpl->tpl_vars['categoryItem']->value['meta_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsItem']->key => $_smarty_tpl->tpl_vars['goodsItem']->value) {
$_smarty_tpl->tpl_vars['goodsItem']->_loop = true;
?>
                        <li>
                            <img class="lazyload ui-li-thumb bzf_zoom"
                                 src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/lazyload_placeholder_298_223.png'),$_smarty_tpl);?>
"
                                 data-original="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsThumbImageArray']->value[$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                                 data-image-zoom="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsImageArray']->value[$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                            <noscript>
                                <img class="ui-li-thumb"
                                     src="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsThumbImageArray']->value[$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                            </noscript>

                            <a style="padding-left: 0em;"
                               href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/View','goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
"
                               data-transition="flip">
                                <h2>
                                    <span class="current_price_label">现价:</span>
                                    <span class="current_price">￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
</span>
                                </h2>

                                <h2>
                                    <span class="original_price_label">原价:</span>
                                    <span class="original_price">￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['market_price']), ENT_QUOTES, 'UTF-8');?>
</span>
                                </h2>

                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
</p>
                            </a>
                        </li>
                    <?php } ?>

                <?php }?>

            <?php } ?>

        </ul>
    <?php } else { ?>
        <h1>没有商品</h1>
    <?php }?>


        </div>
        <!-- /Page 主体内容 -->

        <!-- =============================  /page content 内容 ========================================== -->

        <!-- 输出调试信息 -->
        <?php echo smarty_helper_function_debug_log_web(array(),$_smarty_tpl);?>

        <!-- /输出调试信息 -->

        <div data-role="footer" data-theme="f">
            <h1>©Copyright 棒主妇商城</h1>
        </div>

    </div>
    <!-- /主 Page -->



<!-- =============================  /网页主体内容  =========================================================== -->

</body>
</html>
<?php }} ?>
