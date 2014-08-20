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
  'unifunc' => 'content_53f440c9c5e0b2_46371608',
  'cache_lifetime' => '1800',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440c9c5e0b2_46371608')) {function content_53f440c9c5e0b2_46371608($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>棒主妇开源商城演示 - 棒主妇商城的开源项目,3.huopool.com</title>
    <meta name="description" content="棒主妇开源商城演示 - 棒主妇商城的开源项目"/>
    <meta name="keywords" content="棒主妇开源商城演示 棒主妇商城"/>
    <meta name="author" content="棒主妇开源"/>

    <!-- 合并所有的 Css 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <link rel="stylesheet" type="text/css" href="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/fa0fd0d98841f0c7d1a5a5380f15c928.min.css"/>
    <!-- /合并所有的 Css 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <link rel="stylesheet" type="text/css"
          href="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/jquery-mobile/css/1408516297.jquery.mobile.structure-1.3.1.min.css"/>
    <link rel="stylesheet" type="text/css" href="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/css/1408516297.mobile.css"/>

    <script>
        var WEB_ROOT_HOST = 'http://3.huopool.com';
        var WEB_ROOT_BASE = '/mobile';
        var WEB_ROOT_BASE_RES = 'http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/';
        var FLASH_MESSAGE_STR = '';
        var USER_NAME_DISPLAY = '';
        var ZOOM_IMAGE_PLACEHOLDER = 'http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/img/1408516297.lazyload_placeholder_460_344.png';
        var SESSION_NAME = 'PHPSESSID';
    </script>

    <!-- 合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
    <script type="text/javascript" src="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/03e11dd26a409b98c90dc635c427b9f2.min.js"></script>
    <!-- /合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->

    <script src="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/jquery-mobile/js/1408516297.jquery.mobile-1.3.1.min.js"></script>
    <script src="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/jquery-mobile/plugin/route/1408516297.jquery.mobile.router.min.js"></script>

    <!-- 在这里开启 Google Analytics 的手机统计 -->
    
    <!-- /在这里开启 Google Analytics 的手机统计 -->

</head>
<body>

<!-- =============================  网页主体内容  =========================================================== -->



    <!-- 主 Page -->
    <div data-role="page" class="ui-responsive-panel"
         data-url="/mobile/"
         data-title="棒主妇开源商城演示 - 棒主妇商城的开源项目,3.huopool.com">

        
            <script>
                var FLASH_MESSAGE_STR = '<?php echo smarty_helper_function_flash_message_str(array(),$_smarty_tpl);?>
'; // 输出 flash message
                var USER_NAME_DISPLAY = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['USER_NAME_DISPLAY']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
';
                var SESSION_ID = '<?php echo htmlspecialchars(session_id(), ENT_QUOTES, 'UTF-8');?>
';
            </script>
        

        <!-- Page Header -->
        <div data-role="header" data-theme="f">

            <div data-role="controlgroup" class="ui-btn-left" data-type="horizontal"
                 data-mini="true">
                <a id="page_header_goods_category" href="/mobile/Goods/CategoryList.html"
                   data-role="button"
                   data-icon="bars">商品分类</a>
            </div>

            <h1>棒主妇开源</h1>

            
                <?php if ($_smarty_tpl->tpl_vars['IS_USER_AUTH']->value) {?>
                    <!-- 我的账号 按钮 -->
                    <div data-role="controlgroup" class="ui-btn-right"
                         data-type="horizontal"
                         data-mini="true">
                        <a id="page_header_my_account" href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Account'),$_smarty_tpl);?>
"
                           data-role="button"
                           data-icon="bars">我的账户</a>
                    </div>
                    <!-- /我的账号 按钮 -->
                <?php } else { ?>
                    <!-- 登陆注册 按钮 -->
                    <div data-role="controlgroup" class="ui-btn-right"
                         data-type="horizontal"
                         data-mini="true">
                        <a id="page_header_user_register" href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Register'),$_smarty_tpl);?>
"
                           data-transition="flip"
                           data-role="button" data-icon="plus">注册</a>
                        <a id="page_header_user_login" href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Login'),$_smarty_tpl);?>
"
                           data-transition="flip"
                           data-role="button" data-icon="check">登陆</a>
                    </div>
                    <!-- /登陆注册 按钮 -->
                <?php }?>
            

        </div>
        <!-- /Page Header -->

        <!-- =============================  page content 内容  =========================================== -->

        <!-- Page 主体内容 -->
        <div data-role="content">
            

            <ul class="listview_goods" data-role="listview" data-inset="false">

            
                                    <li data-role="list-divider" class="listview_head">服装/内衣/配件</li>
                                            <li>
                            <img class="lazyload ui-li-thumb bzf_zoom"
                                 src="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/img/1408516297.lazyload_placeholder_298_223.png"
                                 data-original="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126172049_3216_300x300.jpg"
                                 data-image-zoom="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126172049_3216_460x460.jpg"/>
                            <noscript>
                                <img class="ui-li-thumb"
                                     src="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126172049_3216_300x300.jpg"/>
                            </noscript>

                            <a style="padding-left: 0em;"
                               href="/mobile/Goods/View/goods_id-42107.html"
                               data-transition="flip">
                                <h2>
                                    <span class="current_price_label">现价:</span>
                                    <span class="current_price">￥140</span>
                                </h2>

                                <h2>
                                    <span class="original_price_label">原价:</span>
                                    <span class="original_price">￥219</span>
                                </h2>

                                <p>【降价促销】【2件包邮】秋冬新款韩版呢大衣女装修身气质OL高档毛呢外套HP5070# 毛呢大衣 时尚的拼色；优质面料；完美的款型设计，优美的弧形线条流畅，经典优雅！</p>
                            </a>
                        </li>
                                            <li>
                            <img class="lazyload ui-li-thumb bzf_zoom"
                                 src="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/img/1408516297.lazyload_placeholder_298_223.png"
                                 data-original="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126153933_4332_300x300.jpg"
                                 data-image-zoom="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126153933_4332_460x460.jpg"/>
                            <noscript>
                                <img class="ui-li-thumb"
                                     src="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126153933_4332_300x300.jpg"/>
                            </noscript>

                            <a style="padding-left: 0em;"
                               href="/mobile/Goods/View/goods_id-42100.html"
                               data-transition="flip">
                                <h2>
                                    <span class="current_price_label">现价:</span>
                                    <span class="current_price">￥148</span>
                                </h2>

                                <h2>
                                    <span class="original_price_label">原价:</span>
                                    <span class="original_price">￥219</span>
                                </h2>

                                <p>【2件包邮】女装立领修身长款毛呢子拼皮蝴蝶结毛呢外套8908#  这是独特的一款YY，胸前蝴蝶结让你倍感可爱，很多大明星都喜欢这样的风格，而且上身的效果特别修身。风格独特，变换无穷，潇洒时尚，今冬不拥有这样的YY怎么能行？</p>
                            </a>
                        </li>
                                            <li>
                            <img class="lazyload ui-li-thumb bzf_zoom"
                                 src="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/img/1408516297.lazyload_placeholder_298_223.png"
                                 data-original="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126152348_1368_300x300.jpg"
                                 data-image-zoom="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126152348_1368_460x460.jpg"/>
                            <noscript>
                                <img class="ui-li-thumb"
                                     src="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126152348_1368_300x300.jpg"/>
                            </noscript>

                            <a style="padding-left: 0em;"
                               href="/mobile/Goods/View/goods_id-42099.html"
                               data-transition="flip">
                                <h2>
                                    <span class="current_price_label">现价:</span>
                                    <span class="current_price">￥112</span>
                                </h2>

                                <h2>
                                    <span class="original_price_label">原价:</span>
                                    <span class="original_price">￥298</span>
                                </h2>

                                <p>【2件包邮】秋冬韩版修身女装高领拼色包臀针织衫加厚长款毛衣打底衫738#！手感舒适，串珠图案显得极其的高贵，时尚！无论是单穿还是搭配风衣，棉服，羽绒服都是可以的哦！</p>
                            </a>
                        </li>
                                            <li>
                            <img class="lazyload ui-li-thumb bzf_zoom"
                                 src="http://3.huopool.com/mobile/asset/B3FB932E-BEC0-49CE-AA74-95CE5AB2CF3D/1.0.4/img/1408516297.lazyload_placeholder_298_223.png"
                                 data-original="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126145934_1431_300x300.jpg"
                                 data-image-zoom="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126145934_1431_460x460.jpg"/>
                            <noscript>
                                <img class="ui-li-thumb"
                                     src="http://cdn.bzfshop.net/bzfshop_data/upload/image/2013/11/26/20131126145934_1431_300x300.jpg"/>
                            </noscript>

                            <a style="padding-left: 0em;"
                               href="/mobile/Goods/View/goods_id-42098.html"
                               data-transition="flip">
                                <h2>
                                    <span class="current_price_label">现价:</span>
                                    <span class="current_price">￥79</span>
                                </h2>

                                <h2>
                                    <span class="original_price_label">原价:</span>
                                    <span class="original_price">￥198</span>
                                </h2>

                                <p>【2件包邮】秋冬韩版高领长款毛衣778#！长袖修身显瘦包臀打底衫/毛衣裙/针织衫！黑色/酒红色/深灰色三种颜色任选！摩登气质，舒适弹力面料，打造出人人羡慕的小蛮腰！</p>
                            </a>
                        </li>
                    
                
            
                
            
                
            
                
            
                
            
                
            
                
            
                
            
                
            
                
            
        </ul>
    

        </div>
        <!-- /Page 主体内容 -->

        <!-- =============================  /page content 内容 ========================================== -->

        <!-- 输出调试信息 -->
        
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
