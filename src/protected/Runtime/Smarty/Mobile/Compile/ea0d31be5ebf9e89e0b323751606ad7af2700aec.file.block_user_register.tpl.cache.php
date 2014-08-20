<?php /* Smarty version Smarty-3.1-DEV, created on 2014-08-20 14:31:42
         compiled from "/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/block_user_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64168606653f440ceeba1f1-35732814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea0d31be5ebf9e89e0b323751606ad7af2700aec' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/block_user_register.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64168606653f440ceeba1f1-35732814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'captchaUrl' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440ceec6b59_39283706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440ceec6b59_39283706')) {function content_53f440ceec6b59_39283706($_smarty_tpl) {?><form data-ajax="false" method="POST" action="<?php echo smarty_helper_function_make_url(array('controller'=>'/User/Register'),$_smarty_tpl);?>
">
    <div style="padding:10px 20px;">
        <h3>用户注册</h3>
        <!-- 记录跳转回来的 URL -->
        <input type="hidden" name="returnUrl" value="">
        <label for="user_name" class="ui-hidden-accessible">用户名:</label>
        <input type="text" name="user_name" value="" placeholder="填入用户名" data-theme="a" required="required"/>
        <label for="password" class="ui-hidden-accessible">密码:</label>
        <input type="text" name="password" value="" placeholder="填入密码" data-theme="a" required="required"/>
        
            <img width="150" height="50" src="<?php echo '/*%%SmartyNocache:64168606653f440ceeba1f1-35732814%%*/<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars[\'captchaUrl\']->value)===null||$tmp===\'\' ? \'\' : $tmp), ENT_QUOTES, \'UTF-8\');?>
/*/%%SmartyNocache:64168606653f440ceeba1f1-35732814%%*/';?>
">
        
        <label for="captcha" class="ui-hidden-accessible">验证码:</label>
        <input type="text" name="captcha" value="" placeholder="填入验证码" data-theme="a" required="required"/>
        <button type="submit" data-theme="e" data-icon="check">点击注册</button>
    </div>
</form>
<?php }} ?>
