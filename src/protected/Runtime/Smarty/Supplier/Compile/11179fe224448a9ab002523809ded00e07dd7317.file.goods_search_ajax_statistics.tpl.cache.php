<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:33:38
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/goods_search_ajax_statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77344950553f441425ff672-38346347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11179fe224448a9ab002523809ded00e07dd7317' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/goods_search_ajax_statistics.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77344950553f441425ff672-38346347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorMessage' => 0,
    'statistics' => 0,
    'goodsInfo' => 0,
    'goodsAttr' => 0,
    'goodsAttrValueArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f441426ae043_99092863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f441426ae043_99092863')) {function content_53f441426ae043_99092863($_smarty_tpl) {?><!-- 商品统计详情对话框 -->
<!-- div id="goods_statistics_dialog" class="modal hide fade" -->

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
    </button>
    <h3>商品销售详情</h3>
</div>
<div class="modal-body">

    <?php if (!empty($_smarty_tpl->tpl_vars['errorMessage']->value)) {?>
        <!-- 错误警告 -->
        <div id="goods_statistics_error" class="row" style="text-align: center;font-weight: bold;">
            <label class="label label-important">错误：</label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errorMessage']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
        <!-- /错误警告 -->
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['statistics']->value)&&isset($_smarty_tpl->tpl_vars['goodsInfo']->value)) {?>
        <!-- 商品统计详情 -->
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="20%">&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody id="goods_statistics_tbody">
                <tr>
                    <td class="labelkey">商品ID</td>
                    <td id="goods_statistics_goods_id" class="labelvalue"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsInfo']->value['goods_id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">商品名称</td>
                    <td id="goods_statistics_goods_name" class="labelvalue"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsInfo']->value['goods_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <tr>
                    <td class="labelkey">商品定价</td>
                    <td class="labelvalue">
                        供货价：<span
                                id="goods_statistics_suppliers_price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['suppliers_price']), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                        供货快递：<span
                                id="goods_statistics_suppliers_shipping_fee"><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsInfo']->value['suppliers_shipping_fee']), ENT_QUOTES, 'UTF-8');?>
</span>
                    </td>
                </tr>
                <tr>
                    <td class="labelkey">销售时间</td>
                    <td class="labelvalue">
                        <span id="goods_statistics_goods_start_time">&nbsp;</span>--
                        <span id="goods_statistics_goods_end_time">&nbsp;</span>
                    </td>
                </tr>


                <!-- 分割符 -->
                <tr>
                    <td colspan="2" class="well well-small">&nbsp;</td>
                </tr>
                <!-- /分割符 -->

                <tr>
                    <td class="labelkey">订单统计</td>
                    <td class="labelvalue">
                        总订单：<span id="goods_statistics_total_order"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statistics']->value['total_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                        付款：<span id="goods_statistics_pay_order"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statistics']->value['pay_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                        退款：<span id="goods_statistics_refund_order"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statistics']->value['refund_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                        未付款：<span id="goods_statistics_pay_order"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statistics']->value['unpay_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                    </td>
                </tr>

                <tr>
                    <td class="labelkey">商品统计</td>
                    <td class="labelvalue">
                        总商品：<span id="goods_statistics_total_goods"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statistics']->value['total_goods'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                        付款：<span id="goods_statistics_pay_goods"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statistics']->value['pay_goods'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                        退款：<span id="goods_statistics_refund_goods"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statistics']->value['refund_goods'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                        未付款：<span id="goods_statistics_pay_goods"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statistics']->value['unpay_goods'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                    </td>
                </tr>

                <?php  $_smarty_tpl->tpl_vars['goodsAttrValueArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsAttrValueArray']->_loop = false;
 $_smarty_tpl->tpl_vars['goodsAttr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value['goods_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsAttrValueArray']->key => $_smarty_tpl->tpl_vars['goodsAttrValueArray']->value) {
$_smarty_tpl->tpl_vars['goodsAttrValueArray']->_loop = true;
 $_smarty_tpl->tpl_vars['goodsAttr']->value = $_smarty_tpl->tpl_vars['goodsAttrValueArray']->key;
?>
                    <tr>
                        <td class="labelkey"></td>
                        <td class="labelvalue">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsAttr']->value, ENT_QUOTES, 'UTF-8');?>
<br/>
                            总订单：<span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsAttrValueArray']->value['total_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                            付款：<span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsAttrValueArray']->value['pay_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                            退款：<span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsAttrValueArray']->value['refund_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                            未付款：<span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsAttrValueArray']->value['unpay_order'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                            <br/>
                            总商品：<span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsAttrValueArray']->value['total_goods'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                            付款：<span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsAttrValueArray']->value['pay_goods'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                            退款：<span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsAttrValueArray']->value['refund_goods'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;
                            未付款：<span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsAttrValueArray']->value['unpay_goods'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
        <!-- /商品统计详情 -->
    <?php }?>

</div>
<div class="modal-footer">
    <a href="#" class="btn btn-success" data-dismiss="modal">关闭</a>
</div>

<!-- /div --><!-- 商品统计详情对话框 -->            

<?php }} ?>
