<a href="/catalog">Назад к курсам</a>
<h2>Результаты прохождения курсов</h2>

<?if($empty_cart):?>

		<form action="/cart" method="post">
			<?=$big_cart;?>
			<input type="submit" name="refresh" value="Удалить"  style="margin-left:10px; margin-top:10px;" />
		</form>	

		<form action="/feedback" method="post" style="margin-left:600px;">
			<input type="submit" name="order" value="Обратная связь" style=" height:30px; padding: 0px 20px;" />
		</form>

<?else:?>
Ещё не пройден ни один урок!

<?endif;?>