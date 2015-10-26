<?php /*%%SmartyHeaderCode:1885141605562d82e367c275-82561002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38f94fa1816039c4cc49939e8c6e28686f1f3008' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1442569594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1885141605562d82e367c275-82561002',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e36d31d5_07962451',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e36d31d5_07962451')) {function content_562d82e36d31d5_07962451($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="footer-block block">
	<h4 class="title_block">Mi cuenta</h4>
	<div class="block_content toggle-footer">
		<ul class="bullet toggle-footer list-group">
			<li><a href="http://localhost/kampa/tienda/es/order-history" title="Mis compras" rel="nofollow">Mis compras</a></li>
						<li><a href="http://localhost/kampa/tienda/es/order-slip" title="Mis vales descuento" rel="nofollow">Mis vales descuento</a></li>
			<li><a href="http://localhost/kampa/tienda/es/addresses" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://localhost/kampa/tienda/es/identity" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
						
            		</ul>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
