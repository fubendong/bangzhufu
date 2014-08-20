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
  'unifunc' => 'content_53f441426c53b0_29971259',
  'cache_lifetime' => 300,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f441426c53b0_29971259')) {function content_53f441426c53b0_29971259($_smarty_tpl) {?><div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
    </button> <h3>商品销售详情</h3> </div> <div class="modal-body"> <div class="row"> <table class="table table-bordered table-hover"> <thead> <tr> <th width="20%">&nbsp;</th> <th>&nbsp;</th> </tr> </thead> <tbody id="goods_statistics_tbody"> <tr> <td class="labelkey">商品ID</td> <td id="goods_statistics_goods_id" class="labelvalue">42099</td> </tr> <tr> <td class="labelkey">商品名称</td> <td id="goods_statistics_goods_name" class="labelvalue">【2件包邮】秋冬韩版修身女装高领拼色包臀针织衫加厚长款毛衣打底衫738#！手感舒适，串珠图案显得极其的高贵，时尚！无论是单穿还是搭配风衣，棉服，羽绒服都是可以的哦！</td> </tr> <tr> <td class="labelkey">商品定价</td> <td class="labelvalue">
                        供货价：<span
                                id="goods_statistics_suppliers_price">110</span>&nbsp;
                        供货快递：<span
                                id="goods_statistics_suppliers_shipping_fee">6</span> </td> </tr> <tr> <td class="labelkey">销售时间</td> <td class="labelvalue"> <span id="goods_statistics_goods_start_time">&nbsp;</span>--
                        <span id="goods_statistics_goods_end_time">&nbsp;</span> </td> </tr> <tr> <td colspan="2" class="well well-small">&nbsp;</td> </tr> <tr> <td class="labelkey">订单统计</td> <td class="labelvalue">
                        总订单：<span id="goods_statistics_total_order">2</span>&nbsp;
                        付款：<span id="goods_statistics_pay_order">1</span>&nbsp;
                        退款：<span id="goods_statistics_refund_order">1</span>&nbsp;
                        未付款：<span id="goods_statistics_pay_order">0</span> </td> </tr> <tr> <td class="labelkey">商品统计</td> <td class="labelvalue">
                        总商品：<span id="goods_statistics_total_goods">3</span>&nbsp;
                        付款：<span id="goods_statistics_pay_goods">1</span>&nbsp;
                        退款：<span id="goods_statistics_refund_goods">2</span>&nbsp;
                        未付款：<span id="goods_statistics_pay_goods">0</span> </td> </tr> <tr> <td class="labelkey"></td> <td class="labelvalue">
                            绿色<br/>
                            总订单：<span>2</span>&nbsp;
                            付款：<span>1</span>&nbsp;
                            退款：<span>1</span>&nbsp;
                            未付款：<span>0</span> <br/>
                            总商品：<span>3</span>&nbsp;
                            付款：<span>1</span>&nbsp;
                            退款：<span>2</span>&nbsp;
                            未付款：<span>0</span> </td> </tr> </tbody> </table> </div> </div> <div class="modal-footer"> <a href="#" class="btn btn-success" data-dismiss="modal">关闭</a> </div><?php }} ?>
