<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
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