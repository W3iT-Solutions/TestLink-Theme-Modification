<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:40
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\mainPageLeft.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7728571bc5e01efd34-95518827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d56e443eca6edda4aafe1b3f215282bfcf2f03d' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\mainPageLeft.tpl',
      1 => 1442645917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7728571bc5e01efd34-95518827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tlCfg' => 0,
    'gui' => 0,
    'labels' => 0,
    'menuLayout' => 0,
    'display_left_block_1' => 0,
    'display_left_block_2' => 0,
    'display_left_block_3' => 0,
    'display_left_block_4' => 0,
    'display_left_block_5' => 0,
    'basehref' => 0,
    'doc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5e0b75dc8_17776469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5e0b75dc8_17776469')) {function content_571bc5e0b75dc8_17776469($_smarty_tpl) {?>
<?php echo lang_get_smarty(array('var'=>'labels','s'=>'title_product_mgmt,href_tproject_management,href_admin_modules,
                          href_assign_user_roles,href_cfields_management,system_config,
                          href_cfields_tproject_assign,href_keywords_manage,
                          title_user_mgmt,href_user_management,
                          href_roles_management,title_requirements,
                          href_req_spec,href_req_assign,link_report_test_cases_created_per_user,
                          title_test_spec,href_edit_tc,href_browse_tc,href_search_tc,
                          href_search_req, href_search_req_spec,href_inventory,
                          href_platform_management, href_inventory_management,
                          href_print_tc,href_keywords_assign, href_req_overview,
                          href_print_req, title_documentation,href_issuetracker_management,
                          href_reqmgrsystem_management'),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['menuLayout'] = new Smarty_variable($_smarty_tpl->tpl_vars['tlCfg']->value->gui->layoutMainPageLeft, null, 0);?>


<?php $_smarty_tpl->tpl_vars['display_left_block_1'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['display_left_block_2'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['display_left_block_3'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['display_left_block_4'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['display_left_block_5'] = new Smarty_variable($_smarty_tpl->tpl_vars['tlCfg']->value->userDocOnDesktop, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->testprojectID&&($_smarty_tpl->tpl_vars['gui']->value->grants['project_edit']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['tproject_user_role_assignment']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['cfield_management']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['platform_management']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['keywords_view']=="yes")){?>
    
    <?php $_smarty_tpl->tpl_vars['display_left_block_1'] = new Smarty_variable(true, null, 0);?>

    <script  type="text/javascript">
    function display_left_block_1()
    {
        var p1 = new Ext.Panel({
                                title: '<?php echo $_smarty_tpl->tpl_vars['labels']->value['title_product_mgmt'];?>
',
                                collapsible:false,
                                collapsed: false,
                                draggable: false,
                                contentEl: 'testproject_topics',
                                baseCls: 'x-tl-panel',
                                bodyStyle: "background:#c8dce8;padding:3px;",
                                renderTo: 'menu_left_block_<?php echo $_smarty_tpl->tpl_vars['menuLayout']->value['testProject'];?>
',
                                width:'100%'
                                });
     }
    </script>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['gui']->value->testprojectID&&($_smarty_tpl->tpl_vars['gui']->value->grants['cfield_management']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['issuetracker_management']||$_smarty_tpl->tpl_vars['gui']->value->grants['issuetracker_view'])){?>
   <?php $_smarty_tpl->tpl_vars['display_left_block_2'] = new Smarty_variable(true, null, 0);?>

    <script  type="text/javascript">
    function display_left_block_2()
    {
      var p1 = new Ext.Panel({
                              title: '<?php echo $_smarty_tpl->tpl_vars['labels']->value['system_config'];?>
',
                              collapsible:false,
                              collapsed: false,
                              draggable: false,
                              contentEl: 'system_topics',
                              baseCls: 'x-tl-panel',
                              bodyStyle: "background:#c8dce8;padding:3px;",
                              renderTo: 'menu_left_block_2',
                              width:'100%'
                             });
     }
    </script>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['gui']->value->testprojectID&&$_smarty_tpl->tpl_vars['gui']->value->opt_requirements==true&&($_smarty_tpl->tpl_vars['gui']->value->grants['reqs_view']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['reqs_edit']=="yes")){?>
    <?php $_smarty_tpl->tpl_vars['display_left_block_3'] = new Smarty_variable(true, null, 0);?>

    <script type="text/javascript">
    function display_left_block_3()
    {
        var p3 = new Ext.Panel({
                                title: '<?php echo $_smarty_tpl->tpl_vars['labels']->value['title_requirements'];?>
',
                                collapsible:false,
                                collapsed: false,
                                draggable: false,
                                contentEl: 'requirements_topics',
                                baseCls: 'x-tl-panel',
                                bodyStyle: "background:#c8dce8;padding:3px;",
                                renderTo: 'menu_left_block_<?php echo $_smarty_tpl->tpl_vars['menuLayout']->value['requirements'];?>
',
                                width:'100%'
                                });
     }
    </script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->testprojectID&&$_smarty_tpl->tpl_vars['gui']->value->grants['view_tc']=="yes"){?>
    <?php $_smarty_tpl->tpl_vars['display_left_block_4'] = new Smarty_variable(true, null, 0);?>

    <script type="text/javascript">
    function display_left_block_4()
    {
        var p4 = new Ext.Panel({
                                title: '<?php echo $_smarty_tpl->tpl_vars['labels']->value['title_test_spec'];?>
',
                                collapsible:false,
                                collapsed: false,
                                draggable: false,
                                contentEl: 'testspecification_topics',
                                baseCls: 'x-tl-panel',
                                bodyStyle: "background:#c8dce8;padding:3px;",
                                renderTo: 'menu_left_block_<?php echo $_smarty_tpl->tpl_vars['menuLayout']->value['testSpecification'];?>
',
                                width:'100%'
                                });
     }
   </script>
<?php }?>


<div class="vertical_menu" style="float: left">
  <div id='menu_left_block_2'></div><br />
  <div id='menu_left_block_1'></div><br />
  <div id="menu_left_block_3"></div><br />
  <div id="menu_left_block_4"></div><br />
  <div id="menu_left_block_5"></div><br />
  
  <?php if ($_smarty_tpl->tpl_vars['display_left_block_1']->value){?>
    <div id='testproject_topics'>
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['project_edit']=="yes"){?>
      <a href="lib/project/projectView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_tproject_management'];?>
</a>
      <br />
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['tproject_user_role_assignment']=="yes"){?>
      <a href="lib/usermanagement/usersAssign.php?featureType=testproject&amp;featureID=<?php echo $_smarty_tpl->tpl_vars['gui']->value->testprojectID;?>
"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_assign_user_roles'];?>
</a>
      <br />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['cfield_management']=="yes"){?>
      <a href="lib/cfields/cfieldsTprojectAssign.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_cfields_tproject_assign'];?>
</a>
      <br />
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['keywords_view']=="yes"){?>
      <a href="lib/keywords/keywordsView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_keywords_manage'];?>
</a>
      <br />
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['platform_management']=="yes"){?>
      <a href="lib/platforms/platformsView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_platform_management'];?>
</a>
      <br />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['project_inventory_view']){?>
      <a href="lib/inventory/inventoryView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_inventory'];?>
</a>
    <?php }?>
    </div>
  <?php }?>

  
  <?php if ($_smarty_tpl->tpl_vars['display_left_block_2']->value){?>
    <div id='system_topics'>
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['cfield_management']=="yes"){?>
      <a href="lib/cfields/cfieldsView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_cfields_management'];?>
</a>
      <br />
    <?php }?>
     
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['issuetracker_management']||$_smarty_tpl->tpl_vars['gui']->value->grants['issuetracker_view']){?>
      <a href="lib/issuetrackers/issueTrackerView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_issuetracker_management'];?>
</a>
    <?php }?>
    </div>
  <?php }?>
  


  
   <?php if ($_smarty_tpl->tpl_vars['display_left_block_3']->value){?>
    <div id="requirements_topics" >
      <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['reqs_view']=="yes"){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=reqSpecMgmt"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_req_spec'];?>
</a><br/>
        <a href="lib/requirements/reqOverview.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_req_overview'];?>
</a><br/>
        <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=searchReq"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_search_req'];?>
</a><br/>
        <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=searchReqSpec"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_search_req_spec'];?>
</a>
      <br />
     <?php }?>
       
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['reqs_edit']=="yes"){?>
      <a href="lib/general/frmWorkArea.php?feature=assignReqs"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_req_assign'];?>
</a>
      <br />
      <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=printReqSpec"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_print_req'];?>
</a>
    <?php }?>
    </div>
  <?php }?>
  


  
   <?php if ($_smarty_tpl->tpl_vars['display_left_block_4']->value){?>
      <div id="testspecification_topics" >
      <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=editTc">
        <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['modify_tc']=="yes"){?>
          <?php echo lang_get_smarty(array('s'=>'href_edit_tc'),$_smarty_tpl);?>

       <?php }else{ ?>
          <?php echo lang_get_smarty(array('s'=>'href_browse_tc'),$_smarty_tpl);?>

       <?php }?>
      </a>
      <?php if ($_smarty_tpl->tpl_vars['gui']->value->hasTestCases){?>
        <br />
        <a href="lib/testcases/tcSearch.php?doAction=userInput&tproject_id=<?php echo $_smarty_tpl->tpl_vars['gui']->value->testprojectID;?>
"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_search_tc'];?>
</a>
      <?php }?>    
      
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->hasKeywords){?>  
      <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['keywords_view']=="yes"){?>
        <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['keywords_edit']=="yes"){?>
            <br />
            <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=keywordsAssign"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_keywords_assign'];?>
</a>
        <?php }?>
      <?php }?>
    <?php }?>
      
     <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['modify_tc']=="yes"){?>
       <br />
       <a href="lib/results/tcCreatedPerUserOnTestProject.php?do_action=uinput&tproject_id=<?php echo $_smarty_tpl->tpl_vars['gui']->value->testprojectID;?>
"><?php echo $_smarty_tpl->tpl_vars['labels']->value['link_report_test_cases_created_per_user'];?>
</a>
     <?php }?>
    
    </div>
  <?php }?>


  <?php if ($_smarty_tpl->tpl_vars['display_left_block_5']->value){?>
    <script type="text/javascript">
    function display_left_block_5()
    {
      var p5 = new Ext.Panel({
                              title: '<?php echo $_smarty_tpl->tpl_vars['labels']->value['title_documentation'];?>
',
                              collapsible:false,
                              collapsed: false,
                              draggable: false,
                              contentEl: 'testlink_application',
                              baseCls: 'x-tl-panel',
                              bodyStyle: "background:#c8dce8;padding:3px;",
                              renderTo: 'menu_left_block_<?php echo $_smarty_tpl->tpl_vars['menuLayout']->value['general'];?>
',
                              width:'100%'
                              });
    }
    </script>


    <div id='testlink_application'>
      <form style="display:inline;">
        <select class="menu_combo" style="font-weight:normal;" name="docs" size="1"
                onchange="javascript:get_docs(this.form.docs.options[this.form.docs.selectedIndex].value, 
                '<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
');" >
            <option value="leer"> -<?php echo lang_get_smarty(array('s'=>'access_doc'),$_smarty_tpl);?>
-</option>
            <?php if ($_smarty_tpl->tpl_vars['gui']->value->docs){?>
              <?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gui']->value->docs; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value){
$_smarty_tpl->tpl_vars['doc']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['doc']->value;?>
</option>
              <?php } ?>
            <?php }?>
        </select>
      </form>
    </div>
  <?php }?>


</div><?php }} ?>