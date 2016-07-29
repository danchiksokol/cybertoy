<?php /* Smarty version Smarty-3.1.18, created on 2016-07-30 00:13:51
         compiled from "/var/www/cybertoy.local/design/new/html/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290418995794fffdec1b01-58693527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a320338886c0600f8e3fa2daa3a9fee5b06cf11e' => 
    array (
      0 => '/var/www/cybertoy.local/design/new/html/main.tpl',
      1 => 1469392085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290418995794fffdec1b01-58693527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5794fffe072445_24629267',
  'variables' => 
  array (
    'page' => 0,
    'new_products' => 0,
    'product' => 0,
    'v' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5794fffe072445_24629267')) {function content_5794fffe072445_24629267($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['wrapper'] = new Smarty_variable('index.tpl', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['wrapper'] = clone $_smarty_tpl->tpl_vars['wrapper'];?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<h1><?php echo $_smarty_tpl->tpl_vars['page']->value->header;?>
</h1>


<?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>3),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
<h1>Новинки</h1>
<!-- Список товаров-->
<div class="row">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<div class="col-sm-4 col-lg-4 col-md-4">
			<div class="thumbnail">
				<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
					<a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,320,150);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" alt=""></a>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>0) {?>
				<div class="caption">
					<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><h4 class="pull-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</h4><?php }?>
					<h4 class="pull-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></h4>

					<h4><a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
					</h4>
					<p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
				</div>
				<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
				<?php } else { ?>
					Нет в наличии
				<?php }?>
			</div>
		</div>
	<?php } ?>
</div>
<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>3),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
<h1>Новинки</h1>
<!-- Список товаров-->
<ul class="tiny_products">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<!-- Товар-->
	<li class="product">
		<!-- Фото товара -->
		<?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
		<div class="image">
			<a href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,200,200);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/></a>
		</div>
		<?php }?>
		<!-- Фото товара (The End) -->
		<!-- Название товара -->
		<h3><a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		<!-- Название товара (The End) -->
		<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)>0) {?>
		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
			<table>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
			<tr class="variant">
				<td>
					<input id="new_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" name="variant" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" type="radio" class="variant_radiobutton" <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>checked<?php }?> <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?>style="display:none;"<?php }?>/>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><label class="variant_name" for="new_<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</label><?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?><span class="compare_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
</span><?php }?>
					<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
				</td>
			</tr>
			<?php } ?>
			</table>
			<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
		</form>
		<!-- Выбор варианта товара (The End) -->
		<?php } else { ?>
			Нет в наличии
		<?php }?>

	</li>
	<!-- Товар (The End)-->
	<?php } ?>
			
</ul>
<?php }?>	
<?php }} ?>
