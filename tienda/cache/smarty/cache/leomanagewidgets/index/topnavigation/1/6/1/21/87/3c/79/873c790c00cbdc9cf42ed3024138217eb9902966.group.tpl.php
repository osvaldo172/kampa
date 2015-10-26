<?php /*%%SmartyHeaderCode:282660324562d82e05c4f10-33750319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '873c790c00cbdc9cf42ed3024138217eb9902966' => 
    array (
      0 => '/var/www/kampa/tienda/modules/leomanagewidgets/views/widgets/group.tpl',
      1 => 1442569600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282660324562d82e05c4f10-33750319',
  'variables' => 
  array (
    'leoGroup' => 0,
    'group' => 0,
    'LEO_BG_STYLE_DATA' => 0,
    'column' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e0638696_57299059',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e0638696_57299059')) {function content_562d82e0638696_57299059($_smarty_tpl) {?>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
	<div class="row">
		<div class="cat-title"><i class="fa fa-bars"></i></div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="index.php" title="Home">Home</a></li>
<li><a href="http://localhost/kampa/tienda/es/content/4-about-us" title="About us">About us</a></li>
<li><a href="http://localhost/kampa/tienda/es/3-women" title="Women">Women</a><ul><li><a href="http://localhost/kampa/tienda/es/4-tops" title="Tops">Tops</a><ul><li><a href="http://localhost/kampa/tienda/es/5-tshirts" title="T-shirts">T-shirts</a></li><li><a href="http://localhost/kampa/tienda/es/7-blouses" title="Blouses">Blouses</a></li></ul></li><li><a href="http://localhost/kampa/tienda/es/8-dresses" title="Dresses">Dresses</a><ul><li><a href="http://localhost/kampa/tienda/es/9-casual-dresses" title="Casual Dresses">Casual Dresses</a></li><li><a href="http://localhost/kampa/tienda/es/10-evening-dresses" title="Evening Dresses">Evening Dresses</a></li><li><a href="http://localhost/kampa/tienda/es/11-summer-dresses" title="Summer Dresses">Summer Dresses</a></li></ul></li><li class="category-thumbnail"><div><img src="http://localhost/kampa/tienda/img/c/3-0_thumb.jpg" alt="Women" title="Women" class="imgm" /></div><div><img src="http://localhost/kampa/tienda/img/c/3-1_thumb.jpg" alt="Women" title="Women" class="imgm" /></div></li></ul></li><li><a href="http://localhost/kampa/tienda/es/content/1-delivery" title="Delivery">Delivery</a></li>
<li><a href="http://localhost/kampa/tienda/es/content/2-legal-notice" title="Legal Notice">Legal Notice</a></li>
<li><a href="http://localhost/kampa/tienda/es/1__fashion-supplier" title="Fashion Supplier">Fashion Supplier</a></li>
			
		</ul>
					<div class="pull-right" id="search_block_top">
				<form id="searchbox" action="http://localhost/kampa/tienda/es/search" method="get">
					<div class="input-group search-top">
						<span class="input-group-btn">
							<button type="submit" name="submit_search" class="btn btn-outline-inverse">
							<span class="button-search fa fa-search"><span class="unvisible">Search</span></span>
						</button></span>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" class="search_query form-control" placeholder="Search" name="search_query" value="" />					
					</div>						
				</form>
			</div>
			</div>
	</div>
	<!--/ Menu -->
                                                                                    </div>
                                                        </div>
    <?php }} ?>
