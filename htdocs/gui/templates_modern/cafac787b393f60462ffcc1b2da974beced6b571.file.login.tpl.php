<?php /* Smarty version Smarty-3.1.13, created on 2016-04-23 11:58:36
         compiled from "C:\Bitnami\testlink-1.9.14-2\apps\testlink\htdocs\gui\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32261571bc5dc2f5ae1-56925426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cafac787b393f60462ffcc1b2da974beced6b571' => 
    array (
      0 => 'C:\\Bitnami\\testlink-1.9.14-2\\apps\\testlink\\htdocs\\gui\\templates\\login.tpl',
      1 => 1430561137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32261571bc5dc2f5ae1-56925426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tlCfg' => 0,
    'labels' => 0,
    'gui' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571bc5dd71d4d2_90574797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc5dd71d4d2_90574797')) {function content_571bc5dd71d4d2_90574797($_smarty_tpl) {?>
<?php echo lang_get_smarty(array('var'=>'labels','s'=>'login_name,password,btn_login,new_user_q,login,demo_usage,
                         lost_password_q,demo_mode_suggested_user,demo_mode_suggested_password'),$_smarty_tpl);?>


<?php  $_config = new Smarty_Internal_Config("input_dimensions.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("login", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("inc_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"TestLink - Login",'openHead'=>'yes'), 0);?>


<script type="text/javascript">
window.onload=function()
{
  focusInputField('login');
}
</script>
</head>
<body class="landing">

<div class="login_form medium" id="login_div">
  <?php echo $_smarty_tpl->getSubTemplate ("inc_login_title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php if ($_smarty_tpl->tpl_vars['tlCfg']->value->demoMode){?><?php echo $_smarty_tpl->tpl_vars['labels']->value['demo_usage'];?>
<?php }?>
  <form method="post" name="login_form" action="login.php">
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->login_disabled==0){?>
      
      <div class="messages_rounded" style="width:100%;text-align:center;border-radius: 5px;"><?php echo $_smarty_tpl->tpl_vars['gui']->value->note;?>
</div>
      <input type="hidden" name="reqURI" value="<?php echo rawurlencode($_smarty_tpl->tpl_vars['gui']->value->reqURI);?>
"/>
      <input type="hidden" name="destination" value="<?php echo rawurlencode($_smarty_tpl->tpl_vars['gui']->value->destination);?>
"/>
      <div class="messages_rounded" style="width:100%;border-radius: 5px;">

      <p class="label"><?php echo $_smarty_tpl->tpl_vars['labels']->value['login'];?>
<br />
      <input type="text" name="tl_login" id="login" size="<?php echo $_smarty_tpl->getConfigVariable('LOGIN_SIZE');?>
" 
             style="height: 18px;" maxlength="<?php echo $_smarty_tpl->getConfigVariable('LOGIN_MAXLEN');?>
" 
             <?php if ($_smarty_tpl->tpl_vars['tlCfg']->value->demoMode){?> placeholder="<?php echo $_smarty_tpl->tpl_vars['labels']->value['demo_mode_suggested_user'];?>
" <?php }?> required />
    </p>
      <p class="label"><?php echo $_smarty_tpl->tpl_vars['labels']->value['password'];?>
<br />
      <input type="password" name="tl_password" style="height: 18px;"
             size="<?php echo $_smarty_tpl->getConfigVariable('PASSWD_SIZE');?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['gui']->value->pwdInputMaxLenght;?>
" 
             <?php if ($_smarty_tpl->tpl_vars['tlCfg']->value->demoMode){?> placeholder="<?php echo $_smarty_tpl->tpl_vars['labels']->value['demo_mode_suggested_password'];?>
" <?php }?>
             required />
    </p>

    <input type="submit" name="login_submit" class="big_button" value="<?php echo $_smarty_tpl->tpl_vars['labels']->value['btn_login'];?>
" />
    </div>
  <?php }?>
  </form>
  
  <p>
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->user_self_signup){?>
    <a href="firstLogin.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['new_user_q'];?>
</a><br />
  <?php }?>
  
      
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->external_password_mgmt==0&&$_smarty_tpl->tpl_vars['tlCfg']->value->demoMode==0){?>
    <a href="lostPassword.php"><?php echo $_smarty_tpl->tpl_vars['labels']->value['lost_password_q'];?>
</a>
  </p>
  <?php }?>
  
  <?php echo $_smarty_tpl->getSubTemplate ("inc_copyrightnotice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <?php if ($_smarty_tpl->tpl_vars['gui']->value->securityNotes){?>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_msg_from_array.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('array_of_msg'=>$_smarty_tpl->tpl_vars['gui']->value->securityNotes,'arg_css_class'=>"messages_rounded"), 0);?>

  <?php }?>
  
  <?php if ($_smarty_tpl->tpl_vars['tlCfg']->value->login_info!=''){?>
    <div><?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->login_info;?>
</div>
  <?php }?>

</div>
</body>
</html><?php }} ?>