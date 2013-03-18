<?php /* Smarty version Smarty-3.0.7, created on 2013-03-15 22:18:17
         compiled from "C:\\xampp\\htdocs\\Kurogo\\app\\modules\\map\\templates\\fullscreen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145325143d6694d3e89-08822036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f848b06d50277e026532ff6ae2e2337cf3321878' => 
    array (
      0 => 'C:\\\\xampp\\\\htdocs\\\\Kurogo\\\\app\\\\modules\\\\map\\\\templates\\\\fullscreen.tpl',
      1 => 1345143778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145325143d6694d3e89-08822036',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('scalable',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/searchbar.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div id="spacer"></div>
<div id="mapimage"></div>


<?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/fullscreenfooter.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('hideFooterLinks',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
