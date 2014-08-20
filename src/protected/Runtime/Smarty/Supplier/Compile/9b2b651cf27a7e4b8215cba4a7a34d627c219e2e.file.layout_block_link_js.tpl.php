<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:32:08
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/layout_block_link_js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27170968953f440e8ef2bb0-60786765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2b651cf27a7e4b8215cba4a7a34d627c219e2e' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Supplier/supplier/Tpl/layout_block_link_js.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27170968953f440e8ef2bb0-60786765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_ROOT_HOST' => 0,
    'WEB_ROOT_BASE' => 0,
    'WEB_ROOT_BASE_RES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440e8f023b2_81116637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440e8f023b2_81116637')) {function content_53f440e8f023b2_81116637($_smarty_tpl) {?><!-- 定义网站的起始路径，用于 JavaScript 的 Ajax 操作调用 -->
<script type="text/javascript">
    var WEB_ROOT_HOST = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_HOST']->value, ENT_QUOTES, 'UTF-8');?>
';
    var WEB_ROOT_BASE = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE']->value, ENT_QUOTES, 'UTF-8');?>
';
    var WEB_ROOT_BASE_RES = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WEB_ROOT_BASE_RES']->value, ENT_QUOTES, 'UTF-8');?>
';
</script>

<!-- 合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
<?php echo smarty_helper_function_dump_merged_asset_js_url(array('asset'=>'bootstrap-custom/js/json2.js,
       bootstrap-custom/js/jquery-1.8.3.min.js,
       bootstrap-custom/js/jquery.cookie.js,
       bootstrap-custom/js/jquery.lazyload.js,
       bootstrap-custom/js/jstorage.min.js,
       bootstrap-custom/js/bootstrap.min.js,
       bootstrap-custom/js/bootstrap.ie.js,
       bootstrap-custom/js/validator.js,
       bootstrap-custom/plugin/datetimepicker/datetimepicker.min.js,
       bootstrap-custom/plugin/select2/select2.min.js,
       bootstrap-custom/plugin/select2/select2_locale_zh-CN.js,
       bootstrap-custom/plugin/dirtyform/jquery.are-you-sure.js,
       bootstrap-custom/plugin/pretty-photo/js/jquery.prettyPhoto.js,
       bootstrap-custom/plugin/bootbox/bootbox.min.js,
       bootstrap-custom/plugin/hover-dropdown/hover-dropdown.min.js,
       bootstrap-custom/plugin/pnotify/jquery.pnotify.min.js,
       bootstrap-custom/plugin/scroll-modal/scroll-modal.js,
       bootstrap-custom/plugin/fileupload/si.files.js,
       bootstrap-custom/plugin/clickover/bootstrapx-clickover.js,
       bootstrap-custom/plugin/pretty-loader/js/jquery.prettyLoader.js,
       js/supplier.js
'),$_smarty_tpl);?>

<!-- /合并所有的 JS 文件, 使用 merge=false 参数关闭合并，这样可以对单个文件做调试 -->
<?php }} ?>
