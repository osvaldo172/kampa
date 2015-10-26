<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:23
         compiled from "/var/www/kampa/tienda/themes/leo_converse/layout/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1189893166562d82e3e5d9f3-52983706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4eb5ff2e190209505ad6978ca1c9d19228c3ff6' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/layout/default/header.tpl',
      1 => 1442569592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189893166562d82e3e5d9f3-52983706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
    'cols' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e3e91215_67301170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e3e91215_67301170')) {function content_562d82e3e91215_67301170($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
<!-- Left -->
<section id="left_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
" role="navigation">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

</section>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)) {?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable((12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value), null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12, null, 0);?><?php }?>
<!-- Center -->
<section id="center_column" class="col-md-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
">
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>
		<div id="breadcrumb" class="clearfix">			
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
			
		</div>
	<?php }?>

<?php }} ?>
