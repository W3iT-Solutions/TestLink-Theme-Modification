<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:38
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\inc_copyrightnotice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28008571bc5deb981e0-73308301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7adee6587a24ea7fadaddbc9c96ddf3c158dde7' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\inc_copyrightnotice.tpl',
      1 => 1427533464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28008571bc5deb981e0-73308301',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5debc0944_39937455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5debc0944_39937455')) {function content_571bc5debc0944_39937455($_smarty_tpl) {?><p>
<?php echo lang_get_smarty(array('s'=>'lic_product'),$_smarty_tpl);?>
 <a href="http://testlink.sourceforge.net/"><?php echo lang_get_smarty(array('s'=>'lic_home'),$_smarty_tpl);?>
</a><br />
<?php echo lang_get_smarty(array('s'=>'licensed_under'),$_smarty_tpl);?>
 <a href="http://www.gnu.org/copyleft/gpl.html"><?php echo lang_get_smarty(array('s'=>'gnu_gpl'),$_smarty_tpl);?>
</a>
</p>
<?php }} ?>