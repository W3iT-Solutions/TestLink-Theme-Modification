<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:38
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\inc_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24154571bc5de3071d2-67696407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '704feccaae2752835f2d76d8c22948d2056c52bc' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\inc_head.tpl',
      1 => 1427533465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24154571bc5de3071d2-67696407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageCharset' => 0,
    'basehref' => 0,
    'pageTitle' => 0,
    'css' => 0,
    'use_custom_css' => 0,
    'custom_css' => 0,
    'testproject_coloring' => 0,
    'testprojectColor' => 0,
    'jsValidate' => 0,
    'editorType' => 0,
    'menuUrl' => 0,
    'args' => 0,
    'additionalArgs' => 0,
    'SP_html_help_file' => 0,
    'openHead' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5de9681e7_95611351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5de9681e7_95611351')) {function content_571bc5de9681e7_95611351($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['pageCharset']->value;?>
" />
	<meta http-equiv="Content-language" content="en" />
	<meta http-equiv="expires" content="-1" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="author" content="Martin Havlat" />
	<meta name="copyright" content="GNU" />
	<meta name="robots" content="NOFOLLOW" />
	<base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
"/>
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? "TestLink" : $tmp);?>
</title>
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo @constant('TL_THEME_IMG_DIR');?>
favicon.ico" type="image/x-icon" />
	
 
	<style media="all" type="text/css">@import "<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
";</style>

	<?php if ($_smarty_tpl->tpl_vars['use_custom_css']->value){?>
	<style media="all" type="text/css">@import "<?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
";</style>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['testproject_coloring']->value=='background'){?>
  	<style type="text/css"> body {background: <?php echo $_smarty_tpl->tpl_vars['testprojectColor']->value;?>
;}</style>
	<?php }?>
  
	<style media="print" type="text/css">@import "<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo @constant('TL_PRINT_CSS');?>
";</style>

 
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/javascript/testlink_library.js" language="javascript"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/javascript/test_automation.js" language="javascript"></script>
	
	<?php if ($_smarty_tpl->tpl_vars['jsValidate']->value=="yes"){?> 
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/javascript/validate.js" language="javascript"></script>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_jsCfieldsValidation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
   
	<?php if ($_smarty_tpl->tpl_vars['editorType']->value=='tinymce'){?>
    <script type="text/javascript" language="javascript"
    	src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_tinymce_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>

	<?php if (@constant('TL_SORT_TABLE_ENGINE')=='kryogenix.org'){?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/javascript/sorttable.js" 
		language="javascript"></script>
	<?php }?>


  	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/chosen/chosen.css">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/jquery/jquery-2.0.3.min.js" language="javascript"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/chosen/chosen.jquery.js"></script>

	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/prototype/prototype.js" language="javascript"></script>

	<script type="text/javascript" language="javascript">
	<!--
	var fRoot = '<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
';
	var menuUrl = '<?php echo $_smarty_tpl->tpl_vars['menuUrl']->value;?>
';
	var args  = '<?php echo $_smarty_tpl->tpl_vars['args']->value;?>
';
	var additionalArgs  = '<?php echo $_smarty_tpl->tpl_vars['additionalArgs']->value;?>
';
	
	// To solve problem diplaying help
	var SP_html_help_file  = '<?php echo $_smarty_tpl->tpl_vars['SP_html_help_file']->value;?>
';
	
	//attachment related JS-Stuff
	var attachmentDlg_refWindow = null;
	var attachmentDlg_refLocation = null;
	var attachmentDlg_bNoRefresh = false;
	
	// bug management (using logic similar to attachment)
	var bug_dialog = new bug_dialog();

	// for ext js
	var extjsLocation = '<?php echo @constant('TL_EXTJS_RELATIVE_PATH');?>
';
	
	//-->
	</script> 
<?php if ($_smarty_tpl->tpl_vars['openHead']->value=="no"){?> 
</head>
<?php }?>
<?php }} ?>