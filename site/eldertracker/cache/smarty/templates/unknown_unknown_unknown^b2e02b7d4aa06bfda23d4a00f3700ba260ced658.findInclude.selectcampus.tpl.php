<?php /* Smarty version Smarty-3.0.7, created on 2013-03-14 21:48:24
         compiled from "findInclude:modules/map/templates/selectcampus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:788551427de882d4b2-16375238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2e02b7d4aa06bfda23d4a00f3700ba260ced658' => 
    array (
      0 => 'findInclude:modules/map/templates/selectcampus.tpl',
      1 => 1345143780,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '788551427de882d4b2-16375238',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="campus-select">
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="formlabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("SEARCH_IN_GROUP");?>
</td>
            <td class="inputfield">
                <select name="group">
                    <?php  $_smarty_tpl->tpl_vars['campus'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('campuses')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['campus']->key => $_smarty_tpl->tpl_vars['campus']->value){
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['campus']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['campus']->value['id']==$_smarty_tpl->getVariable('group')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['campus']->value['title'];?>
</option>
                    <?php }} ?>
                </select>
            </td>
    </tr>
    </table>
</div>
