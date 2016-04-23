<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:39
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\inc_ext_js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8162571bc5df3232b9-66071076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830074802839719c55eecb7dd75cf57ba70d609a' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\inc_ext_js.tpl',
      1 => 1427533464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8162571bc5df3232b9-66071076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bResetEXTCss' => 0,
    'basehref' => 0,
    'ext_location' => 0,
    'css_only' => 0,
    'ext_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5df7ed130_66405921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5df7ed130_66405921')) {function content_571bc5df7ed130_66405921($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("en", null, 0);?>
<?php if ($_SESSION['locale']=="cs_CZ"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("cs", null, 0);?>
<?php }elseif($_SESSION['locale']=="de_DE"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("de", null, 0);?>
<?php }elseif($_SESSION['locale']=="en_GB"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("en_GB", null, 0);?>
<?php }elseif($_SESSION['locale']=="en_US"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("en", null, 0);?>
<?php }elseif($_SESSION['locale']=="es_AR"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("es", null, 0);?>
<?php }elseif($_SESSION['locale']=="es_ES"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("es", null, 0);?>
<?php }elseif($_SESSION['locale']=="fi_FI"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("fi", null, 0);?>
<?php }elseif($_SESSION['locale']=="fr_FR"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("fr", null, 0);?>
<?php }elseif($_SESSION['locale']=="id_ID"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("id", null, 0);?>
<?php }elseif($_SESSION['locale']=="it_IT"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("it", null, 0);?>
<?php }elseif($_SESSION['locale']=="ja_JP"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("ja", null, 0);?>
<?php }elseif($_SESSION['locale']=="ko_KR"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("ko", null, 0);?>
<?php }elseif($_SESSION['locale']=="nl_NL"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("nl", null, 0);?>
<?php }elseif($_SESSION['locale']=="pl_PL"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("pl", null, 0);?>
<?php }elseif($_SESSION['locale']=="pt_BR"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("pt_BR", null, 0);?>
<?php }elseif($_SESSION['locale']=="ru_RU"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("ru", null, 0);?>
<?php }elseif($_SESSION['locale']=="zh_CN"){?>
  <?php $_smarty_tpl->tpl_vars['ext_lang'] = new Smarty_variable("zh_CN", null, 0);?>
<?php }?>


<?php if (guard_header_smarty('__FILE__')){?>

  <?php $_smarty_tpl->tpl_vars[((string)$_smarty_tpl->tpl_vars['css_only']->value)] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['css_only']->value)."|default:0", null, 0);?>
  <?php $_smarty_tpl->tpl_vars['ext_location'] = new Smarty_variable(@constant('TL_EXTJS_RELATIVE_PATH'), null, 0);?>
  <?php if (isset($_smarty_tpl->tpl_vars['bResetEXTCss']->value)&&$_smarty_tpl->tpl_vars['bResetEXTCss']->value){?>
  	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/css/reset-min.css" />
  <?php }?>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/css/ext-all.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/css/GridFilters.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/css/RangeMenu.css" />
  
  <?php if ($_smarty_tpl->tpl_vars['css_only']->value==0){?>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/adapter/ext/ext-base.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ext-all.js" language="javascript"></script>
      
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/Reorderer.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/ToolbarReorderer.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/ToolbarDroppable.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/Exporter-all.js" language="javascript"></script>
      
      
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/menu/RangeMenu.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/menu/ListMenu.js" language="javascript"></script>
      
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/GridFilters.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/filter/Filter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/filter/StringFilter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/filter/DateFilter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/filter/ListFilter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/filter/NumericFilter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/gridfilters/filter/BooleanFilter.js" language="javascript"></script>
      
      
      
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/src/locale/ext-lang-<?php echo $_smarty_tpl->tpl_vars['ext_lang']->value;?>
.js" language="javascript"></script>
  
      
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ext_location']->value;?>
/ux/TableGrid.js" language="javascript"></script>
  <?php }?>

<?php }?><?php }} ?>