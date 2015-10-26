<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:21
         compiled from "/var/www/kampa/tienda/themes/leo_converse/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2087420459562d82e1eec3c7-14126501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24d2c0af60278c411d1cba870822a5d1b06fc2ce' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1442569596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2087420459562d82e1eec3c7-14126501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlists' => 0,
    'wishlist' => 0,
    'product' => 0,
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e1f2ea58_67808682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e1f2ea58_67808682')) {function content_562d82e1f2ea58_67808682($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value)&&count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>
	<div class="wishlist">
		<?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
 $_smarty_tpl->tpl_vars['wishlist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->index++;
 $_smarty_tpl->tpl_vars['wishlist']->first = $_smarty_tpl->tpl_vars['wishlist']->index === 0;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['wl']['first'] = $_smarty_tpl->tpl_vars['wishlist']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['wl']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['wl']['first']) {?>
				<a class="wishlist_button_list" tabindex="0" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" data-placement="bottom"><?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
					<div hidden class="popover-content">
						<table class="table" border="1">
							<tbody>
			<?php }?>
								<tr title="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1, '<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
');">
									<td>
										<?php echo smartyTranslate(array('s'=>'Add to %s','sprintf'=>array($_smarty_tpl->tpl_vars['wishlist']->value['name']),'mod'=>'blockwishlist'),$_smarty_tpl);?>

									</td>
								</tr>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['wl']['last']) {?>
						</tbody>
					</table>
				</div>
			<?php }?>
		<?php }
if (!$_smarty_tpl->tpl_vars['wishlist']->_loop) {
?>
			<a href="#" id="wishlist_button_nopop" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
				<i class="fa fa-heart"></i> <span><?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
			</a>
		<?php } ?>
	</div>
<?php } else { ?>
	<a class="btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
</a>
<?php }?><?php }} ?>
