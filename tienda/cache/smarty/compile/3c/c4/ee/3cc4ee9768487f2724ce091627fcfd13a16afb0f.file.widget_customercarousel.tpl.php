<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 21:33:20
         compiled from "/var/www/kampa/tienda/themes/leo_converse/modules/leomanagewidgets/views/widgets/widget_customercarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1626139301562d82e094f253-62459757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc4ee9768487f2724ce091627fcfd13a16afb0f' => 
    array (
      0 => '/var/www/kampa/tienda/themes/leo_converse/modules/leomanagewidgets/views/widgets/widget_customercarousel.tpl',
      1 => 1442569596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1626139301562d82e094f253-62459757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'widget_heading' => 0,
    'show_controls' => 0,
    'customercarousel' => 0,
    'startSlide' => 0,
    'item' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d82e0975904_55665289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d82e0975904_55665289')) {function content_562d82e0975904_55665289($_smarty_tpl) {?><div id="custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="block">
    <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
    <h4 class="title_block">
        <?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

    </h4>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['show_controls']->value&&count($_smarty_tpl->tpl_vars['customercarousel']->value)>1) {?>
	<a class="carousel-control left" href="#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"   data-slide="prev"></a>
	<a class="carousel-control right" href="#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  data-slide="next"></a>
    <?php }?>
    <div class="carousel-inner">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customercarousel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']++;
?>
        <div class="item item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['index']==$_smarty_tpl->tpl_vars['startSlide']->value) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
    <?php } ?>   
    </div>
</div>
<script type="text/javascript">

$(document).ready(function() {
    $('#custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').each(function(){
        $(this).carousel({
            pause: true,
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
     
});


</script><?php }} ?>
