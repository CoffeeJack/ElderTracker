<?php /* Smarty version Smarty-3.0.7, created on 2013-03-14 21:51:22
         compiled from "findInclude:modules/athletics/templates/stories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2342151427e9a1ddbd4-69326026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cffc1c720ace5c15fe8ceace20568747bc350276' => 
    array (
      0 => 'findInclude:modules/athletics/templates/stories.tpl',
      1 => 1345143776,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '2342151427e9a1ddbd4-69326026',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul class="results">
  <?php if ($_smarty_tpl->getVariable('previousURL')->value){?>
    <li class="pagerlink">
      <a href="<?php echo $_smarty_tpl->getVariable('previousURL')->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("PREVIOUS_STORY_TEXT",$_smarty_tpl->getVariable('maxPerPage')->value);?>
</a>
    </li>
  <?php }?>

  <?php $_smarty_tpl->tpl_vars['ellipsisCount'] = new Smarty_variable(0, null, null);?>
  <?php  $_smarty_tpl->tpl_vars['story'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('stories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['story']->key => $_smarty_tpl->tpl_vars['story']->value){
?>
    <li class="story<?php if (!$_smarty_tpl->getVariable('showImages')->value){?> noimage<?php }?>">
      <a href="<?php echo $_smarty_tpl->tpl_vars['story']->value['url'];?>
">
      <?php if ($_smarty_tpl->getVariable('showImages')->value){?>
        <?php if ($_smarty_tpl->tpl_vars['story']->value['img']){?>
          <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['story']->value['img'];?>
" />
        <?php }else{ ?>
          <img class="thumbnail" src="/modules/<?php echo $_smarty_tpl->getVariable('moduleID')->value;?>
/images/athletics-placeholder.jpg" />
        <?php }?>
        <?php }?>
        <div class="ellipsis" id="ellipsis_<?php echo $_smarty_tpl->getVariable('ellipsisCount')->value++;?>
">
          <div class="title"><?php echo $_smarty_tpl->tpl_vars['story']->value["title"];?>
</div>
          <?php if ($_smarty_tpl->getVariable('showAuthor')->value){?><div class="author"><?php echo $_smarty_tpl->tpl_vars['story']->value['author'];?>
</div><?php }?>
          <?php if ($_smarty_tpl->getVariable('showPubDate')->value){?><div class="pubdate"><?php echo $_smarty_tpl->tpl_vars['story']->value['pubDate'];?>
</div><?php }?>
          <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['story']->value['subtitle']);?>

        </div>
      </a>
    </li>
  <?php }} ?>

  <?php if ($_smarty_tpl->getVariable('nextURL')->value){?>
    <li class="pagerlink">
      <a href="<?php echo $_smarty_tpl->getVariable('nextURL')->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NEXT_STORY_TEXT",$_smarty_tpl->getVariable('maxPerPage')->value);?>
</a>
    </li>
  <?php }?>
</ul>
