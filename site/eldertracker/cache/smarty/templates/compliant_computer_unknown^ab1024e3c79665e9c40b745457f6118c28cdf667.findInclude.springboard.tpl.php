<?php /* Smarty version Smarty-3.0.7, created on 2013-03-15 00:10:57
         compiled from "findInclude:modules/admin/templates/springboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1065251429f517c0126-08234117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1024e3c79665e9c40b745457f6118c28cdf667' => 
    array (
      0 => 'findInclude:modules/admin/templates/springboard.tpl',
      1 => 1345143776,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '1065251429f517c0126-08234117',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\xampp\htdocs\Kurogo\lib\smarty\plugins\modifier.escape.php';
?><div class="springboard" <?php if ($_smarty_tpl->getVariable('springboardID')->value){?> id="<?php echo $_smarty_tpl->getVariable('springboardID')->value;?>
"<?php }?> section="<?php echo $_smarty_tpl->getVariable('section')->value;?>
">
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('springboardItems')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
  <div id="module_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['title']);?>
" />
    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['title']);?>
"<?php if ($_smarty_tpl->getVariable('section')->value){?> section="<?php echo $_smarty_tpl->getVariable('section')->value;?>
"<?php }?> />
  </div>
  <?php }} ?>
</div>
<div class="springboard_clear"></div>
