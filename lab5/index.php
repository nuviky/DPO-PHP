<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №5</title>
</head>
<body>
<div class="container">
    <h1>Подвержена SQL-инъекции</h1>
    <form id="secure_form">
        <input type="text" id="secure_input"><br>
        <button type="button" id="secure">Выполнить</button><br>
    </form>
    <div id="secure_data" class="text-success"></div>
    <h1>Не подвержена SQL-инъекции</h1>
    <form id="unsecure_form">
        <input type="text" id="unsecure_input"><br>
        <button type="button" id="unsecure">Выполнить</button><br>
    </form>
    <div id="unsecure_data" class="text-success"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
