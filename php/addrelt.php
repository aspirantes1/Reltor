<?php
     mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
     ini_set('error_reporting', E_ALL);
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
$connection = new mysqli('127.0.0.1', 'root', '', 'bdb'); 
$data = $connection->query('SELECT * FROM relts');

if (empty($_POST['name'])) {
     $res = 'Введите имя.';
     die('Введите имя.');
     return $res;
}

$num_rows = $data->num_rows;
if ($num_rows==0) {
     $data->close();
     read($_POST);
     die;
}

foreach ($data as $log) {
     if ($_POST['name'] == $log['name']) {
          unset($log);
          $data->close();
          $res = 'Такое имя уже существует, измените название объявления';
          die('Такое имя уже существует, измените название объявления');
          return $res;
     } 
}

read($_POST);

function read($logs) {
     $connection = new mysqli('127.0.0.1', 'root', '', 'bdb'); 
     $stmt = $connection->prepare("INSERT INTO relts (name, street, home, flat, price, actual, date) VALUES (?, ?, ?, ?, ?, ?, ?)");
     $date = date ("d.m.y \(H:i\)");
     $stmt->bind_param('sssssss', $logs['name'], $logs['street'], $logs['home'], $logs['flat'], $logs['price'], $logs['actual'], $date);
     $stmt->execute();
     $stmt->close();
     $query = $connection->prepare("SELECT * FROM relts WHERE name = ? LIMIT 1");
     $query->bind_param('s', $logs['name']);
     $query->execute(); 
     $res = $query->get_result()->fetch_array(MYSQLI_ASSOC);
     $query->close();
     $image = 'https://yamal.shop/img/reltor/reltor'.$res['id'].'.jpg';
     $stmt = $connection->prepare("UPDATE relts SET image = ? WHERE name = ?");
     $stmt->bind_param('ss', $image, $logs['name']);
     $stmt->execute();
     unset($log);
     $stmt->close();
     echo (json_encode($res));
}


?>