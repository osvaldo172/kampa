<?php /*%%SmartyHeaderCode:1610663051562d82e0cc4259-14997970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdbc8eef7a0f6a7c8273aa9d5eeea1fe995a38ce' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/blocksocial/blocksocial.tpl',
      1 => 1442569594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610663051562d82e0cc4259-14997970',
  'variables' => 
  array (
    'facebook_url' => 0,
    'google_plus_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'pinterest_url' => 0,
    'vimeo_url' => 0,
    'instagram_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e0d42372_57652814',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e0d42372_57652814')) {function content_562d82e0d42372_57652814($_smarty_tpl) {?>
<div id="social_block" class="block">
	 <h4 class="title_block">Get social</h4>
	 <div class="block_content">	 	
		<ul>
						<li class="facebook">
					<a target="_blank" href="http://www.facebook.com/prestashop" class="btn-tooltip" data-original-title="Facebook">
						<span>Facebook</span>
					</a>
				</li>
				        	        	<li class="google-plus">
	        		<a target="_blank" href="https://www.google.com/+prestashop" class="btn-tooltip" data-original-title="Google Plus">
	        			<span>Google Plus</span>
	        		</a>
	        	</li>
	        							<li class="twitter">
					<a target="_blank" href="http://www.twitter.com/prestashop" class="btn-tooltip" data-original-title="Twitter">
						<span>Twitter</span>
					</a>
				</li>
									<li class="rss">
					<a target="_blank" href="http://www.prestashop.com/blog/en/" class="btn-tooltip" data-original-title="RSS">
						<span>RSS</span>
					</a>
				</li>
			                                		</ul>
	 </div>
</div>

<?php }} ?>
