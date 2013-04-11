<?php /* Smarty version Smarty-3.0.7, created on 2013-04-03 02:29:04
         compiled from "findInclude:common/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19225515bcc30ddc477-89713093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84aa7bebb379a8b294a029ad3ca0fe7f9594aef1' => 
    array (
      0 => 'findInclude:common/templates/header.tpl',
      1 => 1364970528,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '19225515bcc30ddc477-89713093',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\xampp\htdocs\Kurogo\lib\smarty\plugins\modifier.escape.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\xampp\htdocs\Kurogo\lib\smarty\plugins\modifier.capitalize.php';
?><?php if (!$_smarty_tpl->getVariable('webBridgeAjaxContentLoad')->value&&!$_smarty_tpl->getVariable('ajaxContentLoad')->value){?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="application/xhtml+xml" charset="<?php echo $_smarty_tpl->getVariable('charset')->value;?>
" />
  <?php if ($_smarty_tpl->getVariable('refreshPage')->value){?>
    <meta http-equiv="refresh" content="<?php echo $_smarty_tpl->getVariable('refreshPage')->value;?>
" />
  <?php }?>
  <title><?php if (!$_smarty_tpl->getVariable('isModuleHome')->value){?><?php echo $_smarty_tpl->getVariable('moduleName')->value;?>
: <?php }?><?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('pageTitle')->value),'htmlall');?>
</title>
  <link rel="shortcut icon" href="/favicon.ico" />
<?php }?>
  
  <?php ob_start(); ?>
    
      <link href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('minify')->value['css']);?>
" rel="stylesheet" media="all" type="text/css"/>
    
    
    
      <?php  $_smarty_tpl->tpl_vars['cssURL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cssURLs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cssURL']->key => $_smarty_tpl->tpl_vars['cssURL']->value){
?>
        <link href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cssURL']->value);?>
" rel="stylesheet" media="all" type="text/css"/>
      <?php }} ?>
    
    
    
      <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inlineCSSBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
?>
        <style type="text/css" media="screen">
          <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

        </style>
      <?php }} ?>
    
  <?php  $_smarty_tpl->assign("headerCSS", ob_get_contents()); Smarty::$_smarty_vars['capture']["headerCSS"]=ob_get_clean();?>
  
  <?php ob_start(); ?><div class="loading"><div><img src="/common/images/loading.gif" width="27" height="21" alt="Loading" align="absmiddle" /><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("AJAX_CONTENT_LOADING");?>
</div></div><?php  $_smarty_tpl->assign("ajaxContentLoadingHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["ajaxContentLoadingHTML"]=ob_get_clean();?>
  
  <?php ob_start(); ?><div class="nonfocal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("AJAX_CONTENT_LOAD_FAILED");?>
</div><?php  $_smarty_tpl->assign("ajaxContentErrorHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["ajaxContentErrorHTML"]=ob_get_clean();?>
  
  <?php ob_start(); ?>
    
      <script type="text/javascript">
        var URL_BASE='<?php echo @URL_BASE;?>
';
        var API_URL_PREFIX='<?php echo @API_URL_PREFIX;?>
';
      </script>
    
    
    
      <script type="text/javascript">
        var AJAX_CONTENT_LOADING_HTML = '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('ajaxContentLoadingHTML')->value,"quotes");?>
';
        var AJAX_CONTENT_ERROR_HTML = '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('ajaxContentErrorHTML')->value,"quotes");?>
';
      </script>
    

    
      <?php if (strlen($_smarty_tpl->getVariable('GOOGLE_ANALYTICS_ID')->value)){?>
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', '<?php echo $_smarty_tpl->getVariable('GOOGLE_ANALYTICS_ID')->value;?>
']);
          <?php if ($_smarty_tpl->getVariable('GOOGLE_ANALYTICS_DOMAIN')->value){?>
          _gaq.push(['_setDomainName', '<?php echo $_smarty_tpl->getVariable('GOOGLE_ANALYTICS_DOMAIN')->value;?>
']);
          <?php }?>
          _gaq.push(['_trackPageview']);
        </script>
      <?php }?>
    
    
    
      <?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('javascriptURLs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value){
?>
        <script src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['url']->value);?>
" type="text/javascript"></script>
      <?php }} ?>
    
    
    
      <script src="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('minify')->value['js']);?>
" type="text/javascript"></script>
    
    
    
      <?php  $_smarty_tpl->tpl_vars['inlineJavascriptBlock'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inlineJavascriptBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['inlineJavascriptBlock']->key => $_smarty_tpl->tpl_vars['inlineJavascriptBlock']->value){
?>
        <script type="text/javascript"><?php echo $_smarty_tpl->tpl_vars['inlineJavascriptBlock']->value;?>
</script>
      <?php }} ?>
    

    
      <script type="text/javascript">
        setupOrientationChangeHandlers();
        <?php if (count($_smarty_tpl->getVariable('onOrientationChangeBlocks')->value)){?>
          addOnOrientationChangeCallback(function () {
            <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('onOrientationChangeBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
              <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

            <?php }} ?>
          });
        <?php }?>
      </script>
    
    
    
      <?php if (count($_smarty_tpl->getVariable('onLoadBlocks')->value)){?>
        <script type="text/javascript">
          function onLoad() {
            <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('onLoadBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
              <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

            <?php }} ?>
          }
        </script>
      <?php }?>
    
  <?php  $_smarty_tpl->assign("headerJavascript", ob_get_contents()); Smarty::$_smarty_vars['capture']["headerJavascript"]=ob_get_clean();?>
  
<?php if (!$_smarty_tpl->getVariable('webBridgeAjaxContentLoad')->value&&!$_smarty_tpl->getVariable('ajaxContentLoad')->value){?>
  
    <?php echo $_smarty_tpl->getVariable('headerCSS')->value;?>

  

  
    <?php echo $_smarty_tpl->getVariable('headerJavascript')->value;?>

  
  
  <?php if (!$_smarty_tpl->getVariable('autoPhoneNumberDetection')->value){?>
  <meta name="format-detection" content="telephone=no">
  <?php }?>
  <meta name="HandheldFriendly" content="true" />
  
    <meta name="viewport" id="viewport" 
      content="width=device-width, <?php if ((($tmp = @$_smarty_tpl->getVariable('scalable')->value)===null||$tmp==='' ? true : $tmp)){?>user-scalable=yes<?php }else{ ?>user-scalable=no, initial-scale=1.0, maximum-scale=1.0<?php }?>" />
  
  
  <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['nosecure'][0][0]->nosecure(@FULL_URL_BASE);?>
common/images/icon.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['nosecure'][0][0]->nosecure(@FULL_URL_BASE);?>
common/images/icon.png" />
  

  

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA9-wUBHRU_8htCoV4voll-3axzKtTiDr4&sensor=false&v=3&libraries=geometry">
    </script>

    <script>
    
    

    //google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  

</head>

<?php ob_start(); ?>
  
    <?php if (!$_smarty_tpl->getVariable('isModuleHome')->value){?>
      <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breadcrumbs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['breadcrumb']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['breadcrumb']->iteration=0;
 $_smarty_tpl->tpl_vars['breadcrumb']->index=-1;
if ($_smarty_tpl->tpl_vars['breadcrumb']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
 $_smarty_tpl->tpl_vars['breadcrumb']->iteration++;
 $_smarty_tpl->tpl_vars['breadcrumb']->index++;
 $_smarty_tpl->tpl_vars['breadcrumb']->first = $_smarty_tpl->tpl_vars['breadcrumb']->index === 0;
 $_smarty_tpl->tpl_vars['breadcrumb']->last = $_smarty_tpl->tpl_vars['breadcrumb']->iteration === $_smarty_tpl->tpl_vars['breadcrumb']->total;
?>
        <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->first){?>
          <?php $_smarty_tpl->tpl_vars['crumbClass'] = new Smarty_variable('module', null, null);?>
        <?php }elseif(count($_smarty_tpl->getVariable('breadcrumbs')->value)==1){?>
          <?php $_smarty_tpl->tpl_vars['crumbClass'] = new Smarty_variable('crumb1', null, null);?>
        <?php }elseif(count($_smarty_tpl->getVariable('breadcrumbs')->value)==2){?>
          <?php if (!$_smarty_tpl->tpl_vars['breadcrumb']->last){?>
            <?php $_smarty_tpl->tpl_vars['crumbClass'] = new Smarty_variable('crumb2a', null, null);?>
          <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['crumbClass'] = new Smarty_variable('crumb2b', null, null);?>
          <?php }?>
        <?php }elseif(count($_smarty_tpl->getVariable('breadcrumbs')->value)>2){?>
          <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->last){?>
            <?php $_smarty_tpl->tpl_vars['crumbClass'] = new Smarty_variable('crumb3c', null, null);?>
          <?php }elseif($_smarty_tpl->tpl_vars['breadcrumb']->index==($_smarty_tpl->tpl_vars['breadcrumb']->total-2)){?>
            <?php $_smarty_tpl->tpl_vars['crumbClass'] = new Smarty_variable('crumb3b', null, null);?>
          <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['crumbClass'] = new Smarty_variable('crumb3a', null, null);?>
          <?php }?>
          
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('configModule')->value!=$_smarty_tpl->getVariable('homeModuleID')->value||!$_smarty_tpl->tpl_vars['breadcrumb']->first){?>
          <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['sanitize_url'][0][0]->smartyModifierSanitizeURL($_smarty_tpl->tpl_vars['breadcrumb']->value['url']);?>
" <?php if (isset($_smarty_tpl->getVariable('crumbClass',null,true,false)->value)){?>class="<?php echo $_smarty_tpl->getVariable('crumbClass')->value;?>
<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->first){?>
              <img src="/common/images/title-<?php echo (($tmp = @$_smarty_tpl->getVariable('navImageID')->value)===null||$tmp==='' ? $_smarty_tpl->getVariable('configModule')->value : $tmp);?>
.png" width="<?php echo (($tmp = @$_smarty_tpl->getVariable('module_nav_image_width')->value)===null||$tmp==='' ? 28 : $tmp);?>
" height="<?php echo (($tmp = @$_smarty_tpl->getVariable('module_nav_image_height')->value)===null||$tmp==='' ? 28 : $tmp);?>
" alt="" />
            <?php }else{ ?>
              <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['sanitize_html'][0][0]->smartyModifierSanitizeHTML($_smarty_tpl->tpl_vars['breadcrumb']->value['title'],'inline');?>
</span>
            <?php }?>
          </a>
        <?php }?>
      <?php }} ?>
    <?php }?>
  
<?php  $_smarty_tpl->assign("breadcrumbHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["breadcrumbHTML"]=ob_get_clean();?>

<body class="<?php echo smarty_modifier_capitalize($_smarty_tpl->getVariable('configModule')->value);?>
Module" 
  
    <?php if (count($_smarty_tpl->getVariable('onLoadBlocks')->value)||count($_smarty_tpl->getVariable('onOrientationChangeBlocks')->value)){?>
      onload="<?php if (count($_smarty_tpl->getVariable('onLoadBlocks')->value)){?>onLoad();<?php }?>onOrientationChange();"
    <?php }?>
  >
  <div id="nonfooternav">
    <a name="top"> </a>
    <?php if (isset($_smarty_tpl->getVariable('customHeader',null,true,false)->value)){?>
      <?php echo (($tmp = @$_smarty_tpl->getVariable('customHeader')->value)===null||$tmp==='' ? '' : $tmp);?>

    <?php }else{ ?>
      
        <div id="navbar"<?php if ($_smarty_tpl->getVariable('hasHelp')->value){?> class="helpon"<?php }?>>
          <div class="breadcrumbs<?php if ($_smarty_tpl->getVariable('isModuleHome')->value){?> homepage<?php }?>">
            <a href="<?php echo $_smarty_tpl->getVariable('homeLink')->value;?>
" class="homelink" title="<?php echo $_smarty_tpl->getVariable('homeLinkText')->value;?>
">
              <img src="/common/images/homelink.png" width="<?php echo (($tmp = @$_smarty_tpl->getVariable('homelink_image_width')->value)===null||$tmp==='' ? 57 : $tmp);?>
" height="<?php echo (($tmp = @$_smarty_tpl->getVariable('homelink_image_height')->value)===null||$tmp==='' ? 45 : $tmp);?>
" alt="<?php echo $_smarty_tpl->getVariable('homeLinkText')->value;?>
" />
            </a>
            
            <?php echo $_smarty_tpl->getVariable('breadcrumbHTML')->value;?>

            <span class="pagetitle">
              <?php if ($_smarty_tpl->getVariable('isModuleHome')->value){?>
                <img src="/common/images/title-<?php echo (($tmp = @$_smarty_tpl->getVariable('navImageID')->value)===null||$tmp==='' ? $_smarty_tpl->getVariable('configModule')->value : $tmp);?>
.png" width="<?php echo (($tmp = @$_smarty_tpl->getVariable('module_nav_image_width')->value)===null||$tmp==='' ? 28 : $tmp);?>
" height="<?php echo (($tmp = @$_smarty_tpl->getVariable('module_nav_image_height')->value)===null||$tmp==='' ? 28 : $tmp);?>
" alt="" class="moduleicon" />
              <?php }?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['sanitize_html'][0][0]->smartyModifierSanitizeHTML($_smarty_tpl->getVariable('pageTitle')->value,'inline');?>

            </span>
          </div>
          <?php if ($_smarty_tpl->getVariable('hasHelp')->value){?>
            <div class="help">
              <a href="<?php echo $_smarty_tpl->getVariable('helpLink')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('helpLinkText')->value;?>
"><img src="/common/images/help.png" width="<?php echo (($tmp = @$_smarty_tpl->getVariable('help_image_width')->value)===null||$tmp==='' ? 46 : $tmp);?>
" height="<?php echo (($tmp = @$_smarty_tpl->getVariable('help_image_height')->value)===null||$tmp==='' ? 45 : $tmp);?>
" alt="<?php echo $_smarty_tpl->getVariable('helpLinkText')->value;?>
" /></a>
            </div>
          <?php }?>
        </div>
      
    <?php }?>
    
      <div id="container">
    
<?php }else{ ?>
  
    <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inlineCSSBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
?>
      <style type="text/css" media="screen">
        <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

      </style>
    <?php }} ?>

    <script type="text/javascript">
      <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inlineJavascriptBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
        <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

      <?php }} ?>
    </script>
  
<?php }?>
