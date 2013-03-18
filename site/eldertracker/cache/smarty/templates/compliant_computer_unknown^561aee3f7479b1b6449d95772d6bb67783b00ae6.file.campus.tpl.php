<?php /* Smarty version Smarty-3.0.7, created on 2013-03-16 03:34:00
         compiled from "C:\\xampp\\htdocs\\Kurogo\\app\\modules\\map\\templates\\campus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1578551442068f079b9-29474853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '561aee3f7479b1b6449d95772d6bb67783b00ae6' => 
    array (
      0 => 'C:\\\\xampp\\\\htdocs\\\\Kurogo\\\\app\\\\modules\\\\map\\\\templates\\\\campus.tpl',
      1 => 1345143778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1578551442068f079b9-29474853',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="nonfocal">
  <h2><?php echo $_smarty_tpl->getVariable('browseHint')->value;?>
</h2>
</div>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('navItems')->value);$_template->assign('navlistID',"categories"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('clearLink')->value){?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('clearLink')->value);$_template->assign('secondary',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
