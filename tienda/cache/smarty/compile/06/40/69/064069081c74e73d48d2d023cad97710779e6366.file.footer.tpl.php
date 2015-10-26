<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:23
         compiled from "/var/www/kampa/tienda/themes/leo_converse/layout/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:892921083562d82e3f04383-19765424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064069081c74e73d48d2d023cad97710779e6366' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/layout/default/footer.tpl',
      1 => 1442569592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '892921083562d82e3f04383-19765424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e3f20860_80981171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e3f20860_80981171')) {function content_562d82e3f20860_80981171($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="no-border clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
