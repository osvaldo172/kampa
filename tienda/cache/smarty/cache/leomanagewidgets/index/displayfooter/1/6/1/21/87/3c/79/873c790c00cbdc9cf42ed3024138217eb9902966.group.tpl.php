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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56318386b4fb60_05308930',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56318386b4fb60_05308930')) {function content_56318386b4fb60_05308930($_smarty_tpl) {?>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-2-4 col-md-3 col-sm-3 col-xs-6 col-sp-12"
                            >
                                                                                                	<!-- Block CMS module footer -->
	<div class="footer-block block" id="block_various_links_footer">
		<h4 class="title_block">Información</h4>
		<ul class="toggle-footer list-group bullet">
							<li class="item">
					<a href="http://localhost/kampa/tienda/es/prices-drop" title="Promociones especiales">
						Promociones especiales
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/kampa/tienda/es/new-products" title="Novedades">
					Novedades
				</a>
			</li>
										<li class="item">
					<a href="http://localhost/kampa/tienda/es/best-sales" title="¡Lo más vendido!">
						¡Lo más vendido!
					</a>
				</li>
										<li class="item">
					<a href="http://localhost/kampa/tienda/es/stores" title="Nuestras tiendas">
						Nuestras tiendas
					</a>
				</li>
																		<li class="item">
						<a href="http://localhost/kampa/tienda/es/content/4-about-us" title="About us">
							About us
						</a>
					</li>
													<li>
				<a href="http://localhost/kampa/tienda/es/sitemap" title="Mapa del sitio">
					Mapa del sitio
				</a>
			</li>
								</ul>
		
	</div>
	<!-- /Block CMS module footer -->
                                                                                    </div>
                                                                                <div class="widget col-lg-2-4 col-md-3 col-sm-3 col-xs-6 col-sp-12"
                            >
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
                                                                                    </div>
                                                                                <div class="widget col-lg-2-4 col-md-3 col-sm-3 col-xs-6 col-sp-12"
                            >
                                                                                                
<div class="widget-twitter block">
		<h4 class="title_block">
		From Twitter
	</h4>
		<div class="block_content">
		<div id="leo-twitter477627952327188480" class="leo-twitter">
			<a class="twitter-timeline" data-dnt="true"  data-theme="light" data-link-color="#1ba1e2" width="350px" height="250px" data-chrome="noheader nofooter noborders transparent" data-border-color="#000" lang="es" data-tweet-limit="2" data-show-replies="0" href="https://twitter.com/leotheme"  data-widget-id="477627952327188480"  >Tweets by @leotheme</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>	
	</div>
</div>
 
<script type="text/javascript">

// Customize twitter feed
var hideTwitterAttempts = 0;
function hideTwitterBoxElements() {
 setTimeout( function() {
  if ( $('[id*=leo-twitter477627952327188480]').length ) {
   $('#leo-twitter477627952327188480 iframe').each( function(){
    var ibody = $(this).contents().find( 'body' );
	var show_scroll =  0; 
	var height =  250+'px'; 
    if ( ibody.find( '.timeline .stream .h-feed li.tweet' ).length ) {
		ibody.find( '.e-entry-title' ).css( 'color', '#aaaaaa' );
		ibody.find( '.header .p-nickname' ).css( 'color', '#aaaaaa' );
		ibody.find( '.p-name' ).css( 'color', '#aaaaaa' );
		if(show_scroll == 1){
			ibody.find( '.timeline .stream' ).css( 'max-height', height );
			ibody.find( '.timeline .stream' ).css( 'overflow-y', 'auto' );	
			ibody.find( '.timeline .twitter-timeline' ).css( 'height', 'inherit !important' );	
		}
    } else {
     $(this).hide();
    }
   });
  }
  hideTwitterAttempts++;
  if ( hideTwitterAttempts < 3 ) {
   hideTwitterBoxElements();
  }
 }, 1500);
}
// somewhere in your code after html page load
hideTwitterBoxElements();

</script>
                                                                                    </div>
                                                                                <div class="widget col-lg-2-4 col-md-3 col-sm-3 col-xs-6 col-sp-12"
                            >
                                                                                                <div class="widget-html block footer-block block nopadding">
		<h4 class="title_block">
		Payment Option
	</h4>
		<div class="block_content toggle-footer">
		<p><a><img src="/kampa/tienda/themes/leo_converse/img/modules/leomanagewidgets/icon-payment.png" alt="" /></a></p>
	</div>
</div>
                                                                                    </div>
                                                                                <div class="widget col-lg-2-4 col-md-6 col-sm-6 col-xs-6 col-sp-12 hidden-sm hidden-md hidden-xs hidden-sp"
                            >
                                                                                                <!-- Block stores module -->
<div id="stores_block_left" class="block">
	<h4 class="title_block">		
		Nuestras tiendas		
	</h4>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost/kampa/tienda/es/stores" title="Nuestras tiendas">
				<img class="img-responsive" src="http://localhost/kampa/tienda/modules/blockstore/store.jpg" alt="Nuestras tiendas" />
			</a>
		</p>
				<div>
			<a 
			class="" 
			href="http://localhost/kampa/tienda/es/stores" 
			title="Nuestras tiendas">
				<span>Descubra nuestras tiendas</span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
                                                                                    </div>
                                                        </div>
    <?php }} ?>
