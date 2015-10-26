<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 19:04:10
         compiled from "/var/www/kampa/tienda/admin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:518244449562d7c0ac61187-49847243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e87a39ef082810800e2450c5a88779975d484da' => 
    array (
      0 => '/var/www/kampa/tienda/admin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1440038610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518244449562d7c0ac61187-49847243',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d7c0ac65261_36038436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d7c0ac65261_36038436')) {function content_562d7c0ac65261_36038436($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
