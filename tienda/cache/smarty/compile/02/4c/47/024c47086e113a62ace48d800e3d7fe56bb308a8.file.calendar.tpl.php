<?php /* Smarty version Smarty-3.1.19, created on 2015-10-25 19:04:16
         compiled from "/var/www/kampa/tienda/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:510156442562d7c10209956-75567374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '024c47086e113a62ace48d800e3d7fe56bb308a8' => 
    array (
      0 => '/var/www/kampa/tienda/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1440038612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '510156442562d7c10209956-75567374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562d7c1020e038_07618931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562d7c1020e038_07618931')) {function content_562d7c1020e038_07618931($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
