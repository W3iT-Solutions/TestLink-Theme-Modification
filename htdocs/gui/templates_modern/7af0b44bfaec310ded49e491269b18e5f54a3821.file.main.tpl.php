<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:37
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13962571bc5ddca5af6-48729127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af0b44bfaec310ded49e491269b18e5f54a3821' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\main.tpl',
      1 => 1427533465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13962571bc5ddca5af6-48729127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageCharset' => 0,
    'tlVersion' => 0,
    'gui' => 0,
    'basehref' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5dde1de16_85091324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5dde1de16_85091324')) {function content_571bc5dde1de16_85091324($_smarty_tpl) {?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['pageCharset']->value;?>
" />
	<meta http-equiv="Content-language" content="en" />
	<meta name="generator" content="testlink" />
	<meta name="author" content="TestLink Development Team" />
	<meta name="copyright" content="TestLink Development Team" />
	<meta name="robots" content="NOFOLLOW" />
	<title>TestLink <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tlVersion']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
	<meta name="description" content="TestLink - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['gui']->value->title)===null||$tmp==='' ? "Main page" : $tmp);?>
" />
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo @constant('TL_THEME_IMG_DIR');?>
favicon.ico" type="image/x-icon" />
</head>

<frameset rows="70,*" frameborder="0" framespacing="0">
	<frame src="<?php echo $_smarty_tpl->tpl_vars['gui']->value->titleframe;?>
" name="titlebar" scrolling="no" noresize="noresize" />
	<frame src="<?php echo $_smarty_tpl->tpl_vars['gui']->value->mainframe;?>
" scrolling='auto' name='mainframe' />
	<noframes>
		<body>TestLink required a frames supporting browser.</body>
	</noframes>
</frameset>

</html>
<?php }} ?>