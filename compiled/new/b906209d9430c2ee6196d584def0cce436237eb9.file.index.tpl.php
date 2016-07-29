<?php /* Smarty version Smarty-3.1.18, created on 2016-07-24 21:45:19
         compiled from "/var/www/cybertoy.local/design/new/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5639003695794fffe081211-82201224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b906209d9430c2ee6196d584def0cce436237eb9' => 
    array (
      0 => '/var/www/cybertoy.local/design/new/html/index.tpl',
      1 => 1469385915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5639003695794fffe081211-82201224',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5794fffe123fd0_58696295',
  'variables' => 
  array (
    'config' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'canonical' => 0,
    'settings' => 0,
    'pages' => 0,
    'p' => 0,
    'page' => 0,
    'keyword' => 0,
    'categories' => 0,
    'c' => 0,
    'category' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5794fffe123fd0_58696295')) {function content_5794fffe123fd0_58696295($_smarty_tpl) {?><!DOCTYPE html>

<html>
<head>
	<base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/"/>
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>

	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<meta name="keywords"    content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<meta name="viewport" content="width=1024"/>

	<title>Cybertoy</title>

	
	<?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>

	
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" rel="icon"          type="image/x-icon"/>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

	<!-- Bootstrap Core CSS -->
	<link href="/new_template/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="/new_template/css/shop-homepage.css" rel="stylesheet">
	<link href="/new_template/css/cart_menu.css" rel="stylesheet">

	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


	
	<script src="js/jquery/jquery.js"  type="text/javascript"></script>

	
	<?php if ($_SESSION['admin']=='admin') {?>
		<script src ="js/admintooltip/admintooltip.js" type="text/javascript"></script>
		<link   href="js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" />
	<?php }?>

	
	<script type="text/javascript" src="js/ctrlnavigate.js"></script>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js"></script>
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/ajax_cart.js"></script>

	
	<script src="js/baloon/js/baloon.js" type="text/javascript"></script>
	<link   href="js/baloon/css/baloon.css" rel="stylesheet" type="text/css" />

	
	
		<script src="js/autocomplete/jquery.autocomplete-min.js" type="text/javascript"></script>
		<style>
			.autocomplete-suggestions{
				background-color: #ffffff;
				overflow: hidden;
				border: 1px solid #e0e0e0;
				overflow-y: auto;
			}
			.autocomplete-suggestions .autocomplete-suggestion{cursor: default;}
			.autocomplete-suggestions .selected { background:#F0F0F0; }
			.autocomplete-suggestions div { padding:2px 5px; white-space:nowrap; }
			.autocomplete-suggestions strong { font-weight:normal; color:#3399FF; }
		</style>
		<script>
			$(function() {
				//  Автозаполнитель поиска
				$(".input_search").autocomplete({
					serviceUrl:'ajax/search_products.php',
					minChars:1,
					noCache: false,
					onSelect:
							function(suggestion){
								$(".input_search").closest('form').submit();
							},
					formatResult:
							function(suggestion, currentValue){
								var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
								var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
								return (suggestion.data.image?"<img align=absmiddle src='"+suggestion.data.image+"'> ":'') + suggestion.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
							}
				});
			});
		</script>
	


</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Название сайта</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
				
				<?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
					<li <?php if ($_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['page']->value->id==$_smarty_tpl->tpl_vars['p']->value->id) {?>class="active"<?php }?>>
						<a data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<span class="sr-only">(current)</span></a>
					</li>
				<?php }?>
				<?php } ?>
				<!-- li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
					   aria-expanded="false">Пункт с подпунктами 1<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Подпункт 1.1</a></li>
						<li><a href="#">Подпункт 1.2</a></li>
						<li><a href="#">Подпункт 1.3</a></li>
						<li class="divider"></li>
						<li><a href="#">Подпункт 1.4</a></li>
						<li class="divider"></li>
						<li><a href="#">Подпункт 1.5</a></li>
					</ul>
				</li -->
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input class="input_search form-control" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Поиск товара"/>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<!-- ul class="nav navbar-nav navbar-right">
                <li><a href="#">Пункт 3</a></li>
            </ul -->
			<!-- cart -->
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<span class="glyphicon glyphicon-shopping-cart"></span><?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<span class="caret"></span>
					</a>
					<ul class="dropdown-menu dropdown-cart" role="menu">
						<!-- li>
                      <span class="item">
                        <span class="item-left">
                            <img src="http://lorempixel.com/50/50/" alt="" />
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
						</li>
						<li>
                      <span class="item">
                        <span class="item-left">
                            <img src="http://lorempixel.com/50/50/" alt="" />
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
						</li>
						<li>
                      <span class="item">
                        <span class="item-left">
                            <img src="http://lorempixel.com/50/50/" alt="" />
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
						</li>
						<li>
                      <span class="item">
                        <span class="item-left">
                            <img src="http://lorempixel.com/50/50/" alt="" />
                            <span class="item-info">
                                <span>Item name</span>
                                <span>23$</span>
                            </span>
                        </span>
                        <span class="item-right">
                            <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                    </span>
						</li -->
						<li class="divider"></li>
						<li><a class="text-center" href="cart.html">View Cart</a></li>
					</ul>
				</li>
			</ul>
			<!-- cart-->
		</div>
	</div>
</nav>
<!-- navigation -->

<!-- Page Content -->
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<p class="lead">Cybertoy</p>
			<div class="list-group">
				<?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
					<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
									<?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['c']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
									<a class="list-group-item <?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>active<?php }?>" href="catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
									<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories));?>

								<?php }?>
						<?php } ?>
					<?php }?>
				<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

				<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value));?>

			</div>
		</div>

		<div class="col-md-9">
			<div class="row carousel-holder">
				<div class="col-md-12">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img class="slide-image" src="http://placehold.it/800x300" alt="">
							</div>
							<div class="item">
								<img class="slide-image" src="http://placehold.it/800x300" alt="">
							</div>
							<div class="item">
								<img class="slide-image" src="http://placehold.it/800x300" alt="">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- /.container -->
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<div class="row">

	<div class="col-sm-4 col-lg-4 col-md-4">
		<div class="thumbnail">
			<img src="http://placehold.it/320x150" alt="">
			<div class="caption">
				<h4 class="pull-right">$24.99</h4>
				<h4><a href="#">First Product</a>
				</h4>
				<p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
			</div>
			<div class="ratings">
				<p class="pull-right">15 reviews</p>
				<p>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<hr>
	<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; Your Website 2014</p>
			</div>
		</div>
	</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
</html><?php }} ?>
