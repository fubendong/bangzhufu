<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:32:08
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/order_goods_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127111517453f440e8d44a69-61307397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '311de4fc4b7ef9ac19d63504c2296a6fd1d0a22a' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/order_goods_search.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '78828e90746e0fa1054ae9018cb9292f9e8ea598' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/order_layout.tpl',
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
  'nocache_hash' => '127111517453f440e8d44a69-61307397',
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
  'unifunc' => 'content_53f440e8ea80b0_57892775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440e8ea80b0_57892775')) {function content_53f440e8ea80b0_57892775($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Framework/Smarty/plugins/modifier.date_format.php';
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
            $("#system_top_navbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Goods/Search'),$_smarty_tpl);?>
'])").addClass("active");
        });
    </script>
    <div class="row bz_basic_content_block bz_box_shadow" style="padding:10px 10px 10px 10px;">

        <!-- 页面上方导航条 -->
        <div id="order_tabbar" class="row">
            <ul class="nav nav-tabs">
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Goods/Search'),$_smarty_tpl);?>
">售出商品</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Refund/Search'),$_smarty_tpl);?>
">商品退款</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Excel'),$_smarty_tpl);?>
">批量下载订单</a></li>
                <li><a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Settle/ListSettle'),$_smarty_tpl);?>
">结算历史</a></li>
            </ul>
        </div>
        <!-- /页面上方导航条 -->

        <!-- 订单管理主体内容 -->
        

    <!-- 用 JS 设置页面的导航菜单 -->
    <script type="text/javascript">
        window.bz_set_nav_status.push(function ($) {
            $("#order_tabbar li:has(a[href='<?php echo smarty_helper_function_make_url(array('controller'=>'/Order/Goods/Search'),$_smarty_tpl);?>
'])").addClass("active");
        });

        window.bz_set_breadcrumb_status.push({index: 0, text: '售出商品', link: window.location.href});
    </script>
    <!-- 页面主体内容 -->
    <div class="row">

    <!-- 这里是条件筛选区 -->
    <div class="row well well-small">
        <form class="form-horizontal form-horizontal-inline" method="GET" style="margin: 0px 0px 0px 0px;">

            <div class="control-group">
                <div class="controls">
                    <span class="input-label">订单ID</span>
                    <input class="span2" type="text" pattern="[0-9]*" data-validation-pattern-message="订单ID应该是全数字"
                           name="order_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    <span class="input-label">订单子ID</span>
                    <input class="span2" type="text" pattern="[0-9]*" data-validation-pattern-message="订单子ID应该是全数字"
                           name="rec_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['rec_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    <span class="input-label">商品ID</span>
                    <input class="span2" type="text" pattern="[0-9]*" data-validation-pattern-message="商品ID应该是全数字"
                           name="goods_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <span class="input-label">收货人</span>
                    <input class="span2" type="text" name="consignee" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['consignee']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    <span class="input-label">手机号</span>
                    <input class="span2" type="text" pattern="1([0-9]{10})"
                           data-validation-pattern-message="手机号码格式不正确"
                           name="mobile" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['mobile']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                    <span class="input-label">收货地址</span>
                    <input class="span2" type="text" name="address" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['address']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <span class="input-label">商品货号</span>
                    <input class="span2" type="text" name="goods_sn" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goods_sn']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>

                    <span class="input-label">订单状态</span>
                    <select class="span2 select2-simple" name="order_goods_status" data-placeholder="全部"
                            data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['order_goods_status']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        <option value=""></option>
                        <option value="1">已付款</option>
                        <option value="2">申请退款</option>
                        <option value="3">退款中</option>
                        <option value="4">退款完成</option>
                    </select>

                    <span class="input-label">发货状态</span>
                    <select class="span2 select2-simple" name="shippingStatus" data-placeholder="全部"
                            data-initValue="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shippingStatus']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        <option value=""></option>
                        <option value="1">未发货</option>
                        <option value="2">已发货</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <span class="input-label">用户留言</span>
                    <input class="span6" type="text" name="postscript" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['postscript']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <span class="input-label">客服备注</span>
                    <input class="span6" type="text" name="memo" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['memo']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <span class="input-label">下单时间</span>

                    <div class="input-append date datetimepicker">
                        <input class="span2" type="text" name="add_time_start" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['add_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                    </div>
                    <span style="float:left;margin-left: 5px;margin-right: 5px;">--</span>

                    <div class="input-append date datetimepicker">
                        <input class="span2" type="text" name="add_time_end" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['add_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <span class="input-label">付款时间</span>

                    <div class="input-append date datetimepicker">
                        <input class="span2" type="text" name="pay_time_start" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_time_start']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                    </div>
                    <span style="float:left;margin-left: 5px;margin-right: 5px;">--</span>

                    <div class="input-append date datetimepicker">
                        <input class="span2" type="text" name="pay_time_end" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pay_time_end']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                        </span>
                    </div>
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

    <!-- 订单列表 -->
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th width="7%">订单号</th>
            <th width="20%">商品名称</th>
            <th width="7%">付款时间</th>
            <th width="7%">选项</th>
            <th>数量</th>
            <th>商品金额</th>
            <th>快递费</th>
            <th>退款</th>
            <th>额外退款</th>
            <th width="7%">订单状态</th>
            <th width="10%">物流快递</th>
            <th width="5%">操作</th>
        </tr>
        </thead>
        <tbody>

        <?php if (isset($_smarty_tpl->tpl_vars['orderGoodsArray']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['orderGoodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderGoodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderGoodsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderGoodsItem']->key => $_smarty_tpl->tpl_vars['orderGoodsItem']->value) {
$_smarty_tpl->tpl_vars['orderGoodsItem']->_loop = true;
?>

                <!-- 一个订单 -->
                <?php if (1==$_smarty_tpl->tpl_vars['orderGoodsItem']->value['order_goods_status']) {?>
                    <tr> <!-- 付款订单 -->
                        <?php } elseif (2==$_smarty_tpl->tpl_vars['orderGoodsItem']->value['order_goods_status']) {?>
                    <tr class="info"> <!-- 申请退款 订单 -->
                        <?php } else { ?>
                    <tr class="error"> <!-- 退款中，退款完成 订单 -->
                <?php }?>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['rec_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td>
                    <a rel="clickover" data-placement="top" href="#"
                       data-content="<?php echo smarty_helper_function_goods_view_toolbar(array('goods_id'=>$_smarty_tpl->tpl_vars['orderGoodsItem']->value['goods_id'],'system_tag_list'=>$_smarty_tpl->tpl_vars['orderGoodsItem']->value['system_id']),$_smarty_tpl);?>
">
                        (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['goods_id'], ENT_QUOTES, 'UTF-8');?>
)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                </td>
                <td><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['orderGoodsItem']->value['pay_time']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['goods_attr'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td class="price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display(($_smarty_tpl->tpl_vars['orderGoodsItem']->value['goods_number']*$_smarty_tpl->tpl_vars['orderGoodsItem']->value['suppliers_price'])), ENT_QUOTES, 'UTF-8');?>
</td>
                <td>
                    <a style="color:red;" href="#" ref="popover" data-trigger="hover" data-placement="right"
                       data-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['suppliers_shipping_fee_note'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderGoodsItem']->value['suppliers_shipping_fee']), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </td>
                <td>
                    <a style="color:blue;" href="#" ref="popover" data-trigger="hover" data-placement="right"
                       data-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['suppliers_refund_note'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderGoodsItem']->value['suppliers_refund']), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </td>
                <td>
                    <a style="color:blue;" href="#" ref="popover" data-trigger="hover" data-placement="right"
                       data-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['extra_refund_note'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderGoodsItem']->value['extra_refund']), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </td>
                <td>
                    <label class="label label-success"><?php echo htmlspecialchars(smarty_helper_modifier_system_display_name($_smarty_tpl->tpl_vars['orderGoodsItem']->value['system_id']), ENT_QUOTES, 'UTF-8');?>
</label><br/>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['order_goods_status_desc'], ENT_QUOTES, 'UTF-8');?>

                    <?php if ($_smarty_tpl->tpl_vars['orderGoodsItem']->value['settle_id']>0) {?>
                        <br/>
                        <a href="#"
                           onclick="bZF.Order_Settle_ajaxDetail(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['settle_id'], ENT_QUOTES, 'UTF-8');?>
);return false;">[已结算]</a>
                    <?php }?>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['orderGoodsItem']->value['shipping_id']>0) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['shipping_name'], ENT_QUOTES, 'UTF-8');?>

                        <br/>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['shipping_no'], ENT_QUOTES, 'UTF-8');?>

                        <br/>
                        <a target="_blank" class="btn btn-small"
                           href="<?php echo smarty_helper_function_express_query_url(array('expressName'=>$_smarty_tpl->tpl_vars['orderGoodsItem']->value['shipping_name'],'expressNo'=>$_smarty_tpl->tpl_vars['orderGoodsItem']->value['shipping_no']),$_smarty_tpl);?>
">查询快递</a>
                    <?php } else { ?>
                        未发货
                    <?php }?>
                </td>
                <td>
                    <button type="button" class="btn btn-small"
                            onclick="bZF.Order_ListOrder_Detail(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value['rec_id'], ENT_QUOTES, 'UTF-8');?>
)">详情
                    </button>
                </td>
                </tr><!-- /一个订单 -->

            <?php } ?>
        <?php }?>

        </tbody>
    </table>
    <!-- /订单列表 -->

    <!-- 分页 -->
    <div class="pagination pagination-right">
        <?php echo smarty_helper_function_paginator(array('count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

    </div>
    <!-- 分页 -->

    </div>
    <!-- /页面主体内容 -->

    <!-- 订单详情对话框 -->
    <div id="order_detail_dialog" class="modal hide fade">
    </div>
    <!-- 订单详情对话框 -->

    <!-- 结算记录设置 modal -->
    <div id="order_settle_listsettle_modal_detail" class="modal hide fade" tabindex="-1" role="dialog"
         aria-hidden="true">
    </div>
    <!-- /结算记录设置 modal -->


        <!-- /订单管理主体内容 -->

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
