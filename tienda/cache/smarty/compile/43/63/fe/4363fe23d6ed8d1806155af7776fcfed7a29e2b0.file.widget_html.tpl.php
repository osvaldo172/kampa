<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:20
         compiled from "/var/www/kampa/tienda/modules/leomanagewidgets/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197990920562d82e0931f66-93176674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4363fe23d6ed8d1806155af7776fcfed7a29e2b0' => 
    array (
      0 => '/var/www/kampa/tienda/modules/leomanagewidgets/views/widgets/widget_html.tpl',
      1 => 1442569600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197990920562d82e0931f66-93176674',
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
  'unifunc' => 'content_562d82e09483f8_58141180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e09483f8_58141180')) {function content_562d82e09483f8_58141180($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
