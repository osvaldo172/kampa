<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:23
         compiled from "/var/www/kampa/tienda/themes/leo_converse/modules/leomanagewidgets/views/widgets/displayfooter/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:637592976562d82e37b8019-15079055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ebc1dda69a4650eebfa8b7ef8aa18420475d125' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/leomanagewidgets/views/widgets/displayfooter/widget_html.tpl',
      1 => 1442569596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '637592976562d82e37b8019-15079055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e37c4a29_21031550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e37c4a29_21031550')) {function content_562d82e37c4a29_21031550($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block footer-block block nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content toggle-footer">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
