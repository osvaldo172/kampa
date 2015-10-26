<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:23
         compiled from "/var/www/kampa/tienda/themes/leo_converse/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:968382663562d82e3c77ff5-10972582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3ba484c51eff8af8f235d108b36eeb2c79bf44' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/blockuserinfo/nav.tpl',
      1 => 1442569594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968382663562d82e3c77ff5-10972582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'is_logged' => 0,
    'order_process' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e3cebe34_78993246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e3cebe34_78993246')) {function content_562d82e3cebe34_78993246($_smarty_tpl) {?><script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('btn-group');
			 $(".header_user_info .links").addClass('quick-setting dropdown-menu');
		}
		else{
			$(".header_user_info").removeClass('btn-group');
			 $(".header_user_info .links").removeClass('quick-setting dropdown-menu');
		}
	$(window).resize(function() {
		if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('btn-group');
			 $(".header_user_info .links").addClass('quick-setting dropdown-menu');
		}
		else{
			$(".header_user_info").removeClass('btn-group');
			 $(".header_user_info .links").removeClass('quick-setting dropdown-menu');
		}
	});
});
</script>
<!-- Block user information module NAV  -->
<div class="header_user_info pull-left">
	<div data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i><span><?php echo smartyTranslate(array('s'=>'Top links','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 </span></div>	
		<ul class="links">
		<li class="first">
			<a id="wishlist-total" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><i class="fa fa-heart"></i><?php echo smartyTranslate(array('s'=>'Wish List','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<i class="fa fa-unlock-alt"></i><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
		<?php } else { ?>
			<li><a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<i class="fa fa-unlock-alt"></i><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
		<?php }?>

		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><i class="fa fa-user"></i><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		<li class="last"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="last"><i class="fa fa-share"></i><?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
				<i class="fa fa-shopping-cart"></i><?php echo smartyTranslate(array('s'=>'Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a>
		</li>

		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow">
					<i class="fa fa-user"></i>
					<span><?php echo smartyTranslate(array('s'=>'Hello','mod'=>'blockuserinfo'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
			</li>
		<?php }?>
		
		</ul>
	
</div>	<?php }} ?>
