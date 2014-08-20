<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:31:42
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/cache_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157319942853f440cee413e7-20576732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1b5222d0fbde3ea4aae821a6aa7b7c9c43238c' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/cache_page.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157319942853f440cee413e7-20576732',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440cee7dfe8_24496080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440cee7dfe8_24496080')) {function content_53f440cee7dfe8_24496080($_smarty_tpl) {?><!-- 缓存页面，保存全局都会使用的一些组件 -->
<!-- div id="cache_page" data-role="page" class="ui-responsive-panel" -->

<input type="hidden" id="cache_page_exist"/>

<!-- 商品分类选择面板 -->
<div data-role="panel" id="goods_category_panel" data-position="left" data-theme="a">
    <?php echo $_smarty_tpl->getSubTemplate ('block_category_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<!-- 商品分类选择面板 -->

<!-- 我的账户面板 -->
<div data-role="panel" id="my_account_panel" data-position="right" data-theme="a">
    <?php echo $_smarty_tpl->getSubTemplate ('block_my_account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<!-- 我的账户面板 -->

<!-- 用户登录对话框 -->
<div data-role="popup" id="user_login_popup" data-theme="a" class="ui-corner-all">
    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext"
       class="ui-btn-right">关闭</a>
    <?php echo $_smarty_tpl->getSubTemplate ('block_user_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<!-- /用户登录对话框 -->

<!-- 用户注册对话框 -->
<div data-role="popup" id="user_register_popup" data-theme="a" class="ui-corner-all">
    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext"
       class="ui-btn-right">关闭</a>
    <?php echo $_smarty_tpl->getSubTemplate ('block_user_register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<!-- /用户注册对话框 -->

<!-- flash message 显示-->
<div data-role="popup" id="flash_message_popup" data-theme="e" data-tolerance="15,15" class="ui-content">
    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext"
       class="ui-btn-right">关闭</a>
    <ul>
        <li>这里是出错消息</li>
    </ul>
</div>
<!-- /flash message 显示-->

<!-- 图片放大显示 popup -->
<div data-role="popup" id="zoom_image_popup" class="photopopup"
     data-overlay-theme="a" data-corners="false" data-tolerance="30,15">
    <a href="#" data-rel="back" data-role="button" data-theme="a"
       data-icon="delete" data-iconpos="notext" class="ui-btn-right">关闭</a>
    <img class="showloading" width="auto" height="auto"
         src="" data-original="" alt="大图显示"/>
</div>
<!-- 图片放大显示 popup -->

<!-- /div -->
<!-- 缓存页面，保存全局都会使用的一些组件 -->

<?php }} ?>
