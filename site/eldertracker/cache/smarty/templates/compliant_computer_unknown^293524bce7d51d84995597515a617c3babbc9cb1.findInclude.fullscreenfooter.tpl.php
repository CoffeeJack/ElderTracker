<?php /* Smarty version Smarty-3.0.7, created on 2013-03-15 22:18:17
         compiled from "findInclude:modules/map/templates/fullscreenfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181465143d6697a5ec6-66194115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '293524bce7d51d84995597515a617c3babbc9cb1' => 
    array (
      0 => 'findInclude:modules/map/templates/fullscreenfooter.tpl',
      1 => 1345143778,
      2 => 'findInclude',
    ),
    'a68090eca0f69c164496bc3a07900a66117887f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kurogo\\app\\common\\templates\\footer.tpl',
      1 => 1345143774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181465143d6697a5ec6-66194115',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$_smarty_tpl->getVariable('webBridgeAjaxContentLoad')->value&&!$_smarty_tpl->getVariable('ajaxContentLoad')->value){?>
  <?php if ($_smarty_tpl->getVariable('moduleDebug')->value&&count($_smarty_tpl->getVariable('moduleDebugStrings')->value)){?>
    <p class="legend nonfocal">
      <?php  $_smarty_tpl->tpl_vars['string'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('moduleDebugStrings')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['string']->key => $_smarty_tpl->tpl_vars['string']->value){
?>
        <br/><?php echo $_smarty_tpl->tpl_vars['string']->value;?>

      <?php }} ?>
    </p>  
  <?php }?>
  
  <?php ob_start(); ?>
    <?php if ($_smarty_tpl->getVariable('strings')->value['COPYRIGHT_LINK']){?>
      <a href="<?php echo $_smarty_tpl->getVariable('strings')->value['COPYRIGHT_LINK'];?>
" class="copyright">
    <?php }?>
        <?php echo $_smarty_tpl->getVariable('strings')->value['COPYRIGHT_NOTICE'];?>

    <?php if ($_smarty_tpl->getVariable('strings')->value['COPYRIGHT_LINK']){?>
      </a>
    <?php }?>
   <br />
   <?php echo $_smarty_tpl->getVariable('footerKurogo')->value;?>

  <?php  $_smarty_tpl->assign("footerHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["footerHTML"]=ob_get_clean();?>

  
  
    <?php if (!$_smarty_tpl->getVariable('hideFooterLinks')->value){?>
      <div id="footerlinks">
        <a href="#top"><?php echo $_smarty_tpl->getVariable('footerBackToTop')->value;?>
</a> | <a href="<?php echo $_smarty_tpl->getVariable('homeLink')->value;?>
"><?php echo $_smarty_tpl->getVariable('homeLinkText')->value;?>
</a>
      </div>
    <?php }?>
  

  
    <?php if ($_smarty_tpl->getVariable('showLogin')->value){?>
	<div class="loginstatus">
		<ul class="nav secondary loginbuttons">
		<li<?php if ($_smarty_tpl->getVariable('footerLoginClass')->value){?> class="<?php echo $_smarty_tpl->getVariable('footerLoginClass')->value;?>
"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('footerLoginLink')->value;?>
"><?php echo $_smarty_tpl->getVariable('footerLoginText')->value;?>
</a></li>
		</ul>
	</div>
	<?php }?>
  

  
    <?php if ($_smarty_tpl->getVariable('configModule')->value==$_smarty_tpl->getVariable('homeModuleID')->value&&$_smarty_tpl->getVariable('showDeviceDetection')->value){?>
      <table class="devicedetection">
        <tr><th>Pagetype:</th><td><?php echo $_smarty_tpl->getVariable('pagetype')->value;?>
</td></tr>
        <tr><th>Platform:</th><td><?php echo $_smarty_tpl->getVariable('platform')->value;?>
</td></tr>
        <tr><th>Platform:</th><td><?php echo $_smarty_tpl->getVariable('browser')->value;?>
</td></tr>
        <tr><th>User Agent:</th><td><?php echo $_SERVER['HTTP_USER_AGENT'];?>
</td></tr>
      </table>
    <?php }?>
  

  
    <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inlineJavascriptFooterBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
      <script type="text/javascript">
        <?php echo $_smarty_tpl->tpl_vars['script']->value;?>
 
      </script>
    <?php }} ?>
    
    <?php if (strlen($_smarty_tpl->getVariable('GOOGLE_ANALYTICS_ID')->value)){?>
      <script type="text/javascript">
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      </script>
    <?php }?>
  

</div>
</div> <!--nonfooternav -->




</body>
</html>
<?php }else{ ?>
  
    <script type="text/javascript">
      <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inlineJavascriptFooterBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
        <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

      <?php }} ?>
      
      <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('onLoadBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
        <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

      <?php }} ?>
    
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
      
      onOrientationChange();
    </script>
  
<?php }?>
