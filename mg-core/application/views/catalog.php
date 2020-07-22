<h1 style="margin-left: 100px;"><?=$TiteCategory?></h1>
<? title($TiteCategory);
//представление каталога (страница каталога)
foreach($Items as $item)
		{
			if($i%100==0):?> 
			<div style="clear:both;"></div>
			<?endif;?>
			<div class="product">
				<div class="product_image">
					<a href="/<?=$item["category_url"]?>/<?=$item["product_url"]?>"><image src="/uploads/<?=$item["image_url"]?>" /></a>
				</div><br>

				<h2>
				<a href="/<?=$item["category_url"]?>/<?=$item["product_url"]?>"><?=$item["name"]?></a>
				</h2>
			</div>

		<?
			$i++;
		}
		
		echo $pager;
		?>
	
