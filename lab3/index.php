<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Персональная страница</title>
</head>
<body>
<div class="container">
    <h1>Форма обратной связи</h1>
    <form id="form">
        <input type="text" id="fio" name="fio" class="form-control" placeholder="ФИО"><br>
        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail"><br>
        <input type="text" id="phone" name="phone" class="form-control "placeholder="Номер телефона"><br>
        <textarea id="comment" name="comment" class="form-control" placeholder="Комментарий"></textarea><br>
        <button type="button" id="sendMail" class="btn btn-success">Отправить</button>
    </form>
    <div id="errorMsg" class="text-danger"></div>
    <div id="userMsg" class="text-success"></div><br>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>