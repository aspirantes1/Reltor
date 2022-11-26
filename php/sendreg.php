<?php

include 'reg.php';

if (empty($_POST['login']) || empty($_POST['pass'])) die('Введите логин и пароль');

echo reg($_POST['pass'], $_POST['login']);

?>