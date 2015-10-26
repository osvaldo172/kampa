<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 19:04:21
         compiled from "/var/www/kampa/tienda/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1800237917562d7c15440759-61233867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0135b9f9ee96ccc2e0deb02ffc6d06d6f4201c51' => 
    array (
      0 => '/var/www/kampa/tienda/themes/default-bootstrap/category-count.tpl',
      1 => 1440038612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800237917562d7c15440759-61233867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d7c1546f0b0_73651050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d7c1546f0b0_73651050')) {function content_562d7c1546f0b0_73651050($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
