<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:33:05
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/goods_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196726632853f441210c3722-69190883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e928ad98fdfc07d70022394251ac39f2bcddc78' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/goods_view.tpl',
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
  'nocache_hash' => '196726632853f441210c3722-69190883',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_53f441213233f0_75597096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f441213233f0_75597096')) {function content_53f441213233f0_75597096($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>

    <!-- 让 IE 使用最新模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_title']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</title>
    <meta name="description" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_description']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
    <meta name="keywords" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_keywords']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
    <meta name="author" content="棒主妇开源"/>

    <!-- 指定360浏览器使用极速模式 -->
    <meta name="renderer" content="webkit"/>
    <!-- /指定360浏览器使用极速模式 -->

    <?php if (isset($_smarty_tpl->tpl_vars['currentPageMobileUrl']->value)) {?>
        <!-- baidu 的 mobile 适配 -->
        <meta name="mobile-agent" content="format=html5;url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentPageMobileUrl']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <meta name="mobile-agent" content="format=xhtml;url=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentPageMobileUrl']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <!-- /baidu 的 mobile 适配 -->
    <?php }?>

    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'bootstrap-custom/css/bootstrap-1002.css'),$_smarty_tpl);?>
"/>

    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'bootstrap-custom/css/bootstrap-1002.ie6.css'),$_smarty_tpl);?>
"/>
    <![endif]-->

    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'bootstrap-custom/css/ie.css'),$_smarty_tpl);?>
"/>
    <![endif]-->

    <!-- 合并所有的 Css 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <?php echo smarty_helper_function_dump_merged_asset_css_url(array('asset'=>'bootstrap-custom/css/bootstrap-1002.fix.css,
    bootstrap-custom/plugin/cloud-zoom/cloud-zoom.css,
    bootstrap-custom/plugin/smartspin/smartspinner.css,
    bootstrap-custom/plugin/pnotify/jquery.pnotify.default.css,
    bootstrap-custom/plugin/quake-slider/css/quake.slider.css,
    bootstrap-custom/plugin/popover-extra/popover-extra-placements.css,
    bootstrap-custom/plugin/treetable/css/jquery.treetable.css,
    css/dropdown_category.css,
    css/jcarousel.css,
    css/quake-slider/quake.skin.css,
    css/jquery.treetable.theme.bzfshop.css,
    css/shop.css,
    css/advblock.css
    '),$_smarty_tpl);?>

    <!-- /合并所有的 Css 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->

    <!-- 这里是页面专用的 css 代码 -->
    
    <!-- 这里是页面专用的 css 代码 -->

</head>
<body>

<!-- 用 JS 设置页面的导航菜单 -->
<script type="text/javascript">
    window.bzf_set_nav_status = []; // 用于设置导航栏状态的数组，里面是很多设置 function()
</script>

<!-- QQ彩贝用户登陆显示 -->
<div id="qqcaibei_header_panel" class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <span id="qqcaibei_header_panel_headshow">这里是用户信息显示</span>
                <span id="qqcaibei_header_panel_showmsg">这里是用户消息</span>
                <span><a id="qqcaibei_header_panel_jifenurl" target="_blank" href="#">查看彩贝积分</a></span>
            </div>
        </div>
    </div>
</div>
<!-- /QQ彩贝用户登陆显示 -->

<!-- 头部，用户登录、注册栏 -->
<div class="navbar navbar-static-top">
    <div class="navbar-inner bzf_header_login_register">
        <div class="container">

            <!-- 欢迎信息，用户登录之后会被替换掉 -->
            <span class="bzf_welcome">
            您好，欢迎来到<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"site_name"),$_smarty_tpl);?>
！&nbsp;&nbsp;
            <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Login'),$_smarty_tpl);?>
">登陆</a>&nbsp;|
            <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Register'),$_smarty_tpl);?>
">注册</a>&nbsp;
            </span>
            <!-- /欢迎信息，用户登录之后会被替换掉 -->

            |&nbsp;<a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Order'),$_smarty_tpl);?>
">个人中心</a>&nbsp;|&nbsp;客服QQ&nbsp;
            <span>
                <a style="color:red;font-weight: bold;" target="_blank"
                   href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
&site=qq&menu=yes">
                    <?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>

                </a>
            </span>&nbsp;|&nbsp;客服电话&nbsp;
            <span style="color:red;font-weight: bold;"><?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_telephone"),$_smarty_tpl);?>
</span>
            &nbsp;&nbsp;
        </div>
    </div>
</div>
<!-- /头部，用户登录、注册栏 -->

<!-- 头部，Logo、搜索栏-->
<div class="navbar navbar-static-top">
    <div class="navbar-inner bzf_header_logo_search">
        <div class="container">
            <!-- 搜索 form -->
            <form method="GET" action="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search','static'=>false),$_smarty_tpl);?>
">
                <div class="row">

                    <span style="width:225px; height: auto">
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/'),$_smarty_tpl);?>
">
                            <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/header_logo.png'),$_smarty_tpl);?>
"/>
                        </a>
                    </span>

                    <span class="bzf_header_search_block">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/header_search_icon.png'),$_smarty_tpl);?>
"/>
                        <input type="text" name="keywords"/>
                        <button type="submit">搜&nbsp;索</button>
                    </span>

                    <span class="bzf_header_cart_block">
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Order'),$_smarty_tpl);?>
">
                            我的<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"site_name"),$_smarty_tpl);?>

                        </a>
                    </span>

                    <span id="bzf_header_cart_block" class="bzf_header_cart_block">
                        <span class="bzf_icon_cart_red"></span>
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cart/Show'),$_smarty_tpl);?>
">
                            购物车<span id="cart_goods_count">0</span>件
                        </a>
                    </span>

                </div>
            </form>
            <!-- /搜索 form -->
        </div>
    </div>
</div>
<!-- /头部，Logo、搜索栏-->

<!-- 头部，菜单导航栏-->
<div class="navbar navbar-static-top">
    <div class="navbar-inner bzf_header_nav_menu_dropdown">
        <div class="container">
            <ul id="bzf_header_nav_menu" class="nav">
                <li>
                    <!-- 这个链接不能点击（见 JS 文件）我们在这里加上 href 目的是提供给搜索引擎抓取，起到 SEO 优化的作用 -->
                    <a id="bzf_header_dropdown_menu"
                       href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Ajax/Category','static'=>false),$_smarty_tpl);?>
">全部商品分类<span
                                class="bzf_header_dropdown_menu_icon"></span></a>
                </li>
                <li>
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/'),$_smarty_tpl);?>
">首页</a>
                </li>
                <!-- 头部导航设置 -->
                <?php echo smarty_helper_function_assign_option_value(array('optionKey'=>"head_nav_json_data",'decodeJson'=>"true"),$_smarty_tpl);?>

                <?php  $_smarty_tpl->tpl_vars['headNavItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['headNavItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head_nav_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['headNavItem']->key => $_smarty_tpl->tpl_vars['headNavItem']->value) {
$_smarty_tpl->tpl_vars['headNavItem']->_loop = true;
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['headNavItem']->value['title'])) {?>
                        <li>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headNavItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headNavItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!-- /头部，菜单导航栏-->


<!-- 网页主体内容 -->
<div id="main_body" class="container">

    <!-- =============================  网页主体内容  =========================================================== -->

    

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bzf_set_nav_status.push(function ($) {
            $("#bzf_header_nav_menu li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <!-- 主体内容 row -->
    <div class="row" style="background-color: white;padding-bottom: 10px;">

    <?php if (isset($_smarty_tpl->tpl_vars['goods_view_adv_slider']->value)) {?>
        <!-- 广告图片轮播 -->
        <div class="row bzf_goods_view_head_slide_image_panel">

            <div class="quake-slider">
                <div class="quake-slider-images">
                    <?php  $_smarty_tpl->tpl_vars['sliderItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sliderItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_view_adv_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sliderItem']->key => $_smarty_tpl->tpl_vars['sliderItem']->value) {
$_smarty_tpl->tpl_vars['sliderItem']->_loop = true;
?>
                        <a target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                        </a>
                    <?php } ?>
                </div>
            </div>

        </div>
        <!-- /广告图片轮播 -->
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['goodsCategoryLevelArray']->value)) {?>
        <!-- 商品所处的分类层级 -->
        <div class="row">
            <ul class="breadcrumb">
                <?php  $_smarty_tpl->tpl_vars['goodsCategoryItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsCategoryItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCategoryLevelArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsCategoryItem']->key => $_smarty_tpl->tpl_vars['goodsCategoryItem']->value) {
$_smarty_tpl->tpl_vars['goodsCategoryItem']->_loop = true;
?>
                    <li>
                        <a target="_blank"
                           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Category','category_id'=>$_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_id']),$_smarty_tpl);?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryItem']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                        <span class="divider">&gt;</span>
                    </li>
                <?php } ?>
                <li>
                    <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
"
                       href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/View','goods_id'=>$_smarty_tpl->tpl_vars['goodsInfo']->value['goods_id']),$_smarty_tpl);?>
">
                        当前商品
                    </a>
                    <span class="divider">&nbsp;</span>
                </li>
            </ul>
        </div>
        <!-- /商品所处的分类层级 -->
    <?php }?>

    <!-- 商品详情头部，包括头图和价格区域 -->
    <div class="row">

    <!-- 商品头图 -->
    <div class="span6">

        <!-- 商品大图 -->
        <div class="bzf_goods_view_big_image">
            <a href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_800x800_gray.gif'),$_smarty_tpl);?>
"
               id="bzf_goods_view_zoom_image" class="cloud-zoom"
               rel="position:'right', adjustX: 10, zoomWidth: 400, zoomHeight: 400">
                <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"/>
            </a>
        </div>
        <!-- /商品大图 -->

        <!-- 商品缩略图列表 -->
        <div id="bzf_goods_view_thumb_image_slider" class="jcarousel-skin-goods-image-thumbnail">
            <ul>
                <?php if (!isset($_smarty_tpl->tpl_vars['goodsGalleryArray']->value)) {?>
                    <!-- 一个缩略图 -->
                    <li>
                        <a href="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_800x800_gray.gif'),$_smarty_tpl);?>
"
                           class="cloud-zoom-gallery"
                           rel="useZoom:'bzf_goods_view_zoom_image',smallImage:'<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_460x460_gray.gif'),$_smarty_tpl);?>
',title:'空图片'">
                            <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                 data-original="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_250x250.gif'),$_smarty_tpl);?>
"/>
                        </a>
                    </li>
                    <!-- /一个缩略图 -->
                <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['goodsGalleryItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsGalleryItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsGalleryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsGalleryItem']->key => $_smarty_tpl->tpl_vars['goodsGalleryItem']->value) {
$_smarty_tpl->tpl_vars['goodsGalleryItem']->_loop = true;
?>
                        <!-- 一个缩略图 -->
                        <li>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['img_original'], ENT_QUOTES, 'UTF-8');?>
"
                               data-img_id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['img_id'], ENT_QUOTES, 'UTF-8');?>
"
                               class="cloud-zoom-gallery"
                               rel="useZoom:'bzf_goods_view_zoom_image',smallImage:'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value["img_url"], ENT_QUOTES, 'UTF-8');?>
',title:'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value["img_desc"], ENT_QUOTES, 'UTF-8');?>
'">
                                <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                     data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsGalleryItem']->value['thumb_url'], ENT_QUOTES, 'UTF-8');?>
"/>
                            </a>
                        </li>
                        <!-- /一个缩略图 -->
                    <?php } ?>
                <?php }?>
            </ul>
        </div>
        <!-- 商品缩略图列表 -->

    </div>
    <!-- /商品头图 -->

    <!-- 商品价格和描述 -->
    <div class="span6" style="padding-bottom: 20px;">

        <!-- 隐藏变量 -->
        <input type="hidden" id="bzf_goods_view_goods_id_input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_id'], ENT_QUOTES, 'UTF-8');?>
"/>
        <!-- 商品的库存 -->
        <input type="hidden" id="bzf_goods_view_goods_number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
"/>

        <!-- 商品大标题 -->
        <div id="bzf_goods_title_caption" class="bzf_goods_title_caption">
            <h2><span class="bzf_prefix">&nbsp;</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
</h2>
        </div>
        <!-- /商品大标题 -->

        <div style="padding:5px 0px;">
            <span>原价：</span>
            <span style="text-decoration: line-through;">￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['market_price']), ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
        <div style="padding:5px 0px 5px 0px;">
            <span>现价：</span>
                <span id="bzf_goods_view_shop_price_input_span"
                      style="color:#E4006E;font-size:20px;font-weight: bold;">￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ((isset($_smarty_tpl->tpl_vars['goodsInfo']->value['shop_price_notice'])&&!empty($_smarty_tpl->tpl_vars['goodsInfo']->value['shop_price_notice']))) {?>
                <label class="label label-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['shop_price_notice'], ENT_QUOTES, 'UTF-8');?>
</label>
            <?php }?>
            <input type="hidden" id="bzf_goods_view_shop_price_input"
                   value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
"/>
        </div>

        <!-- 不同的价格，用于不同的显示 -->
        <input id="bzf_goods_special_price_360tequan_price" type="hidden"
               value="<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsPromote']->value['360tequan_price']), ENT_QUOTES, 'UTF-8');?>
"/>
        <input id="bzf_goods_special_price_360tequan_price_notice" type="hidden"
               value="360特权价"/>
        <input id="bzf_goods_special_price_360tequan_price_goods_title_prefix" type="hidden"
               value="【360特权团购，立减<?php echo htmlspecialchars(smarty_helper_modifier_money_display(($_smarty_tpl->tpl_vars['goodsInfo']->value['shop_price']-$_smarty_tpl->tpl_vars['goodsPromote']->value['360tequan_price'])), ENT_QUOTES, 'UTF-8');?>
元】"/>
        <!-- 不同的价格，用于不同的显示 -->

        <!-- 用户特权价格 -->
        <div id="bzf_goods_special_price" style="padding:5px 0px;display: none;">
            <label class="label label-success">360特权价</label>
            <span style="color:#E4006E;font-size:20px;font-weight: bold;">￥15</span>
        </div>
        <!-- 用户特权价格 -->

        <div style="padding:5px 0px;">
            <span>邮费：</span>
                    <span style="color:#E4006E;font-weight: bold;">
                        <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['shipping_fee']>0) {?>
                            ￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['shipping_fee']), ENT_QUOTES, 'UTF-8');?>

                        <?php } else { ?>
                            商家包邮
                        <?php }?>
                    </span>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['shipping_free_number']>0) {?>
            <div style="padding:5px 0px;">
                <label class="label label-success">邮费优惠</label>
                本商品任选
                <span style="font-weight: bold;color: #E4006E;padding: 0px 5px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['shipping_free_number'], ENT_QUOTES, 'UTF-8');?>
</span>件以上免邮费
            </div>
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['goodsSpecNameArray']->value)) {?>
            <!-- 商品加价 -->
            <input type="hidden" id="bzf_goods_view_goods_spec_add_price" value="0"/>
            <!-- JS 记录商品 Spec 属性 -->
            <script type="text/javascript">
                var goods_view_goods_spec_json = '<?php echo $_smarty_tpl->tpl_vars['goodsSpecJson']->value;?>
';
            </script>
            <!-- 商品的选择 -->
            <table class="table table-bordered bzf_goods_view_select">

                <?php $_smarty_tpl->tpl_vars['goodsSpecValue1ArrayStr'] = new Smarty_variable(implode('',$_smarty_tpl->tpl_vars['goodsSpecValue1Array']->value), null, 0);?>
                <?php if (!empty($_smarty_tpl->tpl_vars['goodsSpecValue1ArrayStr']->value)) {?>
                    <!-- 一级选择 -->
                    <tr id="goods_view_spec_value1">
                        <td width="15%"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecNameArray']->value[0])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <!-- 不同的选项 -->
                            <?php  $_smarty_tpl->tpl_vars['specValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['specValue']->_loop = false;
 $_from = array_unique($_smarty_tpl->tpl_vars['goodsSpecValue1Array']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['specValue']->key => $_smarty_tpl->tpl_vars['specValue']->value) {
$_smarty_tpl->tpl_vars['specValue']->_loop = true;
?>
                                <?php if (empty($_smarty_tpl->tpl_vars['specValue']->value)) {?>
                                    <!-- empty value -->
                                <?php } else { ?>
                                    <span onclick="bZF.goods_view_choose_spec(1,this);">
                                        <input type="radio" name="goods_view_spec_value1" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specValue']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                                        <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specValue']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                                        <i class="bzf_goods_view_spec_select_icon"></i>
                                    </span>
                                <?php }?>
                            <?php } ?>
                        </td>
                    </tr>
                    <!-- 一级选择 -->
                <?php }?>

                <?php $_smarty_tpl->tpl_vars['goodsSpecValue2ArrayStr'] = new Smarty_variable(implode('',$_smarty_tpl->tpl_vars['goodsSpecValue2Array']->value), null, 0);?>
                <?php if (!empty($_smarty_tpl->tpl_vars['goodsSpecValue2ArrayStr']->value)) {?>
                    <!-- 二级选择 -->
                    <tr id="goods_view_spec_value2">
                        <td width="15%"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecNameArray']->value[1])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <!-- 不同的选项 -->
                            <?php  $_smarty_tpl->tpl_vars['specValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['specValue']->_loop = false;
 $_from = array_unique($_smarty_tpl->tpl_vars['goodsSpecValue2Array']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['specValue']->key => $_smarty_tpl->tpl_vars['specValue']->value) {
$_smarty_tpl->tpl_vars['specValue']->_loop = true;
?>
                                <?php if (empty($_smarty_tpl->tpl_vars['specValue']->value)) {?>
                                    <!-- empty value -->
                                <?php } else { ?>
                                    <span class="inactive" onclick="bZF.goods_view_choose_spec(2,this);">
                                        <input type="radio" name="goods_view_spec_value2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specValue']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                                        <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specValue']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                                        <i class="bzf_goods_view_spec_select_icon"></i>
                                    </span>
                                <?php }?>
                            <?php } ?>
                        </td>
                    </tr>
                    <!-- 二级选择 -->
                <?php }?>


                <?php $_smarty_tpl->tpl_vars['goodsSpecValue3ArrayStr'] = new Smarty_variable(implode('',$_smarty_tpl->tpl_vars['goodsSpecValue3Array']->value), null, 0);?>
                <?php if (!empty($_smarty_tpl->tpl_vars['goodsSpecValue3ArrayStr']->value)) {?>
                    <!-- 三级选择 -->
                    <tr id="goods_view_spec_value3">
                        <td width="15%"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsSpecNameArray']->value[2])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <!-- 不同的选项 -->
                            <?php  $_smarty_tpl->tpl_vars['specValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['specValue']->_loop = false;
 $_from = array_unique($_smarty_tpl->tpl_vars['goodsSpecValue3Array']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['specValue']->key => $_smarty_tpl->tpl_vars['specValue']->value) {
$_smarty_tpl->tpl_vars['specValue']->_loop = true;
?>
                                <?php if (empty($_smarty_tpl->tpl_vars['specValue']->value)) {?>
                                    <!-- empty value -->
                                <?php } else { ?>
                                    <span class="inactive" onclick="bZF.goods_view_choose_spec(3,this);">
                                        <input type="radio" name="goods_view_spec_value3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specValue']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                                        <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specValue']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                                        <i class="bzf_goods_view_spec_select_icon"></i>
                                    </span>
                                <?php }?>
                            <?php } ?>
                        </td>
                    </tr>
                    <!-- 三级选择 -->
                <?php }?>

            </table>
            <!-- /商品的选择 -->
        <?php }?> <!-- !empty($goodsSpecValue1Array)-->

        <!-- 购买数量 -->
        <div style="padding:5px 0px 5px 0px;">
            <span>购买数量：</span><span><input id="goods_view_buy_count" type="text" value="1"/></span>
            <span id="goods_view_goods_number_display">
                    (库存 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
 件)
            </span>
                <span style="margin-left: 50px;">
                    <a class="btn btn-info btn-small" target="_blank"
                       href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Category','category_id'=>$_smarty_tpl->tpl_vars['goodsInfo']->value['cat_id']),$_smarty_tpl);?>
">
                        查看同类商品
                    </a>
                </span>
        </div>

        <!-- 加入购物车 -->
        <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['is_on_sale']>0) {?>
        <button class="bzf_button_big" onclick="bZF.goods_view_goods_buy();"> <!-- 可以购买 -->
            <?php } else { ?>
            <button class="bzf_button_big disabled"> <!-- 不可以购买 -->
                <?php }?>
                <span class="bzf_icon_cart_white"
                      style="line-height: 38px;vertical-align: middle;margin-right: 5px;"></span>
                加入购物车
            </button>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- 去购物车结算 -->
            <a class="bzf_button_big"
               href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cart/Show'),$_smarty_tpl);?>
">
                去购物车结算->
            </a>

    </div>
    <!-- /商品价格和描述 -->

    </div>
    <!-- /商品详情头部，包括头图和价格区域 -->


    <!-- 相关商品推荐区域 -->
    <div class="row bzf_goods_view_relate_goods_recommand">

        <!-- 标签导航头 -->
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#bzf_goods_view_link_goods_pane" data-toggle="tab">
                    <span rel="tooltip" data-placement="top"
                          data-title="商城推荐商品">关联推荐</span>
                </a>
            </li>
            <li>
                <a href="#bzf_goods_view_same_supplier_goods_pane" data-toggle="tab">
                    <span rel="tooltip" data-placement="top"
                          data-title="商品搭配购买，立即享受免邮">搭配免邮</span>
                </a>
            </li>
        </ul>
        <!-- /标签导航头 -->

        <div class="tab-content">

            <!-- 关联商品推荐 -->
            <div id="bzf_goods_view_link_goods_pane" class="tab-pane active">
                <?php if (isset($_smarty_tpl->tpl_vars['linkGoodsArray']->value)) {?>
                    <div class="jcarousel-skin-goods-recommand">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['linkGoodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkGoodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['linkGoodsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkGoodsItem']->key => $_smarty_tpl->tpl_vars['linkGoodsItem']->value) {
$_smarty_tpl->tpl_vars['linkGoodsItem']->_loop = true;
?>
                                <!-- 一个关联商品 -->
                                <li>
                                    <div class="bzf_image_wrap">
                                        <a target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkGoodsItem']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
"
                                           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/View','goods_id'=>$_smarty_tpl->tpl_vars['linkGoodsItem']->value['goods_id']),$_smarty_tpl);?>
">
                                            <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                                 data-original="<?php echo smarty_helper_function_goods_thumb_image(array('goods_id'=>$_smarty_tpl->tpl_vars['linkGoodsItem']->value['goods_id']),$_smarty_tpl);?>
"/>
                                        </a>
                                    </div>
                                    <div class="bzf_goods_view_goods_recommand_price_pane">
                                        <div class="market_price">
                                            原价：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['linkGoodsItem']->value['market_price']), ENT_QUOTES, 'UTF-8');?>
元
                                        </div>
                                        <div class="shop_price">
                                            现价：<span><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['linkGoodsItem']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
元</span>
                                        </div>
                                    </div>
                                </li>
                                <!-- /一个关联商品 -->
                            <?php } ?>
                        </ul>
                    </div>
                <?php }?>
            </div>
            <!-- /关联商品推荐 -->


            <!-- 相同供货商商品 -->
            <div id="bzf_goods_view_same_supplier_goods_pane" class="tab-pane">
                <?php if (isset($_smarty_tpl->tpl_vars['supplierGoodsArray']->value)) {?>
                    <div class="row" style="margin-bottom: 10px;padding-right: 15px;">
                        <a class="btn btn-success pull-right" target="_blank"
                           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search','static'=>false,'suppliers_id'=>$_smarty_tpl->tpl_vars['goodsInfo']->value['suppliers_id']),$_smarty_tpl);?>
">查看更多搭配免邮商品</a>
                    </div>
                    <div class="jcarousel-skin-goods-recommand">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['supplierGoodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplierGoodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supplierGoodsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplierGoodsItem']->key => $_smarty_tpl->tpl_vars['supplierGoodsItem']->value) {
$_smarty_tpl->tpl_vars['supplierGoodsItem']->_loop = true;
?>
                                <!-- 一个关联商品 -->
                                <li>
                                    <div class="bzf_image_wrap">
                                        <a target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplierGoodsItem']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
"
                                           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/View','goods_id'=>$_smarty_tpl->tpl_vars['supplierGoodsItem']->value['goods_id']),$_smarty_tpl);?>
">
                                            <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                                 data-original="<?php echo smarty_helper_function_goods_thumb_image(array('goods_id'=>$_smarty_tpl->tpl_vars['supplierGoodsItem']->value['goods_id']),$_smarty_tpl);?>
"/>
                                        </a>
                                    </div>
                                    <div class="bzf_goods_view_goods_recommand_price_pane">
                                        <div class="market_price">
                                            原价：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['supplierGoodsItem']->value['market_price']), ENT_QUOTES, 'UTF-8');?>
元
                                        </div>
                                        <div class="shop_price">
                                            现价：<span><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['supplierGoodsItem']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
元</span>
                                        </div>
                                    </div>
                                </li>
                                <!-- /一个关联商品 -->
                            <?php } ?>
                        </ul>
                    </div>
                <?php }?>
            </div>
        </div>
        <!-- /相同供货商商品 -->

    </div>
    <!-- /相关商品推荐区域 -->


    <!-- 商品下方区域 -->
    <div class="row" style="margin-top: 20px;padding: 0px 0px 0px 10px;">

        <!-- 左侧边栏 -->
        <div class="span3" style="width:216px;">

            <!-- 供货商信息 -->
            <div id="bzf_goods_view_supplier_pane" class="bzf_supplier_pane">

                <!-- 悬浮的时候显示的头部 -->
                <div class="bzf_sticky_header">
                    在线客服&nbsp;<a target="_blank"
                                 href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
&site=qq&menu=yes">
                        <img border="0"
                             src="http://wpa.qq.com/pa?p=2:<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
:41"
                             alt="QQ在线客服"
                             title="QQ在线客服"/>
                    </a>
                </div>
                <!-- /悬浮的时候显示的头部 -->

                <!-- 商家信息的主面板 -->
                <div class="bzf_hide bzf_supplier_main_pane">

                    <div class="header">
                        商家信息
                    </div>

                    <div class="supplier_pane_content">

                        <div class="supplier_banner">
                            <span style="font-size: 14px;font-weight: bold;">SHOP</span> bangzhufu.com
                        </div>
                        <div class="supplier_promise"></div>
                        <div class="divider"></div>
                        <div class="supplier_info">
                            <p><b>店铺动态评分</b></p>

                            <p>描述相符：<span>4.9</span>分</p>

                            <p>发货速度：<span>4.8</span>分</p>
                        </div>

                        <div class="divider"></div>
                        <div class="supplier_info">
                            <p>商 户 名 ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"merchant_name"),$_smarty_tpl);?>
</p>

                            <p>所 在 地 ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"merchant_address"),$_smarty_tpl);?>
</p>

                            <p>商务合作：QQ <a target="_blank"
                                          href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"business_qq"),$_smarty_tpl);?>
&site=qq&menu=yes"><?php echo smarty_helper_function_get_option_value(array('optionKey'=>"business_qq"),$_smarty_tpl);?>
</a>
                            </p>

                            <p>客服电话：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_telephone"),$_smarty_tpl);?>
</p>

                        </div>
                        <div class="divider"></div>
                        <div class="supplier_info" style="text-align: center;">
                            <p>客服 QQ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
</p>

                            <p>周一至周五 10:00-19:00</p>
                            <a target="_blank"
                               href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
&site=qq&menu=yes">
                                <img border="0"
                                     src="http://wpa.qq.com/pa?p=2:<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
:41"
                                     alt="QQ在线客服"
                                     title="QQ在线客服"/>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /商家信息的主面板 -->

            </div>
            <!-- /供货商信息 -->

            <!-- 商品浏览历史，由 JavaScript 生成 -->
            <div id="bzf_goods_view_history" class="bzf_goods_view_history">
                <div class="header">
                    最近浏览
                </div>
                <!-- 一个商品 -->
                <!-- div class="goods_view_item">
                    <a href="#">
                        <img src="#"/></a>

                    <p class="price">￥100.34</p>
                </div -->
                <!-- /一个商品 -->
            </div>
            <!-- /商品浏览历史，由 JavaScript 生成 -->

        </div>
        <!-- 左侧边栏 -->

        <!-- 右侧商品详情区域 -->
        <div class="span9 bzf_goods_view_goods_content" style="margin-left: 6px; width: 760px;">

            <!-- 标签导航头 -->
            <div id="bzf_goods_view_goods_detail_tabbar">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#bzf_goods_view_goods_desc_pane" data-toggle="tab">商品详情</a></li>
                    <li><a href="#bzf_goods_view_goods_notice_pane" data-toggle="tab">商品提示</a></li>
                    <li><a href="#bzf_goods_view_goods_attr_pane" data-toggle="tab">商品参数</a></li>
                    <li><a href="#bzf_goods_view_goods_comments_pane" data-toggle="tab">用户评价</a></li>
                    <li><a href="#bzf_goods_view_goods_shouhou_pane" data-toggle="tab">售后服务</a></li>
                </ul>
            </div>
            <!-- /标签导航头 -->

            <!-- 标签对应的内容 -->
            <div class="tab-content">

                <!-- 商品详情内容 -->
                <div id="bzf_goods_view_goods_desc_pane" class="tab-pane active">
                    <?php echo smarty_helper_function_get_option_value(array('optionKey'=>"goods_view_detail_notice"),$_smarty_tpl);?>

                    <?php echo smarty_helper_modifier_html_image_lazyload($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_desc']);?>

                </div>
                <!-- /商品详情内容 -->

                <!-- 商品提示 -->
                <div id="bzf_goods_view_goods_notice_pane" class="tab-pane">
                    <?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_notice'];?>

                </div>
                <!-- /商品提示 -->

                <!-- 商品规格参数 -->
                <div id="bzf_goods_view_goods_attr_pane" class="tab-pane">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="20%">&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($_smarty_tpl->tpl_vars['goodsAttrTreeTable']->value)) {?>
                            <?php  $_smarty_tpl->tpl_vars['goodsAttrValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsAttrValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsAttrTreeTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsAttrValue']->key => $_smarty_tpl->tpl_vars['goodsAttrValue']->value) {
$_smarty_tpl->tpl_vars['goodsAttrValue']->_loop = true;
?>
                                <?php if ('goods_type_attr_group'==$_smarty_tpl->tpl_vars['goodsAttrValue']->value['meta_type']) {?>
                                    <!-- 属性分组 -->
                                    <tr>
                                        <td class="attrlabel" style="font-weight: bold;"
                                            colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsAttrValue']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                                    </tr>
                                <?php } else { ?>
                                    <!-- 属性值 -->
                                    <tr>
                                        <td class="labelkey attrlabel"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsAttrValue']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                                        <?php if ('textarea'==$_smarty_tpl->tpl_vars['goodsAttrValue']->value['meta_ename']) {?>
                                            <td class="labelvalue"><?php echo nl2br($_smarty_tpl->tpl_vars['goodsAttrValue']->value['attr_item_value']);?>
</td>
                                        <?php } else { ?>
                                            <td class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsAttrValue']->value['attr_item_value'], ENT_QUOTES, 'UTF-8');?>
</td>
                                        <?php }?>
                                    </tr>
                                <?php }?>
                            <?php } ?>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
                <!-- /商品规格参数 -->

                <!-- 顾客评价 -->
                <div id="bzf_goods_view_goods_comments_pane" class="tab-pane">
                    <!-- 第一页的评价在一开始就生成在页面里面，后面的评价使用 ajax 载入，这样做的目的是希望做 SEO 优化有更多的内容 -->
                    <?php echo smarty_helper_function_goods_comment(array('goods_id'=>$_smarty_tpl->tpl_vars['goods_id']->value),$_smarty_tpl);?>

                </div>
                <!-- /顾客评价 -->

                <!-- 售后服务 -->
                <div id="bzf_goods_view_goods_shouhou_pane" class="tab-pane">
                    <?php if (!empty($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_after_service'])) {?>
                        <?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_after_service'];?>

                        <br/>
                    <?php }?>
                    <?php echo smarty_helper_function_get_option_value(array('optionKey'=>"goods_after_service"),$_smarty_tpl);?>

                </div>
                <!-- /售后服务 -->

            </div>
            <!-- /标签对应的内容 -->

        </div>
        <!-- 右侧商品详情区域 -->

    </div>
    <!-- /商品下方区域 -->

    </div>
    <!-- /主体内容 row -->
    <div class="row" style="height: 60px;background-color: white;"></div>


    <!-- =============================  /网页主体内容  =========================================================== -->

</div>
<!-- /网页主体内容 main_body -->

<!-- 底部，一堆关于我们的链接-->
<div class="navbar navbar-static-top">
    <div class="navbar-inner bzf_footer_introduction_panel">
        <div class="container">

            <!-- 取得底部导航数据 -->
            <?php echo smarty_helper_function_assign_option_value(array('optionKey'=>"foot_nav_json_data",'decodeJson'=>"true"),$_smarty_tpl);?>


            <?php $_smarty_tpl->tpl_vars["navItemListFirst"] = new Smarty_variable(true, null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['navItemList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navItemList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foot_nav_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navItemList']->key => $_smarty_tpl->tpl_vars['navItemList']->value) {
$_smarty_tpl->tpl_vars['navItemList']->_loop = true;
?>

            <?php if ($_smarty_tpl->tpl_vars['navItemListFirst']->value) {?>
            <div class="span2 list_panel" style="border-left: none;">
                <?php } else { ?>
                <div class="span2 list_panel">
                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars["navItemListFirst"] = new Smarty_variable(false, null, 0);?>

                    <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItemList']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
                    <?php  $_smarty_tpl->tpl_vars['navItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navItemList']->value['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navItem']->key => $_smarty_tpl->tpl_vars['navItem']->value) {
$_smarty_tpl->tpl_vars['navItem']->_loop = true;
?>
                        <?php if (ctype_digit($_smarty_tpl->tpl_vars['navItem']->value['url'])) {?> <!-- 数字表明这是指向一个 文章ID -->
                            <p><a target="_blank"
                                  href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Article/View','article_id'=>$_smarty_tpl->tpl_vars['navItem']->value['url']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </p>
                        <?php } else { ?>
                            <p><a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></p>
                        <?php }?>
                    <?php } ?>
                </div>
                <?php } ?>

                <div class="span2 tel_panel">
                    <p><span class="tel_icon"></span>客服热线</p>

                    <p><?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_telephone"),$_smarty_tpl);?>
</p>
                </div>

            </div>
        </div>
    </div>
    <!-- /底部，一堆关于我们的链接-->

    <!-- 商品分类，由 ajax 程序异步加载 -->
    <div class="row navsort">

    </div>
    <!-- /商品分类，由 ajax 程序异步加载 -->

    <!-- 页面右边悬浮框 -->
    <div id="bzf_right_float_panel" class="bzf_right_float_panel">

        <div id="bzf_right_float_kefu_block" class="bzf_right_float_panel_block">
            <span class="icon_kefu"></span>

            <div class="bzf_popover_html" style="display: none;">

                <!-- 客服信息 -->
                <div class="bzf_supplier_pane" style="width:216px;">
                    <div class="header">
                        商家信息
                    </div>
                    <div class="supplier_pane_content">
                        <div class="bzf_show">
                            <div class="supplier_info">
                                <p>商 户 名 ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"merchant_name"),$_smarty_tpl);?>
</p>

                                <p>所 在 地 ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"merchant_address"),$_smarty_tpl);?>
</p>

                                <p>客服电话：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_telephone"),$_smarty_tpl);?>
</p>

                                <p>客服 QQ：<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
</p>
                            </div>
                            <div class="divider"></div>
                            <div class="supplier_info" style="text-align: center;">
                                <p>周一至周五 10:00-19:00</p>
                                <a target="_blank"
                                   href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
&site=qq&menu=yes">
                                    <img border="0"
                                         src="http://wpa.qq.com/pa?p=2:<?php echo smarty_helper_function_get_option_value(array('optionKey'=>"kefu_qq"),$_smarty_tpl);?>
:41"
                                         alt="QQ在线客服"
                                         title="QQ在线客服"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /客服信息 -->

            </div>

        </div>

        <div id="bzf_right_float_cart_block" class="bzf_right_float_panel_block">
            <span class="icon_cart"></span>
        </div>

        <div class="bzf_right_float_panel_block" onclick="jQuery(document).scrollTo('0px',800);">
            <span class="icon_back_to_top"></span>

            <div class="bzf_hide"
                 style="width:60px;font-weight: bold;text-align: center;line-height: 40px;">
                返回顶部
            </div>
        </div>
    </div>
    <!-- /页面右边悬浮框 -->

    <!-- 定义网站的起始路径，用于 JavaScript 的 Ajax 操作调用 -->
    <script type="text/javascript">
        var WEB_ROOT_HOST = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_HOST']->value, ENT_QUOTES, 'UTF-8');?>
';
        var WEB_ROOT_BASE = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE']->value, ENT_QUOTES, 'UTF-8');?>
';
        var WEB_ROOT_BASE_RES = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
';
        var BLANK_IMAGE_URL = '<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
';
    </script>

    <!-- 合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <?php echo smarty_helper_function_dump_merged_asset_js_url(array('asset'=>'bootstrap-custom/js/json2.js,
       bootstrap-custom/js/jquery-1.8.3.min.js,
       bootstrap-custom/js/jquery.cookie.js,
       bootstrap-custom/js/jstorage.min.js,
       bootstrap-custom/js/bootstrap.min.js,
       bootstrap-custom/js/bootstrap.ie.js,
       bootstrap-custom/js/validator.js,
       bootstrap-custom/plugin/cloud-zoom/cloud-zoom.1.0.3.js,
       bootstrap-custom/plugin/jcarousel/jquery.jcarousel.min.js,
       bootstrap-custom/plugin/smartspin/smartspinner.js,
       bootstrap-custom/plugin/stickyPanel/jquery.stickyPanel.min.js,
       bootstrap-custom/plugin/docktoright/docktoright.js,
       bootstrap-custom/plugin/scrollTo/jquery.scrollTo.min.js,
       bootstrap-custom/plugin/pnotify/jquery.pnotify.min.js,
       bootstrap-custom/plugin/quake-slider/js/quake.slider.js,
       bootstrap-custom/plugin/popover-extra/popover-extra-placements.js,
       bootstrap-custom/plugin/jrumble/jquery.jrumble.1.3.min.js,
       bootstrap-custom/plugin/purl/purl.js,
       bootstrap-custom/plugin/raty/jquery.raty.min.js,
       bootstrap-custom/plugin/treetable/js/jquery.treetable.js,
       bootstrap-custom/js/jquery.lazyload.js,
       js/dropdown_category.js,
       js/shop.js
'),$_smarty_tpl);?>

    <!-- /合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->

    <!-- 这里是页面专用的 JS 代码 -->
    
    <!-- 这里是页面专用的 JS 代码 -->

    <!-- 底部，各种资格认证 -->
    <div class="container">
        <div class="row bzf_footer_credit_panel">
            <span><i class="bzf_icon_zhengping"></i>正品保证</span>
            <span><i class="bzf_icon_fahuo" style="width:51px;"></i>闪电发货</span>
            <span><i class="bzf_icon_qitian"></i>七天退换</span>
            <span><i class="bzf_icon_money" style="width:42px;height:42px;"></i>退款保障</span>
        </div>
        <div class="row bzf_footer_tail">

            <!-- 取得友链的数据 -->
            <?php echo smarty_helper_function_assign_option_value(array('optionKey'=>"friend_link_json_data",'decodeJson'=>"true"),$_smarty_tpl);?>

            <p><a target="_blank" href="http://www.bangzhufu.com">棒主妇商城</a> | <a target="_blank"
                                                                                 href="http://www.bzfshop.net">棒主妇开源</a><?php  $_smarty_tpl->tpl_vars['friendLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friendLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friend_link_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friendLink']->key => $_smarty_tpl->tpl_vars['friendLink']->value) {
$_smarty_tpl->tpl_vars['friendLink']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['friendLink']->value['title'])) {?> |
                <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['friendLink']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['friendLink']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a><?php }?><?php } ?></p>

            <p>棒主妇开源 版权所有 ©Copyright 2010-<?php echo htmlspecialchars(smarty_modifier_date_format(time(),"%Y"), ENT_QUOTES, 'UTF-8');?>
 All Rights Reserved</p>

            <p>ICP备案：<a target="_blank" href="http://www.miit.gov.cn/"><?php echo smarty_helper_function_get_option_value(array('optionKey'=>"icp"),$_smarty_tpl);?>
</a></p>

            <p><!-- 驱动 Cron 任务-->
                <img style="width:1px;height:1px;" src="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cron/Run','static'=>false),$_smarty_tpl);?>
"/>
                <?php echo smarty_helper_function_get_option_value(array('optionKey'=>"statistics_code"),$_smarty_tpl);?>
 <!-- 统计代码 -->
            </p>
        </div>
    </div>
    <!-- /底部，各种资格认证 -->

</body>
</html><?php }} ?>
