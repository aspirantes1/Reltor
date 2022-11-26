<?php
     $uploaddir = '/var/www/yamal.shop/img/reltor/';
     $_FILES['file']['name'] = 'reltor'.$_POST['name'].'.jpg';
     $uploadfile = $uploaddir.basename($_FILES['file']['name']);

     echo '<pre>';
     if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
         echo "Файл корректен и был успешно загружен.\n";
     } else {
         " Возможная атака с помощью файловой загрузки!\n";
     }

     echo 'Некоторая отладочная информация:';
     print_r($_FILES);
     echo $_POST['name'];
     print "</pre>";
?>