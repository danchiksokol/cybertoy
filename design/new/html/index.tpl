<!DOCTYPE html>
{*
Общий вид страницы
Этот шаблон отвечает за общий вид страниц без центрального блока.
*}
<html>
<head>
	<base href="{$config->root_url}/"/>
	<title>{$meta_title|escape}</title>

	{* Метатеги *}
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="{$meta_description|escape}" />
	<meta name="keywords"    content="{$meta_keywords|escape}" />
	<meta name="viewport" content="width=1024"/>

	<title>Cybertoy</title>

	{* Канонический адрес страницы *}
	{if isset($canonical)}<link rel="canonical" href="{$config->root_url}{$canonical}"/>{/if}

	{* Стили *}
	<link href="design/{$settings->theme|escape}/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="design/{$settings->theme|escape}/images/favicon.ico" rel="icon"          type="image/x-icon"/>
	<link href="design/{$settings->theme|escape}/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

	<!-- Bootstrap Core CSS -->
	<link href="/new_template/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="/new_template/css/shop-homepage.css" rel="stylesheet">
	<link href="/new_template/css/cart_menu.css" rel="stylesheet">

	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


	{* JQuery *}
	<script src="js/jquery/jquery.js"  type="text/javascript"></script>

	{* Всплывающие подсказки для администратора *}
	{if $smarty.session.admin == 'admin'}
		<script src ="js/admintooltip/admintooltip.js" type="text/javascript"></script>
		<link   href="js/admintooltip/css/admintooltip.css" rel="stylesheet" type="text/css" />
	{/if}

	{* Ctrl-навигация на соседние товары *}
	<script type="text/javascript" src="js/ctrlnavigate.js"></script>

	{* Аяксовая корзина *}
	<script src="design/{$settings->theme}/js/jquery-ui.min.js"></script>
	<script src="design/{$settings->theme}/js/ajax_cart.js"></script>

	{* js-проверка форм *}
	<script src="js/baloon/js/baloon.js" type="text/javascript"></script>
	<link   href="js/baloon/css/baloon.css" rel="stylesheet" type="text/css" />

	{* Автозаполнитель поиска *}
	{literal}
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
	{/literal}


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
			<a class="navbar-brand" href="#">Cybertoy.ru</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				{foreach $pages as $p}
				{* Выводим только страницы из первого меню *}
				{if $p->menu_id == 1}
					<li {if $page && $page->id == $p->id}class="active"{/if}>
						<a data-page="{$p->id}" href="{$p->url}">{$p->name|escape}<span class="sr-only">(current)</span></a>
					</li>
				{/if}
				{/foreach}
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
					<input class="input_search form-control" type="text" name="keyword" value="{$keyword|escape}" placeholder="Поиск товара"/>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<!-- ul class="nav navbar-nav navbar-right">
                <li><a href="#">Пункт 3</a></li>
            </ul -->
			<!-- cart -->
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="/cart" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<span class="glyphicon glyphicon-shopping-cart"></span><span id="cart_informer">{include file='cart_informer.tpl'}</span><span class="caret"></span>
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
						<li><a class="text-center" href="/cart">Перейти в корзину</a></li>
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
				{function name=categories_tree}
					{if $categories}
						{foreach $categories as $c}
								{if $c->visible}
									{if $c->image}<img src="{$config->categories_images_dir}{$c->image}" alt="{$c->name|escape}">{/if}
									<a class="list-group-item {if $category->id == $c->id}active{/if}" href="catalog/{$c->url}" data-category="{$c->id}">{$c->name|escape}</a>
									{categories_tree categories=$c->subcategories}
								{/if}
						{/foreach}
					{/if}
				{/function}
				{categories_tree categories=$categories}
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
			{$content}
		</div>

	</div>
</div>
<!-- /.container -->

<!-- div class="row">

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
</div -->
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
<script src="design/{$settings->theme}/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="design/{$settings->theme}/js/bootstrap.min.js"></script>

</body>
</html>