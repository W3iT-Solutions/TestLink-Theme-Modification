<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:38
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\inc_login_title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18571571bc5dea42f20-34944778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc4cc8f05aded68405bec68188cf8aa11ed3530' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\inc_login_title.tpl',
      1 => 1427533465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18571571bc5dea42f20-34944778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tlCfg' => 0,
    'tlVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5dead07d1_55493457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5dead07d1_55493457')) {function content_571bc5dead07d1_55493457($_smarty_tpl) {?>
<div class="login_title">
<p><img alt="Company logo" title="logo" src="<?php echo @constant('TL_THEME_IMG_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->logo_login;?>
" />
   <br /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tlVersion']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
</div><?php }} ?>