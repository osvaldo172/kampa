<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 19:04:17
         compiled from "/var/www/kampa/tienda/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390760320562d7c11b7cf92-41978691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1c54f9b657be8508aacd05d3f88e2c14b0ad083' => 
    array (
      0 => '/var/www/kampa/tienda/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1440038612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390760320562d7c11b7cf92-41978691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d7c11b917b8_20611975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d7c11b917b8_20611975')) {function content_562d7c11b917b8_20611975($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
