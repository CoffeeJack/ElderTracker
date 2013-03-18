<?php /* Smarty version Smarty-3.0.7, created on 2013-03-14 23:57:20
         compiled from "C:\\xampp\\htdocs\\Kurogo\\app\\modules\\customize\\templates\\index-compliant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2714151429c20daa340-75189696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f16cdbc1cf10649f80d7f5dcdf6f3cbe4d69ebe' => 
    array (
      0 => 'C:\\\\xampp\\\\htdocs\\\\Kurogo\\\\app\\\\modules\\\\customize\\\\templates\\\\index-compliant.tpl',
      1 => 1345143778,
      2 => 'file',
    ),
    'e1f2142ade8aefb2a32ef4a9d6cac9320d05ba75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kurogo\\app\\modules\\customize\\templates\\index.tpl',
      1 => 1345143778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2714151429c20daa340-75189696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>


  <?php $_smarty_tpl->tpl_vars['imageExt'] = new Smarty_variable('.jpg', null, null);?>



  <div class="nonfocal smallprint"> 
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("CUSTOMIZE_INSTRUCTIONS_COMPLIANT");?>

  </div> 
  
  <ul class="nav iconic" id="homepageList">
    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('modules')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
      <li id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['info']->value['disableable']){?>
          <input type="checkbox" onclick="toggle(this);"<?php if (!$_smarty_tpl->tpl_vars['info']->value['disabled']){?> checked="checked"<?php }?> />
        <?php }?>
        <span class="nolinkbuttons"> 
          <a href="#" onclick="moveUp(this); return false;" class="moveup"><img src="/modules/<?php echo $_smarty_tpl->getVariable('moduleID')->value;?>
/images/button-up.png" border="0" alt="Up"></a>
          <a href="#" onclick="moveDown(this); return false;" class="movedown"><img src="/modules/<?php echo $_smarty_tpl->getVariable('moduleID')->value;?>
/images/button-down.png" border="0" alt="Down"></a> 
        </span> 
        <span class="nolink">
          <img src="/modules/<?php echo $_smarty_tpl->getVariable('homeModuleID')->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.png" width="30" height="30" class="homeicon"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>

        </span>                   
      </li>
    <?php }} ?>
  </ul>
  <div class="formbuttons">
    <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/formButtonLink.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('buttonTitle',$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("RETURN_HOME"));$_template->assign('buttonURL',"../".($_smarty_tpl->getVariable('homeModuleID')->value)."/"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  </div>


<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
