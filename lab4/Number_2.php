<?php
try {
    $dbh = new PDO( 'mysql:dbname=lab4', 'root', 'root');
} catch (PDOException $e) {
    echo 'Произошла ошибка при подключении к БД';
    die();
}
$selectQuery = $dbh->prepare("SELECT * FROM numb_2");
$selectQuery->execute();
$urls = $selectQuery->fetchAll();
$pattern = "/(\d+-*\d+)/";
foreach ($urls as $url) {
    $newUrlId = [];
    if (preg_match($pattern, $url['url'], $newUrlId)) {
        $newUrl = 'https://sozd.parlament.gov.ru/bill/' . $newUrlId[0];
        $updateQuery = $dbh->prepare("UPDATE numb_2 SET url = :url WHERE id = :id");
        $updateQuery->bindParam(':url', $newUrl);
        $updateQuery->bindParam(':id', $url['id']);
        $status = $updateQuery->execute();
        if ($status) {
            echo 'Ссылка ' . $url['id'] . ' - ' . $newUrl . '<br>';
        } else {
            echo 'Ссылка ' . $url['id'] . ' - Замена не произошла <br>';
        }
    } else {
        echo 'Ссылка:' . $url['id'] . ' Замена не требуется <br>';
    }
}