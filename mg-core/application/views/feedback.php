<h1 style="margin-left: 300px;">Обратная связь</h1>
<?
title("Обратная связь");
if($error){ echo $error;}?><br/><br>
<?
if($dislpay_form){?>
<div class="feedback_form">
<form action="" method="post">
<div class="table_order_form">
    <!-- <span style="color:red;">* поле обязательное к заполнению</span>  -->
    <input type="text" placeholder="Имя" name="fio" value="<?=$_REQUEST['fio']?>"/><br><br>
    <!-- <span style="color:red;">* поле обязательное к заполнению</span>  -->
    <input type="text" placeholder="Email" name="email" value="<?=$_REQUEST['email']?>"/><br><br>
    <!-- <span style="color:red;">* поле обязательное к заполнению</span>  -->
    <textarea placeholder="Сообщение(Задание):" name="message"><?=$_REQUEST['message']?></textarea><br><br>
</div>

<button type="submit" name="send" >Отправить сообщение</button>
</form>
</div>

<?}
else{ echo $message; };

?>
