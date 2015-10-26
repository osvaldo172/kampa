<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:23
         compiled from "/var/www/kampa/tienda/themes/leo_converse/modules/blocklanguages/blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:345221639562d82e3c175f8-94353121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b4812ab473d13c199565401b7601a188ea3817a' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/blocklanguages/blocklanguages.tpl',
      1 => 1442569594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '345221639562d82e3c175f8-94353121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'img_lang_dir' => 0,
    'indice_lang' => 0,
    'lang_rewrite_urls' => 0,
    'lang_leo_rewrite_urls' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e3c6f778_70124939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e3c6f778_70124939')) {function content_562d82e3c6f778_70124939($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/kampa/tienda/tools/smarty/plugins/modifier.regex_replace.php';
?>
<!-- Block languages module -->
	<div class="btn-group">
		<div data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i><span class="hidden-xs"><?php echo smartyTranslate(array('s'=>'Languages : ','mod'=>'blocklanguages'),$_smarty_tpl);?>
</span>
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value) {?>					 
						<span><img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" /></span>				 
				<?php }?>
			<?php } ?>
		</div>
		<div class="quick-setting dropdown-menu">
			<div id="languages-block-top" class="languages-block">
				<ul id="first-languages" class="languages-block_ul">
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
						<li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value) {?>class="selected"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
							<?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, 0);?>
							<?php if (isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value])) {?>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
							<?php } elseif (isset($_smarty_tpl->tpl_vars['lang_leo_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value])) {?>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_leo_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
							<?php } else { ?>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
							<?php }?>
						<?php }?>
								<span><img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" />&nbsp;<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
</span>
						<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
							</a>
						<?php }?>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>	
	</div>
			
<!-- /Block languages module -->
<?php }} ?>
