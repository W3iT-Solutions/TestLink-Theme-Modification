<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:39
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\mainPageRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8051571bc5df855387-28278159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9431320dc1ed1656d62e299d0fe0837891efc99c' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\mainPageRight.tpl',
      1 => 1427533465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8051571bc5df855387-28278159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tlCfg' => 0,
    'gui' => 0,
    'labels' => 0,
    'menuLayout' => 0,
    'display_right_block_1' => 0,
    'display_right_block_2' => 0,
    'display_right_block_3' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5e01956c3_37680253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5e01956c3_37680253')) {function content_571bc5e01956c3_37680253($_smarty_tpl) {?>
<?php echo lang_get_smarty(array('var'=>"labels",'s'=>"current_test_plan,ok,testplan_role,msg_no_rights_for_tp,
             title_test_execution,href_execute_test,href_rep_and_metrics,
             href_update_tplan,href_newest_tcversions,
             href_my_testcase_assignments,href_platform_assign,
             href_tc_exec_assignment,href_plan_assign_urgency,
             href_upd_mod_tc,title_test_plan_mgmt,title_test_case_suite,
             href_plan_management,href_assign_user_roles,
             href_build_new,href_plan_mstones,href_plan_define_priority,
             href_metrics_dashboard,href_add_remove_test_cases"),$_smarty_tpl);?>



<?php $_smarty_tpl->tpl_vars['menuLayout'] = new Smarty_variable($_smarty_tpl->tpl_vars['tlCfg']->value->gui->layoutMainPageRight, null, 0);?>
<?php $_smarty_tpl->tpl_vars['display_right_block_1'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['display_right_block_2'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['display_right_block_3'] = new Smarty_variable(false, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_planning']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['mgt_testplan_create']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['testplan_user_role_assignment']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['testplan_create_build']=="yes"){?>
   <?php $_smarty_tpl->tpl_vars['display_right_block_1'] = new Smarty_variable(true, null, 0);?>

    <script  type="text/javascript">
    function display_right_block_1()
    {
      var rp1 = new Ext.Panel({ title:'<?php echo $_smarty_tpl->tpl_vars['labels']->value['title_test_plan_mgmt'];?>
',
                                collapsible:false, collapsed: false, draggable: false,
                                contentEl: 'test_plan_mgmt_topics', baseCls: 'x-tl-panel',
                                bodyStyle: "background:#c8dce8;padding:3px;", width:'100%',
                                renderTo: 'menu_right_block_<?php echo $_smarty_tpl->tpl_vars['menuLayout']->value['testPlan'];?>
'
                                });
    }
    </script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->countPlans>0&&($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_execute']=="yes"||$_smarty_tpl->tpl_vars['gui']->value->grants['testplan_metrics']=="yes")){?>
   <?php $_smarty_tpl->tpl_vars['display_right_block_2'] = new Smarty_variable(true, null, 0);?>

    <script  type="text/javascript">
    function display_right_block_2()
    {
      var rp2 = new Ext.Panel({ title: '<?php echo $_smarty_tpl->tpl_vars['labels']->value['title_test_execution'];?>
',
                                collapsible: false, collapsed: false, draggable: false,
                                contentEl: 'test_execution_topics', baseCls: 'x-tl-panel',
                                bodyStyle: "background:#c8dce8;padding:3px;", width: '100%',
                                renderTo: 'menu_right_block_<?php echo $_smarty_tpl->tpl_vars['menuLayout']->value['testExecution'];?>
'                       
                              });
     }
    </script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->countPlans>0&&$_smarty_tpl->tpl_vars['gui']->value->grants['testplan_planning']=="yes"){?>
   <?php $_smarty_tpl->tpl_vars['display_right_block_3'] = new Smarty_variable(true, null, 0);?>

    <script  type="text/javascript">
    function display_right_block_3()
    {
      var rp3 = new Ext.Panel({ title: '<?php echo $_smarty_tpl->tpl_vars['labels']->value['title_test_case_suite'];?>
',
                                collapsible:false, collapsed: false, draggable: false,
                                contentEl: 'testplan_contents_topics', baseCls: 'x-tl-panel',
                                bodyStyle: "background:#c8dce8;padding:3px;", width: '100%',
                                renderTo: 'menu_right_block_<?php echo $_smarty_tpl->tpl_vars['menuLayout']->value['testPlanContents'];?>
'
                              });
     }
    </script>

<?php }?>


<div class="vertical_menu" style="float: right; margin:10px 10px 10px 10px">

	<?php if ($_smarty_tpl->tpl_vars['gui']->value->num_active_tplans>0){?>
	  <div class="">
     <?php echo lang_get_smarty(array('s'=>'help','var'=>'common_prefix'),$_smarty_tpl);?>

     <?php echo lang_get_smarty(array('s'=>'test_plan','var'=>"xx_alt"),$_smarty_tpl);?>

     <?php $_smarty_tpl->tpl_vars['text_hint'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['common_prefix']->value).": ".((string)$_smarty_tpl->tpl_vars['xx_alt']->value), null, 0);?>
     <?php echo $_smarty_tpl->getSubTemplate ("inc_help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('helptopic'=>"hlp_testPlan",'show_help_icon'=>true,'inc_help_alt'=>((string)$_smarty_tpl->tpl_vars['text_hint']->value),'inc_help_title'=>((string)$_smarty_tpl->tpl_vars['text_hint']->value),'inc_help_style'=>"float: right;vertical-align: top;"), 0);?>


 	   <form name="testplanForm" action="lib/general/mainPage.php">
       <?php if ($_smarty_tpl->tpl_vars['gui']->value->countPlans>0){?>
		     <?php echo $_smarty_tpl->tpl_vars['labels']->value['current_test_plan'];?>
:<br/>
		     <select class="chosen-select" name="testplan" onchange="this.form.submit();">
		     	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['name'] = 'tPlan';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gui']->value->arrPlans) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tPlan']['total']);
?>
		     		<option value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->arrPlans[$_smarty_tpl->getVariable('smarty')->value['section']['tPlan']['index']]['id'];?>
"
		     		        <?php if ($_smarty_tpl->tpl_vars['gui']->value->arrPlans[$_smarty_tpl->getVariable('smarty')->value['section']['tPlan']['index']]['selected']){?> selected="selected" <?php }?>
		     		        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gui']->value->arrPlans[$_smarty_tpl->getVariable('smarty')->value['section']['tPlan']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
">
		     		        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gui']->value->arrPlans[$_smarty_tpl->getVariable('smarty')->value['section']['tPlan']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>

		     		</option>
		     	<?php endfor; endif; ?>
		     </select>
		     
		     <?php if ($_smarty_tpl->tpl_vars['gui']->value->countPlans==1){?>
		     	<input type="button" onclick="this.form.submit();" value="<?php echo $_smarty_tpl->tpl_vars['labels']->value['ok'];?>
"/>
		     <?php }?>
		     
		     <?php if ($_smarty_tpl->tpl_vars['gui']->value->testplanRole!=null){?>
		     	<br /><?php echo $_smarty_tpl->tpl_vars['labels']->value['testplan_role'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gui']->value->testplanRole, ENT_QUOTES, 'UTF-8', true);?>

		     <?php }?>
	     <?php }else{ ?>
         <?php if ($_smarty_tpl->tpl_vars['gui']->value->num_active_tplans>0){?><?php echo $_smarty_tpl->tpl_vars['labels']->value['msg_no_rights_for_tp'];?>
<?php }?>
		   <?php }?>
	   </form>
	  </div>
  <?php }?>
	<br />

  <div id='menu_right_block_1'></div><br />
  <div id='menu_right_block_2'></div><br />
  <div id="menu_right_block_3"></div><br />
  
  
	<?php if ($_smarty_tpl->tpl_vars['display_right_block_1']->value){?>
    <div id='test_plan_mgmt_topics'>
    
      <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['mgt_testplan_create']=="yes"){?>
       		<a href="lib/plan/planView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_plan_management'];?>
</a>
	    <?php }?>
	    
	    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_create_build']=="yes"&&$_smarty_tpl->tpl_vars['gui']->value->countPlans>0){?>
	    	<br />
       	<a href="lib/plan/buildView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_build_new'];?>
</a>
      <?php }?>
	    
      <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_milestone_overview']=="yes"&&$_smarty_tpl->tpl_vars['gui']->value->countPlans>0){?>
         <br />
         <a href="lib/plan/planMilestonesView.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_plan_mstones'];?>
</a>
      <?php }?>
    </div>
  <?php }?>
  

	
	<?php if ($_smarty_tpl->tpl_vars['display_right_block_2']->value){?>
    <div id='test_execution_topics'>
		<?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_execute']=="yes"){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=executeTest"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_execute_test'];?>
</a>
      <br /> 
		
      <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['exec_testcases_assigned_to_me']=="yes"){?>
			 <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->url['testcase_assignments'];?>
"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_my_testcase_assignments'];?>
</a>
			 <br />
      <?php }?> 
		<?php }?> 
      
		<?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_metrics']=="yes"){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=showMetrics"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_rep_and_metrics'];?>
</a>
			<br />
  			<a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->url['metrics_dashboard'];?>
"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_metrics_dashboard'];?>
</a>
		<?php }?> 
    </div>
	<?php }?>
  

  
	<?php if ($_smarty_tpl->tpl_vars['display_right_block_3']->value){?>
    <div id='testplan_contents_topics'>
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_add_remove_platforms']=="yes"){?>
  	  <a href="lib/platforms/platformsAssign.php?tplan_id=<?php echo $_smarty_tpl->tpl_vars['gui']->value->testplanID;?>
"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_platform_assign'];?>
</a>
  		<br />
    <?php }?> 
		
	  <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=planAddTC"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_add_remove_test_cases'];?>
</a>
	  <br />

    <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=tc_exec_assignment"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_tc_exec_assignment'];?>
</a>
    <br />
		
    <?php if ($_smarty_tpl->tpl_vars['session']->value['testprojectOptions']->testPriorityEnabled&&$_smarty_tpl->tpl_vars['gui']->value->grants['testplan_set_urgent_testcases']=="yes"){?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=test_urgency"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_plan_assign_urgency'];?>
</a>
      <br />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_update_linked_testcase_versions']=="yes"){?>
	   	<a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=planUpdateTC"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_update_tplan'];?>
</a>
	    <br />
    <?php }?> 

    <?php if ($_smarty_tpl->tpl_vars['gui']->value->grants['testplan_show_testcases_newest_versions']=="yes"){?>
	   	<a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->launcher;?>
?feature=newest_tcversions"><?php echo $_smarty_tpl->tpl_vars['labels']->value['href_newest_tcversions'];?>
</a>
	    <br />
    <?php }?> 

    </div>
  <?php }?>
  

</div>
<script>
jQuery( document ).ready(function() {
jQuery(".chosen-select").chosen({ width: "85%" });
});
</script><?php }} ?>