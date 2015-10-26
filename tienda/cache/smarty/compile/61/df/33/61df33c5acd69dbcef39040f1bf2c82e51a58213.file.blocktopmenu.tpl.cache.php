<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:20
         compiled from "/var/www/kampa/tienda/themes/leo_converse/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1804114018562d82e053c353-53450362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61df33c5acd69dbcef39040f1bf2c82e51a58213' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1442569594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804114018562d82e053c353-53450362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e05523a5_23298875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e05523a5_23298875')) {function content_562d82e05523a5_23298875($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
	<div class="row">
		<div class="cat-title"><i class="fa fa-bars"></i></div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
			
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
			<div class="pull-right" id="search_block_top">
				<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
					<div class="input-group search-top">
						<span class="input-group-btn">
							<button type="submit" name="submit_search" class="btn btn-outline-inverse">
							<span class="button-search fa fa-search"><span class="unvisible"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span></span>
						</button></span>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" class="search_query form-control" placeholder="<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />					
					</div>						
				</form>
			</div>
		<?php }?>
	</div>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
