<?
//представление личного кабинета (страница личного кабинета)
if(!$unVisibleForm):?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="login_reg"><div class="login1"><h1>Авторизация</h1>
<?endif;?>
<?

if(!$unVisibleForm):
echo $msg;
?>

<form class="login_pass" action="/enter" method="POST">
  <input type="text" name="login" placeholder="Логин" value="<?=$login?>" /><br />
  <div class="input-wrapper1">
    <input type="password" id="password1" name="pass" placeholder="Пароль" value="<?=$pass?>" /><br>
    <div class="input-icon1" id="icon_pass1" onclick="togglePassword1()"><i class="fa fa-eye" aria-hidden="true"></i></div>
  </div><br>
  <button type="submit">Вход</button>
  
</form></div>
<div class="middle_line"></div>
<?php

if(isset($_POST['login_reg']) && isset($_POST['pass_reg'])){
  $login_reg = $_POST['login_reg'];
  $pass_reg = $_POST['pass_reg'];  
  // $query = "INSERT INTO user (login, pass, role) VALUES ('$login_reg','$pass_reg', '$role_reg')";
  // $result = mysql_query($connection,$query);
  $result = mysql_query("INSERT INTO user (login, pass, role) VALUES ('$login_reg','$pass_reg', '$role_reg')");
}?>
<div class="reg1">
<h1>Регистрация</h1>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<form class="reg" method="POST">
  <input type="text" placeholder="Введите логин" name="login_reg"/>   <br />
  <div class="input-wrapper">
    <input type="password" id="password" placeholder="Введите пароль" name="pass_reg"/>
    
    <div class="input-icon" id="icon_pass" onclick="togglePassword()"><i class="fa fa-eye" aria-hidden="true"></i></div>
  </div><br>
  <button type="submit">Регистрация</button>
</div>
</form>
</div>

<script>
  function togglePassword(){
    var input = document.getElementById('password');
    
    var icon = document.getElementById('icon_pass');
    


    if (input.type === "password"){
      input.type = "text";
      icon.classList.add('selected');
    } else{
      input.type = "password";
      icon.classList.remove('selected');
    }
  }
  function togglePassword1(){
    var input1 = document.getElementById('password1');
    var icon1 = document.getElementById('icon_pass1');
    
    if (input1.type === "password"){
      input1.type = "text";
      icon1.classList.add('selected');
    } else{
      input1.type = "password";
      icon1.classList.remove('selected');
    }
  }
</script>

<?else:?>
<h1>Личный кабинет пользователя <?=$userName?></h1>
<a href="/cart">Ваши результаты</a>
<a class="logout" href="/enter?out=1">Выйти из кабинета!</a>

<?endif;?>
