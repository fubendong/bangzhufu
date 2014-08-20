<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:16:43
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/shop_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145090197253f43d4b620b62-33628596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4c0c46ba18298788624ad0221de890326de36f' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/shop_index.tpl',
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
  'nocache_hash' => '145090197253f43d4b620b62-33628596',
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
  'unifunc' => 'content_53f43d4b86fff4_62527258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f43d4b86fff4_62527258')) {function content_53f43d4b86fff4_62527258($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
<!-- 主题内容 row -->
<div class="row" style="background-color: white;padding-bottom: 10px;">

<!-- 首页，总是显示商品分类 -->
<script type="text/javascript">
    var bZF = {};
    window.bZF = bZF;
    bZF.always_show_bzf_header_dropdown_menu = true;
</script>
<!-- /首页，总是显示商品分类 -->

<!-- 头部广告图片切换栏 -->
<div class="row">

    <!-- 左侧商品分类 -->
    <div class="span3 bzf_shop_index_head_category_back_panel">

    </div>
    <!-- /左侧商品分类 -->

    <!-- 左侧商品分类 -->
    <div class="span9 bzf_shop_index_head_slide_image_panel">

        <div class="quake-slider">
            <div class="quake-slider-images">

                <?php if (!isset($_smarty_tpl->tpl_vars['shop_index_adv_slider']->value)) {?>
                    <a target="_blank" href="javascript:">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_780x350_black.gif'),$_smarty_tpl);?>
"/>
                    </a>
                    <a target="_blank" href="javascript:">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_780x350_gray.gif'),$_smarty_tpl);?>
"/>
                    </a>
                <?php } else { ?>

                    <?php  $_smarty_tpl->tpl_vars['sliderItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sliderItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop_index_adv_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

                <?php }?>

            </div>
        </div>

    </div>
    <!-- /左侧商品分类 -->

</div>
<!-- /头部广告图片切换栏 -->


<!-- 网站公告、店长商品推荐 -->
<div class="row" style="padding:10px 0px;">

    <!-- 网站公告 -->
    <div class="span3">

        <ul class="nav nav-tabs" style="margin-bottom: 0px;">
            <li class="active"><a href="#bzf_shop_index_site_notice" data-toggle="tab">网站公告</a></li>
        </ul>

        <div class="tab-content bzf_shop_index_site_notice_panel">
            <div class="tab-pane active" id="bzf_shop_index_site_notice">
                <?php echo smarty_helper_function_get_option_value(array('optionKey'=>'shop_index_notice'),$_smarty_tpl);?>

            </div>
        </div>

    </div>
    <!-- /网站公告 -->

    <!-- 店长推荐商品 -->
    <div class="span9">

        <div class="row" style="font-size: 14px;font-weight: bold;padding-bottom: 10px;">
            欢迎光临&nbsp;&nbsp;<span style="color:red;"><?php echo smarty_helper_function_get_option_value(array('optionKey'=>"site_name"),$_smarty_tpl);?>
</span>&nbsp;&nbsp;
            <span class="label label-important">
                <a target="_blank"
                   style="color: white;text-decoration: none;"
                   href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search','orderBy'=>'add_time','orderDir'=>'desc','static'=>false),$_smarty_tpl);?>
">今日新品</a>
            </span>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['recommandGoodsArray']->value)) {?>
            <div class="jcarousel-skin-goods-recommand-compact">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['goodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommandGoodsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsItem']->key => $_smarty_tpl->tpl_vars['goodsItem']->value) {
$_smarty_tpl->tpl_vars['goodsItem']->_loop = true;
?>

                        <!-- 一个店长推荐商品 -->
                        <li>
                            <div class="bzf_image_wrap">
                                <a target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
"
                                   href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/View','goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
">
                                    <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                         data-original="<?php echo smarty_helper_function_goods_thumb_image(array('goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
"/>
                                </a>
                            </div>
                            <div class="bzf_goods_view_goods_recommand_price_pane">
                                <div class="market_price">
                                    原价：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['market_price']), ENT_QUOTES, 'UTF-8');?>
元
                                </div>
                                <div class="shop_price">
                                    现价：<span><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['shop_price']), ENT_QUOTES, 'UTF-8');?>
元</span>
                                </div>
                            </div>
                        </li>
                        <!-- /一个店长推荐商品  -->

                    <?php } ?>
                </ul>
            </div>
        <?php }?>

    </div>
    <!-- 店长推荐商品 -->

</div>
<!-- /网站公告、店长商品推荐 -->


<?php if (!isset($_smarty_tpl->tpl_vars['shop_index_advblock_json_data']->value)) {?>

    <!-- 一个缺省的分类展示区 -->
    <div class="row bzf_shop_index_adv_block bzf_shop_index_adv_block_theme_red">

        <!-- 头部标签切换 -->
        <ul class="nav nav-tabs">
            <li><a class="bzf_caption" href="#" onclick="return false;"><span>1F</span>女装系列</a>
            </li>
            <li class="active">
                <a href="#bzf_shop_index_adv_block_1_2" data-toggle="tab">上衣裙子</a>
            </li>
        </ul>
        <!-- /头部标签切换 -->

        <!-- 标签对应内容 -->
        <div class="tab-content">
            <!-- 一个广告 block 的图片区 -->
            <div id="bzf_shop_index_adv_block_1_2"
                 class="tab-pane active bzf_shop_index_adv_image_block">

                <!-- 左侧小图片 -->
                <div class="span3">
                    <a class="image_left" href="#"
                       data-target="_blank" data-url="#"
                       data-image="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x490.gif'),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x490.gif'),$_smarty_tpl);?>
"/>
                    </a>
                </div>
                <!-- /左侧小图片 -->

                <!-- 中间大图 -->
                <div class="span6">
                    <a class="image_center" href="#"
                       data-target="_blank" data-url="#"
                       data-image="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_490x490.gif'),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_490x490.gif'),$_smarty_tpl);?>
"/>
                    </a>
                </div>
                <!-- /中间大图 -->

                <!-- 右侧小图片 -->
                <div class="span3">
                    <a class="image_right" href="#"
                       data-target="_blank" data-url="#"
                       data-image="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
"/>
                    </a>
                    <a class="image_right" href="#"
                       data-target="_blank" data-url="#"
                       data-image="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
"/>
                    </a>
                    <a class="image_right" href="#"
                       data-target="_blank" data-url="#"
                       data-image="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/placeholder_238x158.gif'),$_smarty_tpl);?>
"/>
                    </a>
                </div>
                <!-- /右侧小图片 -->

            </div>
            <!-- /一个广告 block 的图片区 -->

        </div>
        <!-- /标签对应内容 -->

    </div>
    <!-- /一一个缺省的分类展示区 -->

<?php } else { ?>

    <!-- =============================== 生成 advBlock ============================ -->

<?php $_smarty_tpl->tpl_vars["advBlockObjectIndex"] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['advBlockObject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advBlockObject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop_index_advblock_json_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advBlockObject']->key => $_smarty_tpl->tpl_vars['advBlockObject']->value) {
$_smarty_tpl->tpl_vars['advBlockObject']->_loop = true;
?>

    <!-- 一个分类展示区 -->
<div class="row bzf_shop_index_adv_block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObject']->value['theme_class'], ENT_QUOTES, 'UTF-8');?>
">

    <!-- 头部标签切换 -->
    <ul class="nav nav-tabs">
        <li><a class="bzf_caption" href="#"
               onclick="return false;"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObjectIndex']->value+1, ENT_QUOTES, 'UTF-8');?>
F</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockObject']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <?php $_smarty_tpl->tpl_vars["advBlockImageArray"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockObject']->value['advBlockImageArray'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["advBlockImageArrayIndex"] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['advBlockImageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advBlockImageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advBlockImageItem']->key => $_smarty_tpl->tpl_vars['advBlockImageItem']->value) {
$_smarty_tpl->tpl_vars['advBlockImageItem']->_loop = true;
?>
            <?php if (0==$_smarty_tpl->tpl_vars['advBlockImageArrayIndex']->value) {?>
                <li class="active">
                    <?php } else { ?>
                <li>
            <?php }?>
            <a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockImageItem']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
               data-toggle="tab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockImageItem']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <?php $_smarty_tpl->tpl_vars["advBlockImageArrayIndex"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockImageArrayIndex']->value+1, null, 0);?>
        <?php } ?>
    </ul>
    <!-- /头部标签切换 -->

    <!-- 标签对应内容 -->
    <div class="tab-content">

        <?php $_smarty_tpl->tpl_vars["advBlockImageArray"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockObject']->value['advBlockImageArray'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["advBlockImageArrayIndex"] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['advBlockImageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['advBlockImageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['advBlockImageItem']->key => $_smarty_tpl->tpl_vars['advBlockImageItem']->value) {
$_smarty_tpl->tpl_vars['advBlockImageItem']->_loop = true;
?>

        <!-- 一个广告 block 的图片区 -->

        <?php if (0==$_smarty_tpl->tpl_vars['advBlockImageArrayIndex']->value) {?>
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockImageItem']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
             class="tab-pane active bzf_shop_index_adv_image_block">
            <?php } else { ?>
            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advBlockImageItem']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="tab-pane bzf_shop_index_adv_image_block">
                <?php }?>

                <!-- 左侧小图片 -->
                <div class="span3">
                    <?php  $_smarty_tpl->tpl_vars['imageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageItem']->value['image_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imageItem']->key => $_smarty_tpl->tpl_vars['imageItem']->value) {
$_smarty_tpl->tpl_vars['imageItem']->_loop = true;
?>
                        <a class="image_left" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                 data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                        </a>
                    <?php } ?>
                </div>
                <!-- /左侧小图片 -->

                <!-- 中间大图 -->
                <div class="span6">
                    <?php  $_smarty_tpl->tpl_vars['imageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageItem']->value['image_center']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imageItem']->key => $_smarty_tpl->tpl_vars['imageItem']->value) {
$_smarty_tpl->tpl_vars['imageItem']->_loop = true;
?>
                        <a class="image_center" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                 data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                        </a>
                    <?php } ?>
                </div>
                <!-- /中间大图 -->

                <!-- 右侧小图片 -->
                <div class="span3">
                    <?php  $_smarty_tpl->tpl_vars['imageItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imageItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advBlockImageItem']->value['image_right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imageItem']->key => $_smarty_tpl->tpl_vars['imageItem']->value) {
$_smarty_tpl->tpl_vars['imageItem']->_loop = true;
?>
                        <a class="image_right" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['target'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img class="lazyload" src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                 data-original="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageItem']->value['image'], ENT_QUOTES, 'UTF-8');?>
"/>
                        </a>
                    <?php } ?>
                </div>
                <!-- /右侧小图片 -->

            </div>
            <!-- /一个广告 block 的图片区 -->

            <?php $_smarty_tpl->tpl_vars["advBlockImageArrayIndex"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockImageArrayIndex']->value+1, null, 0);?>
            <?php } ?>

        </div>
        <!-- /标签对应内容 -->

    </div>
    <!-- /一个分类展示区 -->

    <?php $_smarty_tpl->tpl_vars["advBlockObjectIndex"] = new Smarty_variable($_smarty_tpl->tpl_vars['advBlockObjectIndex']->value+1, null, 0);?>
    <?php } ?>

    <!-- =============================== /生成 advBlock ============================ -->

    <?php }?>

</div>
<!-- /主题内容 row -->



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
