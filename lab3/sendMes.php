<?php
try {
    $dbh = new PDO( 'mysql:dbname=lab3', 'root', 'root');
} catch (PDOException $e) {
    echo 'Оошибка при подключении к базе данных';
    die();
}

$allowedTime = date("Y-m-d H:i:s", strtotime('-1 hours'));
$selectQuery = $dbh->prepare("SELECT * FROM logs WHERE email = :email AND time > :time ORDER BY time DESC");
$selectQuery->bindParam(':email', $_POST['email']);
$selectQuery->bindParam(':time', $allowedTime);
$selectQuery->execute();
$row = $selectQuery->fetchAll();

if (count($row) == 0) {
    $insertQuery = $dbh->prepare("INSERT INTO logs (surname, name, patronymic, email, phone, comment, time) VALUES (:surname, :name, :patronymic, :email, :phone, :comment, :time)");
    $fio = explode(" ", $_POST['fio']);
    $time = date("Y-m-d H:i:s");
    $insertQuery->bindParam(':surname', $fio[0]);
    $insertQuery->bindParam(':name', $fio[1]);
    $insertQuery->bindParam(':patronymic', $fio[2]);
    $insertQuery->bindParam(':email', $_POST['email']);
    $insertQuery->bindParam(':phone', $_POST['phone']);
    $insertQuery->bindParam(':comment', $_POST['comment']);
    $insertQuery->bindParam(':time', $time);
    $status = $insertQuery->execute();

    if ($status) {
        $headers = array(
            'From' => $_POST['email'],
            'Reply-to' => $_POST['email'],
            'Content-type' => 'text/html',
        );
        mail('nuviky@gmail.com', "=?utf-8?B?".base64_encode("Оповещение с сайта")."?=", $_POST['comment'], $headers);
        echo 'success';
    } else {
        echo 'Возникла ошибка при добавлении в базу данных';
    }
} else {
    $now = strtotime(date("Y-m-d H:i:s"));
    $publicationTime = strtotime($row[0]['time']);
    $timeDifference = ($now - $publicationTime) / 60;
    echo 'Повторите попытку через ' . round(60 - $timeDifference) . ' минут';
}