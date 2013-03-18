<?php /* Smarty version Smarty-3.0.7, created on 2013-03-16 03:34:07
         compiled from "C:\\xampp\\htdocs\\Kurogo\\app\\modules\\map\\templates\\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159105144206f1d0be9-17093847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff6fb4b36a59e66159e6cc6759ff820d6f7331f' => 
    array (
      0 => 'C:\\\\xampp\\\\htdocs\\\\Kurogo\\\\app\\\\modules\\\\map\\\\templates\\\\category.tpl',
      1 => 1345143778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159105144206f1d0be9-17093847',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="nonfocal">
  
  <?php if ($_smarty_tpl->getVariable('mapURL')->value){?>
  <div class="actionbuttons viewall">
    <div class="actionbutton"><a href="<?php echo $_smarty_tpl->getVariable('mapURL')->value;?>
" ontouchstart="this.className='pressedaction'" ontouchend="this.className=''"><img src="/modules/map/images/map-button-placemark.png" width="20" height="20" /><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("VIEW_ALL_ON_MAP");?>
</a></div>
  </div>
  <?php }?>
  
  <h2><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h2>
</div>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/results.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('results',$_smarty_tpl->getVariable('navItems')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (count($_smarty_tpl->getVariable('categories')->value)>1){?>
<div class="nonfocal">
  <form action="/<?php echo $_smarty_tpl->getVariable('configModule')->value;?>
/category" method="get">
    <select name="category" onchange="this.parentNode.submit();">
        <option value="" selected="selected">Browse map by:</option>
      <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</option>
      <?php }} ?>
    </select>
  </form>
</div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('clearLink')->value){?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('clearLink')->value);$_template->assign('secondary',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
