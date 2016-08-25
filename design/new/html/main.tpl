{* Главная страница магазина *}

{* Для того чтобы обернуть центральный блок в шаблон, отличный от index.tpl *}
{* Укажите нужный шаблон строкой ниже. Это работает и для других модулей *}
{$wrapper = 'index.tpl' scope=parent}

{* Канонический адрес страницы *}
{$canonical="" scope=parent}

{* Заголовок страницы *}
<h1 xmlns="http://www.w3.org/1999/html">{$page->header}</h1>

{* Тело страницы *}
{$page->body}

{* Новинки *}
{get_new_products var=new_products limit=3}
{if $new_products}
<h1>Новинки</h1>
<!-- Список товаров-->
<div class="row">
	{foreach $new_products as $product}
		<div class="col-sm-4 col-lg-4 col-md-4">
			<div class="thumbnail">
				{if $product->image}
					<a href="products/{$product->url}"><img src="{$product->image->filename|resize:320:150}" alt="{$product->name|escape}" alt=""></a>
				{/if}
				<div class="caption">
					{foreach $product->variants as $v}
						{if $v->compare_price > 0}<h4 class="pull-right">{$v->compare_price|convert}</h4>{/if}
					{/foreach}
					<!-- h4 class="pull-right">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></h4 -->
					<h4><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h4>
					<!--p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p-->
					<!-- Выбор варианта товара -->
					<form id="cart{$product->id}" class="variants" action="/cart">
						<table>
							{foreach $product->variants as $v}
								<tr class="variant">
									<td>
										<input id="featured_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}/>
									</td>
									<td>
										{if $v->name}<label class="variant_name" for="featured_{$v->id}">{$v->name}</label>{/if}
									</td>
									<td>
										{if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
										<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
									</td>
								</tr>
							{/foreach}
						</table>
					</form>
				</div>
				{if $product->variants|count > 0}
				<div class="ratings">
					<p class="pull-right"><input form="cart{$product->id}" type="submit" class="btn btn-default cart" value="в корзину" data-result-text="добавлено"/>
				</div>
				{else}
					Нет в наличии
				{/if}
			</div>
		</div>
	{/foreach}
</div>
{/if}

{* Новинки *}
{*get_new_products var=new_products limit=3}
{if $new_products}
<h1>Новинки</h1>
<!-- Список товаров-->
<ul class="tiny_products">
	{foreach $new_products as $product}
	<!-- Товар-->
	<li class="product">
		<!-- Фото товара -->
		{if $product->image}
		<div class="image">
			<a href="products/{$product->url}"><img src="{$product->image->filename|resize:200:200}" alt="{$product->name|escape}"/></a>
		</div>
		{/if}
		<!-- Фото товара (The End) -->
		<!-- Название товара -->
		<h3><a data-product="{$product->id}" href="products/{$product->url}">{$product->name|escape}</a></h3>
		<!-- Название товара (The End) -->
		{if $product->variants|count > 0}
		<!-- Выбор варианта товара -->
		<form class="variants" action="/cart">
			<table>
			{foreach $product->variants as $v}
			<tr class="variant">
				<td>
					<input id="new_{$v->id}" name="variant" value="{$v->id}" type="radio" class="variant_radiobutton" {if $v@first}checked{/if} {if $product->variants|count<2}style="display:none;"{/if}/>
				</td>
				<td>
					{if $v->name}<label class="variant_name" for="new_{$v->id}">{$v->name}</label>{/if}
				</td>
				<td>
					{if $v->compare_price > 0}<span class="compare_price">{$v->compare_price|convert}</span>{/if}
					<span class="price">{$v->price|convert} <span class="currency">{$currency->sign|escape}</span></span>
				</td>
			</tr>
			{/foreach}
			</table>
			<input type="submit" class="button" value="в корзину" data-result-text="добавлено"/>
		</form>
		<!-- Выбор варианта товара (The End) -->
		{else}
			Нет в наличии
		{/if}

	</li>
	<!-- Товар (The End)-->
	{/foreach}
			
</ul>
{/if*}
