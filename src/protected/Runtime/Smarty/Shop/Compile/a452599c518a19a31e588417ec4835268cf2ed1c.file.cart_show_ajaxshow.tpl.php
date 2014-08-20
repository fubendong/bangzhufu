<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:42:00
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/cart_show_ajaxshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58602063753f44338977966-29911419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a452599c518a19a31e588417ec4835268cf2ed1c' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/cart_show_ajaxshow.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58602063753f44338977966-29911419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderGoodsArray' => 0,
    'orderGoodsItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f443389ebdc4_08377521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f443389ebdc4_08377521')) {function content_53f443389ebdc4_08377521($_smarty_tpl) {?><!-- 这个 div 用于 ajax load 的时候把其中的内容加载到对应的地方 -->
<div id="cart_show_ajaxshow">

    <!-- 购物车显示列表 -->
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>商品</th>
            <th>选项</th>
            <th>单价</th>
            <th>数量</th>
            <th>邮费</th>
            <th>优惠</th>
            <th>金额</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        <?php if (isset($_smarty_tpl->tpl_vars['orderGoodsArray']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['orderGoodsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderGoodsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderGoodsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderGoodsItem']->key => $_smarty_tpl->tpl_vars['orderGoodsItem']->value) {
$_smarty_tpl->tpl_vars['orderGoodsItem']->_loop = true;
?>

                <!-- 购物车一个商品的内容 -->
                <tr>
                    <td>
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Goods/View','goods_id'=>$_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('goods_id')),$_smarty_tpl);?>
"
                           target="_blank" ref="popover" data-trigger="hover" data-placement="right"
                           data-content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('goods_name'), ENT_QUOTES, 'UTF-8');?>
">
                            <img src="<?php echo smarty_helper_function_goods_thumb_image(array('goods_id'=>$_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('goods_id')),$_smarty_tpl);?>
"/>
                        </a>
                    </td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('goods_attr'), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td class="price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('shop_price')), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('goods_number'), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td class="price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('shipping_fee')), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td class="discount"><?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('discount')), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td class="price"><?php echo htmlspecialchars(smarty_helper_modifier_money_display(($_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('goods_price')+$_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('shipping_fee')-$_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('discount')-$_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('extra_discount'))), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <a href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cart/Show/Remove','goods_id'=>$_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('goods_id'),'isAjax'=>'true','specListStr'=>urlencode($_smarty_tpl->tpl_vars['orderGoodsItem']->value->getValue('goods_attr'))),$_smarty_tpl);?>
"
                           class="btn btn-small btn-warning cartRemoveGoods">删除</a>
                    </td>
                </tr>
                <!-- /购物车一个商品的内容 -->

            <?php } ?>

        <?php } else { ?>
            <tr>
                <td colspan="8" class="well price">购物车为空</td>
            </tr>
        <?php }?>

        </tbody>
    </table>
    <!-- /购物车显示列表 -->

</div>
<?php }} ?>
