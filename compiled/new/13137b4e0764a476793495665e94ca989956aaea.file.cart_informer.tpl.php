<?php /* Smarty version Smarty-3.1.18, created on 2016-07-24 20:56:53
         compiled from "/var/www/cybertoy.local/design/new/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21029250435794fffe128245-77086139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13137b4e0764a476793495665e94ca989956aaea' => 
    array (
      0 => '/var/www/cybertoy.local/design/new/html/cart_informer.tpl',
      1 => 1469383012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21029250435794fffe128245-77086139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5794fffe13a6a8_97015971',
  'variables' => 
  array (
    'cart' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5794fffe13a6a8_97015971')) {function content_5794fffe13a6a8_97015971($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>

	<?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 
	на <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

<?php } else { ?>
	Корзина пуста
<?php }?>
<?php }} ?>
