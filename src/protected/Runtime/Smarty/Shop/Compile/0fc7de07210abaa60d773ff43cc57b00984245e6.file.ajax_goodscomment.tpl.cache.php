<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:33:05
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/ajax_goodscomment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42728025453f44121389955-00881334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc7de07210abaa60d773ff43cc57b00984245e6' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/ajax_goodscomment.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42728025453f44121389955-00881334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goodsCommentArray' => 0,
    'goodsCommentItem' => 0,
    'currentUrl' => 0,
    'totalCount' => 0,
    'pageNo' => 0,
    'pageSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f441213d6d21_66223390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f441213d6d21_66223390')) {function content_53f441213d6d21_66223390($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['goodsCommentArray']->value)) {?>
    <!-- 商品的用户评价列表 -->
    <?php  $_smarty_tpl->tpl_vars['goodsCommentItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsCommentItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCommentArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsCommentItem']->key => $_smarty_tpl->tpl_vars['goodsCommentItem']->value) {
$_smarty_tpl->tpl_vars['goodsCommentItem']->_loop = true;
?>
        <div class="media">
            <a class="pull-left" href="#" onclick="return false;">
                <img class="media-object lazyload"
                     src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                     data-original="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/user_avatar.gif'),$_smarty_tpl);?>
">
            </a>

            <div class="media-body bzf_border">

                <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td>
                            <div class="bzf_rate_star_readonly"
                                 rateValue="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCommentItem']->value['comment_rate'], ENT_QUOTES, 'UTF-8');?>
"></div>
                        </td>
                        <td><?php echo htmlspecialchars(smarty_helper_modifier_mask_string($_smarty_tpl->tpl_vars['goodsCommentItem']->value['user_name']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['goodsCommentItem']->value['comment_time']>0) {?>
                                <?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['goodsCommentItem']->value['comment_time']), ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars(smarty_helper_modifier_localtime($_smarty_tpl->tpl_vars['goodsCommentItem']->value['create_time']), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </td>
                    </tr>
                    <tr>
                        <td>商品选择：<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['goodsCommentItem']->value['goods_attr'])===null||$tmp==='' ? '默认款式' : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>商品金额：￥<?php echo htmlspecialchars(smarty_helper_modifier_money_display($_smarty_tpl->tpl_vars['goodsCommentItem']->value['goods_price']), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>购买数量：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCommentItem']->value['goods_number'], ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    </tbody>
                </table>
                <?php if (empty($_smarty_tpl->tpl_vars['goodsCommentItem']->value['comment'])) {?>
                    [用户没有评价，系统默认为好评]
                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCommentItem']->value['comment'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['goodsCommentItem']->value['reply'])) {?>
                    <div class="media">
                        <a class="pull-left" href="#" onclick="return false;">
                            <img class="media-object lazyload"
                                 src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                                 data-original="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/admin_avatar.gif'),$_smarty_tpl);?>
">
                        </a>

                        <div class="media-body">
                            <h6 class="media-heading">管理员</h6>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCommentItem']->value['reply'], ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php } ?>
    <!-- /商品的用户评价列表 -->

    <!-- 分页 -->
    <div class="row pagination pagination-right">
        <?php echo smarty_helper_function_paginator(array('currentUrl'=>(($tmp = @$_smarty_tpl->tpl_vars['currentUrl']->value)===null||$tmp==='' ? '' : $tmp),'noPageCount'=>'true','count'=>(($tmp = @$_smarty_tpl->tpl_vars['totalCount']->value)===null||$tmp==='' ? 0 : $tmp),'pageNo'=>(($tmp = @$_smarty_tpl->tpl_vars['pageNo']->value)===null||$tmp==='' ? 0 : $tmp),'pageSize'=>(($tmp = @$_smarty_tpl->tpl_vars['pageSize']->value)===null||$tmp==='' ? 10 : $tmp)),$_smarty_tpl);?>

    </div>
    <!-- 分页 -->

<?php } else { ?>
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object lazyload"
                 src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/blank.gif'),$_smarty_tpl);?>
"
                 data-original="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/user_avatar.gif'),$_smarty_tpl);?>
">
        </a>

        <div class="media-body bzf_border" style="margin-top: 20px;">
            目前还没有用户评价，你来做第一个评价？
        </div>
    </div>
<?php }?>
<?php }} ?>
