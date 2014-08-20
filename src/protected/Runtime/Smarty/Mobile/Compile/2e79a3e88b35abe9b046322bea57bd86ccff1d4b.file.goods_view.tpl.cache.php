<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 15:26:09
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/goods_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173655432453f44d9167d584-93129603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e79a3e88b35abe9b046322bea57bd86ccff1d4b' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/goods_view.tpl',
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
  'nocache_hash' => '173655432453f44d9167d584-93129603',
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
  'unifunc' => 'content_53f44d917dad70_04259803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f44d917dad70_04259803')) {function content_53f44d917dad70_04259803($_smarty_tpl) {?><!DOCTYPE html>
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
                var FLASH_MESSAGE_STR = '<?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php echo smarty_helper_function_flash_message_str(array(),$_smarty_tpl);?>
/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>
'; // 输出 flash message
                var USER_NAME_DISPLAY = '<?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars[\'USER_NAME_DISPLAY\']->value)===null||$tmp===\'\' ? \'\' : $tmp), ENT_QUOTES, \'UTF-8\');?>
/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>
';
                var SESSION_ID = '<?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php echo htmlspecialchars(session_id(), ENT_QUOTES, \'UTF-8\');?>
/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>
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

            
                <?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php if ($_smarty_tpl->tpl_vars[\'IS_USER_AUTH\']->value) {?>/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>

                    <!-- 我的账号 按钮 -->
                    <div data-role="controlgroup" class="ui-btn-right"
                         data-type="horizontal"
                         data-mini="true">
                        <a id="page_header_my_account" href="<?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php echo smarty_helper_function_make_url(array(\'controller\'=>\'/My/Account\'),$_smarty_tpl);?>
/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>
"
                           data-role="button"
                           data-icon="bars">我的账户</a>
                    </div>
                    <!-- /我的账号 按钮 -->
                <?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php } else { ?>/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>

                    <!-- 登陆注册 按钮 -->
                    <div data-role="controlgroup" class="ui-btn-right"
                         data-type="horizontal"
                         data-mini="true">
                        <a id="page_header_user_register" href="<?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php echo smarty_helper_function_make_url(array(\'controller\'=>\'/User/Register\'),$_smarty_tpl);?>
/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>
"
                           data-transition="flip"
                           data-role="button" data-icon="plus">注册</a>
                        <a id="page_header_user_login" href="<?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php echo smarty_helper_function_make_url(array(\'controller\'=>\'/User/Login\'),$_smarty_tpl);?>
/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>
"
                           data-transition="flip"
                           data-role="button" data-icon="check">登陆</a>
                    </div>
                    <!-- /登陆注册 按钮 -->
                <?php echo '/*%%SmartyNocache:173655432453f44d9167d584-93129603%%*/<?php }?>/*/%%SmartyNocache:173655432453f44d9167d584-93129603%%*/';?>

            

        </div>
        <!-- /Page Header -->

        <!-- =============================  page content 内容  =========================================== -->

        <!-- Page 主体内容 -->
        <div data-role="content">
            

    <!-- 商品标题 -->
    <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
</h4>
    <!-- /商品标题 -->

    <!-- 商品头图和价格 -->
    <div class="ui-grid-a">

        <!-- 头图 -->
        <div class="ui-block-a">

            <?php if (isset($_smarty_tpl->tpl_vars['goodsGalleryArray']->value)) {?>
                <?php $_smarty_tpl->tpl_vars['goodsMainImage'] = new Smarty_variable($_smarty_tpl->tpl_vars['goodsGalleryArray']->value[0]['img_url'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['goodsThumbImage'] = new Smarty_variable($_smarty_tpl->tpl_vars['goodsGalleryArray']->value[0]['thumb_url'], null, 0);?>
            <?php }?>

            <img class="lazyload goods_thumbnail_image bzf_zoom" style="border: 1px solid silver;"
                 src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/lazyload_placeholder_460_344.png'),$_smarty_tpl);?>
"
                 data-original="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsThumbImage']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                 data-image-zoom="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsMainImage']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
            <noscript>
                <img class="goods_thumbnail_image" style="border: 1px solid silver;"
                     src="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsThumbImage']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
            </noscript>

        </div>
        <!-- 头图 -->

        <!-- 商品价格信息 -->
        <div class="ui-block-b" style="padding: 10px 10px;">
            <div class="ui-grid-a">
                <div class="ui-block-a" style="font-weight: bold;">现价</div>
                <div class="ui-block-b" style="color:red;font-weight: bold;">
                    ￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
</div>
                <div class="ui-block-a" style="font-weight: bold;">原价</div>
                <div class="ui-block-b" style="text-decoration: line-through;color:blue;">
                    ￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['market_price']), ENT_QUOTES, 'UTF-8');?>
</div>
                <div class="ui-block-a" style="font-weight: bold;">邮费</div>
                <div class="ui-block-b" style="color:red;font-weight: bold;">
                    ￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['shipping_fee']), ENT_QUOTES, 'UTF-8');?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['shipping_free_number']>0) {?>
                    <div class="ui-block-a" style="font-weight: bold;">提示</div>
                    <div class="ui-block-b">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['shipping_free_number'], ENT_QUOTES, 'UTF-8');?>
件免邮
                    </div>
                <?php }?>
            </div>
        </div>
        <!-- 商品价格信息 -->

        <div class="ui-block-a">
            <a data-role="button" data-rel="back" data-mini="true"
               data-theme="b" data-icon="arrow-l" data-transition="flip"
               href="<?php echo smarty_helper_function_make_url(array('controller'=>'/'),$_smarty_tpl);?>
">返回前页</a>
        </div>

        <div class="ui-block-b">
            <a data-role="button" data-mini="true" data-theme="b"
               href="tel:<?php echo smarty_helper_function_get_option_value(array('optionKey'=>'kefu_telephone'),$_smarty_tpl);?>
">客服电话</a>
        </div>

    </div>
    <!-- 隐藏变量 -->
    <input type="hidden" id="bzf_goods_view_goods_id_input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_id'], ENT_QUOTES, 'UTF-8');?>
"/>
    <!-- /隐藏变量 -->

    <!-- 商品的规格选择 -->
    <label for="goods_choose_speclist">商品选择</label>
    <?php if (isset($_smarty_tpl->tpl_vars['goodsSpec']->value)) {?>
        <select id="goods_choose_speclist" name="goods_choose_speclist" data-native-menu="false">
            <?php  $_smarty_tpl->tpl_vars['specItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['specItem']->_loop = false;
 $_smarty_tpl->tpl_vars['specKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodsSpec']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['specItem']->key => $_smarty_tpl->tpl_vars['specItem']->value) {
$_smarty_tpl->tpl_vars['specItem']->_loop = true;
 $_smarty_tpl->tpl_vars['specKey']->value = $_smarty_tpl->tpl_vars['specItem']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['specItem']->value['goods_number']>0) {?> <!-- 有库存才能选择 -->
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specKey']->value, ENT_QUOTES, 'UTF-8');?>
" goods_number="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specItem']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specKey']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['specItem']->value['goods_spec_add_price']>0) {?>(加<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['specItem']->value['goods_spec_add_price']), ENT_QUOTES, 'UTF-8');?>
元)<?php }?>
                        [库存<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specItem']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
]
                    </option>
                <?php }?>
            <?php } ?>
        </select>
    <?php } else { ?>
        <select id="goods_choose_speclist" name="goods_choose_speclist" data-native-menu="false">
            <option value="" goods_number="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
">
                默认规格 [库存<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
]
            </option>
        </select>
    <?php }?>
    <label for="goods_view_buy_count">购买数量*</label>
    <input type="number" id="goods_view_buy_count" value="1"
           name="goods_view_buy_count"
           pattern="[0-9]+" min="1" required="required"/>
    <!-- /商品的规格选择 -->

    <!-- 加入购物车 -->
    <div class="ui-grid-a">
        <div class="ui-block-a">
            <input id="bzf_goods_view_add_goods_to_cart" type="button" data-theme="e" value="加入购物车"/>
        </div>
        <div class="ui-block-b">
            <a data-role="button" data-theme="f" data-transition="slide"
               href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cart/Show'),$_smarty_tpl);?>
">查看购物车</a>
        </div>
    </div>
    <!-- /加入购物车 -->

    <!-- 商品的各种介绍 -->
    <div data-role="collapsible-set" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d"
         data-theme="c" data-content-theme="d">

        <div data-role="collapsible">
            <h3>商品简介</h3>
            <?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_brief'];?>

        </div>
        <div data-role="collapsible">
            <h3>商品提示</h3>
            <?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_notice'];?>

        </div>
        <div data-role="collapsible">
            <h3>商品详情</h3>
            <button data-theme="e" data-mini="true" onclick="bZF.load_all_lazy_image();">
                点击显示全部图片
            </button>
            <?php echo smarty_helper_modifier_html_image_lazyload($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_desc']);?>

        </div>
        <div data-role="collapsible">
            <h3>售后服务</h3>
            <?php if (!empty($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_after_service'])) {?>
                <?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_after_service'];?>

                <br/>
            <?php }?>
            <?php echo smarty_helper_function_get_option_value(array('optionKey'=>"goods_after_service"),$_smarty_tpl);?>

        </div>
        <div data-role="collapsible">
            <h3>商家信息</h3>

            <p>该商品由 <?php echo smarty_helper_function_get_option_value(array('optionKey'=>'merchant_name'),$_smarty_tpl);?>
 提供</p>
            <a data-role="button" href="tel:<?php echo smarty_helper_function_get_option_value(array('optionKey'=>'kefu_telephone'),$_smarty_tpl);?>
" data-theme="f">商家电话</a>

        </div>
    </div>
    <!-- /商品的各种介绍 -->


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
