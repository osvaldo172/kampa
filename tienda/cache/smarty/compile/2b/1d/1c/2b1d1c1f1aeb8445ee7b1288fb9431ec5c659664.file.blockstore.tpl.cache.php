<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:23
         compiled from "/var/www/kampa/tienda/themes/leo_converse/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20318281562d82e38340d7-70701752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1d1c1f1aeb8445ee7b1288fb9431ec5c659664' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/blockstore/blockstore.tpl',
      1 => 1442569594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20318281562d82e38340d7-70701752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e38535e6_19014364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e38535e6_19014364')) {function content_562d82e38535e6_19014364($_smarty_tpl) {?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<h4 class="title_block">		
		<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
		
	</h4>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" />
			</a>
		</p>
		<?php if (!empty($_smarty_tpl->tpl_vars['store_text']->value)) {?>
        <p class="store-description">
        	<?php echo $_smarty_tpl->tpl_vars['store_text']->value;?>

        </p>
        <?php }?>
		<div>
			<a 
			class="" 
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" 
			title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<span><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
