<?php /* Smarty version Smarty-3.0.7, created on 2013-03-14 21:51:06
         compiled from "C:\\xampp\\htdocs\\Kurogo\\app\\modules\\home\\templates\\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:352951427e8a0b01f2-58338291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14e051ef59f8b653b9751dabfda1ac1ca7e39a2a' => 
    array (
      0 => 'C:\\\\xampp\\\\htdocs\\\\Kurogo\\\\app\\\\modules\\\\home\\\\templates\\\\index.tpl',
      1 => 1345143778,
      2 => 'file',
    ),
    '' => 
    array (
      0 => 'findInclude:common/templates/springboard.tpl',
      1 => 1345143776,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '352951427e8a0b01f2-58338291',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\xampp\htdocs\Kurogo\lib\smarty\plugins\modifier.escape.php';
?><?php ob_start(); ?>
  
  <?php if ($_smarty_tpl->getVariable('bannerNotice')->value){?>
  <div class="banner-notice">
    <?php if ($_smarty_tpl->getVariable('bannerURL')->value){?>
      <a href="<?php echo $_smarty_tpl->getVariable('bannerURL')->value;?>
" class="banner-message">
    <?php }else{ ?>
      <span class="banner-message">
    <?php }?>
      <?php echo $_smarty_tpl->getVariable('bannerNotice')->value['title'];?>

    <?php if ($_smarty_tpl->getVariable('bannerURL')->value){?>
      </a>
    <?php }else{ ?>
      </span>
    <?php }?>
    </div>
  <?php }?>
  <h1 id="homelogo"<?php if (isset($_smarty_tpl->getVariable('topItem',null,true,false)->value)){?> class="roomfornew"<?php }?>>
    <img src="/modules/<?php echo $_smarty_tpl->getVariable('configModule')->value;?>
/images/logo-home<?php echo $_smarty_tpl->getVariable('imageExt')->value;?>
" width="<?php echo (($tmp = @$_smarty_tpl->getVariable('banner_width')->value)===null||$tmp==='' ? 265 : $tmp);?>
" height="<?php echo (($tmp = @$_smarty_tpl->getVariable('banner_height')->value)===null||$tmp==='' ? 45 : $tmp);?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('strings')->value['SITE_NAME']);?>
" />
  </h1>
  
<?php  $_smarty_tpl->assign("banner", ob_get_contents()); Smarty::$_smarty_vars['capture']["banner"]=ob_get_clean();?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('customHeader',$_smarty_tpl->getVariable('banner')->value);$_template->assign('scalable',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('showFederatedSearch')->value){?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/search.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->properties['nocache_hash']  = '352951427e8a0b01f2-58338291';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.7, created on 2013-03-14 21:51:06
         compiled from "findInclude:common/templates/search.tpl" */ ?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\xampp\htdocs\Kurogo\lib\smarty\plugins\modifier.escape.php';
?><?php ob_start(); ?>
  <?php if ((!isset($_smarty_tpl->getVariable('searchPage',null,true,false)->value)&&($_smarty_tpl->getVariable('page')->value=='search'))||($_smarty_tpl->getVariable('page')->value==$_smarty_tpl->getVariable('searchPage')->value)){?>
    <?php $_smarty_tpl->tpl_vars['hiddenArgs'] = new Smarty_variable($_smarty_tpl->getVariable('breadcrumbSamePageArgs')->value, null, null);?>
  <?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['hiddenArgs'] = new Smarty_variable($_smarty_tpl->getVariable('breadcrumbArgs')->value, null, null);?>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->getVariable('extraArgs',null,true,false)->value)){?>
    <?php $_smarty_tpl->tpl_vars['hiddenArgs'] = new Smarty_variable(array_merge($_smarty_tpl->getVariable('extraArgs')->value,$_smarty_tpl->getVariable('hiddenArgs')->value), null, null);?>
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hiddenArgs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['arg']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" />
  <?php }} ?>
<?php  $_smarty_tpl->assign("hiddenArgHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["hiddenArgHTML"]=ob_get_clean();?>

<?php ob_start(); ?>
  <?php if ($_smarty_tpl->getVariable('inlineSearchError')->value){?>
    <p><?php echo $_smarty_tpl->getVariable('inlineSearchError')->value;?>
</p>
  <?php }elseif(isset($_smarty_tpl->getVariable('resultCount',null,true,false)->value)){?>
    <?php if ($_smarty_tpl->getVariable('resultCount')->value==0){?>
      <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NO_MATCHES_FOUND");?>
</p>
    <?php }elseif($_smarty_tpl->getVariable('resultCount')->value==1){?>
      <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ONE_MATCH_FOUND");?>
</p>
    <?php }else{ ?>
      <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NUM_MATCHES_FOUND",$_smarty_tpl->getVariable('resultCount')->value);?>
</p>
    <?php }?>
  <?php }?>
<?php  $_smarty_tpl->assign("inlineErrorHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["inlineErrorHTML"]=ob_get_clean();?>

<?php ob_start(); ?>
  <?php if (isset($_smarty_tpl->getVariable('tip',null,true,false)->value)){?>
    <p class="legend nonfocal">
      <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("SEARCH_TIP_TITLE");?>
</strong> <?php echo $_smarty_tpl->getVariable('tip')->value;?>

    </p>
  <?php }?>
<?php  $_smarty_tpl->assign("tipHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["tipHTML"]=ob_get_clean();?>

<?php $_smarty_tpl->tpl_vars['searchAction'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('searchPage')->value)===null||$tmp==='' ? "/".($_smarty_tpl->getVariable('configModule')->value)."/search" : $tmp), null, null);?>


  <?php if (!$_smarty_tpl->getVariable('insideForm')->value){?>
    <div class="nonfocal" id="searchformcontainer">
      <form method="get" action="<?php echo $_smarty_tpl->getVariable('searchAction')->value;?>
">
  <?php }?>
  
        <fieldset class="inputcombo<?php if ((($tmp = @$_smarty_tpl->getVariable('emphasized')->value)===null||$tmp==='' ? $_smarty_tpl->getVariable('isModuleHome')->value : $tmp)){?> emphasized<?php }?>">
          <div class="searchwrapper"><input class="forminput" type="text" id="<?php echo (($tmp = @$_smarty_tpl->getVariable('inputName')->value)===null||$tmp==='' ? 'filter' : $tmp);?>
" name="<?php echo (($tmp = @$_smarty_tpl->getVariable('inputName')->value)===null||$tmp==='' ? 'filter' : $tmp);?>
" placeholder="<?php echo (($tmp = @$_smarty_tpl->getVariable('placeholder')->value)===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('searchTerms')->value);?>
" onfocus="androidPlaceholderFix(this);" /></div>

          <input class="combobutton" id="sch_btn" src="/common/images/search-button.png" type="image" />
          <?php echo $_smarty_tpl->getVariable('hiddenArgHTML')->value;?>

        </fieldset>
        <?php if (isset($_smarty_tpl->getVariable('additionalInputs',null,true,false)->value)){?>
          <fieldset>
            <?php echo $_smarty_tpl->getVariable('additionalInputs')->value;?>

          </fieldset>
        <?php }?>
        <?php echo $_smarty_tpl->getVariable('tipHTML')->value;?>

        <?php echo $_smarty_tpl->getVariable('inlineErrorHTML')->value;?>

      
  <?php if (!$_smarty_tpl->getVariable('insideForm')->value){?>
      </form>
    </div>
  <?php }?>

<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "findInclude:common/templates/search.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>

<?php }?>

<?php if ($_smarty_tpl->getVariable('displayType')->value=='springboard'){?>
  
    <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/springboard.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('springboardItems',$_smarty_tpl->getVariable('modules')->value['primary']);$_template->assign('springboardID',"homegrid");$_template->properties['nocache_hash']  = '352951427e8a0b01f2-58338291';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.7, created on 2013-03-14 21:51:06
         compiled from "findInclude:common/templates/springboard.tpl" */ ?>
<div class="springboard"<?php if ($_smarty_tpl->getVariable('springboardID')->value){?> id="<?php echo $_smarty_tpl->getVariable('springboardID')->value;?>
"<?php }?>>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('springboardItems')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['separator']){?>
      
        <p class="separator">&nbsp;</p>
      
    <?php }else{ ?>
      <div <?php if ($_smarty_tpl->tpl_vars['item']->value['class']){?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['url']){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
        <?php }?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />
            <br/><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['subTitle'])){?>
              <br/><span class="fineprint"><?php echo $_smarty_tpl->tpl_vars['item']->value['subTitle'];?>
</span>
            <?php }?>
            
              <?php if (isset($_smarty_tpl->tpl_vars['item']->value['badge'])){?>
                <span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value['badge'];?>
</span>
              <?php }?>
            
            
              <?php if (isset($_smarty_tpl->tpl_vars['item']->value['secured'])){?>
          		<span class="secured"></span>
              <?php }?>
            
        <?php if ($_smarty_tpl->tpl_vars['item']->value['url']){?>
          </a>
        <?php }?>
      </div>
    <?php }?>
  <?php }} ?>
</div>
<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "findInclude:common/templates/springboard.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
    <?php if (count($_smarty_tpl->getVariable('modules')->value['secondary'])){?>
      <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/springboard.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('springboardItems',$_smarty_tpl->getVariable('modules')->value['secondary']);$_template->assign('springboardID',"homegridSecondary");$_template->properties['nocache_hash']  = '352951427e8a0b01f2-58338291';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.7, created on 2013-03-14 21:51:06
         compiled from "findInclude:common/templates/springboard.tpl" */ ?>
<div class="springboard"<?php if ($_smarty_tpl->getVariable('springboardID')->value){?> id="<?php echo $_smarty_tpl->getVariable('springboardID')->value;?>
"<?php }?>>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('springboardItems')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['separator']){?>
      
        <p class="separator">&nbsp;</p>
      
    <?php }else{ ?>
      <div <?php if ($_smarty_tpl->tpl_vars['item']->value['class']){?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['url']){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
        <?php }?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />
            <br/><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['subTitle'])){?>
              <br/><span class="fineprint"><?php echo $_smarty_tpl->tpl_vars['item']->value['subTitle'];?>
</span>
            <?php }?>
            
              <?php if (isset($_smarty_tpl->tpl_vars['item']->value['badge'])){?>
                <span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value['badge'];?>
</span>
              <?php }?>
            
            
              <?php if (isset($_smarty_tpl->tpl_vars['item']->value['secured'])){?>
          		<span class="secured"></span>
              <?php }?>
            
        <?php if ($_smarty_tpl->tpl_vars['item']->value['url']){?>
          </a>
        <?php }?>
      </div>
    <?php }?>
  <?php }} ?>
</div>
<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "findInclude:common/templates/springboard.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
    <?php }?>
  
  
<?php }elseif($_smarty_tpl->getVariable('displayType')->value=='list'){?>
  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('modules')->value['primary']); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  <?php if (count($_smarty_tpl->getVariable('modules')->value['secondary'])){?>
    <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('modules')->value['secondary']);$_template->assign('accessKeyLink',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  <?php }?>
<?php }?>





<?php if ($_smarty_tpl->getVariable('SHOW_DOWNLOAD_TEXT')->value){?>
<p id="download">
    <a href="/download/">
      <img src="/modules/<?php echo $_smarty_tpl->getVariable('configModule')->value;?>
/images/download<?php echo $_smarty_tpl->getVariable('imageExt')->value;?>
"
      alt="" align="absmiddle" />
      <?php echo $_smarty_tpl->getVariable('SHOW_DOWNLOAD_TEXT')->value;?>

    </a>
    <br />
</p>
<?php }?>  


<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
