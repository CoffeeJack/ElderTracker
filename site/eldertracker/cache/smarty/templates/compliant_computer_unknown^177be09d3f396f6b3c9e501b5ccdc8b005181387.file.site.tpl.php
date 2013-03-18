<?php /* Smarty version Smarty-3.0.7, created on 2013-03-14 23:56:04
         compiled from "C:\\xampp\\htdocs\\Kurogo\\app\\modules\\admin\\templates\\site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:632051429bd4aa7227-72756620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '177be09d3f396f6b3c9e501b5ccdc8b005181387' => 
    array (
      0 => 'C:\\\\xampp\\\\htdocs\\\\Kurogo\\\\app\\\\modules\\\\admin\\\\templates\\\\site.tpl',
      1 => 1345143776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '632051429bd4aa7227-72756620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<form method="post" id="adminForm" enctype="multipart/form-data">
<input type="hidden" name="type" value="site" />
<input type="hidden" name="section" id="section" value="<?php echo $_smarty_tpl->getVariable('section')->value;?>
" />
<input type="hidden" name="subsection" id="subsection" value="<?php echo $_smarty_tpl->getVariable('subsection')->value;?>
 /">
<input name="submit" id="adminSubmit" type="submit" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("BUTTON_SAVE");?>
" />
<h1 id="sectionTitle">&nbsp;</h1>
<ul id="adminSections"></ul>
<p id="sectionDescription" class="preamble">&nbsp;</p>
<div id="adminFields" class="formfields">

</div>
</form>
<script type="text/javascript">
    var adminSection = '<?php echo $_smarty_tpl->getVariable('section')->value;?>
';
    var adminSubsection = '<?php echo $_smarty_tpl->getVariable('subsection')->value;?>
';
</script>
<?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
