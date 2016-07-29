<?php /* Smarty version Smarty-3.1.18, created on 2016-07-24 20:50:54
         compiled from "/var/www/cybertoy.local/design/new/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3314648415794fffe3bb5d9-87080773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b349ae4e39fd7c0544ec3f3c5bd07855475738' => 
    array (
      0 => '/var/www/cybertoy.local/design/new/html/page.tpl',
      1 => 1468775129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3314648415794fffe3bb5d9-87080773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5794fffe3d6fc2_86349654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5794fffe3d6fc2_86349654')) {function content_5794fffe3d6fc2_86349654($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<!-- Заголовок страницы -->
<h1 data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</h1>

<!-- Тело страницы -->
<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>
<?php }} ?>
