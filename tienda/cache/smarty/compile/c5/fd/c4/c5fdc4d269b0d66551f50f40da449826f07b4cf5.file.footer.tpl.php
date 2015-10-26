<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:23
         compiled from "/var/www/kampa/tienda/themes/leo_converse/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:674419996562d82e3e95254-81955381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5fdc4d269b0d66551f50f40da449826f07b4cf5' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/footer.tpl',
      1 => 1442569590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '674419996562d82e3e95254-81955381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
    'HOOK_BOTTOM' => 0,
    'HOOK_FOOTERTOP' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTERBOTTOM' => 0,
    'HOOK_FOOTNAV' => 0,
    'ENABLE_COPYRIGHT' => 0,
    'CUSTOM_COPYRIGHT' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e3effcb7_77608364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e3effcb7_77608364')) {function content_562d82e3effcb7_77608364($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                	</div>
				</div>
            </section>
<!-- Footer -->
            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)) {?>
			
				<section id="bottom">
					<div class="container">
						<div class="row">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value;?>

						</div>
					</div>
				</section>
			<?php }?>
			<footer id="footer" class="footer-container">
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value)) {?>
					<section id="leo-footer-top" class="footer-top"> 
						<div class="container"> 
							<div class="inner">			  
								<div class="row">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value;?>

								</div>  
							</div>
						</div> 
					</section><!-- #footertop -->
                <?php }?>
                <section id="leo-footer-center" class="footer-center">
					<div class="container"> 
						<div class="inner">			
							
								<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

							
						</div> 
					</div>
				</section><!-- #footercenter -->
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value)) {?>
					<section id="leo-footer-bottom" class="footer-bottom">
						<div class="container">
							<div class="inner">			
								<div class="row">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value;?>

								</div>
							</div>
						</div>
					</section><!-- #footerbottom -->
                <?php }?>
				<section id="footernav" class="footer-nav">
					<div class="container">
						<div class="inner">	
							<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value)) {?>
								<div id="footnav">
									<?php if (isset($_smarty_tpl->tpl_vars['ENABLE_COPYRIGHT']->value)&&$_smarty_tpl->tpl_vars['ENABLE_COPYRIGHT']->value==1) {?>
										<div id="powered" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12">
											<?php if (isset($_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value)&&!empty($_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value)) {?>
												<?php echo $_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value;?>

											<?php } else { ?>
												&copy; 2014 <?php echo smartyTranslate(array('s'=>'Powered by PrestaShop. All Rights Reserved.'),$_smarty_tpl);?>
 
											<?php }?>
												Developed By <span>LeoTheme</span>
										</div><!-- #poweredby -->
									<?php }?>
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value;?>

										
								</div>
							<?php }?>							
						</div>
					</div>
				</section>
            </footer><!-- .footer-container -->
		</section><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)&&$_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
	</body>
</html><?php }} ?>
