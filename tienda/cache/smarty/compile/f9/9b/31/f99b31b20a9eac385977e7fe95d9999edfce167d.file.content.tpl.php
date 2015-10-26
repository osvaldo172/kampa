<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 19:04:20
         compiled from "/var/www/kampa/tienda/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1211931908562d7c14386846-82941071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99b31b20a9eac385977e7fe95d9999edfce167d' => 
    array (
      0 => '/var/www/kampa/tienda/admin/themes/default/template/content.tpl',
      1 => 1440038612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1211931908562d7c14386846-82941071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d7c14390655_93668216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d7c14390655_93668216')) {function content_562d7c14390655_93668216($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
