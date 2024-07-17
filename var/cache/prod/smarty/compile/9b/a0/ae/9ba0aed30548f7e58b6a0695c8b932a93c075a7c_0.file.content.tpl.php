<?php
/* Smarty version 4.2.1, created on 2024-07-15 10:53:54
  from 'C:\xampp\htdocs\prestashop\admins000\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6694ffc2d2a9f5_72177570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba0aed30548f7e58b6a0695c8b932a93c075a7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admins000\\themes\\default\\template\\content.tpl',
      1 => 1720992247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694ffc2d2a9f5_72177570 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
