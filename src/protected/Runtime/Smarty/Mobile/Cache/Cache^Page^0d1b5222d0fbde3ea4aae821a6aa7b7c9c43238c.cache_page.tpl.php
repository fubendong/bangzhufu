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
    'be45598bb0ad765431239dc59f48c014159c1740' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/block_category_list.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '19ebc5b7497cf0614106b0160cc0b87e48f13f65' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/block_my_account.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    '90b251e7c3c4f7c5be089eec7ad80e1a489b43b4' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/block_user_login.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
    'ea0d31be5ebf9e89e0b323751606ad7af2700aec' => 
    array (
      0 => '/home/wwwroot/3.huopool.com/bzfshop/src/protected/Theme/Mobile/mobile/Tpl/block_user_register.tpl',
      1 => 1408514855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157319942853f440cee413e7-20576732',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53f440ceece247_31835634',
  'cache_lifetime' => '1800',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f440ceece247_31835634')) {function content_53f440ceece247_31835634($_smarty_tpl) {?><!-- 缓存页面，保存全局都会使用的一些组件 -->
<!-- div id="cache_page" data-role="page" class="ui-responsive-panel" -->

<input type="hidden" id="cache_page_exist"/>

<!-- 商品分类选择面板 -->
<div data-role="panel" id="goods_category_panel" data-position="left" data-theme="a">
    <ul data-role="listview" data-theme="a">
    <li><a data-transition="flow"  href="/mobile/">网站首页</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5116">服装/内衣/配件</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5120">鞋/箱包</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5126">家纺/居家</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5121">首饰饰品/手表眼镜</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5123">运动户外</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5603">数码/音像/保健</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5130">汽车配件</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5128">食品</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5127">母婴玩具</a></li><li><a data-transition="flow"  href="/mobile/Goods/Search?category_id=5125">家用电器</a></li>
</ul>


</div>
<!-- 商品分类选择面板 -->

<!-- 我的账户面板 -->
<div data-role="panel" id="my_account_panel" data-position="right" data-theme="a">
    <ul data-role="listview" data-theme="a">
    <li id="my_account_user_name_display" class="ui-btn-icon-left" data-theme="e" data-icon="check">
        <a href="#">用户账号</a>
    </li>
    <li class="ui-btn-icon-left" data-theme="e" data-icon="delete" data-ajax="false">
        <a data-direction="reverse"
           data-transition="flow" href="/mobile/User/Logout.html">退出登录</a>
    </li>
    <li class="ui-btn-icon-left" data-icon="arrow-l">
        <a data-direction="reverse" data-transition="flow"
           href="/mobile/My/Order.html">我的订单</a>
    </li>
    <li class="ui-btn-icon-left" data-icon="arrow-l">
        <a data-direction="reverse" data-transition="flow"
           href="/mobile/Cart/Show.html">查看购物车</a>
    </li>
</ul>

</div>
<!-- 我的账户面板 -->

<!-- 用户登录对话框 -->
<div data-role="popup" id="user_login_popup" data-theme="a" class="ui-corner-all">
    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext"
       class="ui-btn-right">关闭</a>
    <form data-ajax="false" method="POST" action="/mobile/User/Login.html">
    <div style="padding:10px 20px;">
        <h3>用户登录</h3>
        <!-- 记录跳转回来的 URL -->
        <input type="hidden" name="returnUrl" value="">
        <label for="user_name" class="ui-hidden-accessible">用户名:</label>
        <input type="text" name="user_name" value="" placeholder="填入用户名" data-theme="a" required="required"/>
        <label for="password" class="ui-hidden-accessible">密码:</label>
        <input type="text" name="password" value="" placeholder="填入密码" data-theme="a" required="required"/>
        
            <img width="150" height="50" src="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['captchaUrl']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        
        <label for="captcha" class="ui-hidden-accessible">验证码:</label>
        <input type="text" name="captcha" value="" placeholder="填入验证码" data-theme="a" required="required"/>
        <button type="submit" data-theme="e" data-icon="check">点击登录</button>
        <a data-role="button" data-theme="f"
           data-transition="slide" data-icon="arrow-r" data-iconpos="right"
           href="/mobile/User/Register.html">现在去注册</a>
    </div>
</form>


</div>
<!-- /用户登录对话框 -->

<!-- 用户注册对话框 -->
<div data-role="popup" id="user_register_popup" data-theme="a" class="ui-corner-all">
    <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext"
       class="ui-btn-right">关闭</a>
    <form data-ajax="false" method="POST" action="/mobile/User/Register.html">
    <div style="padding:10px 20px;">
        <h3>用户注册</h3>
        <!-- 记录跳转回来的 URL -->
        <input type="hidden" name="returnUrl" value="">
        <label for="user_name" class="ui-hidden-accessible">用户名:</label>
        <input type="text" name="user_name" value="" placeholder="填入用户名" data-theme="a" required="required"/>
        <label for="password" class="ui-hidden-accessible">密码:</label>
        <input type="text" name="password" value="" placeholder="填入密码" data-theme="a" required="required"/>
        
            <img width="150" height="50" src="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['captchaUrl']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        
        <label for="captcha" class="ui-hidden-accessible">验证码:</label>
        <input type="text" name="captcha" value="" placeholder="填入验证码" data-theme="a" required="required"/>
        <button type="submit" data-theme="e" data-icon="check">点击注册</button>
    </div>
</form>

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
