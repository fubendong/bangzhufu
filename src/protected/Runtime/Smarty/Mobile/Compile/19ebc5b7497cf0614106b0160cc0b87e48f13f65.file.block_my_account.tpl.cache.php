<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:31:42
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/block_my_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118271682653f440cee9e061-54143984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ebc5b7497cf0614106b0160cc0b87e48f13f65' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/block_my_account.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118271682653f440cee9e061-54143984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440ceea48b1_80016983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440ceea48b1_80016983')) {function content_53f440ceea48b1_80016983($_smarty_tpl) {?><ul data-role="listview" data-theme="a">
    <li id="my_account_user_name_display" class="ui-btn-icon-left" data-theme="e" data-icon="check">
        <a href="#">用户账号</a>
    </li>
    <li class="ui-btn-icon-left" data-theme="e" data-icon="delete" data-ajax="false">
        <a data-direction="reverse"
           data-transition="flow" href="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Logout'),$_smarty_tpl);?>
">退出登录</a>
    </li>
    <li class="ui-btn-icon-left" data-icon="arrow-l">
        <a data-direction="reverse" data-transition="flow"
           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/My/Order'),$_smarty_tpl);?>
">我的订单</a>
    </li>
    <li class="ui-btn-icon-left" data-icon="arrow-l">
        <a data-direction="reverse" data-transition="flow"
           href="<?php echo smarty_helper_function_make_url(array('controller'=>'/Cart/Show'),$_smarty_tpl);?>
">查看购物车</a>
    </li>
</ul>
<?php }} ?>
