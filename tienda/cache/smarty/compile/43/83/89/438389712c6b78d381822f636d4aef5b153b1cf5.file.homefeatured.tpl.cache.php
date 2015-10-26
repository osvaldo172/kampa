<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:22
         compiled from "/var/www/kampa/tienda/themes/leo_converse/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:364671767562d82e28b3676-34092742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '438389712c6b78d381822f636d4aef5b153b1cf5' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/homefeatured/homefeatured.tpl',
      1 => 1442569596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '364671767562d82e28b3676-34092742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e28c1830_39348956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e28c1830_39348956')) {function content_562d82e28c1830_39348956($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
