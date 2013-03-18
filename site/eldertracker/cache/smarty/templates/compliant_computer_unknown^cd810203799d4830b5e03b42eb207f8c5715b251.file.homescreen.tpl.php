<?php /* Smarty version Smarty-3.0.7, created on 2013-03-15 00:10:57
         compiled from "C:\\xampp\\htdocs\\Kurogo\\app\\modules\\admin\\templates\\homescreen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767951429f51675ee8-27046895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd810203799d4830b5e03b42eb207f8c5715b251' => 
    array (
      0 => 'C:\\\\xampp\\\\htdocs\\\\Kurogo\\\\app\\\\modules\\\\admin\\\\templates\\\\homescreen.tpl',
      1 => 1345143776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767951429f51675ee8-27046895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<form method="post" id="adminForm" class="<?php echo $_smarty_tpl->getVariable('section')->value;?>
">
<input id="adminSubmit" type="submit" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("BUTTON_SAVE");?>
" /> 
<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ADMIN_MODULES_HOMESCREEN_TITLE");?>
</h1>
<p id="moduleDescription" class="preamble"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ADMIN_MODULES_HOMESCREEN_DESCRIPTION");?>
</p>

<div id="homescreen_layout">
<div class="section_wrapper">
<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ADMIN_MODULES_HOMESCREEN_PRIMARY_TITLE");?>
</h2>
<?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/springboard.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('springboardID',"primary_modules");$_template->assign('springboardItems',$_smarty_tpl->getVariable('modules')->value['primary']);$_template->assign('section',"primary_modules"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>

<div class="section_wrapper">
<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ADMIN_MODULES_HOMESCREEN_SECONDARY_TITLE");?>
</h2>
<?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/springboard.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('springboardID',"secondary_modules");$_template->assign('springboardItems',$_smarty_tpl->getVariable('modules')->value['secondary']);$_template->assign('section',"secondary_modules"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>

<div class="section_wrapper">
<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ADMIN_MODULES_HOMESCREEN_UNUSED_TITLE");?>
</h2>
<?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/springboard.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('springboardID',"unused_modules");$_template->assign('springboardItems',$_smarty_tpl->getVariable('modules')->value['unused']);$_template->assign('section',''); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
</div><!-- #homescreen layout -->
<div class="springboard_clear"></div>
</form>
<?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
