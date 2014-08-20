<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:16:47
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/ajax_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42996469953f43d4f85cb94-79642317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd674e338ebc2647732fc8cc99d3f0bb9e7dea5d' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Shop/shop/Tpl/ajax_category.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42996469953f43d4f85cb94-79642317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goodsCategoryTreeArray' => 0,
    'goodsCategoryFirstItem' => 0,
    'goodsCategorySecondItem' => 0,
    'goodsCategoryThirdItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f43d4f917906_47039303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f43d4f917906_47039303')) {function content_53f43d4f917906_47039303($_smarty_tpl) {?><!-- 商品分类 -->
<!-- div class="row navsort" -->

<div class='row allsort'>

    <div class='mc'>

        <?php if (isset($_smarty_tpl->tpl_vars['goodsCategoryTreeArray']->value)) {?>

            <?php  $_smarty_tpl->tpl_vars['goodsCategoryFirstItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCategoryTreeArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->key => $_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->value) {
$_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->_loop = true;
?>
                <!-- 一级分类 -->
                <div class='item'>
                        <span><h3>
                                <a href="<?php echo smarty_helper_function_make_url(array('controller'=>"/Goods/Category",'category_id'=>$_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->value['meta_id']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </h3><s></s></span>

                    <div class='i-mc'>
                        <div class='close'
                             onclick="$(this).parent().parent().removeClass('hover')"></div>
                        <div class='subitem'>

                            <?php if (isset($_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->value['child_list'])) {?>
                                <?php  $_smarty_tpl->tpl_vars['goodsCategorySecondItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsCategorySecondItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCategoryFirstItem']->value['child_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsCategorySecondItem']->key => $_smarty_tpl->tpl_vars['goodsCategorySecondItem']->value) {
$_smarty_tpl->tpl_vars['goodsCategorySecondItem']->_loop = true;
?>
                                    <!-- 二级分类 -->
                                    <dl>
                                        <dt>
                                            <a href="<?php echo smarty_helper_function_make_url(array('controller'=>"/Goods/Category",'category_id'=>$_smarty_tpl->tpl_vars['goodsCategorySecondItem']->value['meta_id']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategorySecondItem']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                        </dt>
                                        <dd>

                                            <?php if (isset($_smarty_tpl->tpl_vars['goodsCategorySecondItem']->value['child_list'])) {?>
                                                <?php  $_smarty_tpl->tpl_vars['goodsCategoryThirdItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goodsCategoryThirdItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsCategorySecondItem']->value['child_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goodsCategoryThirdItem']->key => $_smarty_tpl->tpl_vars['goodsCategoryThirdItem']->value) {
$_smarty_tpl->tpl_vars['goodsCategoryThirdItem']->_loop = true;
?>
                                                    <!-- 三级分类 -->
                                                    <em><a href='<?php echo smarty_helper_function_make_url(array('controller'=>"/Goods/Category",'category_id'=>$_smarty_tpl->tpl_vars['goodsCategoryThirdItem']->value['meta_id']),$_smarty_tpl);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['goodsCategoryThirdItem']->value['meta_name'], ENT_QUOTES, 'UTF-8');?>
</a></em>
                                                    <!-- /三级分类 -->
                                                <?php } ?>
                                            <?php }?>
                                        </dd>
                                    </dl>
                                    <!-- /二级分类 -->
                                <?php } ?>
                            <?php }?>

                        </div>

                        <!-- image -->
                        <div class='fr' style="padding-top: 30px;">
                            <a href="#">
                                <img src="<?php echo smarty_helper_function_get_asset_url(array('asset'=>'img/category_adv.jpg'),$_smarty_tpl);?>
"/>
                            </a>
                        </div>
                        <!-- /image -->

                    </div>
                </div>
                <!-- /一级分类 -->
            <?php } ?>

        <?php }?>

        <div class='extra'><a href='<?php echo smarty_helper_function_make_url(array('controller'=>"/"),$_smarty_tpl);?>
'>全部商品分类</a></div>

    </div>

</div>

<!-- /div -->
<!-- /商品分类 -->
<?php }} ?>
