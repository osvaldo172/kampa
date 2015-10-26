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
  'unifunc' => 'content_562d82e10d71c7_80750321',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e10d71c7_80750321')) {function content_562d82e10d71c7_80750321($_smarty_tpl) {?>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12" 
                    >
            
                                                                                    <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                <!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block inline">
    <h4 class="title_block">Newsletter sign-up</h4>
    <div class="block_content">
        <form action="//localhost/kampa/tienda/es/" method="post">
	   <div class="form-group">
                <input class="inputNew newsletter-input form-control" id="newsletter-input" type="text" name="email" size="18" value="Introduzca su dirección de correo electrónico" />
                <input type="submit" value="subscribe" class="button_mini btn-danger btn button-default" name="submitNewsletter" />
                <input type="hidden" name="action" value="0" />
            </div>
        </form>
    </div>
    
</div>
<!-- /Block Newsletter module-->
                                                                                    </div>
                                                        </div>
    <?php }} ?>
