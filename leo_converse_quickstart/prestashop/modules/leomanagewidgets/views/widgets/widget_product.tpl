{*
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}

{if isset($product) && $product}
<div class="widget-product block">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</h4>
	{/if}
	<div class="block_content">
		<div class="product_block">
 			 
 			 <div class="product-container clearfix">	
				
				<div class="image ">
					<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" class="product_image">
						<img class="img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}"  alt="{$product.name|escape:'html':'UTF-8'}" />
						{if isset($product.new) && $product.new == 1}<span class="new">{l s='New' mod='leomanagewidgets'}</span>{/if}
					</a>
				</div>
				
				<div class="product-meta">
					<h5 class="name"><a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|truncate:150:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h5> 
			 		<div class="description">{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}{* HTML form , no escape necessary *}</div>
					{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
					
					 
			   </div>
			</div>
		</div>	
	</div>
</div>
{/if} 