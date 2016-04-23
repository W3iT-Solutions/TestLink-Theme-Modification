<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:38
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\navBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32746571bc5de741960-77347550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '698fcb4697762f422c654923d2e11bdd43482eae' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\navBar.tpl',
      1 => 1427533465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32746571bc5de741960-77347550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_section' => 0,
    'tlCfg' => 0,
    'gui' => 0,
    'tlImages' => 0,
    'labels' => 0,
    'tlVersion' => 0,
    'tproject_id' => 0,
    'tproject_name' => 0,
    'session' => 0,
    'basehref' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5decf2fc0_00144666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5decf2fc0_00144666')) {function content_571bc5decf2fc0_00144666($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\third_party\\smarty3\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\third_party\\smarty3\\libs\\plugins\\modifier.truncate.php';
?>
<?php echo lang_get_smarty(array('var'=>"labels",'s'=>"title_events,event_viewer,home,testproject,title_specification,title_execute,
             title_edit_personal_data,th_tcid,link_logout,title_admin,
             search_testcase,title_results,title_user_mgmt"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars["cfg_section"] = new Smarty_variable(smarty_modifier_replace(basename($_smarty_tpl->source->filepath),".tpl",''), null, 0);?>
<?php  $_config = new Smarty_Internal_Config("input_dimensions.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars($_smarty_tpl->tpl_vars['cfg_section']->value, 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('openHead'=>"yes"), 0);?>

</head>
<body style="min-width: 800px;">
<div style="float:left; height: 100%;">
  <a href="index.php" target="_parent">
  <img alt="Company logo" title="logo" src="<?php echo @constant('TL_THEME_IMG_DIR');?>
<?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->logo_navbar;?>
" /></a>
</div>
  
<div class="menu_title">

  <span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gui']->value->whoami, ENT_QUOTES, 'UTF-8', true);?>
</span>
  <span>&nbsp;&nbsp;&nbsp;<a href='lib/usermanagement/userInfo.php' target="mainframe" accesskey="i"
          tabindex="6"><img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['account'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['labels']->value['title_edit_personal_data'];?>
"></a>
        <a href="logout.php" target="_parent" accesskey="q">
        <img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['logout'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['labels']->value['link_logout'];?>
"></a>
  </span>
  <span style="float:right;">TestLink <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tlVersion']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
</div>

<div class="menu_bar" style="margin: 0px 5px 0px 135px;">
<?php if ($_smarty_tpl->tpl_vars['gui']->value->TestProjects!=''){?>
  <div style="display: inline; float: right;">
    <form style="display:inline" name="productForm" action="lib/general/navBar.php" method="get">
       <?php echo $_smarty_tpl->tpl_vars['labels']->value['testproject'];?>

      <select style="font-size: 80%;position:relative; top:-1px;" name="testproject" onchange="this.form.submit();">
          <?php  $_smarty_tpl->tpl_vars['tproject_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tproject_name']->_loop = false;
 $_smarty_tpl->tpl_vars['tproject_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gui']->value->TestProjects; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tproject_name']->key => $_smarty_tpl->tpl_vars['tproject_name']->value){
$_smarty_tpl->tpl_vars['tproject_name']->_loop = true;
 $_smarty_tpl->tpl_vars['tproject_id']->value = $_smarty_tpl->tpl_vars['tproject_name']->key;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['tproject_id']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tproject_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"
            <?php if ($_smarty_tpl->tpl_vars['tproject_id']->value==$_smarty_tpl->tpl_vars['gui']->value->tprojectID){?> selected="selected" <?php }?>>
            <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['tproject_name']->value,$_smarty_tpl->getConfigVariable('TESTPROJECT_TRUNCATE_SIZE')), ENT_QUOTES, 'UTF-8', true);?>
</option>
        <?php } ?>
      </select>
    </form>
  </div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['session']->value['testprojectTopMenu'];?>


<?php if ($_smarty_tpl->tpl_vars['gui']->value->tprojectID){?>
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants->view_testcase_spec=="yes"){?>
    <form style="display:inline" target="mainframe" name="searchTC" id="searchTC"
          action="lib/testcases/archiveData.php" method="get">
    <input style="font-size: 80%; position:relative; top:-1px;" type="text" size="<?php echo $_smarty_tpl->tpl_vars['gui']->value->searchSize;?>
"
           title="<?php echo $_smarty_tpl->tpl_vars['labels']->value['search_testcase'];?>
" name="targetTestCase" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tcasePrefix;?>
" />

      
    <input type="hidden" id="tcasePrefix" name="tcasePrefix" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tcasePrefix;?>
" />

      
    <input type="hidden" id="caller" name="caller" value="navBar" />
    <img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['magnifier'];?>
"
         title="<?php echo $_smarty_tpl->tpl_vars['labels']->value['search_testcase'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['labels']->value['search_testcase'];?>
"
         onclick="document.getElementById('searchTC').submit()" class="clickable" 
         style="position:relative; top:2px;" />
    <input type="hidden" name="edit" value="testcase"/>
    <input type="hidden" name="allow_edit" value="0"/>
    </form>
  <?php }?>
<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->updateMainPage==1){?>
  <script type="text/javascript">
  parent.mainframe.location = "<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/general/mainPage.php";
  </script>
<?php }?>

</body>
</html><?php }} ?>