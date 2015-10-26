<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 19:04:16
         compiled from "/var/www/kampa/tienda/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:701235396562d7c10718c07-79595318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa2fba2c96390d4e3f374515d0e32e1f1f7d584f' => 
    array (
      0 => '/var/www/kampa/tienda/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1440038612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '701235396562d7c10718c07-79595318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d7c1071fe07_41539281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d7c1071fe07_41539281')) {function content_562d7c1071fe07_41539281($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
