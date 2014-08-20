<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:32:33
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/goods_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171292171353f44101877b53-30307178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd57c54f303c7c7ec74d29f5abf517bede9b0bd92' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/goods_search.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    'fd6b0c289eab7786228ffc5664226c465a57a406' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/goods_layout.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '137feadecdae45a68ac695f04a719e43d845eb65' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/layout.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171292171353f44101877b53-30307178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DEBUG' => 0,
    'authSupplierUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f441019757c3_95308290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f441019757c3_95308290')) {function content_53f441019757c3_95308290($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- 让 IE 使用最新模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>棒主妇供货商后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="棒主妇供货商后台">
    <meta name="author" content="棒主妇开源">

    <!-- 指定360浏览器使用极速模式 -->
    <meta name="renderer" content="webkit"/>
    <!-- /指定360浏览器使用极速模式 -->

    <!-- 引入 CSS 文件 -->
    <?php echo $_smarty_tpl->getSubTemplate ("layout_block_link_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /引入 CSS 文件 -->

    <!-- 这里是页面专用的 css 代码 -->
    
    <!-- 这里是页面专用的 css 代码 -->

</head>

<body>
<!-- 用 JS 设置页面的导航菜单 -->
<script type="text/javascript">
    window.bz_set_nav_status = []; // 用于设置导航栏状态的数组，里面是很多设置 function()
    window.bz_set_breadcrumb_status = []; // 用于设置 breadcrumb 的数组，里面是很多设置 {index:1, text:'商品编辑', link:'http://...'}
</script>
<!-- /用 JS 设置页面的导航菜单 -->

<?php if ($_smarty_tpl->tpl_vars['DEBUG']->value>0) {?>
    <!-- 调试提醒 -->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-inner">
            <div class="container" style="text-align:center;">
                <h5>注意：现在是 DEBUG (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['DEBUG']->value, ENT_QUOTES, 'UTF-8');?>
) 模式</h5>
            </div>
        </div>
    </div>
    <!-- /调试提醒 -->
<?php }?>

<!-- 顶部导航菜单 -->
<div id="system_top_navbar" class="navbar navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" target="_blank" href="http://www.bzfshop.net">棒主妇开源</a>
            <ul class="nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['authSupplierUser']->value['suppliers_account'], ENT_QUOTES, 'UTF-8');?>
]
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Profile'),$_smarty_tpl);?>
">我的资料</a></li>
                        <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Logout'),$_smarty_tpl);?>
">退出登陆</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search'),$_smarty_tpl);?>
">商品管理</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Goods/Search'),$_smarty_tpl);?>
">订单管理</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /顶部导航菜单 -->

<!-- main_body -->
<div id="main_body" class="container" style="margin-top: 10px;">

    <!-- breadcrumb 导航-->
    <div id="main_body_breadcrumb" class="row">
    </div>
    <!-- /breadcrumb 导航-->

    <!-- ====================================== 这里是页面的主体内容 ============================================ -->

    

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div class="row">
            <ul id="goods_tabbar" class="nav nav-tabs">
                <li class="dropdown">
                    <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search'),$_smarty_tpl);?>
">商品列表</a>
                </li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 商品管理主体内容 -->
        

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#goods_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/Search'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 0, text: '商品列表', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">
        <h4><?php if (isset($_smarty_tpl->tpl_vars['is_on_sale']->value)) {?> <?php if (1==$_smarty_tpl->tpl_vars['is_on_sale']->value) {?>在线商品<?php } else { ?>下架商品<?php }?> <?php } else { ?>全部商品<?php }?></h4>

        <!-- 这里是条件筛选区 -->
        <div class="row well well-small">
            <form class="form-horizontal form-horizontal-inline" method="GET" style="margin: 0px 0px 0px 0px;">

                <div class="control-group">
                    <div class="controls">

                        <span class="input-label">商品ID</span>
                        <input class="span2" type="text" pattern="[0-9]*" data-validation-pattern-message="商品ID应该是全数字"
                               name="goods_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

                        <span class="input-label">商品货号</span>
                        <input class="span2" type="text" name="goods_sn" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_sn']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

                        <span class="input-label">商品名称</span>
                        <input class="span2" type="text" name="goods_name" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_name']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">

                        <span class="input-label">仓库</span>
                        <input class="span2" type="text" name="warehouse" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['warehouse']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

                        <span class="input-label">货架</span>
                        <input class="span2" type="text" name="shelf" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shelf']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

                        <span class="input-label">选择状态</span>
                        <select class="span2 select2-simple" name="is_on_sale" data-placeholder="商品状态"
                                data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['is_on_sale']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                            <option value="1">销售中</option>
                            <option value="0">已下线</option>
                        </select>

                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-success">查询</button>
                    </div>
                </div>

            </form>
        </div>
        <!-- /这里是条件筛选区 -->

        <!-- 商品列表 -->
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>商品ID</th>
                <th width="15%">商品图片</th>
                <th width="30%">商品名称</th>
                <th>价格</th>
                <th>库存剩余</th>
                <th>下单数量</th>
                <th>付款数量</th>
                <th width="5%">状态</th>
                <th width="8%">操作</th>
            </tr>
            </thead>
            <tbody>

            <?php if (isset($_smarty_tpl->tpl_vars['goodsArray']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['goodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsItem']->key => $_smarty_tpl->tpl_vars['goodsItem']->value) {
$_smarty_tpl->tpl_vars['goodsItem']->_loop = true;
?>

                    <!-- 一个商品 -->
                    <?php if (0==$_smarty_tpl->tpl_vars['goodsItem']->value['is_on_sale']) {?>
                        <tr class="error">
                            <?php } else { ?>
                        <tr>
                    <?php }?>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <a rel="clickover" data-placement="top" href="#"
                           data-content="<?php echo smarty_helper_function_goods_view_toolbar(array('goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id'],'system_tag_list'=>$_smarty_tpl->tpl_vars['goodsItem']->value['system_tag_list']),$_smarty_tpl);?>
">
                            <img class="lazyload"
                                 width="150" style="width:150px;height:auto;"
                                 src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                 data-original="<?php echo smarty_helper_function_goods_thumb_image(array('goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id']),$_smarty_tpl);?>
"/>
                        </a>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_name_short'], ENT_QUOTES, 'UTF-8');?>

                        <br/>
                        货号[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_sn'], ENT_QUOTES, 'UTF-8');?>
]
                        <?php if (!empty($_smarty_tpl->tpl_vars['goodsItem']->value['warehouse'])) {?>
                            <br/>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['warehouse'], ENT_QUOTES, 'UTF-8');?>
&nbsp;|&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['shelf'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                    <td><p>供货价：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['suppliers_price']), ENT_QUOTES, 'UTF-8');?>
元</p>

                        <p>快递费：<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsItem']->value['suppliers_shipping_fee']), ENT_QUOTES, 'UTF-8');?>
元</p></td>
                    <td>
                        <?php if (empty($_smarty_tpl->tpl_vars['goodsItem']->value['goods_spec'])) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>

                        <?php } else { ?>
                            <?php  $_smarty_tpl->tpl_vars['specDataArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['specDataArray']->_loop = false;
 $_smarty_tpl->tpl_vars['specStr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodsItem']->value['goods_spec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['specDataArray']->key => $_smarty_tpl->tpl_vars['specDataArray']->value) {
$_smarty_tpl->tpl_vars['specDataArray']->_loop = true;
 $_smarty_tpl->tpl_vars['specStr']->value = $_smarty_tpl->tpl_vars['specDataArray']->key;
?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specStr']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;:&nbsp;<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['specDataArray']->value['goods_number'])===null||$tmp==='' ? '0' : $tmp), ENT_QUOTES, 'UTF-8');?>

                                <br/>
                            <?php } ?>
                        <?php }?>
                    </td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['user_buy_number'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['user_pay_number'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php  $_smarty_tpl->tpl_vars['goodsSystemName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsSystemName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsItem']->value['system_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsSystemName']->key => $_smarty_tpl->tpl_vars['goodsSystemName']->value) {
$_smarty_tpl->tpl_vars['goodsSystemName']->_loop = true;
?>
                            <label class="label label-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsSystemName']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                        <?php } ?>
                        <br/><?php if ($_smarty_tpl->tpl_vars['goodsItem']->value['is_on_sale']>=1) {?>销售中<?php } else { ?>已下线<?php }?>
                    </td>
                    <td>
                        <button class="btn btn-small"
                                onclick='bZF.Goods_ListGoods_Statistics(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsItem']->value['goods_id'], ENT_QUOTES, 'UTF-8');?>
)'>销售统计
                        </button>
                        <a target="_blank" class="btn btn-small"
                           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Excel/Download','goods_id'=>$_smarty_tpl->tpl_vars['goodsItem']->value['goods_id'],'excelType'=>"1"),$_smarty_tpl);?>
">订单下载</a>
                    </td>
                    </tr><!-- /一个商品 -->

                <?php } ?>
            <?php }?>

            </tbody>
        </table>
        <!-- /商品列表 -->

        <!-- 分页 -->
        <div class="pagination pagination-right">
            <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

        </div>
        <!-- 分页 -->

    </div>
    <!-- /页面主体内容 -->

    <!-- 商品统计详情对话框 -->
    <div id="goods_statistics_dialog" class="modal hide fade">
    </div>
    <!-- 商品统计详情对话框 -->


        <!-- /商品管理主体内容 -->

    </div>


    <!-- ====================================== /这里是页面的主体内容 ============================================ -->

</div>
<!-- /main_body -->

<!-- 让 main_body 和下面的 footer 中间隔离出一段距离 -->
<div id="main_body_tail" class="container">
    <!-- 调用 Cron 执行，用于驱动系统的 Cron 去执行一些周期性的任务 -->
    <img style="width:1px;height:1px;" src="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cron/Run','static'=>false),$_smarty_tpl);?>
"/>
</div>
<!-- /让 main_body 和下面的 footer 中间隔离出一段距离 -->

<!-- 引入 JS 文件 -->
<?php echo $_smarty_tpl->getSubTemplate ("layout_block_link_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- /引入 JS 文件 -->

<!-- 这里是页面专用的 JS 代码 -->

    <script type="text/javascript">
        /**
         * 这里的代码等 document.ready 才执行
         */
        jQuery((function (window, $) {
            /******* 商品列表页面显示商品统计数据的调用 ***********/
            bZF.Goods_ListGoods_Statistics = function (goods_id) {
                var ajaxCallUrl = bZF.makeUrl('/Goods/Search/Statistics');
                $('#goods_statistics_dialog').load(ajaxCallUrl + '?goods_id=' + goods_id, function () {
                    $('#goods_statistics_dialog').modal({dynamic: true});
                });
            };
        })(window, jQuery));
    </script>

<!-- 这里是页面专用的 JS 代码 -->

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
