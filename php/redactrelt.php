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

read($_POST);

function read($logs) {
     $connection = new mysqli('127.0.0.1', 'root', '', 'bdb'); 
     $stmt = $connection->prepare("UPDATE relts SET name = ?, street = ?, home = ?, flat = ?, price = ?, actual = ?, image = ?, date = ? WHERE id = ?");
     $date = date ("d.m.y \(H:i\)");
     $image = 'https://yamal.shop/img/reltor/reltor'.$logs['id'].'.jpg';
     $stmt->bind_param('sssssssss', $logs['name'], $logs['street'], $logs['home'], $logs['flat'], $logs['price'], $logs['actual'], $image, $date, $logs['id']);
     $stmt->execute();
     $stmt->close();
     $query = $connection->prepare("SELECT * FROM relts WHERE id = ? LIMIT 1");
     $query->bind_param('s', $logs['id']);
     $query->execute(); 
     $res = $query->get_result()->fetch_array(MYSQLI_ASSOC);
     $query->close();
     echo (json_encode($res));
}


?>