<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:32:23
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/order_goods_ajaxdetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103074253f440f706e419-57140914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f3c3f0d4ac671a627792ee645b3faec3402bfe2' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/order_goods_ajaxdetail.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103074253f440f706e419-57140914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorMessage' => 0,
    'orderGoods' => 0,
    'orderInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440f7136130_97014535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440f7136130_97014535')) {function content_53f440f7136130_97014535($_smarty_tpl) {?><!-- 订单详情对话框 -->
<!-- div id="order_detail_dialog" class="modal hide fade" -->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
    </button>
    <h3>订单详情</h3>
</div>
<div class="modal-body">

    <?php if (!empty($_smarty_tpl->tpl_vars['errorMessage']->value)) {?>
        <!-- 错误警告 -->
        <div id="goods_statistics_error" class="row" style="text-align: center;font-weight: bold;">
            <label class="label label-important">错误：</label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errorMessage']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
        <!-- /错误警告 -->
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['orderGoods']->value)&&isset($_smarty_tpl->tpl_vars['orderInfo']->value)) {?>

        <!-- 订单详情 -->
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="20%">&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="labelkey">订单号</td>
                    <td id="order_detail_order_id" class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['order_id'], ENT_QUOTES, 'UTF-8');?>

                        -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['rec_id'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">来源系统</td>
                    <td class="labelvalue">
                        <label class="label label-success"><?php echo htmlspecialchars(smarty_helper_modifier_system_display_name($_smarty_tpl->tpl_vars['orderInfo']->value['system_id']), ENT_QUOTES, 'UTF-8');?>
</label>
                    </td>
                </tr>
                <tr>
                    <td class="labelkey">商品名称</td>
                    <td id="order_detail_goods_name" class="labelvalue">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['goods_id'], ENT_QUOTES, 'UTF-8');?>

                        )<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['goods_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">商品货号</td>
                    <td class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['goods_sn'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">仓库货架</td>
                    <td class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['warehouse'], ENT_QUOTES, 'UTF-8');?>
&nbsp;|&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['shelf'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">商品选项</td>
                    <td id="order_detail_goods_number" class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['goods_attr'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">购买数量</td>
                    <td id="order_detail_goods_number" class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">供货成本</td>
                    <td class="labelvalue"><?php echo htmlspecialchars(smarty_helper_modifier_money_display(($_smarty_tpl->tpl_vars['orderGoods']->value['goods_number']*$_smarty_tpl->tpl_vars['orderGoods']->value['suppliers_price'])), ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">订单状态</td>
                    <?php if (1!=$_smarty_tpl->tpl_vars['orderGoods']->value['order_goods_status']) {?>
                        <td id="order_detail_order_status"
                            class="labelvalue price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['order_goods_status_desc'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <?php } else { ?>
                        <td id="order_detail_order_status"
                            class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['order_goods_status_desc'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <?php }?>
                </tr>
                <tr>
                    <td class="labelkey">退款说明</td>
                    <td class="labelvalue" style="color:red;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['refund_note'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">下单时间</td>
                    <td class="labelvalue">
                        <span id="order_detail_add_time"><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['orderInfo']->value['add_time']), ENT_QUOTES, 'UTF-8');?>
</span>|
                        <span id="order_detail_pay_time"><?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['orderInfo']->value['pay_time']), ENT_QUOTES, 'UTF-8');?>
</span>
                    </td>
                </tr>

                <!-- 分割符 -->
                <tr>
                    <td colspan="2" class="well well-small">&nbsp;</td>
                </tr>
                <!-- /分割符 -->

                <tr>
                    <td class="labelkey">收件人</td>
                    <td id="order_detail_consignee" class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfo']->value['consignee'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">手机号</td>
                    <td id="order_detail_mobile" class="labelvalue">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfo']->value['mobile'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                        <a href="<?php echo smarty_helper_function_mobile_query_url(array('mobile'=>$_smarty_tpl->tpl_vars['orderInfo']->value['mobile']),$_smarty_tpl);?>
" class="btn btn-small"
                           target="_blank">
                            查询
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="labelkey">电话</td>
                    <td class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfo']->value['tel'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">收件地址</td>
                    <td id="order_detail_address" class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfo']->value['address'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">邮编</td>
                    <td id="order_detail_address" class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfo']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">用户留言</td>
                    <td id="order_detail_postscript" class="labelvalue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderInfo']->value['postscript'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>

                <tr>
                    <td class="labelkey">客服备注</td>
                    <td id="order_detail_memo" class="labelvalue" style="color:red;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['memo'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>

                <tr>
                    <td rowspan="2" class="labelkey">快递信息</td>
                    <input type="hidden" id="order_detail_rec_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['rec_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                    <td class="labelvalue">
                        <select class="span2 select2-simple" id="order_detail_shipping_select" data-placeholder="请选择快递"
                                data-ajaxCallUrl="<?php echo smarty_helper_function_make_url(array('controller'=>"/Ajax/Express/ListExpress"),$_smarty_tpl);?>
"
                                data-option-value-key="meta_id" data-option-text-key="meta_name"
                                data-initValue="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <option value=""></option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="labelvalue">
                        快递单号：<input class="span2" id="order_detail_shipping_no" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoods']->value['shipping_no'], ENT_QUOTES, 'UTF-8');?>
"/>&nbsp;&nbsp;
                        <button type="button" class="btn btn-small"
                                onclick="bZF.Order_ListOrder_ajaxUpdate();">确定
                        </button>
                        <?php if ($_smarty_tpl->tpl_vars['orderGoods']->value['shipping_id']>0) {?>
                            <a target="_blank" class="btn btn-small"
                               href="<?php echo smarty_helper_function_express_query_url(array('expressName'=>$_smarty_tpl->tpl_vars['orderGoods']->value['shipping_name'],'expressNo'=>$_smarty_tpl->tpl_vars['orderGoods']->value['shipping_no']),$_smarty_tpl);?>
">查询快递</a>
                        <?php }?>
                        <br/>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        <!-- /订单详情 -->

    <?php }?>

</div>
<div class="modal-footer">
    <a href="#" class="btn btn-success" data-dismiss="modal">关闭</a>
</div>

<!-- /div --><!-- 订单详情对话框 -->
<?php }} ?>
