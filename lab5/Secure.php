<?php
try {
    $dbh = new PDO( 'mysql:dbname=lab6', 'root', 'root');
} catch (PDOException $e) {
    echo 'Ошибка при подключении к базе данных';
    die();
}
$selectQuery = $dbh->prepare("SELECT * FROM book WHERE ID = :id");
$selectQuery->bindParam(':id', $_POST['id']);
$status = $selectQuery->execute();
if ($status) {
    $data = $selectQuery->fetchAll();
    foreach ($data as $url) {
        echo 'Название: ' . $url['name'] . '<br>';
        echo 'Автор: ' . $url['author'] . '<br><br>';
    }
} else {
    echo 'Данные не найдены.';
}